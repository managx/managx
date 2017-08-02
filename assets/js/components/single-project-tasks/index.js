export default {
    template: '#tmpl-managx-single-project-tasks',
    data () {
        return {
            loading: false
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
