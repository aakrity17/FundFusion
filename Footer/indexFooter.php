

<?php
include './database/Db_Connection.php';
$sql = 'SELECT * FROM footer';
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $fb = $row['fb'];
    $youtube = $row['youtube'];
    $twitter = $row['twitter'];
    $google = $row['google'];
    $skype = $row['skype'];
    $address = $row['address'];
    $phone = $row['phone'];
    $fax = $row['fax'];
    $email = $row['email'];
}
?>

<section class="nb-footer">
    <div class="container">
        <div class="row mx-4" >
            <div class="col-md-3 col-sm-6 ">
                <div class="footer-single useful-links">
                    <div class="footer-title">
                        <h2 style="color: white;">Navigation</h2>
                    </div>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home <i class="fa fa-angle-right pull-right"></i></a></li>
                        <li><a href="#about-us">About Us <i class="fa fa-angle-right pull-right"></i></a></li>
                        <li><a href="../fundfusion/esewa/donate.php">Donators <i class="fa fa-angle-right pull-right"></i></a></li>
                        <li><a href="#">Volunteer <i class="fa fa-angle-right pull-right"></i></a></li>
                        <li><a href="Events">Events <i class="fa fa-angle-right pull-right"></i></a></li>
                        <li><a href="#">Our Teams <i class="fa fa-angle-right pull-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix visible-sm"></div>
            <div class="col-md-3 col-sm-6">
                <div class="col-sm-12 left-clear right-clear footer-single footer-project">
                    <div class="footer-title">
                        <h2 style="color: white;">Social links</h2>
                        <div class="col-sm-6 text-right xs-center">
                            <ul class="list-inline footer-social" style="display: flex;">
                                <li><a href="<?php echo $fb; ?>"><i class="fa fa-facebook mx-4"></i></a></li>
                                <li><a href="<?php echo $twitter; ?>"><i class="fa fa-twitter "></i></a></li>
                            </ul>
                            <ul class="list-inline footer-social" style="display: flex;">

                                <li><a href="<?php echo $youtube; ?>"><i class="fa fa-youtube-play mx-4"></i></a></li>
                                <li><a href="<?php echo $google; ?>"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <ul class="list-inline footer-social" style="display: flex;">

                                <li><a href="<?php echo $skype; ?>"><i class="fa fa-skype mx-4"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer-single">
                    <div class="footer-title">
                        <h2 style="color:white; width:200px;">Contact Information</h2>
                    </div>
                    <address style="width:200px;">
                        <?php echo $address; ?> <br>
                        <i class="fa fa-phone"></i><?php echo $phone; ?><br>
                        <i class="fa fa-fax"></i> <?php echo $fax; ?><br>
                        <i class="fa fa-envelope"></i> <?php echo $email; ?><br>
                    </address>
                </div>
            </div>
        </div>
    </div>
</section>
