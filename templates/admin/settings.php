<div class="wrap managx-wrap managx-container">
    <div class="container-fluid pl0 managx-global-settings">
        <div class="row mr0 ml0">
            <div class="col-sm-12 pl0">
                <h1 class="mb25"><?php _e( 'Project Settings', 'managx' ) ;?></h1>
                <h5 class="mt5 mb5"><?php _e( 'COMPLETED AND ARCHIVED PROJECTS', 'managx' );?></h5>
                <p class="mb10"><?php _e( 'Select the time frame after which archived and completed projects will be permanently deleted', 'managx' );?></p>
                <form action="options.php" method="post" class="managx-settings-form">
                    <?php settings_fields( 'managx-settings' ); ?>
                    <?php do_settings_sections( 'settings' ); ?>
                    <?php submit_button(); ?>
                </form>
            </div>
        </div>
    </div>
</div>