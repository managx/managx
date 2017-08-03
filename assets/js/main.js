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

// Single Project Tasks Component
import SingleProjectTaskLists from './components/single-project-task-lists';

// All WP User List Component
import UsersList from './components/users';

Vue.component('users-list', UsersList);

const routes = [
    { path: '/', redirect: '/projects' },
    { path: '/projects', component: ProjectsRoot },
    { path: '/projects/create', component: ProjectForm },
    { path: '/projects/:id', redirect: '/projects/:id/details' },
    { path: '/projects/:id/details', component: SingleProject },
    { path: '/projects/:id/tasks', component: SingleProjectTasks },
    { path: '/projects/:id/lists', component: SingleProjectTaskLists },
    { path: '/projects/:id/settings', component: Settings }
];

const router = new VueRouter({
    routes,
    'linkActiveClass': 'active'
});

var managxApp = new Vue({
    store,
    router,
    el: '#managx-app',
    data() {
        return {
            msg: 'Hello Managx!'
        }
    },
    created() {
    },
    methods: {
    }
});
