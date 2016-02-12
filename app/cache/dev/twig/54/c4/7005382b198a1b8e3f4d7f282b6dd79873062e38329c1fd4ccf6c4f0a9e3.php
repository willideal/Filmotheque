<?php

/* MyAppFilmothequeBundle:Film:lister.html.twig */
class __TwigTemplate_54c47005382b198a1b8e3f4d7f282b6dd79873062e38329c1fd4ccf6c4f0a9e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppFilmothequeBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Liste des films";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $this->env->loadTemplate("MyAppFilmothequeBundle:Film:liste.html.twig")->display(array_merge($context, array("films" => (isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")))));
        // line 8
        echo "
<p><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("myapp_film_ajouter");
        echo "\">Ajouter un film</a><p>

";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Film:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
