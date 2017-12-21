<?php

require __DIR__. '/../include/outils.php';



// $employers = new Employers();
// $employers = $employers->tous();
$employers = Employers::tous();

?>


<?php
    template('header');
?>


<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <?php template('sidebar'); ?> 
</div> <!-- / main menu-->

<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <?php template('nav', array(
        'actions' => array(
            array(
                'link'  => lien('/employe/ajouter.php'),
                'text'  => 'ajouter',
                'color' => 'success' 
            )
        )
    )); ?> 
</nav>

    
    
<div class="app-content content container-fluid" >
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Employers</h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>tel</th>
                                        <th>address</th>
                                        <th>email</th>
                                        <th>departement</th>
                                        <th>chef de Projet</th>
                                        <th>actions</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($employers as $e): ?>
                                        <tr>
                                            <td class="text-truncate"><a class="blue-grey" href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->nom ?></a></td>
                                            <td class="text-truncate"><a class="blue-grey" href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->prenom ?></a></td>
                                            <td class="text-truncate"><a class="blue-grey" href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->tel ?></a></td>
                                            <td class="text-truncate"><a class="blue-grey" href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->address ?></a></td>
                                            <td class="text-truncate"><a class="blue-grey" href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->email ?></a></td>
                                            <td class="text-truncate"><a class="blue-grey" href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->departement ?></a></td>
                                            <td class="text-truncate"><a class="blue-grey" href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->est_chefdep ? "Oui" : "Non" ?></a></td>        
                                            <td><a class="btn btn-success" href="<?= lien('/employe/modifier.php?id=' . $e->id) ?>"><i class="icon-cog"></i></a>
                                            <a class="btn btn-danger" href="<?= lien('/employe/supprimer.php?id=' . $e->id) ?>"><i class="icon-trash icon-white"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>  
    </div>
</div> <!-- .content -->
<?php
    template('footer', array(
        'path' => '../'
    ));
?>