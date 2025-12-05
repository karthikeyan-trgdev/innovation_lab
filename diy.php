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
                      <img
                        src="assets/images/diy/valcano/lemon-valcano-thumb.jpg"
                        alt="" />
                    </div>
                    <div class="content">
                      <h1>Lemon Volcano</h1>
                      <p>This is a simple acid-base reaction. The acid from the lemon juice reacts with the base from the baking soda, creating carbon dioxide gas. This gas is what causes the fizzy, bubbly eruption!
                        The chemical equation for the reaction between lemon juice (citric acid) and baking soda (sodium bicarbonate) </p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card">
                  <a type="button" data-bs-toggle="modal" data-bs-target="#mini_catapult_popup">
                    <div class="image">
                      <img
                        src="assets/images/diy/mini-catapult/mini-catapult-thumb.jpg"
                        alt="" />
                    </div>
                    <div class="content">
                      <h1>Mini Catapult</h1>
                      <p>This activity is a fun STEM project where a simple catapult made from popsicle sticks, rubber bands, and a spoon launches a marshmallow. It demonstrates the conversion of stored energy into motion in a hands-on way.</p>
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
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="title diy-title">
              <h6>Step <span>1</span></h6>
              <h1>Prepare your material</h1>
            </div>
            <img src="assets/images/diy/valcano/valcano-1.jpg" alt="">
          </div>
          <div class="item">
            <div class="title diy-title">
              <h6>Step <span>2</span></h6>
              <h1>Allow out the Lemon</h1>
            </div>
            <img src="assets/images/diy/valcano/valcano-2.jpg" alt="">
          </div>
          <div class="item">
            <div class="title diy-title">
              <h6>Step <span>3</span></h6>
              <h1>Add the Ingredients</h1>
            </div>
            <img src="assets/images/diy/valcano/valcano-3.jpg" alt="">
            <div class="foot">
              <p>“ Place the Hollowed-out lemon in your Bowl. Squeeze a few drops of liquid food colouring into the lemon. Next, Add about a Teaspoon of Baking soda inside the lemon. “ </p>
            </div>
          </div>
          <div class="item">
            <div class="title diy-title">
              <h6>Step <span>4</span></h6>
              <h1>Make it Fizz!</h1>
            </div>
            <img src="assets/images/diy/valcano/valcano-4.jpg" alt="">
            <div class="foot">
              <p>“ Using a stick or spoon, Poke and mix the baking soda and food colouring inside the lemon. The mixture will start to Fizz and Bubble. “ </p>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/diy/valcano/valcano-5.jpg" alt="">
            <div class="foot">
              <p>“ To Create a Bigger Eruption, you can pour a little more lemon juice from the top you sliced off. “ </p>
            </div>
          </div>
          <div class="item">
            <div class="row" style="display: flex;align-items:center">
              <div class="col-lg-7">
                <div class="title title-content diy-title">
                  <h6><span>W</span>hat's <span>H</span>appening?</h6>
                  <p>This is a simple acid-base reaction. The acid from the lemon juice reacts with the base from the baking soda, creating carbon dioxide gas. This gas is what causes the fizzy, bubbly eruption!
                    The chemical equation for the reaction between lemon juice (citric acid) and baking soda (sodium bicarbonate) is:</p>
                </div>
                <div class="title title-content diy-title">
                  <h6>C<sub>6</sub>H<sub>8</sub>O<sub>7</sub> + 3&nbsp;Na<sub>3</sub>C<sub>6</sub>H<sub>5</sub>O<sub>7</sub> + 3&nbsp;H<sub>2</sub>O + 3&nbsp;CO<sub>2</sub></h6>
                  <p>Citric Acid + Sodium Bicarbonate → Sodium
                    Citrate + Water + Carbon Dioxide.<br>The carbon dioxide (CO,) gas is what causes the bubbling and fizzing you see.</p>
                </div>
              </div>
              <div class="col-lg-5">
                <img class="diy-lemon-final" src="assets/images/diy/valcano/valcano-6.jpg" alt="">
              </div>
            </div>
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
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="row" style="display: flex;align-items:center">
              <div class="col-lg-5">
                <div class="title title-content diy-title">
                  <h6><span>1.</span> Build the Base</h6>
                  <ul>
                    <li>Stack 5-7 sticks evenly on top of each other.</li>
                    <li>Secure this stack by tightly wrapping the rubber bands around each end, making sure the sticks don’t slide apart</li>
                    <li>The bands should be snug to provide a solid base for the catapult</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-7">
                <img class="diy-lemon-final" src="assets/images/diy/mini-catapult/mini-catapult-1.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row" style="display: flex;align-items:center">
              <div class="col-lg-5">
                <div class="title title-content diy-title">
                  <h6><span>2.</span> Prepare the Launching Arm</h6>
                  <ul>
                    <li>Take two more craft sticks and line them up.</li>
                    <li>Wrap a rubber band around just one end of the two sticks to hold them together, leaving the other end loose so they can open slightly.</li>
                    <li>This creates a kind of hinge for the launching arm.</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-7">
                <img class="diy-lemon-final" src="assets/images/diy/mini-catapult/mini-catapult-2.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row" style="display: flex;align-items:center">
              <div class="col-lg-5">
                <div class="title title-content diy-title">
                  <h6><span>3.</span> Combine the Base and Arm</h6>
                  <ul>
                    <li>Carefully insert the stack of sticks (Step 1) in between the two sticks from Step 2, sliding it all the way toward the end that is tied with the rubber band.</li>
                    <li>Secure this setup tightly with another rubber band so the pieces don’t shift.</li>
                    <li>Now you have a lever system — the stacked sticks act as the base, and the two joined sticks form the lever.</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-7">
                <img class="diy-lemon-final" src="assets/images/diy/mini-catapult/mini-catapult-3.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row" style="display: flex;align-items:center">
              <div class="col-lg-5">
                <div class="title title-content diy-title">
                  <h6><span>4.</span> Attach the Spoon</h6>
                  <ul>
                    <li>Place a plastic spoon across the open, free end of the two sticks (the side opposite the hinge).</li>
                    <li>Use rubber bands to fasten the spoon securely so it doesn’t wobble or fall off.</li>
                    <li>The spoon now becomes the launching cup of your catapult.</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-7">
                <img class="diy-lemon-final" src="assets/images/diy/mini-catapult/mini-catapult-4.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row" style="display: flex;align-items:center">
              <div class="col-lg-5">
                <div class="title title-content diy-title">
                  <h6><span>5.</span> Set Up for Launch</h6>
                  <ul>
                    <li>Position your catapult on a stable surface — like on top of an upside-down plastic cup or at the edge of a table - so it doesn’t tip over.</li>
                    <li>Place a mini marshmallow (or another lightweight object) in the spoon.</li>
                    <li>Hold the base steady with one hand, pull back the spoon gently, and then release it.</li>
                    <li>Watch your marshmallow fly forward!</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-7">
                <img class="diy-lemon-final" src="assets/images/diy/mini-catapult/mini-catapult-5.jpg" alt="">
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
    $('#lemon_volcano_popup').on('shown.bs.modal', function() {
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
    $('#mini_catapult_popup').on('shown.bs.modal', function() {
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