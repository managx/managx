<div class="wrap managx-wrap managx-container" id="managx-app">
    <projects-root @event-get-projects="eventGetProjects"></projects-root>
    <div class="container-fluid mt20">
        <div class="row mr0 ml0">
            <div class="col-sm-12 horizontal-nav bg-white">
                <ul>
                    <li><a href="" class="active">Projects</a></li>
                    <li><a href="">Activity</a></li>
                    <li><a href="">Calendar</a></li>
                    <li><a href="">Settings</a></li>
                </ul>
                <div class="pull-right oh">
                    <input type="text" class="form-control br0 mt15">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row pt25 pb25">
            <div class="col-sm-6">
                <a href="" class="btn create_button" @click.prevent="showCreateForm = !showCreateForm" data-toggle="modal" data-target="#create_project_form">Create Project</a>
            </div>
            <div class="col-sm-6 text-right project-sort-option font2">
                <label>Sort by :</label>
                <ul class="pull-right">
                    <li><a class="active" href="">Last Modified</a></li>
                    <li><a href="">Alphabetic ( A - Z )</a></li>
                    <li><a href="">Deadline</a></li>
                </ul>
            </div>

            <div class="col-md-12 col-sm-12">

                <div class="col-sm-6 create_project_form_container" v-if='showCreateForm'>
                    <a href="JavaScript:void(0)" @click.prevent="showCreateForm =false" class="btn btn-danger btn-xs mt15 pull-right"><span class="fa fa-times-circle">x</span></a>
                    <project-form />
                </div>
            </div>

        </div>
        <!--project lists-->
        <div class="row pb25 mr0">
            <project v-for="project in projects " :project="project" :key="project.id" />
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

<?php
managx_load_template( 'admin/projects/template-project.php' );
managx_load_template( 'admin/projects/template-projects-root.php' );
managx_load_template( 'admin/projects/template-project-form.php' );