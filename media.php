<?php
require_once("./controller/auth_controller.php");
//require_once("./controller/youtube.php");
require ("./components/menu.php");
?>
<link rel="stylesheet" href="css/audio.css">
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
                <a class="nav-link" id="audio-tab" data-toggle="tab" href="#audio" role="tab" aria-controls="audio" aria-selected="false">Audio Messages<span id="totalAudio" class="badge badge-primary badge-pill"></span></a>
            </li>
        </ul>
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="picture" role="tabpanel" aria-labelledby="picture-tab">
                <section class="ftco-section ftco-gallery">
                    <div class="container">
                        <div class="d-md-flex">
                            <a href="https://i.imgur.com/46EPoqum.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/46EPoqu.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/dOmxT16m.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/dOmxT16.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/59nWr5jm.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/59nWr5j.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/UpHBv5jm.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/UpHBv5j.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-md-flex">
                            <a href="https://i.imgur.com/xcsCbgxm.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/xcsCbgx.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/n3SgnhXm.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/n3SgnhX.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/nlGnXqTm.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/nlGnXqT.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/t56kVk6m.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/t56kVk6.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-md-flex">
                            <a href="https://i.imgur.com/2exSZLcm.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/2exSZLc.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/BnzrknAm.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/BnzrknA.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/NRnkQh6m.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/NRnkQh6.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <a href="https://i.imgur.com/zvKKXd5m.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(https://i.imgur.com/zvKKXd5.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
            </div>

            <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                <div class="container">
                    <div class="row clearfix">
                        <?php
                            foreach($videoList->items as $item){
                                //Embed video
                                if(isset($item->id->videoId)){
                                    echo '
                                    <div class="col m-auto">
                                        <div class="card">
                                            <div class="card-body m-auto youtube-video mb-3" style="width: 320px; height: 100%">
                                                <iframe width="280" height="150" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
                                                <div class="card-title"><h5>'. $item->snippet->title .'</h5></div>
                                                <p class="card-text">'. $item->snippet->publishedAt .'</p>
                                            </div>
                                        </div>
                                    </div>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="audio" role="tabpanel" aria-labelledby="audio-tab">
                <div class="page">
                    <div class="player-wrap" data-url="//archive.org/download/mythium/JLS_ATI" data-title="All This Is - Joe L.'s Studio">
                        <div id="bigPlay" class="button">Play</div>
                        <div class="info">
                            <div class="pt-3"><h4 class="font-weight-bold text-info">Kingdomlife Audio Massages</h4></div>
                            <p class="action">&nbsp;</p>
                            <p class="title ellipsis text-info"></p>
                        </div>
                        <div class="player">
                            <audio preload></audio>
                            <div class="playpause">
                                <div class="play"><svg viewBox="0 0 14 14"><path d="M0,0 L0,14 L11,7 L0,0 Z"/></svg></div>
                                <div class="pause"><svg viewBox="0 0 14 14"><path d="M0,14 L4,14 L4,0 L0,0 L0,14 L0,14 Z M8,0 L8,14 L12,14 L12,0 L8,0 L8,0 Z"/></svg></div>
                            </div>
                            <small class="timer small">
                                <div class="current">0:00:00</div>
                                <div>/</div>
                                <div class="duration">0:00:00</div>
                            </small>
                            <div><input type="range" min="0" max="100" step=".1" value="0" class="seek"></div>
                            <div class="prev"><svg viewBox="0 0 12 12"><path d="M3.5,6 L12,12 L12,0 L3.5,6 Z M0,0 L0,12 L2,12 L2,0 L0,0 L0,0 Z"/></svg></div>
                            <div class="next"><svg viewBox="0 0 12 12"><path d="M0,12 L8.5,6 L0,0 L0,12 L0,12 Z M10,0 L10,12 L12,12 L12,0 L10,0 L10,0 Z"/></svg></div>
                        </div>
                    </div>
                    <div class="playlist-wrap pt-5">

                            <?php
                            $result= mysqli_query($conn, "SELECT description, filename FROM audio ORDER BY id desc" )
                            or die("SELECT Error: ".mysqli_error());

                            echo "<ol>";
                            while ($row = mysqli_fetch_array($result)){
                                $files_field= $row['filename'];
                                $files_show= "audio/$files_field";
                                $descriptionvalue= $row['description'];
                                echo "<li id='track' class='py-3'>";
                                echo "<a href='".$files_show."'>".$descriptionvalue."</a>
                                <span class='text-black px-3 float-right' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' data-toggle='tooltip' data-placement='left' title='Click to Download'>
                                    <i class='fas fa-ellipsis-v'></i>
                                </span>
                                <div class='dropdown-menu'>
                                    <a class='dropdown-item text-left' href='".$files_show.".mp3' download><i class='fas fa-file-download'></i> Download</a>
                                </div>
                                ";
                                echo "</li>";
                            }
                            print "</ol>";

                            ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php
require ("./components/footer.php");
?>
<script src="js/audio.js"></script>
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
    if (queryParameters().tab === "picture"){
        $('#picture-tab')[0].click();
    }
    if (queryParameters().tab === "video"){
        $('#video-tab')[0].click();
    }
    if (queryParameters().tab === "audio"){
        $('#audio-tab')[0].click();
    }

    $(document).ready(() => {
        let countDiv = $('ol #track').length; // Result: 3
        $('#totalAudio').html(countDiv);

        $('#bigPlay').on('click', () =>{
            $('#bigPlay').html('playing');
        })
    });

    // AUDIO QUERY

</script>