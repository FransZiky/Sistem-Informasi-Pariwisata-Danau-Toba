
@extends('layouts.app')

@section('content')
<main>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3" ></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('#')">
      	<div class="col-sm-3 tulisan">
      		<h1 style="font-size: 35px; text-align  : center; font-family: sans-serif;padding-top: 20px;">FESTIVAL DANAU <br> TOBA 2019</h1><br>
      		<h3 style="color: white; font-size: 30px; padding-left: 20px; font-family: sans-serif; ">Festival Danau Toba <br> akan berlangsung <br> selama empat hari <br>   pada 9-12 Desember <br>  2019.Dilaksanakan di <br>  seluruh kawasan <br>  danau Toba</h3>
        </div>
        <div class="col-sm-9 gambar" >
        <img src="image/solu.jpg" style="width: 1200px;height: 650px;">
        </div>  
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('#')">
        <div class="col-sm-3 tulisan">
        	<h1 style="font-size: 35px; text-align: center; font-family: sans-serif; padding-top: 20px;">12.12 HOTEL <br> TIARA BUNGA</h1><br><br>
      		<h3 style="color: white; font-size: 30px; padding-left: 20px; font-family: sans-serif; ">DAPATKAN <br> DISCOUNT <br> HINGGA 12% <br>   MENGINAP DI HOTEL <br>  BERLAKU dari Tanggal <br>  12-14 DESEMBER <br></h3>
        </div>
        <div class="col-sm-9 gambar">
        <img src="image/kolam.jpg" style="width: 1200px;height: 650px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('#')">
        <div class="col-sm-3 tulisan">
        <h1 style="font-size: 35px; text-align: center; font-family: sans-serif;">12.12 Swimbath <br> Destinasi</h1><br><br>
      		<h3 style="color: white; font-size: 30px; padding-left: 20px; font-family: sans-serif; ">DAPATKAN <br> DISCOUNT <br> HINGGA 20% <br>   Rekreasi bersama <br>  Keluarga, <br>  BERLAKU dari Tanggal <br> 12-14 DESEMBER</h3>
        </div>
        <div class="col-sm-9 gambar">
        <img src="image/swimbath.jpg" style="width: 1200px;height: 650px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('#')">
        <div class="col-sm-3 tulisan">
          <h1 style="font-size: 40px; text-align: center; font-family: sans-serif;">12.12 Carolina <br> Cottages</h1><br>
          <h3 style="color: white; font-size: 30px; padding-left: 20px; font-family: sans-serif; ">DAPATKAN <br> DISCOUNT <br> HINGGA 15% <br> Dengan   menginap  <br>  lebih <br>  dari satu hari. <br>BERLAKU dari Tanggal <br> 12-14 DESEMBER</h3>
        </div>
        <div class="col-sm-9 gambar">
        <img src="image/carolina.jpg" style="width: 1200px;height: 650px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('#')">
        <div class="col-sm-3 tulisan">
          <h1 style="font-size: 40px; text-align: center; font-family: sans-serif;">12.12 Alloyna <br> Country Cottage</h1><br>
          <h3 style="color: white; font-size: 30px; padding-left: 20px; font-family: sans-serif; ">DAPATKAN <br> DISCOUNT <br> HINGGA 25% <br> Dengan   menginap  <br>  lebih <br>  dari satu hari. <br>BERLAKU dari Tanggal <br> 12-14 DESEMBER</h3>
        </div>
        <div class="col-sm-9 gambar">
        <img src="image/cottage.jpg" style="width: 1200px;height: 650px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('#')">
        <div class="col-sm-3 tulisan">
          <h1 style="font-size: 40px; text-align: center; font-family: sans-serif;">12.12 Grand <br> Maju Hotel</h1><br>
          <h3 style="color: white; font-size: 30px; padding-left: 20px; font-family: sans-serif; ">DAPATKAN <br> DISCOUNT <br> HINGGA 15% <br> Dengan   menginap  <br>  lebih <br>  dari satu hari. <br>BERLAKU dari Tanggal <br> 12-14 DESEMBER</h3>
        </div>
        <div class="col-sm-9 gambar">
        <img src="image/hotel.jpg" style="width: 1200px;height: 650px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('#')">
        <div class="col-sm-3 tulisan">
          <h1 style="font-size: 40px; text-align: center; font-family: sans-serif;">12.12 Brews <br> Brothers Coffee</h1><br>
          <h3 style="color: white; font-size: 30px; padding-left: 20px; font-family: sans-serif; ">DAPATKAN <br> DISCOUNT <br> HINGGA 32% <br> Minum Coffee di Brews Brothers Coffee.  <br>  Berlaku dari Tanggal <br>  12-14 DESEMBER</h3>
        </div>
        <div class="col-sm-9 gambar">
        <img src="image/brothers.jpg" style="width: 1200px;height: 650px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>



       
  </div>

