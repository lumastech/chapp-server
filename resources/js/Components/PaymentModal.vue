<template>
    <Modal :show="show" maxWidth="sm">
        <form @submit.prevent="submitOrder" class="p-2 bg-gradient-to-b from-primary-900 to-primary-400">
            <h2 class="text-white text-xl foent-bold my-2">MAKE AN ORDER</h2>
            <div class="aspect-video bg-gradient-to-r from-secondary-700 to-secondary-900 rounded mb-4 p-3">
                <div class="flex flex-col justify-between h-full text-right text-white font-bold">
                    <div class="flex space-x-2">
                        <div class="flex-auto text-left text-xs">
                            AMOUNT:
                            <span class="text-2xl">{{ numeralFormat(item.price, "0,0[.]00 ZMW") }}</span> ZMW
                        </div>
                        <p class="text-xs">MOMO</p>
                    </div>
                    <div class="flex space-x-2">
                        <div class="flex-auto">
                            <img src="../../assets/mastercard.png" alt="" class="w-32" />
                        </div>
                        <p class="text-xs self-center">
                            097 / 096 / 095 XXXXXX
                        </p>
                    </div>
                    <div class="flex space-x-2">
                        <div class="flex-auto flex">
                            <img src="../../assets/momo_logo.png" alt="" class="w-32" />
                        </div>
                        <p class="text-xs self-end">SECURE PAYMENT</p>
                    </div>
                </div>
            </div>

            <div class="relative">
                <input v-model="orderForm.fname" type="text" class="w-full d-block rounded pl-9"
                    placeholder="First name" required />
                <i class="absolute text-teal-500 left-3 top-1/3 fas fa-user"></i>
            </div>

            <div class="relative">
                <input v-model="orderForm.lname" type="text" class="w-full d-block rounded pl-9 my-2"
                    placeholder="Last name" required />
                <i class="absolute text-teal-500 left-3 top-1/3 fas fa-user"></i>
            </div>
            <div class="relative">
                <input v-model="orderForm.email" type="email" class="w-full d-block rounded pl-9 my-2"
                    placeholder="Your Email" required />
                <i class="absolute text-teal-500 left-3 top-1/3 fas fa-at"></i>
            </div>
            <label class="text-white">Phone Number</label>
            <div class="relative">
                <input v-model="orderForm.phone" type="tel" class="w-full d-block rounded pl-9"
                    placeholder="097/096/095 XXXXXX" required />
                <i class="absolute text-teal-500 left-3 top-1/3 fas fa-phone"></i>
            </div>

            <button type="submit"
                class="d-block px-4 py-2 bg-teal-600 text-white mt-4 rounded w-full hover:bg-teal-700 transion">
                PROCEED
            </button>
            <button @click="mControl('close')"
                class="d-block px-4 py-2 bg-secondary-50/50 hover:bg-secondary-50 transition border border-secondary-800 my-2 rounded w-full">
                CANCEL
            </button>
        </form>
    </Modal>

    <Modal :show="errs.show">
        <h2 class="px-4 py-2 bg-red-500 text-white font-bold text-xl">{{ errs.title }}</h2>
        <p class="p-4">{{ errs.error }}</p>
        <div class="text-right px-4 py-2 border-t">
            <button @click="errs.show=0"
                class="bg-secondary-200 px-4 py-2 rounded shadow-sm hover:bg-secondary-300 transition">CLOSE</button>
        </div>
    </Modal>

    <LoadingAnim :show="ShowLoaderAnim" />
</template>

<script>
import Modal from "@/Components/Modal.vue";
import LoadingAnim from "@/Components/LoadingAnim.vue";
import { useForm, router } from "@inertiajs/vue3";
import { ref } from "vue";
export default {
    components: { Modal, LoadingAnim, },
    props: {
        show: Boolean,
        item: Object,
    },

    emits:['close', 'open'],

    setup(props, ctx) {
        const orderForm = useForm({
            fname: "",
            lname: "",
            email: "",
            phone: "",
        });

        const ShowLoaderAnim = ref(0);


        const errs = ref({
            show: 0,
            title: null,
            error: ''
        })

        const mControl = (action) => {
            ctx.emit(action);
        }

        const submitOrder = () => {
            // orderModal.value = 0;
            mControl('close');
            ShowLoaderAnim.value = 1;
            router.post(`/pay/${props.item.id}`, orderForm, {
                onError: (err) => {
                    errs.value.title = "TRANSACTION FAILD!"
                    errs.value.error = err.error
                    // orderModal.value = 1;
                    mControl('open');
                    errs.value.show = 1
                },
                onSuccess: (res) => {
                    console.log(res.data);
                },
                onFinish: (res) => {
                    ShowLoaderAnim.value = 0;
                    // console.log(res);
                },
                preserveScroll: true,
            });
        };

        return {
            orderForm,
            submitOrder,
            ShowLoaderAnim,
            errs,
            mControl
        };
    }
}
</script>