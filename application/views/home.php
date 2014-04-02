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

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php base_url(); ?>">Alexandre livre</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#Sobre">Sobre</a>
                    </li>
                    <li><a href="#Vitrine">Vitrine</a>
                    </li>
                    <li><a href="#Contato">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Desenvolvimento de ideias</h1>
                        <h3>Suporte do modo que você gosta</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li><a href="https://twitter.com/alexandrelivre" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li><a href="https://github.com/Alexandrelivre" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Sistemas elegantes e bonitos.
                        <br>Algo elegante.</h2>
                    <p class="lead">Que farram teus concorrentes passar a comprar os teus produtos...&nbsp;&nbsp;<a target="_blank" href="http://www.loja.alexandrelivre.com/">Acesse nossa loja</a>&nbsp;&nbsp;Compre já o seu sistema.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/doge.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Sistemas para mobile</h2>
                    <p class="lead">Sistemas do jeito que você precisar, encomende o seu de modo que não precise se preocupar.&nbsp;&nbsp;<a target="_blank" href="#">Faça já o seu pedido</a></p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Algo agradável, bonito. 
                        <br>Algo que te lembre a vida.</h2>
                    <p class="lead">Todos nos achamos que você merece algo muito bonito.&nbsp;Você não irra se arrepender de nos pedir para fazer o projeto dos seus sonhos.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/phones.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Conecte-se conosco:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li><a href="https://twitter.com/alexandrelivre" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li><a href="https://github.com/Alexandrelivre" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="#">Inicio</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="#Sobre">Sobre</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="#Vitrine">Vitrine</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="#Contato">Contato</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Alexandrelivre 2014. Todos os direitos reservados</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>