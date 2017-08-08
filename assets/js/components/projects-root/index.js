export default {
    template: '#tmpl-managx-projects-root',
    data () {
        return {
            sortKey: 'dd',
            reverse: false
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
            if (typeof this.$route.params.status !== 'undefined') {
                this.getProjects(20, 0, this.$route.params.status);
            } else {
                this.getProjects(20, 0, 'publish');
            }
        },
        getProjects (limit, offset, status) {
            this.$store.dispatch('getProjects', {limit, offset, status});
        },
        sortBy(sortKey) {
            this.reverse = (this.sortKey == sortKey) ? ! this.reverse : false;

            this.sortKey = sortKey;

            this.$store.dispatch('sortBy', {'type': 'projects', 'sortKey': this.sortKey, 'reverse': this.reverse});
        }
    },
    computed: {
        projects () {
            return this.$store.getters.projects;
        }
    }
}
