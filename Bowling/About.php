<?php include('Connection.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Menu</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <section style="color: #000000; width: 1150px; margin-right:auto; margin-left:auto;">
        <div style="text-align: center;">
            <img src="designimg/Logo1.png" alt="" style="padding: 10px; width: 550px; height: 180px; margin-left:auto; margin-right:auto;">
        </div>
        <nav class="stroke">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="members.php">Members</a></li>
                <li><a href="promotion.php">Promotion</a></li>
                <li><a href="Announcement.php">Announcement</a></li>
                <li><a href="Booking.php">Booking</a></li>
                <li><a href="report.php">Report</a></li>
                <li><a href="About.php">About Us</a></li>
                <li><a id="logout" href="">Log Out</a></li>
            </ul>
        </nav>
        <br>
        <div class="content">
            <div class="card mb-3">
                <img src="designimg/building.jpg" class="card-img-top" alt="" style="margin-left:auto; margin-right:auto; padding-top: 10px; width: 700px; ">
                <div class="card-body">
                    <h5 class="card-title">About Us</h5>
                    <p class="card-text">Golden Dream's Bowling Club established in 2020 making it the first bowling club to open within the Durian Tunggal area. As the only bowling club in the area, it has a strong bowling and social membership and regularly holds state-class tournaments. We're a membership organization that provides standardized rules, regulations and benefits to make bowling fair and fun for everyone.
                    The Club recently held their 2nd Anniversary celebrations and a fun tournament were organized to mark the occasion. It is the ideal location for your upcoming event because to the welcoming and laid-back ambiance, free on-site parking, function space, beer garden, and superb food.</p>
                    <h5 class="card-title">Our Mission</h5>
                    <p class="card-text">Our goal is to offer the sport with resources, services, and standards. We wish to be the centre of our neighbourhood, fostering a peaceful, welcoming environment that is safe for families.</p>
                    <h5 class="card-title">Our Vision</h5>
                    <p class="card-text">Our vision is to serve the demands of bowling, it is our ambition to remain the top authority in the sport.</p>
                </div>
            </div>
        </div>
    </section>
</body>



</html>