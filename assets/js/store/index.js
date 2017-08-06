import Vuex from 'vuex';

export default new Vuex.Store({
    state: {
        project: {},
        projects: [],
        lists: [],
        list : {},
        tasks : [],
        task : {}
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
        },
        list: state => {
            return state.list;
        },
        tasks: state => {
            return state.tasks;
        },
        task: state => {
            return state.task;
        },
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
        getList (state, {list}) {
            state.list = list;
        },
        //task
        getTasks (state, {tasks}) {
            state.tasks = tasks;
        },
        sortBy (state, {type, sortKey, reverse}) {
            state[type] = _.sortBy(state[type], sortKey, reverse ? 'desc' : 'asc');

            if (reverse) {
                state[type].reverse();
            }
        },
        //lists
        createList (state, {list}) {
            state.lists.push(list);
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

        //list
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
        getList (context, {listId}) {
            var data = {
                'action': 'get_list',
                'list_id': listId
            };

            jQuery.ajax({
                'data': data,
                'type': 'get',
                'url': ajaxurl,
                success: function (response) {
                    console.log(response);
                    if (response.success) {
                        context.commit('getList', {list: response.data});
                    }
                }
            });
        },

        //task
        getTasks (context, {listId, limit, offset}) {
            var data = {
                'action': 'get_tasks',
                'list_id': listId,
                'limit': limit,
                'offset': offset,
            };

            jQuery.ajax({
                'data': data,
                'type': 'get',
                'url': ajaxurl,
                success: function (response) {
                    /*console.log(response);*/
                    if (response.success) {
                        context.commit('getTasks', {tasks: response.data});
                    }
                }
            });
        },

        sortBy (context, {type, sortKey, reverse}) {
            context.commit('sortBy', {type, sortKey, reverse});
        }
    }
});
