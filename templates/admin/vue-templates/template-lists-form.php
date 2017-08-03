<script type="text/x-template" id="tmpl-managx-lists-form">
    <form id="create-list-form">
        <div id="create-project-form-id">
            <h2 class="mt0">Project Form</h2>

            <div class="form-inner-row">
                <label class="form-inner-lbl">Project Name</label>
                <input type="text" class="" value="" v-model="form.name" name="name" />
            </div>

            <div class="form-inner-row">
                <label class="form-inner-lbl">Project Details</label>
                <textarea class="" name="description" v-model="form.description"></textarea>
            </div>

            <div class="form-inner-row">
                <label class="form-inner-lbl">Assign User</label>
                <div class="form-inner-right-side-element">
                    <multiselect v-model="user" :options="['Select option', 'options', 'selected', 'mulitple', 'label', 'searchable', 'clearOnSelect', 'hideSelected', 'maxHeight', 'allowEmpty', 'showLabels', 'onChange', 'touched']" :searchable="false" :close-on-select="true" :show-labels="false" placeholder="Select User"></multiselect>
                </div>

                <div class="form-inner-row">
                    <input type="button" class="btn btn-primary mt10" value="Submit" name="create" @click="create" />
                </div>
            </div>
        </div>
    </form>
</script>
<?php
managx_load_template( 'admin/vue-templates/template-users.php' );
?>
