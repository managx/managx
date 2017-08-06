export default {
    template: '#tmpl-managx-list-form',
    data () {
        return {
            list: {},
            form: {
                name: '',
                description: '',
                user: '',
                project_id : this.$route.params.id
            },
        }
    },
    methods: {
        create () {
            this.$store.dispatch('createList', {formSelector: '#create-list-form'});
            this.$router.push('/projects/'+ this.$route.params.id +'/lists');
        },
        cancel () {
            this.$router.push('/projects/'+ this.$route.params.id +'/lists');
        }
    },
}
