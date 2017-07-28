export default {
    template: '#tmpl-managx-task-lists-root',
    data() {
        return{
            
        }
    },
    methods: {
        getLists: function (limit, offset) {

            var data = {
                'action': 'get_lists',
                'limit': limit,
                'offset': offset,
            }, _this = this;

            jQuery.ajax({
                'data': data,
                'type': 'get',
                'url': ajaxurl,
                success: function (data) {
                    if (data.success == true) {

                        var lists = [];
                        for (var key in data.lists) {

                            lists.push(data.lists[key]);

                        }
                        //
                        _this.$emit('event-get-lists',lists);
                    }
                }
            });
        }
    },
    mounted(){
        this.getLists(20,0);
    },
    method: {

    }
}
