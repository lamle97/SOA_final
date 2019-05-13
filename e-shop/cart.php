<?php
ob_start();
session_start();
include_once('function.php');
//checkuser
if(!isset( $_SESSION['accountInfo'])){
    header("Location: login.php");
}
if(!isset($_SESSION['customer'])){
    header("Location: login.php");
}
if(isset($_GET['pid'])) {
    if($_GET['pid'] != -1){
        if(isset($_REQUEST['quantity'])){
            $soluongAdd = $_REQUEST['quantity'];
        }

        $pid = $_GET['pid'];
        echo $pid;
        $dataRequest = array('idDetail' => $_GET['pid']);
        $product = json_decode(getDetailInfo($dataRequest), true);
        $maxQuantity = $product['maxQuantity'];

        $giohang = null;
        if (isset($_SESSION['giohang'])) {
            $giohang = $_SESSION['giohang'];
        } else {

            $giohang = array();
        }

        if (isset($giohang[$pid])) {
            if(isset($_REQUEST['quantityCurrent'])){
                $sl = $_REQUEST['quantityCurrent'];
                //echo $sl;
                $giohang[$pid]['soluong'] = $sl;
            }else{
                //soluong_cu
                $tmp =$soluongAdd + $giohang[$pid]['soluong'];
                if ($tmp <= $maxQuantity ) {
                    $sl = $tmp;
                    echo $sl;
                    $giohang[$pid]['soluong'] = $sl;
                }
            }

        } else {
            $product['soluong'] = $soluongAdd;
            $giohang[$pid] = $product;
        }
        $_SESSION['giohang'] = $giohang;
    }



}
else $giohang = null;
//call
if(isset($_REQUEST['idBrand'])){
    $_POST['idBrand'] = $_REQUEST['idBrand'];
    $dataRequest =  array('idBrand'=>$_POST['idBrand']);
    $ModelList =json_decode(getModelByBrand($dataRequest),true);
}
else{
    $ModelList =json_decode(getModels(),true);
}
$categories = json_decode(getBrands(),true);



?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include_once 'head.php';?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php include_once 'header.php';?>
  <!-- /category nav -->
    <!-- menu nav -->
    <div class="container">
        <nav class="navbar navbar-inverse nav-center">
          <div class="navbar-collapse">
            <ul class="nav navbar-nav menu-list">
              <li>
                <a href="index.php">Trang chủ</a> 
              </li>
              <?php
                foreach ($categories as $key => $value) { ?>
                <li>
                  <a href="index.php?idBrand=<?php echo $value["idBrand"]; ?>"> 
                    <i class="glyphicon glyphicon-phone" > </i> 
                    <?php echo $value["brandName"]; ?> 
                  </a>
                </li>
              <?php
            }?>
            </ul>
          </div>
        </nav>
    </div>


<div class="container">
    <!-- Left Panel -->
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php

                if (isset($_SESSION['Staff'])) {

                $user = $_SESSION['Staff'];

                ?>
                <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Quản lý hóa đơn</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="makeinvoice.php">Lập hóa đơn</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Xem hóa đơn</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                    </ul>
                </li>

                <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font
                                Awesome</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a>
                        </li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                        <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a>
                        </li>
                    </ul>
                </li>
                <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php
            }
            ?>

        </div><!-- /.navbar-collapse -->

</div>


