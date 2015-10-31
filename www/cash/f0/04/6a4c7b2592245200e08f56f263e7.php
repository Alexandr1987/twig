<?php

/* about.html */
class __TwigTemplate_f0046a4c7b2592245200e08f56f263e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"page-header\">
        <h1>Добро пожаловать на мой сайт!</h1>
    </div>
    <p class=\"lead\">Меня зовут Александр, я учусь програмировать на PHP ))</p>
    <p></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "about.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  26 => 3,);
    }
}
