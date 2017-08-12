export default {
    template: '#tmpl-managx-task-form',
    data () {
        return {
            task: {},
            form: {
                project_id: this.$route.params.id,
                list_id: this.$route.params.listId,
                name: '',
                description: '',
                user: ''
            },
        };
    },
    created () {
    },
    methods: {
        create () {
            var self = this;
            this.$store.dispatch('createTask', {formSelector: '#create-task-form', callback: function () {
                self.$router.push('/projects/' + self.$route.params.id + '/lists/' + self.$route.params.listId + '/tasks');
            }});
        },
        cancel () {
            this.$router.push('/projects/' + this.$route.params.id + '/lists/' + this.$route.params.listId + '/tasks');
        }
    },
};
