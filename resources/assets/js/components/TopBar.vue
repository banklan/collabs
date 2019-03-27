<template>
    <div class="topbar">
        <h4 class="text-center">{{ title }}</h4>
    </div>
</template>

<script>
    export default {
        props: ['title']
    }
</script>

<style scoped>
    .topbar{
        background: #fff;
        margin-top: 2rem;
        border: 1px solid #f9f9f9;
        box-shadow: 0rem 0rem 4px 1px rgba(183, 182, 182, 0.47);
    }
</style>

