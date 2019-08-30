<nav class="navbar navbar-inverse" style="margin-bottom: 0px;background:#008b8b;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

            <center> <ul class="nav navbar-nav">
                    <li <?php
                    if ($_SESSION['active'] == 1) {
                        echo'class="active"';
                    }
                    ?>><a href="index.php" style="font-family:Arima Madurai;">Home</a></li>
                    <li <?php
                    if ($_SESSION['active'] == 2) {
                        echo'class="active"';
                    }
                    ?> ><a href="resume.php" style="font-family:Arima Madurai;">Resume</a></li>
                    <li  <?php
                    if ($_SESSION['active'] == 3) {
                        echo'class="active"';
                    }
                    ?>><a href="project.php" style="font-family:Arima Madurai;">My Projects</a></li>
                    <li  <?php
                    if ($_SESSION['active'] == 4) {
                        echo'class="active"';
                    }
                    ?>><a href="internship.php" style="font-family:Arima Madurai;">Internship</a></li>
                    <li  <?php
                    if ($_SESSION['active'] == 5) {
                        echo'class="active"';
                    }
                    ?>><a href="awards.php" style="font-family:Arima Madurai;">Achievements</a></li>
                    <li <?php
                    if ($_SESSION['active'] == 6) {
                        echo'class="active"';
                    }
                    ?> ><a href="contact_us.php" style="font-family:Arima Madurai;"></span> Contact</a></li>
                </ul>

            </center>
        </div>
    </div>
</nav>
