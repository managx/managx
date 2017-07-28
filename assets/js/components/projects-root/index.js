export default {
    template: '#tmpl-managx-projects-root',
    props: ['project'],
    data() {
        return {
            test : 'this is test'
        }
    },
    mounted(){
        this.getProjects(20, 0);
    },
    methods: {
        getProjects: function (limit, offset) {

            var data = {
                'action': 'get_projects',
                'limit': limit,
                'offset': offset,
            }, _this = this;

            jQuery.ajax({
                'data': data,
                'type': 'get',
                'url': ajaxurl,
                success: function (data) {

                    if (data.success == true) {

                        var projects = [];
                        for (var key in data.projects) {

                            projects.push(data.projects[key]);

                        }
                        //
                        _this.$emit('event-get-projects',projects);
                    }

                }
            });
        }
    }
}
