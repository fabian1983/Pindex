

<?php

$seconds = date('s');

$newusers = 1+$seconds+10;
$repeatusers = 2+$seconds-10;
$newuservisits = 3+$seconds*2/3;
$repeatuservisits = 4+$seconds*3/2;
?>


  <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class='page-wrapper'>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class='page-breadcrumb'>
                <div class='row'>
                    <div class='col-5 align-self-center'>
                        <h4 class='page-title'>Starter Page</h4>
                    </div>
                    <div class='col-7 align-self-center'>
                        <div class='d-flex align-items-center justify-content-end'>
                            <nav aria-label='breadcrumb'>
                                <ol class='breadcrumb'>
                                    <li class='breadcrumb-item'>
                                        <a href='#'>Home</a>
                                    </li>
                                    <li class='breadcrumb-item active' aria-current='page'>Starter Page</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class='container-fluid'>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class='row'>
                    <div class='col-12'>
                        <div class='card'>
                            <div class='card-body'>
                                This is some text within a card block.
                            </div>
                        </div>
                    </div>
                </div>


                <div class='row'>
                    <div class='col-4'>
                        <div class='card'>
                            <div class='card-body'>
                                This is some text within a card block.
                            </div>
                        </div>
                    </div>
                    <div class='col-4'>
                        <div class='card'>
                            <div class='card-body'>
                                This is some text within a card block.
                            </div>
                        </div>
                    </div>
                    <div class='col-4'>
                        <div class='card'>
                            <div class='card-body'>
                                This is some text within a card block.
                            </div>
                        </div>
                    </div>
                </div>


                <div class='row'>
                    <div class='col-6'>
                        <div class='card'>
                            <div class='card-body'>
                                This is some text within a card block.
                            </div>
                        </div>
                    </div>
                    <div class='col-6'>
                        <div class='card'>
                            <div class='card-body'>
                                This is some text within a card block.
                            </div>
                        </div>
                    </div>
                </div>

                <div class='row'>                   
                    <div class='col-3'>
                         <div class='card'>
                            <div class='card-body'>
                                <div class='d-flex align-items-center'>
                                    <div>
                                        <h4 class='card-title text-secondary'>Users</h4>
                                    </div>
        			    <div class='ml-auto'>
                                        <h2 class='font-light text-secondary'>1<?=$newusers?></h2>
                                    </div>
                                </div>
                                <div class='m-t-20 m-b-10'>
                                    <ul class='list-style-none m-t-10'>
                                        <li>
                                            <div class='d-flex align-items-center'>
                                                <div>
                                                    <h4 class='mb-0 font-medium text-secondary'><?=$newusers?>% <span class='font-normal font-14 text-secondary op-5 m-l-5'>New Users</span></h4>
                                                </div>
                                            </div>
                                            <div class='progress m-t-10 user-progress-bg'>
                                                <div class='progress-bar bg-secondary' role='progressbar' style='width: <?=$newusers?>%' aria-valuenow='<?=$newusers?>' aria-valuemin='0' aria-valuemax='100'></div>
                                            </div>
                                        </li>
                                        <li class='m-t-30'>
                                            <div class='d-flex align-items-center'>
                                                <div>
                                                    <h4 class='mb-0 font-medium text-secondary'><?=$repeatusers?>% <span class='font-normal font-14 text-secondary op-5 m-l-5'>Repeat Users</span></h4>
                                                </div>
                                            </div>
                                            <div class='progress m-t-10 user-progress-bg'>
                                                <div class='progress-bar bg-secondary' role='progressbar' style='width: <?=$repeatusers?>%' aria-valuenow='<?=$repeatusers?>' aria-valuemin='0' aria-valuemax='100'></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



		<div class='col-3'>
                         <div class='card'>
                            <div class='card-body'>
                                <div class='d-flex align-items-center'>
                                    <div>
                                        <h4 class='card-title text-secondary'>User visits</h4>
                                    </div>
                                    <div class='ml-auto'>
                                        <h2 class='font-light text-secondary'>3<?=$newuservisits?></h2>
                                    </div>
                                </div>
                                <div class='m-t-20 m-b-10'>
                                    <ul class='list-style-none m-t-10'>
                                        <li>
                                            <div class='d-flex align-items-center'>
                                                <div>
                                                    <h4 class='mb-0 font-medium text-secondary'><?=$newuservisits?>% <span class='font-normal font-14 text-secondary op-5 m-l-5'>New visits</span></h4>
                                                </div>
                                            </div>
                                            <div class='progress m-t-10 user-progress-bg'>
                                                <div class='progress-bar bg-secondary' role='progressbar' style='width: <?=$newuservisits?>%' aria-valuenow='<?=$newuservisits?>' aria-valuemin='0' aria-valuemax='100'></div>
                                            </div>
                                        </li>
                                        <li class='m-t-30'>
                                            <div class='d-flex align-items-center'>
                                                <div>
                                                    <h4 class='mb-0 font-medium text-secondary'><?=$repeatuservisits?>% <span class='font-normal font-14 text-secondary op-5 m-l-5'>Repeat visits</span></h4>
                                                </div>
                                            </div>
                                            <div class='progress m-t-10 user-progress-bg'>
                                                <div class='progress-bar bg-secondary' role='progressbar' style='width: <?=$repeatuservisits?>%' aria-valuenow='<?=$repeatuservisits?>' aria-valuemin='0' aria-valuemax='100'></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='col-6'>
                        <div class='card'>
                            <div class='card-body'>
                                <span class='label label-rounded label-primary'>Primary</span>
				<span class='label label-rounded btn-secondary'>Secondary</span>
				<span class='label label-rounded label-success'>Success</span>
				<span class='label label-rounded label-danger'>Danger</span>
				<span class='label label-rounded label-warning'>Warning</span>
				<span class='label label-rounded label-info'>Info</span>
				<span class='label label-rounded btn-light'>Light</span>
				<span class='label label-rounded btn-dark'>Dark</span>
				<button type='button' class='btn label-primary'>
  					Messages <span class='label label-rounded label-danger'>4</span>
				</button>
                            </div>
                        </div>
                    </div>
                </div>    


                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class='footer text-center'>
                We do , we can, 
                <a href='/'> and archief</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->