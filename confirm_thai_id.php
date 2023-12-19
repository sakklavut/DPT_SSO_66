<?php include('comtop.php') ?>
<?php include('header_2.php') ?>



<div class="container main-content mt-3">
    <div class="row">
        <div class="col-xl-12">
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
                <div class="d-flex justify-content-center">
                    <div class="row">
                        <form>
                            <div class="row">
                                <label for="" class="col-xl-12 p-0">
                                    <h4 class="text-confirm">ช่องทางการลงทะเบียน</h4>
                                </label>
                                <input maxlength="13" type="text" class="col-xl-12 form-control" placeholder="ระบุเลขประจำตัวประชาชน">
                            </div>
                            <div class="row">
                                <div class="col-xl-12 text-center mt-2 mb-2">
                                        <button class="but-form-register" >
                                            <img src="assets/images/thai_id.png" alt="">
                                            <a href="view_qrcode_thai_id.php" class="text-thaid"> แอปพลิเคชัน ThaID </a>
                                        </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<?php include('footer.php') ?> 
<?php include ('combottom.php') ?>


