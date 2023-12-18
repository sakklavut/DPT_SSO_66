<?php include('comtop.php') ?>
<?php include('header_2.php') ?>
<div class="container main-content mt-3">
    <div class="row">
        <div class="d-flex">
            <div class="box_nag_menu">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="index.php" class="navbar-menu"><i class="fa-solid fa-house-chimney"></i>หน้าหลัก</a></li>
                        <li class="breadcrumb-item"><a href="possibility.php" class="navbar-menu">คำขอสิทธิ์เข้าใช้ระบบ</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
       <hr class="line-color">
    </div>
    <div class="row mb-1">
       <div class="col-xl-12">
        <div class="d-flex justify-content-end">
                <div class="mr-1">
                    <button type="button" class="but-add"><a href="add_possibility.php" class="add-possibility">เพิ่มข้อมูลขอใช้สิทธิ์</a></button>
                </div>
                <div class="">
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
                            <td scope="col" class="text-center">ลำดับ</td>
                            <td scope="col" style="width: 30%;">รายการระบบ</td>
                            <td scope="col">สถานะ</td>             
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="line-table">
                            <td scope="row" class="text-center">1</td>
                            <td>ระบบงานแผน</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p>รอผู้ดูแลระบบอนุมัติ</p>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-warning btn-table-edit">
                                            <a href="edit_possibility.php" class="text-table-edit">
                                                <i class="fa-solid fa-pen-to-square mr-1"></i>แก้ไข
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-success btn-table-details">
                                            <a href="view_possibility.php" class="text-table-view">
                                                <i class="fa-solid fa-magnifying-glass mr-1"></i> ดูรายละเอีนด
                                            </a>
                                        </button>
                                        <button class="btn btn-danger btn-table-delete" data-toggle="modal" data-target="#delete_but">
                                            <i class="fa-regular fa-trash-can mr-1"></i>ลบ
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="line-table">
                            <td scope="row" class="text-center">2</td>
                            <td>ระบบบริการตรวจสอบข้อมูลการขออนุญาตปลูกสร้างอาคารหรือสิ่งปลูกสร้าง</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>
                                       <p>ระบบอนุมัติ</p>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-warning btn-table-edit">
                                            <a href="edit_possibility.php" class="text-table-edit">
                                                <i class="fa-solid fa-pen-to-square mr-1"></i>แก้ไข
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-success btn-table-details">
                                            <a href="view_possibility.php" class="text-table-view">
                                                <i class="fa-solid fa-magnifying-glass mr-1"></i> ดูรายละเอีนด
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-table-delete" data-bs-toggle="modal" data-bs-target="#delete_but">
                                            <i class="fa-regular fa-trash-can mr-1"></i>ลบ
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="line-table">
                            <td scope="row" class="text-center">3</td>
                            <td>ระบบผู้รับจ้างงานก่อสร้าง</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>
                                       <p>ระบบอนุมัติ</p>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-warning btn-table-edit">
                                            <a href="edit_possibility.php" class="text-table-edit">
                                                <i class="fa-solid fa-pen-to-square mr-1"></i>แก้ไข
                                            </a>
                                        </button>
                                        <button type="button" class="btn  btn-success btn-table-details">
                                            <a href="view_possibility.php" class="text-table-view">
                                                <i class="fa-solid fa-magnifying-glass mr-1"></i> ดูรายละเอีนด
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-table-delete" data-bs-toggle="modal" data-bs-target="#delete_but">
                                            <i class="fa-regular fa-trash-can mr-1"></i>ลบ
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


<!-- Modal delete_but -->
<div class="modal fade" id="delete_but" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body text-center">
         <small class="text-danger">* ยืนยันการลบคำขอสิทธิ์เข้าใช้งานระบบ</small>  
      </div>
        <div  class="row">
            <div class="col-xl-12 text-center p-3">
                <button type="button" class="btn but-form-register" data-dismiss="modal" id="delete_but" data-toggle="modal" data-target="#message_delete">ยืนยันการลบ</button>
                <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#message_delete" data-bs-dismiss="modal" class="but-form-register">ยืนยันการลบ</button> -->
            </div>
        </div>
    </div>
  </div>
</div>
  
<!-- Modal ยืนยันลบ  -->
<div class="modal fade" id="message_delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                     <p>ลบคำขอสิทธิ์เข้าใช้ระบบเสร็จสิ้น</p>
               </div>
          </div>
      </div>
    </div>
  </div>
</div>









<?php include('footer.php') ?> 
<?php include ('combottom.php') ?>


