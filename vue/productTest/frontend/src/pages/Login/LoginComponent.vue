<template>
    <div class="login">
      <div class="content-login">
        <header>
          <h1>Área administrativa</h1>
        </header>
        <div class="form">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Digite seu Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Digite sua Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua Senha">
            </div>
            <button type="submit" class="btn btn-success btn-sm btn-block" @click.prevent="login">Enviar</button>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Guardar Senha</label>
            </div>
          </form>
        </div>
      </div>
    </div>

</template>

<script>
export default {
  name:'LoginComponent',

  data(){
    return {

    }
  },
  methods:{
    login(){
      this.$router.push({name:'home'});
    }
  }
}
</script>

<style
  lang="scss"
  src="./style.scss"
  scoped />