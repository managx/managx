import Vuex from 'vuex';

export default new Vuex.Store({
    state: {
        projects: []
    },
    getters: {
        projects: state => {
            return state.projects;
        }
    },
    mutations: {
        getProjects (state, {projects}) {
            state.projects = projects;
        },
        createProject (state, {project}) {
            state.projects.push(project);
        }
    },
    actions: {
        getProjects (context, {limit, offset}) {
            var data = {
                'action': 'get_projects',
                'limit': limit,
                'offset': offset,
            };

            jQuery.ajax({
                'data': data,
                'type': 'get',
                'url': ajaxurl,
                success: function (response) {
                    if (response.success) {
                        context.commit('getProjects', {projects: response.data});
                    }
                }
            });

        },
        createProject (context, {formSelector}) {
            var data = {
                'action': 'create_project',
                'formData': jQuery(formSelector).serialize(),
            };

            jQuery.ajax({
                data: data,
                type: 'post',
                url: ajaxurl,
                success: function (response) {
                    if (response.success) {
                        context.commit('createProject', {project: response.data});
                    }
                }
            });
        },
        createList (context, {formSelector}) {
            var data = {
                'action': 'create_list',
                'formData': jQuery(formSelector).serialize(),
            };

            jQuery.ajax({
                data: data,
                type: 'post',
                url: ajaxurl,
                success: function (response) {
                    if (response.success) {
                        context.commit('createList', {list: response.data});
                    }
                }
            });
        },
    }
});
