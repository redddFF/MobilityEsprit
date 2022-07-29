<template>
<div class="overflow-hidden overflow-x-auto min-w-full align-middle sm:rounded-md">
         <div class="flex place-content-end mb-4">
            <div class="px-4 py-2 text-white bg-indigo-600 hover:bg-indigo-700 cursor-pointer">
                <router-link :to="{ name:'candidatures.store' }" >   <button   class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150" > NEW CANDIDACY
</button></router-link>
        </div>  
</div>

        <table class="min-w-full border divide-y divide-gray-200">
            <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50">
                    <span
                        class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Name</span>
                </th>
                <th class="px-6 py-3 bg-gray-50">
                    <span
                        class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Email</span>
                </th>
                <th class="px-6 py-3 bg-gray-50">
                    <span
                        class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Address</span>
                </th>
                <th class="px-6 py-3 bg-gray-50">
                    <span
                        class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">phone</span>
                </th>
               <th class="px-6 py-3 bg-gray-50">
                    <span
                        class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Personal Id</span>
                </th>
                <th class="px-6 py-3 bg-gray-50">
                    
                </th>
                 
            </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
        <template v-for="item in candidatures" :key="item.id">
                <tr class="bg-white">
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ item.LastName }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ item.Email }}
                    </td>
                     <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ item.PostalAdress }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ item.Phone }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                      {{item.PersonalId}}
                    </td>
                       <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                     <button   class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" 
                     @click="deleteCandidature(item.id)">Delete</button>
                    </td>
                     <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                    <router-link  :to="{ name: 'candidatures.edit', params: { id: item.id } }" > <button   class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Update</button></router-link>                   </td>
                      <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                  <router-link  :to="{ name: 'candidatures.show', params: { id: item.id } }" >   <button   class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Details    </button></router-link>  
                    </td>
                </tr>
            </template>
            </tbody>
        </table>
    </div>
</template>
<script>
import useCandidatures from "../../composables/candidatures" ;
import { default_type } from "mime";
import {onMounted} from "vue" ; 

export default {
    setup() {
const {candidatures,getCandidatures,destroyCandidature} = useCandidatures()
onMounted(getCandidatures)
const deleteCandidature =async (id)=>{
     if (!window.confirm('Are you sure?')) {
                return
            }
    await destroyCandidature(id) ; 
    await getCandidatures() ; 
}
        return {
            candidatures,
            deleteCandidature
        }
    }
}
</script>