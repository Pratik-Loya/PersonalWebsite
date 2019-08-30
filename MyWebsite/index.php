<?php
      session_start();
?>
<html >    
    <body style="overflow-x: hidden">
        <?php
        $_SESSION['active'] = 1;
        include 'header.php';
        ?>
        <div class="top_part">
            <img id="top_background" src='images/top_background.jpg' width="100%">
            <div class="row">
                <div class="col-md-5 col-sm-12" style="margin-top:5%;">
                    <center><img id="profile_photo" src='images/profile_photo.jpg' style="border: 5px solid grey;"></center>
                </div>
                <div class="col-md-7 col-sm-12 info" style="margin-top:5%;">
                    <img id="hi" src="images/hi1.png" style="margin-bottom: -15px;" >
                    <h2 style='color: white;font-family:Arima Madurai;text-shadow: 4px 4px 4px #aaa;font-size: 40px;'>I'm Pratik Loya</h2>
                    <h4 style='color: whitesmoke;font-family: monospace;letter-spacing: 2px;'>Computer Science Student</h4>
                    <hr width='80%' style="margin-left:0px;">
                    <h3 id="personal_info" style='color: white;font-family: monospace;'>College &emsp; &emsp;  V.I.T.-Pune</h3>
                    <h3 id="personal_info" style='color: white;font-family: monospace;'>D.O.B &emsp; &emsp; &emsp; 28-12-1996</h3>
                    <h3 id="personal_info" style='color: white;font-family: monospace;'>Phone &emsp; &emsp; &emsp; 9158501766</h3>
                    <h3 id="personal_info" style='color: white;font-family: monospace;'>E-Mail&emsp; &emsp; &emsp; loyapratik@gmail.com</h3>
                </div>
            </div>
        </div>
        <div class="navigation_bar">
            <?php
            include 'navbar.php';
            ?>
        </div>
        <div>
            <br><br>
            <center><h1 style='color: #008b8b;font-family: Merienda One;font-size:50px;'>About Me</h1></center>
            <hr style="width:80%;border-color:#008b8b;margin-bottom: -18px;">
            <hr style="width:80%;border-color:#008b8b;">
            <div class="row">
                <div class="col-md-2"></div>
                 <div class="col-md-8">
                    <h4 style="line-height: 27px;text-align: justify;font-family: 'Cardo';">
                    Hi!!! My name is Pratik Loya, I'm 21 years old and completed my B.Tech Degree from Vishwakarma Institute 
                    Of Technology, Pune(Maharashtra). 
                    <br>Who am I? I'm a <b>Code Enthusiast</b> and a <b>Learner</b> (when it comes to New Technologies). I have 
                    started programming from 10th standard and since then I knew where my carrier would be. I have been
                    learning many new languages from the day I got enrolled into the college and has now become a passion without which living
                    would be difficult. The languages I learnt goes from C, C++, Java to Android to Web Development and will still continue in the future.
                    Apart from coding some of the things I like doing in my spare time are Playing Cricket
                    (which everyone in INDIA does <img src='images/wink.png'>), Listening Music, Playing Casio, Traveling and Puzzle Solving. I'm good at 
                    creating website which you'll know through my internship work. Some of the <b>Qualities</b> that I think I poses are <b>Patience, Hardworking, Calm & Adjustive</b>.<br>
                    I like learning new things and the one thing which I hate the most is Politics. Talking about my Professional Carrier I would like to be hired by the Company that will help in my Carrier Development 
                    and also would believe in me and seek me with Huge Responsibilities and provide a very friendly environment.<br>
                    I would love to hear for any queries and you can mail me anytime 24x7.</h4>
                </div>
            </div>
        </div>
        <div>
            <br><br>
            <center><h1 style='color: #008b8b;font-family: Merienda One;font-size:50px;'>Timeline</h1></center>
            <hr style="width:80%;border-color:#008b8b;margin-bottom: -18px;">
            <hr style="width:80%;border-color:#008b8b;">
        </div>
        <div class="container">
            <ul class="timeline">
                <li>
                    <div class="timeline-badge danger"><i class="glyphicon glyphicon-briefcase" style="margin-top:14px;"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">

                            <h4 class="timeline-title">2017-18</h4>
                            <h2 class="timeline-title">Internship</h2>
                        </div>
                        <div class="timeline-body">
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Company</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>NVIDIA Graphics Pvt Ltd</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Worked Till</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>31st July 2018</b></b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Tenure</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>10 months</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Worked as</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 14px;'><b>Software Developer</b></h5></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge warning"><i class="glyphicon glyphicon-lock" style="margin-top:14px;"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">

                            <h4 class="timeline-title">2016</h4>
                            <h2 class="timeline-title">Internship</h2>
                        </div>
                        <div class="timeline-body">
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Company</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>Vision Media Entertainment</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Worked Till</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>20th July 2016</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Tenure</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>2 months</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Achievements</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 14px;'><b>Created Websites:<br><br>1) Code-Box<br>2) Achaliya Institute Website<br>3) Assignment Submission Portal</b></h5></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><i class="glyphicon glyphicon-education" style="margin-top:14px;"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2014</h4>
                            <h2 class="timeline-title">Undergratuation</h2>
                        </div>
                        <div class="timeline-body">
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>College</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>V.I.T. College, Pune</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Field</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>Computer Science</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Completed onl</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>22nd May 2018</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Tenure</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>4 years</b></h5></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge primary"><i class="glyphicon glyphicon-book" style="margin-top:14px;"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">

                            <h4 class="timeline-title">2012</h4>
                            <h2 class="timeline-title">Higher Secondary Education</h2>
                        </div>
                        <div class="timeline-body">
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>College</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>J.E.S. College, Jalna</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Studied Till</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>12th Standard</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Tenure</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>2 years</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Achievements</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>Second District Topper in the H.S.C. Board Exam with 91%.</b></h5></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge success"><i class="glyphicon glyphicon-blackboard" style="margin-top:14px;"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2006</h4>
                            <h2 class="timeline-title">Secondary</h2>
                        </div>
                        <div class="timeline-body">
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>School</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>Ryan International School</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Studied Till</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>10th Standard</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Tenure</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>6 years</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Achievements</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>1) Vice President of the School in 10th Standard<br><br>2) Second Rank in the 10th board exam in school with 9.6-CGPA</b></h5></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge info"><i class="glyphicon glyphicon-pencil" style="margin-top:14px;"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">2000</h4>
                            <h2 class="timeline-title">Primary Education</h2>
                        </div>
                        <div class="timeline-body">
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>School</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>Shree M.S. Jain English School</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Studied Till</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>4th Standard</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Tenure</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>6 years</b></h5></div>
                            </div>
                            <div class='row'>
                                <div class="col-md-1"></div>
                                <div class='col-md-4'><h4><b>Achievements</b>:-</h4></div>
                                <div class='col-md-6'><h5 style='font-size: 15px;'><b>1) Best Student Award in Primary Section<br><br>2) Second District Topper in 4th board exam with 99.75%</b></h5></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge danger"><i class="glyphicon glyphicon-user" style="margin-top:14px;"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">1996</h4>
                            <h2 class="timeline-title">Birth</h2>
                        </div>
                        <div class="timeline-body">
                            <p></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


        <div style="background-color: black;padding-bottom: 80px;">
            <br><br>
            <center><h1 style='color: #008b8b;font-family: Merienda One;font-size:50px;'>Skills</h1></center>
            <hr style="width:80%;border-color:#008b8b;margin-bottom: -18px;">
            <hr style="width:80%;border-color:#008b8b;">
            <div class="row" style="margin-top: 15px;">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <h4 style="color: white;font-family:'Cardo'">C<span style="float:right;">70%</span></h4>
                    <div class="progress" style="height:10px;">
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" style="width:70%;background-color: #766E04"></div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <h4 style="color: white;font-family:'Cardo'">Android<span style="float:right;">75%</span></h4>
                    <div class="progress" style="height:10px;">
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" style="width:75%;background-color: #766E04"></div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            
            <div class="row" style="margin-top: 15px;">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <h4 style="color: white;font-family:'Cardo'">Java<span style="float:right;">60%</span></h4>
                    <div class="progress" style="height:10px;">
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" style="width:60%;background-color: #766E04"></div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <h4 style="color: white;font-family:'Cardo'">C++<span style="float:right;">60%</span></h4>
                    <div class="progress" style="height:10px;">
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" style="width:60%;background-color: #766E04"></div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            
            <div class="row" style="margin-top: 15px;">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <h4 style="color: white;font-family:'Cardo'">Html/Css<span style="float:right;">90%</span></h4>
                    <div class="progress" style="height:10px;">
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" style="width:90%;background-color: #766E04"></div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <h4 style="color: white;font-family:'Cardo'">UI Designing<span style="float:right;">75%</span></h4>
                    <div class="progress" style="height:10px;">
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" style="width:75%;background-color: #766E04"></div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            
            <div class="row" style="margin-top: 15px;">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <h4 style="color: white;font-family:'Cardo'">Php<span style="float:right;">90%</span></h4>
                    <div class="progress" style="height:10px;">
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" style="width:90%;background-color: #766E04"></div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <h4 style="color: white;font-family:'Cardo'">Mysql<span style="float:right;">65%</span></h4>
                    <div class="progress" style="height:10px;">
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" style="width:65%;background-color: #766E04"></div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <h4 style="color: white;font-family:'Cardo'">Also Knows:&emsp;&emsp; Hadoop , Python , Matlab , Javascript , Angular-Js , Photoshop.</h4>
                </div>
            </div>
        </div>

        <?php
        include 'footer.php';
        ?>
    </body>
</html>