<?php
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Always Sahi Solution</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width:screen-width initial-scale:1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
    <script src="js/bootstrap.min.js" defer></script>
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" defer></script>
    <link herf="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/mstake.js" defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="/css/style2Header.css" />
    <link rel="stylesheet" href="/css/style2-res.css" />
    <link rel="stylesheet" href="/css/mstake.css" />
    <link rel="stylesheet" href="/css/style2Color.css" />
    <link rel="stylesheet" href="/css/style2Footer.css">


  </head>
  <body>

    <!-- Package Escape Funnel Start-->
    <section class="main-content">
      <div class="left-content">
        <h2 class="left-content-heading">M-Stake</h2>
        <p class="left-content-para">
            An Initiative introduced to, bring in more Investors as Well as Traders,
            into the world of Securities market. Providing them the Financial
            Freedom, and Future Planning. With Ample knowledge and Practical
            Exposure, Through our Training Program, and Practical Investment
            Channel.
        </p>
        <button class="Enroll-btn">Enroll Now</button>
      </div>
      <div class="right-content">
        <img class="right-content-img" src="image/4as.svg" alt="" />
      </div>
    </section>
    <!-- Package Escape Funnel End-->

    <!-- Scope of achievement starts -->
    <!-- <section class="scope">
      <h1 class="scope-heading">Scope of achievements</h1>
      <div class="scope-content">
        <div>
            <input type="checkbox" id="scope-accounts1" class="scope-accounts" name="scope-accounts"/>
            <label for="scope-accounts1" class="scope-inner-content"> Accounts & Finance</label>
            <div class="scope-details">
                <section class="scope-details-main">
                    <div class="scope-details-left">
                        <h2 class="scope-details-heading">Account & Finances</h2>
                        <p class="scope-details-para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo vitae culpa deleniti, vero numquam modi, aliquam eum quisquam omnis nostrum corrupti iusto itaque alias laudantium molestiae eveniet? Eaque ut adipisci necessitatibus! Doloremque quo dolorem saepe voluptatum adipisci rem accusamus consequuntur?
                        </p>
                        <button class="accounts-btn">Enroll Now</button>
                    </div>
                    <div class="scope-details-right">
                        <img class="account-details-img" src="image/3as.svg">
                    </div>
                </section>
                <section class="covering"> -->
                    <!-- <h2 class="covering-heading">Covering</h2>
                    <div class="covering-content">
                        <div class="covering-div">
                            <input type="checkbox" id="accounts1" class="scope-accounts" name="scope-accounts"/>
                            <label for="accounts1" class="covering-inner-content"> Tally Erp9</label>
                            <div class="scope-details">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, quos.</div>
                         </div>
                        <div class="covering-div">
                            <input type="checkbox" id="accounts2" class="scope-accounts" name="scope-accounts"/>
                            <label for="accounts2" class="covering-inner-content">Taxation</label>
                            <div class="scope-details">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor, sapiente.</div>
                         </div>
                    </div> -->
                    <div class="services">
      <div class="tabs" id="target">
        <!-- first element start here -->
        <input type="radio" id="s1" class="slider" name="slider" />
        <input type="radio" id="s2" class="slider" name="slider" />
        <input type="radio" id="s3" class="slider" name="slider" checked />
        <input type="radio" id="s4" class="slider" name="slider" />
        <input type="radio" id="s5" class="slider" name="slider" />
          <input type="radio" id="s6" class="slider" name="slider" />
        <div class="tab target"></div>
        <label for="s1" class="slider-label" id="slider1">
          <div class="tab" id="t1" reference="target">
            <div class="card ">
              <div class="front" onclick="first(0)">
                <div class="img">
                  <a href="#"><img src="download (1).png" /></a>
                </div>
                <div class="heading">
                  <h2>Basics of Stock Market</h2>
                </div>
              </div>
              <div class="back" onclick="second(0)">
                <div class="back-content">
                  <h2>Coming Soon</h2>
                </div>
              </div>
            </div>
          </div>
        </label>
        <!-- first element ends here -->
        <label for="s2" class="slider-label" id="slider2">
          <div class="tab" id="t2" reference="target">
            <div class="card">
              <div class="front" onclick="first(1)">
                <div class="img">
                  <a href="#"><img src="download (1).png" /></a>
                </div>
                <div class="heading">
                  <h2>Fundamental Analysis </h2>
                </div>
              </div>
              <div class="back" onclick="second(1)">
                <div class="back-content">
                  <h2>Coming Soon</h2>
                </div>
              </div>
            </div>
          </div>
        </label>
        <label for="s3" class="slider-label" id="slider3">
          <div class="tab" id="t3">
            <div class="card">
              <div class="front" onclick="first(2)">
                <div class="img">
                  <a href="#"><img src="download (1).png" /></a>
                </div>
                <div class="heading">
                  <h2>Technical Analysis </h2>
                </div>
              </div>
              <div class="back" onclick="second(2)">
                <div class="back-content">
                  <h2>Coming Soon</h2>
                </div>
              </div>
            </div>
          </div>
        </label>
        <label for="s4" class="slider-label" id="slider4">
          <div class="tab" id="t4">
            <div class="card ">
              <div class="front" onclick="first(3)">
                <div class="img">
                  <a href="#"><img src="download (1).png" /></a>
                </div>
                <div class="heading">
                  <h2>Mutual Funds Investment </h2>
                </div>
              </div>
              <div class="back" onclick="second(3)">
                <div class="back-content ">
                  <h2>Coming Soon</h2>
                </div>
              </div>
            </div>
          </div>
        </label>
        <label for="s5" class="slider-label" id="slider5">
          <div class="tab" id="t5">
            <div class="card ">
              <div class="front" onclick="first(4)">
                <div class="img">
                  <a href="#"><img src="download (1).png" /></a>
                </div>
                <div class="heading">
                  <h2>Managing Personal Finance</h2>
                </div>
              </div>
              <div class="back" onclick="second(4)">
                <div class="back-content ">
                  <h2>Coming Soon</h2>
                </div>
              </div>
            </div>
          </div>
        </label>
        <label for="s6" class="slider-label" id="slider6">
          <div class="tab" id="t6">
            <div class="card ">
              <div class="front" onclick="first(5)">
                <div class="img">
                  <a href="#"><img src="download (1).png" /></a>
                </div>
                <div class="heading">
                  <h2>Making Value Investments</h2>
                </div>
              </div>
              <div class="back" onclick="second(5)">
                <div class="back-content ">
                  <h2>Coming Soon</h2>
                </div>
              </div>
            </div>
          </div>
        </label>
      </div>
    </div>
                </section>
            </div>
        </div>
        <!-- <div>
            <input type="checkbox" id="scope-accounts2" class="scope-accounts" name="scope-accounts"/>
            <label for="scope-accounts2" class="scope-inner-content"> Coding & Web Development</label>
            <div class="scope-details">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam eaque doloribus quos nisi accusamus architecto in eveniet consequatur? Cum perspiciatis rerum rem nulla mollitia, aliquam consectetur quidem repudiandae dignissimos praesentium, eum provident sed. Eligendi corrupti ratione quos error, incidunt odio sit voluptas amet laudantium sed, suscipit eos voluptatem fuga nostrum.
            </div>
        </div> -->
      <!-- <div class="perks-incentives">Perks and Incentives</div> -->
    </section>
    <!-- Scope of achievement Ends -->
    <!-- Perks And Incentives Starts -->
  <!-- <h1 class="perks-incentives">Perks and Incentives</h1> -->
  <div class="perks-menu">
    <input type="checkbox" id="perks-toggle" />
    <label for="perks-toggle" id="show-menu">
      <h1 class="perks-btn perks-name">Perks & Incentives</h1>
      <div class="perks-btn"><span class="material-content">Get ISO Certification</span></div>
      <div class="perks-btn"><span class="material-content">Become our IAC</span></div>
      <div class="perks-btn"><span class="material-content">Start Freelancing or Entrepreneurship</span></div>
      <div class="perks-btn"><span class="material-content">Find Your Package Escape</span></div>
    </label>
  </div>
  <!-- Perks And Incentives Ends -->
  <!-- footer -->
  <?php
  require 'footer.php';
  ?>
  </body>
</html>

