<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="AddClassToSemester" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">課程新增至本學期</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                    <div class="flex">
                        <div class="me-5">
                            <div>學年度</div>
                            <div>
                                <input type="text" class="w-[500px]">
                            </div>
                        </div>
                        <div>
                            <div>學期</div>
                            <div>
                                <input type="text" class="w-[500px]">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <table>
                                <thead>全部課程</thead>
                                <tbody>
                                    <tr>
                                        <th>課程</th>
                                        <th>教師</th>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>國語</td>
                                        <td>123</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
