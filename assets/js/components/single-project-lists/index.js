export default {
    template: '#tmpl-managx-single-project-lists',
    data () {
        return {
            viewType: 'grid', //other values : list
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
            this.$store.dispatch('getProject', {id: this.$route.params.id});
            this.$store.dispatch('getLists', {projectId: this.$route.params.id, limit: 20, offset: 0});
        }
    },
    computed: {
        project () {
            return this.$store.getters.project;
        },
        lists () {
            return this.$store.getters.lists;
        }
    }
};
