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
        <!-- Header & Slider -->
        <header id="home" class="header valign bg-img parallaxie" data-background="images/slider.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center caption">
                        <h1 class="animate-box" data-animate-effect="fadeInUp">Olivia & Enrico</h1>
                        <h5 class="animate-box" data-animate-effect="fadeInUp">15 December, 2022 – New York</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="arrow bounce text-center">
                            <a href="index.html#couple"> <i class="ti-heart"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

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

