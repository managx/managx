export default {
    template: '#tmpl-managx-projects-root',
    data () {
        return {
            test: 'this is test'
        }
    },
    created () {
        this.getProjects(20, 0);
    },
    methods: {
        getProjects (limit, offset) {
            this.$store.dispatch('getProjects', {limit, offset});
        }
    },
    computed: {
        projects () {
            return this.$store.getters.projects;
        }
    }
}
