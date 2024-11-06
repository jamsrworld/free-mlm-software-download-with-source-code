<?php

$base = '../';
$active_page = "support";
include $base . "db.php";
check_user_login();
$user_id = $loggedin_user_id;
$user_name = user_name($user_id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
 
    <?php echo web_metadata(); ?>
   
    <title>Profile - <?php echo $web_name; ?></title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/dropzone.css">
    <?php include $base . "assets/css/css-files.php"; ?>
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
         <?php include '../assets/nav/user/header.php'; ?>
        <!-- Page Header Ends     -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include $base . '/assets/nav/user/sidebar.php'; ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3>Support</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>"><i class="material-icons-outlined">home</i> </a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>/support/">Support</a></li>
                                    <li class="breadcrumb-item active">Add a ticket</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">

                    <div class="card">
                        <div class="card-header">
                            <h5>Add A Ticket</h5>
                        </div>
                        <div class="card-body add-post">

                            <form images="" id="add_ticket_form" class="row needs-validation" novalidate="">
                                <div class="col-lg-6 col-sm-12 mb-3">
                                    <label for="user_name">Username</label>
                                    <input disabled value="<?php echo $user_name; ?>" class="form-control" id="user_name" type="text" placeholder="Username" required="">
                                </div>
                                <div class="col-lg-6 col-sm-12 mb-3">
                                    <label for="user_id"> User Id </label>
                                    <input disabled value="<?php echo $user_id; ?>" class="form-control" id="user_id" type="text" placeholder="User Id" required="">
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="subject">Subject</label>
                                    <input name="subject" class="form-control" id="subject" type="text" placeholder="Subject" required="">
                                    <div class="invalid-feedback">Please provide a valid subject.</div>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="message">Message</label>
                                    <textarea name="message" rows="10" class="form-control" id="message" type="text" placeholder="Message" required=""></textarea>
                                    <div class="invalid-feedback">Please provide a valid message.</div>
                                </div>

                            </form>

                            <label for="message">Upload Files <small>(optional)</small></label>
                            <form data-form="#add_ticket_form" class="dropzone" id="dropZoneUploadForm">
                                <div class="m-0 dz-message needsclick"><i class="material-icons-outlined">backup</i>
                                    <h6 class="mb-0">Drop files here or click to upload.</h6>
                                </div>
                                <button type="submit" class="btn btn-info">Submit Images</button>
                            </form>

                            <div class="btn-showcase justify-right">
                                <button data-form="#add_ticket_form" id="submit_form" class="btn btn-primary" type="submit">Submit ticket</button>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- Container-fluid Ends-->
            </div>


            <!-- footer start-->
            <?php echo web_footer("user"); ?>
            <!--  -->
            <script src="<?php echo $base_url; ?>/assets/js/dropzone/dropzone.js"></script>
            <script src="<?php echo $base_url; ?>/assets/js/dropzone/dropzone-script.js"></script>
        </div>
    </div>




</body>

</html>