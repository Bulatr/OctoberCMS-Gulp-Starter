import ShopaholicProductList from "@lovata/shopaholic-product-list/shopaholic-product-list";
import ShopaholicSorting from "@lovata/shopaholic-product-list/shopaholic-sorting";
import ShopaholicPagination from "@lovata/shopaholic-product-list/shopaholic-pagination";
import ShopaholicFilterPanel from "@lovata/shopaholic-filter-panel/shopaholic-filter-panel";
import ShopaholicFilterPrice from "@lovata/shopaholic-filter-panel/shopaholic-filter-price"
import ShopaholicCartAdd from '@lovata/shopaholic-cart/shopaholic-cart-add';
import ShopaholicCartRemove from '@lovata/shopaholic-cart/shopaholic-cart-remove';
import ShopaholicCartUpdate from '@lovata/shopaholic-cart/shopaholic-cart-update';
import ShopaholicCartShippingType from '@lovata/shopaholic-cart/shopaholic-cart-shipping-type';
import ShopaholicOrder from '@lovata/shopaholic-cart/shopaholic-order';
import UrlGeneration from "@lovata/url-generation/url-generation";

document.addEventListener("DOMContentLoaded", function() {

	// Custom JS

	/** Кастомизация select */
	let sortSelectOptions = [];
	let sortSelectOptText = [];
	let arSelectOptions = []
	let k = 0;
	$('.sort-select option').each(function(){
		sortSelectOptions[k] = $(this).val();
		arSelectOptions[k] = {
			id: k, 
			value: $(this).val()
		}
		sortSelectOptText[k] = $(this).text();
		k= k+1;
	});
	for (let i = 0 ; i < sortSelectOptions.length; i ++ ) {
		$(".custom-options-select").append("<div class='custom-option' id='custom-option-value-"+i+"' data-custom-option='"+sortSelectOptions[i]+"'>"+sortSelectOptText[i]+"</div>")
	}
	
	$(document).on({
		click: function(e){
			$(e.target.parentNode.nextElementSibling).addClass("show");
		}
	},'.custom-select__value');

	$(document).on({
		click: function(e){
			$(e.target.parentNode.parentNode.nextElementSibling).addClass("show");
		}
	},'.custom-select__icon');

	$(document).on({
		mouseenter: function(){
		},
		mouseleave: function(e) {
			$(e.currentTarget).removeClass("show")
		}
	},'.custom-options-select');

	$(document).on({
		click: function(e){
			let thisOption = e.currentTarget;
			let dataOption = thisOption.getAttribute("data-custom-option");
			let textOption = $(thisOption).text();
			const colOptions = thisOption.parentNode.previousElementSibling.previousElementSibling.children;
			$(thisOption.parentNode.previousElementSibling.children[0]).text(textOption);
			console.log(dataOption);
			console.log(textOption);
			console.log(thisOption.parentNode.previousElementSibling.children[0]);
			console.log(thisOption.parentNode.previousElementSibling.previousElementSibling.children);
			for (let i = 0; i < arSelectOptions.length; i++) {
				const obOption = arSelectOptions[i];
				let optionItemID = obOption.id;
				let dataOptionValue = obOption.value;
				if (dataOption == dataOptionValue) {
					console.log('dataOptionValue', dataOptionValue);
					SelectElement("sort-product", optionItemID, dataOptionValue);
					UrlGeneration.init();
					UrlGeneration.set("sort", [dataOptionValue]);
					UrlGeneration.update();
					$.request('ProductList::onAjaxRequest', {
						'update': {'product/catalog/product-list': '.catalog-wrapper'}
					});
					$.request('ProductList::onAjaxRequest', {
						'update': {'product-count': '.kol-item'}
					});
					
				}
				
			}
			$(".custom-options-select").removeClass("show")
		}
	},'.custom-option');

	

	function SelectElement(id, idOption, valueToSelect)
	{
		var element = document.getElementById(id);
		console.log(element.options[idOption].selected = true);
		element.options[idOption].selected = true;
		element.value = valueToSelect;
	}

	//obListHelper.send(obListHelper);
	const obListHelper = new ShopaholicProductList();	
	const obSortingHelper = new ShopaholicSorting(obListHelper);
	const obPaginationHelper = new ShopaholicPagination(obListHelper);
	const obFilterPanel = new ShopaholicFilterPanel(obListHelper);
	const obShopaholicCartAdd = new ShopaholicCartAdd();
	const obShopaholicCartRemove = new ShopaholicCartRemove();
	const obShopaholicCartShippingType = new ShopaholicCartShippingType();	
	const obShopaholicOrder = new ShopaholicOrder();
	
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
	/**
	 * suggestions
	 */

	$(document).on({
		click: function(e){
			// Замените на свой API-ключ
			var token = "ccfe718547c20f4b6a6a2be3dec9a0ff45ba49ad";

			function join(arr /*, separator */) {
			var separator = arguments.length > 1 ? arguments[1] : ", ";
			return arr.filter(function(n){return n}).join(separator);
			}

			function geoQuality(qc_geo) {
			var localization = {
				"0": "точные",
				"1": "ближайший дом",
				"2": "улица",
				"3": "населенный пункт",
				"4": "город"
			};
			return localization[qc_geo] || qc_geo;
			}

			function geoLink(address) {
			return join(["<a target=\"_blank\" href=\"", 
						"https://maps.yandex.ru/?text=", 
						address.geo_lat, ",", address.geo_lon, "\">", 
						address.geo_lat, ", ", address.geo_lon, "</a>"], "");
			}

			function showPostalCode(address) {
			$("#postcode").val(address.postal_code);
			}

			function showRegion(address) {
			$("#state").val(join([
				join([address.region_type, address.region], " "),
				join([address.area_type, address.area], " ")
			]));
			}

			function showCity(address) {
			$("#city").val(join([
				join([address.city_type, address.city], " "),
				join([address.settlement_type, address.settlement], " ")
			]));
			}

			function showStreet(address) {
			$("#street").val(
				join([address.street_type, address.street], " ")
			);
			}

			function showHouse(address) {
			$("#house").val(join([
				join([address.house_type, address.house], " "),
				join([address.block_type, address.block], " ")
			]));
			}

			function showFlat(address) {
			$("#flat").val(
				join([address.flat_type, address.flat], " ")
			);
			}

			function showGeo(address) {
			if (address.qc_geo != "5") {
				var geo = geoLink(address) + " (" + geoQuality(address.qc_geo) + ")";
				$("#geo").html(geo);
			}
			}

			function showSelected(suggestion) {
			var address = suggestion.data;
			showPostalCode(address);
			showRegion(address);
			showCity(address);
			showStreet(address);
			showHouse(address);
			showFlat(address); 
			showGeo(address);
			$(".input-hidden.address").addClass("show");
			}

			//fio
			//fam
			function setName(fio){
				$("#fam").val(
					join([fio.surname])
				)
			}

			//name
			function setFam(fio){
				$("#name").val(
					join([fio.name])
				)
			}

			//otchestvo			
			function setOtch(fio){
				$("#otchestvo").val(
					join([fio.patronymic])
				)
			}

			function fioSelected(suggestion) {
				var fio = suggestion.data;
				setFam(fio);
				setName(fio);
				setOtch(fio);
				$(".input-hidden.fio").addClass("show");
			}
			console.log(e.target.getAttribute("id"));

			//suggestion address
			if (e.target.getAttribute("id") == "full-address") {
				$("#full-address").suggestions({
					token: token,
					type: "ADDRESS",
					onSelect: showSelected
				});
			}

			// suggestion phone
			$("#phone").mask("+7(999) 999-9999");
			
			//suggestion fio
			if (e.target.getAttribute("id") == "fio") {
				$("#fio").suggestions({
					token: token,
					type: "NAME",
					onSelect: fioSelected
				});
			}

			//suggestion email
			if (e.target.getAttribute("id") == "email"){
				$("#email").suggestions({
					token: token,
					type: "EMAIL",
					onSelect: function() {
					}
				})
			}
			
		}
	},'form.steps-form');


	/**
	 * order step
	 */
	// steps
	$(document).on({
		click: function(e){	
			let nextStepId = e.target.getAttribute("data-step-next");
			nextStepId = Number(nextStepId);
			let partial = "checkout/order-steps/order-step-"+nextStepId;
			let idPartialWrapper = "#checkout-"+nextStepId;
			let stepActive = "#step-"+nextStepId+".steps__item";
			$(".steps__item").removeClass("active");		
			$(".steps-form__item").removeClass("complete");
			console.log(nextStepId);
			if (nextStepId > 0) {
				console.log(partial);
				console.log(idPartialWrapper);
				console.log(stepActive);
				if ( nextStepId > 1) {
					for (let i = 1; i < nextStepId; i++) {
						let previousActive = "#step-"+i+".steps__item";	
						let previousShowitem = "#checkout-"+i+".steps-form__item"				
						$(previousActive).addClass("active show-line");
						$(previousShowitem).addClass("complete");
						console.log(previousActive);
					}
				}
				$(stepActive).addClass("active");
				$(stepActive).removeClass("show-line");
				let update = {};
				update[partial]=idPartialWrapper
				let shiping_price = 0;
				let complete = function(){
					if (idPartialWrapper == "#checkout-3" || idPartialWrapper == "#checkout-4") {
						let shipping_type_id = $("input[name='shipping_type_id']:radio:checked").val();
						
						let shiping__value = "#shiping-value-"+shipping_type_id;
						console.log(shiping__value);
						// цена доставки
						let shiping_price_value = Number($(shiping__value).val());
						shiping_price = $(shiping__value).data("shipingPrice");

						console.log('shiping_price_value', shiping_price_value);
						console.log('shiping_price', shiping_price);
						// Расчет цены
						// get total price
						let total_price = $("#price-summary-total-value").data("positionTotalPrice");
						let summa_total_price = shiping_price_value + total_price;
						let summa_total_price_new = new Intl.NumberFormat('ru-RU').format(summa_total_price);

						console.log("total_price", total_price);
						// set summ
						$(".price-summary__value").text(summa_total_price_new);
						$(".price-total__value").text(summa_total_price_new);
						$(".price-summary__shiping").text(shiping_price);
						$("#total-price-value-order").attr("value", summa_total_price);
					}
				};
				let obUpdate = {};
				obUpdate = {update, complete};
				let ajaxHandler = 'onAjax';
				console.log('obUpdate', obUpdate);
				//запрос на загрузку partion
				$.request( ajaxHandler, obUpdate);
			} else {
				let buttonID = e.target.getAttribute("id");
				if (buttonID == "submit-order")	{
					// Отправляем заказ
					obShopaholicOrder.create();
				}
			}
		}
	},'.steps-form__item a.btn');


	/** Create Order */
	obShopaholicOrder.setAjaxRequestCallback(obRequestData => obRequestData);

	/** ShipingType */
	obShopaholicCartShippingType.setAjaxRequestCallback(obRequestData => obRequestData).init();

	/** Cart update
	 * Quantity up and down
	 *
	 *
	*/
	const obShopaholicCartUpdate = new ShopaholicCartUpdate();
	obShopaholicCartUpdate.setAjaxRequestCallback((obRequestData) => {
		obRequestData.update = {
			'header/summ_count_header': '.summ_count_wrapper',
			'product/product-card/mini-card': '.card-items',
			"cart/microcart/summary": '.summary'
		};
		return obRequestData;
	}).init();
	

	/** Cart remove */
	obShopaholicCartRemove.setAjaxRequestCallback(
		(obRequestData) =>{
			
			obRequestData.update = {
				'header/summ_count_header': '.summ_count_wrapper',
				'modal/modal-microcart': '.microcart',
				"cart/microcart/summary": '.summary'
			}
			return obRequestData;
		}
	).init();

	/** Cart add */
	obShopaholicCartAdd.setAjaxRequestCallback((obRequestData) =>{
		
		obRequestData.update = {
			'header/summ_count_header': '.summ_count_wrapper',
			'modal/modal-microcart': '.microcart'
		}
		return obRequestData;
	}).init();

	obFilterPanel.init();
	obPaginationHelper.init();
	obSortingHelper.init();

	/**
	 * Price filter
	 */

	$(document).on({
		change: function(e){
			var checked_min = [];
			var checked_max = [];
			var chechedPriceId = [];
			let dataPriceMin = 0;
			let dataPriceMax = 100000;
			let resultString = "";
			let priceFilter = "";
			UrlGeneration.init();
			$('.modal-options__wrap input[name="price"].form-check-input:checked').each(function() {
				dataPriceMin = $(this).attr("data-price-min");
				dataPriceMax = $(this).attr("data-price-max");
				priceFilter = $(this).attr("data-price-filter");
				checked_min.push( parseFloat(dataPriceMin) );
				checked_max.push( parseFloat(dataPriceMax) );
				chechedPriceId.push(priceFilter);
			});
			console.log(checked_min);
			dataPriceMin = getMinOfArray(checked_min);
			dataPriceMax = getMaxOfArray(checked_max);
			function getMaxOfArray(numArray) {
				return Math.max.apply(null, numArray);
			}
			function getMinOfArray(numArray) {
				return Math.min.apply(null, numArray);
			}
			$("input[name='filter-min-price']").attr("value", dataPriceMin);
			$("input[name='filter-max-price']").attr("value", dataPriceMax);
			if (dataPriceMin === 0 && dataPriceMax === 0 ) {
				UrlGeneration.remove("price");
				UrlGeneration.remove("price-filter");
				UrlGeneration.update();

			} else {
				UrlGeneration.set("price", [dataPriceMin, dataPriceMax]);
				UrlGeneration.set("price-filter", chechedPriceId);
				UrlGeneration.update();
			}
			$.request('ProductList::onAjaxRequest', {
				'update': {'product/catalog/product-list': '.catalog-wrapper',
				'product-count': '.kol-item'}
			});
			//resultString = "price="+dataPriceMin+"|"+dataPriceMax;
			console.log(getUrlVar());
			//pushStateUrlPrice([resultString]);
		}
	},".modal-options__wrap input[name='price'].form-check-input");

	/** set prise value in filter */
	function setDefaultPrice() {
		let result = getUrlVar();
		if (typeof result != "undefined") {
			let priceFilter = result["price-filter"];
			console.log(("price-filter" in result));
			console.log(typeof result["price-filter"] != undefined);
			if (("price-filter" in result)) {
				let arActiveCheckedId = result["price-filter"].split("|");
				for (var i = 0; i < arActiveCheckedId.length; i ++) {
					let inputID = "#price-filter-"+arActiveCheckedId[i];
					$(".modal-options__wrap input[name='price']"+inputID+".form-check-input").prop('checked', true);
				}
			}
		}
	}
	setDefaultPrice();
	/**
	 *  Функция получает из URL значения
	 */
	function getUrlVar(){
		var urlVar = window.location.search; // получаем параметры из урла
		console.log(urlVar.length);
		if (urlVar.length === 0) {
			return
		}
		var arrayVar = []; // массив для хранения переменных
		var valueAndKey = []; // массив для временного хранения значения и имени переменной
		var resultArray = []; // массив для хранения переменных
		arrayVar = (urlVar.substr(1)).split('&'); // разбираем урл на параметры
		if(arrayVar[0]=="") return false; // если нет переменных в урле
		for (var i = 0; i < arrayVar.length; i ++) { // перебираем все переменные из урла
			valueAndKey = arrayVar[i].split('='); // пишем в массив имя переменной и ее значение
			resultArray[valueAndKey[0]] = valueAndKey[1]; // пишем в итоговый массив имя переменной и ее значение
		}
		return resultArray; // возвращаем результат
	}
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
	function pushStateUrl(resultString) {
		let sBaseURL = `${location.origin}${location.pathname}`;
		history.pushState(null, null, `${sBaseURL}?${resultString}`);
		$.request('onAjax', {
			'update': {'product/offer/product-offer-list': '.property-values__select.offers'}
		});
		$.request('onAjax', {
			'update': {'product/price/price-product': '.price'}
		});
		$.request('onAjax', {
			'update': {'product/offer/offer-quantity': '.ostatok'}
		});
		$.request('onAjax', {
			'update': {'product/gallery/product-gallery': '.product-gallery'}
		});
		$.request('onAjax', {
			'update': {'product/gallery/product-gallery-modal': '.modal'}
		});
	}


	$("modal-options__wrap .color-radio label").on("click", function() {
		//$("input[type=radio].color-radio-input").trigger("click");
	})

	$(document).on("change","input[type=radio].color-radio-input", function(e){
		if ($(e.target).is(':checked')) {
			let dataProperty = $(e.target).data('PropertyId');
			console.log($(e.target).val());
		}
	})

	$('#carousel-similar-product.carousel').carousel()

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

	$(".wishlist").hover(
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

	/**
	 * Load megamenu in hover
	 */
	$(document).on({
		mouseenter: function(e){
			console.log(e);
			$(".navbar .navbar-nav .nav-item.active").removeClass("active");
			$(e.target.offsetParent).addClass("active");
			let categoryId = e.target.getAttribute("data-id");
			console.log(categoryId);
			$.request('onAjax', {
				data: {categoryId: categoryId},
				update: {'menu/mega-menu': '.mega-menu-wrapper'}
			});
		},
		mouseleave: function() {
		}
	},'.main-menu-wrapper a.nav-link');

	// Remove megamenu
	$(document).on({
	mouseenter: function(){
	},
	mouseleave: function() {
		$(".megamenu").removeClass("show").slideUp();
	}
	},'.mega-menu-wrapper');


	/**
	 * Properties
	 */
	/** Color checkbox */
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

	/** Hover cart icon */

	$(document).on({
		mouseenter: function(){

			$(".icons-wrapper .summ").addClass("show");
		},
		mouseleave: function() {
			$(".icons-wrapper .summ").removeClass("show");
		}
	},'.icons.cart-icon');

	/** add to cart
	 * 
	 */

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

	/** Remove card from cart */

	$(document).on({
		click: function(e){
			let card = e.currentTarget.parentNode.parentNode;
			$(card).addClass("slideOutRight");
			setTimeout(function(){
				$(card).attr("style", "display:none; transition: all 0.3s ease-out;")
			},600);
			
			console.log(e.currentTarget.parentNode.parentNode);
		}
	},'.collected-product ._shopaholic-cart-remove')

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
	$(".filter-icon__label").on("click", function(){
		$(".modal-overlay").addClass("active");
		$(".filter-modal").addClass("show slideInLeft");
		$(".filter-modal").removeClass("slideOutLeft");
	});

	// Microcart
	$(document).on({
		mouseenter: function(){
			$(this).find(".collected-product__content-delete-product").addClass("show")
		},
		mouseleave: function() {
			$(this).find(".collected-product__content-delete-product").removeClass("show")
		}
	}, ".collected-product");
	
	// close Microcard
	$(document).on({
		click: function(){
			$(".modal-overlay").removeClass("active");
			$(".microcart").removeClass("show");
			$(".microcart").removeClass("slideInRight");
			$(".microcart").addClass("slideOutRight");
		}
	}, ".microcart .cart-header .close");

	
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
	$(document).on({
		mouseenter: function() {
			$(".product-gallery-trumbnail.active").removeClass("active");
			let thumb_id = $(this).data("trumbid");
			$(this).addClass("active").fadeIn(800);
			$(".product-main").removeClass("active");
			$(".modal-image").removeClass("show");
			$("#"+thumb_id+".product-main").addClass("active");
		},
		mouseleave: function() {
			
		}
	}, '.product-gallery-trumbnail');

	$(document).on({
		click: function(){
			$(".product-gallery-trumbnail.active").removeClass("active");
			let thumb_id = $(this).data("trumbid");
			$(this).addClass("active");
			$(".product-main").removeClass("active");
			$("#"+thumb_id+".product-main").addClass("active");
		}
	},".product-gallery-trumbn");

	$(".product-gallery-trumbnail").click(function() {
		$(".product-gallery-trumbnail.active").removeClass("active");
		let thumb_id = $(this).data("trumbid");
		$(this).addClass("active");
		$(".product-main").removeClass("active");
		$("#"+thumb_id+".product-main").addClass("active");
	});

	/** Modal images for product page */
	$(document).on({
		click: function() {
			let idimg = $(this).attr("id");
			console.log("#"+idimg+".modal-image")
			$(".modal-image.show").removeClass("show");
			$("#"+idimg+".modal-image").addClass("show");
			$(".modal-overlay").addClass("active");
			$(".modal").addClass("show");
		}
	}, ".product-gallery .product-gallery-wrapper .product-main");

	$(document).on({
		click: function(){
			$(".modal-overlay").removeClass("active");
			$(".modal").removeClass("show");
		}
	}, ".modal-header .close")	

	$(document).on({
		mouseenter: function () {  
			let thumb_id = $(this).attr("id");
			$(".modal-image").removeClass("show");
			$("#"+thumb_id+".modal-image").addClass("show")
		},
		mouseleave: function() {
			$(this).removeClass("active");
		}
	},".modal-thumb-image")
	
	/** Modal overlay */
	$(document).on({
		click: function(){
			$(".modal-overlay").removeClass("active");
			$(".modal").removeClass("show");
			$(".filter-modal").removeClass("show");
			$(".filter-modal").removeClass("slideInLeft");
			$(".filter-modal").addClass("slideOutLeft");
			$(".microcart").removeClass("show");
			$(".microcart").removeClass("slideInRight");
			$(".microcart").addClass("slideOutRight");
		}
	}, ".modal-overlay");
	

	

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




