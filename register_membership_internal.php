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
                        <li class="breadcrumb-item"><a href="index.php" class="navbar-menu">หน้าหลัก</a></li>
                        <li class="breadcrumb-item"><a href="#" class="navbar-menu">สมัครสมาชิก</a></li>
                        <li class="breadcrumb-item active navbar-menu" aria-current="page">สมัครสมาชิกภายนอก</li>
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
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 p-2">
                            <label for="">ประเภทบุคลากร <span class="icon-red">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>เลือกประเภทผู้ใช้งาน</option>
                                <option value="1">บุคคลภายนอก</option>
                                <option value="2">บุคคลภายใน</option>
                                <option value="3">นิติบุคคล</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <label for="">ประเภทผู้ใช้งาน <span class="icon-red">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12  p-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>กรุณาเลือก</option>
                                <option value="1">บุคคลภายในภาครัฐ</option>
                                <option value="2">บุคคลภายนอกภาครัฐ</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 p-2">
                            <label for="">เลขประจำตัวประชาชน <span class="icon-red">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <input class="form-control" id="disabledInput" type="text"  maxlength="13">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <label for="">คำนำหน้า <span class="icon-red">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12  p-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>กรุณาเลือก</option>
                                <option value="1">นาง</option>
                                <option value="2">นางสาว</option>
                                <option value="3">นาย</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 p-2">
                            <label for="">ชื่อ (ไทย) <span class="icon-red">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <input class="form-control" id="disabledInput" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <label for="">นามสกุล (ไทย) <span class="icon-red">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12  p-2">
                            <input class="form-control" id="disabledInput" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 p-2">
                            <label for="">ชื่อ (อังกฤษ) <span class="icon-red">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <input class="form-control" id="disabledInput" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <label for="">นามสกุล (อังกฤษ) <span class="icon-red">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12  p-2">
                            <input class="form-control" id="disabledInput" type="text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-sm p-3 mb-5 bg-body rounded">
            <div class="row">
                <div class="col-xl-12">
                    <div class= "line-auto">
                        <h1 class="h-register-user">ข้อมูลสำหรับผู้ติดต่อ</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 p-2">
                            <label for="">เบอร์โทรศัพท์ <span class="icon-red">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 p-2">
                            <label for="">เบอร์โทรศัพท์สำรอง </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 p-2">
                            <label for="">อีเมล์ <span class="icon-red">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <input type="mail" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 p-2">
                            <label for="">อีเมล์สำรอง </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <input type="mail" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-sm p-3 mb-5 bg-body rounded">
            <div class="row">
                <div class="col-xl-12">
                    <div class= "line-auto">
                        <h1 class="h-register-user">ข้อมูลการเข้าสู่ระบบ</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 p-2">
                            <label for="">Username <span class="icon-red">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-sm-4 col-12 p-2">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 p-2">
                            <label for="">รหัสผ่าน <span class="icon-red">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="row">
                        <div class="col-xl-12 p-2">
                            <label for="">ยืนยันรหัสผ่าน  <span class="icon-red">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 col-12 p-2">
                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <h4>คำแนะนำ</h4>
                    <ol>
                        <li>รหัสผ่านต้องมีอย่างน้อย 8 ตัวอักษร และไม่เกิน 16 ตัวอักษร</li>
                        <li>รหัสผ่านต้องประกอบด้วยตัวเลขอารบิก (0-9) อย่างน้อย 1 ตัวอักษร</li>
                        <li>รหัสผ่านต้องประกอบด้วยตัวอักษรภาษาอังกฤษพิมพ์เล็ก (a-z) อย่างน้อย 1 ตัวอักษร</li>
                        <li>รหัสผ่านต้องประกอบด้วยตัวอักษรภาษาอังกฤษพิมพ์ใหญ่ (A-Z) อย่างน้อย 1 ตัวอักษร</li>
                        <li>ต้องประกอบด้วยสัญลักษณ์ ( ! " # $ % & ' ( ) * + , - . / : ; < = > ? @ [ \ ] ^ _` { | } ~ ) อย่างน้อย 1 ตัวอักษร</li>
                    </ol>
                </div>
            </div>
        </div>
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
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
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
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
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
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <button type="button" class="but-form-register" data-bs-toggle="modal" data-bs-target="#save_register">บันทึก</button>
                </div>
            </div>
        </div>
    </form>

<!-- Modal -->
<div class="modal fade" id="save_register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ยืนยันสมัครสมาชิก</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <small class="text-danger">* ระบบได้ทำการส่งหมายเลข OTP ไปยังอีเมล์ของคุณเรียบร้อยแล้ว</small>  
      </div>
      <div class="row">
            <div class="col-xl-12 text-center p-3">
                <button type="button" data-bs-toggle="modal" data-bs-target="#otp" data-bs-dismiss="modal" class="but-form-register">ยืนยันหมายเลข OTP</button>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- Modal otp -->
<div class="modal fade" id="otp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
          <div class="row">
               <div class="col-xl-12 text-center">
                    <h4>กรอกเลข OTP</h4>
               </div>
          </div>
          <div class="row">
                <div class="col-xl-12 text-center">
                    <input type="text" class="form-control" id="#" maxlength="6"  placeholder="รหัส OTP">
                    <small class="sub_text">
                        *กรุณากรอกรหัส OTP ที่ส่งไปยังอีกเมล์ xxxxxxxx@gmail.com
                    </small>
                </div>
          </div>
      </div>
      <div class="row">
            <div class="col-xl-12 text-center p-2"> 
                <button type="button" data-bs-toggle="modal" data-bs-target="#message_alert" data-bs-dismiss="modal"   class="but-form-register">ตกลง</button>
            </div>
        </div>
    </div>
  </div>
</div>



<!-- Modal แจ้งเตือน -->
<div class="modal fade" id="message_alert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <div class="row">
               <div class="col-xl-12 text-center">
                    <i class="fa-solid fa-check"></i>
               </div>
          </div>
          <div class="row">
               <div class="col-xl-12 text-center">
                     <p> สมัครสมาชิกเรียบร้อย</p>
               </div>
          </div>
      </div>
    </div>
  </div>
</div>


       
       

</div>
<?php include('footer.php') ?> 
<?php include ('combottom.php') ?>


