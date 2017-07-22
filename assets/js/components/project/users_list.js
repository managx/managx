export default {
    template: '#tmpl-managx-users-list',
    data() {
        return {
          user_list : managx_localize_vars.wp_user_list, 
          
        }
    },
     props: ['users']
    
}
