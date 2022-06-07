<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NepalTeer</title>
    <?php
        include_once "partialpages/headerfiles.php";
    ?>
</head>
<body>  
    <?php
        include_once "partialpages/header.php";
    ?>
    <div class="container-fluid">
        <div class="row mt-3 mb-3">
            <div class="col-12 date">
                CONTACT US
            </div>
        </div>
        <center><hr></center>
        <div class="row mb-1">
            <div class="col-12 text-center">
                <p>Have questions about Results, Common Numbers, Contests or Mobile Apps?</p>
                <p>For everything else, just drop us a line below.</p>
            </div>
        </div>
        <form>
        <div class="row mt-3 mb-3">
            <div class="col-12 text-center">
                    <textarea name="" id="txtarea"></textarea><br><br>
                    <label>Your Email : </label><br>
                    <input type="email" required placeholder="Your@mail.com" id="email" ><br><br>
                    <input type="submit" id="submit" value="SEND">
            </div>
        </div>
        </form>

        <div class="row">
            <div class="col-md-2 mb-3">
                <a href="#"><img src="images/teer-result.jpg" class="wid"></a>
            </div>
            <div class="col-md-2 mb-3">
                <a href="#"><img src="images/teercounterSocial.jpg" class="wid"></a>
            </div>
            <div class="col-md-2 mb-3">
                <a href="common-numbers.php"><img src="images/teer-common-numbers.jpg" class="wid"></a>
            </div>
            <div class="col-md-2 mb-3">
                <a href="lotteries.php"><img src="images/teer-forum.jpg" class="wid"></a>
            </div>
            <div class="col-md-2 mb-3">
                <a href="dream-numbers.php"><img src="images/teer-dream-numbers.jpg" class="wid"></a>
            </div>
            <div class="col-md-2 mb-3">
                <a href="common-numbers.php"><img src="images/teer-previous-numbers.jpg" class="wid"></a>
            </div>
        </div>


        <?php
        include_once "partialpages/footer.php";

        ?>
    </div>



 <?php
        include_once "partialpages/footerfiles.php";
    ?>
</body>
</html>