<template>
    <!-- Confirmation -->
    <div id="rsvp" class="section-padding bg-img bg-fixed" data-background="images/banner-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 bg-white p-40"> <span class="oliven-title-meta text-center">Will you attend?</span>
                    <h2 class="oliven-title text-center">R.S.V.P</h2>
                    <br>
                    <form class="contact__form" method="post" action="https://duruthemes.com/demo/html/olivia-enrico/demo1/mail.php">
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>
                        <!-- form element -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Name" required> </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Email" required> </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="guests" type="text" class="form-control" placeholder="Guests" required> </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="submit" type="submit" class="btn buttono" value="SEND">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Confirmation"
}
</script>

<style scoped>

</style>
