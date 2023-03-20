<template>
    <div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark" data-mdb-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/bg_large_1 1.png" class="d-block w-100" alt="Motorbike Smoke"/>
            <div class="carousel-caption d-md-block text-light">
              <h1>Netwrix Partner Locator</h1>
              <p>Hundreds of Netwrix partners around the world are standing by to help you</p>
              <p>With our Partner Locator you can easily find the list of authorized partners in your area.</p>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search by company name or adress.." v-model="q">
                    <span class="input-group-btn">
                      <button class="btn btn-light" type="submit" v-on:click="chnageQParam">
                          <i class="fa fa-search"></i>
                      </button>
                    </span>
                  </div>

                  <div class="d-flex">
                    <select class="form-select bg-transparent" aria-label="Default select example" v-model="type">
                        <option selected value="">Type</option>
                        <option
                        v-for="type in paramTypes"
                        :value="type.status"
                        >
                        {{ type.status }}
                        </option>
                      </select>
                      <select class="form-select bg-transparent" aria-label="Default select example">
                        <option selected>Country</option>
                      </select>
                      <select class="form-select bg-transparent" aria-label="Default select example">
                        <option selected>State</option>
                      </select>
                  </div>
            </div>
          </div>
      </div>
      </div>
</template>

<script>
    export default {
        data: () => ({
            q: '',
            type: ''
        }),
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            chnageQParam(){
                this.$store.commit('changeQParam', this.q)
                this.$store.commit('changeTypeParam', this.type)
                this.$store.dispatch('fetchPartnerLocators')
            }
        },
        computed:{
            paramTypes(){
                return this.$store.getters.getParamTypes
            },

        },
    }
</script>
