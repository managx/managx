import Vuex from 'vuex';

export default new Vuex.Store({
    state: {
        project: {},
        projects: [],
        lists: []
    },
    getters: {
        project: state => {
            return state.project;
        },
        projects: state => {
            return state.projects;
        },
        lists: state => {
            return state.lists;
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
        },
        getLists (state, {lists}) {
            state.lists = lists;
        },

        sortBy (state, {type, sortKey, reverse}) {
            state[type] = _.sortBy(state[type], sortKey, reverse ? 'desc' : 'asc');

            if (reverse) {
                state[type].reverse();
            }
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

            /*jQuery.ajax({
                data: data,
                type: 'post',
                url: ajaxurl,
                success: function (response) {
                    if (response.success) {
                        context.commit('createList', {list: response.data});
                    }
                }
            });*/
            jQuery.post(
                ajaxurl,
                data,
                function (response) {
                    console('he he he');
                    if (response.success) {
                        context.commit('createList', {list: response.data});
                    }
                }
            )


        },
        getLists (context, {projectId, limit, offset}) {
            var data = {
                'action': 'get_lists',
                'project_id': projectId,
                'limit': limit,
                'offset': offset,
            };

            jQuery.ajax({
                'data': data,
                'type': 'get',
                'url': ajaxurl,
                success: function (response) {
                    if (response.success) {
                        context.commit('getLists', {lists: response.data});
                    }
                }
            });
        },
        sortBy (context, {type, sortKey, reverse}) {
            context.commit('sortBy', {type, sortKey, reverse});
        }
    }
});
