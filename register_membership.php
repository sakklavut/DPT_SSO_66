<?php include('comtop.php') ?>
<?php include('header.php') ?>
<div class="box-content">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center p-3">
                <h1 class="text-white text-sso">ระบบ Portal (Single Sing - on SSO)</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="d-flex">
            <div class="box_icon_book">
                <i class="fa-solid fa-address-book"></i>
            </div>
            <div class="box_nag_menu">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="navbar-menu">หน้าหลัก</a></li>
                        <li class="breadcrumb-item"><a href="#" class="navbar-menu">สมัครสมาชิก</a></li>
                        <li class="breadcrumb-item active navbar-menu" aria-current="page">สมัครสมาชิก</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
       <hr class="line-color">
    </div>
    <form action="">
        <div class="shadow-sm p-3 mb-5 bg-body rounded">
            <div class="row">
                <div class="col-xl-12">
                    <div class= "line-auto">
                        <h1 class="h-register-user">ข้อมูลผู้ใช้งาน</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 p-2">
                    <label for="">ประเภทบุคลากร <span class="icon-red">*</span></label>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-12 col-sm-4 col-md-4 p-2">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>เลือกประเภทผู้ใช้งาน</option>
                        <option value="1">บุคคลภายนอก</option>
                        <option value="2">บุคคลภายใน</option>
                        <option value="3">นิติบุคคล</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 p-2">
                            <label for="">คำนำหน้าชื่อ</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <input class="form-control" id="disabledInput" type="text" placeholder=" " disabled>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <label for="">ชื่อบัญชีผู้ใช้ (เลขประจำตัวประชาชน)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12  p-2">
                            <input class="form-control" id="disabledInput" type="text" placeholder=" " disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 p-2">
                            <label for="">ชื่อ (ไทย)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <input class="form-control" id="disabledInput" type="text" placeholder=" " disabled>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <label for="">นามสกุล (ไทย)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12  p-2">
                            <input class="form-control" id="disabledInput" type="text" placeholder=" " disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 p-2">
                            <label for="">ชื่อ (อังกฤษ)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <input class="form-control" id="disabledInput" type="text" placeholder=" " disabled>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <label for="">นามสกุล (อังกฤษ)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12  p-2">
                            <input class="form-control" id="disabledInput" type="text" placeholder=" " disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>




        
       
       

</div>
<?php include('footer.php') ?> 
<?php include ('combottom.php') ?>


