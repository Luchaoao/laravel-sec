<script>
import school from '/images/school.svg'

export default {
    data() {
        return {
            school: school,
        }
    }
}
</script>

<template>
    <img :src="school" alt="">
</template>
