@extends('frontend.layout.layout')
@section('content')
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{route('anasayfa')}}">Anasayfa</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Hakkımızda</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
              <figure>
                <img src="{{asset('../frontend/shoppers-gh-pages/images/blog_1.jpg')}}" alt="Image placeholder" class="img-fluid rounded">
                <a href="{{asset('../https://vimeo.com/channels/staffpicks/93951774')}}" class="play-button popup-vimeo"><span class="ion-md-play"></span></a>

              </figure>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
            
            
            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">{{$hakkimizda->name}}</h2>
            </div>
            <p>{{$hakkimizda->content}}</p>
            
          </div>
        </div>
      </div>
    </div>

  
  

    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">{{$hakkimizda->text1}}</h2>
              <p>{{$hakkimizda->text1content}}</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">{{$hakkimizda->text2}}</h2>
              <p>{{$hakkimizda->text2content}}</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">{{$hakkimizda->text3}}</h2>
              <p>{{$hakkimizda->text3content}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection