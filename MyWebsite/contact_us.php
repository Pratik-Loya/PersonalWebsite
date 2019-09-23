<?php
      session_start();
?>
<html>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
    <body>
        <?php
        $_SESSION['active'] = 6;
        include 'header.php';
        include 'navbar.php';
        ?>
        <div>
            <br><br>
            <center><h1 style='color: #008b8b;font-family: Merienda One;font-size:50px;'>Contact Me</h1></center>
            <hr style="width:80%;border-color:#008b8b;margin-bottom: -18px;">
            <hr style="width:80%;border-color:#008b8b;">
        </div>
        <div class="row" style="margin-top:7%">
            <div class="col-md-1"></div>
            <div class="col-md-5">

                <div id="map"style="border:5px solid #008b8b"></div>
                <script>
                    function initMap() {
                        var uluru = {lat: 18.454574, lng: 73.875860};
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 16,
                            center: uluru
                        });
                        var marker = new google.maps.Marker({
                            position: uluru,
                            map: map,
                            title: "My Current Resedence"
                        });
                    }
                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
                </script>
            </div>
            <div class="col-md-6">
                <h3 style='color: grey;font-family:Arima Madurai;'> <span style='color:black'>Mobile:</span>&emsp;&emsp;9158501766</h3>
                <h3 style='color: grey;font-family:Arima Madurai;'><span style='color:black'>Email:</span> &emsp;&emsp;loyapratik@gmail.com</h3>
                <h3 style='color: grey;font-family:Arima Madurai;'><span style='color:black;'>Current Address:</span><br>Rathi Maheshwari Hostel,Sukhsagar Road,Upper Indira Nagar,Bibwewadi,Pune-411048</h3>
                <h3 style='color: grey;font-family:Arima Madurai;'><span style='color:black;'>Permanent Address:</span><br>335,Priyadarshani Colony,Sambhaji Nagar,Jalna-431203</h3>
                <center>
                    <div style='margin-top: 10%;'>
                        <a href='https://www.facebook.com/pratik.loya.1' target="_blank" ><img src='images/fbprofile.png' width='60px'></a>
                        <a href='https://plus.google.com/107881285018183428804' target="_blank" ><img src='images/google-plus.png' width='50px'></a>
                        <a href='https://github.com/Pratik-Loya' target="_blank" ><img src='images/github.png' width='50px'></a>
                        <a href='https://in.pinterest.com/loyapratik/' target="_blank" ><img src='images/Pinterest.png' width='50px'></a>
                        <a href='https://www.linkedin.com/in/pratik-loya-735394100?trk=nav_responsive_tab_profile_pic' target="_blank" ><img src='images/linked_in.png' width='50px'></a>
                    </div>
                </center>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
