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
                                    <button class="but-form-register" >ยืนยันตัวตน</button>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-xl-12 p-0">
                                    <h4 class="text-confirm">รูปแบบการพิสูจน์ตัวตน</h4>
                                </div>
                            </div> -->
                            <!-- <div class="row">
                                <div class="d-flex justify-content-center">
                                    <button class="but-form-register">
                                        <div class="mr-2">
                                            <img src="assets/images/thai_id.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="mt-2">
                                            <p class="m-0">แอปพลิเคชัน ThaID</p>
                                        </div>
                                    </button>
                                </div>
                            </div> -->
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="but-form-register" data-toggle="modal" data-target="#thai_id">
                        <div>
                            <img src="assets/images/thai_id.png" class="img-fluid" alt="">
                        </div>
                        <div>
                            <p class="m-0">แอปพลิเคชัน ThaID</p>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal thai_id -->
<div class="modal fade" id="thai_id" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-xl-12">
                <img src="assets/images/QR.png" class="img-fluid" alt="">
            </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include('footer.php') ?> 
<?php include ('combottom.php') ?>


