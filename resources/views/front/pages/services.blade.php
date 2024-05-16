@extends('front.layout.master')

@section('container')

<main class="main">
      <div class="section pt-60 pb-60 bg-primary">
        <div class="container-sub"> 
          <h1 class="heading-44-medium color-white mb-5">Services</h1>
          <div class="box-breadcrumb"> 
            <ul>
              <li> <a href="{{ route('index') }}">Home</a></li>
              <li> <a href="">Services</a></li>
            </ul>
          </div>
        </div>
      </div>
      <section class="section pt-60">
        <div class="container-sub"> 
          <div class="row">


        @foreach ($services as $service )
     
            <div class="col-lg-4 col-sm-6 mb-30"> 
              <div class="cardService wow fadeInUp">
                <div class="cardInfo">
                  <h3 class="cardTitle text-20-medium color-white mb-10">{{ $service->getCategory->name }}</h3>
                  <div class="box-inner-info">
                    <p class="cardDesc text-14 color-white mb-30">{{ $service->name }}</p><a class="cardLink btn btn-arrow-up" href="{{ route(app()->getLocale().'.service_single',$service->slug) }}">
                      <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                      </svg></a>
                  </div>
                </div>
                <div class="cardImage"><img src="/public/{{ $service->image }}" alt="Luxride"></div>
              </div>
            </div>
        @endforeach
          </div>


          <div class="text-center mt-40 mb-120 wow fadeInUp">
            <nav class="box-pagination">
              <ul class="pagination">
              {{ $services->links('vendor.pagination.customBlog') }}

              </ul>
            </nav>
          </div>
        </div>
      </section>
    </main>

@endsection