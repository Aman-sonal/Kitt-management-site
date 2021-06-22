<!-- <nav class="navbar navbar-dark navbar-expand-sm bg-dark fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="./Mainpage.php"> <img src="maxresdefault.jpg" class="img-fluid mr-5"
                    width="90" height="auto"></a>

            <div class="collapse navbar-collapse " id="Navbar1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span>Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span> About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span>Contact</a></li>
                </ul>
            </div>
            <button class="btn btn-success mx-2" type="button">Sign Out<span><i class="fa fa-sign-out mx-1" aria-hidden="true"></i></span></button>
        </div>
       
    </nav>
    -->

  <?php 
    if(isset($_SESSION['loggedin']) &&  $_SESSION['loggedin']==true)
    {
        $loggedin=true;
    }
    else $loggedin=false;
    if($loggedin){
          echo '<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="./Mainpage.php"><img src="maxresdefault.jpg" class="img-fluid mr-5"
                        width="90" height="auto"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 navhover">
            <li class="nav-item">
              <a class="nav-link active " aria-current="page" href="#"><span class="fa fa-home fa-lg mr-2"></span>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><span class="fa fa-info fa-lg mr-1"></span> About Us</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="#"><span class="fa fa-address-card fa-lg mr-2"></span>Contact</a>
            </li>
          </ul>
          <a class="btn btn-outline-success mx-2" href="mainPage/Mainpage.php" role="button">Sign Out <span><i class="fa fa-sign-out mx-1" aria-hidden="true"></i></span></a>
        </div>
      </div>
    </nav> ';
    }
?>