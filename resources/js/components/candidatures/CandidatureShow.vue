<template>
    <h1>{{candidature.id}}</h1>
</template>

<script>
import {onMounted} from "vue" ; 
import { reactive } from "vue";
import useCandidatures from "../../composables/candidatures";
export default {
    props:{
    id:{
        required:true,
        type: String
    }
},

setup(props) {
    const { candidature, getCandidature } = useCandidatures() 
    onMounted(getCandidature(props.id))
    return {
            candidature,
            
        }
}
}





</script>