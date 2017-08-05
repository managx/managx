export default {
    template: '#tmpl-managx-projects-root',
    data () {
        return {
            sortKey: 'dd',
            reverse: false
        }
    },
    created () {
        this.getProjects(20, 0);
    },
    methods: {
        getProjects (limit, offset) {
            this.$store.dispatch('getProjects', {limit, offset});
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
