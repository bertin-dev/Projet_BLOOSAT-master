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
                    <h1 class="page-header">Toutes les livraisons de Yaoundé</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
      
            </div>


            <div class="row">

           
                <div class="col-lg-12">

<div class="success_new_client"></div>
                 <?php 

            if ($equipment->allLivraisons()==0) {
                echo "<div class='alert alert-warning text-center'>Aucune livraison enrégistrée. </div>";
            
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
                                          
                                            <th>Equipement (Numéro de série) </th>
                                            <th>Date d'entrée</th>
                                            <th>Qté entrée</th>
                                            <th>Enrégistrée par</th>
                                            <th>Etat</th>
                                           <th>Validée par</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ((array)$equipment->allLivraisons() as $livrais) {
                                       ?>
                                        <tr class="odd gradeX"> 
                                            
                                            <td> <?php echo $livrais['libelle'].' ('.$livrais['num_serie'].')'; ?></td>
                                            <td> <?php echo $livrais['date_mvt']; ?></td>
                                            <td> <?php echo $livrais['qte']; ?></td>
                                            <td> <?php echo $user->nomUser($livrais['operator']); ?></td>
                                            <td>
                                            <?php if ($livrais['valider']==0) {?>
                                            <btn class="btn-danger btn-xs">En attente</btn>

                                            <?php } else{?>

                                                <btn class="btn-success btn-xs">Validée</btn>

                                            <?php }?>
                                            </td>
                                            <td> <?php echo $user->nomUser($livrais['operator']); ?></td>

                                      <td>          
                            <div class="btn-group pull-right ">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#modal_update_client<?php /*echo $equipt['ID']; */?>">
                                            <i class="fa fa-edit"></i> modifier
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                     <li>
                                        <a href="#" data-toggle="modal" data-target="#modal_update_client<?php /*echo $equipt['ID']; */?>">
                                            <i class="fa fa-check"></i> Valider
                                        </a>
                                    </li>


                                    <li class="divider"></li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#modal_delete_client<?php /*echo $equipt['ID'];*/ ?>">
                                            <i class="fa fa-minus fa-fw"></i> Supprimer
                                        </a>
                                    </li>
                                 
                                </ul>
                            </div>

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
