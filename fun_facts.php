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

        <!-- Tab panes -->
        <div class="tab-content individual-segment">
          <div class="row">
            <div class="card-navigation">
              <div class="title">
                <h1><span>Fun Facts</span> Time</h1>
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
                  <a type="button" data-bs-toggle="modal" data-bs-target="#universal_facts">
                    <div class="image">
                      <img
                        src="assets/images/fun-facts/universe/universe-thumb.jpg"
                        alt="" />
                    </div>
                    <div class="content">
                      <h1>Universal Facts</h1>
                      <p>“Universe of Facts: Science & Tech” is a unique collection of fascinating and lesser-known facts from Space, Robotics, Aerospace, and Computer Science, presented in an entertaining and memorable way. Each month, ten new facts will be added, helping visitors expand their knowledge of science and technology in a fun and engaging manner.</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- The Modal -->
<div class="modal segment-popup" id="universal_facts">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="assets/images/fun-facts/universe/universe-1.jpg" alt="">
          </div>
          <div class="item">
            <img src="assets/images/fun-facts/universe/universe-2.jpg" alt="">
          </div>
          <div class="item">
            <img src="assets/images/fun-facts/universe/universe-3.jpg" alt="">
          </div>
          <div class="item">
            <img src="assets/images/fun-facts/universe/universe-4.jpg" alt="">
          </div>
          <div class="item">
            <img src="assets/images/fun-facts/universe/universe-5.jpg" alt="">
          </div>
          <div class="item">
            <img src="assets/images/fun-facts/universe/universe-6.jpg" alt="">
          </div>
          <div class="item">
            <img src="assets/images/fun-facts/universe/universe-7.jpg" alt="">
          </div>
          <div class="item">
            <img src="assets/images/fun-facts/universe/universe-8.jpg" alt="">
          </div>
          <div class="item">
            <img src="assets/images/fun-facts/universe/universe-9.jpg" alt="">
          </div>
          <div class="item">
            <img src="assets/images/fun-facts/universe/universe-10.jpg" alt="">
          </div>
          <div class="item quiz-item-pop">
            <div class="quiz-item-pop-item">
              <img src="assets/images/fun-facts/universe/universe-10.jpg" alt="">
              <div class="content">
                <h1>Ready to Play a Quiz Game based on this Story</h1>
                <button class="theme-btn yellow--btn animation-btn"><a href="pre_primary_quiz.php#universal">
                    Play Now
                  </a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>



<?php include("footer.php") ?>

<script>
  $(document).ready(function() {
    // Cybermax modal
    $('#universal_facts').on('shown.bs.modal', function() {
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
    $('#cosmic_popup').on('shown.bs.modal', function() {
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