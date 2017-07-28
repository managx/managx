function managx_js_var_extract(variable) {
    for (var key in variable) {
        window[key] = variable[key];
    }
}

managx_js_var_extract(managx_localize_vars);

import Multiselect from 'vue-multiselect'
        Vue.component('multiselect', Multiselect);

// Main Project Components
import projectsRoot from './components/projects-root';
Vue.component('projects-root', projectsRoot);

// Main Project Components
import project from './components/project';
Vue.component('project', project);

// Project Form Component 
import project_form from './components/project-form';
Vue.component('project-form', project_form);

// Main List Components
import tasklist from './components/task-list';
Vue.component('task-list', tasklist);

// Task Lists Components
import taskListsRoot from './components/task-lists-root';
Vue.component('task-lists-root', taskListsRoot);

// All WP User List Component
import users_list from './components/users';

Vue.component('users-list', users_list);

var managx_app = new Vue({
    el: '#managx-app',
    data() {
        return {
            msg: 'Hello Managx!',
            showCreateForm: false,
            projects: [],
            //
            lists : []
        }
    },
    mounted() {

    },
    methods: {
        //get projects
        eventGetProjects : function ( res ) {
            this.projects = res;
        },
        //get lists
        eventGetLists : function ( res ) {
            this.lists = res;
        }
    }
});
