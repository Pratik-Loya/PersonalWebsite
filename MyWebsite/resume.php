<?php
      session_start();
?>
<html>
    <body>
        <?php
        $_SESSION['active'] = 2;
        include 'header.php';
        include 'navbar.php';
        ?>
        <div>
            <br><br>
            <center><h1 style='color: #008b8b;font-family: Merienda One;font-size:50px;'>Resume</h1></center>
            <hr style="width:80%;border-color:#008b8b;margin-bottom: -18px;">
            <hr style="width:80%;border-color:#008b8b;">
        </div>

        <div class='row' style="margin-bottom: 5%">
            <div class='col-md-2'></div>
            <div class='col-md-8'>
                <object data="docs/Pratik_Loya.pdf" type="application/pdf" width="100%" height="100%" style="border: 5px solid #008b8b;text-shadow: 10px">
                    <p>Your web browser doesn't have a PDF plugin.
                        Instead you can <a href="docs/Resume.pdf">click here to
                            download the PDF file.</a></p>
                </object>
            </div>
            <div class='col-md-2 col-sm-12' style="margin-top:3%;">
                <center><a href="docs/Pratik_Loya.pdf"><button class='btn btn-primary' style="background-color:#008b8b;border:none;" download >Download &emsp;<span class="glyphicon glyphicon-download-alt"></button></a></center>
            </div>
        </div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>