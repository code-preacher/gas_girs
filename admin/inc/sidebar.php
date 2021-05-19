
    <!-- Sidebar open -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fa fa-fw fa-tachometer"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-users"></i>
          <span>Users</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
         
          <a class="dropdown-item" href="view-user.php"><i class="fa fa-fw fa-eye"></i>View Users</a>
      
         
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-map-marker"></i>
          <span>Location</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        
         
           <a class="dropdown-item" href="add-loc.php"><i class="fa fa-fw fa-plus"></i>Add Location</a>
           <a class="dropdown-item" href="view-loc.php"><i class="fa fa-fw fa-eye"></i>View Location</a>
         
        </div>
      </li>


<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-comment"></i>
          <span>Feedback</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item" href="add-c.php"><i class="fa fa-fw fa-location-arrow"></i>Reply Feedback</a>
          <a class="dropdown-item" href="view-c.php"><i class="fa fa-fw fa-eye"></i>View Feedback</a>
      
         
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="profile.php">
          <i class="fa fa-fw fa-user"></i>
          <span>Profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../inc/logout.php" data-toggle="modal" data-target="#logoutModal">
          <i class="fa fa-fw fa-arrow-right"></i>
          <span>Logout</span></a>
      </li>
    </ul>

    <!-- Sidebar close -->