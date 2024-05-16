@extends('front.layout.master')

@section('container')


<main class="main">
      <div class="section pt-60 pb-60 bg-primary">
        <div class="container-sub"> 
          <h1 class="heading-44-medium color-white mb-5">Blog</h1>
          <div class="box-breadcrumb"> 
            <ul>
              <li> <a href="{{ route('index') }}">Home</a></li>
              <li> <a href="">Blog</a></li>
            </ul>
          </div>
        </div>
      </div>
      <section class="section pt-60 bg-white latest-new-white">
        <div class="container-sub"> 
          <div class="row mt-50"> 

          @foreach ($blogs as $item )
              
            <div class="col-lg-4"> 
              <div class="cardNews wow fadeInUp"><a href="{{ route(app()->getLocale().'.blog_single',$item->slug) }}">
                  <div class="cardImage">
                    <div class="datePost">
                      <div class="heading-52-medium color-white">{{ date('d', strtotime($item->created_at)) }}.</div>
                      <p class="text-14 color-white">{{ date('Y,m', strtotime($item->created_at)) }}</p>
                    </div><img src="/public/{{ $item->image }}" alt="luxride">
                  </div></a>
                <div class="cardInfo">
                  <div class="tags mb-10">
                    @foreach ($item->tags as $tag)
                    <a href="#">{{ $tag->title }}</a> 
                    @endforeach
                
                    
                </div><a class="color-white" href="{{ route(app()->getLocale().'.blog_single',$item->slug) }}">
                    <h3 class="text-20-medium color-white mb-20">{{ $item->title }}</h3></a><a class="cardLink btn btn-arrow-up" href="{{ route(app()->getLocale().'.blog_single',$item->slug) }}">
                    <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg></a>
                </div>
              </div>
            </div>

            @endforeach


          </div>



          <div class="text-center mt-40 mb-120 wow fadeInUp">
            <nav class="box-pagination">
              <ul class="pagination">

              {{ $blogs->links('vendor.pagination.customBlog') }}

              </ul>
            </nav>
          </div>



        </div>
      </section>
    </main>


@endsection