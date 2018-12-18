<template>
  <div>
        <!-- Criando Campo de Busca -->
        <div class="form-inline">
        <a v-if="criar" v-bind:href="criar" class="btn btn-success btn-sm">Criar</a>
            <div class="form-group pull-right"> 
        <input type="search" class="form-control" placeholder="Busrcar" v-model="buscar">
        </div>
    </div> 
        <!-- END - Criando Campo de Busca -->

    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th v-for="titulo in titulos">{{titulo}}</th>

        <!-- Botões de Configuração das tabelas de arquivos -->
          <th v-if="detalhe || editar || deletar">Configurações</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item,index) in lista">
          <td v-for="i in item">{{i}}</td>

          <td v-if="detalhe || editar || deletar">
            <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" v-bind:value="token">

              <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-primary btn-sm">Detalhe</a>
              <a v-if="editar" v-bind:href="editar" class="btn btn-warning btn-sm"> Editar</a>
              <a href="#" v-on:click="executaForm(index)" class="btn btn-danger btn-sm"> Deletar</a>

            </form>
            <span v-if="!token">
              <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-primary btn-sm">Detalhe</a>
              <a v-if="editar" v-bind:href="editar" class="btn btn-warning btn-sm"> Editar</a>
              <a v-if="deletar" v-bind:href="deletar" class="btn btn-danger btn-sm"> Deletar</a>
            </span>
            <span v-if="token && !deletar">
              <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-primary btn-sm">Detalhe |</a>
              <a v-if="editar" v-bind:href="editar" class="btn btn-warning btn-sm"> Editar</a>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
    export default {
      props:['titulos','itens','criar','detalhe','editar','deletar','token'],
      data:function(){
          return {
              buscar:''
          }
      },
      methods:{
        executaForm: function(index){
          document.getElementById(index).submit();
        }
      },
      computed:{
          lista:function(){
              return this.itens;
          }
      }
    }
</script>
