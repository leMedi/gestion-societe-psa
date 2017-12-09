<?php
require __DIR__. '/../include/outils.php';



if(!isset($_GET['id']))
    header('Location:index.php');

$employe = new employers();
$employe = $employe->trouver('id', $_GET['id']);

if($employe == false)
    header('Location:index.php');
?>


<?php
    template('header', array(
        'path' => '../'
    ));
?>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="public/img/sidebar-5.jpg">
        <?php template('sidebar'); ?> 
    </div> <!-- .sidebar -->

    <div class="main-panel">
        <?php template('nav', array(
            'title' => 'Employers',
            'actions' => array(
                array(
                    'nom'   => 'Ajouter',
                    'icon'  => 'fa fa-plus',
                    'lien'  => '/employe/ajouter.php'
                )
            )
        )); ?> 
    
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">
                                    <?= $employe->nom ?>
                                    <a class="btn btn-primary pull-right"  href="<?= lien('/employe/modifier.php?id=' . $employe->id) ?>">
                                        <i class="fa fa-plus"></i>
                                        Modifier
                                    </a>
                                </h4>
                                <hr>
                            </div>
                            <div class="content">
                                <div class="typo-line">
                                    <h4><p class="category">Nom</p><?= $employe->nom ?></h4>
                                </div>

                                <div class="typo-line">
                                    <h4><p class="category">Prenom</p><?= $employe->prenom ?></h4>
                                </div>
                               <div class="typo-line">
                                    <h4><p class="category">Tel</p><?= $employe->tel?></h4>
                                </div>
                                <div class="typo-line">
                                    <h4><p class="category">Addresse</p><?= $employe->address ?></h4>
                                </div>
                                <div class="typo-line">
                                    <h4><p class="category">Email</p><?= $employe->email ?></h4>
                                </div>
                                <div class="typo-line">
                                    <h4><p class="category">Salaire</p><?= $employe->salaire ?></h4>
                                </div>
                                <div class="typo-line">
                                    <h4><p class="category">Password</p><?= $employe->password ?></h4>
                                </div>
                                <div class="typo-line">
                                    <h4><p class="category">Admin</p><?php if($employe->admin == 1){echo "Administrateur";}else{echo "N'est pas Administrateur";} ?></h4>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div> <!-- .col -->

                </div>
            </div>
        </div> <!-- .content -->
<?php
    template('footer', array(
        'path' => '../'
    ));
?>