<template>
    <div class="flex">
        <div class="w-1/5 bg-slate-800 h-screen">
            <nav class="mt-10">
                <ul class="list-none">
                    <li class="px-2 py-3 ml-4 bg-slate-700 rounded-lg">
                        <router-link to="/">Home</router-link>
                    </li>
                    <li class="px-2 py-3 ml-4 bg-slate-700 rounded-lg">
                        <router-link to="/about">About</router-link>
                    </li>
                    <li class="px-2 py-3 ml-4 bg-slate-700 rounded-lg">
                        <router-link to="/contact">Contact</router-link>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="w-4/5 bg-gray-100 p-6">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
name: "Sidebar"
}
</script>

<style scoped>

</style>
