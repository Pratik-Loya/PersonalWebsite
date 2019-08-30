<?php
     session_start();
?>
<html>
    <style>

        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (Image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 500px;
        }

        /* Caption of Modal Image (Image Text) - Same Width as the Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation - Zoom in the Modal */
        .modal-content, #caption { 
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)} 
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)} 
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
        
        .website_images:hover {opacity: 0.5;}

    </style>
    <body>
       <?php
        $_SESSION['active'] = 4;
        include 'header.php';
        include 'navbar.php';
        ?>
        <div>
            <br><br>
            <center><h1 style='color: #008b8b;font-family: Merienda One;font-size:50px;'>Internship</h1></center>
            <hr style="width:80%;border-color:#008b8b;margin-bottom: -18px;">
            <hr style="width:80%;border-color:#008b8b;">
        </div><br><br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div class="col-md-4">
                    <h2 style="color:#008b8b;font-family: 'Josefin Sans';"><span style="text-decoration: underline;">Company</span> :</h2>
                </div>
                <div class="col-md-8">
                    <h2 style="color:grey;font-family: 'Josefin Sans';"> Vision Media Entertainment</h2>
                </div>
                <div class="col-md-4">
                    <h2 style="color:#008b8b;font-family: 'Josefin Sans';"><span style="text-decoration: underline;">Position</span> :</h2>
                </div>
                <div class="col-md-8">
                    <h2 style="color:grey;font-family: 'Josefin Sans';"> Web Developer</h2>
                </div>
                <div class="col-md-4">
                    <h2 style="color:#008b8b;font-family: 'Josefin Sans';"><span style="text-decoration: underline;">Location</span> :</h2>
                </div>
                <div class="col-md-8">
                    <h2 style="color:grey;font-family: 'Josefin Sans';"> Pune</h2>
                </div>
                <div class="col-md-4">
                    <h2 style="color:#008b8b;font-family: 'Josefin Sans';"><span style="text-decoration: underline;">Period</span> :</h2>
                </div>
                <div class="col-md-8">
                    <h2 style="color:grey;font-family: 'Josefin Sans';">20th-May-2016 to 20th-July-2016</h2>
                </div>
                <div class="col-md-4">
                    <h2 style="color:#008b8b;font-family: 'Josefin Sans';"><span style="text-decoration: underline;">Technologies Used</span> :</h2>
                </div>
                <div class="col-md-8">
                    <h3 style="color:grey;font-family: 'Josefin Sans';">1) HTML&CSS <br> 2) BootStrap<br>3) PHP <br> 4) MySql<br> 5) Javascript & Angular JS</h3>
                </div>
            </div>
            <div class="col-md-4">
                <center><img id="vision_logo" src="images/visionlogo.png"></center>
                <center><img id="myImg" src="images/vision_certificate.jpg" width="70%" style="margin-top:10%;"></center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-2"></div>
            <div class="col-md-8 col-sm-8">
                <h2 style="color:#008b8b;font-family: 'Josefin Sans';"><span style="text-decoration: underline;">Internship Projects</span> :</h2>

                <h2 style="color:grey;padding-bottom: 10px;font-family: 'Josefin Sans';">1) Code-Box </h2>

                <h4 style="line-height: 25px;text-align: justify;font-family: 'Cardo';" >
                    Code Box is an online compiler website where a user can run his codes even on his phone.These Website helps in 
                    reducing the overhead of always carrying laptop's and releases user from all the worry of installing various softwares
                    to run different languages. Code-Box comes with multi-programing languages and uses cloud technology to store all the codes
                    of the user. With the help of changing editor theme the website becomes user-friendly as it helps to user to modifying
                    the text-editor according to his hands-on text-editor.
                    <br><br>
                    <b>Total Time Taken : 1 month.</b>
                    <br>
                    <b>No. Of Persons on The Project : 1</b>
                    <br>
                </h4>
                <div class="col-md-6">
                    <a class="website_images" href="images/codebox1.png" target="_blank"><img src="images/codebox1.png" width="100%" style="margin-top: 10px;"></a>
                </div>
                <div class="col-md-6">
                    <a class="website_images" href="images/codebox2.png" target="_blank"><img src="images/codebox2.png" width="100%" style="margin-top: 10px;"></a>
                </div> '
                <br><br>
                <hr style="border: 1px solid #008b8b;margin-top:10px;width:110%">
                <h2 style="color:grey;padding-bottom: 10px;font-family: 'Josefin Sans';">2) Achaliyas Institute of Technology Website </h2>
                <br>
                <h4 style="line-height: 25px;text-align: justify;font-family: 'Cardo';" >
                    These Website was created for a Teaching Institute which train students for various exams like Banking Exams, 
                    Staff Selection Exams etc.These Website includes all the facility which is required for any coaching institute.
                    The Facilities Ranges from Enquiry Section to the admin panel where the admin can have all access of changing 
                    notification, reply to the enquiry through mail and update the students corner.
                    <br><br>
                    <b>Total Time Taken : 15days.</b>
                    <br>
                    <b>No. Of Persons on The Project : 2</b>
                    <br>
                    <b>Website : <a href="http://www.aicscompetitive.in" target="_blank">www.aicscompetitive.in</a></b>
                </h4>
                <div class="col-md-6">
                    <a class="website_images"  href="images/aics1.png" target="_blank"><img src="images/aics2.png" width="100%" style="margin-top: 10px;"></a>
                </div>
                <div class="col-md-6">
                    <a  class="website_images" href="images/aics2.png" target="_blank"><img src="images/aics1.png" width="100%" style="margin-top: 10px;"></a>
                </div>'

                <br><br>
                <hr style="border: 1px solid #008b8b;margin-top:10px;width:110%">
                <h2 style="color:grey;padding-bottom: 10px;font-family: 'Josefin Sans';">3) Assignment Submission Portal </h2>
                <br>
                <h4 style="line-height: 25px;text-align: justify;font-family: 'Cardo';" >
                    These Portal is an online submission portal for the students in order to submit the codes. These Portal 
                    reduces the tedious and traditional work of taking the printouts of the codes and submit to the teacher.
                    With the help of Plagarism Detector it helps in finding the copy percentage of the code from student and 
                    helping teacher in assigning marks accordingly.
                    <br>
                    My work was to create a multi-language support compiler for the portal such that it will help students to focus 
                    mainly on the code and forget about tedious work of installing various softwares to run the code.The compiler was to be made such that 
                    it will run the codes with inputs from students and also on the inputs provided by teacher and inform teacher about
                    the output of the code.
                    <br><br>
                    <b>Total Time Taken : 15days.</b>
                    <br>
                    <b>No. Of Persons on The Project : 10</b>
                    <br>
                </h4>
                <div class="col-md-6">
                    <a  class="website_images" href="images/asp1.png" target="_blank"><img  src="images/asp1.png" width="100%" style="margin-top: 10px;"></a>
                </div>
                <div class="col-md-6">
                    <a  class="website_images"  href="images/asp2.png" target="_blank"><img src="images/asp2.jpg" width="100%" style="margin-top: 10px;"></a>
                </div>
            </div>

        </div>
        <?php
        include 'footer.php';
        ?>

        <!-- Trigger the Modal -->
        <!--<img id="myImg" src="images/aics1.png" alt="Trolltunga, Norway" width="300" height="200">-->

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close" onclick="document.getElementById('myModal').style.display = 'none'"><i class="glyphicon glyphicon-remove" style="color:white;"></i></span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">

            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
        </div>
        <script>
            // Get the modal
            var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById('myImg');
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function () {
                modal.style.display = "block";
                modalImg.src = this.src;
            }
            modal.onclick = function(){
                modal.style.display = "none";
            }

// Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            }

        </script>
    </body>
</html>