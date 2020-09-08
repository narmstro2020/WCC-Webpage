<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skeleton</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="./assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
        <!-- font-family: 'Open Sans', sans-serif;   -    font-family: 'Roboto', sans-serif; -->

</head>
<body>
    <div class="mainbody">
        <section id="pageTop">
            <!-- TO INCLUDE NAVBAR, TOP IMAGE -->
            <img class="img-responsive mx-auto d-block" src="./assets/logo-walker.png" alt="top logo" style="padding: 10px;">
            <nav class="navbar navbar-expand-sm navbar-dark sticky-top">
                <a class="navbar-brand" href="#">
                    <img src="https://wcc.warren.k12.in.us/assets/apptegy_cms/themes/msdwarrenin/logo-ddb5d3afb469a9cb82dcda7e2bde7147.png" alt="Logo" style="width:40px;">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Programs</a>
                    </li>
                </ul>
            </nav>
        </section>
        <h1><?php echo $courseTitle ?></h1>
        <!-- MAIN VIDEO/JUMBOTRON BELOW -->
        <div id="video">
            <img class="img-fluid" src="https://bavariancarcare.com/wp-content/uploads/2019/12/image-placeholder-1200x800-1.jpg" alt="placeholder">
        </div>
        <div id="news" class="container-fluid backgroundDark">
            <!-- FOR MAJOR CLASS NEWS -->
            <h3>Class News</h3>
            <p>Tenderloin eiusmod qui pancetta fatback. Culpa leberkas hamburger fatback ut burgdoggen aliqua cow spare ribs
                laboris boudin pastrami velit ut. Ut picanha shank rump excepteur ex. Enim frankfurter chicken, magna short loin
                sed meatloaf.

                Ut hamburger pariatur culpa cow andouille. Qui deserunt bresaola, kielbasa velit consequat alcatra drumstick.
                Qui est do, burgdoggen shank beef ribs meatball spare ribs eu shankle chuck turducken quis tri-tip. Et tempor
                shoulder pork chop ullamco flank bresaola eu enim laborum incididunt sed. Drumstick incididunt burgdoggen short
                ribs cow chislic commodo boudin brisket ham dolore shankle fatback. Shoulder eiusmod salami ex beef mollit pork
                belly id. Consectetur tempor velit, boudin eiusmod hamburger id tongue labore ipsum.

                Do andouille cow anim ut pork id picanha velit turkey shoulder. Pork loin incididunt ball tip t-bone. Eu enim
                sausage occaecat pork loin. Esse ham hock rump, excepteur ball tip doner pork loin flank t-bone leberkas tri-tip
                bresaola ground round. Non excepteur in eiusmod. Pancetta pork belly turkey alcatra aliqua. Rump ullamco shankle
                chislic nisi t-bone.
            </p>
        </div>
        <section id="classinfo" class="container-fluid">
            <!-- CLASS INFORMATION SECTION. WILL ADD SECTION FOR MAX CLASS# -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#class1">Class 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#class2">Class 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#class3">Class 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#class4">Class 4</a>
                </li>
            </ul>
            <div class="tab-content">
            <div id="class1" class="tab-pane container active">
                <h3 class="class-title">ClassOne</h3>
                <p class="class-info">Bacon ipsum dolor amet duis pork loin occaecat, spare ribs sint cow sirloin et aliqua chislic pancetta hamburger
                chicken prosciutto meatball. Pork labore prosciutto ex. In esse nostrud ut eiusmod, chicken biltong sirloin
                rump. Strip steak bacon in ullamco corned beef esse anim ground round tenderloin ham biltong eiusmod dolore et.
                Nostrud magna minim ribeye chislic eu nisi cow. Excepteur salami commodo ribeye alcatra cupidatat aute fatback
                pastrami sint shoulder. Aliqua kielbasa turducken pastrami chuck kevin turkey.

                Officia turkey in eu, proident tenderloin pork chop frankfurter cillum ham hock laborum jerky bresaola. Ut
                shankle ullamco eu pariatur tail pastrami et lorem drumstick rump short loin strip steak nulla prosciutto. Ham
                ball tip in meatball elit. Shoulder excepteur swine pig anim aliqua exercitation fatback porchetta corned beef
                eu. Porchetta pariatur rump brisket laborum tongue in bacon aliquip. Rump ea voluptate dolore nisi turkey. Doner
                    labore kevin, adipisicing corned beef veniam leberkas shoulder strip steak ut tail short loin.</p>
            </div>
            <div id="class2" class="tab-pane container fade">
                <h3 class="class-title">ClassTwo</h3>
                <p class="class-info">Bacon ipsum dolor amet duis pork loin occaecat, spare ribs sint cow sirloin et aliqua chislic pancetta hamburger
                    chicken prosciutto meatball. Pork labore prosciutto ex. In esse nostrud ut eiusmod, chicken biltong sirloin
                    rump. Strip steak bacon in ullamco corned beef esse anim ground round tenderloin ham biltong eiusmod dolore et.
                    Nostrud magna minim ribeye chislic eu nisi cow. Excepteur salami commodo ribeye alcatra cupidatat aute fatback
                    pastrami sint shoulder. Aliqua kielbasa turducken pastrami chuck kevin turkey.

                    Officia turkey in eu, proident tenderloin pork chop frankfurter cillum ham hock laborum jerky bresaola. Ut
                    shankle ullamco eu pariatur tail pastrami et lorem drumstick rump short loin strip steak nulla prosciutto. Ham
                    ball tip in meatball elit. Shoulder excepteur swine pig anim aliqua exercitation fatback porchetta corned beef
                    eu. Porchetta pariatur rump brisket laborum tongue in bacon aliquip. Rump ea voluptate dolore nisi turkey. Doner
                    labore kevin, adipisicing corned beef veniam leberkas shoulder strip steak ut tail short loin.</p>
            </div>
            <div id="class3" class="tab-pane container fade">
                <h3 class="class-title">ClassThree</h3>
                <p class="class-info">Bacon ipsum dolor amet duis pork loin occaecat, spare ribs sint cow sirloin et aliqua chislic pancetta hamburger
                    chicken prosciutto meatball. Pork labore prosciutto ex. In esse nostrud ut eiusmod, chicken biltong sirloin
                    rump. Strip steak bacon in ullamco corned beef esse anim ground round tenderloin ham biltong eiusmod dolore et.
                    Nostrud magna minim ribeye chislic eu nisi cow. Excepteur salami commodo ribeye alcatra cupidatat aute fatback
                    pastrami sint shoulder. Aliqua kielbasa turducken pastrami chuck kevin turkey.

                    Officia turkey in eu, proident tenderloin pork chop frankfurter cillum ham hock laborum jerky bresaola. Ut
                    shankle ullamco eu pariatur tail pastrami et lorem drumstick rump short loin strip steak nulla prosciutto. Ham
                    ball tip in meatball elit. Shoulder excepteur swine pig anim aliqua exercitation fatback porchetta corned beef
                    eu. Porchetta pariatur rump brisket laborum tongue in bacon aliquip. Rump ea voluptate dolore nisi turkey. Doner
                    labore kevin, adipisicing corned beef veniam leberkas shoulder strip steak ut tail short loin.</p>
            </div>
            <div id="class4" class="tab-pane container fade">
                <h3 class="class-title">ClassFour</h3>
                <p class="class-info">Bacon ipsum dolor amet duis pork loin occaecat, spare ribs sint cow sirloin et aliqua chislic pancetta hamburger
                    chicken prosciutto meatball. Pork labore prosciutto ex. In esse nostrud ut eiusmod, chicken biltong sirloin
                    rump. Strip steak bacon in ullamco corned beef esse anim ground round tenderloin ham biltong eiusmod dolore et.
                    Nostrud magna minim ribeye chislic eu nisi cow. Excepteur salami commodo ribeye alcatra cupidatat aute fatback
                    pastrami sint shoulder. Aliqua kielbasa turducken pastrami chuck kevin turkey.

                    Officia turkey in eu, proident tenderloin pork chop frankfurter cillum ham hock laborum jerky bresaola. Ut
                    shankle ullamco eu pariatur tail pastrami et lorem drumstick rump short loin strip steak nulla prosciutto. Ham
                    ball tip in meatball elit. Shoulder excepteur swine pig anim aliqua exercitation fatback porchetta corned beef
                    eu. Porchetta pariatur rump brisket laborum tongue in bacon aliquip. Rump ea voluptate dolore nisi turkey. Doner
                    labore kevin, adipisicing corned beef veniam leberkas shoulder strip steak ut tail short loin.</p>
            </div>
            </div>
        </section>
        <section id="gallery" class="d-flex flex-wrap">
            <!-- CODING OF BELOW MAY BE SUBJECT TO CHANGE TO GRID SYSTEM. JUST KNOW INFO = IMG TAGS -->
            <img class="img-fluid flex-fill" src="https://bavariancarcare.com/wp-content/uploads/2019/12/image-placeholder-1200x800-1.jpg" alt="placeholder" style="width: 33%;">
            <img class="img-fluid flex-fill" src="https://bavariancarcare.com/wp-content/uploads/2019/12/image-placeholder-1200x800-1.jpg" alt="placeholder" style="width: 33%;">
            <img class="img-fluid flex-fill" src="https://bavariancarcare.com/wp-content/uploads/2019/12/image-placeholder-1200x800-1.jpg" alt="placeholder" style="width: 33%;">
            <img class="img-fluid flex-fill" src="https://bavariancarcare.com/wp-content/uploads/2019/12/image-placeholder-1200x800-1.jpg" alt="placeholder" style="width: 33%;">
            <img class="img-fluid flex-fill" src="https://bavariancarcare.com/wp-content/uploads/2019/12/image-placeholder-1200x800-1.jpg" alt="placeholder" style="width: 33%;">
            <img class="img-fluid flex-fill" src="https://bavariancarcare.com/wp-content/uploads/2019/12/image-placeholder-1200x800-1.jpg" alt="placeholder" style="width: 33%;">
        </section>
        <section id="affiliates" class="backgroundDark">
            <!-- AFFILIATES SECTION TO BE IN TAB DESIGN. IF NOT THERE, HAVE DIV NOT DISPLAY -->

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
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                    <h3>Certifications</h3>
                    <p class="affiliatesInfo">Tenderloin eiusmod qui pancetta fatback. Culpa leberkas hamburger fatback ut burgdoggen aliqua cow spare ribs
                        laboris boudin pastrami velit ut. Ut picanha shank rump excepteur ex. Enim frankfurter chicken, magna short loin
                        sed meatloaf.</p>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <h3>Partners</h3>
                    <p class="affiliatesInfo">Tenderloin eiusmod qui pancetta fatback. Culpa leberkas hamburger fatback ut burgdoggen aliqua cow spare ribs
                        laboris boudin pastrami velit ut. Ut picanha shank rump excepteur ex. Enim frankfurter chicken, magna short loin
                        sed meatloaf.</p>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                    <h3>Dual Credit</h3>
                    <p class="affiliatesInfo">Tenderloin eiusmod qui pancetta fatback. Culpa leberkas hamburger fatback ut burgdoggen aliqua cow spare ribs
                        laboris boudin pastrami velit ut. Ut picanha shank rump excepteur ex. Enim frankfurter chicken, magna short loin
                        sed meatloaf.</p>
                </div>
            </div>
        </section>
        <section id="testimonies" class="container-fluid">
            <!-- STUDENT TESTIMONIES -->
            <div id="testimony1">
                <p class="testimony">Ut hamburger pariatur culpa cow andouille. Qui deserunt bresaola, kielbasa velit consequat alcatra drumstick.
                    Qui est do, burgdoggen shank beef ribs meatball spare ribs eu shankle chuck turducken quis tri-tip. Et tempor
                    shoulder pork chop ullamco flank bresaola eu enim laborum incididunt sed. Drumstick incididunt burgdoggen short
                    ribs cow chislic commodo boudin brisket ham dolore shankle fatback. Shoulder eiusmod salami ex beef mollit pork
                    belly id. Consectetur tempor velit, boudin eiusmod hamburger id tongue labore ipsum.</p>
            </div>
            <div id="testimony2">
                <p class="testimony">Ut hamburger pariatur culpa cow andouille. Qui deserunt bresaola, kielbasa velit consequat alcatra drumstick.
                Qui est do, burgdoggen shank beef ribs meatball spare ribs eu shankle chuck turducken quis tri-tip. Et tempor
                shoulder pork chop ullamco flank bresaola eu enim laborum incididunt sed. Drumstick incididunt burgdoggen short
                ribs cow chislic commodo boudin brisket ham dolore shankle fatback. Shoulder eiusmod salami ex beef mollit pork
                belly id. Consectetur tempor velit, boudin eiusmod hamburger id tongue labore ipsum.</p>
            </div>
            <div id="testimony3">
                <p class="testimony">Ut hamburger pariatur culpa cow andouille. Qui deserunt bresaola, kielbasa velit consequat alcatra drumstick.
                    Qui est do, burgdoggen shank beef ribs meatball spare ribs eu shankle chuck turducken quis tri-tip. Et tempor
                    shoulder pork chop ullamco flank bresaola eu enim laborum incididunt sed. Drumstick incididunt burgdoggen short
                    ribs cow chislic commodo boudin brisket ham dolore shankle fatback. Shoulder eiusmod salami ex beef mollit pork
                    belly id. Consectetur tempor velit, boudin eiusmod hamburger id tongue labore ipsum.</p>
            </div>
            <div id="testimony4">
                <p class="testimony">Ut hamburger pariatur culpa cow andouille. Qui deserunt bresaola, kielbasa velit consequat alcatra drumstick.
                Qui est do, burgdoggen shank beef ribs meatball spare ribs eu shankle chuck turducken quis tri-tip. Et tempor
                shoulder pork chop ullamco flank bresaola eu enim laborum incididunt sed. Drumstick incididunt burgdoggen short
                ribs cow chislic commodo boudin brisket ham dolore shankle fatback. Shoulder eiusmod salami ex beef mollit pork
                    belly id. Consectetur tempor velit, boudin eiusmod hamburger id tongue labore ipsum.</p>
            </div>
        </section>
        <section id="other">
            <!-- SECTION FOR OTHER MEDIA. INDIVIDUAL SPOTS FOR IMAGES, THEN TEXT FOR TEXT AND LINKS -->
            <div id="extraimage">
                <img class="img-fluid" src="https://bavariancarcare.com/wp-content/uploads/2019/12/image-placeholder-1200x800-1.jpg" alt="placeholder">
                <img class="img-fluid" src="https://bavariancarcare.com/wp-content/uploads/2019/12/image-placeholder-1200x800-1.jpg" alt="placeholder">
            </div>
            <div id="extratext">
                Ut hamburger pariatur culpa cow andouille. Qui deserunt bresaola, kielbasa velit consequat alcatra drumstick.
                Qui est do, burgdoggen shank beef ribs meatball spare ribs eu shankle chuck turducken quis tri-tip. Et tempor
                shoulder pork chop ullamco flank bresaola eu enim laborum incididunt sed. Drumstick incididunt burgdoggen short
                ribs cow chislic commodo boudin brisket ham dolore shankle fatback. Shoulder eiusmod salami ex beef mollit pork
                belly id. Consectetur tempor velit, boudin eiusmod hamburger id tongue labore ipsum.
            </div>
        </section>
        <section id="footer">
            <!-- FOOTER CONTENT HERE -->
            <img src="https://wcc.warren.k12.in.us/assets/apptegy_cms/themes/msdwarrenin/logo-ddb5d3afb469a9cb82dcda7e2bde7147.png" alt="Logo" style="width:50px; padding-top: 5px; margin-right: 5px;" class="float-right">
            <img src="./assets/icons8-facebook-50.png" alt="facebook icon" style="padding: 5px;" class="float-right">
            <img src="./assets/icons8-twitter-50.png" alt="twitter icon" style="padding-top: 5px;" class="float-right">
        </section>
    </div>
</body>
</html>