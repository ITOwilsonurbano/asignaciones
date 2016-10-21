<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f7fab793473cbeaa72a24cfcc971a46e1c652b877da489bd7f63623975bc4435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad3ffaafc1c9827d5931fe38aa3b47068baf2d96dde67a2425b34ba2a6c4983d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3ffaafc1c9827d5931fe38aa3b47068baf2d96dde67a2425b34ba2a6c4983d->enter($__internal_ad3ffaafc1c9827d5931fe38aa3b47068baf2d96dde67a2425b34ba2a6c4983d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad3ffaafc1c9827d5931fe38aa3b47068baf2d96dde67a2425b34ba2a6c4983d->leave($__internal_ad3ffaafc1c9827d5931fe38aa3b47068baf2d96dde67a2425b34ba2a6c4983d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7665c2ea735cfe77d361c91490e740badc7fc149f867ffabd29e7cda312b40d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7665c2ea735cfe77d361c91490e740badc7fc149f867ffabd29e7cda312b40d8->enter($__internal_7665c2ea735cfe77d361c91490e740badc7fc149f867ffabd29e7cda312b40d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7665c2ea735cfe77d361c91490e740badc7fc149f867ffabd29e7cda312b40d8->leave($__internal_7665c2ea735cfe77d361c91490e740badc7fc149f867ffabd29e7cda312b40d8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c732e525dcd58aa71f42d959ece0c52c6e99042595a7102e3e0e2baea0e33d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c732e525dcd58aa71f42d959ece0c52c6e99042595a7102e3e0e2baea0e33d2c->enter($__internal_c732e525dcd58aa71f42d959ece0c52c6e99042595a7102e3e0e2baea0e33d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c732e525dcd58aa71f42d959ece0c52c6e99042595a7102e3e0e2baea0e33d2c->leave($__internal_c732e525dcd58aa71f42d959ece0c52c6e99042595a7102e3e0e2baea0e33d2c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_16b4a26c0bdd022158d91af1c895949766bc373cbe6df30d997ab97c3a78e68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b4a26c0bdd022158d91af1c895949766bc373cbe6df30d997ab97c3a78e68f->enter($__internal_16b4a26c0bdd022158d91af1c895949766bc373cbe6df30d997ab97c3a78e68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_16b4a26c0bdd022158d91af1c895949766bc373cbe6df30d997ab97c3a78e68f->leave($__internal_16b4a26c0bdd022158d91af1c895949766bc373cbe6df30d997ab97c3a78e68f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
