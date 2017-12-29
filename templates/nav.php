 
  <div class="navbar-wrapper">
    <div class="navbar-header">
      <ul class="nav navbar-nav">
        <li class="nav-item mobile-menu hidden-md-up float-xs-left">
          <a class="nav-link nav-menu-main menu-toggle hidden-xs">
            <i class="icon-menu5 font-large-1"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.html" class="navbar-brand nav-link">
            <img alt="branding logo" src="<?= asset('images/logo.png') ?>" class="brand-logo" style="width: 100%;">
          </a>
        </li>
        <li class="nav-item hidden-md-up float-xs-right">
          <a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container">
            <i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i>
          </a>
        </li>
      </ul>
    </div>

    <div class="navbar-container content container-fluid">
      <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
        
      <ul class="nav navbar-nav">
          <li class="nav-item hidden-sm-down">
            <a class="nav-link nav-menu-main menu-toggle hidden-xs">
              <i class="icon-menu5"> </i>
            </a>
          </li>
          <li class="nav-item hidden-sm-down">
            <a href="#" class="nav-link nav-link-expand">
              <i class="ficon icon-expand2"></i>
            </a>
          </li>
          <?php
            if(isset($actions))
              foreach ($actions as $action) :
          ?>
          <li class="nav-item">
            <a href="<?= $action['link'] ?>" class="nav-action btn btn-<?= $action['color'] ?>"><?= $action['text'] ?></a>
          </li>
          
          
          <?php
            endforeach;
          ?>
        </ul>

        <?php if(isset($companyTitle)): ?>
            <h3 style="display:inline-block; margin-top:13px; margin-left: 18%;"><?= $companyTitle ?></h3>
        <?php endif; ?>

        <ul class="nav navbar-nav float-xs-right">
          
          <!-- Notifications -->
          <?php $notifications = $user->notifications(); ?>
          <li id="notif-btn" class="dropdown dropdown-notification nav-item">
            <a href="#" data-toggle="dropdown" class="nav-link nav-link-label">
              <i class="ficon icon-bell4"></i>
              <?php if(count($notifications) != 0): ?>
              <span id="circle" class="tag tag-pill tag-default tag-danger tag-default tag-up"><?= count($notifications);  ?></span>
            <?php endif; ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
              <li class="dropdown-menu-header">
                <h6 class="dropdown-header m-0">
                  <span class="grey darken-2">Notifications</span>
                  <span class="notification-tag tag tag-default tag-danger float-xs-right m-0"><?= count($notifications);  ?> New</span>
                </h6>
              </li>
                <?php foreach ($notifications as $notif) {
                template('notification', array(
                  'title' => $notif->title,
                  'body'  => $notif->body
                ));
                }
                 ?> 
              <li class="dropdown-menu-footer">
                <a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a>
              </li>
            </ul>
          </li>
          <!-- End-Notifications -->

          <!-- User -->
          <li class="dropdown dropdown-user nav-item">
            <a id="bell" href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
              <span class="avatar avatar-online">
                <img src="<?= asset('avatars/') . $user->avatar ?>" alt="avatar">
                <i></i>
              </span>
              <span class="user-name"><?= $user->nom . ' ' . $user->prenom ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <i class="icon-head"></i> Edit Profile
              </a>
              
              <a href="<?= lien('/logout.php') ?>" class="dropdown-item">
                <i class="icon-power3"></i> Logout
              </a>
            </div>
          </li>
          <!-- End-User -->
          
        </ul>
      </div>
    </div>
  </div>
