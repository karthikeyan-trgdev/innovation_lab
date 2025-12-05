<?php include("header.php") ?>

<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="breadcrumb-content">
                <h6><a href="">Home</a></h6>
                <h6>>></h6>
                <h6><a href="">Innovation Lab</a></h6>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="theme-title">
                <h1>Innovation <span>Labs</span></h1>
                <p>
                    Explore our innovative learning programs designed for different
                    age groups
                </p>
            </div>

            <div class="segment-category">
                <!-- Nav tabs -->
                <!-- <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#home"><span><img
                  src="assets/images/icons/pre-primary-icon.svg"
                  alt="" /></span>Pre-primary group</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#menu1"><span><img
                  src="assets/images/icons/primary-icon.svg"
                  alt="" /></span>Primary Segment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#menu2"><span><img
                  src="assets/images/icons/highschool-icon.svg"
                  alt="" /></span>Highschool</a>
          </li>
        </ul> -->

                <!-- Tab panes -->
                <div class="tab-content individual-segment">
                    <div class="row">
                        <div class="card-navigation">
                            <div class="title">
                                <h1><span>DIY</span> Time</h1>
                            </div>
                            <div class="back">
                                <h6><a href="index.php"><i class="fa-solid fa-chevron-left"></i> Back</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane container active" id="home">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#lemon_volcano_popup">
                                        <div class="image">
                                            <img src="assets/images/diy/valcano/lemon-valcano-thumb.jpg" alt="" />
                                        </div>
                                        <div class="content">
                                            <h1>Lemon Volcano</h1>
                                            <p>This is a simple acid-base reaction. The acid from the lemon juice reacts
                                                with the base from the baking soda, creating carbon dioxide gas. This
                                                gas is what causes the fizzy, bubbly eruption!
                                                The chemical equation for the reaction between lemon juice (citric acid)
                                                and baking soda (sodium bicarbonate) </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#mini_catapult_popup">
                                        <div class="image">
                                            <img src="assets/images/diy/mini-catapult/mini-catapult-thumb.jpg" alt="" />
                                        </div>
                                        <div class="content">
                                            <h1>Mini Catapult</h1>
                                            <p>This activity is a fun STEM project where a simple catapult made from
                                                popsicle sticks, rubber bands, and a spoon launches a marshmallow. It
                                                demonstrates the conversion of stored energy into motion in a hands-on
                                                way.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane container fade" id="menu1">...</div>
          <div class="tab-pane container fade" id="menu2">...</div> -->
                </div>
            </div>
        </div>
    </div>
</section>



<!-- The Modal -->
<div class="modal segment-popup diy_popup" id="lemon_volcano_popup">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="diy-video">
                    <div class="item">
                        <iframe width="100%" height="500"
                            src="https://www.youtube.com/embed/CPOKDru-2ug?si=SIu2fVOCjdI_eh3H"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal segment-popup mini_catapult_popup" id="mini_catapult_popup">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="diy-video">
                    <div class="item">
                        <iframe width="100%" height="500"
                            src="https://www.youtube.com/embed/WpLFC_SOpXs?si=Ns-jy_OAeYGmBtGi"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




<?php include("footer.php") ?>

<script>
    $(document).ready(function () {
        // Cybermax modal
        $('#lemon_volcano_popup').on('shown.bs.modal', function () {
            var $carousel = $(this).find('.owl-carousel');

            if (!$carousel.hasClass('owl-loaded')) {
                $carousel.owlCarousel({
                    loop: false,
                    margin: 10,
                    nav: true,
                    dots: false,
                    navText: [
                        '<span class="owl-prev-icon"><i class="fa fa-chevron-left"></i></span>',
                        '<span class="owl-next-icon"><i class="fa fa-chevron-right"></i></span>'
                    ],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                });
            } else {
                $carousel.trigger('refresh.owl.carousel');
            }
        });

        // Cosmic Time Lines modal
        $('#mini_catapult_popup').on('shown.bs.modal', function () {
            var $carousel = $(this).find('.owl-carousel');

            if (!$carousel.hasClass('owl-loaded')) {
                $carousel.owlCarousel({
                    loop: false,
                    margin: 10,
                    nav: true,
                    dots: false,
                    navText: [
                        '<span class="owl-prev-icon"><i class="fa fa-chevron-left"></i></span>',
                        '<span class="owl-next-icon"><i class="fa fa-chevron-right"></i></span>'
                    ],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                });
            } else {
                $carousel.trigger('refresh.owl.carousel');
            }
        });
    });
</script>