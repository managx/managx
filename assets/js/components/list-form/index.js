var _this = '';
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
    created () {
        _this = this;
    },
    methods: {
        create () {
            this.$store.dispatch('createList', {formSelector: '#create-list-form', callback : function () {
                _this.$router.push('/projects/'+ _this.$route.params.id +'/lists');
            }});
        },
        cancel () {
            this.$router.push('/projects/'+ this.$route.params.id +'/lists');
        }
    },
}
