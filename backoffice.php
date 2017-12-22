<?php

require __DIR__. '/include/outils.php';

$user = pageProteger();
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

    
    
<div class="app-content content container-fluid" >
    <div class="content-wrapper">
        
  
    </div>
</div> <!-- .content -->
<?php
    template('footer');
?>