<?php include('comtop.php') ?>
<?php include('header_2.php') ?>
<div class="container main-content mt-3">
    <div class="row">
        <div class="d-flex">
            <div class="box_nag_menu">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="index.php" class="navbar-menu"><i class="fa-solid fa-house-chimney"></i>หน้าหลัก</a></li>
                        <li class="breadcrumb-item"><a href="possibility.php" class="navbar-menu">สมัครสมาชิก</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
       <hr class="line-color">
    </div>
       
    <div class="row">
        <div class="col-xl-12">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                   <?php include('register_membership.php') ?> 
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <?php include('register_membership.php') ?> 
                </div>
            </div>
        </div>
    </div>
</div>



<!-- <nav>
  <div class="nav nav-tabs" >
    <a class="nav-item nav-link active" >Home</a>
    <a class="nav-item nav-link" >Profile</a>

  </div>
</nav> -->








<?php include('footer.php') ?> 
<?php include ('combottom.php') ?>


