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
                <i class="fa-solid fa-house-chimney"></i>
            </div>
            <div class="box_nag_menu">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="navbar-menu">หน้าหลัก</a></li>
                        <li class="breadcrumb-item"><a href="possibility.php" class="navbar-menu">คำขอสิทธิ์เข้าใช้ระบบ</a></li>
                        <li class="breadcrumb-item active navbar-menu" aria-current="page">แก้ไขคำขอสิทธิ์เข้าใช้งาน</li>
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
                        <h1 class="h-register-user">ระบบที่ต้องการขอสิทธิ์การใช้งาน</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 p-2 mt-3">
                    <h4 class="text-support">ระบบสนับสนุนการปฏิบัติงาน</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-3 p-2">
                    <div class="box-support p-3" title="ระบบ One DPT">
                        <div class="row">
                            <div class="col-xl-2 col-sm-2 col-2 text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                            </div>
                            <div class="col-xl-10 col-sm-10 col-10">
                                <label for="">ระบบ One DPT</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 p-2">
                    <div class="box-support p-3" title="ระบบครุภัณฑ์">
                        <div class="row">
                            <div class="col-xl-2 col-2 text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                            </div>
                            <div class="col-xl-10 col-10">
                                <label for="">ระบบครุภัณฑ์</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6  col-lg-3 p-2">
                    <div class="box-support p-3" title="ระบบผู้รับจ้างงานก่อสร้าง">
                        <div class="row">
                            <div class="col-xl-2 col-2 text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                            </div>
                            <div class="col-xl-10 col-10">
                                <label for="">ระบบผู้รับจ้างงานก่อสร้าง</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6  col-lg-3 p-2">
                    <div class="box-support p-3" title="ระบบถ่ายทอดสด (DPT Live)">
                        <div class="row">
                            <div class="col-xl-2 col-2 text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                            </div>
                            <div class="col-xl-10 col-10">
                                <label for="">ระบบถ่ายทอดสด (DPT Live) </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-3 p-2">
                    <div class="box-support p-3" title="ระบบรายงานการรับรองการตรวจสอบอาคาร">
                        <div class="row">
                            <div class="col-xl-2 col-2 text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                            </div>
                            <div class="col-xl-10 col-10">
                                <label for="">ระบบรายงานการรับรองการตรวจสอบอาคาร</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 p-2">
                    <div class="box-support p-3" title="ระบบ E-learning">
                        <div class="row">
                            <div class="col-xl-2 col-2 text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                            </div>
                            <div class="col-xl-10 col-10">
                                <label for="">ระบบ E-learning</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 p-2">
                    <div class="box-support p-3" title="ระบบการประชุม(DPT e-Meeting)">
                        <div class="row">
                            <div class="col-xl-2 col-2 text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                            </div>
                            <div class="col-xl-10 col-10">
                                <label for="">ระบบการประชุม(DPT e-Meeting)</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 p-2">
                    <div class="box-support p-3" title="แพลตฟอร์มข้อมูลโยธาธิการและผังเมืองกลาง">
                        <div class="row">
                            <div class="col-xl-2 col-2 text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                            </div>
                            <div class="col-xl-10 col-10">
                                <label for="">แพลตฟอร์มข้อมูลโยธาธิการและผังเมืองกลาง </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 p-2 mt-3">
                    <h4 class="text-service">ระบบบริการภายใน</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-3 p-2">
                    <div class="box-service p-3" title="ระบบสมุดโทรศัพท์">
                        <div class="row">
                            <div class="col-xl-2 col-2 text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                            </div>
                            <div class="col-xl-10 col-10">
                                <label for="">ระบบสมุดโทรศัพท์</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 p-2">
                    <div class="box-service p-3" title="ระบบ Intranet">
                        <div class="row">
                            <div class="col-xl-2 col-2 text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                            </div>
                            <div class="col-xl-10 col-10">
                                <label for="">ระบบ Intranet</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 p-2">
                    <div class="box-service p-3" title="ระบบ E-slip">
                        <div class="row">
                            <div class="col-xl-2 col-2 text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                            </div>
                            <div class="col-xl-10 col-10">
                                <label for="">ระบบ E-slip</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 p-2 mt-3">
                    <h4 class="text-management">ระบบจัดการเพื่อบริการภายนอก</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-3 p-2">
                    <div class="box-management p-3" title="ระบบจัดซื้อจัดจ้าง">
                        <div class="row">
                            <div class="col-xl-2 col-2 text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                            </div>
                            <div class="col-xl-10 col-10">
                                <label for="">ระบบจัดซื้อจัดจ้าง</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 p-2">
                    <div class="box-management p-3 " title="ระบบเว็บไซต์กรมโยธาธิการและผังเมือง">
                        <div class="row">
                            <div class="col-xl-2 col-2 text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                            </div>
                            <div class="col-xl-10 col-10">
                                <label for="">ระบบเว็บไซต์กรมโยธาธิการและผังเมือง</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 text-center">
                <button type="button" class="but-form-register">บันทึก</button>
            </div>
        </div>
   </form>
</div>

<?php include('footer.php') ?> 
<?php include ('combottom.php') ?>


