import { ref } from 'vue'
import axios from "axios";

export default function useCandidatures() {
    const candidatures = ref([])
  
   
  

    const getCandidatures = async () => {
        let response = await axios.get('/api/candidatures')
        candidatures.value = response.data.data;
    }

    return {
        candidatures,
        getCandidatures
    }
}