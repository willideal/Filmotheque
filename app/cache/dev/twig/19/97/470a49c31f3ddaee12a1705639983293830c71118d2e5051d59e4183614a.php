<?php

/* MyAppFilmothequeBundle:Acteur:lister.html.twig */
class __TwigTemplate_1997470a49c31f3ddaee12a1705639983293830c71118d2e5051d59e4183614a extends Twig_Template
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
        echo "Liste des acteurs";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"form_recherche\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("myapp_acteur_rechercher");
        echo "\" method=\"post\">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Rechercher\" />
</form>
<div class=\"loading\"></div>
<div id=\"resultats_recherche\"> 
    ";
        // line 14
        $this->env->loadTemplate("MyAppFilmothequeBundle:Acteur:liste.html.twig")->display(array_merge($context, array("acteurs" => (isset($context["acteurs"]) ? $context["acteurs"] : $this->getContext($context, "acteurs")))));
        // line 15
        echo "</div>

<p><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("myapp_acteur_ajouter");
        echo "\">Ajouter un acteur</a><p>

<script>
\$(\".loading\").hide();
\$(\"#form_recherche\").submit(function(){ 
    \$(\".loading\").show();
    var motcle = \$(\"#acteurrecherche_motcle\").val();
    var DATA = 'motcle=' + motcle;
    \$.ajax({
        type: \"POST\",
        url: \"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("myapp_acteur_rechercher");
        echo "\",
        data: DATA,
        cache: false,
        success: function(data){
           \$('#resultats_recherche').html(data);
           \$(\".loading\").hide();
        }
    });    
    return false;
});
</script>
";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Acteur:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  59 => 17,  55 => 15,  53 => 14,  45 => 9,  41 => 8,  38 => 7,  35 => 6,  29 => 3,);
    }
}
