import Vuex from 'vuex';

export default new Vuex.Store({
    state: {
        project: {},
        projects: [],
        list: {},
        lists: [],
        task: {},
        tasks: []
    },
    getters: {
        project: state => {
            return state.project;
        },
        projects: state => {
            return state.projects;
        },
        list: state => {
            return state.list;
        },
        lists: state => {
            return state.lists;
        },
        task: state => {
            return state.task;
        },
        tasks: state => {
            return state.tasks;
        }
    },
    mutations: {
        sortBy (state, {type, sortKey, reverse}) {
            state[type] = _.sortBy(state[type], sortKey, reverse ? 'desc' : 'asc');

            if (reverse) {
                state[type].reverse();
            }
        },
        getProject (state, {project}) {
            state.project = project;
        },
        getProjects (state, {projects}) {
            state.projects = projects;
        },
        createProject (state, {project}) {
            state.projects.push(project);
        },
        trashProject (state, {project,index}) {
            state.projects.splice(index,1);
        },
        deleteProject (state, {project,index}) {
            state.projects.splice(index,1);
        },
        //list
        getList (state, {list}) {
            state.list = list;
        },
        getLists (state, {lists}) {
            state.lists = lists;
        },
        createList (state, {list}) {
            state.lists.push(list);
        },
        getTasks (state, {tasks}) {
            state.tasks = tasks;
            console.log(tasks);
        },
        getTask (state, {task}) {
            state.task = task;
        },
        createTask (state, {task}) {
            state.tasks.push(task);
        },
    },
    actions: {
        sortBy (context, {type, sortKey, reverse}) {
            context.commit('sortBy', {type, sortKey, reverse});
        },
        getProject (context, {id}) {
            var data = {
                'action': 'get_project',
                'id': id
            };

            jQuery.get(ajaxurl, data, function (response) {
                if (response.success) {
                    context.commit('getProject', {project: response.data});
                }
            });
        },
        getProjects (context, {limit, offset, status}) {
            var data = {
                'action': 'get_projects',
                'limit': limit,
                'offset': offset,
                'status' : status
            };

            jQuery.get(ajaxurl, data, function (response) {
                console.log(response);
                if (response.success) {

                    context.commit('getProjects', {projects: response.data});
                } else {
                    context.commit('getProjects', {});
                }
            });
        },
        createProject (context, {formSelector,callback}) {
            var data = {
                'action': 'create_project',
                'formData': jQuery(formSelector).serialize(),
            };

            jQuery.post(ajaxurl, data, function (response) {
                if (response.success) {
                    if( typeof callback !== 'undefined' ) {
                        callback();
                    }
                }
            });
        },
        changeProjectStatus (context, {project,index,status}) {
            var data = {
                'action': 'change_project_status',
                'id' : project.id,
                'status' : status
            };

            jQuery.post(ajaxurl, data, function (response) {
                console.log(response);
                if (response.success) {
                    context.commit('trashProject', {project: project, index: index});
                }
            });
        },
        deleteProject (context, {project,index}) {
            var data = {
                'action': 'delete_project',
                'id' : project.id,
            };

            jQuery.post(ajaxurl, data, function (response) {
                if (response.success) {
                    context.commit('deleteProject', {project: project,index : index});
                }
            });
        },
        //list
        createList (context, {formSelector,callback}) {
            var data = {
                'action': 'create_list',
                'formData': jQuery(formSelector).serialize(),
            };

            jQuery.post(ajaxurl, data, function (response) {
                if (response.success) {
                    if( typeof callback !== 'undefined' ) {
                        callback();
                    }
                }
            });
        },
        getLists (context, {projectId, limit, offset}) {
            var data = {
                'action': 'get_lists',
                'project_id': projectId,
                'limit': limit,
                'offset': offset,
            };

            jQuery.get(ajaxurl, data, function (response) {
                console.log(response);
                if (response.success) {
                    context.commit('getLists', {lists: response.data});
                }
            });
        },
        getList (context, {listId}) {
            var data = {
                'action': 'get_list',
                'list_id': listId
            };

            jQuery.get(ajaxurl, data, function (response) {
                if (response.success) {
                    context.commit('getList', {list: response.data});
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

            jQuery.get(ajaxurl, data, function (response) {
                if (response.success) {
                    context.commit('getTasks', {tasks: response.data});
                }
            });
        },
        getTask (context, {taskId}) {
            var data = {
                'action': 'get_task',
                'task_id': taskId
            };

            jQuery.get(ajaxurl, data, function (response) {
                console.log(response);
                if (response.success) {
                    context.commit('getTask', {task: response.data});
                } else {
                    context.commit('getTask', {});
                }
            });
        },
        createTask (context, {formSelector,callback}) {
            var data = {
                'action': 'create_task',
                'formData': jQuery(formSelector).serialize(),
            };

            jQuery.post(ajaxurl, data, function (response) {
                if (response.success) {
                    if( typeof callback !== 'undefined' ) {
                        callback();
                    }
                }
            });
        },
    }
});
