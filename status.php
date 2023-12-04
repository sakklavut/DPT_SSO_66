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
                        <li class="breadcrumb-item"><a href="status.php" class="navbar-menu">ติดตามสถานนะ</a></li>
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
        <div class="d-flex justify-content-end">
            <div class="my-2 mx-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>จำนวนรายการ  10</option>
                    <option value="1">10</option>
                    <option value="2">20</option>
                    <option value="3">30</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-table">
                            <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">รายการระบบที่ร้องขอ</th>
                                <th scope="col">วันที่</th>   
                                <th scope="col">สถานะ</th>        
                                <th scope="col">รายละเอียด</th>                  
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="line-table">
                                <th scope="row">1</th>
                                <td>ระบบงานแผน</td>
                                <td>20/10/2566</td>
                                <td><span class="text-status-oragne">กำลังดำเนินการ</span></td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button type="button" class="btn btn-success btn-table-details text-table-view" data-bs-toggle="modal" data-bs-target="#table_status" data-bs-dismiss="modal">
                                                    <i class="fa-solid fa-magnifying-glass mx-2"></i> ดูรายละเอีนด
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="line-table">
                                <th scope="row">2</th>
                                <td>ระบบบริการตรวจสอบข้อมูลการขออนุญาตปลูกสร้างอาคารหรือสิ่งปลูกสร้าง</td>
                                <td>19/10/2566</td>
                                <td><span class="text-status-green">ดำเนินการเสร็จสิ้น</span></td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button type="button" class="btn btn-success btn-table-details text-table-view" data-bs-toggle="modal" data-bs-target="#table_status" data-bs-dismiss="modal">
                                                    <i class="fa-solid fa-magnifying-glass mx-2"></i> ดูรายละเอีนด
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="line-table">
                                <th scope="row">3</th>
                                <td>ระบบเรียกช่าง ส่วนผู้ดูแลระบบจำแนกตามหน่วยงาน</td>
                                <td>08/10/2566</td>
                                <td><span class="text-status-red">ยกเลิกเสร็จสิ้น</span></td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button type="button" class="btn btn-success btn-table-details text-table-view" data-bs-toggle="modal" data-bs-target="#table_status" data-bs-dismiss="modal">
                                                    <i class="fa-solid fa-magnifying-glass mx-2"></i> ดูรายละเอีนด
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
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-table">
                            <tr>
                                <th scope="col">วันที่ส่งคำขอ</th>
                                <th scope="col">สถานะ</th>
                                <th scope="col">วันที่ได้สถานนะล่าสุด</th>   
                                <th scope="col">วันที่หมดอายุการใช้งาน</th>        
                                <th scope="col">ยกเลิกเสร็จสิ้น</th>                  
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


