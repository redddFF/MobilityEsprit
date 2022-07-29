import { ref } from 'vue'
import axios from "axios";
import {useRouter} from 'vue-router' ; 
export default function useCandidatures() {
    const candidatures = ref([])
    const router=useRouter() ;
    const errors=ref('') ;
    const candidature = ref([])
  

    const getCandidatures = async () => {
        let response = await axios.get('/api/candidatures')
        candidatures.value = response.data.data;
    }

    
    const getCandidature = async (id) => {
        let response = await axios.get('/api/candidatures/' + id)
        candidature.value = response.data.data;
    }
    const destroyCandidature = async (id) => {
        await axios.delete('/api/candidatures/'+id)
        
    }
    const storeCandidature = async (data) => {
        await axios.post('/api/candidatures', data)
        await router.push({name:'candidatures.index'})
          }

          const updateCandidature = async (id) => {
         
                await axios.put('/api/candidatures/'+ id,candidature.value)
                await router.push({name: 'candidatures.index'})
           
            }
        

    return {
        candidatures,
        candidature,
        errors,
        getCandidatures,
        getCandidature,
        storeCandidature, 
        destroyCandidature,
        updateCandidature
         
    }
}