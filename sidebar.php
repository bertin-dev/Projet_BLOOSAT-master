
    <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" class="rounded" alt="">
                            </div>
                            <div class="user-info">
                                <div><?php echo $_SESSION['nom']; ?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                   
                    <li class="selected">
                        <a href="index.php"><i class="fa fa-home"></i> Accueil</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> Clients<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#" class="sublist" data-toggle="modal" data-target="#modal_add_client"><i class="fa fa-plus fa-fw"></i> Ajouter un client </a></a>
                            </li>
                            <li>
                                <a class="sublist" href="motor.php?trait=all_clients"><i class="fa fa-list fa-fw"></i> Liste  des clients</a>
                            </li>

                            <li>
                                <a class="sublist" href="motor.php?trait=clients_deleted"><i class="fa fa-trash-o fa-fw"></i>Clients Supprimés</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                  
                    <li>
                        <a href="#"><i class="fa fa-gift fa-fw"></i>Produits<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#" class="sublist" data-toggle="modal" data-target="#modal_add_equipment"> <i class="fa fa-plus fa-fw"></i> Ajouter un équippement </a>
                            </li>
                            <li>
                                <a href="motor.php?trait=all_equipts" class="sublist"> <i class="fa fa-list fa-fw"></i> Tous les équipements</a>
                            </li>
                            <li>
                                <a href="#" class="sublist" data-toggle="modal" data-target="#modal_add_forfait"> <i class="fa fa-plus fa-fw"></i> Ajouter un forfait </a>
                            </li>
                            <li>
                                <a href="#" class="sublist"> <i class="fa fa-list fa-fw"></i> Tous les forfaits</a>
                            </li>
                            <li>
                                <a href="#" class="sublist" data-toggle="modal" data-target="#modal_add_type_equipment"> <i class="fa fa-plus fa-fw"></i> Ajouter un type</a>
                            </li>
                            <li>
                                <a href="motor.php?trait=all_type_equipts" class="sublist"> <i class="fa fa-list fa-fw"></i> Tous les types</a>
                            </li>
        
                            
                        </ul>
                        <!-- second-level-items -->
                    </li>

                       <li>
                        <a href="#"><i class="fa fa-gift fa-fw"></i>Mouvements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#" class="sublist" data-toggle="modal" data-target="#modal_add_apprivismnt"> <i class="fa fa-plus fa-fw"></i> Nouvelle livraison</a>
                            </li>
                            <li>
                                <a href="motor.php?trait=all_livrais" class="sublist"> <i class="fa fa-list fa-fw"></i> Tous les livraisons</a>
                            </li>
                            <li>
                                <a href="#" class="sublist" data-toggle="modal" data-target="#modal_add_transfert"> <i class="fa fa-plus fa-fw"></i>Nouveau transfert</a>
                            </li>
                            <li>
                                <a href="motor.php?trait=all_transferts" class="sublist"> <i class="fa fa-list fa-fw"></i> Tous les transferts</a>
                            </li>
                            <li>
                                <a href="#" class="sublist" data-toggle="modal" data-target="#modal_add_type_equipment"> <i class="fa fa-plus fa-fw"></i> Nouvelle vente</a>
                            </li>
                            <li>
                                <a href="motor.php?trait=all_type_equipts" class="sublist"> <i class="fa fa-list fa-fw"></i> Toutes les ventes</a>
                            </li>

                            <li>
                                <a href="motor.php?trait=etat_stock" class="sublist"> <i class="fa fa-list fa-fw"></i>Etat du stock</a>
                            </li>
        
                            
                        </ul>
                        <!-- second-level-items -->
                    </li>

<li><a href="motor.php?trait=logout"><i class="fa fa-sign-out fa-fw"></i>Déconnexion</a>

                  
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <style type="text/css">

        .sublist{
            background: #054b6d;
        }
        #side-menu a:hover{
             background: #054b6d;
        }
        </style>