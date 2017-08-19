var _this;
export default {
    template: '#tmpl-managx-single-project',
    data () {
        return {
            loading: false,
            edit_description : false
        };
    },
    created () {
        _this = this;
        this.fetchData();
    },
    watch: {
        // call again the method if the route changes
        '$route': 'fetchData'
    },
    methods: {
        fetchData () {
            this.loading = true;
            this.$store.dispatch('getProject', {id: this.$route.params.id});
        },
        edit () {
            var data = {
                'action': 'edit_project',
                'formData': jQuery('#edit-project-form').serialize(),
                'project_id' : this.project.id
            };

            jQuery.post(ajaxurl, data, function (response) {
                if (response.success) {
                    _this.project.description = response.data.project_data.description;
                    _this.edit_description = false;
                }
            });
        }
    },
    computed: {
        project () {
            return this.$store.getters.project;
        }
    }
};
