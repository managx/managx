export default {
    template: '#tmpl-managx-task-lists-root',
    data() {
        return {
            showCreateForm : false,
            lists : []
        }
    },
    methods: {
        getLists (limit, offset) {
            this.$store.dispatch('getLists', {limit, offset});
        }
    },
    created () {
        this.getLists(20,0);
        this.fetchData();
    },
    watch: {
        // call again the method if the route changes
        '$route': 'fetchData'
    },
    method: {
        fetchData () {
            this.loading = true;

            this.$store.dispatch('getProject', {id: this.$route.params.id});
        }
    },
    computed: {
        project () {
            return this.$store.getters.project;
        }
    }
}
