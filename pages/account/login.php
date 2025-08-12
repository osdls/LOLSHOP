<?php
$pluem = new classadmin_bypluem;
$pluem2 = new classweb_bypluem;
$totaluser = $pluem->totaluser();
$soldproduct = $pluem2->soldproduct();
$allproduct = $pluem2->allproduct();

$readyproduct = $pluem2->readyproduct();
$web_config = $pluem2->web_config();
$show_card_other = $pluem2->show_card_other();
$show_card_productlimit = $pluem2->show_card_productlimit();
?>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card card-body" style="border-radius: 15px;">
                        <div id="return"></div>
                        <h3 class="text-center">เข้าสู่ระบบ</h3>
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
                            <br>
                            <br>
                            <button class="btn btn-success btn-block" id="submit_login" type="button"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</button>
                            <a class="btn btn-danger float-right" style="margin-top:10px;" id="btn" href="/register"><i class="fas fa-sign-in-alt"></i> สมัครสมาชิก</a>
                            <hr>
                            <div class="text-center" style="margin-top:20px;">
                                <div>สินค้าทั้งหมด: <?php echo $allproduct['total']; ?> | สินค้าที่ขายไปแล้ว: <?php echo $soldproduct['total']; ?> | สมาชิกทั้งหมด: <?php echo $totaluser['total']; ?> </div>
                                <i class="fas fa-code"></i> เว็บไซต์ LegacyShop.com								</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mt-5">
                <h2 class="text-center">สินค้าล่าสุด</h2>
                <hr class="bg-light">
            </div>
            <div class="row">
                <?php if(empty($show_card_productlimit)){ ?>
                    <div class="col-12 mt-2">
                        <h3 class='text-center'>ไม่มีสินค้า ณ ขณะนี้</h3>
                    </div>
                <?php } ?>
                <?php foreach($show_card_productlimit as $row){
                    $totalproduct = $pluem->totalproduct($row['id']);
                ?>
                <div class="col-sm-4 mt-2">
                    <div class="card" style="background-color: #292929;">
                        <img class="image_show_card" src="<?php echo $row['image']; ?>" width="100%">
                            <div class="card-body">
                                <div class="mt-2">
                                    <h5><?php echo $row['name']; ?></h5>
                                    <h6>ราคา :
                                        <span style="color: yellow;">
                                        <?php echo $row['price']; ?>
                                        </span> บาท
                                    </h6>
                                    <h6>สถานะสินค้า:
                                        <span>
                                            <?php
                                                if($totalproduct['total'] == "0"){
                                                    echo "<span class='badge bg-danger'>หมด</span>";
                                                }else{
                                                    echo "<span class='badge bg-success'>มีของ</span>";
                                                }
                                            ?>
                                        </span>
                                    </h6>
                                    <h6><i class="fas fa-box-open"></i> สินค้าในสต็อก : <?php echo $totalproduct['total']; ?> ชิ้น</h6>
                                    <h6>รายละเอียดสินค้า : <br><span style="color:#E71C1C;"><textarea disabled class="text-input-none"><?php echo $row['details']; ?></textarea></span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<script src="../assets/js/login.js"></script>