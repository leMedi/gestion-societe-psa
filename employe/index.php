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
    <?php template('nav'); ?> 
</nav>

    
    
<div class="app-content content container-fluid" style="
    margin-bottom: 300px;" >
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
                                            <td>
                                            <span class="dropdown open">
				                        <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="icon-cog3"></i></button>
				                        <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
				                            <a href="#" class="dropdown-item"><i class="icon-eye6"></i> Open Task</a>
				                            <a href="#" class="dropdown-item"><i class="icon-pen3"></i> Edit Task</a>
				                            <a href="#" class="dropdown-item"><i class="icon-check2"></i> Complete Task</a>
				                            <a href="#" class="dropdown-item"><i class="icon-outbox"></i> Assign to</a>
				                            <span class="dropdown-divider"></span>
				                            <a href="#" class="dropdown-item"><i class="icon-trash4"></i> Delete Task</a>
				                        </span>
				                    </span>
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