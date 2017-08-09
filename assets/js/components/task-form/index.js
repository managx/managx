var _this = '';
export default {
    template: '#tmpl-managx-task-form',
    data () {
        return {
            task: {},
            form: {
                project_id : this.$route.params.id,
                list_id : this.$route.params.listId,
                name: '',
                description: '',
                user: ''
            },
        }
    },
    created () {
        _this = this;
    },
    methods: {
        create () {
            this.$store.dispatch('createTask', {formSelector: '#create-task-form', callback : function () {
                _this.$router.push('/projects/' + _this.$route.params.id + '/lists/' + _this.$route.params.listId + '/tasks');
            }});
        },
        cancel () {
            this.$router.push('/projects/' + this.$route.params.id + '/lists/' + this.$route.params.listId + '/tasks');
        }
    },
}
