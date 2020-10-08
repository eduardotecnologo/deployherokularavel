<template>
  <div class="main">
    <div class="sidebar">
      <!-- Component Sidebar -->
      <SidebarComponent/>
    </div>
    <div class="content-right">
      <div class="navbar">
        <!-- Component Navbar -->
        <NavbarComponent/>
      </div>
      <div class="pages">
        o
      </div>
    </div>
  </div>
</template>

<script>
// Imports Components
import SidebarComponent from './components/SidebarComponent';
import NavbarComponent from './components/NavbarComponent';

export default {
  name:'DashboardComponent',
  //Register Components
  components:{
    SidebarComponent,
    NavbarComponent
  }
}
</script>

<style
  lang="scss"
  src="./style.scss"
  scoped />