<footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Menü</h3>
              </div>
              <ul>
            <li class='active'><a href="{{route('anasayfa')}}">Anasayfa</a></li>
            <li><a href="{{route('anasayfa')}}">Kategoriler</a></li>
            <li><a href="{{route('hakkimizda')}}">Hakkımızda</a></li>
            <li><a href="{{route('urunler')}}">Ürünler</a></li>
            <li><a href="{{route('iletisim')}}">İletisim</a></li></ul>
            </div>
          </div>
      
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">İletisim</h3>
              <ul class="list-unstyled">
                <li class="address">{{$settings['adres']}}</li>
                <li class="phone"><a href="tel://{{$settings['telefon']}}">{{$settings['telefon']}}</a></li>
                <li class="email">{{$settings['email']}}</li>
              </ul>
            </div>

       
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;{{date('Y')}} Tüm Hakları Saklıdır | EticaretV1 
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
