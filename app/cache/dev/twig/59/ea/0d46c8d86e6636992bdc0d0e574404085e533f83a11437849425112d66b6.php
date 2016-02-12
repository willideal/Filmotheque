<?php

/* MyAppFilmothequeBundle::layout.html.twig */
class __TwigTemplate_59ea0d46c8d86e6636992bdc0d0e574404085e533f83a11437849425112d66b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>

    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappfilmotheque/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\" type=\"text/javascript\"></script>
\t</head>
    <body>
        <div id=\"page\">
            <div id=\"header\">
\t\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappfilmotheque/images/logo.png"), "html", null, true);
        echo "\" alt=\"Filmothèque\" width=\"128\" height=\"128\" />
\t\t<ul id=\"menu\">
\t\t    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("myapp_accueil");
        echo "\">Accueil</a></li>
\t\t    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("myapp_film_lister");
        echo "\">Films</a></li>
\t\t    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("myapp_acteur_lister");
        echo "\">Acteurs</a></li> 
\t\t\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("myapp_accueil");
        echo "\">Contact</a></li>
\t\t</ul>
\t\t<div id=\"choisir_langue\">Choisir la langue :
\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "fr"));
        echo "\">FR</a> |
\t\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "en"));
        echo "\">EN</a>
\t\t</div>
            </div>

            <div id=\"content\">
                <h1>";
        // line 26
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
                ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "            </div>
            <div id=\"footer\">
                <p>Tous droits réservés © 2014</p>
            </div>
        </div>
    </body>
</html>










";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Filmothèque";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "                ";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 28,  108 => 27,  102 => 4,  81 => 29,  79 => 27,  75 => 26,  67 => 21,  63 => 20,  53 => 16,  49 => 15,  45 => 14,  40 => 12,  26 => 4,  21 => 1,  57 => 17,  50 => 11,  42 => 9,  37 => 8,  31 => 6,  28 => 3,);
    }
}
