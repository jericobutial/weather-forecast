<template>
  <div class="container">
    <div class="card shadow-sm">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-12" v-if="isLoading == true">
            <img :src="'../loader.gif'" style="width: 10%;" class="d-block m-auto" alt="" />
          </div>
          <div class="col-sm-12" v-if="isLoading == false">
            <div class="table-responsive">
              
              <table class="table table-bordered">
                <thead>
                  <th class="align-middle">Date(mm/dd/yyyy)</th>
                  <th class="align-middle">Temp(F)</th>
                  <th class="dnone align-middle">Description</th>
                  <th class="dnone align-middle">Main</th>
                  <th class="dnone align-middle">Pressure</th>
                  <th class="dnone align-middle">Humidity</th>
                  <th class="dnone align-middle"></th>
                </thead>
                <tbody>
                  <tr>
                    <td class="align-middle">{{ today }}</td>
                    <td class="align-middle">{{ weather.main && weather.main.temp }}</td>
                    <td class="dnone align-middle">{{ weather.weather[0].description }}</td>
                    <td class="dnone align-middle">{{ weather.weather[0].main }}</td>
                    <td class="dnone align-middle">{{ weather.main.pressure}}</td>
                    <td class="dnone align-middle">{{ weather.main.humidity}}</td>
                    <td class="dnone align-middle"><img :src="'http://openweathermap.org/img/wn/'+weather.weather[0].icon+'.png'" class="img-fluid" alt=""></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <button class="btn btn-primary float-right" @click="goBack">Back</button>
            <h4 class="text-danger font-weight-bold" v-if="showErrors == true" >Oops! Something Went Wrong.</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { allcity } from '../cities';
const api_key = 'dac8f486faeba7d04b1ee56c7ccd3824';
export default {
  props:['_city'],
  data(){
    return{
      weather:'',
      showError: false,
      unit: 'imperial',
      today: moment().format('MM/D/YYYY'),
      isLoading: false,
    }
  },
  created(){
    this.fetchData();
  },
  filters:{
    fetchDate(d){
      if(d == undefined) {
        return null
      }
      return moment().format('LL')
    },
  },
  methods:{
    setUnit(u){
      this.unit = u
    },
    fetchData(){
      let lat = allcity.find(a => a.name == this._city).lat
      let lon = allcity.find(a => a.name == this._city).lng
      this.isLoading = true
      axios.get('https://cors-anywhere.herokuapp.com/http://api.openweathermap.org/data/2.5/weather?lat='+lat+'&lon='+lon+'&appid='+api_key).then((res) => {
        if(res.statusText == 'OK'){
          setTimeout(() => {
            this.isLoading = false;
            this.weather = res.data
          }, 1300)
        }
      }).catch((err) => {
        this.showError= true
      })
    },
    goBack(){
      window.location.href = '/home';
    }
  }
}
</script>

<style scoped>
@media screen and (max-width: 768px){
  .dnone{
    display: none !important;
  }

}
</style>