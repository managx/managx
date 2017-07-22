<script type="text/x-template" id="tmpl-managx-project-form">
    <div > 
    <h1>Project Form</h1> 

    <div class="form-group"> 
    <label>
    Project Name
    </label>
    <input class="form-control" value="" name="name" />
    </div>

    <div class="form-group"> 
    <label>
    Project Detai                            ls
    </label>
    <textarea class="form-control" name="description"></textarea>
    </div> 

    <div class="form-group"> 
    <label>
    Assign user 
    </label> 
    <div>
    <!--     <users_list />-->
    </div>

    <div class="form-group"> 
    <input type="button" value="Submit"  name="create_project" @click="create_project" />  
    </div> 


    </div> 
    </div>    
</script>
<?php
managx_load_template( 'admin/projects/template-user-lists.php' );
?>
