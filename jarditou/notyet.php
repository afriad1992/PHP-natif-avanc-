<?php
    require_once 'assets/php/globals.php';
    include_once $skel.'head.inc';
?>
<p class="offset-lg-1">
    Le fichier que vous avez demandé n'est pas encore accessible, nous sommes désolés de ne pouvoir répondre à votre demande.
</p>
<?php
    include_once $skel.'foot.inc';
    header('refresh:5;url=index.php');
?>