export default {
    template: '#tmpl-managx-list-form',
    data () {
        return {
            list: {},
            form: {
                name: '',
                description: '',
                user: '',
                project_id: this.$route.params.id
            }
        };
    },
    created () {
    },
    methods: {
        create () {
            var self = this;

            this.$store.dispatch('createList', {formSelector: '#create-list-form', callback: function () {
                self.$router.push('/projects/'+ self.$route.params.id +'/lists');
            }});
        },
        cancel () {
            this.$router.push('/projects/'+ this.$route.params.id +'/lists');
        }
    },
};
