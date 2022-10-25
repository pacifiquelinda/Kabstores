<?php require("configs/globals.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Product Registration </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <link href="assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
</head>

<body class="sidebar-noneoverflow">

    <!--  BEGIN NAVBAR  -->
    <?php require("templates/navBar.php"); ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <?php
        require("templates/sideBar.php");
        ?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-spacing">

                    <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing offset-md-2">

                        <div class="skills layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <h3 class="">Product Registration</h3>
                                    <?php require("scripts/main.php"); ?>

                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <div class="form-group">

                                                <input type="text" class="form-control" placeholder="Product Name" name="productName" value="" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 ">
                                            <div class="form-group">

                                                <input type="number" class="form-control" placeholder="Price [ RWF ]" name="productPrice" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <div class="form-group">

                                                <input type="number" class="form-control" placeholder="Discount Price [ RWF ]" name="discountPrice" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">

                                                <select name="categoryId" id="" required class='form-control'>
                                                    <option value="">Product Category</option>
                                                    <?php

                                                    $query = mysqli_query($connection, "SELECT * FROM  categories") or die(mysqli_error($connection));

                                                    while ($data = mysqli_fetch_assoc($query)) { ?>
                                                        <option value="<?php print $data["category_id"]; ?>"><?php print $data["category_name"]; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="productDescription" placeholder="Product Description" class="form-control" id="" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Product Image</label>
                                                <input type="file" name="productImage" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary " type="submit" name="addProduct">Save Info</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php require("templates/footer.php"); ?>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="plugins/select2/select2.min.js"></script>
    <script src="plugins/select2/custom-select2.js"></script>
    <script>
        $(document).ready(function() {
            $(".catalog").addClass("active");
            $(".products").addClass("active");
            $("#catalog").addClass("show");

            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>