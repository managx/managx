<div class="wrap managx-wrap managx-container" id="managx-app">

    <div class="container-fluid">
        <router-view></router-view>
    </div>

</div>

<?php
managx_load_template( 'admin/vue-templates/template-projects-root.php' );

//list
managx_load_template( 'admin/vue-templates/template-list-form.php' );
managx_load_template( 'admin/vue-templates/template-list.php' );
managx_load_template( 'admin/vue-templates/template-single-list.php' );

//task
managx_load_template( 'admin/vue-templates/template-task-form.php' );