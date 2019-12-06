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
            <li class="nav-item">
                <a class="nav-link" id="audio-tab" data-toggle="tab" href="#audio" role="tab" aria-controls="audio" aria-selected="false">Audio Messages<span class="badge badge-primary badge-pill">8</span></a>
            </li>
        </ul>
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="picture" role="tabpanel" aria-labelledby="picture-tab">
                <section class="ftco-section ftco-gallery">
                    <div class="container">
                        <div class="d-md-flex">
                            <a href="https://i.imgur.com/46EPoqu.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/46EPoqu.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/dOmxT16.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/dOmxT16.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/59nWr5j.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/59nWr5j.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/UpHBv5j.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/UpHBv5j.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-md-flex">
                            <a href="https://i.imgur.com/xcsCbgx.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/xcsCbgx.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/n3SgnhX.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/n3SgnhX.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/nlGnXqT.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/nlGnXqT.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/t56kVk6.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/t56kVk6.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-md-flex">
                            <a href="https://i.imgur.com/2exSZLc.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/2exSZLc.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/BnzrknA.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/BnzrknA.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/NRnkQh6.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/NRnkQh6.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/zvKKXd5.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/zvKKXd5.jpg);">
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

            <div class="tab-pane fade" id="audio" role="tabpanel" aria-labelledby="audio-tab">
                <div class="container mb-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <input type=”text” id=”trackInput”>
                                <button type=”submit” id=”submitButton”name=”button”>SUBMIT</button>
                                <section id=”playAudioHere”></section>
                                <section id=”bands”></section>

<!--                                <table class="table table-striped">-->
<!--                                    <tbody>-->
<!--                                    <tr>-->
<!--                                        <td><img src="images/audio1.jpg" width="40px" /> </td>-->
<!--                                        <td>Satellite Church Opening Form</td>-->
<!--                                        <td class="text-right">21 hours ago</td>-->
<!--                                        <td class="text-right"><button class="btn btn-sm btn-success"><i class="fa fa-arrow-alt-circle-down"></i> </button> </td>-->
<!--                                    </tr>-->
<!--                                    </tbody>-->
<!--                                </table>-->
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

    let trackInput = document.getElementById(‘trackInput’);
    let submitButton = document.getElementById(‘submitButton’);
    submitButton.onclick = searchTracks;

    function searchTracks() {
        let searchResults = trackInput.value;
        fetch(‘https://api.soundcloud.com/tracks/?client_id=YOUR_CLIENT_ID HERE' + searchResults).then(function(response) {
            if (response.status != 200) {
                console.log(‘Looks like there was a problem. Status Code’ + response.status);
                return;
            }
        response.json().then(function(data) {
            let track = data;
            console.log(track);
    }

        function renderTracks() {
            return `
                ${track.map(track =>
                                `<div class=”box”>
                <div src=”${track.stream_url}”></div>
                <button id=”albumBtn” class=”albumButton”><img id=”${track.stream_url}${clientId}” src=”${track.artwork_url}”></img></button>
                <div id=”songTitle” class=”title”>${track.title}</div>
                </div>`
                            )}
            `
        }
        let markup = `${renderTracks()}`;
        document.getElementById(‘bands’).innerHTML = markup;

</script>