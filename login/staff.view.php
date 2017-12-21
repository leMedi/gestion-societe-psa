<?php
    template('header', array('noMenu' => true));
?>

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header no-border">
                            <div class="card-title text-xs-center">
                                <div class="p-1">
                                    <img src="../../app-assets/images/logo/robust-logo-dark.png" alt="branding logo">
                                </div>
                            </div>
                            <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2">
                                <span>Societe Continantal</span>
                            </h6>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <form class="form-horizontal form-simple" action="" method="POST">
                                    <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <input type="text" class="form-control form-control-lg input-lg" placeholder="exemple@continantal.com" name="email" required>
                                        <div class="form-control-position">
                                            <i class="icon-head"></i>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="password" class="form-control form-control-lg input-lg" placeholder="*****" name="password" required>
                                        <div class="form-control-position">
                                            <i class="icon-key3"></i>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group row">
                                        <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                            <fieldset>
                                                <input type="checkbox" id="remember-me" class="chk-remember">
                                                <label for="remember-me"> Se souvenir de moi</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-xs-12 text-xs-center text-md-right">
                                            <a href="recover-password.html" class="card-link">Mot De Pass Oublier?</a>
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        <i class="icon-unlock2"></i> Connexion</button>
                                </form>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<?php
    template('footer');
?>