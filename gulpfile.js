// VARIABLES & PATHS

let localhost    = 'hatan.loc', // Local domain
    preprocessor = 'sass', // Preprocessor (sass, scss, less, styl) / Preprocessor folder name / Module require const name. Example: themes/mytheme/assets/scss/
    theme        = 'hatan', // Theme folder name
    fileswatch   = 'html,htm,php,txt,yaml,twig,json,md', // List of files extensions for watching & hard reload (comma separated)
    online       = false; // If «false» - Browsersync will work offline without internet connection

let paths = {

	plugins: {
		src: [
			 	'node_modules/jquery/dist/jquery.min.js', // npm vendor example (npm i --save-dev jquery)
			 	'node_modules/bootstrap/dist/js/bootstrap.min.js',
				'node_modules/lazyload/lazyload.min.js', // 				
				'modules/system/assets/js/framework.js', // {% framework extras %}
				'modules/system/assets/js/framework.extras.js', // {% framework extras %}
				//'node_modules/@lovata/shopaholic-product-list/shopaholic-product-list.js',//
				//'node_modules/@lovata/url-generation/url-generation.js',
				//'node_modules/@lovata/shopaholic-product-list/shopaholic-sorting.js',
				//'node_modules/@lovata/shopaholic-product-list/shopaholic-pagination.js',
			// 'plugins/nms/plugin/assets/js/plugin.js', // Plugin script example
		]
	},

	userscripts: {
		src: [
			'themes/' + theme + '/assets/js/app.js', // Theme app.js. Always at the end
		]
	},

	deploy: {
		hostname:    'username@yousite.com', // Deploy hostname
		destination: 'yousite/public_html/', // Deploy destination
		include:     [ '*.htaccess', ], // Included files to deploy
		exclude:     [ // Excluded files from deploy
			'storage/*.sqlite',
			'**/Thumbs.db',
			'**/*.DS_Store',
			'node_modules',
			'gulpfile.js',
			'package.json',
			'package-lock.json',
			'npm-debug.log',
			'themes/' + theme + '/assets/js/app.js',
			'themes/' + theme + '/assets/' + preprocessor,
		],
	},
	cssOutputName: 'hatan.min.css',
	jsOutputName:  'hatan.min.js',

}

// LOGIC

const { src, dest, parallel, series, watch } = require('gulp');
const sass         = require('gulp-sass');
const scss         = require('gulp-sass');
const less         = require('gulp-less');
const styl         = require('gulp-stylus');
const cleancss     = require('gulp-clean-css');
const concat       = require('gulp-concat');
const browserSync  = require('browser-sync').create();
const babel        = require('gulp-babel');
const sourcemaps 	= require('gulp-sourcemaps');
const uglify       = require('gulp-uglify');
const autoprefixer = require('gulp-autoprefixer');
const rsync        = require('gulp-rsync');
var webpack 		= require('webpack');
const webpackStream 		= require('webpack-stream');

function browsersync() {
	browserSync.init({
		proxy: localhost,
		notify: false,
		online: online
	})
}

function plugins() {
	if (paths.plugins.src != '') {
		return src(paths.plugins.src)
		.pipe(concat('plugins.tmp.js'))
		.pipe(dest('themes/' + theme + '/assets/js/_tmp'))
	} else {
		async function createFile() {
			require('fs').writeFileSync('themes/' + theme + '/assets/js/_tmp/plugins.tmp.js', '');
		}; return createFile();
	}
}

function userscripts() {
	return src(paths.userscripts.src)
	.pipe(webpackStream(
		{
		watch: false,
		output: {
		filename: 'userscripts.tmp.js',
			},
		module: {  // where we defined file patterns and their loaders
			rules: [ 
			]
		},
		mode: "development"
		}
	),webpack)
	.pipe(babel({ presets: ["@babel/env"] }))
	.pipe(concat('userscripts.tmp.js'))
	.pipe(dest('themes/' + theme + '/assets/js/_tmp'))
}

function scripts() {
	return src([
		'themes/' + theme + '/assets/js/_tmp/plugins.tmp.js',
		'themes/' + theme + '/assets/js/_tmp/userscripts.tmp.js'
	])
	//.pipe(sourcemaps.init())	
	.pipe(concat(paths.jsOutputName))
	.pipe(uglify())
	//.pipe(sourcemaps.write('maps'))
	.pipe(dest('themes/' + theme + '/assets/js'))
}

function styles() {
	return src('themes/' + theme + '/assets/' + preprocessor + '/main.*')
	.pipe(eval(preprocessor)())
	.pipe(concat(paths.cssOutputName))
	.pipe(autoprefixer({ overrideBrowserslist: ['last 10 versions'], grid: true }))
	.pipe(cleancss({ level: { 1: { specialComments: 0 } },/* format: 'beautify' */ }))
	.pipe(dest('themes/' + theme + '/assets/css'))
	.pipe(browserSync.stream())
}

function deploy() {
	return src('/')
	.pipe(rsync({
		root: '/',
		hostname: paths.deploy.hostname,
		destination: paths.deploy.destination,
		include: paths.deploy.include,
		exclude: paths.deploy.exclude,
		recursive: true,
		archive: true,
		silent: false,
		compress: true
	}))
}

function startwatch() {
	watch('themes/' + theme + '/assets/' + preprocessor + '/**/*', {usePolling: true}, styles);
	watch(['themes/' + theme + '/**/*.{' + fileswatch + '}', 'plugins/**/*.{' + fileswatch + '}'], {usePolling: true}).on('change', browserSync.reload);
	watch(['themes/'  + theme + '/assets/js/**/*.js', '!themes/' + theme + '/assets/js/**/*.min.js', '!themes/' + theme + '/assets/js/**/*.tmp.js', 'themes/'  + theme + '/assets/vendor/**/*.js'], {usePolling: true}, series(plugins, userscripts, scripts)).on('change', browserSync.reload);
}

function scriptwatch() {
	watch(
			['themes/'  + theme + '/assets/js/**/*.js', '!themes/' + theme + '/assets/js/**/*.min.js', '!themes/' + theme + '/assets/js/**/*.tmp.js', 'themes/'  + theme + '/assets/vendor/**/*.js'], 
			{usePolling: true}, 
			series(plugins, userscripts, scripts)
		)
}

function watchstyles() {
	watch('themes/' + theme + '/assets/' + preprocessor + '/**/*', {usePolling: true}, styles);
}

function watchonlyscriptsandstyles() {
	watch(
		['themes/'  + theme + '/assets/js/**/*.js', '!themes/' + theme + '/assets/js/**/*.min.js', '!themes/' + theme + '/assets/js/**/*.tmp.js', 'themes/'  + theme + '/assets/vendor/**/*.js'], 
		{usePolling: true}, 
		series(plugins, userscripts, scripts)
	);
	watch('themes/' + theme + '/assets/' + preprocessor + '/**/*', {usePolling: true}, styles);
}

exports.scriptwatch = scriptwatch;
exports.browsersync = browsersync;
exports.scripts     = series(plugins, userscripts, scripts);
exports.assets      = parallel(styles, plugins, userscripts, scripts);
exports.styles      = styles;
exports.deploy      = deploy;
exports.default     = series(plugins, userscripts, scripts, styles, parallel(browsersync, startwatch));
exports.startstyles	=	series(styles,parallel(browsersync,watchstyles));
exports.startwatch 	= startwatch;
exports.watchonlyscriptsandstyles = watchonlyscriptsandstyles;
