<!-- main menu-->


  <div class="main-menu-header">
    <input type="text" placeholder="Search" class="menu-search form-control round" />
  </div> <!-- / main menu header-->
  
  <div class="main-menu-content">
    <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

      <li class=" nav-item">
        <a href="<?= lien('/backoffice.php'); ?>">
          <i class="icon-home3"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class=" nav-item">
        <a href="<?= lien('/Commande/'); ?>">
          <i class="icon-newspaper"></i>
          <span class="menu-title">Commandes</span>
        </a>
      </li>

      <?php if($user->est_chefdep): ?>

      <li class=" nav-item">
        <a href="<?= lien('/employe/'); ?>">
          <i class="icon-users2"></i>
          <span class="menu-title">Employes</span>
        </a>
      </li>

      
      <li class=" nav-item">
        <a href="<?= lien('/clients/list.php'); ?>">
        <i class="icon-users2"></i>
        <span class="menu-title">Clients</span>
      </a>
    </li>
    
    <?php endif; ?>

    </ul>
  </div> <!-- /main menu content-->
