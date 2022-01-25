<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="Admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
   
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
            <a href="../Phase1/mvcmis/index.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Manage Missions</span>
          </a>
        </li>
        <li>
            <a href="../Phase1/vcm/index.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Manage volunteers</span>
          </a>
        </li>
        <li>
          <a href="../report/index.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Report</span>
          </a>
        </li>
        <li>
          <a href="../FactoryDp/Home.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Request List</span>
          </a>
        </li>
        <li>
          <a href="../add message/index.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Add Message</span>
          </a>
        </li>
        <li>
          <a href="../sendmessage/index.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Send Message</span>
          </a>
        </li>
        <li>
          <a href="../Phase1/Login/register.html">
            <i class='bx bx-user' ></i>
            <span class="links_name">Register Admins</span>
          </a>
        </li>
        <li>
          <a href="../imgproxy/index.php">
            <i class='bx bx-image' ></i>
            <span class="links_name">Retreive Image</span>
          </a>
        </li>
        <li>
          <a href="../don/index.php">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Donate</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../Phase1/Login/index.html">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">:DDDDDDDDDDD</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

