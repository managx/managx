export default {
    template: '#tmpl-managx-project',
    props: ['project','index'],
    data() {
        return {
            status : ( this.$route.params.status !== 'undefined' ? this.$route.params.status : '' ),
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
