<script type="text/x-template" id="tmpl-managx-single-project-lists">
    <div>

        <div class="container-fluid">
            <!--breadcrumb-->
            <div class="row pt25 pb25">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><router-link to="/"><?php _e( 'Projects', 'managx' ); ?></router-link></li>
                        <li><router-link v-bind:to="{ path: '/projects/' + project.id }">{{ project.name }}</router-link></li>
                        <li class="active">Details</li>
                    </ol>
                </div>
            </div>
            <!--tabs-->
            <div class="row">
                <div class="col-sm-12 pb30">
                    <ul class="horizontal-ul conversation_tabs">
                        <li><router-link v-bind:to="{ path: '/projects/' + project.id + '/details' }"><?php _e( 'Details', 'managx' ); ?></router-link></li>
                        <li><router-link v-bind:to="{ path: '/projects/' + project.id + '/lists' }"><?php _e( 'Lists', 'managx' ); ?></router-link></li>
                        <li><router-link v-bind:to="{ path: '/projects/' + project.id + '/tasks' }"><?php _e( 'Tasks', 'managx' ); ?></router-link></li>
                    </ul>
                </div>
            </div>
            <!--main content-->
            <div class="row mr0">
                <div class="col-md-12">
                    <div class="container-fluid">

                        <router-link class="btn create_button" v-bind:to="{ path: '/projects/' + project.id + '/lists/create' }">Add New Task List</router-link>
                        <ul>
                            <li v-for="list in lists">List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</script>
