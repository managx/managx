import Vuex from 'vuex';

export default new Vuex.Store({
    state: {
        project: {},
        projects: []
    },
    getters: {
        project: state => {
            return state.project;
        },
        projects: state => {
            return state.projects;
        }
    },
    mutations: {
        getProject (state, {project}) {
            state.project = project;
        },
        getProjects (state, {projects}) {
            state.projects = projects;
        },
        createProject (state, {project}) {
            state.projects.push(project);
        }
    },
    actions: {
        getProject (context, {id}) {
            var data = {
                'action': 'get_project',
                'id': id
            };

            jQuery.ajax({
                'data': data,
                'type': 'get',
                'url': ajaxurl,
                success: function (response) {
                    if (response.success) {
                        context.commit('getProject', {project: response.data});
                    }
                }
            });

        },
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
        getLists (context, {limit, offset}) {
            var data = {
                'action': 'get_lists',
                'limit': limit,
                'offset': offset,
            }, _this = this;

            jQuery.ajax({
                'data': data,
                'type': 'get',
                'url': ajaxurl,
                success: function (data) {
                    if (data.success == true) {

                        var lists = [];
                        for (var key in data.lists) {

                            lists.push(data.lists[key]);

                        }
                        //
                        _this.lists = lists;

                    }
                }
            });
        }
    }
});
