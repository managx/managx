 

<form action="" method="">
    <div class="form-group"> 
        <label>
            Project Name
        </label>
        <input class="form-control" value="" name="name" />
    </div>

    <div class="form-group"> 
        <label>
            Project Details
        </label>
        <textarea class="form-control" name="description"></textarea>
    </div> 
    
    <div class="form-group"> 
        <label>
            Assign user 
        </label>
        <?php
        $users = get_users();
        ?>

        <div>
            // here loop all user via Vue componet 
        </div>

    </div> 
</form>

