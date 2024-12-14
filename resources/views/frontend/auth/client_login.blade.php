@extends('frontend.layouts.app')

@section('content')

<section class="rr-contact-area p-relative black-bg fix">
         <div class="rr-contact-shap">
            <img src="assets/img/contact/shap01.png" alt="img">
         </div>
         <div class="rr-contact-img">
            <img src="assets/img/contact/contact-img.jpg" alt="img">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-3 col-md-1"></div>
               <div class="col-xl-4 col-lg-9 col-md-10">
                  <div class="rr-form-box text-center">

                  @if ('msg')
                        <div class="alert alert-success">{{session('msg')}}</div>
                        @endif


                     <b>OUR Booking Now</b>
                     <h4 class="rr-section-title pb-60">booking</h4>
					 <form action="{{route('client.login')}}" method="post">
                                        @csrf

												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
													<input type="email" class="form-control" name="email" required="" id="exampleInputEmail_2" placeholder="Enter email">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
													<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a>
													<div class="clearfix"></div>
													<input type="password" class="form-control" name="password" required="" id="exampleInputpwd_2" placeholder="Enter pwd">
												</div>

												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" required="" type="checkbox">
														<label for="checkbox_2"> Keep me logged in</label>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-success  btn-rounded">sign in</button>
												</div>
											</form>

                  </div>
               </div>
               <div class="col-xl-2 col-lg-10 col-md-1"></div>
            </div>
         </div>

      </section>

@endsection











