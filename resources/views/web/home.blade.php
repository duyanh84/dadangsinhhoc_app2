@extends('web.master')
@section('title')
    {{ $title }}
@endsection
@section('slide')
    <div id="carouselControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="3000">
        <!-- Indicators -->
        {{-- <ol class="carousel-indicators">
            <li data-target="#carouselControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselControls" data-slide-to="1"></li>
            <li data-target="#carouselControls" data-slide-to="2"></li>
        </ol> --}}
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('{{ asset('front/images/slider-01.png') }}');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-right">
                                    <div class="big-tagline">
                                        <h2 ><strong>Hệ thống cơ sở dữ liệu về đa dạng sinh học Hà Nội<br> </strong></h2>
                                        {{-- <p class="lead">With Landigoo responsive landing page template, you can promote your all hosting, domain and email services. </p> --}}
                                        <div class="col-lg-12">
                                            <form {{-- class="checkdomain form-inline" --}}>
                                                <div class="checkdomain-wrapper" style="width: 800px;">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="domainnamehere">Domain name</label>
                                                        <input type="text" class="form-control" id="domainnamehere" placeholder="Nhập từ khóa tìm kiếm tại đây..">
                                                        <button type="submit" class="btn btn-primary grd1"><i class="fa fa-search"></i></button>
                                                    </div>
                                                    <hr>
                                                    <div class="clearfix"></div>
                                                    <div class="checkbox checkbox-warning">
                                                        <input id="domaincom" type="checkbox" class="styled" checked>
                                                        <label for="domaincom">Loài</label>
                                                    </div>
                                                    <div class="checkbox checkbox-warning">
                                                        <input id="domainnet" type="checkbox" class="styled">
                                                        <label for="domainnet">Bộ dữ liệu</label>
                                                    </div>
                                                    <div class="checkbox checkbox-warning">
                                                        <input id="domainorg" type="checkbox" class="styled">
                                                        <label for="domainorg">Cơ quan công bố</label>
                                                    </div>
                                                    <div class="checkbox checkbox-warning">
                                                        <input id="domaintv" type="checkbox" class="styled">
                                                        <label for="domaintv">Khu bảo tồn</label>
                                                    </div>
                                                </div><!-- end checkdomain-wrapper -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->            
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>
            {{-- <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('{{ asset('front/images/slider-02.png') }}');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-left">
                                    <div class="big-tagline">
                                        <h2 data-animation="animated zoomInRight">Find the right <strong>Hosting</strong></h2>
                                        <h2 data-animation="animated zoomInRight"><strong>Hệ thống cơ sở dữ liệu<br>về đa dạng sinh học</strong></h2>
                                        <p class="lead" data-animation="animated fadeInLeft">With Landigoo responsive landing page template, you can promote your all hosting, domain and email services. </p>
                                        <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="hover-btn-new"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div><!-- end row -->            
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>
            <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('{{ asset('front/images/slider-03.png') }}');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <div class="big-tagline">
                                        <h2 data-animation="animated zoomInRight"><strong>Hệ thống cơ sở dữ liệu<br>về đa dạng sinh học</strong></h2>
                                        <p class="lead" data-animation="animated fadeInLeft">1 IP included with each server 
                                            Your Choice of any OS (CentOS, Windows, Debian, Fedora)
                                            FREE Reboots</p>
                                        <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="hover-btn-new"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div><!-- end row -->            
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div> --}}
            <!-- Left Control -->
            {{-- <a class="new-effect carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            Right Control
            <a class="new-effect carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> --}}
        </div>
    </div>
@endsection