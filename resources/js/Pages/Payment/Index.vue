<template>
    <sidebar>
        <h1 class="text-2xl font-bold">Payment</h1>

        <form @submit.prevent="submit" class="mt-4">
            <div>
                <PaymentMethods @payment-method-selected="updateSelectedPaymentMethod" />
            </div>

            <button
                type="submit"
                class="w-full mt-4 flex justify-center items-center bg-blue-600 text-white rounded-lg py-3 px-4 hover:bg-blue-700 transition duration-300"
            >
                Pay
            </button>
        </form>
        <pre>
            <code>
{{ form }}
            </code>
        </pre>
    </sidebar>
</template>

<script setup>
import PaymentMethods from "./Components/PaymentMethods.vue";
import Sidebar from "../Layouts/Sidebar.vue";
import {router, useForm} from "@inertiajs/vue3";
import {ref} from "vue";

const form = useForm({
    method: ref(null),
})

const submit = () => {
    form.post('/mollie/payment', {
        preserveScroll: true,
        onSuccess: () => {
            console.log('success');
        }
    })

    console.log('Submitted form');
}

const updateSelectedPaymentMethod = (paymentMethod) => {
    form.method = paymentMethod.toLowerCase();
}
</script>

<style scoped>

</style>
