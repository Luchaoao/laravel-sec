<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>
<script>
import bgc from '/images/1.jpg'

export default {
    data() {
        return {
            bgc: bgc,
        }
    }
}
</script>

<template>
    <Head title="ClassList" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">課程列表</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                    <div class="w-[50px] text-white bg-blue-500 p-2 rounded cursor-pointer">新增</div>
                    <div class="mt-10 text-center">
                    <table>
                        <thead class="border border-black">
                            <tr>
                                <th class="px-8 py-1 border border-black">序號</th>
                                <th class="px-8 py-1 border border-black">課程名稱</th>
                                <th class="border border-black">課程照片</th>
                                <th class="px-10 py-1">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-black">1</td>
                                <td class="border border-black">國語</td>
                                <td class="border border-black">
                                    <img :src="bgc" alt="">
                                </td>
                                <td class="border border-black">
                                    <div class="flex flex-col items-center">
                                        <div class="w-[50px] bg-blue-500 p-2 rounded mb-3 text-white cursor-pointer">編輯</div>
                                    <div  class="w-[50px] bg-red-500 p-2 rounded text-white cursor-pointer">刪除</div>
                                    </div>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
                
            </div>
        </div>
    </AuthenticatedLayout>
</template>
