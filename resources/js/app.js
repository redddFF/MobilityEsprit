require('./bootstrap') ;
require('alpinejs') ; 
import { createApp } from "vue";

import router from "./router" ; 
import CandidatureIndex from "./components/candidatures/CandidatureIndex";
 
createApp({
    components: {
        CandidatureIndex
    }
}).use(router).mount('#app')