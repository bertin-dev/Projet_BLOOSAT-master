<?php
session_start();
include"header.php";
include"sidebar.php";

?>

 <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Le stock</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
      
            </div>


            <div class="row">

          <div class="col-lg-12">

<div class="success_new_client"></div>
                 <?php 

            if ($equipment->liste_equip_stock()==0) {
                echo "<div class='alert alert-warning text-center'>Aucun élément à afficher. </div>";
            
            }else{

            ?>




                            

                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr class="bg-info">
                                          <!--   <th>#Id</th> -->
                                            <th>Equipement</th>
                                            <th>Qté en stock</th>
                                            <th>Entrepot</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ((array)$equipment->liste_equip_stock() as $tock) {
                                       ?>
                                        <tr class="odd gradeX"> 
                                            
                                            <td> <?php echo $tock['libelle'].' ('.$tock['num_serie'].')'; ?></td>
                                            <td> <?php echo $equipment->stock_actuel($tock['entrepot'],$tock['equipment']); ?></td>
                                            <td> <?php echo $tock['nom']; ?></td>
                                           

                                      <td>          
                            <!-- <div class="btn-group pull-right ">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="">
                                            <i class="fa fa-search fa-fw"></i> Détails
                                        </a>
                                    </li>


                                    <li class="divider"></li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="">
                                            <i class="fa fa-minus fa-fw"></i> Supprimer
                                        </a>
                                    </li>
                                 
                                </ul>
                            </div>-->

                                             </td>  
                                           
                                        </tr>
                            

                                     <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->

                       <?php 
                                }
                        ?>
                </div>  
                





            </div>

          
            </div>


         


        </div>
        <!-- end page-wrapper -->












<?php
include"footer.php";

?>
