<?php include('../../../include/config.php');
if(isset($_GET['currid'])){
    $currid=$_GET['currid'];
    $sql=mysqli_query($conn,"delete from currency where id ='$currid'");
    if($sql){
        header('location:currency.php');
    }
} ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Form Layouts - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->

    <!-- END: Header-->
    <?php 
    include("include/header.php");
    ?>

    <!-- BEGIN: Main Menu-->
    <?php 
    include("include/sidebar.php");
    ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->

    <div class="app-content content ">

        <!-- Edit Modal -->
       <!-- Edit User Modal -->
       <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 pt-50">
                                <div class="text-center mb-2">
                                    <h1 class="mb-1">Edit User Information</h1>
                                    <p>Updating user details will receive a privacy audit.</p>
                                </div>
                                <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserFirstName">First Name</label>
                                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" value="Gertrude" data-msg="Please enter your first name" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserLastName">Last Name</label>
                                        <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" value="Barton" data-msg="Please enter your last name" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="modalEditUserName">Username</label>
                                        <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" value="gertrude.dev" placeholder="john.doe.007" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserEmail">Billing Email:</label>
                                        <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" value="gertrude@gmail.com" placeholder="example@domain.com" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserStatus">Status</label>
                                        <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
                                            <option selected>Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                            <option value="3">Suspended</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditTaxID">Tax ID</label>
                                        <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="Tax-8894" value="Tax-8894" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserPhone">Contact</label>
                                        <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="+1 (609) 933-44-22" value="+1 (609) 933-44-22" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserLanguage">Language</label>
                                        <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple>
                                            <option value="english">English</option>
                                            <option value="spanish">Spanish</option>
                                            <option value="french">French</option>
                                            <option value="german">German</option>
                                            <option value="dutch">Dutch</option>
                                            <option value="hebrew">Hebrew</option>
                                            <option value="sanskrit">Sanskrit</option>
                                            <option value="hindi">Hindi</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserCountry">Country</label>
                                        <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select">
                                            <option value="">Select Value</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Canada">Canada</option>
                                            <option value="China">China</option>
                                            <option value="France">France</option>
                                            <option value="Germany">Germany</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea, Republic of</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Russia">Russian Federation</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center mt-1">
                                            <div class="form-check form-switch form-check-primary">
                                                <input type="checkbox" class="form-check-input" id="customSwitch10" checked />
                                                <label class="form-check-label" for="customSwitch10">
                                                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                </label>
                                            </div>
                                            <label class="form-check-label fw-bolder" for="customSwitch10">Use as a billing address?</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-2 pt-50">
                                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                            Discard
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Edit User Modal -->

        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Currency</li>
                    </ol>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Responsive Datatable -->
                <section id="responsive-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-header border-bottom row-12">
                                    <div class="col-2">
                                        <div id="botble-page-tables-page-table_filter" class="dataTables_filter">
                                            <label><input type="search" class="form-control input-sm"
                                                    placeholder="Search..."
                                                    aria-controls="botble-page-tables-page-table"></label>
                                        </div>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                                <div class="card-datatable">

                                    <table class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th>SR NO.</th>
                                                <th>CURRENCY NAME</th>
                                                <th>CURRENCY ICON</th>
                                                <th>CONVERSION RATE</th>
                                                <th>DEFAULT STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    $sql=mysqli_query($conn,"select * from currency");
                                    $count=1;
                                    while($arr=mysqli_fetch_array($sql)){
                                    ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $arr['currency_name'] ?></td>
                                                <td><i class="<?php echo $arr['currency_icon'] ?>"></i></td>
                                                <td><?php echo $arr['currency_rate'] ?></td>
                                                <td><?php echo $arr['default_status'] ?></td>
                                                <td>
                                                    <a href=""><button type="button"
                                                            class="btn btn-icon rounded-circle btn-flat-primary btnmod1"
                                                            data-bs-toggle="modal" data-bs-target="#editUser"><i
                                                                data-feather="edit"></i></button></a>

                                                    <a href="currency.php?currid=<?php echo $arr['id']; ?>"><button
                                                            type="button"
                                                            class="btn btn-icon rounded-circle btn-flat-danger"><i
                                                                data-feather="trash"></i></button></a>

                                                </td>
                                            </tr>
                                            <?php $count++; } ?>
                                            </tboday>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Responsive Datatable -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include("include/footer.php")?>

    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

    <script>
        $(document).ready(function () {
            $('.btnmod1').click(function () {
                let vid = $(this).data('id');

                $.ajax({
                    url: 'currency.php',
                    type: 'post',
                    data: {
                        vid: vid
                    },
                    success: function (response1) {
                        $('.body1').html(response1);
                        $('#myModal').modal('show');
                    }
                });
            });

        });
    </script>

</body>
<!-- END: Body-->

</html>