
export default {
    template: '#tmpl-managx-project-form',
    data() {
        return {
            project: {},

        }
    },
    props: ['show_create_form'],
    methods: {
        create_project: function () {
             this.$parent.show_create_form = false;
        }
    },

}
