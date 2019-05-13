<?php
ob_start();
session_start();
include_once('function.php');
if(isset($_REQUEST['idBrand'])){
    $_POST['idBrand'] = $_REQUEST['idBrand'];
    $dataRequest =  array('idBrand'=>$_POST['idBrand']);
    $ModelList =json_decode(getModelsByBrand($dataRequest),true);
}
else{
    $ModelList =json_decode(getModels(),true);
}
$categories = json_decode(getBrands(),true);
$firstPrice = 0;

?>

<?php
  
if(isset($_REQUEST['ModelId'])){
    include_once('function.php');
    $_POST['ModelId'] = $_REQUEST['ModelId'];
    $_POST['StorageId'] =$_REQUEST['StorageId'];
    $_POST['ColorId'] =$_REQUEST['ColorId'];
    $dataRequest =  array('idModel'=>$_POST['ModelId'],'idStorage'=>$_POST['StorageId'],'idColor'=>$_POST['ColorId']);
    $idDetail = json_decode(getDetail($dataRequest,true));

    echo $idDetail;
    if($idDetail != -1)
    {
        if($_REQUEST['quantity'] <= $_REQUEST['maxQuant'])
        {
            header('Location: cart.php?pid='.$idDetail.'&quantity='.$_REQUEST['quantity']);
        }else{
            $_SESSION['error'] = "Vui lòng chọn màu và dung lượng";
            header('Location: detailModel.php?idModel='.$_REQUEST['ModelId']);
        }
    }else{
        $_SESSION['error'] = "Vui lòng chọn màu và dung lượng";
        header('Location: detailModel.php?idModel='.$_REQUEST['ModelId']);
    }
}
if(isset($_REQUEST['idModel'])){

    $_POST['idModel'] = $_REQUEST['idModel'];
    $dataRequest =  array('idModel'=>$_POST['idModel']);
    include_once('function.php');
    $infoModel = json_decode(getModelByID($dataRequest),true);
    $colors = json_decode(getAllColorOfModel($dataRequest),true);
    $Storage_price = json_decode(getAllStorageOfModel($dataRequest),true);
}
?>
<!DOCTYPE html>
<html lang="en">

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
  <!-- HOME -->
  
<!doctype html>
<html lang="vi">
<head>
    <title>Detail</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="publisher" href="https://plus.google.com/+Thegioididongdotcom/posts" />
    <link rel="author" href="https://plus.google.com/+Thegioididongdotcom/posts" />
    <meta property="og:site_name" content="Thegioididong.com" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="fb:pages" content="214993791879039" />
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="https://cdn.tgdd.vn/">
    <link rel="dns-prefetch" href="https://cdn1.tgdd.vn/">
    <link rel="dns-prefetch" href="https://cdn2.tgdd.vn/">
    <link rel="dns-prefetch" href="https://cdn3.tgdd.vn/">
    <link rel="dns-prefetch" href="https://cdn4.tgdd.vn/">
    <link href="css/TGGDStyle.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>

