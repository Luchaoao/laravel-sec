<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<script>
import school from '/images/school.svg';

export default {
    data() {
        return {
            school: school,
        }
    },
};

</script>

<template>
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-end">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Dashboard</Link>

            <template v-else>
                <Link :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                登入</Link>

                <Link v-if="canRegister" :href="route('register')"
                    class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                註冊</Link>
            </template>
        </div>

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <img class="w-[60px]" :src="school" alt="">
            </div>

            <div>
                <div class="text-center text-sm sm:text-start">&nbsp;</div>
                <div>
                    <select>
                        <option selected disabled>請選擇學期</option>
                        <option>113學年度上學期</option>
                        <option>113學年度下學期</option>
                        <option>114學年度上學期</option>
                        <option>114學年度下學期</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="text-white">學期課表</span>
                </div>
                <div class="text-white mt-10 text-center">
                    <table class="border">
                        <thead>
                            <tr>
                                <th class="px-8 py-3 border">序號</th>
                                <th class="px-8 py-3 border">課程名稱</th>
                                <th class="px-8 py-3 border">授課教師</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-8 py-3 border">1</td>
                                <td class="px-8 py-3 border">數學</td>
                                <td class="px-8 py-3 border">Kevin</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</template>

<style></style>
