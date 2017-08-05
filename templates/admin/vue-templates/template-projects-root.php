<script type="text/x-template" id="tmpl-managx-projects-root">
    <div>
        <div class="container-fluid">
            <div class="row pt25 pb25">
                <div class="col-sm-6">
                    <router-link class="btn create_button" to="/projects/create"><?php _e( 'Add New Project', 'managx' ); ?></router-link>
                </div>
                <div class="col-sm-6 text-right project-sort-option font2">
                    <label><?php _e( 'Sort by:', 'managx' ); ?></label>
                    <ul class="pull-right">
                        <li><a href="#" @click.prevent="sortBy('updated_at');"><?php _e( 'Last Modified', 'managx' ); ?></a></li>
                        <li><a href="#" @click.prevent="sortBy('name');"><?php _e( 'Alphabetic ( A - Z )', 'managx' ); ?></a></li>
                        <li><a href="#" @click.prevent="sortBy('end_date');"><?php _e( 'Deadline', 'managx' ); ?></a></li>
                    </ul>
                </div>
            </div>
            <!--project lists-->
            <div class="row pb25 mr0">
                <project v-for="project in projects" :project="project" :key="project.id"></project>
            </div>
            <!--project list ends-->
        </div>
        <div class="container-fluid">
            <div class="row mr0">
                <div class="col-sm-12 mb30">
                    <h3 class="color-mid-grey mb10">Completed and Archived Projects</h3>
                    <p>This will be automatically deleted after 3 months. You can change this behaviour from settings panel.</p>
                </div>
                <div class="col-sm-4 pr0">
                    <div class="pt25 pr15 pb25 pl15 bg-white oh mb15">
                        <div class="pull-left">
                            <h3>Develop ManageX</h3>
                            <p class="color-offwhite">Marked Completed by <a href="">Sashoto</a></p>
                        </div>
                        <div class="pull-right">
                            <i class="glyphicon glyphicon-remove"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pr0">
                    <div class="pt25 pr15 pb25 pl15 bg-white oh mb15">
                        <div class="pull-left">
                            <h3>Develop ManageX</h3>
                            <p class="color-offwhite">Marked Completed by <a href="">Sashoto</a></p>
                        </div>
                        <div class="pull-right">
                            <i class="glyphicon glyphicon-remove"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pr0">
                    <div class="pt25 pr15 pb25 pl15 bg-white oh mb15">
                        <div class="pull-left">
                            <h3>Develop ManageX</h3>
                            <p class="color-offwhite">Marked Completed by <a href="">Sashoto</a></p>
                        </div>
                        <div class="pull-right">
                            <i class="glyphicon glyphicon-remove"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pr0">
                    <div class="pt25 pr15 pb25 pl15 bg-white oh mb15">
                        <div class="pull-left">
                            <h3>Develop ManageX</h3>
                            <p class="color-offwhite">Marked Completed by <a href="">Sashoto</a></p>
                        </div>
                        <div class="pull-right">
                            <i class="glyphicon glyphicon-remove"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pr0">
                    <div class="pt25 pr15 pb25 pl15 bg-white oh mb15">
                        <div class="pull-left">
                            <h3>Develop ManageX</h3>
                            <p class="color-offwhite">Marked Completed by <a href="">Sashoto</a></p>
                        </div>
                        <div class="pull-right">
                            <i class="glyphicon glyphicon-remove"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</script>


<?php
managx_load_template( 'admin/vue-templates/template-project.php' );
managx_load_template( 'admin/vue-templates/template-project-form.php' );

managx_load_template( 'admin/vue-templates/template-single-project.php' );
managx_load_template( 'admin/vue-templates/template-single-project-tasks.php' );
managx_load_template( 'admin/vue-templates/template-single-project-lists.php' );
