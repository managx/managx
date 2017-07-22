<div class="wrap" id="managx-app">

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
                <a href="" class="btn create_button" @click="show_create_form = !show_create_form" data-toggle="modal" data-target="#create_project_form">Create Project</a>
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
                <div class="col-sm-6 create_project_form_container" v-if='show_create_form'> 
                    <a href="JavaScript:void(0)" @click="show_create_form = !show_create_form" class="btn btn-danger btn-xs mt15 pull-right"><span class="fa fa-times-circle">x</span></a>
                    <project_form :show_create_form='show_create_form'><project_form  /> 
                </div>
            </div>

        </div>
        <!--project lists-->
        <div class="row pb25 mr0">
            <div class="col-sm-4 mb15 pr0">
                <div class="bg-white pr15 pl15 pt25 pb25">
                    <h2 class="mb20">Create An iPhone App</h2>
                    <div class="oh">
                        <div class="pull-left">Last Updated : 14 mins ago </div>
                        <div class="pull-right"><i class="glyphicon glyphicon-lock"></i> Everyone</div>
                    </div>
                    <div>
                        Deadline : 23 June, 2016
                    </div>
                    <div class="assignees oh mb25 mt25">
                        <label>Assignee :</label>
                        <ul class="horizontal-ul">
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="project-categories oh">
                        <ul class="horizontal-ul">
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">UI & UX</a></li>
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">APP DEVELOPMENT</a></li>
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">IOS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb15 pr0">
                <div class="bg-white pr15 pl15 pt25 pb25">
                    <h2 class="mb20">Create An iPhone App</h2>
                    <div class="oh">
                        <div class="pull-left">Last Updated : 14 mins ago </div>
                        <div class="pull-right"><i class="glyphicon glyphicon-lock"></i> Everyone</div>
                    </div>
                    <div>
                        Deadline : 23 June, 2016
                    </div>
                    <div class="assignees oh mb25 mt25">
                        <label>Assignee :</label>
                        <ul class="horizontal-ul">
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="project-categories oh">
                        <ul class="horizontal-ul">
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">UI & UX</a></li>
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">APP DEVELOPMENT</a></li>
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">IOS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb15 pr0">
                <div class="bg-white pr15 pl15 pt25 pb25">
                    <h2 class="mb20">Create An iPhone App</h2>
                    <div class="oh">
                        <div class="pull-left">Last Updated : 14 mins ago </div>
                        <div class="pull-right"><i class="glyphicon glyphicon-lock"></i> Everyone</div>
                    </div>
                    <div>
                        Deadline : 23 June, 2016
                    </div>
                    <div class="assignees oh mb25 mt25">
                        <label>Assignee :</label>
                        <ul class="horizontal-ul">
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="project-categories oh">
                        <ul class="horizontal-ul">
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">UI & UX</a></li>
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">APP DEVELOPMENT</a></li>
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">IOS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb15 pr0">
                <div class="bg-white pr15 pl15 pt25 pb25">
                    <h2 class="mb20">Create An iPhone App</h2>
                    <div class="oh">
                        <div class="pull-left">Last Updated : 14 mins ago </div>
                        <div class="pull-right"><i class="glyphicon glyphicon-lock"></i> Everyone</div>
                    </div>
                    <div>
                        Deadline : 23 June, 2016
                    </div>
                    <div class="assignees oh mb25 mt25">
                        <label>Assignee :</label>
                        <ul class="horizontal-ul">
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="project-categories oh">
                        <ul class="horizontal-ul">
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">UI & UX</a></li>
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">APP DEVELOPMENT</a></li>
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">IOS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb15 pr0">
                <div class="bg-white pr15 pl15 pt25 pb25">
                    <h2 class="mb20">Create An iPhone App</h2>
                    <div class="oh">
                        <div class="pull-left">Last Updated : 14 mins ago </div>
                        <div class="pull-right"><i class="glyphicon glyphicon-lock"></i> Everyone</div>
                    </div>
                    <div>
                        Deadline : 23 June, 2016
                    </div>
                    <div class="assignees oh mb25 mt25">
                        <label>Assignee :</label>
                        <ul class="horizontal-ul">
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="project-categories oh">
                        <ul class="horizontal-ul">
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">UI & UX</a></li>
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">APP DEVELOPMENT</a></li>
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">IOS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb15 pr0">
                <div class="bg-white pr15 pl15 pt25 pb25">
                    <h2 class="mb20">Create An iPhone App</h2>
                    <div class="oh">
                        <div class="pull-left">Last Updated : 14 mins ago </div>
                        <div class="pull-right"><i class="glyphicon glyphicon-lock"></i> Everyone</div>
                    </div>
                    <div>
                        Deadline : 23 June, 2016
                    </div>
                    <div class="assignees oh mb25 mt25">
                        <label>Assignee :</label>
                        <ul class="horizontal-ul">
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="project-categories oh">
                        <ul class="horizontal-ul">
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">UI & UX</a></li>
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">APP DEVELOPMENT</a></li>
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">IOS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb15 pr0">
                <div class="bg-white pr15 pl15 pt25 pb25">
                    <h2 class="mb20">Create An iPhone App</h2>
                    <div class="oh">
                        <div class="pull-left">Last Updated : 14 mins ago </div>
                        <div class="pull-right"><i class="glyphicon glyphicon-lock"></i> Everyone</div>
                    </div>
                    <div>
                        Deadline : 23 June, 2016
                    </div>
                    <div class="assignees oh mb25 mt25">
                        <label>Assignee :</label>
                        <ul class="horizontal-ul">
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                            <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="project-categories oh">
                        <ul class="horizontal-ul">
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">UI & UX</a></li>
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">APP DEVELOPMENT</a></li>
                            <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">IOS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
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
    managx_load_template( 'admin/projects/template-project-form.php' );
   
?>
