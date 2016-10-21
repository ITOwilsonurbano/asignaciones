<?php

/* base.html.twig */
class __TwigTemplate_a5bc138acb46d43cbc0a655911cdc1b639f2e80db55026dcc24b4c745e54d15d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ee0cacf06f52d3c8e81d6421e8dd793d05f238d5700b59565c9ee541475b8c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee0cacf06f52d3c8e81d6421e8dd793d05f238d5700b59565c9ee541475b8c4->enter($__internal_9ee0cacf06f52d3c8e81d6421e8dd793d05f238d5700b59565c9ee541475b8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9ee0cacf06f52d3c8e81d6421e8dd793d05f238d5700b59565c9ee541475b8c4->leave($__internal_9ee0cacf06f52d3c8e81d6421e8dd793d05f238d5700b59565c9ee541475b8c4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd0a60e92dfe1d3ae7c2fdac515ca773652196f31478beee165eeb094d58b100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0a60e92dfe1d3ae7c2fdac515ca773652196f31478beee165eeb094d58b100->enter($__internal_bd0a60e92dfe1d3ae7c2fdac515ca773652196f31478beee165eeb094d58b100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bd0a60e92dfe1d3ae7c2fdac515ca773652196f31478beee165eeb094d58b100->leave($__internal_bd0a60e92dfe1d3ae7c2fdac515ca773652196f31478beee165eeb094d58b100_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_142016cff614edf2bea3c2468d7cb641076e3ca4bf10428e18b0e83c1f7fc64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142016cff614edf2bea3c2468d7cb641076e3ca4bf10428e18b0e83c1f7fc64e->enter($__internal_142016cff614edf2bea3c2468d7cb641076e3ca4bf10428e18b0e83c1f7fc64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_142016cff614edf2bea3c2468d7cb641076e3ca4bf10428e18b0e83c1f7fc64e->leave($__internal_142016cff614edf2bea3c2468d7cb641076e3ca4bf10428e18b0e83c1f7fc64e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d24d93c6e32b7a933cf52f33bd9f1e4ff9fab3c326ad89d766353d817393e642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24d93c6e32b7a933cf52f33bd9f1e4ff9fab3c326ad89d766353d817393e642->enter($__internal_d24d93c6e32b7a933cf52f33bd9f1e4ff9fab3c326ad89d766353d817393e642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d24d93c6e32b7a933cf52f33bd9f1e4ff9fab3c326ad89d766353d817393e642->leave($__internal_d24d93c6e32b7a933cf52f33bd9f1e4ff9fab3c326ad89d766353d817393e642_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d20768c3c99894c292b7b7b4ed0d495e4d7ac17a4c4413455028f8ca167acbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20768c3c99894c292b7b7b4ed0d495e4d7ac17a4c4413455028f8ca167acbe0->enter($__internal_d20768c3c99894c292b7b7b4ed0d495e4d7ac17a4c4413455028f8ca167acbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d20768c3c99894c292b7b7b4ed0d495e4d7ac17a4c4413455028f8ca167acbe0->leave($__internal_d20768c3c99894c292b7b7b4ed0d495e4d7ac17a4c4413455028f8ca167acbe0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
