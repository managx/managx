/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/Applications/MAMP/htdocs/managx/wp-content/plugins/managx/assets/js";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';

	var _project = __webpack_require__(1);

	var _project2 = _interopRequireDefault(_project);

	var _project_form = __webpack_require__(2);

	var _project_form2 = _interopRequireDefault(_project_form);

	var _users_list = __webpack_require__(3);

	var _users_list2 = _interopRequireDefault(_users_list);

	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

	function managx_js_var_extract(variable) {
	    for (var key in variable) {
	        window[key] = variable[key];
	    }
	}

	managx_js_var_extract(managx_localize_vars);

	Vue.component('project', _project2.default);

	Vue.component('project_form', _project_form2.default);

	Vue.component('users_list', _users_list2.default);

	var vm = new Vue({
	    el: '#managx-app',
	    data: function data() {
	        return {
	            msg: 'Hello Managx!',
	            show_create_form: false
	        };
	    }
	});

/***/ }),
/* 1 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	exports.default = {
	    template: '#tmpl-managx-project',
	    data: function data() {
	        return {
	            name: 'Hello Managx!'
	        };
	    }
	};

/***/ }),
/* 2 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	exports.default = {
	    template: '#tmpl-managx-project-form',
	    data: function data() {
	        return {
	            project: {}

	        };
	    },

	    props: ['show_create_form'],
	    methods: {
	        create_project: function create_project() {
	            this.$parent.show_create_form = false;
	        }
	    }

	};

/***/ }),
/* 3 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	exports.default = {
	    template: '#tmpl-managx-users-list',
	    data: function data() {
	        return {
	            user_list: managx_localize_vars.wp_user_list

	        };
	    },

	    props: ['users']

	};

/***/ })
/******/ ]);