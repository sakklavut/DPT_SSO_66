<?php include('comtop.php') ?>
<?php include('header_2.php') ?>

<div class="container main-content  mt-3">
    <div class="row">
        <div class="d-flex">
            <div class="box_nag_menu">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="index.php" class="navbar-menu"><i class="fa-solid fa-house-chimney"></i>หน้าหลัก</a></li>
                        <li class="breadcrumb-item active navbar-menu" aria-current="page">ติดตามสถานนะ</li>
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
        <div class="d-flex justify-content-end">
                <div class="mb-1">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>จำนวนรายการ  10</option>
                        <option value="1">จำนวนรายการ 10</option>
                        <option value="2">จำนวนรายการ 20</option>
                        <option value="3">จำนวนรายการ 30</option>
                    </select>
                </div>
            </div>
       </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-table">
                            <tr>
                                <td scope="col">ลำดับ</td>
                                <td scope="col" style="width:30%;">รายการระบบที่ร้องขอ</td>
                                <td scope="col">วันที่</td>   
                                <td scope="col">สถานะ</td>        
                                <td scope="col">รายละเอียด</td>                  
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="line-table">
                                <td scope="row" class="text-center">1</td>
                                <td>ระบบงานแผน</td>
                                <td>20/10/2566</td>
                                <td><span class="text-status-oragne">กำลังดำเนินการ</span></td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button type="button" class="btn btn-success btn-table-details text-table-view" data-toggle="modal" data-target="#table_status">
                                                <i class="fa-solid fa-magnifying-glass"></i> ดูรายละเอีนด
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="line-table">
                                <td scope="row" class="text-center">2</td>
                                <td>ระบบบริการตรวจสอบข้อมูลการขออนุญาตปลูกสร้างอาคารหรือสิ่งปลูกสร้าง</td>
                                <td>19/10/2566</td>
                                <td><span class="text-status-green">ดำเนินการเสร็จสิ้น</span></td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button type="button" class="btn btn-success btn-table-details text-table-view" data-toggle="modal" data-target="#table_status">
                                                <i class="fa-solid fa-magnifying-glass"></i> ดูรายละเอีนด
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="line-table">
                                <td scope="row" class="text-center">3</td>
                                <td>ระบบเรียกช่าง ส่วนผู้ดูแลระบบจำแนกตามหน่วยงาน</td>
                                <td>08/10/2566</td>
                                <td><span class="text-status-red">ยกเลิกเสร็จสิ้น</span></td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button type="button" class="btn btn-success btn-table-details text-table-view" data-toggle="modal" data-target="#table_status">
                                                <i class="fa-solid fa-magnifying-glass"></i> ดูรายละเอีนด
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <div class="row">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item ">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">หน้าแรก</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item " aria-current="page">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">หน้าต่อไป</a>
                </li>
            </ul>
        </nav>
    </div>
</div>









<!-- Modal ตารางสถานะ    -->
<div class="modal fade" id="table_status" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">สถานะการดำเนินการขอสิทธ์การใช้งานระบบ SSO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-table">
                            <tr>
                                <td scope="col">วันที่ส่งคำขอ</td>
                                <td scope="col">สถานะ</td>
                                <td scope="col">วันที่ได้สถานนะล่าสุด</td>   
                                <td scope="col">วันที่หมดอายุการใช้งาน</td>        
                                <td scope="col">ยกเลิกเสร็จสิ้น</td>                  
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="line-table">
                                <td>12 ก.ย. 2566 15:19:34</td>
                                <td><span class="text-status-oragne">ดำเนินการเสร็จสิ้น</span></td>
                                <td>19 ก.ย. 2566 12:19:34</td>
                                <td>10 ธ.ค. 66</td>
                                <td>30 ก.ย. 2566 13:19:00</td>
                            </tr>
                            <tr class="line-table">
                                <td>20 ก.ย. 2566 11:00:22</td>
                                <td><span class="text-status-green">เสร็จสิ้น</span></td>
                                <td>19 ก.ย. 2566 12:19:34</td>
                                <td>12 ธ.ค. 66</td>
                                <td>30 ก.ย. 2566 13:19:00</td>
                            </tr>
                            <tr class="line-table">
                                <td>27 ก.ย. 2566 09:00:35</td>
                                <td><span class="text-status-red">หมดอายุการใช้งาน</span></td>
                                <td>19 ก.ย. 2566 12:19:34</td>
                                <td>9 ธ.ค. 66</td>
                                <td>30 ก.ย. 2566 13:19:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
  </div>
</div>









<?php include('footer.php') ?> 
<?php include ('combottom.php') ?>


