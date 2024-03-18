<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>
<script>
export default {
    data() {
        return {
            className: '',
            classIntroduce: '',
            classPic: '',
        }

    },
    methods: {
        saveClass() {
            this.$inertia.post('/add-class', {
                className: this.className,
                classIntroduce: this.classIntroduce,
            }, {
                onSuccess: (res) => {
                    const msg = res.props.flash.message;
                    alert(msg);
                }
            });
            this.className= '';
            this.classIntroduce= '';
        },

        back() {
            this.$inertia.visit('/ClassList');
        }
    },
}
</script>

<template>
    <Head title="AddClass" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">新增課程</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                    <div>
                        <div>課程名稱</div>
                        <div>
                            <input type="text" class="w-full" v-model="className">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div>課程簡介</div>
                        <div>
                            <input type="text" class="w-full" v-model="classIntroduce">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div>課程照片</div>
                        <div>
                            <input type="file" >
                        </div>
                    </div>
                    <div class="flex justify-center mt-5">
                        <div class="bg-gray-500 p-2 rounded me-2 text-white cursor-pointer" @click="back">返回列表</div>
                        <div class="bg-blue-400 p-2 rounded text-white cursor-pointer" @click="saveClass">儲存</div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
