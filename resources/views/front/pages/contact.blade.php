@extends('front.layout.master')

@section('container')

<main class="main">
      <div class="section pt-60 pb-60 bg-primary">
        <div class="container-sub"> 
          <h1 class="heading-44-medium color-white mb-5">Contact Us</h1>
          <div class="box-breadcrumb"> 
            <ul>
              <li> <a href="{{ route('index') }}">Home</a></li>
              <li> <a href="">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="section pt-60 pb-60">
        <div class="container-sub"> 
          <div class="row"> 


          @foreach ($contact as $item )
              
            <div class="col-lg-3 col-sm-6 mb-30">
              <div class="cardContact wow fadeInUp">
                <div class="cardImage mb-30"><img src="/public/{{ $item->image }}" alt="luxride"></div>
                <div class="cardInfo">
                  <h6 class="heading-20-medium mb-10">{{ $item->office }}</h6>
                  <p class="text-16 mb-20">{{ $item->address }}</p>
                  <p class="text-16 mb-20">{{ $item->phone }}</p>
                  <p class="text-16">{{ $item->email }}</p>
                </div>
              </div>
            </div>
            @endforeach  

          </div>
        </div>
      </div>
      <div class="section wow fadeInUp">
        <iframe class="map-contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001155.6943615586!2d-78.01286281141591!3d42.728782799636924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2zVGnhu4N1IGJhbmcgTmV3IFlvcmssIEhvYSBL4buz!5e0!3m2!1svi!2s!4v1677510404076!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <section class="section mt-120 mb-120"> 
        <div class="container-sub"> 
          <div class="mw-770">
            <h2 class="heading-44-medium mb-60 text-center wow fadeInUp">Leave us your info</h2>
            <div class="form-contact form-comment wow fadeInUp"> 
              <form action="#">
                <div class="row"> 
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group"> 
                      <label class="form-label" for="fullname">Full Name</label>
                      <input class="form-control" id="fullname" type="text" value="Ali Tufan">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group"> 
                      <label class="form-label" for="email">Email</label>
                      <input class="form-control" id="email" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group"> 
                      <label class="form-label" for="subject">Subject</label>
                      <input class="form-control" id="subject" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group"> 
                      <label class="form-label" for="message">Message</label>
                      <textarea class="form-control" id="message"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <button class="btn btn-primary" type="submit">Get In Touch
                      <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>



@endsection