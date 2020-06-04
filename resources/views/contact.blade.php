@extends('layouts.app')
@section('content')

<!--Section: Contact v.2-->

<div class="container">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="#" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 py-2">
                        <div class="md-form">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 py-2">
                        <div class="md-form"> 
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                           
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row py-2">
                    <div class="col-md-12">
                        <div class="md-form">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row py-2">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->

           

            <div class="text-center text-md-left">
                <input type="submit" value="Send" class="btn btn-primary px-4">
            </div>
            <div class="status"></div>
        </div>
    </form>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center py-3">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>marrakech, MA 94126, morocco</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+212 645147896</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@ourika.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</div>
<!--Section: Contact v.2-->

@endsection