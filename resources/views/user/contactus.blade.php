@extends('user.includes.layout')

@section('content')

    <section class="site-section pt-5">
    <div class="container">
        <div class="row mb-12">
                <div class="card">
                    <div class="card-header">
                <h1>Contact</h1>

            <div class="card-body">
        <div class="row blog-entries">
            <div class="col-md-14 col-lg-14 main-content">

                <form action="{{route('guest.sendMail.submit')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="section-title">Our Address</h3>
                            <p>We are situated at the bank of Araniko highway at Suryabinayak, Bhaktapur. </p>
                            <ul class="list-unstyled footer-social">
                                <li><i class="fa fa-address-book"></i> Suryabinayak, Bhaktapur 44800</li>
                                <li><i class="fa fa-phone"></i>+977-014485962</li>
                                <li><i class="fa fa-mobile-phone"></i> +977-9849865475</li>
                                <li><i class="fa fa-envelope"></i><a href="#"> dressup@gmail.com</a></li>
                                <li><i class="fa fa-globe"></i><a href="#"> www.dressup.com</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            @if(session()->has('success_message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="icon-remove"></i>
                                    </button>
                                    {{session()->get('success_message')}}
                                </div>
                            @endif



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Send Message" class="btn btn-primary btn-lg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</section>



@endsection