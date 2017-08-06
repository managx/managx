<script type="text/x-template" id="tmpl-managx-single-project">
    <div>
        <div class="container-fluid">
            <!--breadcrumb-->
            <div class="row pt25 pb25">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><router-link to="/"><?php _e( 'Projects', 'managx' ); ?></router-link></li>
                        <li>{{ project.name }}</li>
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
                <div class="col-sm-12">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 mb20 bg-white pt30 pb30 pr30 pl30 expense_container">
                                <div class="task_description mb30 pb35">
                                    <div class="oh mb30">
                                        <h3 class="pull-left">Photoshoot of Maria Noor</h3>
                                        <div class="pull-right">
                                            <a href="">Edit Description</a>
                                        </div>
                                    </div>
                                    <div>
                                        <p>This is the simple project brief. You can add it while creating the task, you may add this later. You may not give it, you may do some may may, ma mah, blah blah, blah. No more lorem ipsum. Oka, bye, tata. Some more line. This is the simple project brief. You can add it while creating the task, you may add this later. You may not give it, you may do some may may, ma mah, blah blah, blah. No more lorem ipsum. Oka, bye, tata. Some more line.This is the simple project brief. You can add it while creating the task. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</script>
