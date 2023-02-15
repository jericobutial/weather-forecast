<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card shadow">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12 text-center mb-3">
                      <h4 class="text-center">{{ _user.name }}</h4>
                      <a class="text-center text-decoration-none" :href="'https://github.com/'+_user.github_nickname">https://github.com/{{ _user.github_nickname }}</a>
                    </div>
                    <search-city />
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
  props:['_user'],
  
}
</script>

<style>

</style>