<?php
  function nav_item (string $lien, string $titre):string{
    $classe =' ';
    if ($_SERVER['SCRIPT_NAME']!=$lien){
        $classe = 'text-muted' ;
    }
    return '<li class="nav-item">
             <a class="nav-link text-dark ' . $classe . '" href="' . $lien . '">' . $titre . '</a>
            </li>';
    
  }
?>

<?= nav_item('/index.php', 'Home'); ?>
<?= nav_item('/buy.php', 'Buy'); ?>
<?= nav_item('/about.php', 'About'); ?>