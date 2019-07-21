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
                    <h1 class="page-header">Les clients supprimés</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
      
            </div>


            <div class="row">

           
                <div class="col-lg-12">

<div class="success_new_client"></div>
                 <?php 

            if ($client->clients_deleted()==0) {
                echo "<div class='alert alert-warning text-center'>Pas de compte supprimé pour le moment </div>";
            
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
                                            <th>#Id</th>
                                            <th>Nom compte</th>
                                            <th>Localisation</th>
                                            <th>Contacts</th>
                                            <th>Catégorie</th>
                                             <th>Type</th>
                                            <th>E-mail</th>
                                            <th>Enrégistré le</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ((array)$client->clients_deleted() as $client) {
                                       ?>
                                        <tr class="odd gradeX"> 
                                             <td> <?php echo $client['ID']; ?></td>
                                            <td> <?php echo $client['nom']; ?></td>
                                            <td> <?php echo $client['nom_fr_fr'].'  ('.$client['ville'].')'; ?></td>
                                            <td> <?php echo $client['tel1'].' '.$client['tel2']; ?></td>

                                               <?php if ($client['type']==1) { ?> 
                                            <td>Résidentiel</td>

                                            <?php }elseif ($client['type']==2) { ?>

                                            <td>Entreprise</td> 

                                            <?php } ?>



                                              <?php if ($client['etat_client']==0) { ?> 
                                            <td>Prospect</td>

                                            <?php }elseif ($client['etat_client']==1) { ?>

                                            <td>Client</td> 

                                            <?php } ?>

                                                <td> <?php echo $client['email']; ?></td>

                                             <td> <?php echo $client['date_inscription']; ?></td>

                                             <td>
                                               
                            <div class="btn-group pull-right ">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#modal_update_client<?php echo $client['ID']; ?>">
                                            <i class="fa fa-search fa-fw"></i> Détails
                                        </a>
                                    </li>


                                    <li class="divider"></li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#modal_delete_client<?php echo $client['ID']; ?>">
                                            <i class="fa fa-minus fa-fw"></i> Restaurer
                                        </a>
                                    </li>
                                 
                                </ul>
                            </div>

                                             </td> 
                                           
                                        </tr>
                            <!-- Form mofif client -->
                           <div class="modal fade" id="modal_update_client<?php echo $client['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Infos du compte</h4>
                                        </div>


                                        <div class="modal-body">
                                     
                                            
                                        <div class="form-group">
                                            <label>Nom du compte : <span class="text-success"> <?php echo $client['nom']; ?></span></label>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Type de compte : <span class="text-success"><?php if ($client['type']==1) { ?> 
                                            Résidentiel

                                            <?php }elseif ($client['type']==2) { ?>

                                           Entreprise 

                                            <?php } ?></span></label>
                                        </div>


                                        <div class="form-group">
                                            <label class="">Pays actuel : <span class="text-success"><?php echo $client['nom_fr_fr']; ?></span></label>
                                          
                                        </div>

                                         <div class="form-group">
                                            <label>Ville / village : <span class="text-success"><?php echo $client['ville']; ?></span> </label>
            
                                        </div>

                                        <div class="form-group">
                                            <label>Email : <span class="text-success"><?php echo $client['email']; ?></span></label>
            
                                        </div>

                                         <div class="form-group">
                                            <label>Tel 1 : <span class="text-success"><?php echo $client['tel1']; ?></span></label>
            
                                        </div>

                                         <div class="form-group">
                                            <label>Tel 2 : <span class="text-success"><?php echo $client['tel2']; ?></span></label>
            
                                        </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                           
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- End Form mofif client  -->

                             <!-- Form suppr client -->
                           <div class="modal fade" id="modal_delete_client<?php echo $client['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Restauration du compte</h4>
                                        </div>
                                        <div class="modal-body">
                                        <div class="message"></div>
                                           Voulez-vous vraiment restaurer le compte de  <strong><?php echo strtoupper($client['nom']); ?></strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>

                                   
                                            <button type="button" onclick="restaurer_client(<?php echo $client['ID']; ?>)" class="btn btn-primary">Oui</button>
                             
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Form suppr client  -->

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
