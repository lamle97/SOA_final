<?php
session_start();
if(!isset( $_SESSION['accountInfo'])){
    header("Location: login.php");
}
if(!isset($_SESSION['giohang'])){
    header("Location: login.php");
}

else{
    $giohang= $_SESSION['giohang'];
    $accInfo = $_SESSION['accountInfo'];
    $tmpGioHang = $giohang;


    if(isset($_REQUEST['placed'])){
        if($_REQUEST['placed'] == 'submit'){
            foreach ($tmpGioHang as $p) {
                $arr['order_detail'][] =$p;
            }
            $arr['userInfo']=$accInfo;
            $data = $arr;
            include_once('function.php');
            $_SESSION['respone'] = saveInfoOrder($data);
            unset($_SESSION['giohang']);
            header("Location: index.php");
            
        }
    }
}
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/checkout.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container wrapper">
    <div class="row cart-head">
        <div class="container">
            <div class="row">
                <p></p>
            </div>
            <div class="row">
                <div style="display: table; margin: auto;">
                    <span class="step step_complete"> <a href="#" class="check-bc">Cart</a> <span class="step_line step_complete"> </span> <span class="step_line backline"> </span> </span>
                    <span class="step step_complete"> <a href="#" class="check-bc">Checkout</a> <span class="step_line "> </span> <span class="step_line step_complete"> </span> </span>
                    <span class="step_thankyou check-bc step_complete">Thank you</span>
                </div>
            </div>
            <div class="row">
                <p></p>
            </div>
        </div>
    </div>
    <div class="row cart-body">
        <form class="form-horizontal" method="post" action="">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                <!--REVIEW ORDER-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Review Order <div class="pull-right"><small><a class="afix-1" href="cart.php">Edit Cart</a></small></div>
                    </div>
                    <div class="panel-body">

                        <?php

                        $count = 0;
                        $GrandTotal = 0;
                        foreach ($_SESSION['giohang'] as $p) {
                            $count = $count + 1;
                            $sum = $p['price'] * $p['soluong'];
                            $GrandTotal = $GrandTotal + $sum;
                            ?>
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="img/<?= $p['image'] ?>.png" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12"><?= $p['model'] ?></div>
                                    <div class="col-xs-12"><small>
                                            Màu : <?= $p['color'] ?> </br>
                                            Dung lượng : <?= $p['storage'] ?> GB </br>
                                            Đơn giá : <?= number_format($p['price'], 0) ?>đ
                                        </small>
                                    </div>
                                    <div class="col-xs-12"><small>Số lượng mua:<span><?= $p['soluong'] ?></span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6><span></span><?= number_format($sum, 0) ?>đ</h6>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                        <?php
                        }

                        ?>

                        <div class="form-group"><hr /></div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <strong>Order Total</strong>
                                <div class="pull-right"><span></span><span><?= number_format($GrandTotal, 0) ?>đ</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--REVIEW ORDER END-->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                <!--SHIPPING METHOD-->
                <div class="panel panel-info">
                    <div class="panel-heading">Address</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-12">
                                <h4>Shipping Address</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Full name:</strong></div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="name" value="<?= $accInfo['name'] ?>" disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12"><strong>Address:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="address" class="form-control" value="<?= $accInfo['address'] ?>" disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="zip_code" class="form-control" value="<?= $accInfo['ZIP'] ?>" disabled/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Phone Number:</strong></div>
                            <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="<?= $accInfo['phone'] ?>" disabled/></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Email Address:</strong></div>
                            <div class="col-md-12"><input type="text" name="email_address" class="form-control" value="<?= $accInfo['email'] ?>" disabled/></div>
                        </div>
                    </div>
                </div>
                <!--SHIPPING METHOD END-->
                <!--CREDIT CART PAYMENT-->
                <div class="panel panel-info">
                    <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Secure Payment</div>
                    <div class="panel-body">

                        <div class="form-group">

                            <div class="col-md-12">
                                <label class="checkbox-inline"><input type="checkbox" id ="agree" value="agree">Đồng ý thanh toán khi giao nhận trực tiếp hàng</label>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <button type="submit" class="btn btn-primary btn-submit-fix" id="submit" disabled name="placed" value="submit">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--CREDIT CART PAYMENT END-->
            </div>

        </form>
    </div>
    <div class="row cart-footer">

    </div>
</div>

<script>
    $('#agree').change(function() {
        if ($('#agree:checked').length) {
            $('#submit').removeAttr('disabled');
        } else {
            $('#submit').attr('disabled', 'disabled');
        }
    });
</script>