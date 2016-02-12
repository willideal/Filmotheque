<?php

/* MyAppFilmothequeBundle:Film:liste.html.twig */
class __TwigTemplate_a94689090d24ffb30e5e42e50545d3e01d704b8d0579cbf63872f785c544e721 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table>
\t<TR>
             <TH>Titre</TH>
             <TH>Description</TH>
             <TH>Catégorie</TH>
    </TR>
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 8
            echo "    <tr>
\t<td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "titre"), "html", null, true);
            echo "</td>
\t<td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "description"), "html", null, true);
            echo "</td>
\t<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "categorie"), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_film_modifier", array("id" => $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"))), "html", null, true);
            echo "\">Modifier</a></td>
\t<td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_film_supprimer", array("id" => $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"))), "html", null, true);
            echo "\">Supprimer</a></td>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "    <tr>
\t<td>Aucun film n'a été trouvé.</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Film:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  58 => 15,  51 => 13,  47 => 12,  39 => 10,  32 => 8,  27 => 7,  19 => 1,  46 => 9,  43 => 11,  41 => 7,  38 => 6,  35 => 9,  29 => 3,);
    }
}
