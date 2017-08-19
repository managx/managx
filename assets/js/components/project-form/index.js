export default {
    template: '#tmpl-managx-project-form',
    data () {
        return {
            project: {},
            form: {
                name: '',
                description: '',
                user: '',
                post_status: 'publish',
                progress_status: 'scheduled',
                privacy_status: 'public'
            },
        };
    },
    created () {

    },
    methods: {
        create () {
            var self = this;

            this.$store.dispatch('createProject', {formSelector: '#create-project-form', callback: function () {
                self.$router.push('/');
            }});
        },
        cancel () {
            this.$router.push('/');
        }
    },
};
