(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.(j|t)sx?$":
/*!*****************************************************************************************************************!*\
  !*** ./assets/controllers/ sync ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \.(j|t)sx?$ ***!
  \*****************************************************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./hello_controller.js": "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.(j|t)sx?$";

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json":
/*!************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json ***!
  \************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
});

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js":
/*!******************************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js ***!
  \******************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _default)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }














function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } Object.defineProperty(subClass, "prototype", { value: Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }), writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }


/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */

var _default = /*#__PURE__*/function (_Controller) {
  _inherits(_default, _Controller);

  var _super = _createSuper(_default);

  function _default() {
    _classCallCheck(this, _default);

    return _super.apply(this, arguments);
  }

  _createClass(_default, [{
    key: "connect",
    value: function connect() {
      this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
  }]);

  return _default;
}(_hotwired_stimulus__WEBPACK_IMPORTED_MODULE_12__.Controller);



/***/ }),

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* harmony import */ var _bootstrap__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./bootstrap */ "./assets/bootstrap.js");
/* harmony import */ var bootstrap__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");
/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");






/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.css in this case)
 // start the Stimulus application

 // You can specify which plugins you need


$(document).ready(function () {
  /* Gestion form-collection stepLines et ingredientLines */
  var newItem = function newItem(e) {
    var collectionHolder = document.querySelector(e.currentTarget.dataset.collection);
    var item = document.createElement("li");
    item.classList.add("inline");
    item.innerHTML = collectionHolder.dataset.prototype.replace(/__name__/g, collectionHolder.dataset.index);
    item.querySelector(".btn-remove").addEventListener("click", function () {
      item.remove();
    });
    collectionHolder.appendChild(item);
    collectionHolder.dataset.index++;
  };

  document.querySelectorAll('.btn-remove').forEach(function (btn) {
    return btn.addEventListener("click", function (e) {
      return e.currentTarget.closest(".inline").remove();
    });
  });
  document.querySelectorAll('.btn-new').forEach(function (btn) {
    return btn.addEventListener("click", newItem);
  });
  /* Fermeture messages confirmation delete et login */

  $('.onDelete').on('click', function () {
    $('.overlay').css('display', 'flex');
  });
  $('.msgClose').on('click', function () {
    $('.overlay').css('display', 'none');
  });
  /* Fermeture addflashes */

  $('.flashClose').on('click', function () {
    $('.flashClose').parent().slideUp("slow");
  });
  /*Gestion Ajax des favoris */

  function onClickBtnLike(event) {
    event.preventDefault();
    var url = $(this).attr("href");
    var icone = $(this).children('i');
    $.ajax({
      method: "GET",
      url: url
    }).done(function (response) {
      if (icone.hasClass("bi-heart-fill")) {
        icone.addClass("bi-heart").removeClass("bi-heart-fill");
      } else {
        icone.addClass("bi-heart-fill").removeClass("bi-heart");
      }
    }).fail(function () {
      alert("error");
    });
  }

  $('a.js-like').each(function (link) {
    $(this).on('click', onClickBtnLike);
  });
  init();
  /* bouton close responsive login/register*/

  function init() {
    if ($(".popup").length) {
      var popupTop = $(".popup").offset().top;
      $('.close').css('top', popupTop - 20);
      var popupLeft = $('.popup').offset().left;
      $('.close').css('right', popupLeft - 20);
    }
  }

  $(window).on('resize', function () {
    init();
  });
});

/***/ }),

/***/ "./assets/bootstrap.js":
/*!*****************************!*\
  !*** ./assets/bootstrap.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "app": () => (/* binding */ app)
/* harmony export */ });
/* harmony import */ var _symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @symfony/stimulus-bridge */ "./node_modules/@symfony/stimulus-bridge/dist/index.js");
 // Registers Stimulus controllers from controllers.json and in the controllers/ directory

