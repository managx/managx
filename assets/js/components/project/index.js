export default {
    template: '#tmpl-managx-project',
    props: ['project','index'],
    data() {
        return {

        }
    },
    mounted (){
    },
    methods: {
        changeStatus (project,index,status) {
            this.$store.dispatch('changeProjectStatus', {project : project, index : index, status : status });
        }

    }
}
