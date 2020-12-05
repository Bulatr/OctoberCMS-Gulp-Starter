import ShopaholicProductList from "@lovata/shopaholic-product-list/shopaholic-product-list";
import ShopaholicSorting from "@lovata/shopaholic-product-list/shopaholic-sorting";
import ShopaholicPagination from "@lovata/shopaholic-product-list/shopaholic-pagination";
import ShopaholicFilterPanel from "@lovata/shopaholic-filter-panel/shopaholic-filter-panel";

document.addEventListener("DOMContentLoaded", function() {

	// Custom JS

	/**
	 * Загрузка меню
	 * при при клике
	 */
	$('.main-menu-wrapper a.nav-link').on("click", function() {
		$.request('onAjax', {
			update: {'menu/mega-menu': '.mega-menu-wrapper'}
			
		});
		
	});
	
	// Конец блока меню
	const obListHelper = new ShopaholicProductList();
	
	obListHelper.setAjaxRequestCallback((obRequestData) => {
		$.request('ProductList::onAjaxRequest', {
			'update': {'product/catalog/product-list': '.catalog-wrapper'}
		});
		$.request('ProductList::onAjaxRequest', {
			'update': {'product-count': '.kol-item'}
		});
		
		obRequestData.update = {
			'product/catalog/product-list': `.catalog_wrapper`
		};
		
		return obRequestData;
	});

	
	//obListHelper.send(obListHelper);
		
	const obSortingHelper = new ShopaholicSorting(obListHelper);
	const obPaginationHelper = new ShopaholicPagination(obListHelper);
	const obFilterPanel = new ShopaholicFilterPanel(obListHelper);

	obFilterPanel.init();
	obPaginationHelper.init();
	obSortingHelper.init();
	
	/**
	 * Обработка фильтра на странице продукта
	 */
	const arValue = [];
	arValue[0] = "";
	arValue[1] = "";
	let resultString = "";
	
	$(".property-values-wrapper").on("change", "select.property-values__select", function(e){
		/** ! добавление в строку браузера параметров */
		//history.pushState(null, null, `${this.sBaseURL}?${this.sSearchString}`);
		let Value = $(e.target).val();
		let idParam = $(e.target).data("propertyId");
		arValue[0] = ("property["+idParam+"]="+Value);
		if (arValue[1] == "") {
			resultString = arValue[0];
		} else {
			resultString = arValue[0]+"&"+arValue[1];
		}
		pushStateUrl(resultString);		
	});

	$(".property-values-wrapper").on("change", ".wrapper-radio input[type=radio]", function(e){
		let Value = $(e.target).val();
		let idParam = $(e.target).data("propertyId");
		arValue[1] = ("property["+idParam+"]="+Value);
		if (arValue[0] == "") {
			resultString = arValue[1];
		} else {
			resultString = arValue[0]+"&"+arValue[1];
		}
		pushStateUrl(resultString);
		
	});

	/**
	 * Функция меняет URL на странице продукта при использовании фильтра
	 * и меняет доступные офферы
	 *  pushState
	 */
	function pushStateUrl(resultstring) {
		let sBaseURL = `${location.origin}${location.pathname}`;
		history.pushState(null, null, `${sBaseURL}?${resultString}`);
		$.request('onAjax', {
			'update': {'product/offer/product-offer-list': '.property-values__select.offers'}
		});
		$.request('onAjax', {
			'update': {'product/price/price-product': '.price'}
		});
	}

	/**
	 *  parse URL
	 */
	function parseRequestValue(arValueList)
    {
        if (empty(arValueList)) {
            return [];
		}
		arValueList.forEach(function(sValue,iKey,arValueList){
			arValueList[iKey] = explode('|', sValue);
		})
        
        return arValueList;
    }


	$("modal-options__wrap .color-radio label").on("click", function() {
		//$("input[type=radio].color-radio-input").trigger("click");		
	})

	$(document).on("change","input[type=radio].color-radio-input", function(e){
				
		if ($(e.target).is(':checked')) {
			let dataProperty = $(e.target).data('PropertyId');
			console.log($(e.target).val());
		}
		//$('input[type=radio].color-radio-input').prop("checked", false);
		
		
		
		//$("input[type=radio].color-radio-input").prop('checked', true);
	})
	
	//Ajax filtration
		/*
	$('body').on('change', 'input.form-check-input', function (e) {
		console.log(e);
		$('.wrapper-overlay.card-container').request('ProductList::onAjaxRequest', {
			'update': {'product/catalog/product-list': '.catalog-wrapper'}
		});
	});

	//Ajax pagination (product list)
	$('body').on('click', '.pagination a._shopaholic-pagination', function (e) {

		e.preventDefault();
		var _this = $(e.currentTarget),
			iPage = _this.attr('data-page');

		$('.card-container').request('ProductList::onAjaxRequest', {
			'data': {'page': iPage},
			'update': {'product/catalog/product-list': '.catalog-wrapper'}
		});
	});

	//Ajax filtration and sorting
	$('body').on('change', 'select.sort-select', function (e) {
		console.log(e);
		$('.card-container').request('ProductList::onAjaxRequest', {
			'update': {'product/catalog/product-list': '.catalog-wrapper'}
		});
	});
	*/
	var myCarousel = document.querySelector('#myCarousel');
	
	$( ".product-card" ).hover(
		function() {
		$( this ).addClass("active") ;		
		}, function() {
		$( this ).removeClass("active") ;
		}
	);

	$( ".card-gallery" ).hover(
		function() {
		$( this ).addClass("active") ;		
		}, function() {
		$( this ).removeClass("active") ;
		}
	);

	// wishlist

	$(".wishlist .hearth img").hover(
		function(e){			
			$(this).addClass("bounceIn")
		},
		function(e) {			
			$(this).removeClass("bounceIn")
		}
	);

	/**
	 * Main menu
	 */
	$(".main-menu-wrapper .nav-item .nav-link").click(function() {
		$(".mega-menu-wrapper").addClass("show");
		
		// Убираем класс show у Megamenu
		$(".megamenu").removeClass("show").slideUp();
		// Убираем нижнию черту у активного элемента
		$(".navbar .navbar-nav .nav-item.active").removeClass("active");

		let mainItem = $(this).data('mainmenuitem');
		
		// add class show megamenu
		$("#"+mainItem).addClass("show");

		console.log($(this).closest('li'));
		// add class active nav-item
		$(this).closest('li').addClass("active");
		
	});

	//Megamenu

	$(document).on("mouseover", function(e){
		
		let targetClass = $(e.target).attr('class');
		
		if (targetClass == "mega-menu-wrapper show") {
			
			$(".mega-menu-wrapper").removeClass("show");
			$(".megamenu").removeClass("show");
		}
		
		
	});

	/**
	 * Properties
	 */

	$('#color-radio input').on('click', function() {
		var clk = $('input:checked', '#myForm').val();
		$('.color-radio .wrapper-radio').find('label').removeClass('input-checked');
		$(this).parent('label').addClass('input-checked');
	});

	// show collapse form

	$("#show-sposob-oplaty").on("click", function(e){
		e.preventDefault();
		$(".form-collapse").addClass("show");
	});

	$("#remove-sposob-oplaty").on("click", function(e){
		e.preventDefault();
		$(".form-collapse").removeClass("show");
	});

	// hover table

	$(".table-container.hovered .table-container__row").on("mouseover", function() {
		$(this).addClass("active");
	});

	$(".table-container.hovered .table-container__row").on("mouseout", function() {
		$(this).removeClass("active");
	});

	// add to cart

	$("#addtocart").click(function(e){
		e.preventDefault();
		$(".icons.cart-icon").attr("data-cartfilled","yes");
		$(".icons.cart-icon .cart.show").removeClass("show");
		$(".icons.cart-icon .cart.added").addClass("show").addClass("bounce").addClass("animated");
		setTimeout(function(){
			$(".icons.cart-icon .cart.added").removeClass("show")
		},3000);
		setTimeout(function(){
			$(".icons.cart-icon .cart.filled").addClass("show")
		},3000);		
	}); 

	$(".product-card .cart").click(function(e){
		e.preventDefault();
		$(".icons.cart-icon").attr("data-cartfilled","yes");
		$(".icons.cart-icon .cart.show").removeClass("show");
		$(".icons.cart-icon .cart.added").addClass("show").addClass("bounce").addClass("animated");
		setTimeout(function(){
			$(".icons.cart-icon .cart.added").removeClass("show")
		},3000);
		setTimeout(function(){
			$(".icons.cart-icon .cart.filled").addClass("show")
		},3000);		
	});
	// Click to cart

	$(".icons.cart-icon").click(function(){
		// Проверяем заполнена ли корзина
		let filled = $(this).attr("data-cartfilled");
		
		// Если заполнена
		if (filled == "yes") {
			$(".microcart .cart-empty").removeClass("show");
			$(".microcart .cart-filled").addClass("show");

		} else {
			// не заполнена
			$(".microcart .cart-empty").addClass("show");
			$(".microcart .cart-filled").removeClass("show");
		}
		$(".modal-overlay").addClass("active");
		$(".microcart").addClass("show slideInRight");
		$(".microcart").removeClass("slideOutRight");
		
	});

	// click to filter

	$(".filter-icon__image img").on("click", function(){
		$(".modal-overlay").addClass("active");
		$(".filter-modal").addClass("show slideInLeft");
		$(".filter-modal").removeClass("slideOutLeft");
	});

	// Microcart

	$(".collected-product").hover(function(){
		$(this).find(".collected-product__content-delete-product").addClass("show")
	},
	function(){
		$(this).find(".collected-product__content-delete-product").removeClass("show")
	});

	// close Microcard

	$(".microcart .cart-header .close").click(function(){
		$(".modal-overlay").removeClass("active");
		$(".microcart").removeClass("show");
		$(".microcart").removeClass("slideInRight");
		$(".microcart").addClass("slideOutRight");
	});

	// close filter

	$(".filter-modal .close").on("click", function(){
		$(".modal-overlay").removeClass("active");
		$(".filter-modal").removeClass("show");
		$(".filter-modal").removeClass("slideInLeft");
		$(".filter-modal").addClass("slideOutLeft");
	});
	// Readmore

	
	$(".read-more a.button.text").click(function(e) {
		e.preventDefault();
		$(".review-all-collapse").toggleClass("show");
		let data_event = $(this).data("eventclick");
		if (data_event == "open") {
			$(".read-more a.button.text").html("Свернуть");
			$(".read-more a.button.text").data("eventclick","close");
		} else {
			$(".read-more a.button.text").html("Читать далее");
			$(".read-more a.button.text").data("eventclick","open");
		}
		
	});
	
	// product thumbnail

	$(".product-gallery-trumbnail").hover(
		function() {
			$(".product-gallery-trumbnail.active").removeClass("active");
			let thumb_id = $(this).data("trumbid");
			$(this).addClass("active");
			$(".product-main").removeClass("active");
			$(".modal-image").removeClass("show");
			$("#"+thumb_id+".product-main").addClass("active");
		},
		function() {
			//$(this).removeClass("active");
		}
	);

	$(".product-gallery-trumbnail").click(function() {
		$(".product-gallery-trumbnail.active").removeClass("active");
			let thumb_id = $(this).data("trumbid");
			$(this).addClass("active");
			$(".product-main").removeClass("active");
			$("#"+thumb_id+".product-main").addClass("active");
	});

	// modal
	$(".product-gallery .product-gallery-wrapper .product-main").click(function(el) {
		let idimg = $(this).attr("id");
		console.log("#"+idimg+".modal-image")
		$(".modal-image.show").removeClass("show");
		$("#"+idimg+".modal-image").addClass("show");
		$(".modal-overlay").addClass("active");
		$(".modal").addClass("show");
	});
	
	$(".modal-overlay").click(function() {
		$(".modal-overlay").removeClass("active");
		$(".modal").removeClass("show");
		$(".filter-modal").removeClass("show");
		$(".filter-modal").removeClass("slideInLeft");
		$(".filter-modal").addClass("slideOutLeft");
		$(".microcart").removeClass("show");
		$(".microcart").removeClass("slideInRight");
		$(".microcart").addClass("slideOutRight");
	});

	$(".modal-header .close").click(function() {
		$(".modal-overlay").removeClass("active");
		$(".modal").removeClass("show");
	});

	function getidimages() {
		let element = document.querySelectorAll(".modal-wrap-images");
		let images = [];
		let images_id = [];
		for (let elem of element) {
			images = elem.children;
		}
		for (let img of images) {
			images_id.push($(img).attr("id"))			
		}
		return images_id // Возвращает массив id
	};

	

	$("#modal-image-left").click(function(){
		
		let id_elem = getidimages();
		let indx = 0;
		let active_id = $(".modal-image.show").attr("id");
		let lenght_id_elem = id_elem.length;
		id_elem.forEach(function(item, i, id_elem) {			
			if (item == active_id) {
				indx = Number(i)-1;
				if (indx < 0) { 
					indx = lenght_id_elem-1;
				}
				$(".modal-image.show").removeClass("show");
				$("#"+id_elem[indx]+".modal-image").addClass("show");
			}
		});		
	});
	$("#modal-image-right").click(function(){
		let id_elem = getidimages();
		let indx = 0;
		let active_id = $(".modal-image.show").attr("id");
		let lenght_id_elem = id_elem.length;
		id_elem.forEach(function(item, i, id_elem) {			
			if (item == active_id) {
				indx = Number(i)+1;
				if (indx > lenght_id_elem-1) { 
					indx = 0;
				}
				$(".modal-image.show").removeClass("show");
				$("#"+id_elem[indx]+".modal-image").addClass("show");
			}
		});	
	});

	$(".modal-thumb-image").hover(
		function() {
			let thumb_id = $(this).attr("id");
			$(".modal-image").removeClass("show");
			$("#"+thumb_id+".modal-image").addClass("show")
		},
		function() {
			$(this).removeClass("active");
		}
	);

	
	$(".navbar .navbar-toggler .navbar-toggler-icon").click(function() {
		$(".megamenu").removeClass("show");		
	});

	$(".tab-item").click(function(e) {
		e.preventDefault();
		let target = e.currentTarget;
		let this_tab = $(target).data("tab");
		$(".tab-item").removeClass("active");
		$(target).addClass("active");
		let tab_content = $("#"+this_tab+".tab-content-item");
		$(".tab-content-item").removeClass("show");
		tab_content.addClass("show");
		console.log($(e.currentTarget).data("tab"));
		console.log(this_tab);
		console.log("tab_content "+tab_content);
	});

	// Изменение количества товара
	
	$(".count-wrap .count-up").on("click", function(e){
		let input_col = e.target.nextElementSibling;
		var var_count = Number($(input_col).val());
		var_count = var_count+1;
		input_col.value = var_count;
	});
	
	$(".count-wrap .count-down").on("click", function(e){
		let input_col = e.target.previousElementSibling;
		var var_count = Number($(input_col).val());
		var_count = var_count-1;
		if (var_count == 0) {var_count = 1}
		input_col.value = var_count;
	});

	/**
	 * Закрытие дополнительного меню
	 */
	$(document).mouseup(function (e){ // событие клика по веб-документу
		var div = $(".icon-search"); // тут указываем ID элемента
		var inp = $(".search-wrapper .form-inline.custom input.form-control");
		var div_tg = $(".icons-toggle"); // тут указываем ID элемента
		var targetClass = $(e.target).attr("class");
		
		if (!div.is(e.target) // если клик был не по нашему блоку
			&& div.has(e.target).length === 0 && !inp.is(e.target)) { // и не по его дочерним элементам
			$(".search-wrapper").removeClass("show"); // скрываем его
			//console.log(e.target);
		} else {
			
			$(".search-wrapper").addClass("show");
		}
		
		if (!div_tg.is(e.target) // если клик был не по нашему блоку
			&& div_tg.has(e.target).length === 0 ) { // и не по его дочерним элементам
			$(".icons-wrapper").removeClass("show"); // скрываем его
			div_tg.removeClass('show');
			//console.log(e.target);
		} else {
			
			if (targetClass == "icons-toggle show") {
				$(".icons-wrapper").removeClass("show");
				div_tg.removeClass('show');
			} else {
				$(".icons-wrapper").addClass("show");
				div_tg.addClass("show");
			}
			
		}
	});

	
});




