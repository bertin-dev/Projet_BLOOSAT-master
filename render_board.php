<?php
include"header.php";
include"sidebar.php";
?>

 <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Bienvenue</h1>
                </div>
                <!--End Page Header -->
            </div>


            <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-user fa-3x"></i>&nbsp;
                        <h5>Prospects</h5>
                        <h2>
                            <?php echo $client->nombreProspect(); ?>
                        </h2>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-user fa-3x"></i>&nbsp;
                          <h5>Clients</h5>
                        <h2>
                            <?php echo $client->nombreClients(); ?>
                        </h2> 
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        <i class="fa fa-ticket fa-3x"></i>&nbsp;
                          <h5>Tiquets en cours</h5>
                        <h2>
                            0
                        </h2>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        <i class="fa  fa-wrench fa-3x"></i>
                        <h5>Tiquets en réglés</h5>
                        <h2>
                            0
                        </h2>
                    </div>
                </div>
                <!--end quick info section -->
            </div>

          
            </div>


         


        </div>
        <!-- end page-wrapper -->












<?php
include"footer.php";

?>