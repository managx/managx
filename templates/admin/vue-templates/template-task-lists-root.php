<div type="text/x-template" id="tmpl-managx-task-lists-root">
    <div>
        <div class="container-fluid">
            <!--breadcrumb-->
            <!--<div class="row pt25 pb25">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><router-link to="/"><?php /*_e( 'Projects', 'managx' ); */?></router-link></li>
                        <li><router-link v-bind:to="{ path: '/projects/' + project.id }">{{ project.name }}</router-link></li>
                        <li class="active">Details</li>
                    </ol>
                </div>
            </div>-->
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
                            <!---->
                            <div>
                                <div class="container-fluid">
                                    <div class="row pt25 pb25">
                                        <div class="col-sm-6">
                                            <a href="javascript:" class="btn create_button" @click.prevent="showCreateForm = !showCreateForm" data-toggle="modal" data-target="#create_project_form"><?php _e( 'Add New Task', 'managx' );?></a>
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
                                                <task-lists-form></task-lists-form>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row pb25 mr0">
                                        {{ $data | json }}
                                        <!--<div v-for="list in lists ">{{ list | json }}</div>-->
                                        <task-list v-for="list in lists " :list="list" :key="list.id" />
                                    </div>
                                </div>
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>
