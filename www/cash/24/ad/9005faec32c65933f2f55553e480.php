<?php

/* index.html */
class __TwigTemplate_24ad9005faec32c65933f2f55553e480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "

    ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "
</body>
</html>";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        // line 45
        echo "
        <!-- Begin page content -->
        <div class=\"container\">
            <div class=\"page-header\">
                <h1>Добро пожаловать на сайт!</h1>
            </div>
            <p class=\"lead\"></p>
            <p></p>
        </div>
        ";
    }

    // line 1
    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "<!doctype html>
<html lang=\"ru\">
<head>

    <meta charset=\"UTF-8\">
    <title></title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css\">
    <link href=\"../css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../css/styles.css\" rel=\"stylesheet\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" />
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>

</head>
<body>

    <div id=\"wrap\">

        <!-- Fixed navbar -->
        <div class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"../controler/pult.php?id=1\">Shop name</a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li ><a href=\"../controler/pult.php?id=1\">Home</a></li>
                        <li><a href=\"../controler/pult.php?id=2\">About</a></li>
                        <li><a href=\"../controler/pult.php?id=3\">Tovars</a></li>

                    </ul>
                </div>
            </div>
        </div>

        ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "    </div>
    ";
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "    <div id=\"footer\">
        <div class=\"container\">
            <p class=\"text-muted credit\">Example courtesy <a href=\"http://martinbean.co.uk\">Martin Bean</a> and <a href=\"http://ryanfait.com/sticky-footer/\">Ryan Fait</a>.</p>
        </div>
    </div>

    <!-- script references -->
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
    <script src=\"../js/bootstrap.min.js\"></script>
</body>
</html>
    ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  107 => 60,  104 => 59,  99 => 55,  97 => 44,  53 => 2,  50 => 1,  37 => 45,  34 => 44,  28 => 72,  26 => 59,  22 => 57,  20 => 1,);
    }
}
