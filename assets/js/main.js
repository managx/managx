function managx_js_var_extract(variable) {
    for (var key in variable) {
        window[key] = variable[key];
    }
}

managx_js_var_extract(managx_localize_vars);

import hello from './components/hello';

Vue.component('hello', hello);

var vm = new Vue({
    el: '#managx-app'
});
