<template>
    <div class="overflow-auto">
        <Loading 
            :active.sync="isLoading"
            :is-full-page="fullPage">
        </Loading>
    <table class="overflow-x-auto w-full bg-white">
        <thead class="bg-gray-100 border-b text-center font-bold text-sm text-gray-600 border-gray-300">
            <tr>
                <th class="p-4">S.No</th>
                <!-- <th class="p-4">File No</th> -->
                <th class="p-4">Branch</th>
                <th class="p-4">Auditor</th>
                <th class="p-4">Office</th>
                <th class="p-4">Department</th>
                <th class="p-4">Sub Department</th>
                <th class="p-4">Accounting Year</th>
                <th class="p-4">Account Type</th>
                <th class="p-4">PAC </th>
                <th class="p-4">PAC Status</th>
                <th class="p-4">File Status</th>
                <th class="p-4">Edit</th>
                <th class="p-4">View</th>
                <th class="p-4">Delete</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm divide-y divide-gray-300 text-center">
            <tr class="bg-white divide-y divide-gray-200 hover:bg-gray-100  transition duration-300 ease-in-out" v-for="(file,index) in files" :key="file.id">
                <td class="p-4 whitespace-nowrap"> {{index + 1}}</td>
                <!-- <td class="p-4 whitespace-nowrap cursor-pointer">
                    <a href="" class="text-gray-500 ">{{file.file_no}}</a>
                </td> -->
                <td class="p-4 whitespace-nowrap">{{file.branch}}</td>
                <td class="p-4 whitespace-nowrap">{{file.user_id}}</td>
                <td class="p-4 whitespace-nowrap">{{file.office}}</td>
                <td class="p-4 whitespace-nowrap">{{file.department}}</td>
                <td class="p-4 whitespace-nowrap text-gray-500 ">{{file.sub_department}}</td>
                <td class="p-4 whitespace-nowrap">{{file.accounting_year}}</td>
                <td class="p-4 whitespace-nowrap text-gray-500 ">{{file.account_type}}</td>
                <td class="p-4 whitespace-nowrap text-gray-500 ">{{file.pac_committe}}</td>
                <td class="p-4 whitespace-nowrap text-gray-500 ">{{file.pac_status}}</td>
                <td class="p-4 whitespace-nowrap text-gray-500 ">
                    <span v-if="file.status" class="text-green-500">Completed</span>
                    <span v-else class="text-yellow-500">Processing</span>
                    </td>
                <td class="p-4 whitespace-nowrap">
                    <a :href="'portal'">
                        <button class="border-2 border-indigo-200 rounded-md p-1" >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-indigo-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                        </button>
                    </a>
                </td>
                <td class="p-4 whitespace-nowrap">
                    <button class="border-2 border-yellow-200 rounded-md p-1" >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-yellow-500">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                            />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                </td>
                <td class="p-4 whitespace-nowrap">
                    <button class="border-2 border-red-200 rounded-md p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</template>

<script>
// loading
import Loading from 'vue-loading-overlay';

export default {
    data(){
        return{
            files:{},
            // Loading
            isLoading: true,
            fullPage: true
        }
    },
    methods:{
        load(){
            axios.get('/api/file')
            .then(response => {
                this.files = response.data;
                this.isLoading = false;
            })
        }
    },
    components: {Loading},
    mounted(){
        this.load();
        console.log("rinzin");
    }
}
</script>