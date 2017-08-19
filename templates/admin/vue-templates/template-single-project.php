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
                                        <h3 class="pull-left">{{ project.name }}</h3>
                                        <div class="pull-right" v-if="edit_description == false">
                                            <a href="javascript:" @click="edit_description = true">Edit Description</a>
                                        </div>
                                    </div>
                                    <div v-if="edit_description == false">
                                        {{ project.description }}
                                    </div>
                                    <div v-if="edit_description == true">
                                        <form id="edit-project-form">
                                            <?php wp_editor('{{ project.description }}','description'); ?>
                                            <input type="button" class="btn btn-primary mt10" value="<?php _e( 'Edit', 'managx' ); ?>" @click.prevent="edit" />
                                        </form>
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
