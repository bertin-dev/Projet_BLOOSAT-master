
   
   <!-- ajout client -->

   <div class="modal fade" id="modal_add_client" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Nouveau compte</h4>
                                        </div>
                                        <div class="modal-body">
                                        <div class="text-center message"></div>
                                            

<form role="form" class="add_client">
                                        <div class="form-group">
                                            <label>Nom du compte</label>
                                            <input class="form-control" type="text" name="nom">
            
                                        </div>

                                        <div class="form-group">
                                            <label>Type de compte</label>
                                            <select class="form-control" name="type_compte">
                                                <option value="1">Résidentiel</option>
                                                <option value="2">Entreprise</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>Pays</label>
                                            <select class="form-control" name="pays">

                                            <?php foreach ((array)$params->pays() as $pays) { ?>

                                                <option value="<?php echo $pays['alpha3']; ?>"><?php echo $pays['nom_fr_fr']; ?></option>

                                                  <?php } ?>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Ville / village</label>
                                            <input class="form-control" type="text" name="ville">
            
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email">
            
                                        </div>

                                         <div class="form-group">
                                            <label>Tel 1 </label>
                                            <input class="form-control" type="text" name="tel1">
            
                                        </div>

                                         <div class="form-group">
                                            <label>Tel 2 </label>
                                            <input class="form-control" type="text" name="tel2">
            
                                        </div>
                                   
                                      
                                        <button  class="btn btn-primary btn_add_client">Envoyer</button>
                                        <button type="reset" class="btn btn-success">Effacer</button>
                                    </form>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>   

   <!-- end ajout client -->



   <!-- ajout equipement -->

   <div class="modal fade" id="modal_add_equipment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Enrégistrer un équipement</h4>
                                        </div>
                                        <div class="modal-body">
                                        <div class="text-center message_equip"></div>
                                            

<form role="form" class="add_equipment">

                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control" name="type">
                                                
                                            <?php foreach ((array)$equipment->allType_equipements() as $type_equip) { ?>

                                                <option value="<?php echo $type_equip['libelle']; ?>"><?php echo $type_equip['libelle']; ?></option>

                                                  <?php } ?>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Les numéros de série sont-ils applicable à cet équipement ?</label>
                                            <select class="form-control" id="serialisable" name="serialisable">
                                            <option disabled selected value="">veuillez choisir</option>
                                                 <option value="1">Oui</option>
                                                <option value="2">Non</option>

                                            </select>
                                        </div>

                         
                                        <div class="form-group">
                                            <label>Modèle / Capacité / Marque  </label>
                                            <input class="form-control" type="text" name="nom">
            
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="decsription">
                                            </textarea>
                                        </div>

                                        <button  class="btn btn-primary btn_add_equipment">Envoyer</button>
                                        <button type="reset" class="btn btn-success">Effacer</button>
                                    </form>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>   

   <!-- end ajout equipement -->



   <!-- ajout type equipement -->

   <div class="modal fade" id="modal_add_type_equipment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Nouveau type d'équipement</h4>
                                        </div>
                                        <div class="modal-body">
                                        <div class="text-center message_type_equip"></div>
                                            

<form role="form" class="add_type_equipment">



                                         <div class="form-group">
                                            <label>Libellé</label>
                                            <input class="form-control" type="text" name="libelle">
            
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description">
                                            </textarea>
                                        </div>

                                        <button  class="btn btn-primary btn_add_type_equipment">Envoyer</button>
                                        <button type="reset" class="btn btn-success">Effacer</button>
                                    </form>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>   

   <!-- end ajout equipement -->


   <!-- ajout approvisionnement-->

   <div class="modal fade" id="modal_add_apprivismnt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Livraison dans l'entrepôt de Yaoundé</h4>
                                        </div>
                                        <div class="modal-body">
                                        <div class="text-center message_add_approvis"></div>
                                            

