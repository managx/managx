export default {
    template: '#tmpl-managx-single-task',
    data () {
        return {
            listId: this.$route.params.listId
        };
    },
    created () {
        this.fetchData();
    },
    watch: {
        // call again the method if the route changes
        '$route': 'fetchData'
    },
    methods: {
        fetchData () {
            /*this.$store.dispatch('getProject', {id: this.$route.params.id});
            this.$store.dispatch('getList', {listId: this.$route.params.listId});
            this.$store.dispatch('getTasks', {listId: this.$route.params.listId, limit: 20, offset: 0});*/

            //task
            this.$store.dispatch('getTask', {taskId: this.$route.params.taskId});
        }
    },
    computed: {
        /*project () {
            return this.$store.getters.project;
        },
        list () {
            return this.$store.getters.list;
        },*/
        task () {
            return this.$store.getters.task;
        }
    }
};
