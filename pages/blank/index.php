
<?php  

$pagetitle = "Blank Template"; //- The Ultimate Multipurpose admin template
$sidemenuoffline = "0"; //1 = true


include "pages/blank/header.php"; ?>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class='preloader'>
        <div class='lds-ripple'>
            <div class='lds-pos'></div>
            <div class='lds-pos'></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id='main-wrapper'>
        <?php  include "pages/blank/topmenu.php"; ?>
        <?php  include "pages/blank/sidemenuleft.php"; ?>
        <?php  include "pages/blank/content.php"; ?>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <?php  if ( $sidemenuoffline == "1" ) { include "pages/blank/sidemenuright.php";}  ?>

    <?php include "pages/blank/footer.php";  ?>

    
</body>

</html>