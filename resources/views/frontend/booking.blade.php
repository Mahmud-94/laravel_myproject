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
                     <form method="post" action="{{route('front_app.store')}}">
                        @csrf
                        <div class="row">
                           <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                              <div class="rr-form-input-box rr-form-input-main">
                                 <input type="text" name="name" placeholder="Name" value="{{old('name')}}">

                                 @error('name')
													<div class="alert alert-danger">{{$message}}</div>
													@enderror
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                              <div class="rr-form-input-box rr-form-input-main">
                                 <input type="email" name="email" placeholder="Email" value="{{old('email')}}">

                                 @error('email')
													<div class="alert alert-danger">{{$message}}</div>
													@enderror
                              </div>
                           </div>

                           <div class="col-xl-12 col-lg-12 col-md-12 mb-20">
                              <div class="rr-form-input-box rr-form-input-main">
                                 <input type="text" name="phone" placeholder="phone" value="{{old('phone')}}">

                                 @error('phone')
													<div class="alert alert-danger">{{$message}}</div>
													@enderror
                              </div>
                           </div>
                           <div class=" col-md-12 col-12">
                              <div class="rr-form-input-box pb-30">
                                 <select name="agent" style="display: none;">
                                    <option value="">Choose agent</option>
                                    @foreach ($agents as $agent)
                                    <option value="{{$agent->id}}">{{$agent->name}} || {{$agent->expert->name}}</option>
                                    @endforeach
                                 </select>

                           </div>
                           @error('agent')
													<div class="alert alert-danger">{{$message}}</div>
													@enderror


                              </div>




                           <div class="col-xl-12 col-lg-12 col-md-12 mb-20">
                              <div class="rr-form-input-box rr-form-input-main">
                                 <input type="date" name="date" class="form-control" value="{{old('date')}}">


                                 @error('date')
													<div class="alert alert-danger">{{$message}}</div>
													@enderror
                              </div>
                           </div>

                           <div class="col-12 mb-20">
                              <div class="rr-form-textarea-box">
                                 <textarea name="remarks" placeholder="Your meassage" value="{{old('remarks')}}"></textarea>
                              </div>
                           </div>

                           <button class="rr-btn-1 rr-form-theme-bg" type="submit"><span>Make an booking</span></button>

                        </div>
                     </form>

                  </div>
               </div>
               <div class="col-xl-2 col-lg-10 col-md-1"></div>
            </div>
         </div>

      </section>

@endsection
