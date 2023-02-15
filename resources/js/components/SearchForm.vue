<template>
  <div class="col-sm-6 col-12 offset-sm-3">
    <vue-autocomplete
      v-model="city"
      :data="autocomplete"
      size="lg"
      append="append"
    >
      <template slot="append" slot-scope="{ data, htmlText }">
        <button  @click="fetchData()" class="btn btn-primary">
          <i class="fa fa-search"></i>
        </button>
      </template>
    </vue-autocomplete>
    <p class="text-danger" v-if="showError == true">Oops! Please indicate a city first.</p>
  </div>
</template>

<script>
import { allcity } from '../cities';

export default {
  data(){
    return{
      city:'',
      autocomplete: [],
      result: '',
      showError: false,
    }
  },
  created(){
    this.autocomplete = allcity.flatMap((b) => {return b.name + ','+b.country.toLowerCase()})
  },
  methods:{
    fetchData: function(){
      if(this.city == ''){
        this.showError = true
        return
      }
      window.location.href = "/get-weather/"+ this.city.split(',')[0];
    }
  }
}
</script>

<style>

</style>