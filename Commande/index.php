<?php

require __DIR__. '/../include/outils.php';

// $employers = new Employers();
// $employers = $employers->tous();


?>


<?php
    template('header', array(
        'path' => '../'
    ));
?>

<div class="wrapper">
    <div class="sidebar" data-color="blue">
        <?php template('sidebar'); ?> 
    </div> <!-- .sidebar -->

    <div class="main-panel">
        <?php template('nav', array(
            'title' => 'Commandes',
            'actions' => array(
                array(
                    'nom'   => 'Ajouter',
                    'icon'  => 'fa fa-plus',
                    'lien'  => '/Commande/ajouter.php'
                )
            )
        )); ?> 

    
    
        <div class="app-content content container-fluid" style="
            margin-bottom: 300px;" >
            <div class="content-wrapper">
               <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Commande</h4>
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
                                                <th>Numero De Commande</th>
                                                <th>Date De Commande</th>
                                                <th>Date De Livraison</th>
                                                <th>Client</th>
                                                <th>Chef de Projet</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate"><a href="#">INV-001001</a></td>
                                                <td class="text-truncate">Elizabeth W.</td>
                                                <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                                <td class="text-truncate">10/05/2016</td>
                                                <td class="text-truncate">$ 1200.00</td>
                                                
                                                                                        
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href="#">INV-001012</a></td>
                                                <td class="text-truncate">Andrew D.</td>
                                                <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                                <td class="text-truncate">20/07/2016</td>
                                                <td class="text-truncate">$ 152.00</td>
                                                
                                                 
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href="#">INV-001401</a></td>
                                                <td class="text-truncate">Megan S.</td>
                                                <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                                <td class="text-truncate">16/11/2016</td>
                                                <td class="text-truncate">$ 1450.00</td>
                                                
                                                 
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href="#">INV-01112</a></td>
                                                <td class="text-truncate">Doris R.</td>
                                                <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                                                <td class="text-truncate">11/12/2016</td>
                                                <td class="text-truncate">$ 5685.00</td>
                                                
                                                 
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href="#">INV-008101</a></td>
                                                <td class="text-truncate">Walter R.</td>
                                                <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                                                <td class="text-truncate">18/05/2016</td>
                                                <td class="text-truncate">$ 685.00</td>
                                                
                                                 
                                            </tr>
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