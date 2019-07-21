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
                    <h1 class="page-header">Les clients</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
      
            </div>


            <div class="row">

           
                <div class="col-lg-12">


<div class="success_new_client"></div>
                 <?php 

            if ($client->allClients()==0) {
                echo "<div class='alert alert-warning text-center'>Pas de client pour le moment </div>";
            
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
                                    <?php foreach ((array)$client->allClients() as $client) {
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
                                            <i class="fa fa-minus fa-fw"></i> Supprimer
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
                                        <div class="text-center text-info help">Vous pouvez aussi directement modifier ces informations</div>
                                        <div class="text-center message"></div>
                                            

<form role="form" class="update_client<?php echo $client['ID']; ?>">
                                        <div class="form-group">
                                            <label>Nom du compte</label>
                                            <input class="form-control" type="text" value=" <?php echo $client['nom']; ?>" name="nom">
                                            <input type="hidden" value="<?php echo $client['ID']; ?>" name="id_client" >

                                        </div>

                                        <div class="form-group">
                                            <label class="text-success">Type de compte actuel (
                                                <?php if ($client['type']==1) { ?> 
                                            Résidentiel

                                            <?php }elseif ($client['type']==2) { ?>

                                           Entreprise 

                                            <?php } ?>

                                            )</label>
                                            <select class="form-control" name="type_compte">
                                            <option value="<?php echo $client['type']; ?>"  selected="">Changer...</option>
                                                <option value="1">Résidentiel</option>
                                                <option value="2">Entreprise</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label class="text-success">Pays actuel (<?php echo $client['nom_fr_fr']; ?>)</label>
                                            <select class="form-control" name="pays">

                                    <option value="<?php echo $client['alpha3']; ?>"  selected="">Changer...</option>

                                            <?php foreach ((array)$params->pays() as $pays) { ?>

                                                <option value="<?php echo $pays['alpha3']; ?>"><?php echo $pays['nom_fr_fr']; ?></option>

                                                  <?php } ?>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Ville / village</label>
                                            <input class="form-control" type="text" value=" <?php echo $client['ville']; ?>" name="ville">
            
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" value=" <?php echo $client['email']; ?>" name="email">
            
                                        </div>

                                         <div class="form-group">
                                            <label>Tel 1 </label>
                                            <input class="form-control" type="text" value=" <?php echo $client['tel1']; ?>" name="tel1">
            
                                        </div>

                                         <div class="form-group">
                                            <label>Tel 2 </label>
                                            <input class="form-control" type="text" value=" <?php echo $client['tel2']; ?>" name="tel2">
            
                                        </div>
                                   
                                      
                                        <button  class="btn btn-primary btn_update_client" onclick="update_client(<?php echo $client['ID']; ?>);return false;">Envoyer</button>
                                        
                                    </form>


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
                                            <h4 class="modal-title" id="myModalLabel">Suppression du compte</h4>
                                        </div>
                                        <div class="modal-body">
                                        <div class="message"></div>
                                           Voulez-vous vraiment supprimer le compte de  <strong><?php echo strtoupper($client['nom']); ?></strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>

                                   
                                            <button type="button" onclick="delete_client(<?php echo $client['ID']; ?>)" class="btn btn-primary">Oui</button>
                             
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
