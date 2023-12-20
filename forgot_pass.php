<?php include('comtop.php') ?>


<div class="bg-top-regiser">

</div>
<div class="container main-content mt-3" id="confirm_thai_id">
    <div class="row" id="box">
        <div class="col-xl-12 align-self-center">
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
                <div class="d-flex justify-content-center">
                    <div class="row">
                        <form>
                            <div class="row">
                                <label for="" class="col-xl-12 p-0">
                                    <h4 class="text-confirm">ลืมรหัสผ่าน</h4>
                                </label>
                                <input maxlength="13" type="text" class="col-xl-12 form-control" placeholder="ระบุเลขประจำตัวประชาชน">
                            </div>
                            <div class="row">
                                <div class="col-xl-12 text-center mt-2 mb-2">
                                        <button class="but-form-register">
                                            <a href="view_qrcode_thai_id.php" class="text-thaid">ยืนยันตัวตน ด้วย แอปพลิเคชัน ThaID </a>
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


<?php include ('combottom.php') ?>


