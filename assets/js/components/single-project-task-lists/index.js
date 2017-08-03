export default {
    template: '#tmpl-managx-single-project-task-lists',
    data () {
        return {
        }
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
            this.$store.dispatch('getProject', {id: this.$route.params.id});
            this.$store.dispatch('getTaskLists', {projectId: this.$route.params.id, limit: 20, offset: 0});
        }
    },
    computed: {
        project () {
            return this.$store.getters.project;
        },
        taskLists () {
            return this.$store.getters.taskLists;
        }
    }
}
