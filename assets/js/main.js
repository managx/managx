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

// Single Project Component
import SingleProject from './components/single-project';

// Single Project Tasks Component
import SingleProjectTasks from './components/single-project-tasks';

//list
// Single Project Lists Component
import SingleProjectLists from './components/single-project-lists';

// Single Project Lists Component
import ListForm from './components/list-form';

// List
import List from './components/list';
Vue.component('list', List);

//task

import TaskForm from './components/task-form';

import SingleTask from './components/single-task';

// Single Project Lists Component
import SingleList from './components/single-list';

// All WP User List Component
import UsersList from './components/users';

Vue.component('users-list', UsersList);

const routes = [
    {path: '/', redirect: '/projects'},
    {path: '/projects', component: ProjectsRoot},
    {path: '/projects/create', component: ProjectForm},
    {path: '/projects/:id', redirect: '/projects/:id/details'},
    {path: '/projects/:id/details', component: SingleProject},
    {path: '/projects/:id/tasks', component: SingleProjectTasks},
    {path: '/projects/:id/lists', component: SingleProjectLists},
    {path: '/projects/:id/lists/create', component: ListForm},
    //task
    {path: '/projects/:id/lists/:listId/tasks', component: SingleList},
    {path: '/projects/:id/lists/:listId/tasks/create', component: TaskForm},
    {path: '/projects/:id/lists/:listId/tasks/:taskId', component: SingleTask},

    {path: '/projects/:id/settings', component: Settings},
];

const router = new VueRouter({
    routes,
    'linkActiveClass': 'active'
});

var managxApp = new Vue({
    store,
    router,
    el: '#managx-app',
    data () {
        return {
            msg: 'Hello Managx!'
        };
    },
    created () {
    },
    methods: {
    }
});