<form role="form" class="add_approvis">

                    <div class="form-group">
                                            <label>Equipement</label>
                                            <select class="form-control" id="select_type_equipt" name="equipement">
                                               <option value="" disabled="" selected="">Choisissez</option> 
                                            <?php foreach ((array)$equipment->allEquipements() as $equip) { ?>

                                                <option class="<?php echo $equip['serializable']; ?>" value="<?php echo $equip['ID']; ?>"><?php echo $equip['libelle']; ?></option>

                                                  <?php } ?>
                                            </select>
                     </div>

                       <div class="form-group num_serie">
                                            <label class="num_serie">Numero de série</label>
                                             <input style="display:none" class="form-control num_serie"  type="text" name="serie" placeholder="Numéro de série">
                                        </div>

                                         <div class="form-group qte_cmd">
                                            <label>Quantité</label>
                                            <input class="form-control" type="text" name="qte" placeholder="Quantité" value="1">
            
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description">
                                            </textarea>
                                        </div>

                                        <button  class="btn btn-primary btn_add_approvis">Envoyer</button>
                                        <button type="reset" class="btn btn-success">Effacer</button>
                                    </form>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>   

   <!-- end ajout approvisionnement -->





   <!-- Nouveau transfert d'equipement -->

   <div class="modal fade" id="modal_add_transfert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Nouveau transfert d'équipement</h4>
                                        </div>
                                        <div class="modal-body">
                                        <div class="text-center message_add_transfert"></div>
                                            

<form role="form" class="add_transfert">


                    <div class="form-group">
                                            <label>Entrepot de départ</label>
                                            <select class="form-control" id="entrepot_dep" name="entrepot_dep">
                                                
                                                <option disabled="" selected="">Veuillez choisir...</option> 
                                            <?php foreach ((array)$equipment->allEntrepots() as $entrep) { 



                                                    ?>



                                                <option value="<?php echo $entrep['ID']; ?>"> <?php echo $entrep['nom']; ?></option>

                                                  <?php } ?>
                                            </select>
                     </div>


                    <div class="form-group">
                                            <label>Equipement</label>
                                            <select class="form-control" id="equipts_entrep" name="num_serie">

                                            </select>

                                            <input type="hidden" name="equipment_to_sent" id="equipment_to_sent">
                     </div>

                      <div class="form-group">
                                            <label>Entrepot de destination</label>
                                            <select class="form-control" name="entrepot_dest">
                                                
                                            <?php foreach ((array)$equipment->allEntrepots() as $entrep) { ?>

                                                <option value="<?php echo $entrep['ID']; ?>"><?php echo $entrep['nom']; ?></option>

                                                  <?php } ?>
                                            </select>
                     </div>

                     

                                         <div class="form-group qte_transfert">
                                            <label>Quantité</label>
                                            <input class="form-control" type="text" name="qte" value="1">
            
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description">
                                            </textarea>
                                        </div>

                                        <button  class="btn btn-primary btn_add_transfert">Envoyer</button>
                                        <button type="reset" class="btn btn-success">Effacer</button>
                                    </form>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>   

   <!-- end Nouveau transfert d'equipement -->



        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>

     <script src="jquerytree/jQueryFileTree.min.js"></script>
   


    <script type="text/javascript">

 $('.btn_add_client').click(function()
{
    
        $.ajax({
       url : 'motor.php?trait=add_client',
       type : 'POST',
       data: $('.add_client').serialize(),

       success : function(data){

        if (data=='1') {  

        $('.message').html("<div class='alert alert-success text-center'>Prospect créé avec succcès !!!</div>"); 

    setTimeout(function(){ 

         window.location.href = "motor.php?trait=all_clients";

     }, 3000);

   
           

        }else{

             $('.message').html(data);

        }
    
         
       }

    });




    return false; //Empêche le formulaire d'être soumis
});


$('.btn_add_equipment').click(function()
{
    
        $.ajax({
       url : 'motor.php?trait=add_equipment',
       type : 'POST',
       data: $('.add_equipment').serialize(),

       success : function(data){

        if (data=='1') {  

        $('.message_equip').html("<div class='alert alert-success text-center'>Equipement créé avec succcès !!!</div>"); 

   setTimeout(function(){ 

         window.location.href = "motor.php?trait=all_equipts";

     }, 3000);

   
           

        }else{

             $('.message_equip').html(data);

        }
    
         
       }

    });




    return false; //Empêche le formulaire d'être soumis
});



$('.btn_add_type_equipment').click(function()
{
    
        $.ajax({
       url : 'motor.php?trait=add_new_type',
       type : 'POST',
       data: $('.add_type_equipment').serialize(),

       success : function(data){

        if (data=='1') {  

        $('.message_type_equip').html("<div class='alert alert-success text-center'>Equipement créé avec succcès !!!</div>"); 

   /* setTimeout(function(){ 

         window.location.href = "motor.php?trait=all_clients";

     }, 3000);*/

   
           

        }else{

             $('.message_type_equip').html(data);

        }
    
         
       }

    });




    return false; //Empêche le formulaire d'être soumis
});



