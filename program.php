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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&family=Duru+Sans&display=swap" rel="stylesheet">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#">Programs</a>
                        <div class="dropdown-menu">
                        <table>
                        <tr>
                          <td><a class="dropdown-item" href="../programs/accounting.php">Accounting</a></td>
                          <td><a class="dropdown-item" href="../programs/architechture.php">Architecture</a></td> </tr><tr>
                          <td> <a class="dropdown-item" href="../programs/autocollision.php">Auto Collision</a></td>
                          <td> <a class="dropdown-item" href="../programs/banking.php">Banking</a></td> </tr><tr>
                          <td> <a class="dropdown-item" href="../programs/biomed.php">Biomed</a></td>
                          <td> <a class="dropdown-item" href="../programs/commPhotograpy.php">Commercial Photography</a></td> </tr><tr>
                          <td> <a class="dropdown-item" href="../programs/computerscience.php">Computer Science</a></td>
                          <td> <a class="dropdown-item" href="../programs/construction.php">Construction Trades</a></td> </tr><tr>
                          <td> <a class="dropdown-item" href="../programs/cosmetology.php">Cosmetology</a></td>
                          <td> <a class="dropdown-item" href="../programs/criminalJustice.php">Criminal Justice</a></td> </tr><tr>
                          <td><a class="dropdown-item" href="../programs/culinary.php">Culinary</a></td>
                          <td><a class="dropdown-item" href="../programs/dentalAssitant.php">Dental Careers</a></td> </tr><tr>
                          <td> <a class="dropdown-item" href="../programs/earlyChildEd.php">Early Childhood Education</a></td>
                          <td><a class="dropdown-item" href="../programs/educationCareers.php">Education Careers</a></td>  </tr><tr>
                          <td><a class="dropdown-item" href="../programs/electronics.php">Electronics</a></td>
                        <td> <a class="dropdown-item" href="../programs/engineering.php">Engineering</a></td>  </tr><tr>
                        <td> <a class="dropdown-item" href="../programs/entrepreneurship.php">Entrepreneurship</a></td>
                        <td> <a class="dropdown-item" href="../programs/fashionTextDesign.php">Fashion, Textiles, & Design</a></td>  </tr><tr>
                        <td> <a class="dropdown-item" href="../programs/graphicDesign.php">Graphic Design</a></td>
                        <td> <a class="dropdown-item" href="../programs/humanSocServices.php">Human & Social Services</a></td>  </tr><tr>
                        <td> <a class="dropdown-item" href="../programs/marketing.php">Marketing</a></td>
                        <td> <a class="dropdown-item" href="../programs/networking.php">Networking/IT Support</a></td>  </tr><tr>
                          <td> <a class="dropdown-item" href="../programs/nursing.php">Nursing</a></td>
                          <td> <a class="dropdown-item" href="../programs/officeManage.php">Office Management</a></td>  </tr><tr>
                          <td> <a class="dropdown-item" href="../programs/pharmacy.php">Pharmacy</a></td>
                          <td><a class="dropdown-item" href="../programs/precisionMachining.php">Precision Machining</a></td>  </tr><tr>
                          <td><a class="dropdown-item" href="../programs/radioProduction.php">Radio Production</a></td>
                          <td> <a class="dropdown-item" href="../programs/tvBroadcasting.php">TV Broadcasting</a></td>  </tr><tr>
                          <td> <a class="dropdown-item" href="../programs/welding.php">Welding</a></td>
                          <td> <a class="dropdown-item" href="../programs/workBasedLearn.php">Work-Based Learning</a></td>
                          </tr>
                          </table>
                        </div>
                    </li>
                </ul>
                </div>
            </nav>
        <p id="h1"><?php echo $program_title ?></p>
        <!-- MAIN VIDEO/JUMBOTRON BELOW -->
        <div id="video" class="container-fluid">
        <?PHP if(!empty($videoId)){?>    
        <video controls autoplay>
                <source src="<?php echo $videoId; ?>" type="video/mp4">
            Your browser does not support the video tag.
            </video>
        <?PHP } elseif(!empty($replacementImg)){?>
               <img class="img-fluid" src="<?PHP echo $replacementImg?>" alt="main image" style="width: 100%;">
        <?PHP } else{?>
            
        <?PHP }?>
        </div>
        <?PHP if (!empty($programOverview)){?>
        <div id="news" class="container-fluid backgroundDark">
            <!-- FOR MAJOR CLASS NEWS -->
            <h2><?php echo $program_title ?> at a Glance</h2>
            <p>
                 <?php echo $programOverview ?>
            </p>
        </div>
        <?PHP }?>
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
                <?php if(!empty($classThreeTitle)){ ?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#class3"><?php echo $classThreeTitle ?></a>
                </li>
                <?php }?>
                <?php if(!empty($classFourTitle)){ ?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#class4"><?php echo $classFourTitle ?></a>
                </li>
                <?php } ?>
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
                    <span>Available to: <?php echo $grade1?> </span><br>
                    <span>Taught By: <?php echo $teacher1?></span><br>
                    <?php if(!empty($prerequisites1)){ ?>
                    <span>Requires: <?php echo $prerequisites1?></span>
                    <?php }?>
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
                <span>Available to: <?php echo $grade2?> </span><br>
                    <span>Taught By: <?php echo $teacher2?></span><br>
                    <?php if(!empty($prerequisites2)){ ?>
                    <span>Requires: <?php echo $prerequisites2?></span>
                    <?php }?>
                </p>
            </div>
            <?php if(!empty($classThreeTitle)){ ?>
            <div id="class3" class="tab-pane container fade">
            <h3 class="class-title">
                <?php echo $classThreeTitle ?>
            </h3>
                <p class="class-info">
                    <span><?php echo $classThreeInfo ?></span>
                </p>
                <p class="class-info courseDetails">
                <span>Available to: <?php echo $grade3?> </span><br>
                    <span>Taught By: <?php echo $teacher3?></span><br>
                    <?php if(!empty($prerequisites3)){ ?>
                    <span>Requires: <?php echo $prerequisites3?></span>
                    <?php }?>
                </p>
            </div>
                    <?php }?>
            <?php if(!empty($classFourTitle)){ ?>
            <div id="class4" class="tab-pane container fade">
            <h3 class="class-title">
                <?php echo $classFourTitle ?>
            </h3>
                <p class="class-info">
                    <span><?php echo $classFourInfo ?></span>
                </p>
                <p class="class-info courseDetails">
                <span>Available to: <?php echo $grade4?> </span><br>
                    <span>Taught By: <?php echo $teacher4?></span><br>
                    <?php if(!empty($prerequisites4)){ ?>
                    <span>Requires: <?php echo $prerequisites4?></span>
                    <?php }?>
                </p>
            </div>
            <?php }?>
            </div>
            </div>
        </section>
        <?php if(!empty($galleryImgs)){?>
            <section id="gallery" class="d-inline-flex flex-wrap">
            <!-- CODING OF BELOW MAY BE SUBJECT TO CHANGE TO GRID SYSTEM. JUST KNOW INFO = IMG TAGS -->
            <?php for($x=0; $x<count($galleryImgs);$x++){?>
            <img class="img-fluid flex-fill" src=<?php echo $galleryImgs[$x] ?> alt="gallery image" style="width: 325px;">
            <?php }?>
        </section>
        <?php }?> 
        <section>
            <!-- AFFILIATES SECTION TO BE IN TAB DESIGN. IF NOT THERE, HAVE DIV NOT DISPLAY -->
            <div id="affiliates">
                <ul class="nav nav-tabs" role="tablist">
                    <?php if(!empty($certifications)){ ?>   
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Certifications</a>
                        </li>
                    <?php }?>
                    <?php if(!empty($partners)){ ?>
                        <?php if(empty($certifications)){?>
                            <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#menu1">Partners</a>
                            </li>
                        <?PHP } else{?>
                            <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">Partners</a>
                        </li>
                        <?PHP }?>   
                    <?php }?>
                    <?php if(!empty($dualCredit)){ ?>   
                        <?php if(empty($certifications)&&empty($partners)){?>
                            <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#menu2">Dual Credit</a>
                            </li>
                        <?PHP } else{?>
                            <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">Dual Credit</a>
                        </li>
                        <?PHP }?> 
                    <?php }?>
                    <?php if(!empty($internships)){ ?>   
                        <?php if(empty($certifications)&&empty($partners)&&empty($dualCredit)){?>
                            <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#menu3">Internship</a>
                            </li>
                        <?PHP } else{?>
                            <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu3">Internship</a>
                        </li>
                        <?PHP }?>
                     <?php }?>
                </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <?php if(!empty($certifications)){?>
                <div id="home" class="container tab-pane active"><br>
                <?PHP }else{?>
                    <div id="home" class="container tab-pane fade"><br>
                <?PHP }?>
                <?php if(!empty($certifications)){?>

                        <h3>Certifications</h3>
                        <?php for($i=0;$i<count($certificationsName);$i++){?>
                        <div class="d-flex">
                            <?php if(!empty($certificationsImg[$i])){ ?>
                            <div class="flexImgPadding">
                                <span><!-- INSTITUTION IMAGE -->
                                    <img class="img-fluid" src=<?PHP echo $certificationsImg[$i]?>>
                                </span>
                            </div>
                            <?php }?>
                            <div class="flex-fill">
                                <h4><!-- INSTITUTION NAME --> <?PHP echo $certificationsName[$i]?></h4>
                                <?php for($x=0;$x<count($certifications[$i]);$x++){?>
                                    <p class="opportunity">
                                    <!-- CERTIFICATION DESCRIPTION -->
                                    
                                    <?php echo $certifications[$i][$x]?>
                                    
                                </p>
                                <?php }?>
                            </div>
                        </div>
                        <?php }?>
                    <?php }?>
                </div>
                <?php if(empty($certifications)&&!empty($partners)){?>
                <div id="menu1" class="container tab-pane active"><br>
                <?PHP } else{?>
                <div id="menu1" class="container tab-pane fade"><br>
                <?PHP }?>
                    
                    <?php if(!empty($partners)){?>
                      <h3>Partners</h3> 
                       <?php for($i=0;$i<count($partnersName);$i++){?>
                            <div class="d-flex">
                            <?PHP if(!empty($partnersImg[$i])){?>
                            <div class="flexImgPadding">
                                <span><!-- INSTITUTION IMAGE -->
                                    <img class="img-fluid" src=<?PHP echo $partnersImg[$i]?>>
                                </span>
                            </div>
                            <?PHP }?>
                            <div class="flex-fill">
                                <h4><?PHP echo $partnersName[$i]?></h4>
                                <p class="opportunity">
                                    <!-- PARTNER DESCRIPTION -->
                                    <?php echo $partners[$i]?>
                                </p>
                            </div>
                        </div>
                        <?php }?>
                    <?php }?>
                </div>
                <?php if(empty($certifications)&&empty($partners)&&!empty($dualCredit)){?>
                <div id="menu2" class="container tab-pane active"><br>
                <?PHP } else{?>
                <div id="menu2" class="container tab-pane fade"><br>
                <?PHP }?>
                    <h3>Dual Credit</h3>
                    <?php if(!empty($dualCredit)){?>
                        <div class="d-flex">
                        <div>
                            <span class="flexImgPadding"> <!-- INSTITUTION IMAGE -->
                                <img class="img-fluid" src=<?PHP echo $dualCreditImg?>>
                            </span>
                        </div>
                        <div class="flex-fill">
                            <h5><?PHP echo $dualCreditName?></h5>
                            <p class="opportunity">
                                <span><!-- CREDITS AND CREDIT HOURS --></span>
                                <span><!-- CREDIT DETAILS -->
                                    <?php echo $dualCredit?>
                                </span>
                            </p>
                        </div>
                        </div>
                    <?php }?>
                </div>
                <?php if(empty($certifications)&&empty($partners)&&empty($dualCredit)&&!empty($internships)){?>
                <div id="menu3" class="container tab-pane active"><br>
                <?PHP } else{?>
                <div id="menu3" class="container tab-pane fade"><br>
                <?PHP }?>
                    <h3>Internships</h3>
                    <?php if(!empty($internships)){?>
                        <div class="d-flex">
                            <?php if(!empty($internshipsImg)){?>    
                            <div class="flexImgPadding">
                                <span><!-- INSTITUTION IMAGE -->
                                    <img class="img-fluid" src=<?PHP echo $internshipsImg?>>
                                </span>
                            </div>
                            <?php }?>
                            <div class="flex-fill">
                                <h5><?php echo $internshipsName?></h5>
                                <p class="opportunity">
                                    <!-- INSTITUTION DESCRIPTION -->
                                    <?php echo $internships?>
                                </p>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
            </div>
        </section>
        <section id="testimonies" class="container-fluid">
            <!-- STUDENT TESTIMONIES. NOTE: TO FOR-LOOP THIS, SPLIT THEM INTO TESTIMONY ODD AND TESTIMONY EVEN FOR STYLING. -->
            <?php //for($x=0; $x<count($testimonies);$x++){?>
            <?php if(!empty($testimonies[0])){?>
                <div class="testimony testimonyOdd">
                <p class="testimony"><span><?php echo $testimonies[0]?></span> -- <span><?php echo $testimoniesName[0]?></span></p>
            </div>
            <?php }?>
           <?php if(!empty($testimonies[1])){?> 
            <div class="testimony testimonyEven">
                <p class="testimony"><?php echo $testimonies[1]?> -- <span><?php echo $testimoniesName[1]?></span></p>
            </div>
            <?php }?>
            <?php if(!empty($testimonies[2])){?>
                <div class="testimony testimonyOdd">
                <p class="testimony"><?php echo $testimonies[2]?> -- <span><?php echo $testimoniesName[2]?></span></p>
            </div>
            <?php }?>
            <?php if(!empty($testimonies[3])){?>
                <div class="testimony testimonyEven">
                <p class="testimony"><?php echo $testimonies[3]?> -- <span><?php echo $testimoniesName[3]?></span></p>
            </div>
            <?php }?>
            <?php if(!empty($testimonies[4])){?>
                <div class="testimony testimonyOdd">
                <p class="testimony"><?php echo $testimonies[4]?> -- <span><?php echo $testimoniesName[4]?></span></p>
            </div>
            <?php }?>
        </section>
        <section id="other">
            <!-- SECTION FOR OTHER MEDIA. INDIVIDUAL SPOTS FOR IMAGES, THEN TEXT FOR TEXT AND LINKS -->
            <?php if(!empty($extraImgs)){?>
            <div id="extraimage" class="d-inline-flex flex-wrap justify-content-center">
             <?php for($x=0; $x<count($extraImgs);$x++){?>
                <img class="img-fluid flex-fill align-self-center" src=<?php echo $extraImgs[$x] ?> alt="placeholder">
            <?php }?>    
            </div>
            <?php }?>
        </section>
        <section id="footer" class="container-fluid">
            <div class="row">
                <div class="col-sm-11">
                <p>Walker Career Center<br>
                9651 EAST 21ST STREET<br>
                Indianapolis, IN 46229<br><br>

                Phone: 317.532.6150<br>
                Fax: 317-532-6199</p>
                </div>
                <div class="col-sm-1">
                <a href="https://www.facebook.com/WalkerCareerCenter.is.WCC/"><img src="../assets/icons8-facebook-50.png" alt="facebook icon" class="footerImage"></a>
                <a href="https://twitter.com/wcc_warren"><img src="../assets/icons8-twitter-50.png" alt="twitter icon" class="footerImage"></a>
                </div>
            </div>
        </section>
    </div>
</body>
</html>