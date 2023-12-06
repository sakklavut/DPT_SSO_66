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
    <div class="row pt-2">
       <div class="col-xl-12">
            <div class="d-flex padding-nag">
                <div class="box_icon_book">
                    <i class="fa-solid fa-house-chimney"></i>
                </div>
                <div class="box_nag_menu">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-">
                            <li class="breadcrumb-item"><a href="index.php" class="navbar-menu">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active navbar-menu" aria-current="page">คำขอสิทธิ์เข้าใช้ระบบ</li>
                        </ol>
                    </nav>
                </div>
            </div>
       </div>
    </div>
    <div class="row">
       <hr class="line-color">
    </div>
    <div class="row">
       <div class="col-xl-12">
        <div class="d-flex justify-content-end">
                <div class="m-2">
                    <button type="button" class="but-add"><a href="add_possibility.php" class="add-possibility">เพิ่มข้อมูลขอใช้สิทธิ์</a></button>
                </div>
                <div class="m-2">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>จำนวนรายการ  10</option>
                        <option value="1">10</option>
                        <option value="2">20</option>
                        <option value="3">30</option>
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
                            <th scope="col" class="text-center">ลำดับ</th>
                            <th scope="col" style="width: 30%;">รายการระบบ</th>
                            <th scope="col">สถานะ</th>             
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="line-table">
                            <th scope="row" class="text-center">1</th>
                            <td>ระบบงานแผน</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p>รอผู้ดูแลระบบอนุมัติ</p>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-warning btn-table-edit">
                                            <a href="edit_possibility.php" class="text-table-edit">
                                                <i class="fa-solid fa-pen-to-square mx-2"></i>แก้ไข
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-success btn-table-details">
                                            <a href="view_possibility.php" class="text-table-view">
                                                <i class="fa-solid fa-magnifying-glass mx-2"></i> ดูรายละเอีนด
                                            </a>
                                        </button>
                                        <button class="btn btn-danger btn-table-delete" data-toggle="modal" data-target="#delete_but">
                                            <i class="fa-regular fa-trash-can mx-2"></i>ลบ
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="line-table">
                            <th scope="row" class="text-center">2</th>
                            <td>ระบบบริการตรวจสอบข้อมูลการขออนุญาตปลูกสร้างอาคารหรือสิ่งปลูกสร้าง</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>
                                       <p>ระบบอนุมัติ</p>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-warning btn-table-edit">
                                            <a href="edit_possibility.php" class="text-table-edit">
                                                <i class="fa-solid fa-pen-to-square mx-2"></i>แก้ไข
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-success btn-table-details">
                                            <a href="view_possibility.php" class="text-table-view">
                                                <i class="fa-solid fa-magnifying-glass mx-2"></i> ดูรายละเอีนด
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-table-delete" data-bs-toggle="modal" data-bs-target="#delete_but">
                                            <i class="fa-regular fa-trash-can mx-2"></i>ลบ
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="line-table">
                            <th scope="row" class="text-center">3</th>
                            <td>ระบบผู้รับจ้างงานก่อสร้าง</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>
                                       <p>ระบบอนุมัติ</p>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-warning btn-table-edit">
                                            <a href="edit_possibility.php" class="text-table-edit">
                                                <i class="fa-solid fa-pen-to-square mx-2"></i>แก้ไข
                                            </a>
                                        </button>
                                        <button type="button" class="btn  btn-success btn-table-details">
                                            <a href="view_possibility.php" class="text-table-view">
                                                <i class="fa-solid fa-magnifying-glass mx-2"></i> ดูรายละเอีนด
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-table-delete" data-bs-toggle="modal" data-bs-target="#delete_but">
                                            <i class="fa-regular fa-trash-can mx-2"></i>ลบ
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
                <button type="button" class="btn but-form-register" id="delete_but" data-toggle="modal" data-target="#message_delete">ยืนยันการลบ</button>
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


