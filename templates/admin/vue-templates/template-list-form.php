<script type="text/x-template" id="tmpl-managx-list-form">
    <div>
        <div class="container-fluid">
            <div class="col-md-12">
                <br/>
                <h2><?php _e( 'Add New List', 'managx'); ?></h2>
                <br/>
                <div class="col-md-12 managx-form-container">
                    <form id="create-list-form">
                        <input type="hidden" name="project_id" v-model="form.project_id">
                        <div class="form-inner-row">
                            <label class="form-inner-lbl"><?php _e( 'List Name', 'managx' ); ?></label>
                            <input type="text" v-model="form.name" name="name" />
                        </div>
                        <div class="form-inner-row">
                            <label class="form-inner-lbl"><?php _e( 'List Details', 'managx' ); ?></label>
                            <textarea name="description" v-model="form.description"></textarea>
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
