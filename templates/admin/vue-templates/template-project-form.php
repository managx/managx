<script type="text/x-template" id="tmpl-managx-project-form">
    <div>
        <h2>Create Project</h2>
        <br/>

        <div class="container-fluid">

            <div class="col-md-12 col-sm-12">
                <div class="col-sm-6 create-project-form-container">
                    <form id="create-project-form">
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
                        </div>
                        <div class="form-inner-row">
                            <input type="button" class="btn btn-primary mt10" value="Create" @click.prevent="create" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</script>

<?php
managx_load_template( 'admin/vue-templates/template-users.php' );
?>