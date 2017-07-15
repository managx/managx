function managx_js_var_extract(variable) {
    for (var key in variable) {
        window[key] = variable[key];
    }
}

managx_js_var_extract(managx_localize_vars);

import project from './components/project';

Vue.component('project', project);

var vm = new Vue({
    el: '#managx-app',
    data() {
        return {
            msg: 'Hello Managx!'
        }
    }
});
