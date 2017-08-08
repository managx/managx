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
        trashProject (project,index) {
            this.$store.dispatch('trashProject', {project : project, index : index });
        }

    }
}
