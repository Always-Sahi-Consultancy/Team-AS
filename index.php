<!DOCTYPE html>
<html lang="en">
<head>
    <title>Always Sahi Solution</title>
    <meta http-equiv="Content-Type" content="text/html charset=utf-8">
    <link rel="shortcut icon " type="image/ico" href="./favicon.ico">
    <meta name="Description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.js" defer></script>
    <script src="js/bootstrap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" defer></script>
    <link herf="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/style2Header.css" rel="stylesheet">
    <link href="css/style2Footer.css" rel="stylesheet">
    <link href="css/style2-res.css" rel="stylesheet">
    <link href="css/style2Color.css" rel="stylesheet">
    <!-- <script src="js/workshops.js" defer></script> -->
    <link href="css/workshoptrial.css" rel="stylesheet">
    <script src="js/site.js" defer>
    </script>
</head>
<body>
    <?php 
        include 'header.php';
    ?>
    <div class="on-demand">
        <div class="box-size-left intro-text" id="box-size-new">
            <h1 class="as-title">Always Sahi</h1>
            <p class="box-size-desc" id="box-size-desc">
                Building Young Entrepreneurs & a Team of Visionary Leaders achieving "A Package Escape"
            </p>
            <a href="services.php">
                <button class="intro-button">Join our "Package Escape Funnel"</button>
            </a>
        </div>
        <div class="box-size box-size-right" id="box-size">
            <img src="image/1as.svg" alt="main" >
        </div>
    </div>
    <div class="about" id="about_us">
        <h2 class="as-title">About Us</h2>
        <div class="about-info">
            <div class="about-sections about-text" id="about-text">
                <div id="about-text-1">Always Sahi Solutions aims to build Individuals as well as corporate
                    solutions, where you
                    can achieve “a Package Escape”, to build young entrepreneurs with our Individuals
                    Training Modules, and Workshops. Also by giving Finance and Business Consultancy, from
                    “establishment to success”.</div>
                <div id="about-text-2">We aim to build a network of Challenging, Smart, competent & Growing
                    Associates and
                    Independent Consultants who will be the upcoming face of our Company. Last but not the
                    least, we aim to fulfill all the demands of our Family members consisting of our Managers,
                    Employees, Distributors & Investors, Including all the Shareholders, giving them Best
                    Returns for the dedication and time they devote for their Company “Always Sahi Solutions
                    Private Limited”.
                </div>
                <center><button onclick="aboutUs()"><img src="image/arrow-down.png" id="about-arrow" alt="arrow"></button>
                </center>
            </div>
            <div class="about-sections" id="about-image">
                <img src="image/2as.png" class="about-image" alt="about us">
            </div>
        </div>
    </div>
    <!-- <div>
        <div class="workshop" id="workshop">
            <h2 class="as-title">Our Services</h2>
            <div class="workshop-section-containers">
                <center>
                    <div class="workshop-container" onclick="workshop(1)" id="section-1">
                        <div class="image-container"><img src="image/3as.png" class="workshop-image" alt="package escape funnel"></div>
                        <div class="workshop-text" id="writeup-1">A series of training program designed, after years of
                            experience and
                            research, to create a pathway for every individual to achieve "A Package
                            Escape" which indeed is our Motto.
                            Consisting of Modules and Sessions from various fields, based on
                            choice and preference of an Individual.</div>
                        <div class="workshop-titles" id="t1">Package Escape Funnel</div>
                    </div>
                    <div class="workshop-container" onclick="workshop(2)" id="section-2">
                        <div class="image-container"><img src="image/4as.png" class="workshop-image" alt="mstake"></div>
                        <div class="workshop-text" id="writeup-2">An Initiative introduced to, bring in more Investors
                            as Well as Traders,
                            into the world of Securities market. Providing them the Financial
                            Freedom, and Future Planning. With Ample knowledge and Practical
                            Exposure, Through our Training Program, and Practical Investment
                            Channel.</div>
                        <div class="workshop-titles" id="t2">Mstake Funnel</div>
                    </div>
                    <div class="workshop-container" onclick="workshop(3)" id="section-3">
                        <div class="image-container"><img src="image/5as.png" class="workshop-image" alt="workshops"></div>
                        <div class="workshop-text" id="writeup-3">Skill up yourself, with our Short workshops. Short in
                            tenure, Large in Impact.
                            To develop & Nourish skills in your field, we have designed quality based sessions,
                            delivered by Experts.
                        </div>
                        <div class="workshop-titles" id="t3">Workshops</div>
                    </div>
                    <center>
            </div>
        </div>
    </div> -->
    <div class="workshops-index">
        <h2 class="as-title">Our Services</h2>
        <div class="workshoplist">
            <div class="workshop" id="ws-1">
                <div class="imgBx">
                    <img src="image/3as.png" class="ws-img" alt="PackageEscapeFunnel">
                </div>
                <div class="description" id="details-1">
                    <h3>Package Escape Funnel </h3>
                    <p class="workshop-para" id="workshop-para1">A series of training program designed, after years of experience and research, to create a pathway for every individual to achieve "A Package Escape" which indeed is our Motto. Consisting of Modules and Sessions from various fields, based on choice and preference of an ndividual.</p>
                </div>
            </div>
            <div class="workshop" id="ws-2">
                <div class="imgBx">
                    <img src="image/4as.png" class="ws-img" alt="PackageEscapeFunnel">
                </div>
                <div class="description" id="details-2">
                    <h3>MStake</h3>
                    <p class="workshop-para" id="workshop-para2">An Initiative introduced to, bring in more Investors as Well as Traders, into the world of Securities market. Providing them the Financial Freedom, and Future Planning. With Ample knowledge and Practical Exposure, Through our Training Program, and Practical Investment Channel.</p>
                </div>
            </div>
            <div class="workshop" id="ws-3">
                <div class="imgBx">
                    <img src="image/5as.png" class="ws-img" alt="PackageEscapeFunnel">
                </div>
                <div class="description" id="details-3">
                    <h3>Workshops</h3>
                    <p class="workshop-para" id="workshop-para3">Skill up yourself, with our Short workshops. Short in tenure, Large in Impact. To develop & Nourish skills in your field, we have designed quality based sessions, delivered by Experts.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="achievement">
        <h2 class="as-title">Achievements</h2>
        <div class="stats" id="achievement">
            <div class="stat1">
                <img src="image/icon/icons8-training-100.png" alt="trained individuals'"></img>
                <div class="stat" id="stat-box1">35+</div>
                <p class="stat_name">Trained Individuals</p>
            </div>
            <div class="stat2">
                <img src="image/icon/icons8-mission-100.png" alt="training hours"></img>
                <div class="stat" id="stat-box2">350+</div>
                <h3 class="stat_name">Training Hours</h3>
            </div>
            <div class="stat3">
                <img src="image/icon/icons8-leader-100.png" alt="entrepreneurs created" />
                <div class="stat" id="stat-box3">21+</div>
                <h3 class="stat_name">Entrepreneurs Created</h3>
            </div>
            <div class="stat4">
                <img src="image/icon/icons8-curriculum-100.png" alt="career sessions"></img>
                <div class="stat" id="stat-box4">15+</div>
                <h3 class="stat_name">Career Sessions </h3>
            </div>
        </div>
    </section>
    <center>
        <h1 class="as-title">JOIN US</h1>
    </center>
    <div class="container join_us" id="join_us">
        <div class="row">
            <div class="col-md-12 col-lg-4 col-sm-12">
                <!-- <a href="#"> -->
                <div class="card">
                    <div class="front">
                        <div class="deto">
                            <center><span>Associates Model</span></center>
                            <img src="image/join us/associate.jpg" alt="Associate Model" />
                        </div>
                    </div>
                    <div class="back">
                        <div class="details">
                            <h2><br><span>"If a Country has to grow, Direct Selling is a Good Option", stated by
                                    great economists, we at Always Sahi aim to build a pathway towards
                                    individuals freedom, and independence both Professionally & Personally,
                                    by generating more and more associates.</span></h2>
                        </div>
                    </div>
                </div>
                <!-- </a> -->

            </div>
            <div class="col-md-12 col-lg-4 col-sm-12">
                <!-- <a href="#"> -->
                <div class="card">
                    <div class="front">
                        <div class="deto">
                            <center><span>Internships</span></center>
                            <img src="image/join us/intern.jpg" alt="Internship" />
                        </div>
                    </div>
                    <div class="back">
                        <div class="details">
                            <h2><br><span>Groom your profile and Build your resume, by Joining our Internship Programs.
                                    Choose a Field of your Choice & Explore "A Package Escape"</span></h2>

                        </div>
                    </div>
                </div>
                <!-- </a> -->

            </div>
            <div class="col-md-12 col-lg-4 col-sm-12">
                <!-- <a href="#"> -->
                <div class="card">
                    <div class="front">
                        <div class="deto">
                            <center><span>Independent Always Sahi Consultants</span></center>
                            <img src="image/join us/iasc.jpg" alt="Consultants" />
                        </div>
                    </div>
                    <div class="back">
                        <div class="details">
                            <h2><br><span>This is Post step, after our "Package Escape Funnel & Mstake Funnel",
                                    where an Individual gets a Chance to provide consultancies at his/her
                                    level to generate an Independent business opportunity.
                                </span></h2>

                        </div>
                    </div>
                </div>
                <!-- </a> -->

            </div>
        </div>
    </div>
    <br><br>
    <?php
        include 'footer.php';
    ?>
</body>
</html>