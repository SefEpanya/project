<?php
namespace vetis;

require_once '.private/def/imports.php';
require_once _MODEL.'main.php';

?>
<!-- main CSS -->
<link rel="stylesheet" href="<?php echo CSS.'/style.css' ?>">


<link rel="stylesheet" href="<?php echo CSS.'/bootstrap.min.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo CSS.'/font-awesome.min.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo CSS.'/elegant-icons.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo CSS.'/flaticon.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo CSS.'nice-select.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo CSS.'/barfiller.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo CSS.'/magnific-popup.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo CSS.'/jquery-ui.min.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo CSS.'/owl.carousel.min.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo CSS.'/slicknav.min.css' ?>" type="text/css">

<!--
    Front Page : What users see first
    @ navbar and links
    @ header slide or video
    @ research bar with items loaded from database
    @ blog section (maybe with slides)
    @ sidebar
    @ static footer
-->
<body>
    <header>
   
        <?php include('.public/includes/header.php');?>
    </header>
    <div class="container">
        
    </div>
    
        <?php include('.public/includes/footer.php');?>
    
</body>