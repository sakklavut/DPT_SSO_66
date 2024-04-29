<?php include('comtop.php') ?>
<?php include('header_2.php') ?>
<style>
    .btn-pass{
        background-color: #7B2B2A !important;
        border: #7B2B2A !important;
    }
    .fa-eye{
        color: #fff1ff;
    }
    .fa-eye-slash{
        color: #fff1ff;
    }
</style>
<div class="container main-content">
    <div class="row">
        <div class="col-xl-12 shadow-sm p-3">
            <div class="row">
                <div class="col-xl-12">
                    <h4>เปลี่ยนรหัสผ่าน</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <h6>คำแนะนำการเปลี่ยนรหัสผ่าน</h6>
                    <ul>
                        <li>
                            ต้องมีอย่างน้อย 8 ตัวอักษร และไม่เกิน 16 ตัวอักษร
                        </li>
                        <li>
                            รหัสผ่านต้องประกอบด้วยตัวเลขอารบิก (0-9) อย่างน้อย 1 ตัวอักษร
                        </li>
                        <li>
                            รหัสผ่านต้องประกอบด้วยตัวอักษรภาษาอังกฤษพิมพ์เล็ก (a-z) อย่างน้อย 1 ตัวอักษร
                        </li>
                        <li>
                            รหัสผ่านต้องประกอบด้วยตัวอักษรภาษาอังกฤษพิมพ์ใหญ่ (A-Z) อย่างน้อย 1 ตัวอักษร
                        </li>
                        <li>
                            ต้องประกอบด้วยสัญลักษณ์ ( ! " # $ % & ' ( ) * + , - . / : ; < = > ? @ [ \ ] ^ _` { | } ~ ) อย่างน้อย 1 ตัวอักษร
                        </li>
                    </ul>
                </div>
                <div class="col-xl-6">
                    <div class="shadow-sm p-3">
                        <div class="row">
                            <div class="col-xl-12">
                                <label for="">รหัสผ่านเดิม</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control pass-swap" placeholder="รหัสผ่านเดิม">        
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <label for="">รหัสผ่านใหม่</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control pass-swap" placeholder="รหัสผ่านใหม่">
                                    <div class="input-group-append">
                                        <button class="btn btn-pass">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </div>            
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <label for="">ยันยันรหัสผ่านใหม่</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control pass-swap" placeholder="ยันยันรหัสผ่านใหม่">
                                    <div class="input-group-append">
                                        <button class="btn btn-pass">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </div>            
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 mt-2 mb-2">
                                <button type="button" class="btn btn-success w-100">ยืนยัน</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 mt-2 mb-2">
                            <button type="button" class="btn btn-outline-secondary w-100">ยกเลิก</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   















<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>Document</title> 
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" >
</head>
<body>
   
   

  
<script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function(){
    // ใช้วิธีการ สลับ type 
     $(document.body).on("click",".btn-toggle-pass",function(){
        let ele = $(this).prev(".pass-swap");
        let condCheck = $(this).text();
        $(this).text((condCheck=='Show')?'Hide':'Show');
        let swap_attr = (ele.attr("type")=="password")?"text":"password";
        console.log(ele.attr("type")); 
        ele.attr("type",swap_attr);
     });
  
     // กรณีใช้ร่วมกับ bootstrap และ fontawesome 
     $(document.body).on("click","[class*='fa-eye']",function(){
         $(this).toggleClass("fa-eye-slash fa-eye");  
         let ele = $(this).closest(".input-group-append").siblings(".pass-swap");
         let swap_attr = (ele.attr("type")=="password")?"text":"password";
         ele.attr("type",swap_attr);         
     });     
});
</script>
</body>
</html>
<?php include('footer.php') ?> 
<?php include ('combottom.php') ?>