<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
  <!--   <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-12">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">


                    <?php

                    if (isset($_SESSION['customer'])) {
                        $customer = $_SESSION['customer'];
                        ?>
                        Hello <?php echo $customer?>
                        <div class="dropdown" style="float: right" >
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <a href="cart.php"> Your Cart</a>
                                <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>

                    <?php
                    }

                    ?>
                    <?php

                    if (isset($_SESSION['Staff'])) {

                        $staff = $_SESSION['Staff'];


                        ?>
                        Hello Staff <?php echo $staff?>
                        <div class="dropdown" style="float: right" >
                            <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>

                    <?php
                    }
                    else if(!isset($_SESSION['Staff']) && !isset($_SESSION['customer'])){
                        ?>

                        <a class="nav-link" href="login.php">Login</a>

                    <?php
                    }
                    ?>


                </div>
            </div>

        </div>

    </header> --><!-- /header -->
    <!-- Header-->

    <!-- <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container">  <div class="content mt-3">
        <div class="row">
           
        <?php
        if(isset($_SESSION['giohang'])) {
            ?>
            <div class="contain">
            <table border="2" bordercolor ="orange" >
        <div class="shopping-cart">
        <tr>
                <th class="product-image">Image</th>
                <th class="product-details">Product</th>
                <th class="product-price">Price </th>
                <th class="product-quantity">Quantity</th>
                <th class="product-line-price">PriceTol</th>
                <th class="product-removal">Remove</th>
               
        </tr>
        <tbody>
        <tr>
            <?php

            $count = 0;
            $GrandTotal = 0;
            foreach ($_SESSION['giohang'] as $p) {
                //echo $p['img'];
                $count = $count + 1;
                $sum = $p['price'] * $p['soluong'];
                $GrandTotal = $GrandTotal + $sum;
                ?>
                <div class="product">
                    <td class="product-image">
                        <img src="img/<?= $p["image"]; ?>.png" height=150 width=200></img>
                    </td>
                    <td class="product-details" height =100 width =100>
                        <div class="product-title" text ="text-align"><?= $p['model'] ?></div>
                        <p class="product-description" style="width: 700px">
                            Màu : <?= $p['color'] ?> </br>
                            Dung lượng : <?= $p['storage'] ?> GB
                        </p>
                    </td>
                    <td class="product-price"><?= number_format($p['price'], 0) ?>đ</td>
                    <td class="product-quantity">
                        <input id ="quan-pro-<?=  $count ?>" type="number" value="<?= $p['soluong'] ?>" min="1" max="<?= $p['maxQuantity'] ?>"
                               onchange="checkQuantity(<?=  $count ?>,<?= $p['idDetail'] ?>,<?= $p['maxQuantity'] ?>)">
                    </td>
                    <td class="product-removal">
                        <button class="remove-product" onclick="xoaCart(<?= $p['idDetail'] ?>)">
                            Remove
                        </button>
                    </td>
                    <td class="product-line-price"><?= number_format($sum, 0) ?></td>
                    </tr>
                </div>
            <?php
            }?>
<tbody>
            </table>
            </div>
            <table>
            
            <tr>
            <th class="product-line-price">Total</th>
            </tr>
        
            

            <div class="totals">

                <td class="totals-item totals-item-total">
                    <label>Grand Total</label>
                    <div class="totals-value" id="cart-total"><?= number_format($GrandTotal, 0) ?></div>
                </td>
            </div>

            <button class="checkout" onclick="checkout()">Checkout</button>

        </div>
            <?php
        }
    ?> </div>
    </table>
  
        </div>
    </div>
    <!-- /.row -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


<script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script>
    ( function ( $ ) {
        "use strict";

        jQuery( '#vmap' ).vectorMap( {
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: [ '#1de9b6', '#03a9f5' ],
            normalizeFunction: 'polynomial'
        } );
    } )( jQuery );
</script>

</body>
</html>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/cartJS.js"></script>



<script>
    function xoaCart(idP){
        window.location = "deleteCart.php?idP="+idP;
    }
</script>

<script>
    function checkout(){
	        window.location = "checkout.php";
    }
</script>

<script>
    function checkQuantity(index,id,maxQuantity){
        var quatity = Number($("#quan-pro-"+index).val());
        if(quatity > maxQuantity){
            alert("Sàn phẩm này chỉ còn "+ maxQuantity + " sản phẩm");
            window.location = "cart.php";
        }
        else if(quatity <= 0){
            window.location = "cart.php";
        }
        else{
            window.location ="cart.php?pid="+id +"&quantityCurrent=" + quatity;
        }
    }
</script>