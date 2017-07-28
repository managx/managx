
export default {
    template: '#tmpl-managx-project-form',
    data() {
        return {
            project: {},
            form: {
                name: '',
                description: '',
                user: ''
            },
        }
    },
    props: ['showCreateForm'],

    methods: {
        create_project: function () {
            this.$parent.showCreateForm = false;

            // Save to DB
            var data = {
                'action': 'create_project',
                'formData': jQuery("#create-project-form").serialize(),
            }, _this = this;

            jQuery.ajax({
                data: data,
                type: 'post',
                url: ajaxurl,
                success: function (data) {
                    if (data.success == true) {
                        console.log(data.project) ;
                        _this.$parent.projects.push(data.project);
                    }

                }
            });
            // push to
        }
    },

}
