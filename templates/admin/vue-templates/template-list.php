<script type="text/x-template" id="tmpl-managx-list">
    <div class="list-wrapper">
        <h3><router-link v-bind:to="{ path: '/projects/' + projectId + '/lists/' + list.id + '/tasks' }">{{ list.name }}</router-link></h3>
        <div class="each-task">
            <div class="task">New Series Writing</div>
            <span>due on 20 september, 2015</span>
        </div>
        <div class="each-task">
            <div class="task">New Series Writing</div>
            <span>due on 20 september, 2015</span>
        </div>
        <div class="each-task">
            <div class="task">New Series Writing</div>
            <span>due on 20 september, 2015</span>
        </div>
    </div>
</script>
