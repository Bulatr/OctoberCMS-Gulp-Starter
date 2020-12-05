"use strict";

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/******/
(function (modules) {
  // webpackBootstrap

  /******/
  // The module cache

  /******/
  var installedModules = {};
  /******/

  /******/
  // The require function

  /******/

  function __webpack_require__(moduleId) {
    /******/

    /******/
    // Check if module is in cache

    /******/
    if (installedModules[moduleId]) {
      /******/
      return installedModules[moduleId].exports;
      /******/
    }
    /******/
    // Create a new module (and put it into the cache)

    /******/


    var module = installedModules[moduleId] = {
      /******/
      i: moduleId,

      /******/
      l: false,

      /******/
      exports: {}
      /******/

    };
    /******/

    /******/
    // Execute the module function

    /******/

    modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
    /******/

    /******/
    // Flag the module as loaded

    /******/

    module.l = true;
    /******/

    /******/
    // Return the exports of the module

    /******/

    return module.exports;
    /******/
  }
  /******/

  /******/

  /******/
  // expose the modules object (__webpack_modules__)

  /******/


  __webpack_require__.m = modules;
  /******/

  /******/
  // expose the module cache

  /******/

  __webpack_require__.c = installedModules;
  /******/

  /******/
  // define getter function for harmony exports

  /******/

  __webpack_require__.d = function (exports, name, getter) {
    /******/
    if (!__webpack_require__.o(exports, name)) {
      /******/
      Object.defineProperty(exports, name, {
        enumerable: true,
        get: getter
      });
      /******/
    }
    /******/

  };
  /******/

  /******/
  // define __esModule on exports

  /******/


  __webpack_require__.r = function (exports) {
    /******/
    if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
      /******/
      Object.defineProperty(exports, Symbol.toStringTag, {
        value: 'Module'
      });
      /******/
    }
    /******/


    Object.defineProperty(exports, '__esModule', {
      value: true
    });
    /******/
  };
  /******/

  /******/
  // create a fake namespace object

  /******/
  // mode & 1: value is a module id, require it

  /******/
  // mode & 2: merge all properties of value into the ns

  /******/
  // mode & 4: return value when already ns object

  /******/
  // mode & 8|1: behave like require

  /******/


  __webpack_require__.t = function (value, mode) {
    /******/
    if (mode & 1) value = __webpack_require__(value);
    /******/

    if (mode & 8) return value;
    /******/

    if (mode & 4 && _typeof(value) === 'object' && value && value.__esModule) return value;
    /******/

    var ns = Object.create(null);
    /******/

    __webpack_require__.r(ns);
    /******/


    Object.defineProperty(ns, 'default', {
      enumerable: true,
      value: value
    });
    /******/

    if (mode & 2 && typeof value != 'string') for (var key in value) {
      __webpack_require__.d(ns, key, function (key) {
        return value[key];
      }.bind(null, key));
    }
    /******/

    return ns;
    /******/
  };
  /******/

  /******/
  // getDefaultExport function for compatibility with non-harmony modules

  /******/


  __webpack_require__.n = function (module) {
    /******/
    var getter = module && module.__esModule ?
    /******/
    function getDefault() {
      return module['default'];
    } :
    /******/
    function getModuleExports() {
      return module;
    };
    /******/

    __webpack_require__.d(getter, 'a', getter);
    /******/


    return getter;
    /******/
  };
  /******/

  /******/
  // Object.prototype.hasOwnProperty.call

  /******/


  __webpack_require__.o = function (object, property) {
    return Object.prototype.hasOwnProperty.call(object, property);
  };
  /******/

  /******/
  // __webpack_public_path__

  /******/


  __webpack_require__.p = "";
  /******/

  /******/

  /******/
  // Load entry module and return exports

  /******/

  return __webpack_require__(__webpack_require__.s = "./themes/hatan/assets/js/app.js");
  /******/
})(
/************************************************************************/

/******/
{
  /***/
  "./node_modules/@lovata/shopaholic-filter-panel/shopaholic-filter-panel.js":
  /*!*********************************************************************************!*\
    !*** ./node_modules/@lovata/shopaholic-filter-panel/shopaholic-filter-panel.js ***!
    \*********************************************************************************/

  /*! exports provided: default */

  /***/
  function node_modulesLovataShopaholicFilterPanelShopaholicFilterPanelJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return ShopaholicFilterPanel; });\n/* harmony import */ var _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @lovata/url-generation */ \"./node_modules/@lovata/url-generation/url-generation.js\");\n\n\n/**\n * @author  Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group\n */\nclass ShopaholicFilterPanel {\n  /**\n   * @param {ShopaholicProductList} obProductListHelper\n   */\n  constructor(obProductListHelper = null) {\n    this.obProductListHelper = obProductListHelper;\n    this.sEventType = 'change';\n    this.sFiledName = 'property';\n    this.sFilterType = 'data-filter-type';\n    this.sPropertyIDAttribute = 'data-property-id';\n\n    this.sDefaultWrapperClass = '_shopaholic-filter-wrapper';\n    this.sWrapperSelector = `.${this.sDefaultWrapperClass}`;\n  }\n\n  /**\n   * Init event handlers\n   */\n  init() {\n    $(document).on(this.sEventType, this.sWrapperSelector, () => {\n      _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__[\"default\"].init();\n      this.prepareRequestData();\n\n      _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__[\"default\"].remove('page');\n      _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__[\"default\"].update();\n      if (!this.obProductListHelper) {\n        return;\n      }\n\n      this.obProductListHelper.send();\n    });\n  }\n\n  prepareRequestData() {\n    const obFilterList = $(this.sWrapperSelector);\n    if (obFilterList.length == 0) {\n      return;\n    }\n\n    obFilterList.each((iNumber) => {\n      //Get filter type\n      const obWrapper = $(obFilterList[iNumber]),\n        sFilterType = obWrapper.attr(this.sFilterType),\n        iPropertyID = obWrapper.attr(this.sPropertyIDAttribute);\n\n      let sFieldName = `${this.sFiledName}`;\n      if (!sFilterType) {\n        return;\n      }\n\n      if (iPropertyID) {\n        sFieldName += `[${iPropertyID}]`;\n      }\n\n      let obInputList = null,\n        arValueList = [];\n\n      if (sFilterType == 'between') {\n        obInputList = obWrapper.find('input');\n      } else if (sFilterType == 'checkbox' || sFilterType == 'switch') {\n        obInputList = obWrapper.find('input[type=\"checkbox\"]:checked');\n      } else if (sFilterType == 'select' || sFilterType == 'select_between') {\n        obInputList = obWrapper.find('select');\n      } else if (sFilterType == 'radio') {\n        obInputList = obWrapper.find('input[type=\"radio\"]:checked');\n      }\n\n      if (!obInputList || obInputList.length == 0) {\n        _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__[\"default\"].remove(sFieldName);\n        return;\n      }\n\n      obInputList.each((iInputNumber) => {\n        const sValue = $(obInputList[iInputNumber]).val();\n        if (!sValue) {\n          return;\n        }\n\n        arValueList.push(sValue);\n      });\n\n      if (!arValueList || arValueList.length == 0) {\n        _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__[\"default\"].remove(sFieldName);\n      } else {\n        _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__[\"default\"].set(sFieldName, arValueList);\n      }\n    });\n  }\n\n  /**\n   * Redeclare default selector of filter input\n   * Default value is \"_shopaholic-filter-wrapper\"\n   *\n   * @param {string} sWrapperSelector\n   * @returns {ShopaholicFilterPanel}\n   */\n  setWrapperSelector(sWrapperSelector) {\n    this.sWrapperSelector = sWrapperSelector;\n\n    return this;\n  }\n\n  /**\n   * Redeclare default event type\n   * Default value is \"change\"\n   *\n   * @param {string} sEventType\n   * @returns {ShopaholicFilterPanel}\n   */\n  setEventType(sEventType) {\n    this.sEventType = sEventType;\n\n    return this;\n  }\n\n  /**\n   * Redeclare default URL filed name\n   * Default value is \"property\"\n   *\n   * @param {string} sFieldName\n   * @returns {ShopaholicFilterPanel}\n   */\n  setFieldName(sFieldName) {\n    this.sFiledName = sFieldName;\n\n    return this;\n  }\n}\n\n\n//# sourceURL=webpack:///./node_modules/@lovata/shopaholic-filter-panel/shopaholic-filter-panel.js?");
    /***/
  },

  /***/
  "./node_modules/@lovata/shopaholic-product-list/shopaholic-pagination.js":
  /*!*******************************************************************************!*\
    !*** ./node_modules/@lovata/shopaholic-product-list/shopaholic-pagination.js ***!
    \*******************************************************************************/

  /*! exports provided: default */

  /***/
  function node_modulesLovataShopaholicProductListShopaholicPaginationJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return ShopaholicPagination; });\n/* harmony import */ var _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @lovata/url-generation */ \"./node_modules/@lovata/url-generation/url-generation.js\");\n\n\n/**\n * @author  Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group\n */\nclass ShopaholicPagination {\n  /**\n   * @param {ShopaholicProductList} obProductListHelper\n   */\n  constructor(obProductListHelper = null) {\n    this.obProductListHelper = obProductListHelper;\n    this.sEventType = 'click';\n    this.sFiledName = 'page';\n    this.sAttributeName = 'data-page';\n\n    this.sDefaultButtonClass = '_shopaholic-pagination';\n    this.sButtonSelector = `.${this.sDefaultButtonClass}`;\n  }\n\n  /**\n   * Init event handlers\n   */\n  init() {\n    $(document).on(this.sEventType, this.sButtonSelector, (obEvent) => {\n      obEvent.preventDefault();\n      obEvent.stopPropagation();\n\n      const obButton = $(obEvent.currentTarget),\n        iPage = obButton.attr(this.sAttributeName);\n\n      _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__[\"default\"].init();\n      if (iPage == 1) {\n        _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__[\"default\"].remove(this.sFiledName);\n      } else {\n        _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__[\"default\"].set(this.sFiledName, [iPage]);\n      }\n\n      _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__[\"default\"].update();\n      if (!this.obProductListHelper) {\n        return;\n      }\n\n      this.obProductListHelper.send();\n    });\n  }\n\n  /**\n   * Redeclare default selector of pagination button\n   * Default value is \"_shopaholic-pagination\"\n   *\n   * @param {string} sButtonSelector\n   * @returns {ShopaholicPagination}\n   */\n  setButtonSelector(sButtonSelector) {\n    this.sButtonSelector = sButtonSelector;\n\n    return this;\n  }\n}\n\n//# sourceURL=webpack:///./node_modules/@lovata/shopaholic-product-list/shopaholic-pagination.js?");
    /***/
  },

  /***/
  "./node_modules/@lovata/shopaholic-product-list/shopaholic-product-list.js":
  /*!*********************************************************************************!*\
    !*** ./node_modules/@lovata/shopaholic-product-list/shopaholic-product-list.js ***!
    \*********************************************************************************/

  /*! exports provided: default */

  /***/
  function node_modulesLovataShopaholicProductListShopaholicProductListJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return ShopaholicProductList; });\n/**\n * @author  Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group\n */\nclass ShopaholicProductList {\n  constructor() {\n    this.sComponentMethod = 'onAjax';\n    this.obAjaxRequestCallback = null;\n  }\n\n  /**\n   * Add product to wish list\n   * @param {int} iProductID\n   * @param obButton\n   */\n  send(obRequestData = {}) {\n\n    if (this.obAjaxRequestCallback !== null) {\n      obRequestData = this.obAjaxRequestCallback(obRequestData);\n    }\n\n    $.request(this.sComponentMethod, obRequestData);\n  }\n\n  /**\n   * Set ajax request callback\n   *\n   * @param {function} obCallback\n   * @returns {ShopaholicProductList}\n   */\n  setAjaxRequestCallback(obCallback) {\n    this.obAjaxRequestCallback = obCallback;\n\n    return this;\n  }\n}\n\n\n//# sourceURL=webpack:///./node_modules/@lovata/shopaholic-product-list/shopaholic-product-list.js?");
    /***/
  },

  /***/
  "./node_modules/@lovata/shopaholic-product-list/shopaholic-sorting.js":
  /*!****************************************************************************!*\
    !*** ./node_modules/@lovata/shopaholic-product-list/shopaholic-sorting.js ***!
    \****************************************************************************/

  /*! exports provided: default */

  /***/
  function node_modulesLovataShopaholicProductListShopaholicSortingJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return ShopaholicSorting; });\n/* harmony import */ var _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @lovata/url-generation */ \"./node_modules/@lovata/url-generation/url-generation.js\");\n\n\n/**\n * @author  Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group\n */\nclass ShopaholicSorting {\n  /**\n   * @param {ShopaholicProductList} obProductListHelper\n   */\n  constructor(obProductListHelper = null) {\n    this.obProductListHelper = obProductListHelper;\n    this.sEventType = 'change';\n    this.sFiledName = 'sort';\n\n    this.sDefaultSelectClass = '_shopaholic-sorting';\n    this.sSelectSelector = `.${this.sDefaultSelectClass}`;\n  }\n\n  /**\n   * Init event handlers\n   */\n  init() {\n    $(document).on(this.sEventType, this.sSelectSelector, (obEvent) => {\n      const obSelect = $(obEvent.currentTarget),\n        sSorting = obSelect.val();\n\n      _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__[\"default\"].init();\n      _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__[\"default\"].set(this.sFiledName, [sSorting]);\n      _lovata_url_generation__WEBPACK_IMPORTED_MODULE_0__[\"default\"].update();\n      if (!this.obProductListHelper) {\n        return;\n      }\n\n      this.obProductListHelper.send();\n    });\n  }\n}\n\n//# sourceURL=webpack:///./node_modules/@lovata/shopaholic-product-list/shopaholic-sorting.js?");
    /***/
  },

  /***/
  "./node_modules/@lovata/url-generation/url-generation.js":
  /*!***************************************************************!*\
    !*** ./node_modules/@lovata/url-generation/url-generation.js ***!
    \***************************************************************/

  /*! exports provided: default */

  /***/
  function node_modulesLovataUrlGenerationUrlGenerationJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    eval("__webpack_require__.r(__webpack_exports__);\n/**\n * @author  Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group\n */\n/* harmony default export */ __webpack_exports__[\"default\"] = (new class UrlGeneration {\n  constructor() {\n    this.sBaseURL = `${location.origin}${location.pathname}`;\n    this.init();\n  }\n\n  init() {\n    this.sSearchString = window.location.search.substring(1);\n    this.obParamList = {};\n    let arPartList = this.sSearchString.split('&');\n    arPartList.forEach((sParam) => {\n      let iPosition = sParam.indexOf(\"=\");\n      if (iPosition < 0) {\n        return;\n      }\n\n      let sFiled = sParam.substring(0, iPosition),\n        sValue = sParam.substring(iPosition + 1);\n      if (!sFiled && !sValue) {\n        return;\n      }\n\n      this.obParamList[sFiled] = sValue.split('|');\n    });\n  }\n\n  clear() {\n    this.obParamList = {};\n\n    history.pushState(null, null, `${this.sBaseURL}`);\n  }\n\n  update() {\n    this.generateSearchString();\n\n    if (Object.keys(this.obParamList).length > 0) {\n      history.pushState(null, null, `${this.sBaseURL}?${this.sSearchString}`);\n    } else {\n      history.pushState(null, null, `${this.sBaseURL}`);\n    }\n  }\n\n  generateSearchString() {\n    let arFieldList = Object.keys(this.obParamList);\n\n    this.sSearchString = '';\n    arFieldList.forEach((sField) => {\n      if (this.sSearchString.length > 0) {\n        this.sSearchString += '&'\n      }\n\n      this.sSearchString += `${sField}=${this.obParamList[sField].join('|')}`;\n    });\n  }\n\n  /**\n   * Set field value in URL\n   * @param sFiled\n   * @param obValue\n   */\n  set(sFiled, obValue) {\n    if (!sFiled || !obValue) {\n      return;\n    }\n\n    if (typeof obValue == 'string') {\n      obValue = [obValue];\n    }\n\n    this.obParamList[sFiled] = obValue;\n  }\n\n  /**\n   * Remove field value from URL\n   * @param {string} sFiled\n   */\n  remove(sFiled) {\n    if (!sFiled || !this.obParamList.hasOwnProperty(sFiled)) {\n      return;\n    }\n\n    delete this.obParamList[sFiled];\n  }\n});\n\n//# sourceURL=webpack:///./node_modules/@lovata/url-generation/url-generation.js?");
    /***/
  },

  /***/
  "./themes/hatan/assets/js/app.js":
  /*!***************************************!*\
    !*** ./themes/hatan/assets/js/app.js ***!
    \***************************************/

  /*! no exports provided */

  /***/
  function themesHatanAssetsJsAppJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _lovata_shopaholic_product_list_shopaholic_product_list__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @lovata/shopaholic-product-list/shopaholic-product-list */ \"./node_modules/@lovata/shopaholic-product-list/shopaholic-product-list.js\");\n/* harmony import */ var _lovata_shopaholic_product_list_shopaholic_sorting__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @lovata/shopaholic-product-list/shopaholic-sorting */ \"./node_modules/@lovata/shopaholic-product-list/shopaholic-sorting.js\");\n/* harmony import */ var _lovata_shopaholic_product_list_shopaholic_pagination__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @lovata/shopaholic-product-list/shopaholic-pagination */ \"./node_modules/@lovata/shopaholic-product-list/shopaholic-pagination.js\");\n/* harmony import */ var _lovata_shopaholic_filter_panel_shopaholic_filter_panel__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @lovata/shopaholic-filter-panel/shopaholic-filter-panel */ \"./node_modules/@lovata/shopaholic-filter-panel/shopaholic-filter-panel.js\");\n\r\n\r\n\r\n\r\n\r\ndocument.addEventListener(\"DOMContentLoaded\", function() {\r\n\r\n\t// Custom JS\r\n\r\n\t/**\r\n\t * Загрузка меню\r\n\t * при при клике\r\n\t */\r\n\t$('.main-menu-wrapper a.nav-link').on(\"click\", function() {\r\n\t\t$.request('onAjax', {\r\n\t\t\tupdate: {'menu/mega-menu': '.mega-menu-wrapper'}\r\n\t\t\t\r\n\t\t});\r\n\t\t\r\n\t});\r\n\t\r\n\t// Конец блока меню\r\n\tconst obListHelper = new _lovata_shopaholic_product_list_shopaholic_product_list__WEBPACK_IMPORTED_MODULE_0__[\"default\"]();\r\n\t\r\n\tobListHelper.setAjaxRequestCallback((obRequestData) => {\r\n\t\t$.request('ProductList::onAjaxRequest', {\r\n\t\t\t'update': {'product/catalog/product-list': '.catalog-wrapper'}\r\n\t\t});\r\n\t\t$.request('ProductList::onAjaxRequest', {\r\n\t\t\t'update': {'product-count': '.kol-item'}\r\n\t\t});\r\n\t\t\r\n\t\tobRequestData.update = {\r\n\t\t\t'product/catalog/product-list': `.catalog_wrapper`\r\n\t\t};\r\n\t\t\r\n\t\treturn obRequestData;\r\n\t});\r\n\r\n\t\r\n\t//obListHelper.send(obListHelper);\r\n\t\t\r\n\tconst obSortingHelper = new _lovata_shopaholic_product_list_shopaholic_sorting__WEBPACK_IMPORTED_MODULE_1__[\"default\"](obListHelper);\r\n\tconst obPaginationHelper = new _lovata_shopaholic_product_list_shopaholic_pagination__WEBPACK_IMPORTED_MODULE_2__[\"default\"](obListHelper);\r\n\tconst obFilterPanel = new _lovata_shopaholic_filter_panel_shopaholic_filter_panel__WEBPACK_IMPORTED_MODULE_3__[\"default\"](obListHelper);\r\n\r\n\tobFilterPanel.init();\r\n\tobPaginationHelper.init();\r\n\tobSortingHelper.init();\r\n\t\r\n\t/**\r\n\t * Обработка фильтра на странице продукта\r\n\t */\r\n\tconst arValue = [];\r\n\tarValue[0] = \"\";\r\n\tarValue[1] = \"\";\r\n\tlet resultString = \"\";\r\n\t\r\n\t$(\".property-values-wrapper\").on(\"change\", \"select.property-values__select\", function(e){\r\n\t\t/** ! добавление в строку браузера параметров */\r\n\t\t//history.pushState(null, null, `${this.sBaseURL}?${this.sSearchString}`);\r\n\t\tlet Value = $(e.target).val();\r\n\t\tlet idParam = $(e.target).data(\"propertyId\");\r\n\t\tarValue[0] = (\"property[\"+idParam+\"]=\"+Value);\r\n\t\tif (arValue[1] == \"\") {\r\n\t\t\tresultString = arValue[0];\r\n\t\t} else {\r\n\t\t\tresultString = arValue[0]+\"&\"+arValue[1];\r\n\t\t}\r\n\t\tpushStateUrl(resultString);\t\t\r\n\t});\r\n\r\n\t$(\".property-values-wrapper\").on(\"change\", \".wrapper-radio input[type=radio]\", function(e){\r\n\t\tlet Value = $(e.target).val();\r\n\t\tlet idParam = $(e.target).data(\"propertyId\");\r\n\t\tarValue[1] = (\"property[\"+idParam+\"]=\"+Value);\r\n\t\tif (arValue[0] == \"\") {\r\n\t\t\tresultString = arValue[1];\r\n\t\t} else {\r\n\t\t\tresultString = arValue[0]+\"&\"+arValue[1];\r\n\t\t}\r\n\t\tpushStateUrl(resultString);\r\n\t\t\r\n\t});\r\n\r\n\t/**\r\n\t * Функция меняет URL на странице продукта при использовании фильтра\r\n\t * и меняет доступные офферы\r\n\t *  pushState\r\n\t */\r\n\tfunction pushStateUrl(resultstring) {\r\n\t\tlet sBaseURL = `${location.origin}${location.pathname}`;\r\n\t\thistory.pushState(null, null, `${sBaseURL}?${resultString}`);\r\n\t\t$.request('onAjax', {\r\n\t\t\t'update': {'product/offer/product-offer-list': '.property-values__select.offers'}\r\n\t\t});\r\n\t}\r\n\r\n\t/**\r\n\t *  parse URL\r\n\t */\r\n\tfunction parseRequestValue(arValueList)\r\n    {\r\n        if (empty(arValueList)) {\r\n            return [];\r\n\t\t}\r\n\t\tarValueList.forEach(function(sValue,iKey,arValueList){\r\n\t\t\tarValueList[iKey] = explode('|', sValue);\r\n\t\t})\r\n        \r\n        return arValueList;\r\n    }\r\n\r\n\r\n\t$(\"modal-options__wrap .color-radio label\").on(\"click\", function() {\r\n\t\t//$(\"input[type=radio].color-radio-input\").trigger(\"click\");\t\t\r\n\t})\r\n\r\n\t$(document).on(\"change\",\"input[type=radio].color-radio-input\", function(e){\r\n\t\t\t\t\r\n\t\tif ($(e.target).is(':checked')) {\r\n\t\t\tlet dataProperty = $(e.target).data('PropertyId');\r\n\t\t\tconsole.log($(e.target).val());\r\n\t\t}\r\n\t\t//$('input[type=radio].color-radio-input').prop(\"checked\", false);\r\n\t\t\r\n\t\t\r\n\t\t\r\n\t\t//$(\"input[type=radio].color-radio-input\").prop('checked', true);\r\n\t})\r\n\t\r\n\t//Ajax filtration\r\n\t\t/*\r\n\t$('body').on('change', 'input.form-check-input', function (e) {\r\n\t\tconsole.log(e);\r\n\t\t$('.wrapper-overlay.card-container').request('ProductList::onAjaxRequest', {\r\n\t\t\t'update': {'product/catalog/product-list': '.catalog-wrapper'}\r\n\t\t});\r\n\t});\r\n\r\n\t//Ajax pagination (product list)\r\n\t$('body').on('click', '.pagination a._shopaholic-pagination', function (e) {\r\n\r\n\t\te.preventDefault();\r\n\t\tvar _this = $(e.currentTarget),\r\n\t\t\tiPage = _this.attr('data-page');\r\n\r\n\t\t$('.card-container').request('ProductList::onAjaxRequest', {\r\n\t\t\t'data': {'page': iPage},\r\n\t\t\t'update': {'product/catalog/product-list': '.catalog-wrapper'}\r\n\t\t});\r\n\t});\r\n\r\n\t//Ajax filtration and sorting\r\n\t$('body').on('change', 'select.sort-select', function (e) {\r\n\t\tconsole.log(e);\r\n\t\t$('.card-container').request('ProductList::onAjaxRequest', {\r\n\t\t\t'update': {'product/catalog/product-list': '.catalog-wrapper'}\r\n\t\t});\r\n\t});\r\n\t*/\r\n\tvar myCarousel = document.querySelector('#myCarousel');\r\n\t\r\n\t$( \".product-card\" ).hover(\r\n\t\tfunction() {\r\n\t\t$( this ).addClass(\"active\") ;\t\t\r\n\t\t}, function() {\r\n\t\t$( this ).removeClass(\"active\") ;\r\n\t\t}\r\n\t);\r\n\r\n\t$( \".card-gallery\" ).hover(\r\n\t\tfunction() {\r\n\t\t$( this ).addClass(\"active\") ;\t\t\r\n\t\t}, function() {\r\n\t\t$( this ).removeClass(\"active\") ;\r\n\t\t}\r\n\t);\r\n\r\n\t// wishlist\r\n\r\n\t$(\".wishlist .hearth img\").hover(\r\n\t\tfunction(e){\t\t\t\r\n\t\t\t$(this).addClass(\"bounceIn\")\r\n\t\t},\r\n\t\tfunction(e) {\t\t\t\r\n\t\t\t$(this).removeClass(\"bounceIn\")\r\n\t\t}\r\n\t);\r\n\r\n\t/**\r\n\t * Main menu\r\n\t */\r\n\t$(\".main-menu-wrapper .nav-item .nav-link\").click(function() {\r\n\t\t$(\".mega-menu-wrapper\").addClass(\"show\");\r\n\t\t\r\n\t\t// Убираем класс show у Megamenu\r\n\t\t$(\".megamenu\").removeClass(\"show\").slideUp();\r\n\t\t// Убираем нижнию черту у активного элемента\r\n\t\t$(\".navbar .navbar-nav .nav-item.active\").removeClass(\"active\");\r\n\r\n\t\tlet mainItem = $(this).data('mainmenuitem');\r\n\t\t\r\n\t\t// add class show megamenu\r\n\t\t$(\"#\"+mainItem).addClass(\"show\");\r\n\r\n\t\tconsole.log($(this).closest('li'));\r\n\t\t// add class active nav-item\r\n\t\t$(this).closest('li').addClass(\"active\");\r\n\t\t\r\n\t});\r\n\r\n\t//Megamenu\r\n\r\n\t$(document).on(\"mouseover\", function(e){\r\n\t\t\r\n\t\tlet targetClass = $(e.target).attr('class');\r\n\t\t\r\n\t\tif (targetClass == \"mega-menu-wrapper show\") {\r\n\t\t\t\r\n\t\t\t$(\".mega-menu-wrapper\").removeClass(\"show\");\r\n\t\t\t$(\".megamenu\").removeClass(\"show\");\r\n\t\t}\r\n\t\t\r\n\t\t\r\n\t});\r\n\r\n\t/**\r\n\t * Properties\r\n\t */\r\n\r\n\t$('#color-radio input').on('click', function() {\r\n\t\tvar clk = $('input:checked', '#myForm').val();\r\n\t\t$('.color-radio .wrapper-radio').find('label').removeClass('input-checked');\r\n\t\t$(this).parent('label').addClass('input-checked');\r\n\t});\r\n\r\n\t// show collapse form\r\n\r\n\t$(\"#show-sposob-oplaty\").on(\"click\", function(e){\r\n\t\te.preventDefault();\r\n\t\t$(\".form-collapse\").addClass(\"show\");\r\n\t});\r\n\r\n\t$(\"#remove-sposob-oplaty\").on(\"click\", function(e){\r\n\t\te.preventDefault();\r\n\t\t$(\".form-collapse\").removeClass(\"show\");\r\n\t});\r\n\r\n\t// hover table\r\n\r\n\t$(\".table-container.hovered .table-container__row\").on(\"mouseover\", function() {\r\n\t\t$(this).addClass(\"active\");\r\n\t});\r\n\r\n\t$(\".table-container.hovered .table-container__row\").on(\"mouseout\", function() {\r\n\t\t$(this).removeClass(\"active\");\r\n\t});\r\n\r\n\t// add to cart\r\n\r\n\t$(\"#addtocart\").click(function(e){\r\n\t\te.preventDefault();\r\n\t\t$(\".icons.cart-icon\").attr(\"data-cartfilled\",\"yes\");\r\n\t\t$(\".icons.cart-icon .cart.show\").removeClass(\"show\");\r\n\t\t$(\".icons.cart-icon .cart.added\").addClass(\"show\").addClass(\"bounce\").addClass(\"animated\");\r\n\t\tsetTimeout(function(){\r\n\t\t\t$(\".icons.cart-icon .cart.added\").removeClass(\"show\")\r\n\t\t},3000);\r\n\t\tsetTimeout(function(){\r\n\t\t\t$(\".icons.cart-icon .cart.filled\").addClass(\"show\")\r\n\t\t},3000);\t\t\r\n\t}); \r\n\r\n\t$(\".product-card .cart\").click(function(e){\r\n\t\te.preventDefault();\r\n\t\t$(\".icons.cart-icon\").attr(\"data-cartfilled\",\"yes\");\r\n\t\t$(\".icons.cart-icon .cart.show\").removeClass(\"show\");\r\n\t\t$(\".icons.cart-icon .cart.added\").addClass(\"show\").addClass(\"bounce\").addClass(\"animated\");\r\n\t\tsetTimeout(function(){\r\n\t\t\t$(\".icons.cart-icon .cart.added\").removeClass(\"show\")\r\n\t\t},3000);\r\n\t\tsetTimeout(function(){\r\n\t\t\t$(\".icons.cart-icon .cart.filled\").addClass(\"show\")\r\n\t\t},3000);\t\t\r\n\t});\r\n\t// Click to cart\r\n\r\n\t$(\".icons.cart-icon\").click(function(){\r\n\t\t// Проверяем заполнена ли корзина\r\n\t\tlet filled = $(this).attr(\"data-cartfilled\");\r\n\t\t\r\n\t\t// Если заполнена\r\n\t\tif (filled == \"yes\") {\r\n\t\t\t$(\".microcart .cart-empty\").removeClass(\"show\");\r\n\t\t\t$(\".microcart .cart-filled\").addClass(\"show\");\r\n\r\n\t\t} else {\r\n\t\t\t// не заполнена\r\n\t\t\t$(\".microcart .cart-empty\").addClass(\"show\");\r\n\t\t\t$(\".microcart .cart-filled\").removeClass(\"show\");\r\n\t\t}\r\n\t\t$(\".modal-overlay\").addClass(\"active\");\r\n\t\t$(\".microcart\").addClass(\"show slideInRight\");\r\n\t\t$(\".microcart\").removeClass(\"slideOutRight\");\r\n\t\t\r\n\t});\r\n\r\n\t// click to filter\r\n\r\n\t$(\".filter-icon__image img\").on(\"click\", function(){\r\n\t\t$(\".modal-overlay\").addClass(\"active\");\r\n\t\t$(\".filter-modal\").addClass(\"show slideInLeft\");\r\n\t\t$(\".filter-modal\").removeClass(\"slideOutLeft\");\r\n\t});\r\n\r\n\t// Microcart\r\n\r\n\t$(\".collected-product\").hover(function(){\r\n\t\t$(this).find(\".collected-product__content-delete-product\").addClass(\"show\")\r\n\t},\r\n\tfunction(){\r\n\t\t$(this).find(\".collected-product__content-delete-product\").removeClass(\"show\")\r\n\t});\r\n\r\n\t// close Microcard\r\n\r\n\t$(\".microcart .cart-header .close\").click(function(){\r\n\t\t$(\".modal-overlay\").removeClass(\"active\");\r\n\t\t$(\".microcart\").removeClass(\"show\");\r\n\t\t$(\".microcart\").removeClass(\"slideInRight\");\r\n\t\t$(\".microcart\").addClass(\"slideOutRight\");\r\n\t});\r\n\r\n\t// close filter\r\n\r\n\t$(\".filter-modal .close\").on(\"click\", function(){\r\n\t\t$(\".modal-overlay\").removeClass(\"active\");\r\n\t\t$(\".filter-modal\").removeClass(\"show\");\r\n\t\t$(\".filter-modal\").removeClass(\"slideInLeft\");\r\n\t\t$(\".filter-modal\").addClass(\"slideOutLeft\");\r\n\t});\r\n\t// Readmore\r\n\r\n\t\r\n\t$(\".read-more a.button.text\").click(function(e) {\r\n\t\te.preventDefault();\r\n\t\t$(\".review-all-collapse\").toggleClass(\"show\");\r\n\t\tlet data_event = $(this).data(\"eventclick\");\r\n\t\tif (data_event == \"open\") {\r\n\t\t\t$(\".read-more a.button.text\").html(\"Свернуть\");\r\n\t\t\t$(\".read-more a.button.text\").data(\"eventclick\",\"close\");\r\n\t\t} else {\r\n\t\t\t$(\".read-more a.button.text\").html(\"Читать далее\");\r\n\t\t\t$(\".read-more a.button.text\").data(\"eventclick\",\"open\");\r\n\t\t}\r\n\t\t\r\n\t});\r\n\t\r\n\t// product thumbnail\r\n\r\n\t$(\".product-gallery-trumbnail\").hover(\r\n\t\tfunction() {\r\n\t\t\t$(\".product-gallery-trumbnail.active\").removeClass(\"active\");\r\n\t\t\tlet thumb_id = $(this).data(\"trumbid\");\r\n\t\t\t$(this).addClass(\"active\");\r\n\t\t\t$(\".product-main\").removeClass(\"active\");\r\n\t\t\t$(\".modal-image\").removeClass(\"show\");\r\n\t\t\t$(\"#\"+thumb_id+\".product-main\").addClass(\"active\");\r\n\t\t},\r\n\t\tfunction() {\r\n\t\t\t//$(this).removeClass(\"active\");\r\n\t\t}\r\n\t);\r\n\r\n\t$(\".product-gallery-trumbnail\").click(function() {\r\n\t\t$(\".product-gallery-trumbnail.active\").removeClass(\"active\");\r\n\t\t\tlet thumb_id = $(this).data(\"trumbid\");\r\n\t\t\t$(this).addClass(\"active\");\r\n\t\t\t$(\".product-main\").removeClass(\"active\");\r\n\t\t\t$(\"#\"+thumb_id+\".product-main\").addClass(\"active\");\r\n\t});\r\n\r\n\t// modal\r\n\t$(\".product-gallery .product-gallery-wrapper .product-main\").click(function(el) {\r\n\t\tlet idimg = $(this).attr(\"id\");\r\n\t\tconsole.log(\"#\"+idimg+\".modal-image\")\r\n\t\t$(\".modal-image.show\").removeClass(\"show\");\r\n\t\t$(\"#\"+idimg+\".modal-image\").addClass(\"show\");\r\n\t\t$(\".modal-overlay\").addClass(\"active\");\r\n\t\t$(\".modal\").addClass(\"show\");\r\n\t});\r\n\t\r\n\t$(\".modal-overlay\").click(function() {\r\n\t\t$(\".modal-overlay\").removeClass(\"active\");\r\n\t\t$(\".modal\").removeClass(\"show\");\r\n\t\t$(\".filter-modal\").removeClass(\"show\");\r\n\t\t$(\".filter-modal\").removeClass(\"slideInLeft\");\r\n\t\t$(\".filter-modal\").addClass(\"slideOutLeft\");\r\n\t\t$(\".microcart\").removeClass(\"show\");\r\n\t\t$(\".microcart\").removeClass(\"slideInRight\");\r\n\t\t$(\".microcart\").addClass(\"slideOutRight\");\r\n\t});\r\n\r\n\t$(\".modal-header .close\").click(function() {\r\n\t\t$(\".modal-overlay\").removeClass(\"active\");\r\n\t\t$(\".modal\").removeClass(\"show\");\r\n\t});\r\n\r\n\tfunction getidimages() {\r\n\t\tlet element = document.querySelectorAll(\".modal-wrap-images\");\r\n\t\tlet images = [];\r\n\t\tlet images_id = [];\r\n\t\tfor (let elem of element) {\r\n\t\t\timages = elem.children;\r\n\t\t}\r\n\t\tfor (let img of images) {\r\n\t\t\timages_id.push($(img).attr(\"id\"))\t\t\t\r\n\t\t}\r\n\t\treturn images_id // Возвращает массив id\r\n\t};\r\n\r\n\t\r\n\r\n\t$(\"#modal-image-left\").click(function(){\r\n\t\t\r\n\t\tlet id_elem = getidimages();\r\n\t\tlet indx = 0;\r\n\t\tlet active_id = $(\".modal-image.show\").attr(\"id\");\r\n\t\tlet lenght_id_elem = id_elem.length;\r\n\t\tid_elem.forEach(function(item, i, id_elem) {\t\t\t\r\n\t\t\tif (item == active_id) {\r\n\t\t\t\tindx = Number(i)-1;\r\n\t\t\t\tif (indx < 0) { \r\n\t\t\t\t\tindx = lenght_id_elem-1;\r\n\t\t\t\t}\r\n\t\t\t\t$(\".modal-image.show\").removeClass(\"show\");\r\n\t\t\t\t$(\"#\"+id_elem[indx]+\".modal-image\").addClass(\"show\");\r\n\t\t\t}\r\n\t\t});\t\t\r\n\t});\r\n\t$(\"#modal-image-right\").click(function(){\r\n\t\tlet id_elem = getidimages();\r\n\t\tlet indx = 0;\r\n\t\tlet active_id = $(\".modal-image.show\").attr(\"id\");\r\n\t\tlet lenght_id_elem = id_elem.length;\r\n\t\tid_elem.forEach(function(item, i, id_elem) {\t\t\t\r\n\t\t\tif (item == active_id) {\r\n\t\t\t\tindx = Number(i)+1;\r\n\t\t\t\tif (indx > lenght_id_elem-1) { \r\n\t\t\t\t\tindx = 0;\r\n\t\t\t\t}\r\n\t\t\t\t$(\".modal-image.show\").removeClass(\"show\");\r\n\t\t\t\t$(\"#\"+id_elem[indx]+\".modal-image\").addClass(\"show\");\r\n\t\t\t}\r\n\t\t});\t\r\n\t});\r\n\r\n\t$(\".modal-thumb-image\").hover(\r\n\t\tfunction() {\r\n\t\t\tlet thumb_id = $(this).attr(\"id\");\r\n\t\t\t$(\".modal-image\").removeClass(\"show\");\r\n\t\t\t$(\"#\"+thumb_id+\".modal-image\").addClass(\"show\")\r\n\t\t},\r\n\t\tfunction() {\r\n\t\t\t$(this).removeClass(\"active\");\r\n\t\t}\r\n\t);\r\n\r\n\t\r\n\t$(\".navbar .navbar-toggler .navbar-toggler-icon\").click(function() {\r\n\t\t$(\".megamenu\").removeClass(\"show\");\t\t\r\n\t});\r\n\r\n\t$(\".tab-item\").click(function(e) {\r\n\t\te.preventDefault();\r\n\t\tlet target = e.currentTarget;\r\n\t\tlet this_tab = $(target).data(\"tab\");\r\n\t\t$(\".tab-item\").removeClass(\"active\");\r\n\t\t$(target).addClass(\"active\");\r\n\t\tlet tab_content = $(\"#\"+this_tab+\".tab-content-item\");\r\n\t\t$(\".tab-content-item\").removeClass(\"show\");\r\n\t\ttab_content.addClass(\"show\");\r\n\t\tconsole.log($(e.currentTarget).data(\"tab\"));\r\n\t\tconsole.log(this_tab);\r\n\t\tconsole.log(\"tab_content \"+tab_content);\r\n\t});\r\n\r\n\t// Изменение количества товара\r\n\t\r\n\t$(\".count-wrap .count-up\").on(\"click\", function(e){\r\n\t\tlet input_col = e.target.nextElementSibling;\r\n\t\tvar var_count = Number($(input_col).val());\r\n\t\tvar_count = var_count+1;\r\n\t\tinput_col.value = var_count;\r\n\t});\r\n\t\r\n\t$(\".count-wrap .count-down\").on(\"click\", function(e){\r\n\t\tlet input_col = e.target.previousElementSibling;\r\n\t\tvar var_count = Number($(input_col).val());\r\n\t\tvar_count = var_count-1;\r\n\t\tif (var_count == 0) {var_count = 1}\r\n\t\tinput_col.value = var_count;\r\n\t});\r\n\r\n\t/**\r\n\t * Закрытие дополнительного меню\r\n\t */\r\n\t$(document).mouseup(function (e){ // событие клика по веб-документу\r\n\t\tvar div = $(\".icon-search\"); // тут указываем ID элемента\r\n\t\tvar inp = $(\".search-wrapper .form-inline.custom input.form-control\");\r\n\t\tvar div_tg = $(\".icons-toggle\"); // тут указываем ID элемента\r\n\t\tvar targetClass = $(e.target).attr(\"class\");\r\n\t\t\r\n\t\tif (!div.is(e.target) // если клик был не по нашему блоку\r\n\t\t\t&& div.has(e.target).length === 0 && !inp.is(e.target)) { // и не по его дочерним элементам\r\n\t\t\t$(\".search-wrapper\").removeClass(\"show\"); // скрываем его\r\n\t\t\t//console.log(e.target);\r\n\t\t} else {\r\n\t\t\t\r\n\t\t\t$(\".search-wrapper\").addClass(\"show\");\r\n\t\t}\r\n\t\t\r\n\t\tif (!div_tg.is(e.target) // если клик был не по нашему блоку\r\n\t\t\t&& div_tg.has(e.target).length === 0 ) { // и не по его дочерним элементам\r\n\t\t\t$(\".icons-wrapper\").removeClass(\"show\"); // скрываем его\r\n\t\t\tdiv_tg.removeClass('show');\r\n\t\t\t//console.log(e.target);\r\n\t\t} else {\r\n\t\t\t\r\n\t\t\tif (targetClass == \"icons-toggle show\") {\r\n\t\t\t\t$(\".icons-wrapper\").removeClass(\"show\");\r\n\t\t\t\tdiv_tg.removeClass('show');\r\n\t\t\t} else {\r\n\t\t\t\t$(\".icons-wrapper\").addClass(\"show\");\r\n\t\t\t\tdiv_tg.addClass(\"show\");\r\n\t\t\t}\r\n\t\t\t\r\n\t\t}\r\n\t});\r\n\r\n\t\r\n});\r\n\r\n\r\n\r\n\r\n\n\n//# sourceURL=webpack:///./themes/hatan/assets/js/app.js?");
    /***/
  }
  /******/

});