import { createApp } from 'vue'
import { createStore } from 'vuex'
import axios from 'axios'

const store = createStore({
  state () {
    return {
      partner_locators: [],
      q: '',
      type: '',
      types: []
    }
  },
  getters:{
    getPartnerLocators(state){
        return state.partner_locators
    },
    getParamTypes(state){
        return state.types
    },
  },
  mutations: {
    setPartnerLocators (state,partner_locators) {
      state.partner_locators = partner_locators
    },
    changeQParam(state,q) {
        state.q = q
    },
    changeTypeParam(state,type) {
        state.type = type
    },
    setParamValues(state,param_datas){
        state.types = param_datas.types
    }
  },
  actions: {
    fetchPartnerLocators(context){
        axios.get(`/api/partner_locator?q=${this.state.q}&type=${this.state.type}`)
        .then((res)=>{
            console.log(res.data.datas)
            context.commit('setPartnerLocators',res.data.datas)
        })
    },
    fetchFilters(context){
        axios.get('/api/partner_locator/filter')
        .then((res)=>{
            context.commit('setParamValues',res.data.datas)
        })
    }

  }
})

export default store;
