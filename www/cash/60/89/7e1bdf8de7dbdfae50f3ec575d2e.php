<?php

/* pagegalery.html */
class __TwigTemplate_60897e1bdf8de7dbdfae50f3ec575d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("about.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "about.html";
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
    <div class=\"row\">
       ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "       <div class=\"col-md-4\">
           <img src=\"../img/2.jpg\" alt=\"...\" class=\"img-thumbnail\" width=\"\">
           <p class=\"text-center\">Tovar1</p>
       </div>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "    </div>

    <p></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "pagegalery.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  37 => 7,  33 => 6,  29 => 4,  26 => 3,);
    }
}
