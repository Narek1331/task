<template>
    <NavComponent/>
    <HeaderComponent/>
    <CardComponent
    v-for="data in partnerLocators"
    :key="data.id"
    :data="data"

    />

</template>

<script>
    import NavComponent from './NavComponent.vue';
    import HeaderComponent from './HeaderComponent.vue';
    import CardComponent from './CardComponent.vue';

    export default {
        components:{
            NavComponent,
            HeaderComponent,
            CardComponent
        },
        created(){
            this.$store.dispatch('fetchPartnerLocators')
            this.$store.dispatch('fetchFilters')
        },
        mounted() {
            console.log(this.partnerLocators)

        },
        computed:{
            partnerLocators(){
                return this.$store.getters.getPartnerLocators
            },
            paramTypes(){
                return this.$store.getters.getParamTypes
            },

        },


    }
</script>
