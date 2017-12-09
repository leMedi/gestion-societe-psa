<?php
require_once(__DIR__. '/../include/outils.php');

function ancient($cle)
{
    global $employe;
    if($employe && array_key_exists($cle, $employe))
        return $employe[$cle];
    else
        return '';
}

?>


<?php
    template('header', array(
        'path' => '../'
    ));
?>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="../public/img/sidebar-5.jpg">
        <?php template('sidebar'); ?> 
    </div> <!-- .sidebar -->

    <div class="main-panel">
        <?php template('nav', array(
            'title' => 'Employees',
            
        )); ?>
    
    <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Ajouter un Employee</h4>
                    </div>
                    <div class="content">
                        <form method="POST">
                        <input name="employe[id]" value="<?= $employe['id'] ?>" type="text" HIDDEN>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input name="employe[nom]" value="<?= ancient('nom') ?>" type="text" class="form-control">
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Prenom</label>
                                        <input name="employe[prenom]" value="<?= ancient('prenom') ?>" type="text" class="form-control">
                                        </div>
                                </div>
                            </div> <!-- .row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input name="employe[tel]" value="<?= ancient('tel') ?>" type="number" class="form-control">
                                        </div>
                                </div>
                            </div> <!-- .row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>E-m@il</label>
                                        <input name="employe[email]" value="<?= ancient('email') ?>" type="text" class="form-control">
                                        </div>
                                </div>
                            </div> <!-- .row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Addresse </label>
                                        <input name="employe[address]" value="<?= ancient('address') ?>" type="text" class="form-control">
                                        </div>
                                </div>
                            </div> <!-- .row -->
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Salaire</label>
                                            <div class="input-group">
                                            <input name="employe[salaire]" value="<?= ancient('salaire') ?>" type="int" class="form-control">
                                            <div class="input-group-addon">DH</div>
                                            </div>
                                        </div>
                                    </div>
                            </div> <!-- .row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> Password </label>
                                        <input name="employe[password]" value="<?= ancient('password') ?>" type="password" class="form-control">
                                        </div>
                                </div>
                            </div> <!-- .row -->
                            <div class="row">  
                                <div class="col-md-9">
                                    <select name="employe[admin]" class="form-control" value="<?= ancient('admin') ?>">
                                        <option value="1">Administrateur</option>
                                        <option value="0">N'est pas administrateur</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Enregistrer</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div> <!-- .row -->
                            
                        </form>
                    </div> <!-- .content -->
                </div> <!-- .card -->
            </div> <!-- .col -->
        </div>
    </div>
</div> <!-- .content -->
<?php
    template('footer', array(
        'path' => '../'
    ));
?>