<?php

/* MyAppFilmothequeBundle:Default:index.html.twig */
class __TwigTemplate_d3f23eb673b93bc477998ad5db590de374b57573cb44ebc974ed5fad2aaa31d3 extends Twig_Template
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
        echo " <html>
\t<body>
\t
\t\t<h1>Liste des cat&eacute;gories</h1>
\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 9
            echo "\t\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "nom"), "html", null, true);
            echo "</p>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "\t\t\t<p>Aucune catégorie n'a été trouvée.</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t
\t\t\t
\t\t

\t</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  50 => 11,  42 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
