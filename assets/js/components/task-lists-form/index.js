export default {
    template: '#tmpl-managx-lists-form',
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
            this.$store.dispatch('createList', {formSelector: '#create-list-form'});
            this.$router.push('/');
        },
        cancel () {
            this.$router.push('/');
        }
    },
}
