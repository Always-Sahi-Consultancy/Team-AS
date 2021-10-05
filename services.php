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
  <!-- <script src="js/menu.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" defer></script>
  <link herf="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/services.js" defer></script>
  <script src="js/site.js" defer></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style2Color.css" />
  <link rel="stylesheet" href="/css/style2Header.css" />
  <link rel="stylesheet" href="/css/style2-res.css" />
  <link rel="stylesheet" href="/css/services.css" />
  <link href="css/style2Footer.css" rel="stylesheet">


</head>

<body>
  <!-- Header Section Starts-->
    <header>
        <div class="head">
            <div class="head_nav">
                <div id="As_logo">
                    <a href="index" class="company">
                        <img src="image/As logo Edited.png"></img>
                        <div class="Company_name">
                          <p class="Com_name">Always <span class="sahi">Sahi</span></p>
                          <p class="company-tagline">A Package Escape</p>
                        </div>
                    </a>  
                </div>
                <div class="nav">
                    <div class="nav_first">
                        <span class="nav_items_section" id="company">Company
                            <div class="nav_first_options company-nav-container">
                                <div class="service_sections company-item item-1">
                                    <div>
                                    <h3>About Us</h3>
                                    <span class=".company_details">Always Sahi Solutions aims to build Individuals as well as corporate solutions, where you can achieve “a Package Escape”, to build young entrepreneurs with our Individuals Training Modules, and Workshops.</span><br>
                                    <span class=".company_details" id="about-header-2">Also by giving Finance and Business Consultancy, from “establishment to success”.
                                        We aim to build a network of Challenging, Smart, competent & Growing Associates and Independent Consultants who will be the upcoming face of our Company. Last but not the least, we aim to fulfill all the demands of our Family members consisting of our Managers, Employees, Distributors & Investors, Including all the Shareholders, giving them Best Returns for the dedication and time they devote for their Company “Always Sahi Solutions Private Limited”.</span>
                                    <button class="button-nav-items" onclick="aboutHeader()"><img src="image/arrow-right.png" class="read-more-image" id="read-more-about"><span class="button-nav-info" id="about-more-text">Read More...</span></button>
                                    </div>
                                </div>
                                <div class="service_sections company-item item-2">
                                    <div>
                                        <div>
                                        <h3>Vision</h3>
                                        <span class="company_details">To Build young entrepreneurs
                                            and a team of visionary leaders
                                            to achieve “a Package Escape”.</span><br>
                                        <!-- <a href="#"><button class="button-nav-items"><img src="image/arrow-right.png" class="read-more-image"><span class="button-nav-info">Read More...</span></button></a> -->
                                        </div>
                                        <div>
                                        <h3>Mission</h3>
                                        <span class="comapny_details">To Work Closely with our established NGO
                                            “Bondsocially Foundation”, providing Skilling &
                                            Financial Support to make our Country a
                                            SuperPower Nation by the year 2047,
                                            Celebrating 100 years of Independence, by its
                                            Navratnas which is Indeed “Always Sahi”.</span><br>
                                        <!-- <a href="#"><button class="button-nav-items"><img src="image/arrow-right.png" class="read-more-image"><span class="button-nav-info">Read More...</span></button></a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="service_sections company-item item-3">
                                    <div>
                                    <h2>Career</h2>
                                    <!-- <span class="comapny_details">Description</span><br> -->
                                    <a href="./comingsoon"><button class="button-nav-items"><img src="image/arrow-right.png" class="read-more-image"><span class="button-nav-info">Read More...</span></button></a>
                                    </div>
                                </div>
                            </div>
                        </span>
                        <span class="nav_items_section" id="service" onclick="main_service_option">Services
                            <div class="nav_first_options service_minor_fix">
                                <div class="service_sections service_1">
                                    <img src="image/Always Sahi Official.png" class="service_image">
                                </div>
                                <div class="service_sections service_2">
                                    <div class="service_container">
                                        <a class="nav_link" href="/Services"><div class="nav_first_option" onclick="service(1)" onmouseover="service(1)">Pacakage Escape Funnel
                                        <img src="image/Services/001-funnel.png" class="service_icon">
                                        </div>
                                        </a>
                                        <a class="nav_link" href="/MStake">
                                        <div class="nav_first_option" onclick="service(2)" onmouseover="service(2)">M-stake
                                            <img src="image/Services/002-stock-exchange-app.png" class="service_icon">
                                        </div>
                                        </a>
                                        <a class="nav_link" href="/workshops">
                                        <div class="nav_first_option" onclick="service(3)" onmouseover="service(3)">Workshop
                                            <img src="image/Services/003-presentation.png" class="service_icon">
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="service_sections service_3">
                                    <h5>Top Catagory</h5>
                                    <div class="top_cat" id="ser1">
                                        <div class="nav_service_top">Accounting and Finance</div>
                                        <div class="nav_service_top">Personality Developement</div>
                                        <div class="nav_service_top">Coding and Web Dev</div>
                                        <div class="nav_service_top">Digital Marketing</div>
                                    </div>
                                    <div class="top_cat" id="ser2">
                                        <div class="nav_service_top">Basics of Stock Market</div>
                                        <div class="nav_service_top">Fundamental Analysis</div>
                                        <div class="nav_service_top">Technical Analysis</div>
                                        <div class="nav_service_top">Virtual Stock Trading</div>
                                    </div>
                                    <div class="top_cat" id="ser3">
                                        <div class="nav_service_top">Startup Guide</div>
                                        <div class="nav_service_top">Digtal Marketing</div>
                                        <div class="nav_service_top">Time Management</div>
                                    </div>
                                </div>
                            </div>
                        </span>
                        <a href="/comingsoon"><span class="nav_items_section">CSR</span></a>
                        <a href="/index#join_us"><span class="nav_items_section">Join Us</span></a>
                        <a href="/comingsoon"><span class="nav_items_section">Public Notices</span></a>
                    </div>
                    <div class="nav_second">
                        <span onclick="login()" id="login">Login
                            <div class="login">
                                    <a href="#" class="option_link"><div class="options_login">Associate Login</div></a>
                                    <a href="#" class="option_link"><div class="options_login">IAC Login</div></a>
                            </div>
                        </span>
                        <a href="#footer"><span>Contact</span></a>
                    </div>
                </div>
                <div  id="ham_icon" onclick="headerSidelay()">
                    <div class="top"></div>
                    <div class="middle"></div>
                    <div class="bottom"></div>
                </div>
            </div>
            <div id="sidelay" class="Sidelay">
                <div class="first">
                    <a href="#about_us" onclick="navbarOptions(1)" id="wa">Company</a>
                        <div class="second_company" id="sr1">
                            <a href="#about_us" onclick="about_us()"><span>About Us</span></a>
                            <a href="/comingsoon"><span>Vision & Mission</span></a>
                            <a href="/comingsoon"><span>Career</span></a>
                        </div>
                    <a href="#workshop" id="ss" onclick="navbarOptions(2)">Services</a>
                        <div class="second_company" id="sr2">
                            <a href="/Services"><span>Pacakage Escape Funnel</span></a>
                            <a href="/MStake"><span>M-stake</span></a>
                            <a href="/workshops"><span>Workshop</span></a>
                        </div>
                    <a href="/comingsoon">CSR</a>
                    <a href="/index#join_us">Join Us</a>
                    <a href="/comingsoon">Public Notices</a>
                </div>
                <div class="second">
                    <a href="#" onclick="navbarOptions(3)">Login</a>
                    <div class="login-options" id="sr3">
                        <a href="#"><span>Associate Login</span></a>
                        <a href="#"><span>IAC Login</span></a>
                    </div>
                    <a href="#footer">Contact</a>
                </div>
            </div>
        </div>
    </header> -->
    <!-- Header Section Ends -->

  <!-- Package Escape Funnel Start-->
  <section class="main-content">
    <div class="left-content">
      <h2 class="left-content-heading">A Package Escape Funnel</h2>
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
      <img class="right-content-img" src="image/3as.svg" alt="" />
    </div>
  </section>
  <!-- Package Escape Funnel End-->

  <!-- Scope of achievement starts -->
  <section class="scope">
    <h1 class="scope-heading">Scope of achievements</h1>
    <div class="scope-content">
      <div>
        <input type="checkbox" id="scope-accounts1" class="scope-accounts" name="scope-accounts" />
        <label for="scope-accounts1" class="scope-inner-content"> Accounts & Finance</label>
        <div class="scope-details">
          <section class="scope-details-main">
            <div class="scope-details-left">
              <h1 class="scope-details-heading">Account & Finances</h1>
              <p class="scope-details-para">Doing business easy with smart and Organized backend, learning how to Manage
                Accounts & Maintaining Finances, ready to go with all the compliances.
              </p>
              <button class="accounts-btn">Enroll Now</button>
            </div>
            <div class="scope-details-right">
              <img class="account-details-img" src="image/3as.svg">
            </div>
          </section>
          <section class="covering">
            <h1 class="covering-heading">Covering</h1>
            <div class="services">
              <div class="tabs" id="target">
                <!-- first element start here -->
                <input type="radio" id="s1" class="slider" name="slider" />
                <input type="radio" id="s2" class="slider" name="slider" />
                <input type="radio" id="s3" class="slider" name="slider" checked />
                <input type="radio" id="s4" class="slider" name="slider" />
                <input type="radio" id="s5" class="slider" name="slider" />
                <div class="tab target"></div>
                <label for="s1" class="slider-label" id="slider1">
                  <div class="tab" id="t1" reference="target">
                    <div class="card ">
                      <div class="front" onclick="first(0)">
                        <h4 class="front-heading">Accounting & Basics</h4>
                        <button class="front-button">Know More</button>
                        <img class="front-img" src="image/Accounting.jpg">
                      </div>
                      <div class="back" onclick="second(0)">
                        <h3 class="back-heading">Covering</h3>
                        <div class="back-content">
                          <ul class="back-content-left">
                            <li class="back-items">Golden Rules</li>
                            <li class="back-items">Accounting Standards</li>
                            <li class="back-items">Book Keeping</li>
                            <li class="back-items">Basic Entries</li>
                            <li class="back-items">Understanding Management</li>
                          </ul>
                        </div>
                        <button class="back-button">Purchase Specific</button>
                      </div>
                    </div>
                  </div>
                </label>
                <!-- first element ends here -->
                <label for="s2" class="slider-label" id="slider2">
                  <div class="tab" id="t2" reference="target">
                    <div class="card">
                      <div class="front" onclick="first(1)">
                        <h4 class="front-heading">Tally Erp 9</h4>
                        <button class="front-button">Know More</button>
                        <img class="front-img" src="image/Tally.jpg">
                      </div>
                      <div class="back" onclick="second(1)">
                        <h3 class="back-heading">Covering</h3>
                        <div class="back-content">
                          <ul class="back-content-left">
                            <li class="back-items">Basics of Tally </li>
                            <li class="back-items">Invoicing In Tally </li>
                            <li class="back-items">Accounting in Tally </li>
                            <li class="back-items">TDS in Tally </li>
                            <li class="back-items">GST in Tally </li>
                            <li class="back-items">Reports in Tally </li>
                            <li class="back-items">Export & Importing Data </li>
                            <li class="back-items">Advance Tally Erp 9</li>
                            <li class="back-items">Features of Tally Prime </li>
                            <li class="back-items">Shortcuts in Tally </li>
                          </ul>
                        </div>
                        <button class="back-button">Purchase Specific</button>
                      </div>
                    </div>
                  </div>
                </label>
                <label for="s3" class="slider-label" id="slider3">
                  <div class="tab" id="t3">
                    <div class="card">
                      <div class="front" onclick="first(2)">
                        <h4 class="front-heading">Accounting in Excel & MS Office </h4>
                        <button class="front-button">Know More</button>
                        <img class="front-img" src="image/msOffice.jpg">
                      </div>
                      <div class="back" onclick="second(2)">
                        <h3 class="back-heading">Covering</h3>
                        <div class="back-content">
                          <ul class="back-content-left">
                            <li class="back-items">Excel Journal Entries </li>
                            <li class="back-items">Invoicing in Excel </li>
                            <li class="back-items">Advance Excel in Accounting </li>
                            <li class="back-items">Powerpoint </li>
                            <li class="back-items">Ms Word </li>
                            <li class="back-items">Outlook </li>
                            <li class="back-items">Drives </li>
                            <li class="back-items">Managing Work </li>
                            <li class="back-items">Database Management </li>
                          </ul>
                        </div>
                        <button class="back-button">Purchase Specific</button>
                      </div>
                    </div>
                  </div>
                </label>
                <label for="s4" class="slider-label" id="slider4">
                  <div class="tab" id="t4">
                    <div class="card ">
                      <div class="front" onclick="first(3)">
                        <h4 class="front-heading">Taxation (TDS, ITR, GST) </h4>
                        <button class="front-button">Know More</button>
                        <img class="front-img" src="image/Taxation.jpg">
                      </div>
                      <div class="back" onclick="second(3)">
                        <h3 class="back-heading">Covering</h3>
                        <div class="back-content">
                          <ul class="back-content-left">
                            <li class="back-items">Direct Taxes </li>
                            <li class="back-items">Types of TDS </li>
                            <li class="back-items">Payment of TDS</li>
                            <li class="back-items">Filing ITR </li>
                            <li class="back-items">Deductions in ITR </li>
                            <li class="back-items">TDS Forms </li>
                            <!-- <li class="back-items">Basics of GST </li> -->
                            <li class="back-items">GST Registration</li>
                            <li class="back-items">GST Sales FIling </li>
                            <li class="back-items">GST Monthly Report FIling</li>
                            <li class="back-items">GST Annual Return </li>
                            <li class="back-items">GST Clarifications </li>
                          </ul>
                        </div>
                        <button class="back-button">Purchase Specific</button>
                      </div>
                    </div>
                  </div>
                </label>
                <label for="s5" class="slider-label" id="slider5">
                  <div class="tab" id="t5">
                    <div class="card ">
                      <div class="front" onclick="first(4)">
                        <h4 class="front-heading">Compliances (TAN, PAN, Shop Act) </h4>
                        <button class="front-button">Know More</button>
                        <img class="front-img" src="image/Compliances.jpg">
                      </div>
                      <div class="back" onclick="second(4)">
                        <h3 class="back-heading">Covering</h3>
                        <div class="back-content">
                          <ul class="back-content-left">
                            <li class="back-items">Apply for PAN </li>
                            <li class="back-items">PAN Details </li>
                            <li class="back-items">Apply for TAN </li>
                            <li class="back-items">Shop Act Liscence </li>
                            <li class="back-items">Register a Sole Propriotership</li>
                          </ul>
                        </div>
                        <button class="back-button">Purchase Specific</button>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div>
        <input type="checkbox" id="scope-accounts2" class="scope-accounts" name="scope-accounts" />
        <label for="scope-accounts2" class="scope-inner-content">Personality Development</label>
        <div class="scope-details">
          <section class="scope-details-main">
            <div class="scope-details-left">
              <h1 class="scope-details-heading">Personality Development</h1>
              <p class="scope-details-para">Individuals Personality plays a very Important Role, in presenting
                himself/herself in the market. Be is Job Sector, or Freelancing & Business Sector. Personality gives an
                Individual its own value, gain your Value by Grooming your Personality with Always Sahi.
              </p>
              <button class="accounts-btn">Enroll Now</button>
            </div>
            <div class="scope-details-right">
              <img class="personality-img" src="image/PersonalityDevelopment.jpg">
            </div>
          </section>
          <section class="covering">
            <h1 class="covering-heading">Covering</h1>
            <div class="services">
              <div class="tabs" id="target">
                <!-- first element start here -->
                <input type="radio" id="s6" class="slider" name="slider" />
                <input type="radio" id="s7" class="slider" name="slider" />
                <input type="radio" id="s8" class="slider" name="slider" checked />
                <input type="radio" id="s9" class="slider" name="slider" />
                <input type="radio" id="s10" class="slider" name="slider" />
                <div class="tab target"></div>
                <label for="s6" class="slider-label" id="slider6">
                  <div class="tab" id="t6" reference="target">
                    <div class="card ">
                      <div class="front" onclick="third(5)">
                        <h4 class="front-heading">Preparing for an Interview </h4>
                        <button class="front-button">Know More</button>
                        <img class="front-img" src="image/Interview.jpg">
                      </div>
                      <div class="back" onclick="fourth(5)">
                        <h3 class="back-heading">Covering</h3>
                        <div class="back-content">
                          <ul class="back-content-left">
                            <li class="back-items">Preparing a Resume </li>
                            <li class="back-items">Pre Requsits for an Interview </li>
                            <li class="back-items">Companies Research </li>
                            <li class="back-items">Presentation </li>
                            <li class="back-items">Body Language </li>
                            <li class="back-items">Top Interview Questions </li>
                            <li class="back-items">Self Analysis </li>
                          </ul>
                        </div>
                        <button class="back-button">Purchase Specific</button>
                      </div>
                    </div>
                  </div>
                </label>
                <!-- first element ends here -->
                <label for="s7" class="slider-label" id="slider7">
                  <div class="tab" id="t7" reference="target">
                    <div class="card">
                      <div class="front" onclick="third(6)">
                        <h4 class="front-heading">Speech & Extempore </h4>
                        <button class="front-button">Know More</button>
                        <img class="front-img" src="image/Speech.jpg">
                      </div>
                      <div class="back" onclick="fourth(6)">
                        <h3 class="back-heading">Covering</h3>
                        <div class="back-content">
                          <ul class="back-content-left">
                            <li class="back-items">Research </li>
                            <li class="back-items">Content Making </li>
                            <li class="back-items">Presentation skills </li>
                          </ul>
                        </div>
                        <button class="back-button">Purchase Specific</button>
                      </div>
                    </div>
                  </div>
                </label>
                <label for="s8" class="slider-label" id="slider8">
                  <div class="tab" id="t8">
                    <div class="card">
                      <div class="front" onclick="third(7)">
                        <h4 class="front-heading">Group Discussions </h4>
                        <button class="front-button">Know More</button>
                        <img class="front-img" src="image/GrpDiscussion.jpg">
                      </div>
                      <div class="back" onclick="fourth(7)">
                        <h3 class="back-heading">Covering</h3>
                        <div class="back-content">
                          <ul class="back-content-left">
                            <li class="back-items">Top Skills Required for Group Discussion </li>
                            <li class="back-items">How to lead Group Discussion </li>
                            <li class="back-items">How to manage Team in GD </li>
                            <li class="back-items">How to remain in the Limelight of GD </li>
                          </ul>
                        </div>
                        <button class="back-button">Purchase Specific</button>
                      </div>
                    </div>
                  </div>
                </label>
                <label for="s9" class="slider-label" id="slider9">
                  <div class="tab" id="t9">
                    <div class="card ">
                      <div class="front" onclick="third(8)">
                        <h4 class="front-heading">High Performing Individual </h4>
                        <button class="front-button">Know More</button>
                        <img class="front-img" src="image/Performance.jpg">
                      </div>
                      <div class="back" onclick="fourth(8)">
                        <h3 class="back-heading">Covering</h3>
                        <div class="back-content">
                          <ul class="back-content-left">
                            <li class="back-items">Make a Long term Vision with the Company </li>
                            <li class="back-items">Research well about the Company </li>
                            <li class="back-items">Make a Friendly approach </li>
                            <li class="back-items">Dont fake yourself </li>
                            <li class="back-items">Dont Over react </li>
                          </ul>
                        </div>
                        <button class="back-button">Perchase Specific</button>
                      </div>
                    </div>
                  </div>
                </label>
                <label for="s10" class="slider-label" id="slider10">
                  <div class="tab" id="t10">
                    <div class="card ">
                      <div class="front" onclick="third(9)">
                        <h4 class="front-heading">Time Management </h4>
                        <button class="front-button">Know More</button>
                        <img class="front-img" src="image/TimeManagement.jpg">
                      </div>
                      <div class="back" onclick="fourth(9)">
                        <h3 class="back-heading">Covering</h3>
                        <div class="back-content">
                          <ul class="back-content-left">
                            <li class="back-items">Mastering Time Calculating time Wasgate </li>
                            <li class="back-items">Calculating time Wasgate </li>
                            <li class="back-items">Time Allotment Formula </li>
                            <li class="back-items">Proiority List </li>
                            <li class="back-items">Time is Money </li>
                          </ul>
                        </div>
                        <button class="back-button">Purchase Specific</button>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
            </div>
          </section>
        </div>
      </div>
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
    <div class="footer container-fluid" id="footer">
        <div class="footer-top row">
            <div class=" col-xs-12 col-sm-6 col-lg-3">
                <div class="feed-widget">
                                <h2 class="f-head">OUR SERVICES</h2>
                                <div class="footercarosule">
                                    <div class="item f-fade">
                                        <p>A series of training program designed, after years of experience and
                                            research, to create a pathway for every individual to achieve "A Package
                                            Escape".
                                        </p>
                                        <div class="icon"><i aria-hidden="true"><img src="image/3as.svg"
                                                    alt="logo" /></i>
                                            <h4><a href="Services">Package Escape Funnel</a></h4>

                                        </div>
                                    </div>
                                    <div class="item f-fade">
                                        <p>An Initiative introduced to, bring in more Investors as Well as Traders,
                                            into the world of Securities market. Providing them the Financial
                                            Freedom, and Future Planning. 
                                        </p>
                                        <div class="icon"><i aria-hidden="true"><img src="image/4as.svg"
                                                    alt="logo" /></i>
                                            <h4><a href="MStake">MStake Funnel</a></h4>

                                        </div>
                                    </div>
                                    <div class="item f-fade">
                                        <p>Skill up yourself, with our Short workshops. Short in tenure, Large in 
                                            Impact. To develop & Nourish skills in your field, we have designed quality
                                             based sessions, delivered by Experts.
                                        </p>
                                        <div class="icon"><i aria-hidden="true"><img src="image/5as.svg"
                                                    alt="logo" /></i>
                                            <h4><a href="workshops">Workshop</a></h4>

                                        </div>
                                    </div>
                                </div><br>
                                <div style="text-align:center">
                                    <span class="f-dot"></span> 
                                    <span class="f-dot"></span> 
                                    <span class="f-dot"></span> 
                                </div>
                            </div>
            </div>
            <div class=" col-xs-12 col-sm-6 col-lg-3">
                <div class="feed-widget">
                                <h2 class="f-head">JOIN US</h2>
                                <div class="footercarosule">
                                    <div class="f-item ff-fade">
                                        
                                        <div class="icon"><i aria-hidden="true"><img src="image/join us/associate.jpg"
                                                    alt="logo" /></i>
                                            <a href="Services">Associate With Us</a>

                                        </div>
                                    </div>
                                    <div class="f-item ff-fade">
                                        
                                        <div class="icon"><i aria-hidden="true"><img src="image/join us/iasc.jpg"
                                                    alt="logo" /></i>
                                            <a href="MStake">Be Our IASC</a>

                                        </div>
                                    </div>
                                    <div class="f-item ff-fade">
                                        
                                        <div class="icon"><i aria-hidden="true"><img src="image/join us/intern.jpg"
                                                    alt="logo" /></i>
                                          <a href="workshops">Career With AS</a>

                                        </div>
                                    </div>
                                </div><br>
                                <div style="text-align:center">
                                    <span class="ff-dot"></span> 
                                    <span class="ff-dot"></span> 
                                    <span class="ff-dot"></span> 
                                </div>
                            </div>
            </div>
            <div class="f-team col-xs-12 col-sm-12 col-lg-6">
                <div class="f-head ">OUR TEAM</div>
                <div class="row">
                    <div class="ft-img col-xs-12 col-sm-6 col-lg-4 thumbnail">
                        <center><img src="image/team/atharv.png" alt="Atharv">
                            <p>Atharv Sawant</p>
                            <p>Founder & Ceo</p>
                        </center>
                    </div>
                    </center>
                    <div class="ft-img col-xs-12 col-sm-6 col-lg-4 thumbnail">
                        <center><img src="image/team/mandy.png" alt="Mandy">
                            <p>Mandeep Dalavi</p>
                            <p>Co founder & Director</p>
                        </center>
                    </div>
                    <div class="ft-img col-xs-12 col-sm-6 col-lg-4 thumbnail">
                        <center><img src="image/team/sanika.png" alt="sanika">
                            <p>Sanika Dewoolkar</p>
                            <p>Chief Marketing Head</p>
                        </center>
                    </div>
                    <div class="ft-img col-xs-12 col-sm-6 col-lg-4 thumbnail">
                        <center><img src="image/team/akhil.png" alt="Akhil">
                            <p>Akhil A Nair</p>
                            <p>Chief Technical Head</p>
                        </center>
                    </div>
                    <div class="ft-img col-xs-12 col-sm-6 col-lg-4 thumbnail">
                        <center><img src="image/team/anjali.png" alt="Anjali">
                            <p>Anjali Kalange</p>
                            <p>Chief Training Head</p>
                        </center>
                    </div>
                    <div class="ft-img col-xs-12 col-sm-6 col-lg-4 thumbnail">
                        <center><img src="image/team/sanket.png" alt="Sanket">
                            <p>Sanket Shinde</p>
                            <p>Chief Associates Head</p>
                        </center>
                    </div>
                </div>


            </div>
        </div>
        <div class="footer-bottom row">
            <div class="f-com col-xs-12 col-md-6 col-lg-3">
                <div class="f-head">COMPANY</div>
                <a href="#"><p>About Us</p></a>
                <a href="#"><p>Services</p></a>
                <a href="#"><p>Join Us</p></a>
            </div>
            <div class="f-add col-xs-12 col-md-6 col-lg-3">
                <div class="f-head">ADDRESS</div>
                <p><span>Address: </span>A-702,Aurum Vrundavan Apartment,
                     Dighi, Pune, Maharashtra</p>
                <p><span>Pincode: </span>411015</p>
                
            </div>
            <div class="f-con col-xs-12 col-md-6 col-lg-3">
                <div class="f-head">CONTACT</div>
                <a href="mailto:hello@alwayssahi.com"><span>Mail: </span><p>hello@alwayssahi.com</p></a>
                <a href="#"><span>Phone:</span><p>+91 8857086790</p></a>
                
            </div>
            <div class="f-social col-xs-12 col-md-6 col-lg-3">
                <div class="f-head">SOCIALS</div>
                <div class="row">
                    <div class="ft-icon col-xs-3">
                        <center><a href="https://www.instagram.com/alwayssahi"><img src="image/icon/007-instagram-1.png"
                                    alt="instagram"></a></center>
                    </div>
                    <div class="ft-icon col-xs-3">
                        <center><a
                                href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2FAlways-Sahi-Solutions-Private-Limited-100805488788703"><img
                                    src="image/icon/002-facebook-1.png" alt="facebook"></a></center>
                    </div>
                    <div class="ft-icon col-xs-3">
                        <center><a
                                href="https://www.linkedin.com/company/always-sahi-solutions-private-limited/mycompany/?viewAsMember=true"><img
                                    src="image/icon/002-linkedin-1.png" alt="linkedin"></a></center>
                    </div>
                    <div class="ft-icon col-xs-3">
                        <center><a href="https://t.me/joinalwayssahi"><img src="image/icon/telegram (1).png"
                                    alt="telegram"></a></center>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="ft-head row">
                <div class="col-md-7 leftT">
                    <div>@2021 Always Sahi Solutions Pvt Ltd: All Rights Reserved |
                        ISO 9001:2015 Certified & MCA Registered
                    </div>
                </div>
                <div class="ft-head-right col-md-5">
                    <div class="row justify-content-center">
                        <div><a href="Terms" class="Terms">Terms of Use </a>|&nbsp</div>
                        <div ><a href="Privacy" class="Privacy">Privacy Policy </a>|&nbsp</div>
                        <div ><a href="Refund" class="Refund">Refund Policy </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>