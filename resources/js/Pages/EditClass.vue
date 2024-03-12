<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="EditClass" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">編輯課程</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <div>
                        <div>課程名稱</div>
                        <div>
                            <input type="text" class="w-full">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div>課程簡介</div>
                        <div>
                            <input type="text" class="w-full">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div>課程照片</div>
                        <div>
                            <input type="file">
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
