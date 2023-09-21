

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
        <!-- <div class="row" > -->
            <div class="col-10 col-md-6 col-lg-4">
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
            <div class="col-10 col-md-6 col-lg-4">
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
            <div class="col-10 col-md-6 col-lg-4">
            <div class="footer-single">
                    <div class="footer-title">
                        <h2 style="color:white; width:200px;">Find us on Map</h2>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.0232144985353!2d83.9737104111368!3d28.20660727579958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595aa38889db1%3A0xf35a851e0c6a4f34!2sLA%20GRANDEE%20International%20College!5e0!3m2!1sen!2snp!4v1695278328434!5m2!1sen!2snp" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
            </div>
        <!-- </div> -->
    </div>
</section>