$('.btn_add_approvis').click(function()
{
    
        $.ajax({
       url : 'motor.php?trait=add_approvis',
       type : 'POST',
       data: $('.add_approvis').serialize(),

       success : function(data){

        if (data=='1') {  

        $('.message_add_approvis').html("<div class='alert alert-success text-center'>Approvisionnement créé avec succcès !!!</div>"); 

   /* setTimeout(function(){ 

         window.location.href = "motor.php?trait=all_clients";

     }, 3000);*/

   
           

        }else{

             $('.message_add_approvis').html(data);

        }
    
         
       }

    });




    return false; //Empêche le formulaire d'être soumis
});



$('.btn_add_transfert').click(function()
{
    
        $.ajax({
       url : 'motor.php?trait=add_transfert',
       type : 'POST',
       data: $('.add_transfert').serialize(),

       success : function(data){

        if (data=='1') {  

        $('.message_add_transfert').html("<div class='alert alert-success text-center'>Transfert effectué avec succcès !!!</div>"); 

   /* setTimeout(function(){ 

         window.location.href = "motor.php?trait=all_clients";

     }, 3000);*/

   
           

        }else{

             $('.message_add_transfert').html(data);

        }
    
         
       }

    });




    return false; //Empêche le formulaire d'être soumis
});



function update_client(id){


        $.ajax({
       url : 'motor.php?trait=update_client',
       type : 'POST',
       data: $('.update_client'+id).serialize(),

       success : function(data){

        if (data=='1') {  

        $('.message').html("<div class='alert alert-success text-center'>Prospect modifié avec succcès !!!</div>"); 

    setTimeout(function(){ 

         window.location.href = "motor.php?trait=all_clients";

     }, 3000);

}else{

             $('.message').html(data);

        }
    
         
       }

    });


}

    

    function delete_client(id){

          $.ajax({
        url : 'motor.php?trait=delete_client&id_client='+id,
        type : 'GET',

       success : function(data){

              if (data=='1') { 

                $('.message').html("<div class='alert alert-success text-center'>Prospect modifié avec succcès !!!</div>"); 

           setTimeout(function(){ 

                 window.location.href = "motor.php?trait=all_clients";

             }, 3000);

                }

         }

    });

 

    }

    function restaurer_client(id){

         $.ajax({
        url : 'motor.php?trait=retaure_client&id_client='+id,
        type : 'GET',

       success : function(data){

              if (data=='1') { 

                $('.message').html("<div class='alert alert-success text-center'>Compte restauré avec succcès !!!</div>"); 

           setTimeout(function(){ 

                 window.location.href = "motor.php?trait=clients_deleted";

             }, 3000);

                }

         }

    });

    }

$('.num_serie').hide(); // Par défaut on cache le numero de série

$('#select_type_equipt').change(function() {  // Vérifie si un équipement est sérialisable ou pas pour affichier le champ numero de serie ou pas


    var id=$(this).val();

    //alert(id)

       $.ajax({
        url : 'motor.php?trait=isserialable&id_equipt='+id,
        type : 'GET',

       success : function(data){

              if (data=='1') { 
                var init=1;

$('.num_serie').show();

 $('.qte_cmd').hide();


                }else{

                  $('.num_serie').hide(); 
                   $('.qte_cmd').show(); 
                }

         }

    });


   
    }); 



$( document ).ready(function() {
  

});




$('#entrepot_dep').change(function() { // Choix des équiepements d'un entrepot lors d'un transfert

    var id=$(this).val();

    //alert(id)

       $.ajax({
        url : 'motor.php?trait=equipemtsd1_depot&id_depot_depart='+id,
        type : 'GET',

       success : function(data){



$('#equipts_entrep').html(data);
$("#equipts_entrep").prepend("<option value='' selected='selected'>Choisissez</option>"); // ajoute dabord une option vide que l'user doit changer
               

         }

    });

   
    }); 


$('#equipts_entrep').change(function() {

    var id=$(this).val();

    //alert(id)

       $.ajax({
        url : 'motor.php?trait=get_id_from_num_serie&num_serie_sent='+id,
        type : 'GET',

       success : function(data){

$('#equipment_to_sent').val(data);
               

         }

    });


   
    }); 

 
 

    </script>


</body>

</html>