<?php
include "routeconfig.php";
?>
<div class="navigation">
        <ul>
          <li>
          <a href="<?php echo $site_url ?>admin/Dashboard.php">
            <span class="icon"></span>
              <span class="title">FundFusion</span>
            </a>
          </li>
          <li>
            <a href="<?php echo $site_url ?>User/userAdd.php">
            <span class="icon"></span>
              <span class="title">Users</span>
            </a>
          </li>
          <li>
            <a href="<?php echo $site_url ?>admin/DashboardComponents/Homepage.php">
            <span class="icon"></span>
              <span class="title">Home</span>
            </a>
          </li>
          <li>
            <a href="">
            <span class="icon"></span>
              <span class="title">About</span>
            </a>
          </li>
          <li>
          <a href="<?php echo $site_url ?>admin/donation/create-donation.php">
              <span class="icon"></span>
              <span class="title">Donation</span>
            </a>
          </li>
          <li>
            <a href="<?php echo $site_url ?>admin/events/create-event.php">
            <span class="icon"></span>              
            <span class="title">Events</span>
            </a>
          </li>
          <li>
          <a href="<?php echo $site_url ?>admin/Adminadd.php">
              <span class="icon"></span>
              <span class="title">Admins</span>
            </a>
          </li>
          <li>
            <a href="<?php echo $site_url ?>admin/projects/create-project.php">
            <span class="icon"></span>              
            <span class="title">Projects</span>
            </a>
          </li>
          <li>
          <a href="<?php echo $site_url ?>admin/DashboardComponents/Teams.php">
              <span class="icon"></span>
              <span class="title">Team</span>
            </a>
          </li>
          <li>
            <a href="../User/logout.php">
            <span class="icon"></span>
              <span class="title">Sign Out</span>
            </a>
          </li>
        </ul>
      </div>