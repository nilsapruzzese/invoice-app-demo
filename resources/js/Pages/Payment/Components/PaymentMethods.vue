<template>
    <div>
          <div class="grid grid-cols-3 gap-4">
              <PaymentCard
                  v-for="method in methods"
                  :key="method.name"
                  :name="method.name"
                  :image="method.image"
                  :selected="selectedMethod === method.name"
                  @select="selectPaymentMethod(method.name)"
              />
          </div>
    </div>
</template>

<script>
import PaymentCard from "./PaymentCard.vue";

export default {
    name: "PaymentMethods",
    components: {PaymentCard},
    data() {
        return {
            selectedMethod: null,
            methods: [
                {
                    name: 'Paypal',
                    image: 'https://cdn-icons-png.flaticon.com/512/174/174861.png'
                },
                {
                    name: 'Sofort',
                    image: 'https://user-images.githubusercontent.com/52973457/82835977-d9520b00-9ec5-11ea-8880-642813c05f24.png'
                },
                {
                    name: 'Giropay',
                    image: 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Giropay.svg/1280px-Giropay.svg.png'
                }
            ]
        }
    },
    methods: {
        selectPaymentMethod(paymentMethod) {
            this.selectedMethod = paymentMethod;
            this.$emit('payment-method-selected', paymentMethod);
        }
    }
}
</script>

<style scoped>

</style>
