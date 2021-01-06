(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/assets/js/app"],{

/***/ "./src/js/app.js":
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");

__webpack_require__(/*! ./gallery */ "./src/js/gallery.js");

__webpack_require__(/*! ./scrollreveal */ "./src/js/scrollreveal.js"); // require('./particles');

/***/ }),

/***/ "./src/js/gallery.js":
/*!***************************!*\
  !*** ./src/js/gallery.js ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports) {

document.addEventListener('DOMContentLoaded', function () {
  var gallery = document.querySelector('.gallery');
  var preview = gallery.querySelector('.preview-images > img');
  var items = gallery.querySelectorAll('.gallery-images');
  var nextBtn = gallery.querySelector('.gallery-control.next');
  var prevBtn = gallery.querySelector('.gallery-control.prev');
  items.forEach(function (item) {
    item.addEventListener('click', function () {
      preview.setAttribute('src', this.querySelector('img').getAttribute('src'));
      removeActive();
      this.classList.add('active');
      this.scrollIntoView({
        behavior: 'smooth',
        block: 'end',
        inline: 'nearest'
      });
    });
  });

  function removeActive() {
    var active = gallery.querySelector('.active');
    active.classList.remove('active');
  }

  function changeStep(btn) {
    var itemsArray = Array.from(items);
    var index = 0;
    var active = gallery.querySelector('.active');
    index = itemsArray.indexOf(active);
    itemsArray[index].classList.remove('active');

    if (btn === 'next') {
      index++;
      if (index > itemsArray.length - 1) index = 0;
    } else if (btn === 'prev') {
      index--;
      if (index < 0) index = itemsArray.length - 1;
    }

    itemsArray[index].classList.add('active');
    preview.setAttribute('src', itemsArray[index].querySelector('img').getAttribute('src'));
    itemsArray[index].scrollIntoView({
      behavior: 'smooth',
      block: 'nearest',
      inline: 'nearest'
    });
  }

  nextBtn.addEventListener('click', function () {
    changeStep('next');
  });
  prevBtn.addEventListener('click', function () {
    changeStep('prev');
  });
});

/***/ }),

/***/ "./src/js/scrollreveal.js":
/*!********************************!*\
  !*** ./src/js/scrollreveal.js ***!
  \********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var scrollreveal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! scrollreveal */ "./node_modules/scrollreveal/dist/scrollreveal.es.js");
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }


var slideUp = {
  distance: '100px',
  origin: 'bottom',
  duration: 1500,
  delay: 500,
  reset: true
};
var slideUpNodeItem = [document.querySelector('#card-2'), document.querySelector('#why-4')];
Object(scrollreveal__WEBPACK_IMPORTED_MODULE_0__["default"])().reveal(slideUpNodeItem, _objectSpread(_objectSpread({}, slideUp), {}, {
  delay: 300
}));
Object(scrollreveal__WEBPACK_IMPORTED_MODULE_0__["default"])().reveal('.slideUp', slideUp);
var slideLeft = {
  distance: '100px',
  origin: 'right',
  duration: 1500,
  delay: 300,
  reset: true
};
var slideLeftNodeItem = [document.querySelector('#card-3'), document.querySelector('#why-2')];
Object(scrollreveal__WEBPACK_IMPORTED_MODULE_0__["default"])().reveal(slideLeftNodeItem, slideLeft);
Object(scrollreveal__WEBPACK_IMPORTED_MODULE_0__["default"])().reveal('.slideLeft', slideLeft);
var slideRight = {
  distance: '100px',
  origin: 'left',
  duration: 1500,
  delay: 300,
  reset: true
};
var slideRightNodeItem = [document.querySelector('#card-1'), document.querySelector('#why-3')];
Object(scrollreveal__WEBPACK_IMPORTED_MODULE_0__["default"])().reveal(slideRightNodeItem, slideRight);
Object(scrollreveal__WEBPACK_IMPORTED_MODULE_0__["default"])().reveal('.slideRight', slideRight);
var slideBottom = {
  distance: '100px',
  origin: 'top',
  duration: 1500,
  delay: 300,
  reset: true
};
Object(scrollreveal__WEBPACK_IMPORTED_MODULE_0__["default"])().reveal('#why-1', slideBottom);
Object(scrollreveal__WEBPACK_IMPORTED_MODULE_0__["default"])().reveal('.slideBottom', slideBottom);
var fadeIn = {
  duration: 1500,
  delay: 300,
  reset: true,
  easing: 'ease-in-out'
};
Object(scrollreveal__WEBPACK_IMPORTED_MODULE_0__["default"])().reveal('.fadeIn', fadeIn);

/***/ }),

/***/ "./src/scss/app.scss":
/*!***************************!*\
  !*** ./src/scss/app.scss ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************!*\
  !*** multi ./src/js/app.js ./src/scss/app.scss ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Applications/MAMP/htdocs/alexandre/wp-content/themes/alexandre/src/js/app.js */"./src/js/app.js");
module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/alexandre/wp-content/themes/alexandre/src/scss/app.scss */"./src/scss/app.scss");


/***/ })

},[[0,"/assets/js/manifest","/assets/js/vendor"]]]);