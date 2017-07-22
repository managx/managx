<script type="text/x-template" id="tmpl-managx-project-form">
    <form id="create-project-form">
        <div id="create-project-form-id">
            <h2 class="mt0">Project Form</h2>

            <div class="form-inner-row">
                <label class="form-inner-lbl">Project Name</label>
                <input type="text" class="" value="" v-model="form.name" name="name" />
            </div>

            <div class="form-inner-row">
                <label class="form-inner-lbl">Project Details</label>
                <textarea class="" name="description"  v-model="form.description"></textarea>
            </div>

            <div class="form-inner-row">
                <label class="">Assign user</label>
                <div>Assign User List</div>
                <div class="">
                    <input type="button" class="btn btn-primary mt10" value="Submit" name="create_project" @click="create_project" />
                </div>
            </div>
        </div>
    </form>
</script>
<?php
managx_load_template( 'admin/projects/template-users.php' );
?> 