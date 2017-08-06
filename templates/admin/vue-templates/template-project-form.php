<script type="text/x-template" id="tmpl-managx-project-form">
    <div>

        <div class="container-fluid">
            <div class="col-md-12">
                <br/>
                <h2><?php _e( 'Add New Project', 'managx' ); ?></h2>
                <br/>

                <div class="col-md-12 managx-form-container">
                    <form id="create-project-form">
                        <div class="form-inner-row">
                            <label class="form-inner-lbl"><?php _e( 'Project Name', 'managx' ); ?></label>
                            <input type="text" v-model="form.name" name="name" />
                        </div>
                        <div class="form-inner-row">
                            <label class="form-inner-lbl"><?php _e( 'Project Details', 'managx' ); ?></label>
                            <textarea name="description" v-model="form.description"></textarea>
                        </div>
                        <div class="form-inner-row">
                            <label class="form-inner-lbl"><?php _e( 'Assign User', 'managx' ); ?></label>
                            <div class="form-inner-right-side-element">
                                <multiselect v-model="form.user" :options="['Select option', 'label', 'hideSelected','touched']" :searchable="false" :close-on-select="true" :show-labels="false" placeholder="Select User"></multiselect>
                            </div>
                        </div>
                        <div class="form-inner-row">
                            <input type="button" class="btn btn-primary mt10" value="<?php _e( 'Create', 'managx' ); ?>" @click.prevent="create" />
                            <input type="button" class="btn btn-default mt10" value="<?php _e( 'Cancel', 'managx' ); ?>" @click.prevent="cancel" />
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
