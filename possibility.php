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
                        <li class="breadcrumb-item"><a href="#" class="navbar-menu">คำขอสิทธิ์เข้าใช้ระบบ</a></li>
                        <li class="breadcrumb-item active navbar-menu" aria-current="page">คำขอสิทธิ์เข้าใช้ระบบ</li>
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
                <button type="button" class="but-add"><a href="add_possibility.php" class="add-possibility">เพิ่มข้อมูลขอใช้สิทธิ์</a></button>
            </div>
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
                            <th scope="col">รายการระบบ</th>
                            <th scope="col">สถานะ</th>             
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="line-table">
                            <th scope="row">1</th>
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
                                        <button type="button" class="btn btn-secondary btn-table-details"><i class="fa-solid fa-magnifying-glass mx-2"></i>ดูรายละเอีนด</button>
                                        <button type="button" class="btn btn-success btn-table-delete"><i class="fa-regular fa-trash-can mx-2"></i>ลบ</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="line-table">
                            <th scope="row">2</th>
                            <td>ระบบบริการตรวจสอบข้อมูลการขออนุญาตปลูกสร้างอาคารหรือสิ่งปลูกสร้าง</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>
                                       <p>ระบบอนุมัติ</p>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-warning btn-table-edit"><i class="fa-solid fa-pen-to-square mx-2"></i>แก้ไข</button>
                                        <button type="button" class="btn btn-secondary btn-table-details"><i class="fa-solid fa-magnifying-glass mx-2"></i>ดูรายละเอีนด</button>
                                        <button type="button" class="btn btn-success btn-table-delete"><i class="fa-regular fa-trash-can mx-2"></i>ลบ</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="line-table">
                            <th scope="row">3</th>
                            <td>ระบบผู้รับจ้างงานก่อสร้าง</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div>
                                       <p>ระบบอนุมัติ</p>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-warning btn-table-edit"><i class="fa-solid fa-pen-to-square mx-2"></i>แก้ไข</button>
                                        <button type="button" class="btn btn-secondary btn-table-details"><i class="fa-solid fa-magnifying-glass mx-2"></i>ดูรายละเอีนด</button>
                                        <button type="button" class="btn btn-success btn-table-delete"><i class="fa-regular fa-trash-can mx-2"></i>ลบ</button>
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

<?php include('footer.php') ?> 
<?php include ('combottom.php') ?>


