<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
        <!-- font-family: 'Open Sans', sans-serif;   -    font-family: 'Roboto', sans-serif; -->
        <!-- GET YER DANG HTML TAGS DONE -->

</head>
<body>
    <div class="mainbody">
            <!-- TO INCLUDE NAVBAR, TOP IMAGE -->
            <img class="img-responsive mx-auto d-block" src="../assets/logo-walker.png" alt="top logo" style="padding: 10px; width: 80%;">
            <nav class="navbar navbar-expand-sm sticky-top navbar-dark">
                <a class="navbar-brand" href="#">
                    <img src="https://wcc.warren.k12.in.us/assets/apptegy_cms/themes/msdwarrenin/logo-ddb5d3afb469a9cb82dcda7e2bde7147.png" alt="Logo" style="width:40px;">
                </a>
                <button class="navbar-toggler btn-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Programs</a>
                    </li>
                </ul>
                </div>
            </nav>
        <h1><?php echo $program_title ?></h1>
        <!-- MAIN VIDEO/JUMBOTRON BELOW -->
        <div id="video" class="container-fluid">
            <video controls autoplay>
                <source src="<?php echo $videoId; ?>" type="video/mp4">
            Your browser does not support the video tag.
            </video>
        </div>
        <div id="news" class="container-fluid backgroundDark">
            <!-- FOR MAJOR CLASS NEWS -->
            <h3>Class News</h3>
            <p><?php echo $classNews ?>
            </p>
        </div>
        <section>
            <!-- CLASS INFORMATION SECTION. WILL ADD SECTION FOR MAX CLASS# -->
            <div id="classinfo">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#class1"><?php echo $classOneTitle ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#class2"><?php echo $classTwoTitle ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#class3"><?php echo $classThreeTitle ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#class4"><?php echo $classFourTitle ?></a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- BLAKE: IF THEY DON'T HAVE ANY PREREQUISITES, MAKE AN IF-STATEMENT TO REMOVE THE SPAN TAG -->
            <div id="class1" class="tab-pane container active">
                <h3 class="class-title">
                    <?php echo $classOneTitle ?>
                </h3>
                <p class="class-info">
                    <span><?php echo $classOneInfo ?></span>
                </p>
                <p class="courseDetails">
                    <span>Available to: <!-- GRADE TAKEN --></span><br>
                    <span>Taught By: <!-- TEACHER --></span><br>
                    <span>Requires: <!-- PREREQUISITES--></span>
                </p>
            </div>
            <div id="class2" class="tab-pane container fade">
            <h3 class="class-title">
                <?php echo $classTwoTitle ?>
            </h3>
                <p class="class-info">
                    <span><?php echo $classTwoInfo ?></span>
                </p>
                <p class="class-info courseDetails">
                    <span>Available to: <!-- GRADE TAKEN --></span><br>
                    <span>Taught By: <!-- TEACHER --></span><br>
                    <span>Requires: <!-- PREREQUISITES--></span>
                </p>
            </div>
            <div id="class3" class="tab-pane container fade">
            <h3 class="class-title">
                <?php echo $classThreeTitle ?>
            </h3>
                <p class="class-info">
                    <span><?php echo $classThreeInfo ?></span>
                </p>
                <p class="class-info courseDetails">
                    <span>Available to: <!-- GRADE TAKEN --></span><br>
                    <span>Taught By: <!-- TEACHER --></span><br>
                    <span>Requires: <!-- PREREQUISITES--></span>
                </p>
            </div>
            <div id="class4" class="tab-pane container fade">
            <h3 class="class-title">
                <?php echo $classFourTitle ?>
            </h3>
                <p class="class-info">
                    <span><?php echo $classFourInfo ?></span>
                </p>
                <p class="class-info courseDetails">
                    <span>Available to: <!-- GRADE TAKEN --></span><br>
                    <span>Taught By: <!-- TEACHER --></span><br>
                    <span>Requires: <!-- PREREQUISITES--></span>
                </p>
            </div>
            </div>
            </div>
        </section>
        <section id="gallery" class="d-inline-flex flex-wrap">
            <!-- CODING OF BELOW MAY BE SUBJECT TO CHANGE TO GRID SYSTEM. JUST KNOW INFO = IMG TAGS -->
            <?php for($x=0; $x<count($galleryImgs);$x++){?>
            <img class="img-fluid flex-fill" src=<?php echo $galleryImgs[$x] ?> alt="placeholder" style="width: 325px;">
            <?php }?> 
        </section>
        <section>
            <!-- AFFILIATES SECTION TO BE IN TAB DESIGN. IF NOT THERE, HAVE DIV NOT DISPLAY -->
            <div id="affiliates">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">Certifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2">Dual Credit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu3">Internships</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                    <h3>Certifications</h3>
                    <?php if(!empty($certifications)){?>
                        <span><!-- INSTITUTION IMAGE --></span>
                        <h5><!-- INSTITUTION NAME --></h5>
                        <p class="opportunity">
                            <!-- CERTIFICATION DESCRIPTION -->
                            <?php echo $certifications?>
                        </p>
                    <?php }?>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <h3>Partners</h3>
                    <?php if(!empty($partners)){?>
                        <span><!-- INSTITUTION IMAGE --></span>
                        <h5><!-- INSTITUTION NAME --></h5>
                        <p class="opportunity">
                            <?php echo $partners?>
                        </p>
                    <?php }?>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                    <h3>Dual Credit</h3>
                    <?php if(!empty($dualCredit)){?>
                        <span><!-- COLLEGE LOGO --></span>
                        <h5><!-- COLLEGE NAME --></h5>
                        <p class="opportunity">
                            <span><!-- CREDITS AND CREDIT HOURS --></span>
                            <span><!-- CREDIT DETAILS -->
                                <?php echo $dualCredit?>
                            </span>
                        </p>
                    <?php }?>
                </div>
                <div id="menu3" class="container tab-pane fade"><br>
                    <h3>Internships</h3>
                    <?php if(!empty($internships)){?>
                        <span><!-- INSTITUTION IMAGE --></span>
                        <h5><!-- INSTITUTION NAME --></h5>
                        <p class="opportunity">
                            <!-- INTERNSHIP DESCRIPTION -->
                            <?php echo $internships?>
                        </p>
                    <?php }?>
                </div>
            </div>
            </div>
        </section>
        <section id="testimonies" class="container-fluid">
            <!-- STUDENT TESTIMONIES. NOTE: TO FOR-LOOP THIS, SPLIT THEM INTO TESTIMONY ODD AND TESTIMONY EVEN FOR STYLING. -->
            <?php //for($x=0; $x<count($testimonies);$x++){?>
            <div class="testimony testimonyOdd">
                <?php if(!empty($testimonies[0])){?>
                <p class="testimony"><span><?php echo $testimonies[0]?></span> -- <span><?php echo $testimoniesName[0]?></span></p>
                <?php }?>
            </div>
            <div class="testimony testimonyEven">
            <?php if(!empty($testimonies[1])){?>
                <p class="testimony"><?php echo $testimonies[1]?> -- <span><?php echo $testimoniesName[1]?></span></p>
                <?php }?>
            </div>
            <div class="testimony testimonyOdd">
            <?php if(!empty($testimonies[2])){?>
                <p class="testimony"><?php echo $testimonies[2]?> -- <span><?php echo $testimoniesName[2]?></span></p>
                <?php }?>
            </div>
            <div class="testimony testimonyEven">
            <?php if(!empty($testimonies[3])){?>
                <p class="testimony"><?php echo $testimonies[3]?> -- <span><?php echo $testimoniesName[3]?></span></p>
                <?php }?>
            </div>
            <div class="testimony testimonyOdd">
            <?php if(!empty($testimonies[4])){?>
                <p class="testimony"><?php echo $testimonies[4]?> -- <span><?php echo $testimoniesName[4]?></span></p>
                <?php }?>
            </div>
        </section>
        <section id="other">
            <!-- SECTION FOR OTHER MEDIA. INDIVIDUAL SPOTS FOR IMAGES, THEN TEXT FOR TEXT AND LINKS -->
            <div id="extraimage" class="d-inline-flex flex-wrap justify-content-center">
            <?php for($x=0; $x<count($extraImgs);$x++){?>
                <img class="img-fluid flex-fill align-self-center" src=<?php echo $extraImgs[$x] ?> alt="placeholder">
            <?php }?>    
            </div>
        </section>
        <section id="footer" class="container-fluid">
            <div class="row">
                <div class="col-sm-9">
                <p>Walker Career Center<br>
                9651 EAST 21ST STREET<br>
                Indianapolis, IN 46229<br><br>

                Phone: 317.532.6150<br>
                Fax: 317-532-6199</p>
                </div>
                <div class="col-sm-2">
                <a href="https://www.facebook.com/WalkerCareerCenter.is.WCC/"><img src="../assets/icons8-facebook-50.png" alt="facebook icon" class="footerImage"></a>
                <a href="https://twitter.com/wcc_warren"><img src="../assets/icons8-twitter-50.png" alt="twitter icon" class="footerImage"></a>
                </div>
            </div>
        </section>
    </div>
</body>
</html>