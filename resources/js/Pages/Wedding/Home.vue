<script setup>
    import SideBar from "@/Components/Wedding/SideBar.vue";
    import Header from "@/Components/Wedding/Header.vue";
    import Couple from "@/Components/Wedding/Couple.vue";
    import CountDown from "@/Components/Wedding/CountDown.vue";
    import OurStory from "@/Components/Wedding/OurStory.vue";
    import Friends from "@/Components/Wedding/Friends.vue";
    import SeeYou from "@/Components/Wedding/SeeYou.vue";
    import Organisation from "@/Components/Wedding/Organisation.vue";
    import Gallery from "@/Components/Wedding/Gallery.vue";
    import WhenWhere from "@/Components/Wedding/WhenWhere.vue";
    import Confirmation from "@/Components/Wedding/Confirmation.vue";
    import GiftRegistry from "@/Components/Wedding/GiftRegistry.vue";
    import Footer from "@/Components/Wedding/Footer.vue";
</script>

<style scoped>

</style>

<template>

    <!--  SideBar  -->
    <SideBar />

    <!-- Content Section -->
    <div id="oliven-main">
        <Header/>
        <Couple/>
        <CountDown/>
        <OurStory/>
        <Friends/>
        <SeeYou/>
        <organisation/>
        <Gallery/>
        <WhenWhere/>
        <Confirmation/>
        <GiftRegistry/>
        <Footer/>
    </div>

</template>