</div><br>
<div style="padding-left: 20px;margin-bottom: -30px;"><br>
	<h1 style="font-size: 30px; font-family: sans-serif;font-weight: bold; " >Kunjungi Daerah</h1><br><br>
</div>
          <div class="row" style="padding-left: 10px;padding-right: 30px;">
            <div class="col-lg-3">
              <div class="card mb-4 box-shadow" style="width: 350px;height: 450px;">
                <a  href="{{url('/dairi.index')}}" id="image_div">
                  <img src="image/home/simalungun.jpg"style="width: 350px;height: 450px;" >
                  <p id="image_label" style="padding-left: 30px;"><span>DAIRI</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card mb-4 box-shadow" style="width: 350px;height: 450px;">
                <a href="{{url('/humbahas.index')}}" id="image_div">
                  <img src="image/home/samosir.jpg" style="width: 350px;height: 450px;">
                  <p id="image_label"><span>HUMBAHAS</span></p>
                </a>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card mb-4 box-shadow"style="width: 350px;height: 450px;">
                <a href="{{url('/karo.index')}}" id="image_div">
                  <img src="image/home/karo.jpg" style="width: 350px;height: 450px;">
                  <p id="image_label" style="padding-left: 30px;"><span>KARO</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>
 
            <div class="col-lg-3">
              <div class="card mb-4 box-shadow" style="width: 350px;height: 450px;">
                <a href="{{url('/ppbarat.index')}}" id="image_div">
                  <img src="image/home/humbahas.jpg" style="width: 350px;height: 450px;">
                  <p id="image_label" style="margin-left: -55px"><span>PHAK-PHAK BARAT</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card mb-4 box-shadow" style="width: 350px;height: 450px;">
                <a href="{{url('/samosir.index')}}" id="image_div">
                  <img src="image/home/taput.jpg" style="width: 350px;height: 450px;">
                  <p id="image_label"><span>SAMOSIR</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card mb-4 box-shadow" style="width: 350px;height: 450px;">
                <a href="{{url('/simalungun.index')}}" id="image_div">
                  <img src="image/home/tobasa.jpg" style="width: 350px;height: 450px;">
                  <p id="image_label" style="margin-left:-20px; "><span>SIMALUNGUN</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card mb-4 box-shadow"style="width: 350px;height: 450px;">
                <a href="{{url('/taput.index')}}" id="image_div">
                  <img src="image/home/karo.jpg" style="width: 350px;height: 450px;">
                  <p id="image_label" style="margin-left: -40px;"><span>TAPANULI UTARA</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>
 
            <div class="col-lg-3">
              <div class="card mb-4 box-shadow" style="width: 350px;height: 450px;">
                <a href="{{url('/toba.index')}}" id="image_div">
                  <img src="image/home/humbahas.jpg" style="width: 350px;height: 450px;">
                  <p id="image_label" style="padding-left: 30px;"><span>TOBA</span></p>
                </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                  </div>
              </div>
            </div>

    <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3602210938716!2d99.1458446148483!3d2.385674398261408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sInstitut%20Teknologi%20Del!5e0!3m2!1sid!2sid!4v1587597636575!5m2!1sid!2sid" width="1460px" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
 
 
            
        </div>
        </div>
    </div>
    


</main>
@endsection