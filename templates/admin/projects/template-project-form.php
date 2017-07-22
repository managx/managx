<script type="text/x-template" id="tmpl-managx-project-form">
    <form id="create-project-form" > 
    <div> 
        <h1>Project Form</h1> 

        <div class="form-group"> 
            <label>
                Project Name
            </label>
            <input class="form-control" value="" v-model="form.name" name="name" />
        </div>

        <div class="form-group"> 
            <label>
            Project Details
            </label>
            <textarea class="form-control" name="description"  v-model="form.description"></textarea>
        </div> 

        <div class="form-group"> 
            <label>
            Assign user 
            </label> 
            <div>
            Assign User List 
            </div>
    
            <div class="form-group"> 
                <input type="button" value="Submit"  name="create_project" @click="create_project" />  
            </div> 
        </div>  
    </div>
    </form>
</script>
<?php
managx_load_template( 'admin/projects/template-users.php' );
?> 