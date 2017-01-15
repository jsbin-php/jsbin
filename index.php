<?php
/**
 * JS Bin PHP
 * Site Index
 *
 * @author      BizLogic <hire@bizlogicdev.com>
 * @copyright   2016 BizLogic
 * @link        http://bizlogicdev.com
 * @link        http://jsbinphp.com
 *
 * @since       Sunday, January 15, 2016 / 01:29 AM
 * @edited      $Date$
 * @version     $Id$
 *
 * @package     JS Bin PHP
 * @category    Site Index
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>JS Bin PHP</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/custom.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5shiv/html5shiv.min.js"></script>
        <script type="text/javascript" src="js/respond/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">JS Bin PHP</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <!--li>
                            <a href="share">Share</a>
                        </li-->
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container-fluid">

            <div class="starter-template">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="block-header">
                            HTML
                        </div>

                        <textarea id="inputHtml" class="inputTextarea form-control input-lg" rows="20"></textarea>
                    </div>

                    <div class="col-lg-4">
                        <div class="block-header">
                            JavaScript
                        </div>

                        <textarea id="inputJs" class="inputTextarea form-control input-lg" rows="20"></textarea>
                    </div>

                    <div class="col-lg-4">
                        <div class="block-header">
                            Output
                        </div>

                        <iframe id="generated-code" class="stretch" sandbox="allow-modals allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts" name="&lt;proxy&gt;" src="runner.php" frameborder="0"></iframe>
                    </div>
                </div>
            </div>

        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/php.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>
