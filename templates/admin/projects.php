<div class="wrap managx-wrap managx-container" id="managx-app">

    <div class="container-fluid">
        <div class="container-fluid mt20">
            <div class="row mr0 ml0">
                <div class="col-sm-12 horizontal-nav bg-white">
                    <ul>
                        <li><router-link to="/projects"><?php _e( 'Projects', 'managx' ); ?></router-link></li>
                        <li v-if="$route.params.id"><router-link v-bind:to="{ path: '/projects/' + $route.params.id + '/settings' }"><?php _e( 'Settings' ); ?></router-link></li>
                    </ul>
                    <div class="pull-right oh">
                        <input type="text" class="p10 mt20" placeholder="<?php _e( 'Search for project, task, label...', 'managx' ); ?>" style="width: 208px;">
                    </div>
                </div>
            </div>
        </div>

        <router-view></router-view>
    </div>

</div>

<?php
managx_load_template( 'admin/vue-templates/template-projects-root.php' );
