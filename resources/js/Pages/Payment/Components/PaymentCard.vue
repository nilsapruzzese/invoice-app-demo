<template>
    <div
        @click="select"
        class="group flex select-none flex-col items-center space-y-5 rounded-lg border-2 bg-white py-4 transition duration-300 hover:border-blue-600/40"
        :class="{
            'border-blue-600': selected,
            'border-gray-200': !selected
        }"
    >
        <img
            :src="image"
            class="h-9 grayscale transition ease-in-out group-hover:grayscale-0"
            :class="{
                'grayscale-0': selected,
                'grayscale': !selected
            }"
        />
        <p class="text-sm font-light text-gray-600">{{ name }}</p>
    </div>
</template>

<script>
export default {
    props: {
        name: {
            type: String,
            required: true
        },
        image: {
            type: String,
            required: true
        },
        selected: {
            type: Boolean,
            required: false,
        }
    },
    methods: {
        select() {
            this.$emit('select', this.name);
        }
    },
    name: "PaymentCard"
}
</script>
