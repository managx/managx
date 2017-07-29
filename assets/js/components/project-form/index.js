export default {
    template: '#tmpl-managx-project-form',
    data () {
        return {
            project: {},
            form: {
                name: '',
                description: '',
                user: ''
            },
        }
    },
    methods: {
        create () {
            this.$store.dispatch('createProject', {formSelector: '#create-project-form'});
            this.$router.push('/');
        }
    },
}
