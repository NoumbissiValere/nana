<!-- Page Content -->

<div class="container" style="background-color:#FFFFFF">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Contact
                <small>We'd Love to Hear From You!</small>
            </h1>
        </div>
        <hr>
    </div>
    <!-- /.row -->

    <div class="row">

        <div class="col-sm-8">
            <h3>Let's Get In Touch!</h3>

            <form role="form" method="POST" action="PHP_Scripts/sendmail.php">
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="input1">Name</label>
                        <input type="text" name="contact_name" class="form-control" id="input1"required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="input2">Email Address</label>
                        <input type="email" name="contact_email" class="form-control" id="input2" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="input3">Subject</label>
                        <input type="text" name="contact_subject" class="form-control" id="input3" required>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12">
                        <label for="input4">Message</label>
                        <textarea name="contact_message" class="form-control" rows="6" id="input4" required></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="hidden" name="save" value="contact">
                        <button type="submit" class="w3-orange w3-hover-amber w3-xlarge w3-round-xxlarge w3-card-8">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <br><br><br><br><br><br><br>
        <div class="col-sm-4">
            <h3>ABEBOH TECHNOLOGY</h3>
            <h4>A Tech-company</h4>

            <p>
                mille 18 Buea-Cameroon<br>
                Behind a petrol station<br>
            </p>

            <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: +237-6##-###-###</p>

            <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a
                    href="mailto:feedback@startbootstrap.com">abebohtech@gmail.com</a></p>

            <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: Monday - Saturday: 9:00 AM to 9:00 PM </p>
            <ul class="list-unstyled list-inline list-social-icons">
                <li class="tooltip-social facebook-link"><a href="#" data-toggle="tooltip"
                                                            data-placement="top" title="Facebook"><i
                        class="fa fa-facebook-square fa-2x"></i></a></li>
                <li class="tooltip-social linkedin-link"><a href="#" data-toggle="tooltip"
                                                            data-placement="top" title="LinkedIn"><i
                        class="fa fa-linkedin-square fa-2x"></i></a></li>
                <li class="tooltip-social twitter-link"><a href="#" data-toggle="tooltip"
                                                           data-placement="top" title="Twitter"><i
                        class="fa fa-twitter-square fa-2x"></i></a></li>
                <li class="tooltip-social google-plus-link"><a href="#" data-toggle="tooltip"
                                                               data-placement="top" title="Google+"><i
                        class="fa fa-google-plus-square fa-2x"></i></a></li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({selector:"textarea"});</script>

 <div class="col-lg-12">
            <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1989.648382904865!2d9.297514975833893!3d4.161946674377226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNMKwMDknNDMuMCJOIDnCsDE3JzU1LjAiRQ!5e0!3m2!1sen!2scm!4v1474547888146" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
<hr>
<?php require_once 'PHP_Scripts/sendmail.php';?>
</div><!-- /.container -->
<br>

