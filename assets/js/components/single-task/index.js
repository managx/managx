var _this;
export default {
    template: '#tmpl-managx-single-task',
    data () {
        return {
            listId: this.$route.params.listId,
            edit_description : false
        };
    },
    created () {
        _this = this;
        this.fetchData();
    },
    watch: {
        // call again the method if the route changes
        '$route': 'fetchData'
    },
    methods: {
        fetchData () {
            /*this.$store.dispatch('getProject', {id: this.$route.params.id});
            this.$store.dispatch('getList', {listId: this.$route.params.listId});
            this.$store.dispatch('getTasks', {listId: this.$route.params.listId, limit: 20, offset: 0});*/

            //task
            this.$store.dispatch('getTask', {taskId: this.$route.params.taskId});
        },
        edit () {
            var data = {
                'action': 'edit_task',
                'formData': jQuery('#edit-task-form').serialize(),
                'task_id' : this.task.id
            };

            jQuery.post(ajaxurl, data, function (response) {
                if (response.success) {
                    _this.task.description = response.data.task_data.description;
                    _this.edit_description = false;
                }
            });
        }
    },
    computed: {
        /*project () {
            return this.$store.getters.project;
        },
        list () {
            return this.$store.getters.list;
        },*/
        task () {
            return this.$store.getters.task;
        }
    }
};
