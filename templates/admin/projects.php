<div class="wrap managx-wrap managx-container" id="managx-app">

    <div class="container-fluid mt20">
        <div class="row mr0 ml0">
            <div class="col-sm-12 horizontal-nav bg-white">
                <ul>
                    <li><router-link to="/">Projects</router-link></li>
                    <li><router-link to="/settings">Settings</router-link></li>
                </ul>
                <div class="pull-right oh">
                    <input type="text" class="form-control br0 mt15">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <router-view></router-view>
    </div>

</div>

<?php
managx_load_template( 'admin/vue-templates/template-projects-root.php' );
