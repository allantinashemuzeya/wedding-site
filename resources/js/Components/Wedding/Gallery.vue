<template>
    <!-- Gallery -->
    <div id="gallery" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30">
                    <span class="oliven-title-meta">Gallery</span>
                    <h2 class="oliven-title">Our Memories</h2>
                </div>
            </div>
            <div class="row">
                <ul class="col list-unstyled list-inline mb-0 gallery-menu" id="gallery-filter">
                    <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".ceremony">Ceremony</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".party">Party</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row gallery-filter mt-3">
                <div class="col-md-4 gallery-item ceremony">
                    <a href="images/gallery/1.jpg" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="images/gallery/1.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail">
                                <h4 class="mb-0">Wedding Ceremony</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item party">
                    <a href="images/gallery/2.jpg" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="images/gallery/2.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail">
                                <h4 class="mb-0">Wedding Party</h4> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item ceremony">
                    <a href="images/gallery/3.jpg" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="images/gallery/3.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail">
                                <h4 class="mb-0">Wedding Ceremony</h4> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item party">
                    <a href="images/gallery/4.jpg" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="images/gallery/4.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail">
                                <h4 class="mb-0">Wedding Party</h4> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item ceremony">
                    <a href="images/gallery/5.jpg" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="images/gallery/5.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail">
                                <h4 class="mb-0">Wedding Ceremony</h4> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item party">
                    <a href="images/gallery/6.jpg" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="images/gallery/6.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail">
                                <h4 class="mb-0">Wedding Party</h4> </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Gallery"
}
</script>

<style scoped>

</style>
