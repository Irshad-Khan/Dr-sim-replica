<?php 
  $page_name = basename($_SERVER["SCRIPT_FILENAME"], '.php');
?>
<sidebar>
  <ul>
    <li>
      <a href="./d-index.php" class="<?= ($page_name == "d-index") ? 'active' : ''?>">
        <i class="icon"><img src="./img/profile.png" alt="profile"></i>
        Profile
      </a>
    </li>
    <li>
      <a href="./d-dashboard.php" class="<?= ($page_name == "d-dashboard") ? 'active' : ''?>">
      <i class="icon"><img src="./img/dashboard.png" alt="dashboard"></i>
        Dashboard
      </a>
    </li>
    <li>
      <a href="./d-track.php" class="<?= ($page_name == "d-track") ? 'active' : ''?>">
        <i class="icon"><img src="./img/track.png" alt="track"></i>
        Track Order
      </a>
    </li>
    <li>
      <a href="#">
        <i class="icon"><img src="./img/logout.png" alt="logout"></i>
        Logout
      </a>
    </li>
  </ul>
</sidebar>