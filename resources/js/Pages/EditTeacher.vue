<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="EditTeacher" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">編輯教師</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <div class="mt-3">
                        <div>課程</div>
                        <select>
                            <option selected disabled>請選擇課程</option>
                            <option>國語</option>
                            <option>英文</option>
                            <option>數學</option>
                            <option>歷史</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <div>教師姓名</div>
                        <div>
                            <input type="text" class="w-full">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div>教師簡介</div>
                        <div>
                            <input type="text" class="w-full">
                        </div>
                    </div>
                    <div class="flex justify-center mt-5">
                        <div class="bg-gray-500 p-2 rounded me-2 text-white">返回列表</div>
                        <div class="bg-blue-400 p-2 rounded text-white">儲存</div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
