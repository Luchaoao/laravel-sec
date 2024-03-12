<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="SemesterList" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">學期列表</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                    <div class="w-[50px] text-white bg-blue-500 p-2 rounded cursor-pointer">新增</div>
                    <div class="mt-2 text-center">
                        <table class="w-full">
                            <thead class="border border-black">
                                <tr>
                                    <th class="px-8 py-1 border border-black">序號</th>
                                    <th class="px-8 py-1 border border-black">學年</th>
                                    <th class="px-8 py-1 border border-black">學期</th>
                                    <th class="px-10 py-1">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-black">1</td>
                                    <td class="border border-black">113</td>
                                    <td class="border border-black">上</td>
                                    <td class="border border-black">
                                        <div class="flex justify-center items-center py-2">
                                            <div                                              class="w-[50px] bg-green-800 p-2 me-5 rounded text-white cursor-pointer">
                                                寄送
                                            </div>
                                            <div
                                                class="w-[50px] bg-blue-500 p-2 me-5 rounded text-white cursor-pointer">
                                                編輯
                                            </div>
                                            <div class="w-[50px] bg-red-500 p-2 rounded text-white cursor-pointer">刪除
                                            </div>
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
