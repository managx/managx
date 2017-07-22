function managx_js_var_extract(variable) {
    for (var key in variable) {
        window[key] = variable[key];
    }
}

managx_js_var_extract(managx_localize_vars);

import Multiselect from 'vue-multiselect'
Vue.component('multiselect', Multiselect);

// Main Project Components
import project from './components/project';
Vue.component('project', project); 

// Project Form Component 
import project_form from './components/project-form';
Vue.component('project-form', project_form);

 
// All WP User List Component
import users_list from './components/users';
 
Vue.component('users-list', users_list);


var vm = new Vue({
    el: '#managx-app',
    data() {
        return {
            msg: 'Hello Managx!',
            showCreateForm: false,
            projects: [
                {
                    'name' : "Project  Name", 
                    'Discription' : "Discription"
                },
                {
                    'name' : "Project  Name", 
                    'Discription' : "Discription"
                }, 
                {
                    'name' : "Project  Name", 
                    'Discription' : "Discription"
                },
                {
                    'name' : "Project  Name", 
                    'Discription' : "Discription"
                }
            ], 
        }
    },
    mounted(){ 
        this.getProjects(20, 0); 
    },
    methods: {
        getProjects: function (limit, offset) {
            
            var data = {
                'action': 'get_projects',
                'limit': limit,
                'offset': offset,
            }
            jQuery.ajax({
                'data': data,
                'type': 'get',
                'url': ajaxurl,
                success: function (data) {
                    if (data.success == true) {
                        this.$parent.projects.push(data.projects);
                    }
                }
            });
        }
    }
});
