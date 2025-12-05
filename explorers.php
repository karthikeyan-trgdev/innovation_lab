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
                <h1><span>Explorers</span> Time</h1>
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
                  <a type="button" data-bs-toggle="modal" data-bs-target="#magnetometer">
                    <div class="image">
                      <img
                        src="assets/images/explorers/magnameter/mangnameter.jpg"
                        alt="" />
                    </div>
                    <div class="content">
                      <h1>Magnetometer</h1>
                      <p>A magnetometer is a special tool that measures magnetic fields; the invisible “force fields” around magnets. In space exploration, magnetometers help scientists study the magnetic shields of planets, moons, and even the Sun.</p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="card">
                  <a type="button" data-bs-toggle="modal" data-bs-target="#plasma_popup">
                    <div class="image">
                      <img
                        src="assets/images/explorers/plasma-wave-detecter/plasma-wave.jpg"
                        alt="" />
                    </div>
                    <div class="content">
                      <h1>Plasma Wave Detector</h1>
                      <p>A plasma wave detector is a special instrument that “listens” to the electric and magnetic waves traveling through plasma  : a hot, charged gas that fills much of space.</p>
                    </div>
                  </a>
                </div>
              </div>
              <P></P>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- The Modal -->
<div class="modal segment-popup explorer_popup" id="magnetometer">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="item ">
          <img src="assets/images/explorers/magnameter/mangnameter.jpg" alt="">
          <div class="title title-content">
            <h6><span>Magnetometer</span></h6>
            <p>A magnetometer is a special tool that measures magnetic fields; the invisible “force fields” around magnets. In space exploration, magnetometers help scientists study the magnetic shields of planets, moons, and even the Sun.</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="title title-content">
                <h6><span>Why does this matter?</span></h6>
                <p>Magnetic fields protect planets from dangerous space radiation and reveal secrets about what’s hidden deep inside a planet’s core.</p>
                <p>On Earth, magnetometers are just as useful! They:</p>
                <ul>
                  <li>Detect minerals underground</li>
                  <li>Guide airplanes and ships by showing direction (like a super-smart compass)</li>
                </ul>
                <p>So, magnetometers aren’t just about space—they make life safer and exploration easier both in orbit and right here on Earth.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <img src="assets/images/explorers/magnameter/mangnameter-1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="item quiz-item-pop" style="padding-top: 30px;">
          <div class="quiz-item-pop-item">
            <img style="height: 270px;" src="assets/images/explorers/magnameter/mangnameter.jpg" alt="">
            <div class="content">
              <h1>Ready to Play a Quiz Game based on this Story</h1>
              <button class="theme-btn yellow--btn animation-btn"><a href="primary_quiz.php#magnetometer">
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


<div class="modal segment-popup explorer_popup" id="plasma_popup">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="item ">
          <img src="assets/images/explorers/plasma-wave-detecter/plasma-wave.jpg" alt="">
          <div class="title title-content">
            <h6><span>Plasma Wave Detector </span></h6>
            <p>A plasma wave detector is a special instrument that “listens” to the electric and magnetic waves traveling through plasma  : a hot, charged gas that fills much of space.</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="title title-content">
                <h6><span>Why is this important?</span></h6>
                <p>Plasma wave detectors help scientists:</p>
                <ul>
                  <li>⁠Understand space weather (storms of particles streaming from the Sun)</li>
                  <li>⁠Study how planets interact with solar winds</li>
                  <li>Detect even the tiniest impacts on spacecraft</li>
                </ul>
                <p>This knowledge keeps our technology safe. By monitoring space disturbances, plasma wave detectors play a key role in protecting satellites and communication systems that we depend on every day.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <img src="assets/images/explorers/plasma-wave-detecter/plasma-wave-1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="item quiz-item-pop" style="padding-top: 30px;">
          <div class="quiz-item-pop-item">
            <img style="height: 270px;" src="assets/images/explorers/plasma-wave-detecter/plasma-wave.jpg" alt="">
            <div class="content">
              <h1>Ready to Play a Quiz Game based on this Story</h1>
              <button class="theme-btn yellow--btn animation-btn"><a href="primary_quiz.php#plasma">
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



<?php include("footer.php") ?>

<script>
  $(document).ready(function() {
    // Cybermax modal
    $('#myModal').on('shown.bs.modal', function() {
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