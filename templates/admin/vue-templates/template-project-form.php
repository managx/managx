<script type="text/x-template" id="tmpl-managx-project-form">
    <div class="container-fluid">
        <div class="col-md-12 col-sm-12">
            <div class="col-sm-6 create_project_form_container">
                <a href="#" class="btn btn-danger btn-xs mt15 pull-right"><span class="fa fa-times-circle">x</span></a>
                <form id="create-project-form">
                    <div id="create-project-form-id">
                        <h2 class="mt0">Project Form</h2>

                        <div class="form-inner-row">
                            <label class="form-inner-lbl">Project Name</label>
                            <input type="text" v-model="form.name" name="name" />
                        </div>

                        <div class="form-inner-row">
                            <label class="form-inner-lbl">Project Details</label>
                            <textarea name="description" v-model="form.description"></textarea>
                        </div>

                        <div class="form-inner-row">
                            <label class="form-inner-lbl">Assign User</label>
                            <div class="form-inner-right-side-element">
                                <multiselect v-model="form.user" :options="['Select option', 'label', 'hideSelected','touched']" :searchable="false" :close-on-select="true" :show-labels="false" placeholder="Select User"></multiselect>
                            </div>

                            <div class="form-inner-row">
                                <input type="button" class="btn btn-primary mt10" value="Submit" @click.prevent="create" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</script>

<?php
managx_load_template( 'admin/vue-templates/template-users.php' );
?>
