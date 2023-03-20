<template>
    <div class="d-flex align-items-center justify-content-center mt-4">
        <div class="card" style="width: 30rem;">
            <img class="card-img-top" v-bind:src="data.logo">
            <div class="card-body">
              <h5 class="card-title">
                {{ data.company }}
              </h5>
              <p class="card-text">
                {{ data.address }}
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                {{ data.website }}
              </li>
              <li class="list-group-item">
                {{ data.phone }}
              </li>
              <li class="list-group-item">
                {{ data.status }}
              </li>
            </ul>
          </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: {
            data: {
            type: Object, default: () => {
            }
            }
        },
    }
</script>
