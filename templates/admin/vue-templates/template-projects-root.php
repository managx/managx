<script type="text/x-template" id="tmpl-managx-projects-root">
    <div>

        <div class="container-fluid">
            <div class="row pt25 pb25">
                <div class="col-sm-6">
                    <router-link class="btn create_button" to="/projects/create">Create Project</router-link>
                </div>
                <div class="col-sm-6 text-right project-sort-option font2">
                    <label>Sort by :</label>
                    <ul class="pull-right">
                        <li><a class="active" href="#">Last Modified</a></li>
                        <li><a href="#">Alphabetic ( A - Z )</a></li>
                        <li><a href="#">Deadline</a></li>
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
