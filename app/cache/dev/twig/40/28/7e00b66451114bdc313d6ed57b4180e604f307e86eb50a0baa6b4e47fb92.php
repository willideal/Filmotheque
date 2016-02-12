<?php

/* MyAppFilmothequeBundle:Acteur:liste.html.twig */
class __TwigTemplate_40287e00b66451114bdc313d6ed57b4180e604f307e86eb50a0baa6b4e47fb92 extends Twig_Template
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

";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("acteur.liste"), "html", null, true);
        echo "
\t<TR>
             <TH>Nom</TH>
             <TH>Prénoms</TH>
             <TH>Date de naissance</TH>
\t\t\t <TH>Sexe</TH>
    </TR>
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acteurs"]) ? $context["acteurs"] : $this->getContext($context, "acteurs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 11
            echo "    <tr>
\t<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "nom"), "html", null, true);
            echo "</td>
\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "prenom"), "html", null, true);
            echo "</td>
\t<td>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "dateNaissance"), "d/m/Y"), "html", null, true);
            echo "</td>
\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "sexe"), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_acteur_modifier", array("id" => $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"))), "html", null, true);
            echo "\">Modifier</a></td>
\t<td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_acteur_supprimer", array("id" => $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"))), "html", null, true);
            echo "\">Supprimer</a></td>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "    <tr>
\t<td>Aucun acteur n'a été trouvé.</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Acteur:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  68 => 19,  57 => 16,  49 => 14,  33 => 10,  23 => 3,  19 => 1,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 335,  1066 => 334,  1062 => 333,  1053 => 332,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 319,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 304,  969 => 303,  965 => 302,  959 => 301,  956 => 300,  948 => 296,  944 => 295,  941 => 294,  932 => 287,  930 => 286,  926 => 285,  923 => 284,  918 => 280,  910 => 278,  906 => 277,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 267,  883 => 265,  881 => 264,  878 => 263,  871 => 259,  869 => 258,  845 => 257,  842 => 255,  839 => 253,  837 => 252,  835 => 251,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 233,  803 => 232,  799 => 229,  797 => 228,  795 => 227,  793 => 226,  791 => 225,  788 => 224,  784 => 221,  781 => 216,  776 => 212,  756 => 208,  753 => 206,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 199,  737 => 198,  734 => 197,  730 => 192,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 185,  706 => 182,  703 => 180,  701 => 179,  698 => 178,  694 => 175,  692 => 174,  689 => 173,  685 => 170,  683 => 169,  680 => 168,  675 => 165,  673 => 164,  670 => 163,  665 => 160,  663 => 159,  660 => 158,  656 => 155,  654 => 154,  651 => 153,  647 => 150,  645 => 149,  642 => 148,  638 => 145,  635 => 144,  631 => 141,  629 => 140,  626 => 139,  622 => 136,  619 => 135,  616 => 133,  611 => 129,  601 => 128,  596 => 127,  594 => 126,  591 => 124,  589 => 123,  586 => 122,  581 => 118,  579 => 116,  578 => 115,  577 => 114,  576 => 113,  572 => 112,  569 => 110,  567 => 109,  564 => 108,  558 => 104,  556 => 103,  554 => 102,  552 => 101,  550 => 100,  546 => 99,  543 => 97,  541 => 96,  538 => 95,  524 => 92,  521 => 91,  507 => 88,  504 => 87,  479 => 82,  476 => 80,  474 => 79,  472 => 78,  467 => 77,  465 => 76,  448 => 75,  445 => 74,  441 => 71,  439 => 70,  437 => 69,  431 => 66,  429 => 65,  427 => 64,  425 => 63,  423 => 62,  414 => 60,  412 => 59,  404 => 58,  401 => 57,  399 => 56,  397 => 55,  394 => 54,  389 => 51,  383 => 49,  381 => 48,  377 => 47,  373 => 46,  370 => 45,  365 => 41,  362 => 39,  360 => 38,  357 => 37,  349 => 34,  346 => 33,  342 => 30,  339 => 28,  337 => 27,  334 => 26,  330 => 23,  328 => 22,  326 => 21,  323 => 19,  321 => 18,  317 => 17,  314 => 16,  300 => 13,  298 => 12,  295 => 11,  290 => 7,  287 => 5,  285 => 4,  282 => 3,  278 => 331,  275 => 330,  273 => 317,  270 => 316,  268 => 300,  265 => 299,  263 => 294,  260 => 293,  257 => 291,  255 => 284,  252 => 283,  250 => 274,  247 => 273,  245 => 270,  242 => 269,  240 => 263,  237 => 262,  235 => 250,  232 => 249,  230 => 244,  227 => 243,  224 => 241,  222 => 238,  219 => 237,  217 => 232,  214 => 231,  212 => 224,  209 => 223,  207 => 216,  204 => 215,  201 => 213,  199 => 212,  196 => 211,  194 => 197,  191 => 196,  188 => 194,  186 => 190,  183 => 189,  181 => 185,  178 => 184,  176 => 178,  173 => 177,  171 => 173,  169 => 168,  166 => 167,  164 => 163,  161 => 162,  159 => 158,  156 => 157,  154 => 153,  151 => 152,  149 => 148,  146 => 147,  144 => 144,  141 => 143,  139 => 139,  136 => 138,  134 => 133,  131 => 132,  129 => 122,  126 => 121,  124 => 108,  121 => 107,  119 => 95,  116 => 94,  114 => 91,  111 => 90,  109 => 87,  106 => 86,  104 => 74,  101 => 73,  99 => 54,  96 => 53,  94 => 45,  91 => 44,  89 => 37,  86 => 36,  84 => 33,  81 => 32,  79 => 26,  76 => 25,  74 => 16,  71 => 15,  69 => 11,  66 => 10,  64 => 3,  61 => 17,  72 => 27,  59 => 17,  55 => 15,  53 => 15,  45 => 13,  41 => 12,  38 => 11,  35 => 6,  29 => 3,);
    }
}
