<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="pt-br"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="pt-br"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="pt-br"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

    <?php echo doctype('xhtml1-trans'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <html lang="pt-br">
        <!--<![endif]-->
    <head>
        <meta charset="utf-8">
    <title>Alexandre livre - Desenvolvedor de aplicações Web.</title>

    
          <!-- Mobile Specific Metas
    ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php
        $meta= array(
          
          array('name' => 'robots', 'content' => 'no-cache'),
          array('name' => 'discription', 'content' => 'Alexandre livre - Templates e web sites'),
          
          array('name' => 'keyworks', 'content' => 'sistemas, sistemas web, sistema administrativo web,
              loja online, desenvolvimento de sites, Templates para blogs, modelos para blogs, , sites,
              templates para sites, modelos para sites, Templates, consultoria de projetos, manutenção,
              suporte ao projeto, otimização de sites'),
            
          array('name' => 'robots', 'content' => 'no-cache'),
          array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv'),
          array('name' => 'autor', 'content' => '')
            
            );    
        
          echo meta($meta);
     
          // caregando os icons do site
          echo link_tag('img/icon/apple-touch-icon-114x114.png', 'apple-touch-icon', 'image/ico');
          echo link_tag('img/icon/apple-touch-icon-144x144.png', 'apple-touch-icon', 'image/ico');
          echo link_tag('img/icon/apple-touch-icon-72x72.png', 'apple-touch-icon', 'image/ico');
     ?>    
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!-- Add custom CSS here -->
    <link href="css/landing-page.css" rel="stylesheet">

</head>

<body>