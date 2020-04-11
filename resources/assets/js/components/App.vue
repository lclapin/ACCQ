<template>
 <fish-menu mode="horizontal" defaultActive="1">
  <fish-option index="0" content="Content"></fish-option>
  <fish-option index="1" content="User"></fish-option>
  <fish-option index="2" content="Tongji"></fish-option>
  <fish-submenu index="3">
    <template slot="title">submenu</template>
    <fish-option index="3-0" content="Jack"></fish-option>
    <fish-option index="3-1" content="Lucy"></fish-option>
    <fish-option index="3-2" content="Active"></fish-option>
    <!--<fish-option index="3-3">Option-3</fish-option>-->
    <fish-submenu index="3-3">
      <template slot="title">submenu-3</template>
      <fish-option index="3-3-0" content="Jack"></fish-option>
      <fish-option index="3-3-1" content="Lucy"></fish-option>
      <fish-option index="3-3-2" content="Active"></fish-option>
    </fish-submenu>
    <fish-option index="3-4" content="Option-4">Option-4</fish-option>
    <fish-option index="3-5" content="Option-5">Option-5</fish-option>
  </fish-submenu>
</fish-menu>
</template>
<script>
  export default {
    name: 'app'
  }
</script>
<style>

</style>
