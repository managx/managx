import Vuex from 'vuex';

export default new Vuex.Store({
    state: {
        project: {},
        projects: [],
        taskLists: []
    },
    getters: {
        project: state => {
            return state.project;
        },
        projects: state => {
            return state.projects;
        },
        taskLists: state => {
            return state.taskLists;
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
        getTaskLists (state, {taskLists}) {
            state.taskLists = taskLists;
        },
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
        getTaskLists (context, {projectId, limit, offset}) {
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
                        context.commit('getTaskLists', {taskLists: response.data});
                    }
                }
            });
        }
    }
});
