import VueRouter from 'vue-router';
import store from './store';

function managx_js_var_extract(variable) {
    for (var key in variable) {
        window[key] = variable[key];
    }
}

managx_js_var_extract(managx_localize_vars);

import Multiselect from 'vue-multiselect';
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

// Tasks Components
import tasksRoot from './components/tasks-root';
Vue.component('tasks-root', tasksRoot);

// All WP User List Component
import users_list from './components/users';

Vue.component('users-list', users_list);

Vue.use(VueRouter);

var managx_app = new Vue({
    store,
    el: '#managx-app',
    data() {
        return {
            msg: 'Hello Managx!',
            showCreateForm: false,
            projects: [],
            //
            lists: [],
            //
            tasks: [],
        }
    },
    created() {

    },
    methods: {
        //get projects
        eventGetProjects(res) {
            this.projects = res;
        },
        //get lists
        eventGetLists(res) {
            this.lists = res;
        },
        //get tasks
        eventGetTasks(res) {
            this.tasks = res;
        }
    }
});
