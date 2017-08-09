var _this = '';
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
    created () {
      _this = this;
    },
    methods: {
        create () {
            this.$store.dispatch('createProject', {formSelector: '#create-project-form', callback : function(){
                _this.$router.push('/');
            }});
        },
        cancel () {
            this.$router.push('/');
        }
    },
}
