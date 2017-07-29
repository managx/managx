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

// Main Project Component
import ProjectsRoot from './components/projects-root';

// Settings Component
import Settings from './components/settings';

// Main Project Component
import Project from './components/project';
Vue.component('project', Project);

// Project Form Component
import ProjectForm from './components/project-form';
// Vue.component('project-form', ProjectForm);

// Main List Component
import TaskList from './components/task-list';
Vue.component('task-list', TaskList);

// Task Lists Component
import TaskListsRoot from './components/task-lists-root';
Vue.component('task-lists-root', TaskListsRoot);

// Tasks Component
import TasksRoot from './components/tasks-root';
Vue.component('tasks-root', TasksRoot);

// All WP User List Component
import UsersList from './components/users';

Vue.component('users-list', UsersList);

const routes = [
    { path: '/', component: ProjectsRoot },
    { path: '/settings', component: Settings },
    { path: '/projects/create', component: ProjectForm }
];

const router = new VueRouter({
    routes,
    'linkExactActiveClass': 'active'
});

var managxApp = new Vue({
    store,
    router,
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
