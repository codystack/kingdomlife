<?php
require_once("./controller/auth_controller.php");
require ("./components/menu.php");
?>
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <div class="modal fade" id="offeringModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="deep-grey-text pb-1">Offering</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="rounded-circle" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group"> <!-- left unspecified, .bmd-form-group will be automatically added (inspect the code) -->
                            <div class="border-bottom"></div>
                            <input type="text" class="form-control" id="givebtn" placeholder="Enter Amount Eg: &#8358;1,000">
                        </div>
                        <div class="text-center mb-4">
                            <button type="button" class="btn-lg btn-danger btn-block z-depth-2">Pay Offering</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="titheModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="deep-grey-text pb-1">Tithe</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <div class="rounded-circle"><span aria-hidden="true">&times;</span></div>
                </button>
            </div>
            <div class="modal-body">
                <?php
                if (isset($_SESSION['user_session'])){
                    echo '<form>';
                    echo '<div class="form-group">';
                    echo '<div class="border-bottom"></div>';
                    echo '<input type="text" class="form-control" id="givebtn" placeholder="Enter Amount Eg: &#8358;1,000">';
                    echo '</div>';
                    echo '<div class="text-center mb-4">';
                    echo '<button type="button" class="btn-lg btn-danger btn-block z-depth-2">Pay Tithe</button>';
                    echo '</div>';
                    echo '</form>';
                } else{
                    echo '<p class="font-small grey-text d-flex justify-content-center">You\'re not yet a member<a href="#"
          class="dark-grey-text font-weight-bold ml-1"> Register Now</a></p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="donationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="deep-grey-text pb-1">Donation</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <div class="rounded-circle"><span aria-hidden="true">&times;</span></div>
                </button>
            </div>
            <div class="modal-body">
                <label for="Form-email2">Select Programme</label>
                <select class="custom-select custom-select-lg mb-3">
                    <option value="Church Building Support Programme" selected>Church Building Support Programme</option>
                    <option value="Every Child Your Child">Every Child Your Child</option>
                    <option value="Mama's Day">Mama's Day</option>
                </select>
                <div class="form-check my-1">
                    <input onclick="location.assign('?anonymous=user')" class="form-check-input" name="anonymous" type="checkbox" id="defaultCheck12">
                    <label for="defaultCheck12" class="grey-text">Donate Anonymously</label>
                </div>

                <div class="option">
                    <hr>
                    Or
                    <hr>
                </div>

                <?php
                if (isset($_SESSION['user_session']) || isset($_GET['anonymous'])){
                    echo '<form>';
                    echo '<div class="form-group">';
                    echo '<div class="border-bottom"></div>';
                    echo '<input type="text" class="form-control" id="givebtn" placeholder="Enter Amount Eg: &#8358;1,000">';
                    echo '</div>';
                    echo '<div class="text-center mb-4">';
                    echo '<button type="button" class="btn-lg btn-danger btn-block z-depth-2">Donate</button>';
                    echo '</div>';
                    echo '</form>';
                } else{
                    echo '<p class="font-small grey-text">You\'re not yet a member<a href="#"
          class="dark-grey-text font-weight-bold ml-1"> Register Now</a></p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

    <div class="hero-wrap hero-wrap-about" style="background-image: url('https://i.imgur.com/GGFN0an.png'); opacity: .5;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread py-3 font-weight-bold" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Give Online</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mx-auto text-center my-5">
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg my-lg-5">
        <div class="container">
            <div class="row">
                <div onclick="location.assign('?give=offering')" class="col-md-4 mb-4 pastorcard">
                    <div class="card gradient-card rounded">
                        <div class="card-image p-4 offering rounded-top">
                            <h4 class="text-uppercase font-weight-bold my-4 text-white">Offerings</h4>
                            <i class="fas fa-globe-africa"></i>
                        </div>
                        <div class="card-body white">
                            <p class="text-muted">Give your Offering Online</p>
                        </div>
                    </div>
                </div>

                <div onclick="location.assign('?give=tithe')" class="col-md-4 mb-4 pastorcard">
                    <div class="card gradient-card rounded">
                        <div class="card-image p-4 tithe rounded-top">
                            <h4 class="text-uppercase font-weight-bold my-4 text-white">Tithe</h4>
                            <i class="fas fa-plane-arrival"></i>
                        </div>
                        <div class="card-body white">
                            <p class="text-muted">Pay your tithe Online</p>
                        </div>
                    </div>
                </div>

                <div onclick="location.assign('?give=donation')" class="col-md-4 mb-4 pastorcard">
                    <div class="card gradient-card rounded">
                        <div class="card-image p-4 donation rounded-top">
                            <h4 class="text-uppercase font-weight-bold my-4 text-white">Donation</h4>
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <div class="card-body white">
                            <p class="text-muted">Help to see the world in a better shape</p>
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
