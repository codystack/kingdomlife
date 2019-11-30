<?php
require_once("./controller/auth_controller.php");
require ("./components/menu.php");
?>
<div class="hero-wrap hero-wrap-about" style="background-image: url('https://i.imgur.com/GGFN0an.png'); opacity: .5;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3 bread py-3 font-weight-bold" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Media</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section contact-section ftco-degree-bg my-3">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="picture-tab" data-toggle="tab" href="#picture" role="tab" aria-controls="picture" aria-selected="true">Latest Pictures <span class="badge badge-primary badge-pill">5</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Video <span class="badge badge-primary badge-pill">8</span></a>
            </li>
        </ul>
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="picture" role="tabpanel" aria-labelledby="picture-tab">
                <section class="ftco-section ftco-gallery">
                    <div class="container">
                        <div class="d-md-flex">
                            <a href="images/cause-2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-2.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="images/cause-3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-3.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="images/cause-4.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-4.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="images/cause-5.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-5.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-md-flex">
                            <a href="images/cause-6.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-6.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="images/image_3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_3.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="images/image_1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_1.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="images/image_2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_2.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-md-flex">
                            <a href="images/event-1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/event-1.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="images/event-2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/event-2.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="images/image_1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_4.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="images/image_2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/event-4.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
            </div>

            <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="card product_item">
                                <div class="body">
                                    <div class="cp_img">
                                        <img src="images/productvideo.jpg" alt="Product" class="img-fluid">
                                    </div>
                                    <div class="product_details">
                                        <h5><a href="ec-product-detail.html">Wood Simple Clock</a></h5>
                                        <ul class="product_price list-unstyled">
                                            <li class="old_price text-muted">Two day ago</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="card product_item">
                                <div class="body">
                                    <div class="cp_img">
                                        <img src="images/productvideo2.jpeg" alt="Product" class="img-fluid">
                                    </div>
                                    <div class="product_details">
                                        <h5><a href="ec-product-detail.html">Wood Simple Clock</a></h5>
                                        <ul class="product_price list-unstyled">
                                            <li class="old_price text-muted">Two day ago</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="card product_item">
                                <div class="body">
                                    <div class="cp_img">
                                        <img src="images/productvideo.jpg" alt="Product" class="img-fluid">
                                    </div>
                                    <div class="product_details">
                                        <h5><a href="ec-product-detail.html">Wood Simple Clock</a></h5>
                                        <ul class="product_price list-unstyled">
                                            <li class="old_price text-muted">Two day ago</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="card product_item">
                                <div class="body">
                                    <div class="cp_img">
                                        <img src="images/productvideo.jpg" alt="Product" class="img-fluid">
                                    </div>
                                    <div class="product_details">
                                        <h5><a href="ec-product-detail.html">Wood Simple Clock</a></h5>
                                        <ul class="product_price list-unstyled">
                                            <li class="old_price text-muted">Two day ago</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="card product_item">
                                <div class="body">
                                    <div class="cp_img">
                                        <img src="images/productvideo2.jpeg" alt="Product" class="img-fluid">
                                    </div>
                                    <div class="product_details">
                                        <h5><a href="ec-product-detail.html">Wood Simple Clock</a></h5>
                                        <ul class="product_price list-unstyled">
                                            <li class="old_price text-muted">Two day ago</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="card product_item">
                                <div class="body">
                                    <div class="cp_img">
                                        <img src="images/productvideo.jpg" alt="Product" class="img-fluid">
                                    </div>
                                    <div class="product_details">
                                        <h5><a href="ec-product-detail.html">Wood Simple Clock</a></h5>
                                        <ul class="product_price list-unstyled">
                                            <li class="old_price text-muted">Two day ago</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="card product_item">
                                <div class="body">
                                    <div class="cp_img">
                                        <img src="images/productvideo.jpg" alt="Product" class="img-fluid">
                                    </div>
                                    <div class="product_details">
                                        <h5><a href="ec-product-detail.html">Wood Simple Clock</a></h5>
                                        <ul class="product_price list-unstyled">
                                            <li class="old_price text-muted">Two day ago</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="card product_item">
                                <div class="body">
                                    <div class="cp_img">
                                        <img src="images/productvideo.jpg" alt="Product" class="img-fluid">
                                    </div>
                                    <div class="product_details">
                                        <h5><a href="ec-product-detail.html">Wood Simple Clock</a></h5>
                                        <ul class="product_price list-unstyled">
                                            <li class="old_price text-muted">Two day ago</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="card product_item">
                                <div class="body">
                                    <div class="cp_img">
                                        <img src="images/productvideo.jpg" alt="Product" class="img-fluid">
                                    </div>
                                    <div class="product_details">
                                        <h5><a href="ec-product-detail.html">Wood Simple Clock</a></h5>
                                        <ul class="product_price list-unstyled">
                                            <li class="old_price text-muted">Two day ago</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="card product_item">
                                <div class="body">
                                    <div class="cp_img">
                                        <img src="images/productvideo2.jpeg" alt="Product" class="img-fluid">
                                    </div>
                                    <div class="product_details">
                                        <h5><a href="ec-product-detail.html">Wood Simple Clock</a></h5>
                                        <ul class="product_price list-unstyled">
                                            <li class="old_price text-muted">Two day ago</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require ("./components/footer.php");
?>
<script>
    //################# CHECK URL PARAM FUNCTION ##################
    function queryParameters () {
        var result = {};
        var params = window.location.search.split(/\?|\&/);
        params.forEach( function(it) {
            if (it) {
                var param = it.split("=");
                result[param[0]] = param[1];
            }
        });
        return result;
    }
    if (queryParameters().give == "offering"){
        $('#offeringModal').modal('show');
    }
    if (queryParameters().give == "tithe"){
        $('#titheModal').modal('show');
    }
    if (queryParameters().give == "donation" || queryParameters().anonymous == "user"){
        $('#donationModal').modal('show');
    }
    if (queryParameters().anonymous == "user"){
        $('input[name="anonymous"]')[0].checked = true;
        $('.option').hide();
    }
</script>