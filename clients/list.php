<?php

require __DIR__. '/../include/outils.php';
$user = pageProteger(); 

$clients = Client::tous();

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
                'link'  => lien('/clients/ajouter.php'),
                'text'  => 'ajouter',
                'color' => 'success' 
            )
        )
    )); ?> 
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
                                        <th>Nom & Prenom</th>
                                        <th>Societe</th>
                                        <th>tel</th>
                                        <th>address</th>
                                        <th>email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($clients as $client):
                                    ?>
                                    <tr>
                                        <td class="text-truncate">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="avatar avatar-sm avatar-online rounded-circle">
                                                        <img src="<?= lien('/public/avatars/' . $client->avatar) ?>" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <a href="#" class="media-heading"><?= $client->nom ?></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-truncate"><?= $client->societe ?></td>
                                        <td class="text-truncate"><?= $client->tel ?></td>
                                        <td class="text-truncate"><?= $client->address ?></td>
                                        <td class="text-truncate"><?= $client->email ?></td>                                        
                                    </tr>
                                    <?php
                                        endforeach;
                                    ?>
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
    template('footer');
?>