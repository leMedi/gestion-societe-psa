<?php

require __DIR__. '/include/outils.php';

$user = pageProteger();

$commandes = $user->commandes();
?>


<?php
    template('header');
?>


<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <?php template('sidebar'); ?> 
</div> <!-- / main menu-->

<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <?php template('nav', array(
        'companyTitle' => $user->departement
    )); ?> 
</nav>

    
    
<div class="app-content content container-fluid" >
    <div class="content-wrapper">
        
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-xs-12">
                <div class="card bg-cyan">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <i class="icon-list-alt white font-large-2 float-xs-left"></i>
                                </div>
                                <div class="media-body white text-xs-right" style="width: 10000px;">
                                    <h3><?= count($commandes) ?></h3>
                                    <span>Commandes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php
                $counter = 0;
                foreach ($commandes as $commande) {
                    if($commande->estProche())
                        $counter++;
                }
            ?>

            <div class="col-xl-3 col-lg-6 col-xs-12">
                <div class="card bg-pink">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <i class="icon-calendar-times-o white font-large-2 float-xs-left"></i>
                                </div>
                                <div class="media-body white text-xs-right" style="width: 10000px;">
                                    <h3><?= $counter ?></h3>
                                    <span>Proches de date de livraison</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            
            <div class="col-xl-3 col-lg-6 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="p-2 text-xs-center bg-deep-orange media-left media-middle">
                                <i class="icon-banknote font-large-2 white"></i>
                            </div>
                            <div class="p-2 media-body">
                                <h5>Chiffre d'affaire</h5>
                                <h5 class="text-bold-400">8.6 MDH</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div> <!-- .content -->
<?php
    template('footer');
?>