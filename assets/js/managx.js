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
/******/ 	__webpack_require__.p = "G:\\wamp64\\www\\managx\\wp-content\\plugins\\managx\\assets\\js";

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

	var _projectForm = __webpack_require__(2);

	var _projectForm2 = _interopRequireDefault(_projectForm);

	var _users = __webpack_require__(3);

	var _users2 = _interopRequireDefault(_users);

	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

	function managx_js_var_extract(variable) {
	    for (var key in variable) {
	        window[key] = variable[key];
	    }
	}

	managx_js_var_extract(managx_localize_vars);

	Vue.component('project', _project2.default);

	Vue.component('project-form', _projectForm2.default);

	Vue.component('users-list', _users2.default);

	var vm = new Vue({
	    el: '#managx-app',
	    data: function data() {
	        return {
	            msg: 'Hello Managx!',
	            showCreateForm: false,
	            projects: []

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
	            project: {},
	            form: {
	                name: '',
	                description: ''
	            }
	        };
	    },

	    props: ['showCreateForm'],

	    methods: {
	        create_project: function create_project() {
	            this.$parent.showCreateForm = false;

	            var data = {
	                'action': 'create_project',
	                'formData': jQuery("#create-project-form").serialize()
	            };

	            jQuery.ajax({
	                data: data,
	                type: 'post',
	                url: ajaxurl,
	                success: function success(data) {
	                    if (data.success == true) {
	                        this.$parent.projects.push(data.project);
	                    }
	                }
	            });
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
	    template: '#tmpl-managx-users',
	    data: function data() {
	        return {
	            users: []
	        };
	    },

	    props: '',
	    mounted: function mounted() {}
	};

/***/ })
/******/ ]);