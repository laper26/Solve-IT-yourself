<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>This is the title...</title>
    <meta name="description" content="Here is a short description for the page. This text is displayed e. g. in search engine result listings.">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="./js/html5shiv.min.js"></script>
    <script src="./js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="container">
    <p>The header is usually the place for a logo or a picture, a navigation bar or a search field.</p>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Solve IT yourself!</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="polish-vet.php">Polish VET at Zespół Szkół Nr 2 w Milanówku</a></li>
                            <li><a href="german-vet.php">German VET at Eckener-Schule Flensburg</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="overview.php">Project-overview</a></li>
                        </ul>
                    </li>
                    <li><a href="location.php">Find us</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span>  Contact us</a></li>
                    <li><a href="policies-and-legislation.php">Policies and legislation</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<section class="container bg-color01">
    <?php
    require_once("includes.php");
    ?>
    <h1>Contact Us</h1>
    <p>You can contact us, using the following E-Mail Adresse. We will be sure to get back to you within 5 minutes. </p>
    <p>E-Mail: <a href="larsp.26@web.de">larsp.26@web.de</a></p>

</section>
<footer class="container bg-color02">
    <p>And here is some text in the footer. And always make sure your html is valid here: <br /><a class="btn btn-link btn-sm active" role="button" href="https://validator.w3.org/#validate_by_input" target="_blank">https://validator.w3.org/#validate_by_input</a></p>
</footer>
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/script.js"></script> <!-- Place your javascript here... -->
</body>
</html>