<div class="container">
  <div class="rowtop">
      <h1>Điện thoại <?php echo $infoModel["model_name"]; ?></h1>
  </div>

    <div class="clr"></div>

    <div class="rowdetail" id="normalproduct">
        <aside class="picture">
          <div class="row">
            <div class="col-md-6">
              <img src="img/<?php echo $infoModel["img"]; ?>.png" alt=""  style = "width: 100%">
            </div>
            <div class="col-md-6">
              <div class="colorandpic">
                <ul class="owl-carousel owl-theme tabscolor"> 
                  <li class="item">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-6" style="color: red">


                          <?php foreach ($Storage_price as $key => $value) { ?>
                             <?php
                            $firstPrice = $value;
                            break;
                             ?>
                          <?php } ?>
                          <h2>  
                               <strong id ="price"><?php echo number_format($firstPrice['price'], 0); ?>₫</strong>
                            </h2>
                        </div>
                      </div>                
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-3">
                          <h4>Màu Sắc:</h4>
                        </div>
                        <div class="col-md-6">
                          <?php foreach ($colors as $key => $value) { ?>
                            <div style= "background: <?php echo $value["color"]; ?>; width: 30px; height: 30px; border-radius: 25px;">
                            </div>
                            <?php echo $value["color"]; ?>
                           <?php } ?>
                        </div>
                      </div>                
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-6">
                          <div class="storage row" style="width: 100%;height: 120%; float: left" >
                            <div class="col-md-4">
                              <h4>Màu:</h4>
                            </div>

                            <div class="col-md-8">
                              <h4> 
                                <!-- <select class="choncauhinh" id="colorSelect">
                                  <?php foreach ($colors as $key => $value) { ?>
                                    <option value ="<?php echo $value["id_color"]; ?>"> <?php echo $value["color"]; ?></option>
                                  <?php
                                  }
                                  ?>
                                </select> -->
                            <select class="choncauhinh" id="colorSelect" >
                            <option value="">
                            <?php
                            foreach ($colors as $key => $value) { ?>
                                <option value ="<?php echo $value["id_color"]; ?>"> <?php echo $value["color"]; ?></option>
                            <?php
                            }
                            ?>

                    </select>

                              </h4>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="storage row" style="width: 100%;height: 120%; float: left" >
                            <div class="col-md-7">
                              <h4>Dung lượng:</h4>
                            </div>

                            <div class="col-md-5">
                              <h4> 
                                <select class="choncauhinh" id="storageSelect" onchange="change_price()">
                                  <?php
                                  foreach ($Storage_price as $key => $value) { ?>
                                      <option value ="<?php echo $value["id_storage"]; ?>" class = "<?php echo $value["price"]; ?>" id = "<?php echo $value["id_storage"]; ?>"><?php echo $value["storage"]; ?> GB</option>
                                  <?php
                                  }
                                  ?>
                                </select>
                              </h4>
                            </div>
                          </div>
                        </div>
                      </div>                
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-6">
                          <h4>Chọn số lượng muốn mua:</h4>
                        </div>
                        <div class="col-md-4">
                          <h4>
                            <input id = "product-quantity"  value="1" min="0" style="width: 50%">
                          </h4>
                        </div>
                      </div>                
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-6">
                          <h4>Số lượng hàng còn trong kho:</h4>
                        </div>
                        <div class="col-md-4">
                          <h4>
                            <p id = "quantity-pro" type="number" style="width: 50%"></p>
                            
                          </h4>
                        </div>
                      </div>                
                    </div>

                    <div class="row">
                      <div class="alert alert-danger" style="text-align: center; display: none">
                        <span>Số lượng mua không được lớn hơn số hàng còn trong kho</span>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-8 col-md-offset-1"> 
                        <h3>
                          <button  id ="btnAddCart" class="buy_now btn btn-md" data-value="87846" onclick="themGioHang()" style="background: #ff6600; color: white; font-size: 20px;"><b>Mua ngay </b><span>Giao hàng hoặc nhận tại siêu thị</span></button>
                        </h3>
                      </div>
                    </div>

                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>
    </div>

    <div class="box_content">
      <aside class="right_content">
          <div class="tableparameter">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <h1 align="center">Thông số kỹ thuật</h1>
              </div>
            </div>

            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <table class="table table-bordered">
                  <tbody style="text-align: center; font-size: 17px;">
                    <tr>
                      <td class="col-md-3">Màn hình:</td>
                      <td align="center"><?php echo $infoModel["display"]; ?></td>
                    </tr>
                    <tr>
                      <td>Hệ điều hành:</td>
                      <td><?php echo $infoModel["os"]; ?></td>
                    </tr>
                    <tr>
                      <td>Camera sau:</td>
                      <td><?php echo $infoModel["camera"]; ?></td>
                    </tr>

                    <tr>
                      <td>Camera trước:</td>
                      <td><?php echo $infoModel["front_camera"]; ?></td>
                    </tr>

                    <tr>
                      <td>RAM:</td>
                      <td><?php echo $infoModel["memory"]; ?></td>
                    </tr>

                    <tr>
                      <td>Thẻ SIM:</td>
                      <td><?php echo $infoModel["sim"]; ?></td>
                    </tr>

                    <tr>
                      <td>Dung lượng pin:</td>
                      <td><?php echo $infoModel["battery"]; ?></td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </aside>
        </div>
      </div>

      <script>
        function change_price() {
          var id = document.getElementById("storageSelect").value;
          var value = document.getElementById(id).className;
          document.getElementById("price").innerHTML  = value + "đ";
         
        }
      </script>
     <!--  <script >
        function getValueQuantityInput(){
          var value = $(this).val();
          $("#product-quantity").text(value);
          $("#product-quantity").keyup(getValueQuantityInput)
        }
      </script> -->
    

      <script>
        function themGioHang(){
          var idColor = Number($("select#colorSelect").val());
          var idStorage = Number($("select#storageSelect").val());
          var quantityMax =  Number($("#quantity-pro").text());
          var quantity = Number($("#product-quantity").val());
          if(quantity> quantityMax){
            $(".alert-danger").fadeIn(1500);
            setTimeout(function () {
                $(".alert-danger").fadeOut(3000);
            },3000);
            $("#btnAddCart").attr("disabled","disabled");
          }
          else{
            window.location = "detailModel.php?ModelId=<?php echo $_POST['idModel']?>&ColorId="+idColor+"&StorageId="+idStorage+"&maxQuant="+quantityMax+"&quantity="+quantity;
          }
          
        }
      </script>
      <script>
        $( document ).ready(function() {
          $("#product-quantity").on("change", function(){
            var quantityMax = Number($("#quantity-pro").text());
            var quantity = Number($("#product-quantity").val());

            if(quantity > quantityMax || quantity <= 0){
                $(".alert-danger").fadeIn(1500);
                setTimeout(function () {
                    $(".alert-danger").fadeOut(3000);
                },3000);
                $("#btnAddCart").attr("disabled","disabled");
            }

            else{
                $("#btnAddCart").removeAttr("disabled");
            }
        });
      });
      </script>

      <script>
        var fee = 0;
        var idColor;
        var idStorage;

        $(".choncauhinh").change(function () {
          idColor = Number($("select#colorSelect").val());
          idStorage = Number($("select#storageSelect").val());

          $.ajax({
            type: 'POST',
            url: "http://localhost:8080/iBanking/rest/services/getQuantity/" + <?php echo $_REQUEST['idModel'] ?> +"/" + idStorage + "/" + idColor,

            success: function (response) {
              quantity = response;
              $("#product-quantity").attr("max", response)
              if (response == 0) {
                document.getElementById("quantity-pro").innerHTML = "Hết hàng";
                //document.getElementById("quantityhidden").value = "Hết hàng";
              } 

              else if (response > 0) {
                document.getElementById("quantity-pro").innerHTML = quantity;
                //document.getElementById("quantityhidden").value = quantity;
              }

              else if (response == null) {
                document.getElementById("quantity-pro").innerHTML = "Không hợp lệ";
              }

              console.log("Data type: " + (typeof response));
              console.log("Data: " + response);
              // console.log("Application name: " + response.name);
            }
          });
        });
      </script>
  </body>

  <footer>
    <?php include_once('footer.php') ?>
  </footer>

</html>
