<?php

    if(isset($_POST['luu'])) {
        echo "<script>console.log($name)</script>";
        include_once("documentController.php");
        $controller = new categoryController();
        $result = $controller->insert($_POST['documentName'], $_POST['documentQuantity'], $_POST['documentPrice'],
            $_POST['documentCountTB'], $_POST['documentSizePage'], $_POST['documentNumberPH'], $_POST['datePH'],
            $_POST['dateUpdate'], $_POST['documentAuthor'], $_POST['documentCategory'], $_POST['documentNxb'],
            $_POST['documentProducer'], $_POST['documentLanguage'], $_POST['documentPlace']);
        if ($result = true)
            header('Location: document.php');
        else
            echo "<script>alert('Đã xảy ra lỗi, vui lòng thử lại!')</script>";
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="./assets/js/argon.js?v=1.0.0"></script>
</head>

<body>
<!-- Sidenav -->

<!-- Main content -->
<div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.html">Thêm sách mới</a>
            <!-- Form -->
            <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                <div class="form-group mb-0">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                </div>
            </form>
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="./assets/img/theme/team-4-800x800.jpg">
                </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>
                        <a href="../examples/profile.html" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>My profile</span>
                        </a>
                        <a href="../examples/profile.html" class="dropdown-item">
                            <i class="ni ni-settings-gear-65"></i>
                            <span>Settings</span>
                        </a>
                        <a href="../examples/profile.html" class="dropdown-item">
                            <i class="ni ni-calendar-grid-58"></i>
                            <span>Activity</span>
                        </a>
                        <a href="../examples/profile.html" class="dropdown-item">
                            <i class="ni ni-support-16"></i>
                            <span>Support</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#!" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class= "row">
                            <h3 class="mb-0">Thêm sách</h3>
                        </div>
                    </div>

                    <form style="margin: 5%" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-form-label">Tên sách</div>
                                <div class="form-group">
                                    <input type="text" name="documentName" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-form-label">Số lượng</div>
                                <div class="form-group">
                                    <input type="number" min="1" name="documentQuantity" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-form-label">Giá bìa</div>
                                <div class="form-group">
                                    <input type="number" name="documentPrice" min="1" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-form-label">Số lần tái bản</div>
                                <div class="form-group">
                                    <input type="number" name="documentCountTB" min="1" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-form-label">Kích thước khổ giấy</div>
                                <div class="form-group">
                                    <input type="text" name="documentSizePage" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-form-label">Số phát hành</div>
                                <div class="form-group">
                                    <input type="number" name="documentNumberPH" min="1" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-form-label">Ngày phát hành</div>
                                <div class="form-group">
                                    <input type="text" name="datePHview" class="form-control" value="10/24/1984" />
                                    <input type="hidden" id="datePH" name="datePH" class="form-control" />

                                    <script>
                                        $(function() {
                                            $('input[name="datePHview"]').daterangepicker({
                                                singleDatePicker: true,
                                                showDropdowns: true,
                                                minYear: 1901,
                                                maxYear: parseInt(moment().format('YYYY'),10)
                                            }, function(start, end, label) {
                                                var years = moment().diff(start, 'years');
                                                document.getElementById("datePH").value = start.format('YYYY/MM/DD');
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-form-label">Ngày cập nhật</div>
                                <div class="form-group">
                                    <input type="text" name="dateUpdateview" class="form-control" value="10/24/1984" />
                                    <input type="hidden" id="dateUpdate" name="dateUpdate" class="form-control" />

                                    <script>
                                        $(function() {
                                            $('input[name="dateUpdateview"]').daterangepicker({
                                                singleDatePicker: true,
                                                showDropdowns: true,
                                                minYear: 1901,
                                                maxYear: parseInt(moment().format('YYYY'),10)
                                            }, function(start, end, label) {
                                                var years = moment().diff(start, 'years');
                                                document.getElementById("dateUpdate").value = start.format('YYYY/MM/DD');
                                            });
                                        });
                                    </script>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-form-label">Tác giả</div>
                                <div class="form-group">
                                    <select type="text" name="documentAuthor" class="form-control">
                                        <?php
                                        foreach ($authorList as $item) {
                                            ?>
                                            <option name=""><?=$item->{'authorName'}?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-form-label">Loại tài liệu</div>
                                <div class="form-group">
                                    <select type="text" name="documentCategory" class="form-control">
                                        <?php
                                        foreach ($categoryList as $item) {
                                            ?>
                                            <option name=""><?=$item->{'categoryName'}?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-form-label">Nhà xuất bản</div>
                                <div class="form-group">
                                    <select type="text" name="documentNxb" class="form-control">
                                        <?php
                                        foreach ($nxbList as $item) {
                                            ?>
                                            <option name=""><?=$item->{'nxbName'}?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-form-label">Nhà sản xuất</div>
                                <div class="form-group">
                                    <select type="text" name="documentProducer" class="form-control">
                                        <?php
                                        foreach ($ProducerList as $item) {
                                            ?>
                                            <option name=""><?=$item->{'producerName'}?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-form-label">Ngôn ngữ</div>
                                <div class="form-group">
                                    <select type="text" name="documentLanguage" class="form-control">
                                        <?php
                                        foreach ($languageList as $item) {
                                            ?>
                                            <option name=""><?=$item->{'name'}?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-form-label">Vị trí</div>
                                <div class="form-group">
                                    <select type="text" name="documentPlace" class="form-control">
                                        <?php
                                        foreach ($placeList as $item) {
                                            ?>
                                            <option name=""><?=$item->{'placeDes'}?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-form-label">Tóm tắt nội dung</div>
                                <div class="form-group">
                                    <textarea rows="5" name="documentContent" type="text" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div style="margin: auto">
                                <button type="submit" class="btn btn-danger" name="huy" value="cancel">Hủy</button>
                                <button type="submit" class="btn btn-success" name="luu" value="submit">Lưu</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Dark table -->

        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">


            </div>
        </footer>
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<!-- Modal -->
</body>

</html>
