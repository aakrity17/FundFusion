<?php
include "routeconfig.php";
?>
<div class="navigation">
        <ul>
          <li>
            <a href="">
            <span class="icon">
              <i class="fa-solid fa-grid-horizontal" style="color: #f2f2f3;"></i>              </span>

              <span class="title">FundFusion</span>
            </a>
          </li>
          <li>
            <a href="<?php echo $site_url ?>admin/Dashboard.php">
              <span class="icon">
              <i class="fas-fa-search"></i> </span>
              <span class="title">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="">
              <span class="icon">
              <i class="fa-sharp fa-light fa-house-chimney fa-xl"></i>              </span>
              <span class="title">Home</span>
            </a>
          </li>
          <li>
            <a href="">
              <span class="icon">
              <i class="fa-duotone fa-handshake-angle fa-beat-fade"></i>              </span>
              <span class="title">About</span>
            </a>
          </li>
          <li>
            <a href="">
              <span class="icon">
                <ion-icon name="help-outline"></ion-icon>
              </span>
              <span class="title">Donation</span>
            </a>
          </li>
          <li>
            <a href="<?php echo $site_url ?>admin/events/create-event.php">
              <span class="icon">
                <ion-icon name="settings-outline"></ion-icon>
              </span>
              <span class="title">Events</span>
            </a>
          </li>
          <li>
          <a href="<?php echo $site_url ?>admin/Adminadd.php">
              <span class="icon">
                <ion-icon name="lock-closed-outline"></ion-icon>
              </span>
              <span class="title">Admins</span>
            </a>
          </li>
          <li>
            <a href="">
              <span class="icon">
                <ion-icon name="log-out-outline"></ion-icon>
              </span>
              <span class="title">Sign Out</span>
            </a>
          </li>
        </ul>
      </div>