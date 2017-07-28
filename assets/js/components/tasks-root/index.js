export default {
    template: '#tmpl-managx-tasks-root',
    data() {
        return{
            
        }
    },
    methods: {
        getTasks: function (limit, offset) {

            var data = {
                'action': 'get_tasks',
                'limit': limit,
                'offset': offset,
            }, _this = this;

            jQuery.ajax({
                'data': data,
                'type': 'get',
                'url': ajaxurl,
                success: function (data) {
                    if (data.success == true) {

                        var tasks = [];
                        for (var key in data.tasks) {

                            tasks.push(data.tasks[key]);

                        }
                        //
                        _this.$emit('event-get-tasks',tasks);
                    }
                }
            });
        }
    },
    mounted(){
        this.getTasks(20,0);
    },
    method: {

    }
}
