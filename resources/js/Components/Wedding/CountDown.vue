<template>
    <!-- Countdown -->
    <div id="countdown" class="section-padding bg-img bg-fixed" data-background="images/banner-1.jpg">
        <div class="container">
            <div class="row">
                <div class="section-head col-md-12">
                    <h4>We will become a family in</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><span id="days"></span>Days</li>
                        <li><span id="hours"></span>Hours</li>
                        <li><span id="minutes"></span>Minutes</li>
                        <li><span id="seconds"></span>Seconds</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "CountDown"
}
</script>

<style scoped>

</style>
