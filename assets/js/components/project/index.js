export default {
    template: '#tmpl-managx-project',
    props: ['project','index'],
    data() {
        return {
            status : ( this.$route.query.post_status !== 'undefined' ? this.$route.query.post_status : '' ),
        }
    },
    created (){
    },
    methods: {
        changeStatus (project,index,status) {
            this.$store.dispatch('changeProjectStatus', {project : project, index : index, status : status });
        },
        deleteProject (project,index) {
            this.$store.dispatch('deleteProject', {project : project, index : index});
        }
    }
}
