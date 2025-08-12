<?php
$pluem = new classadmin_bypluem;
$pluem2 = new classweb_bypluem;
$totaluser = $pluem->totaluser();
$soldproduct = $pluem2->soldproduct();
$allproduct = $pluem2->allproduct();
?>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card card-body" style="border-radius: 15px;">
                        <div id="return"></div>
                        <h3 class="text-center">สมัครสมาชิก</h3>
                            <hr class="bg-light">
                            <div class="text-left mt-1">
                                <font color="lime"><i class="fas fa-chevron-circle-right"></i></font> ชื่อผู้ใช้
                            </div>
                            <div class="input-group">
                                <input class="form-control imput-login" name="username" id="username" type="username" placeholder="Username" required="">
                            </div>
                            <div class="text-left mt-4">
                                <font color="lime"><i class="fas fa-chevron-circle-right"></i></font> รหัสผ่าน
                            </div>
                            <div class="input-group">
                                <input class="form-control imput-login" name="password" id="password" type="password" placeholder="Password" required="">
                            </div>
                            <div class="text-left mt-4">
                                <font color="lime"><i class="fas fa-chevron-circle-right"></i></font> ยืนยันรหัสผ่าน
                            </div>
                            <div class="input-group">
                                <input class="form-control imput-login" name="password" id="password_cm" type="password" placeholder="ConfirmPassword" required="">
                            </div>
                            <br>
                            <br>
                            <button class="btn btn-success btn-block" id="submit_register" type="button"><i class="fas fa-sign-in-alt"></i> สมัครสมาชิก</button>
                            <a class="btn btn-danger float-right" style="margin-top:10px;" id="btn" href="/login"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</a>
                            <hr>
                            <div class="text-center" style="margin-top:20px;">
                                <div>สินค้าทั้งหมด: <?php echo $allproduct['total']; ?> | สินค้าที่ขายไปแล้ว: <?php echo $soldproduct['total']; ?> | สมาชิกทั้งหมด: <?php echo $totaluser['total']; ?> </div>
                                <i class="fas fa-code"></i> เว็บไซต์ LegacyShop.com								</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="../assets/js/register.js"></script>