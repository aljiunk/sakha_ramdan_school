@extends('guest.layouts.app')
@section('content')
    <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
    <div class="carousel-caption">
        <h3 class="h3-responsive">Selamat Datang</h3>
        <p>Yayasan Pendidikan Sakha Ramdan Aditya</p>
    </div>  
    <div class="view">
        <img class="d-block w-100 h-100" src="{{ asset('img/slider.jpg') }}" 
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 h-100" src="{{ asset('img/slide1.jpg') }}"
          alt="Second slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Strong mask</h3>
        <p>Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 h-100" src="{{ asset('img/slide3.jpg') }}"
          alt="Third slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Slight mask</h3>
        <p>Third text</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-center">
                <h2 class="oswald">Yayasan Pendidikan Sakha Ramdan Aditya</h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <img src="{{ asset('img/slider.jpg') }}" style="width:300px; height:150px;">
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <h5>Sekolah Menengah Pertama</h5>
                        </div>
                        <div class="row mt-2 d-flex justify-content-center">
                            <div class="col-lg-10 d-flex justify-content-center">
                                <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a dolor tincidunt, finibus dolor a, accumsan lectus. Integer id enim pretium, luctus dui eu, rhoncus erat. Donec velit nulla, tempor eu erat in, pellentesque porta erat. Nunc commodo nisi risus, a pellentesque tortor mollis ac. Cras at tempus odio. Vivamus...</small>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10 d-flex justify-content-end">
                                <button type="button" class="btn btn-sm btn-amber m-0" data-toggle="modal" data-target="#smp">Read More ...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <img src="{{ asset('img/slider.jpg') }}" style="width:300px; height:150px;">
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <h5>Sekolah Menengah Kejuruan</h5>
                        </div>
                        <div class="row d-flex justify-content-center mt-2">
                            <div class="col-lg-10">
                                <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a dolor tincidunt, finibus dolor a, accumsan lectus. Integer id enim pretium, luctus dui eu, rhoncus erat. Donec velit nulla, tempor eu erat in, pellentesque porta erat. Nunc commodo nisi risus, a pellentesque tortor mollis ac. Cras at tempus odio. Vivamus...</small>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-6 d-flex justify-content-end">
                                <button type="button" class="btn btn-sm btn-amber m-0" data-toggle="modal" data-target="#smk">Read More ...</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="button" class="btn btn-sm btn-success m-0">Daftar Disini</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <img src="{{ asset('img/slider.jpg') }}" style="width:300px; height:150px;">
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <h5>Universitas Terbuka</h5>
                        </div>
                        <div class="row mt-2 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a dolor tincidunt, finibus dolor a, accumsan lectus. Integer id enim pretium, luctus dui eu, rhoncus erat. Donec velit nulla, tempor eu erat in, pellentesque porta erat. Nunc commodo nisi risus, a pellentesque tortor mollis ac. Cras at tempus odio. Vivamus...</small>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-6 d-flex justify-content-end">
                                <button type="button" class="btn btn-sm btn-amber m-0" data-toggle="modal" data-target="#ut">Read More ...</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="button" class="btn btn-sm btn-success m-0" onclick="window.open('https://sia.ut.ac.id');">Daftar Disini</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="smp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header success-color-dark">
                        <h5 class="modal-title text-white" id="exampleModalLabel">SMP</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="{{ asset('img/slider.jpg') }}" style="width:380px;">
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Sekolah Menengah Pertama</h4>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus cursus lectus, eget porttitor odio placerat a. Ut varius aliquam maximus. Nulla metus turpis, lobortis nec enim ut, auctor auctor velit. Quisque imperdiet, neque dignissim aliquet dapibus, dui purus mollis sapien, in finibus ex velit eget lectus. Duis ac massa viverra, sodales ligula id, finibus ante. Nullam faucibus fermentum elit, et interdum mi fringilla eleifend</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="smk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header success-color-dark">
                        <h5 class="modal-title text-white" id="exampleModalLabel">SMK</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="{{ asset('img/slider.jpg') }}" style="width:380px;">
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>SMP BlaBlaBla</h4>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus cursus lectus, eget porttitor odio placerat a. Ut varius aliquam maximus. Nulla metus turpis, lobortis nec enim ut, auctor auctor velit. Quisque imperdiet, neque dignissim aliquet dapibus, dui purus mollis sapien, in finibus ex velit eget lectus. Duis ac massa viverra, sodales ligula id, finibus ante. Nullam faucibus fermentum elit, et interdum mi fringilla eleifend</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ut" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header success-color-dark">
                        <h5 class="modal-title text-white" id="exampleModalLabel">UT</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="{{ asset('img/slider.jpg') }}" style="width:380px;">
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>SMP BlaBlaBla</h4>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus cursus lectus, eget porttitor odio placerat a. Ut varius aliquam maximus. Nulla metus turpis, lobortis nec enim ut, auctor auctor velit. Quisque imperdiet, neque dignissim aliquet dapibus, dui purus mollis sapien, in finibus ex velit eget lectus. Duis ac massa viverra, sodales ligula id, finibus ante. Nullam faucibus fermentum elit, et interdum mi fringilla eleifend</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection