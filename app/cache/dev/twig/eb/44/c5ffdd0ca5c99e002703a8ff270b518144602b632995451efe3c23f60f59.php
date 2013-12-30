<?php

/* AcmeAdminBundle:Agencias:create.html.twig */
class __TwigTemplate_eb44c5ffdd0ca5c99e002703a8ff270b518144602b632995451efe3c23f60f59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeAdminBundle:Default:main.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeAdminBundle:Default:main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Acme Demo Application";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"row\">
\t\t<h3>Crear una nueva agencia</h3>
\t\t
\t\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["createForm"]) ? $context["createForm"] : $this->getContext($context, "createForm")), 'form');
        echo "

\t</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeAdminBundle:Agencias:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 38,  65 => 23,  34 => 7,  23 => 4,  153 => 44,  146 => 42,  127 => 25,  118 => 30,  114 => 28,  104 => 21,  53 => 41,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 22,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 41,  135 => 34,  119 => 42,  102 => 32,  71 => 12,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 19,  75 => 13,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 12,  93 => 33,  88 => 20,  78 => 33,  46 => 13,  27 => 5,  44 => 12,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 35,  136 => 56,  121 => 46,  117 => 44,  105 => 45,  91 => 21,  62 => 23,  49 => 19,  24 => 7,  25 => 3,  19 => 2,  79 => 14,  72 => 16,  69 => 25,  47 => 9,  40 => 6,  37 => 5,  22 => 3,  246 => 90,  157 => 45,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 43,  96 => 34,  83 => 35,  74 => 14,  66 => 11,  55 => 16,  52 => 11,  50 => 14,  43 => 9,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 43,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 26,  125 => 44,  122 => 43,  116 => 41,  112 => 25,  109 => 34,  106 => 36,  103 => 44,  99 => 31,  95 => 42,  92 => 21,  86 => 28,  82 => 22,  80 => 34,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 12,  45 => 17,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 5,);
    }
}
