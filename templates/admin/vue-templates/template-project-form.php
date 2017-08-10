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
                            <label class="form-inner-lbl"><?php _e( 'Post status', 'managx' ); ?></label>
                            <select name="post_status" v-model="form.post_status">
                                <?php
                                foreach ( Managx_Global::post_statuses() as $status => $label) {
                                    ?>
                                    <option value="<?php echo $status; ?>"><?php _e( $label, 'managx' ); ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-inner-row">
                            <label class="form-inner-lbl"><?php _e( 'Progression status', 'managx' ); ?></label>
                            <select name="progress_status" v-model="form.progress_status">
                                <?php
                                foreach ( Managx_Global::progress_status() as $status => $label) {
                                    ?>
                                    <option value="<?php echo $status; ?>"><?php _e( $label, 'managx' ); ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-inner-row">
                            <label class="form-inner-lbl"><?php _e( 'Privacy status', 'managx' ); ?></label>
                            <select name="privacy_status" v-model="form.privacy_status">
                                <?php
                                foreach ( Managx_Global::privacy_status() as $status => $label) {
                                    ?>
                                    <option value="<?php echo $status; ?>"><?php _e( $label, 'managx' ); ?></option>
                                    <?php
                                }
                                ?>
                            </select>
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
