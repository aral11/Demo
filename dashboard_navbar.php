<nav class="navbar navbar-inverse" style="width: 100%; background-color: cornflowerblue;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="color: white;">
        <li><a style="color:white;" href="dashboard.php"><i></i style="color: white;">  Dashboard</a></li>
        <li><a style="color:white;" href="create-project.php"><i></i style="color: black;">  Project</a></li>
        <li><a style="color:white;" href="create-student.php"><i></i style="color: white;">  Employee</a></li>
         <li class="dropdown">
          <a style="color:white;" class="dropdown-toggle" data-toggle="dropdown" href="#"><i></i> Manage<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="user.php">Add User</a></li>
          </ul>
        </li>
      </ul>
      <a class="navbar-brand" href="dashboard.php" style="color:white; text-align:center; margin-left: 169px;"><?php echo PROJECT_NAME; ?></a>
      <ul class="nav navbar-nav navbar-right">
        <li><a style="color:white;" href="logout.php"><span class="fa fa-user"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>