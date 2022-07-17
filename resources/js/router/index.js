import { createRouter, createWebHistory } from "vue-router";

import CandidatureIndex from '../components/candidatures/CandidatureIndex'


const routes = [
    {
        path: '/dashboard',
        name: 'candidatures.index',
        component: CandidatureIndex
    },
    
]

export default createRouter({
    history: createWebHistory(),
    routes
})