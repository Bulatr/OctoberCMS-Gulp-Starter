document.addEventListener("DOMContentLoaded", function() {

	// Custom JS
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
	)

	// nav
	$(".main-menu-wrapper .nav-item .nav-link").click(function() {
		// Убираем класс show у Megamenu
		$(".megamenu").removeClass("show");
		// Убираем нижнию черту у активного элемента
		$(".navbar .navbar-nav .nav-item.active").removeClass("active");

		let mainItem = $(this).data('mainmenuitem');
		console.log(mainItem);
		// add class show megamenu
		let megaitem = $("#"+mainItem).addClass("show");

		console.log($(this).closest('li'));
		// add class active nav-item
		$(this).closest('li').addClass("active");
		
	});

	$('#color-radio input').on('click', function() {
		var clk = $('input:checked', '#myForm').val();
		$('.color-radio .wrapper-radio').find('label').removeClass('input-checked');
		$(this).parent('label').addClass('input-checked');
		$('#test').html('clciked on '+clk);
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
	})

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
	})
	// Click to cart

	$(".icons.cart-icon").click(function(){
		// Проверяем заполнена ли корзина
		let filled = $(this).attr("data-cartfilled");
		console.log(filled);
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

	
	//Megamenu

	$( ".megamenu" ).hover(
		function() {
		//$( this ).addClass("show") ;
		}, function() {
		$( this ).removeClass("show") ;
		}
	);
	
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
	})

	$(".modal-header .close").click(function() {
		$(".modal-overlay").removeClass("active");
		$(".modal").removeClass("show");
	})

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
	})
	
	$(".count-wrap .count-down").on("click", function(e){
		let input_col = e.target.previousElementSibling;
		var var_count = Number($(input_col).val());
		var_count = var_count-1;
		if (var_count == 0) {var_count = 1}
		input_col.value = var_count;
	})

	
});



$(".search-wrapper").mouseup(function (e){ // событие клика по веб-документу
	var div = $(".icon-search"); // тут указываем ID элемента
	var inp = $(".search-wrapper .form-inline.custom input.form-control");
	if (!div.is(e.target) // если клик был не по нашему блоку
		&& div.has(e.target).length === 0 && !inp.is(e.target)) { // и не по его дочерним элементам
		$(".search-wrapper").removeClass("show"); // скрываем его
		//console.log(e.target);
	} else {
		$(".search-wrapper").addClass("show");
	}
	var div_tg = $(".icons-toggle"); // тут указываем ID элемента
	if (!div_tg.is(e.target) // если клик был не по нашему блоку
		&& div_tg.has(e.target).length === 0 ) { // и не по его дочерним элементам
		$(".icons-wrapper").removeClass("show"); // скрываем его
		//console.log(e.target);
	} else {
		$(".icons-wrapper").addClass("show");
	}
});