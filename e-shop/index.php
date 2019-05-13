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

		        		<a href="index.php?idBrand=<?php echo $value["idBrand"]; ?>"> <i class="glyphicon glyphicon-phone" > </i> <?php echo $value["brandName"]; ?> </a>
		        	</li>
		        <?php
		        }?>
			    </ul>
			  </div>
			</nav>
		</div>
	<!-- HOME -->
	
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<div class="banner banner-1">
							<img src="./img/hinh1.jpg" alt="" >
						<!-- <div class="banner-caption text-center">
							<h1>Bags sale</h1>
							<h3 class="white-color font-weak">Up to 50% Discount</h3>
							<button class="primary-btn">Shop Now</button>
						</div> -->
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/hinh2.jpg" alt="">
						<!-- <div class="banner-caption">
							<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
							<button class="primary-btn">Shop Now</button>
						</div> -->
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/hinh4.png" alt="">
						<!-- <div class="banner-caption">
							<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
							<button class="primary-btn">Shop Now</button>
						</div> -->
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/hinh3.jpg" alt="">
						<!-- <div class="banner-caption">
							<h1 class="white-color">New Product <span>Collection</span></h1>
							<button class="primary-btn">Shop Now</button>
						</div> -->
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->

	<!-- /HOME -->

<!--San Pham -->
<div class="section">
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<?php
			        foreach ($ModelList as $key => $value) { ?>
						<div class="col-md-3 col-sm-6">
			            	<a href="detailModel.php?idModel=<?php echo $value["idModel"]; ?>"><img class="card-img-top" src="img\<?php echo $value["img"]; ?>.png" alt="" style = "width: 100%; height: 150px;">
			            	<div class="banner-caption text-center">
			            		<a href="detailModel.php?idModel=<?php echo $value["idModel"]; ?>"><?php echo $value["model_name"]; ?></a>
			                            <form method="post" action="detailModel.php?idModel=<?php echo $value["idModel"]; ?>">
			                            <div>
			                                <button type="submit" class="btn btn-default btn-sm" style="text-align: center; ">
			                                    <span class="glyphicon glyphicon-shopping-cart"></span> Xem chi tiết
			                                </button>
			                            </div>
			                        </form>
			                    </div>
			                </a>
			                
			            </div>
			        <?php
			        }?>
			   </div>
			</div>
		</div>		
    </div>
            <!--San Pham -->
</div>

<?php include_once 'footer.php';?>

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
