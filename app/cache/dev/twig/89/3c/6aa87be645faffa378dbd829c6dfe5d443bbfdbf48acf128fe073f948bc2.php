<?php

/* MyAppFilmothequeBundle:Film:editer.html.twig */
class __TwigTemplate_893c6aa87be645faffa378dbd829c6dfe5d443bbfdbf48acf128fe073f948bc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppFilmothequeBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppFilmothequeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Ajouter un film</h1>

";
        // line 6
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 7
            echo "<p>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
";
        }
        // line 9
        echo "
<form action=\"\" method=\"post\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" />
</form>
<p><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("myapp_film_lister");
        echo "\">Retour à la liste des films</a></p>
";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Film:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  50 => 11,  46 => 10,  43 => 9,  37 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
