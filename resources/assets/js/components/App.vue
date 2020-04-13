<template>
<!--
<div>
    <b-navbar toggleable="lg" type="dark" variant="primary" >
        <b-navbar-brand  href="#"><img class="imgLogo" :src="'/images/logo_ACCQ.png'" alt="logoACCQ">ACCQ</b-navbar-brand>

        <b-navbar-toggle target="nav-collapse" toggle="collapse" ></b-navbar-toggle>

        <b-collapse id="nav-collapse" is-nav>

            <b-navbar-nav variant="primary" class="navbar navbar-dark">
                <b-nav-item active-class to="/pages/home" href="#" class="h5 middle-vert">Accueil</b-nav-item>
                <b-nav-item-dropdown text="Notre organisation" class="middle-vert">
                    <b-dropdown-item to="/pages/home" href="#">OBNL</b-dropdown-item>
                    <b-dropdown-item to="/pages/home" href="#">Règlements</b-dropdown-item>
                </b-nav-item-dropdown>
                <b-nav-item active-class to="/pages/manifeste" href="#" class="h5 middle-vert">Manifeste</b-nav-item>
                <b-nav-item active-class to="/pages/home" href="#" class="h5 middle-vert">Projet de loi</b-nav-item>
                <b-nav-item-dropdown text="Éducation" class="middle-vert">
                    <b-dropdown-item to="/pages/home" href="#">Constat</b-dropdown-item>
                    <b-dropdown-item to="/pages/home" href="#">Mission</b-dropdown-item>
                    <b-dropdown-item to="/pages/home" href="#">Bibliothèque</b-dropdown-item>
                    <b-dropdown-item to="/pages/home" href="#">Médiathèque</b-dropdown-item>
                    <b-dropdown-item to="/pages/home" href="#">Promouvoir</b-dropdown-item>
                    <b-dropdown-item to="/pages/home" href="#">Sondage</b-dropdown-item>
                </b-nav-item-dropdown>

                <b-nav-item active-class to="/pages/home" class="h5 middle-vert" href="#" >Discutoire</b-nav-item>
                <b-nav-item active-class to="/pages/manifeste" class="h5 middle-vert" href="#">Médias</b-nav-item>
                <b-nav-item active-class to="/pages/manifeste" class="h5 middle-vert" href="#">Réalisations</b-nav-item>
                <b-nav-item active-class to="/pages/manifeste" class="h5 middle-vert" href="#">Nous joindre</b-nav-item>
            </b-navbar-nav>
        </b-collapse>

    </b-navbar>
-->

<b-container fluid>
 <b-navbar toggleable="lg" type="dark" variant="primary">
    <b-navbar-brand  href="#"><img class="imgLogo" :src="'/images/logo_ACCQ.png'" alt="logoACCQ">ACCQ</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav class="ml-auto">
        <b-nav-item active-class to="/pages/home" href="#" class="h5 middle-vert">Accueil</b-nav-item>
        <b-nav-item-dropdown text="Notre organisation" class="middle-vert">
                    <b-dropdown-item to="/pages/home" href="#">OBNL</b-dropdown-item>
                    <b-dropdown-item to="/pages/home" href="#">Règlements</b-dropdown-item>
        </b-nav-item-dropdown>
        <b-nav-item active-class to="/pages/manifeste" href="#" class="h5 middle-vert">Manifeste</b-nav-item>
                <b-nav-item active-class to="/pages/home" href="#" class="h5 middle-vert">Projet de loi</b-nav-item>
                <b-nav-item-dropdown text="Éducation" class="middle-vert">
                    <b-dropdown-item to="/pages/home" href="#">Constat</b-dropdown-item>
                    <b-dropdown-item to="/pages/home" href="#">Mission</b-dropdown-item>
                    <b-dropdown-item to="/pages/home" href="#">Bibliothèque</b-dropdown-item>
                    <b-dropdown-item to="/pages/home" href="#">Médiathèque</b-dropdown-item>
                    <b-dropdown-item to="/pages/home" href="#">Promouvoir</b-dropdown-item>
                    <b-dropdown-item to="/pages/home" href="#">Sondage</b-dropdown-item>
                </b-nav-item-dropdown>

                <b-nav-item active-class to="/pages/home" class="h5 middle-vert" href="#" >Discutoire</b-nav-item>
                <b-nav-item active-class to="/pages/manifeste" class="h5 middle-vert" href="#">Médias</b-nav-item>
                <b-nav-item active-class to="/pages/manifeste" class="h5 middle-vert" href="#">Réalisations</b-nav-item>
                <b-nav-item active-class to="/pages/manifeste" class="h5 middle-vert" href="#">Nous joindre</b-nav-item>
      </b-navbar-nav>

      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">

        <b-nav-item-dropdown right>
          <!-- Using 'button-content' slot -->
          <template v-slot:button-content>
            <b-avatar variant="success" icon="person" class="mr-3"></b-avatar>
          </template>
          <b-dropdown-item href="#">Profile</b-dropdown-item>
          <b-dropdown-item href="#">Sign Out</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>

<router-view></router-view>
</b-container>


</template>
<style lang="scss">
@import '../../sass/app.scss';
@import 'node_modules/bootstrap/scss/bootstrap';
@import 'node_modules/bootstrap-vue/src/index.scss';

</style>
<style lang="css">
@import '../../css/style.css';
.middle-vert{
    margin-top: auto;
    margin-bottom: auto;
}
.collapse  {
  background: #04519b;
}
</style>
<script>
  export default {
    name: 'app',
    data:function() {
        this.$store.active_tab = 0
         return  {
           active:"0"
         }},
    watch: {
      '$route' (to, from) {
        document.title = to.meta.title || 'Your Website'
        this.active = to.meta.index
      }
    },
     methods: {
            home: function(){
                this.$router.push('/home')
        },
            manifeste: function(){
                this.$router.push('/pages/manifeste')
        },
            change_active: function(){
                this.active =""+Math.floor(Math.random()*5)
        }
    }
  }
</script>
<style>

</style>
