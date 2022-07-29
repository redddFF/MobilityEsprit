import { createRouter, createWebHistory } from "vue-router";

import CandidatureIndex from '../components/candidatures/CandidatureIndex'
import CandidatureCreate from '../components/candidatures/CandidatureCreate'
import CandidatureEdit from '../components/candidatures/CandidatureEdit'
import CandidatureShow from '../components/candidatures/CandidatureShow'
const routes = [
    {
        path: '/dashboard',
        name: 'candidatures.index',
        component: CandidatureIndex
    },
    {
        path: '/candidature/create',
        name: 'candidatures.store',
        component: CandidatureCreate
    },
    {
        path: '/candidature/:id/edit',
        name: 'candidatures.edit',
        component: CandidatureEdit,
        props:true
    },
    {
        path: '/candidature/:id/show',
        name: 'candidatures.show',
        component: CandidatureShow,
        props:true
    },
    
]

export default createRouter({
    history: createWebHistory(),
    routes
})