var app = (0,_symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__.startStimulusApp)(__webpack_require__("./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.(j|t)sx?$")); // register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_symfony_stimulus-bridge_dist_index_js-node_modules_bootstrap_dist_js_boo-b81c02"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QW9CSSxjQUFwQjtBQUNILEdBRkQ7QUFJQWtCLEVBQUFBLElBQUk7QUFFSjs7QUFDQSxXQUFTQSxJQUFULEdBQWdCO0FBQ1osUUFBSS9DLENBQUMsQ0FBQyxRQUFELENBQUQsQ0FBWWdELE1BQWhCLEVBQXdCO0FBQ3BCLFVBQUlDLFFBQVEsR0FBR2pELENBQUMsQ0FBQyxRQUFELENBQUQsQ0FBWWtELE1BQVosR0FBcUJDLEdBQXBDO0FBQ0FuRCxNQUFBQSxDQUFDLENBQUMsUUFBRCxDQUFELENBQVkwQixHQUFaLENBQWdCLEtBQWhCLEVBQXVCdUIsUUFBUSxHQUFHLEVBQWxDO0FBQ0EsVUFBSUcsU0FBUyxHQUFHcEQsQ0FBQyxDQUFDLFFBQUQsQ0FBRCxDQUFZa0QsTUFBWixHQUFxQkcsSUFBckM7QUFDQXJELE1BQUFBLENBQUMsQ0FBQyxRQUFELENBQUQsQ0FBWTBCLEdBQVosQ0FBZ0IsT0FBaEIsRUFBeUIwQixTQUFTLEdBQUcsRUFBckM7QUFDSDtBQUNKOztBQUVEcEQsRUFBQUEsQ0FBQyxDQUFDc0QsTUFBRCxDQUFELENBQVU3QixFQUFWLENBQWEsUUFBYixFQUF1QixZQUFNO0FBQ3pCc0IsSUFBQUEsSUFBSTtBQUNQLEdBRkQ7QUFJSCxDQXJGRDs7Ozs7Ozs7Ozs7Ozs7OztDQ2RBOztBQUNPLElBQU1TLEdBQUcsR0FBR0QsMEVBQWdCLENBQUNFLDBJQUFELENBQTVCLEVBTVA7QUFDQTs7Ozs7Ozs7Ozs7O0FDVkEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vfC9cXC4oanx0KXN4Iiwid2VicGFjazovLy8uL2Fzc2V0cy9jb250cm9sbGVycy5qc29uIiwid2VicGFjazovLy8uL2Fzc2V0cy9jb250cm9sbGVycy9oZWxsb19jb250cm9sbGVyLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Jvb3RzdHJhcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2FwcC5jc3M/M2ZiYSJdLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgbWFwID0ge1xuXHRcIi4vaGVsbG9fY29udHJvbGxlci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL0BzeW1mb255L3N0aW11bHVzLWJyaWRnZS9sYXp5LWNvbnRyb2xsZXItbG9hZGVyLmpzIS4vYXNzZXRzL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXIuanNcIlxufTtcblxuXG5mdW5jdGlvbiB3ZWJwYWNrQ29udGV4dChyZXEpIHtcblx0dmFyIGlkID0gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSk7XG5cdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKGlkKTtcbn1cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0UmVzb2x2ZShyZXEpIHtcblx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhtYXAsIHJlcSkpIHtcblx0XHR2YXIgZSA9IG5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIgKyByZXEgKyBcIidcIik7XG5cdFx0ZS5jb2RlID0gJ01PRFVMRV9OT1RfRk9VTkQnO1xuXHRcdHRocm93IGU7XG5cdH1cblx0cmV0dXJuIG1hcFtyZXFdO1xufVxud2VicGFja0NvbnRleHQua2V5cyA9IGZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0S2V5cygpIHtcblx0cmV0dXJuIE9iamVjdC5rZXlzKG1hcCk7XG59O1xud2VicGFja0NvbnRleHQucmVzb2x2ZSA9IHdlYnBhY2tDb250ZXh0UmVzb2x2ZTtcbm1vZHVsZS5leHBvcnRzID0gd2VicGFja0NvbnRleHQ7XG53ZWJwYWNrQ29udGV4dC5pZCA9IFwiLi9hc3NldHMvY29udHJvbGxlcnMgc3luYyByZWN1cnNpdmUgLi9ub2RlX21vZHVsZXMvQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlL2xhenktY29udHJvbGxlci1sb2FkZXIuanMhIFxcXFwuKGp8dClzeD8kXCI7IiwiZXhwb3J0IGRlZmF1bHQge1xufTsiLCJpbXBvcnQgeyBDb250cm9sbGVyIH0gZnJvbSAnQGhvdHdpcmVkL3N0aW11bHVzJztcblxuLypcbiAqIFRoaXMgaXMgYW4gZXhhbXBsZSBTdGltdWx1cyBjb250cm9sbGVyIVxuICpcbiAqIEFueSBlbGVtZW50IHdpdGggYSBkYXRhLWNvbnRyb2xsZXI9XCJoZWxsb1wiIGF0dHJpYnV0ZSB3aWxsIGNhdXNlXG4gKiB0aGlzIGNvbnRyb2xsZXIgdG8gYmUgZXhlY3V0ZWQuIFRoZSBuYW1lIFwiaGVsbG9cIiBjb21lcyBmcm9tIHRoZSBmaWxlbmFtZTpcbiAqIGhlbGxvX2NvbnRyb2xsZXIuanMgLT4gXCJoZWxsb1wiXG4gKlxuICogRGVsZXRlIHRoaXMgZmlsZSBvciBhZGFwdCBpdCBmb3IgeW91ciB1c2UhXG4gKi9cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIGV4dGVuZHMgQ29udHJvbGxlciB7XG4gICAgY29ubmVjdCgpIHtcbiAgICAgICAgdGhpcy5lbGVtZW50LnRleHRDb250ZW50ID0gJ0hlbGxvIFN0aW11bHVzISBFZGl0IG1lIGluIGFzc2V0cy9jb250cm9sbGVycy9oZWxsb19jb250cm9sbGVyLmpzJztcbiAgICB9XG59XG4iLCIvKlxuICogV2VsY29tZSB0byB5b3VyIGFwcCdzIG1haW4gSmF2YVNjcmlwdCBmaWxlIVxuICpcbiAqIFdlIHJlY29tbWVuZCBpbmNsdWRpbmcgdGhlIGJ1aWx0IHZlcnNpb24gb2YgdGhpcyBKYXZhU2NyaXB0IGZpbGVcbiAqIChhbmQgaXRzIENTUyBmaWxlKSBpbiB5b3VyIGJhc2UgbGF5b3V0IChiYXNlLmh0bWwudHdpZykuXG4gKi9cblxuLy8gYW55IENTUyB5b3UgaW1wb3J0IHdpbGwgb3V0cHV0IGludG8gYSBzaW5nbGUgY3NzIGZpbGUgKGFwcC5jc3MgaW4gdGhpcyBjYXNlKVxuaW1wb3J0ICcuL3N0eWxlcy9hcHAuY3NzJztcblxuLy8gc3RhcnQgdGhlIFN0aW11bHVzIGFwcGxpY2F0aW9uXG5pbXBvcnQgJy4vYm9vdHN0cmFwJztcblxuLy8gWW91IGNhbiBzcGVjaWZ5IHdoaWNoIHBsdWdpbnMgeW91IG5lZWRcbmltcG9ydCB7IFRvb2x0aXAsIFRvYXN0LCBQb3BvdmVyLCBDb2xsYXBzZSB9IGZyb20gJ2Jvb3RzdHJhcCc7XG5cbiQoZG9jdW1lbnQpLnJlYWR5KCgpID0+IHtcblxuICAgIC8qIEdlc3Rpb24gZm9ybS1jb2xsZWN0aW9uIHN0ZXBMaW5lcyBldCBpbmdyZWRpZW50TGluZXMgKi9cbiAgICBjb25zdCBuZXdJdGVtID0gKGUpID0+IHtcbiAgICAgICAgY29uc3QgY29sbGVjdGlvbkhvbGRlciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoZS5jdXJyZW50VGFyZ2V0LmRhdGFzZXQuY29sbGVjdGlvbik7XG5cbiAgICAgICAgY29uc3QgaXRlbSA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJsaVwiKTtcbiAgICAgICAgaXRlbS5jbGFzc0xpc3QuYWRkKFwiaW5saW5lXCIpO1xuICAgICAgICBpdGVtLmlubmVySFRNTCA9IGNvbGxlY3Rpb25Ib2xkZXJcbiAgICAgICAgICAgIC5kYXRhc2V0XG4gICAgICAgICAgICAucHJvdG90eXBlXG4gICAgICAgICAgICAucmVwbGFjZShcbiAgICAgICAgICAgICAgICAvX19uYW1lX18vZyxcbiAgICAgICAgICAgICAgICBjb2xsZWN0aW9uSG9sZGVyLmRhdGFzZXQuaW5kZXhcbiAgICAgICAgICAgICk7XG5cbiAgICAgICAgaXRlbS5xdWVyeVNlbGVjdG9yKFwiLmJ0bi1yZW1vdmVcIikuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsICgpID0+IHtcbiAgICAgICAgICAgIGl0ZW0ucmVtb3ZlKCk7XG4gICAgICAgIH0pO1xuICAgICAgICBjb2xsZWN0aW9uSG9sZGVyLmFwcGVuZENoaWxkKGl0ZW0pO1xuICAgICAgICBjb2xsZWN0aW9uSG9sZGVyLmRhdGFzZXQuaW5kZXgrKztcbiAgICB9O1xuXG4gICAgZG9jdW1lbnRcbiAgICAgICAgLnF1ZXJ5U2VsZWN0b3JBbGwoJy5idG4tcmVtb3ZlJylcbiAgICAgICAgLmZvckVhY2goYnRuID0+IGJ0bi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKGUpID0+IGUuY3VycmVudFRhcmdldC5jbG9zZXN0KFwiLmlubGluZVwiKS5yZW1vdmUoKSkpO1xuXG4gICAgZG9jdW1lbnRcbiAgICAgICAgLnF1ZXJ5U2VsZWN0b3JBbGwoJy5idG4tbmV3JylcbiAgICAgICAgLmZvckVhY2goYnRuID0+IGJ0bi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgbmV3SXRlbSkpO1xuXG4gICAgLyogRmVybWV0dXJlIG1lc3NhZ2VzIGNvbmZpcm1hdGlvbiBkZWxldGUgZXQgbG9naW4gKi9cbiAgICAkKCcub25EZWxldGUnKS5vbignY2xpY2snLCAoKSA9PiB7XG4gICAgICAgICQoJy5vdmVybGF5JykuY3NzKCdkaXNwbGF5JywgJ2ZsZXgnKTtcbiAgICB9KTtcblxuICAgICQoJy5tc2dDbG9zZScpLm9uKCdjbGljaycsICgpID0+IHtcbiAgICAgICAgJCgnLm92ZXJsYXknKS5jc3MoJ2Rpc3BsYXknLCAnbm9uZScpO1xuICAgIH0pO1xuXG4gICAgLyogRmVybWV0dXJlIGFkZGZsYXNoZXMgKi9cbiAgICAkKCcuZmxhc2hDbG9zZScpLm9uKCdjbGljaycsICgpID0+IHtcbiAgICAgICAgJCgnLmZsYXNoQ2xvc2UnKS5wYXJlbnQoKS5zbGlkZVVwKFwic2xvd1wiKTtcbiAgICB9KTtcblxuICAgIC8qR2VzdGlvbiBBamF4IGRlcyBmYXZvcmlzICovXG4gICAgZnVuY3Rpb24gb25DbGlja0J0bkxpa2UoZXZlbnQpIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgbGV0IHVybCA9ICQodGhpcykuYXR0cihcImhyZWZcIik7XG4gICAgICAgIGNvbnN0IGljb25lID0gJCh0aGlzKS5jaGlsZHJlbignaScpO1xuICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgbWV0aG9kOiBcIkdFVFwiLFxuICAgICAgICAgICAgdXJsOiB1cmwsXG4gICAgICAgIH0pLmRvbmUoZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICBpZiAoaWNvbmUuaGFzQ2xhc3MoXCJiaS1oZWFydC1maWxsXCIpKSB7XG4gICAgICAgICAgICAgICAgaWNvbmUuYWRkQ2xhc3MoXCJiaS1oZWFydFwiKS5yZW1vdmVDbGFzcyhcImJpLWhlYXJ0LWZpbGxcIik7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBlbHNlIHtcbiAgICAgICAgICAgICAgICBpY29uZS5hZGRDbGFzcyhcImJpLWhlYXJ0LWZpbGxcIikucmVtb3ZlQ2xhc3MoXCJiaS1oZWFydFwiKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSkuZmFpbChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBhbGVydChcImVycm9yXCIpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICAkKCdhLmpzLWxpa2UnKS5lYWNoKGZ1bmN0aW9uIChsaW5rKSB7XG4gICAgICAgICQodGhpcykub24oJ2NsaWNrJywgb25DbGlja0J0bkxpa2UpO1xuICAgIH0pO1xuXG4gICAgaW5pdCgpO1xuXG4gICAgLyogYm91dG9uIGNsb3NlIHJlc3BvbnNpdmUgbG9naW4vcmVnaXN0ZXIqL1xuICAgIGZ1bmN0aW9uIGluaXQoKSB7XG4gICAgICAgIGlmICgkKFwiLnBvcHVwXCIpLmxlbmd0aCkge1xuICAgICAgICAgICAgbGV0IHBvcHVwVG9wID0gJChcIi5wb3B1cFwiKS5vZmZzZXQoKS50b3A7XG4gICAgICAgICAgICAkKCcuY2xvc2UnKS5jc3MoJ3RvcCcsIHBvcHVwVG9wIC0gMjApO1xuICAgICAgICAgICAgbGV0IHBvcHVwTGVmdCA9ICQoJy5wb3B1cCcpLm9mZnNldCgpLmxlZnQ7XG4gICAgICAgICAgICAkKCcuY2xvc2UnKS5jc3MoJ3JpZ2h0JywgcG9wdXBMZWZ0IC0gMjApO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgJCh3aW5kb3cpLm9uKCdyZXNpemUnLCAoKSA9PiB7XG4gICAgICAgIGluaXQoKTtcbiAgICB9KTtcblxufSk7XG5cbiIsImltcG9ydCB7IHN0YXJ0U3RpbXVsdXNBcHAgfSBmcm9tICdAc3ltZm9ueS9zdGltdWx1cy1icmlkZ2UnO1xuXG4vLyBSZWdpc3RlcnMgU3RpbXVsdXMgY29udHJvbGxlcnMgZnJvbSBjb250cm9sbGVycy5qc29uIGFuZCBpbiB0aGUgY29udHJvbGxlcnMvIGRpcmVjdG9yeVxuZXhwb3J0IGNvbnN0IGFwcCA9IHN0YXJ0U3RpbXVsdXNBcHAocmVxdWlyZS5jb250ZXh0KFxuICAgICdAc3ltZm9ueS9zdGltdWx1cy1icmlkZ2UvbGF6eS1jb250cm9sbGVyLWxvYWRlciEuL2NvbnRyb2xsZXJzJyxcbiAgICB0cnVlLFxuICAgIC9cXC4oanx0KXN4PyQvXG4pKTtcblxuLy8gcmVnaXN0ZXIgYW55IGN1c3RvbSwgM3JkIHBhcnR5IGNvbnRyb2xsZXJzIGhlcmVcbi8vIGFwcC5yZWdpc3Rlcignc29tZV9jb250cm9sbGVyX25hbWUnLCBTb21lSW1wb3J0ZWRDb250cm9sbGVyKTtcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJDb250cm9sbGVyIiwiZWxlbWVudCIsInRleHRDb250ZW50IiwiVG9vbHRpcCIsIlRvYXN0IiwiUG9wb3ZlciIsIkNvbGxhcHNlIiwiJCIsImRvY3VtZW50IiwicmVhZHkiLCJuZXdJdGVtIiwiZSIsImNvbGxlY3Rpb25Ib2xkZXIiLCJxdWVyeVNlbGVjdG9yIiwiY3VycmVudFRhcmdldCIsImRhdGFzZXQiLCJjb2xsZWN0aW9uIiwiaXRlbSIsImNyZWF0ZUVsZW1lbnQiLCJjbGFzc0xpc3QiLCJhZGQiLCJpbm5lckhUTUwiLCJwcm90b3R5cGUiLCJyZXBsYWNlIiwiaW5kZXgiLCJhZGRFdmVudExpc3RlbmVyIiwicmVtb3ZlIiwiYXBwZW5kQ2hpbGQiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsImJ0biIsImNsb3Nlc3QiLCJvbiIsImNzcyIsInBhcmVudCIsInNsaWRlVXAiLCJvbkNsaWNrQnRuTGlrZSIsImV2ZW50IiwicHJldmVudERlZmF1bHQiLCJ1cmwiLCJhdHRyIiwiaWNvbmUiLCJjaGlsZHJlbiIsImFqYXgiLCJtZXRob2QiLCJkb25lIiwicmVzcG9uc2UiLCJoYXNDbGFzcyIsImFkZENsYXNzIiwicmVtb3ZlQ2xhc3MiLCJmYWlsIiwiYWxlcnQiLCJlYWNoIiwibGluayIsImluaXQiLCJsZW5ndGgiLCJwb3B1cFRvcCIsIm9mZnNldCIsInRvcCIsInBvcHVwTGVmdCIsImxlZnQiLCJ3aW5kb3ciLCJzdGFydFN0aW11bHVzQXBwIiwiYXBwIiwicmVxdWlyZSIsImNvbnRleHQiXSwic291cmNlUm9vdCI6IiJ9