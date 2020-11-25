"use strict";

function _createForOfIteratorHelper(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

document.addEventListener("DOMContentLoaded", function () {
  // Custom JS
  var myCarousel = document.querySelector('#myCarousel');
  $(".product-card").hover(function () {
    $(this).addClass("active");
  }, function () {
    $(this).removeClass("active");
  });
  $(".card-gallery").hover(function () {
    $(this).addClass("active");
  }, function () {
    $(this).removeClass("active");
  }); // wishlist

  $(".wishlist .hearth img").hover(function (e) {
    $(this).addClass("bounceIn");
  }, function (e) {
    $(this).removeClass("bounceIn");
  }); // nav

  $(".main-menu-wrapper .nav-item .nav-link").click(function () {
    // Убираем класс show у Megamenu
    $(".megamenu").removeClass("show"); // Убираем нижнию черту у активного элемента

    $(".navbar .navbar-nav .nav-item.active").removeClass("active");
    var mainItem = $(this).data('mainmenuitem');
    console.log(mainItem); // add class show megamenu

    var megaitem = $("#" + mainItem).addClass("show");
    console.log($(this).closest('li')); // add class active nav-item

    $(this).closest('li').addClass("active");
  });
  $('#color-radio input').on('click', function () {
    var clk = $('input:checked', '#myForm').val();
    $('.color-radio .wrapper-radio').find('label').removeClass('input-checked');
    $(this).parent('label').addClass('input-checked');
    $('#test').html('clciked on ' + clk);
  }); // show collapse form

  $("#show-sposob-oplaty").on("click", function (e) {
    e.preventDefault();
    $(".form-collapse").addClass("show");
  });
  $("#remove-sposob-oplaty").on("click", function (e) {
    e.preventDefault();
    $(".form-collapse").removeClass("show");
  }); // hover table

  $(".table-container.hovered .table-container__row").on("mouseover", function () {
    $(this).addClass("active");
  });
  $(".table-container.hovered .table-container__row").on("mouseout", function () {
    $(this).removeClass("active");
  }); // add to cart

  $("#addtocart").click(function (e) {
    e.preventDefault();
    $(".icons.cart-icon").attr("data-cartfilled", "yes");
    $(".icons.cart-icon .cart.show").removeClass("show");
    $(".icons.cart-icon .cart.added").addClass("show").addClass("bounce").addClass("animated");
    setTimeout(function () {
      $(".icons.cart-icon .cart.added").removeClass("show");
    }, 3000);
    setTimeout(function () {
      $(".icons.cart-icon .cart.filled").addClass("show");
    }, 3000);
  });
  $(".product-card .cart").click(function (e) {
    e.preventDefault();
    $(".icons.cart-icon").attr("data-cartfilled", "yes");
    $(".icons.cart-icon .cart.show").removeClass("show");
    $(".icons.cart-icon .cart.added").addClass("show").addClass("bounce").addClass("animated");
    setTimeout(function () {
      $(".icons.cart-icon .cart.added").removeClass("show");
    }, 3000);
    setTimeout(function () {
      $(".icons.cart-icon .cart.filled").addClass("show");
    }, 3000);
  }); // Click to cart

  $(".icons.cart-icon").click(function () {
    // Проверяем заполнена ли корзина
    var filled = $(this).attr("data-cartfilled");
    console.log(filled); // Если заполнена

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
  }); // click to filter

  $(".filter-icon__image img").on("click", function () {
    $(".modal-overlay").addClass("active");
    $(".filter-modal").addClass("show slideInLeft");
    $(".filter-modal").removeClass("slideOutLeft");
  }); // Microcart

  $(".collected-product").hover(function () {
    $(this).find(".collected-product__content-delete-product").addClass("show");
  }, function () {
    $(this).find(".collected-product__content-delete-product").removeClass("show");
  }); // close Microcard

  $(".microcart .cart-header .close").click(function () {
    $(".modal-overlay").removeClass("active");
    $(".microcart").removeClass("show");
    $(".microcart").removeClass("slideInRight");
    $(".microcart").addClass("slideOutRight");
  }); // close filter

  $(".filter-modal .close").on("click", function () {
    $(".modal-overlay").removeClass("active");
    $(".filter-modal").removeClass("show");
    $(".filter-modal").removeClass("slideInLeft");
    $(".filter-modal").addClass("slideOutLeft");
  }); // Readmore

  $(".read-more a.button.text").click(function (e) {
    e.preventDefault();
    $(".review-all-collapse").toggleClass("show");
    var data_event = $(this).data("eventclick");

    if (data_event == "open") {
      $(".read-more a.button.text").html("Свернуть");
      $(".read-more a.button.text").data("eventclick", "close");
    } else {
      $(".read-more a.button.text").html("Читать далее");
      $(".read-more a.button.text").data("eventclick", "open");
    }
  }); //Megamenu

  $(".megamenu").hover(function () {//$( this ).addClass("show") ;
  }, function () {
    $(this).removeClass("show");
  }); // product thumbnail

  $(".product-gallery-trumbnail").hover(function () {
    $(".product-gallery-trumbnail.active").removeClass("active");
    var thumb_id = $(this).data("trumbid");
    $(this).addClass("active");
    $(".product-main").removeClass("active");
    $(".modal-image").removeClass("show");
    $("#" + thumb_id + ".product-main").addClass("active");
  }, function () {//$(this).removeClass("active");
  });
  $(".product-gallery-trumbnail").click(function () {
    $(".product-gallery-trumbnail.active").removeClass("active");
    var thumb_id = $(this).data("trumbid");
    $(this).addClass("active");
    $(".product-main").removeClass("active");
    $("#" + thumb_id + ".product-main").addClass("active");
  }); // modal

  $(".product-gallery .product-gallery-wrapper .product-main").click(function (el) {
    var idimg = $(this).attr("id");
    console.log("#" + idimg + ".modal-image");
    $(".modal-image.show").removeClass("show");
    $("#" + idimg + ".modal-image").addClass("show");
    $(".modal-overlay").addClass("active");
    $(".modal").addClass("show");
  });
  $(".modal-overlay").click(function () {
    $(".modal-overlay").removeClass("active");
    $(".modal").removeClass("show");
    $(".filter-modal").removeClass("show");
    $(".filter-modal").removeClass("slideInLeft");
    $(".filter-modal").addClass("slideOutLeft");
    $(".microcart").removeClass("show");
    $(".microcart").removeClass("slideInRight");
    $(".microcart").addClass("slideOutRight");
  });
  $(".modal-header .close").click(function () {
    $(".modal-overlay").removeClass("active");
    $(".modal").removeClass("show");
  });

  function getidimages() {
    var element = document.querySelectorAll(".modal-wrap-images");
    var images = [];
    var images_id = [];

    var _iterator = _createForOfIteratorHelper(element),
        _step;

    try {
      for (_iterator.s(); !(_step = _iterator.n()).done;) {
        var elem = _step.value;
        images = elem.children;
      }
    } catch (err) {
      _iterator.e(err);
    } finally {
      _iterator.f();
    }

    var _iterator2 = _createForOfIteratorHelper(images),
        _step2;

    try {
      for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
        var img = _step2.value;
        images_id.push($(img).attr("id"));
      }
    } catch (err) {
      _iterator2.e(err);
    } finally {
      _iterator2.f();
    }

    return images_id; // Возвращает массив id
  }

  ;
  $("#modal-image-left").click(function () {
    var id_elem = getidimages();
    var indx = 0;
    var active_id = $(".modal-image.show").attr("id");
    var lenght_id_elem = id_elem.length;
    id_elem.forEach(function (item, i, id_elem) {
      if (item == active_id) {
        indx = Number(i) - 1;

        if (indx < 0) {
          indx = lenght_id_elem - 1;
        }

        $(".modal-image.show").removeClass("show");
        $("#" + id_elem[indx] + ".modal-image").addClass("show");
      }
    });
  });
  $("#modal-image-right").click(function () {
    var id_elem = getidimages();
    var indx = 0;
    var active_id = $(".modal-image.show").attr("id");
    var lenght_id_elem = id_elem.length;
    id_elem.forEach(function (item, i, id_elem) {
      if (item == active_id) {
        indx = Number(i) + 1;

        if (indx > lenght_id_elem - 1) {
          indx = 0;
        }

        $(".modal-image.show").removeClass("show");
        $("#" + id_elem[indx] + ".modal-image").addClass("show");
      }
    });
  });
  $(".modal-thumb-image").hover(function () {
    var thumb_id = $(this).attr("id");
    $(".modal-image").removeClass("show");
    $("#" + thumb_id + ".modal-image").addClass("show");
  }, function () {
    $(this).removeClass("active");
  });
  $(".navbar .navbar-toggler .navbar-toggler-icon").click(function () {
    $(".megamenu").removeClass("show");
  });
  $(".tab-item").click(function (e) {
    e.preventDefault();
    var target = e.currentTarget;
    var this_tab = $(target).data("tab");
    $(".tab-item").removeClass("active");
    $(target).addClass("active");
    var tab_content = $("#" + this_tab + ".tab-content-item");
    $(".tab-content-item").removeClass("show");
    tab_content.addClass("show");
    console.log($(e.currentTarget).data("tab"));
    console.log(this_tab);
    console.log("tab_content " + tab_content);
  }); // Изменение количества товара

  $(".count-wrap .count-up").on("click", function (e) {
    var input_col = e.target.nextElementSibling;
    var var_count = Number($(input_col).val());
    var_count = var_count + 1;
    input_col.value = var_count;
  });
  $(".count-wrap .count-down").on("click", function (e) {
    var input_col = e.target.previousElementSibling;
    var var_count = Number($(input_col).val());
    var_count = var_count - 1;

    if (var_count == 0) {
      var_count = 1;
    }

    input_col.value = var_count;
  });
});
$(".search-wrapper").mouseup(function (e) {
  // событие клика по веб-документу
  var div = $(".icon-search"); // тут указываем ID элемента

  var inp = $(".search-wrapper .form-inline.custom input.form-control");

  if (!div.is(e.target) // если клик был не по нашему блоку
  && div.has(e.target).length === 0 && !inp.is(e.target)) {
    // и не по его дочерним элементам
    $(".search-wrapper").removeClass("show"); // скрываем его
    //console.log(e.target);
  } else {
    $(".search-wrapper").addClass("show");
  }

  var div_tg = $(".icons-toggle"); // тут указываем ID элемента

  if (!div_tg.is(e.target) // если клик был не по нашему блоку
  && div_tg.has(e.target).length === 0) {
    // и не по его дочерним элементам
    $(".icons-wrapper").removeClass("show"); // скрываем его
    //console.log(e.target);
  } else {
    $(".icons-wrapper").addClass("show");
  }
});