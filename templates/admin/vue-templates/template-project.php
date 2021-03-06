<script type="text/x-template" id="tmpl-managx-project">
    <div class="col-sm-4 mb15 pr0 each_project">
        <div class="bg-white pr15 pl15 pt25 pb25">
            <div class="oh">
                <h2 class="mb20 pull-left"><router-link v-bind:to="{ path: 'projects/' + project.id }">{{ project.name }}</router-link></h2>
                <template v-if="!status || status == 'publish'">
                    <a class="dashicons dashicons-trash trash pull-right" @click="changeStatus(project,index,'trash')"></a>
                </template>
                <template v-else>
                    <a class="dashicons dashicons-trash trash pull-right" @click="deleteProject(project,index)"></a>
                </template>
            </div>

            <div class="oh">
                <div class="pull-left">Last Updated : 14 mins ago </div>
                <div class="pull-right"><i class="glyphicon glyphicon-lock"></i> Everyone</div>
            </div>
            <div>
                Deadline : 23 June, 2016
            </div>
            <div class="assignees oh mb25 mt25">
                <label>Assignee :</label>
                <ul class="horizontal-ul">
                    <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                    <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                    <li class="mr10"><img src="<?php echo MANAGX_ASSETS; ?>/images/asignee.png" alt=""></li>
                </ul>
            </div>
            <div class="project-categories oh">
                <ul class="horizontal-ul">
                    <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">UI & UX</a></li>
                    <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">APP DEVELOPMENT</a></li>
                    <li><a href="" class="pt10 pb10 pr15 pl15 br100 bg-indigo color-white dib mr10 font1 bg-blue">IOS</a></li>
                </ul>
            </div>
        </div>
    </div>
</script>
