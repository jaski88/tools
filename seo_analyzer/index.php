<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="2 days">
        <meta name="distribution" content="Global">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="language" content="pl">
        <meta name="author" content="Fancycode.pl">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Fancycode.pl Tworzenie stron i sklepów internetowych, optymalizacja seo, wordpress, e-commerce" >

        <title>Fancycode - Tworzenie stron internetowych </title>

        <link href="http://fancycode.pl/wp-content/themes/fancycode/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://fancycode.pl/wp-content/themes/fancycode/css/custom.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="http://fancycode.pl/wp-content/themes/fancycode/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="http://fancycode.pl/wp-content/themes/fancycode/style.css">
        <script src="http://fancycode.pl/wp-content/themes/fancycode/js/jquery.js"></script>
    </head>

    <body id="page-top" class="index">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href=" #page-top ">Fancycode.pl</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul id="menu-top-menu" class="nav navbar-nav navbar-right"><li id="menu-item-65" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-65"><a href="#home">Home</a></li>
<li id="menu-item-83" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-83"><a href="#oferta">Oferta</a></li>
<li id="menu-item-84" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-84"><a href="#realizacja">Realizacja</a></li>
<li id="menu-item-82" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-82"><a href="#kontakt">Kontakt</a></li>
</ul>                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header id="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-text">
                            <span class="name">Fancycode</span>
                            <!--<span class="skills">Tworzenie stron - Hosting - Rejestracja domen</span>-->
                        </div>
                    </div>
                </div>
            </div>
        </header>



<?php

if( isset($_GET['url']))
{
	$url = $_GET['url'];
}
else
{
	$url = 'http://fancycode.pl/';
}

$html = file_get_contents( $url );

$dom = new DOMDocument;
@$dom->loadHTML($html);

$tags = get_meta_tags( $url );

?>



<!-- About Section -->
<section id="oferta" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Analiza SEO</h1>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">



<form class="bs-component">
<div class="form-group">

                  <div class="input-group">
                    <span class="input-group-addon">Adres URL http://</span>
                    <input class="form-control" type="text" placeholder="http://example.pl" name="url" value="<?php echo $url ?>">
                    <span class="input-group-btn">
                      <button class="btn btn-success" type="button" onClick="submit()">Sprawdź</button>
                    </span>
                  </div>
</div>


<h1>Meta tagi</h1>

<table class="table border">

<tr><th>Meta tag</th><th>Treść</th><th>Wynik</th></tr>
<tr><td>Tytuł</td><td><?php echo @$tags['author']; ?></td><td>OK</td></tr>
<tr><td>Autor</td><td><?php echo @$tags['author']; ?></td><td>OK</td></tr>
<tr><td>Słowa kluczowe</td><td><?php echo @$tags['keywords']; ?></td><td>OK</td></tr>
<tr><td>Opis</td><td><?php echo @$tags['description']; ?></td><td>OK</td></tr>
</table>


<h1>Słowa kluczowe</h1>


<h2>Nagłówki</h2>

<table class="table">
<tr>
	<th>H1</th>
	<th>H2</th>
	<th>H3</th>
	<th>H4</th>
	<th>H5</th>
	<th>H6</th>
</tr>
<tr>
<td><?php echo $dom->getElementsByTagName('h1')->length ?></td>
<td><?php echo $dom->getElementsByTagName('h2')->length ?></td>
<td><?php echo $dom->getElementsByTagName('h3')->length ?></td>
<td><?php echo $dom->getElementsByTagName('h4')->length ?></td>
<td><?php echo $dom->getElementsByTagName('h5')->length ?></td>
<td><?php echo $dom->getElementsByTagName('h6')->length ?></td>
</tr>
</table>

<h2>Linki</h2>

<table  class="table">
<tr>
<td>Wewnętrzne</td>
<td>Zewnętrzne</td>
</tr>

<tr>
<td><?php echo $dom->getElementsByTagName('a')->length ?></td>
<td><?php echo $dom->getElementsByTagName('a')->length ?></td>
</tr>
</table>

<h2>Pozostałe</h2>

Robots.txt

XML Sitemap

Google Analytics


<div class="progress progress-striped active">
  <div class="progress-bar" style="width: 100%"></div>
</div>


            </div>
        </div>
    </div>
</section>

 

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visible-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>
<!-- Footer -->
<footer class="text-center">
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Fancycode.pl 2017 | 
                    <i>Email:</i> <a href="mailto:biuro@fancycode.pl?Subject=Zapytanie%20ze%20strony">biuro@fancycode.pl</a> |
                    <i>Tel:</i> (+48) 501 381 543 
                    (Pon - Pt 9:00 - 17:00)

                </div>
            </div>

                            <div class="row">
                    <div class="col-lg-12">
                                            </div>
                </div>
                    </div>
    </div>
</footer>

<script src="http://fancycode.pl/wp-content/themes/fancycode/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="http://fancycode.pl/wp-content/themes/fancycode/js/classie.js"></script>
<script src="http://fancycode.pl/wp-content/themes/fancycode/js/cbpAnimatedHeader.js"></script>
<script src="http://fancycode.pl/wp-content/themes/fancycode/js/freelancer.js"></script>

</body>
</html>




