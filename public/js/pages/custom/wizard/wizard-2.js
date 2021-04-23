/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 120);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/metronic/js/pages/custom/wizard/wizard-2.js":
/*!***************************************************************!*\
  !*** ./resources/metronic/js/pages/custom/wizard/wizard-2.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
 // Class definition

var KTWizard2 = function () {
  // Base elements
  var _wizardEl;

  var _formEl;

  var _wizard;

  var _validations = []; // Private functions

  var initWizard = function initWizard() {
    // Initialize form wizard
    _wizard = new KTWizard(_wizardEl, {
      startStep: 1,
      // initial active step number
      clickableSteps: false // to make steps clickable this set value true and add data-wizard-clickable="true" in HTML for class="wizard" element

    }); // Validation before going to next page

    _wizard.on('beforeNext', function (wizard) {
      // Don't go to the next step yet
      _wizard.stop(); // Validate form


      var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step


      validator.validate().then(function (status) {
        if (status == 'Valid') {
          _wizard.goNext();

          KTUtil.scrollTop();
        } else {
          Swal.fire({
            text: "Hata, Görünüşe göre bazı hatalar tespit edildi, lütfen tekrar deneyin.",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Tamam, kontrol et!",
            customClass: {
              confirmButton: "btn font-weight-bold btn-light"
            }
          }).then(function () {
            KTUtil.scrollTop();
          });
        }
      });
    }); // Change event


    _wizard.on('change', function (wizard) {
      KTUtil.scrollTop();
    });
  };

  var initValidation = function initValidation() {
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    // Step 1
    _validations.push(FormValidation.formValidation(_formEl, {
      fields: {
          book_name: {
          validators: {
            notEmpty: {
              message: 'Kitap adı zorunlu'
            }
          }
        },
        author_name: {
          validators: {
            notEmpty: {
              message: 'Kitap yazar adı zorunlu'
            }
          }
        }
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap: new FormValidation.plugins.Bootstrap()
      }
    }));

      // Step 2
      _validations.push(FormValidation.formValidation(_formEl, {
          fields: {
              book_description: {
                  validators: {
                      notEmpty: {
                          message: 'Kitap açıklaması zorunlu'
                      }
                  }
              }
          },
          plugins: {
              trigger: new FormValidation.plugins.Trigger(),
              bootstrap: new FormValidation.plugins.Bootstrap()
          }
      }));

    // Step 2
    _validations.push(FormValidation.formValidation(_formEl, {
      fields: {
        publisher: {
          validators: {
            notEmpty: {
              message: 'Yayınevi adı zorunlu'
            }
          }
        }
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap: new FormValidation.plugins.Bootstrap()
      }
    }));

    // Step 3
      _validations.push(FormValidation.formValidation(_formEl, {
          fields: {
              category_id: {
                  validators: {
                      notEmpty: {
                          message: 'Delivery type is required'
                      }
                  }
              },
              page_number: {
                  validators: {
                      notEmpty: {
                          message: 'Packaging type is required'
                      }
                  }
              }
          },
          plugins: {
              trigger: new FormValidation.plugins.Trigger(),
              bootstrap: new FormValidation.plugins.Bootstrap()
          }
      }));
  };

  return {
    // public functions
    init: function init() {
      _wizardEl = KTUtil.getById('kt_wizard_v2');
      _formEl = KTUtil.getById('kt_form');
      initWizard();
      initValidation();
    }
  };
}();

jQuery(document).ready(function () {
  KTWizard2.init();
});

/***/ }),

/***/ 120:
/*!*********************************************************************!*\
  !*** multi ./resources/metronic/js/pages/custom/wizard/wizard-2.js ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/enes/Desktop/street-books-laravel/resources/metronic/js/pages/custom/wizard/wizard-2.js */"./resources/metronic/js/pages/custom/wizard/wizard-2.js");


/***/ })

/******/ });
