<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import arrow from '/images/720.png';
</script>
<script>
export default {
    data () {
        return {
            arrow: arrow,
        }
    }
}
</script>

<template>

    <Head title="EditAddClassToSemester" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">編輯課程</h2>
        </template>

        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                    <div class="flex">
                        <div class="me-5 flex-1">
                            <div>學年度</div>
                            <div>
                                <input type="text" class="w-full">
                            </div>
                        </div>
                        <div class="flex-1">
                            <div>學期</div>
                            <div>
                                <input type="text" class="w-full">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-around items-center">
                        <div class="mt-5 text-center px-5 py-10 w-1/3">
                            <table class="border border-black h-[450px] w-full">
                                <thead>
                                    <tr class="flex flex-wrap">
                                        <th class="w-full border-b border-black p-2">全部課程</th>
                                        <th class="w-1/2 border-b border-y-black p-2">課程</th>
                                        <th class="w-1/2 border-b border-t-black border-b-black p-2">教師</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="flex flex-wrap">
                                        <td class="w-1/2 border-b p-2">國語</td>
                                        <td class="w-1/2 border-b p-2">123</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <img :src="arrow" alt="箭頭" class="w-[150px]">
                        </div>
                        <div class="mt-5 text-center px-5 py-10 w-1/3">
                            <table class="border border-black h-[450px] w-full">
                                <thead>
                                    <tr class="flex flex-wrap">
                                        <th class="w-full border-b border-black p-2">學期課程</th>
                                        <th class="w-1/2 border-b border-y-black p-2">課程</th>
                                        <th class="w-1/2 border-b border-t-black border-b-black p-2">教師</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="flex flex-wrap">
                                        <td class="w-1/2 border-b p-2">國語</td>
                                        <td class="w-1/2 border-b p-2">123</td>
                                    </tr>
                                </tbody>
                            </table>
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
