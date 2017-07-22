
export default {
    template: '#tmpl-managx-project-form',
    data() {
        return {
            project: {},
            form: {
                name: '',
                description: '',
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
            }

            jQuery.ajax({
                data: data,
                type: 'post',
                url: ajaxurl,
                success: function (data) {
                    if (data.success == true) {
                        this.$parent.projects.push(data.project);
                    }

                }
            });
            // push to 
        }
    },

}
