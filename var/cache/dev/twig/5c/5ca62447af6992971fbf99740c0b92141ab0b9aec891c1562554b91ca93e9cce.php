<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f3e1e8bf2436e49cf86f9299632fbe62b9580224e32116d87f861d244679509c extends Twig_Template
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
        $__internal_3e2f50d3e0ce090cf08ca188822883070d41375f8bac1ea9777b3104cbdd67ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2f50d3e0ce090cf08ca188822883070d41375f8bac1ea9777b3104cbdd67ea->enter($__internal_3e2f50d3e0ce090cf08ca188822883070d41375f8bac1ea9777b3104cbdd67ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cb315db91e2f152119fe02890eb9efbdf45258a24dc3d3252d91b18f8a07390b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb315db91e2f152119fe02890eb9efbdf45258a24dc3d3252d91b18f8a07390b->enter($__internal_cb315db91e2f152119fe02890eb9efbdf45258a24dc3d3252d91b18f8a07390b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e2f50d3e0ce090cf08ca188822883070d41375f8bac1ea9777b3104cbdd67ea->leave($__internal_3e2f50d3e0ce090cf08ca188822883070d41375f8bac1ea9777b3104cbdd67ea_prof);

        
        $__internal_cb315db91e2f152119fe02890eb9efbdf45258a24dc3d3252d91b18f8a07390b->leave($__internal_cb315db91e2f152119fe02890eb9efbdf45258a24dc3d3252d91b18f8a07390b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12d7d6160b8a176a746122cbeb2594613a6e9966fc3b31baad9c3d8768c13ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d7d6160b8a176a746122cbeb2594613a6e9966fc3b31baad9c3d8768c13ff4->enter($__internal_12d7d6160b8a176a746122cbeb2594613a6e9966fc3b31baad9c3d8768c13ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_39cb18dc76f9e03fddbab248bf40f1d97e5187ec20f0085eda591a4a8b8e05f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cb18dc76f9e03fddbab248bf40f1d97e5187ec20f0085eda591a4a8b8e05f5->enter($__internal_39cb18dc76f9e03fddbab248bf40f1d97e5187ec20f0085eda591a4a8b8e05f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39cb18dc76f9e03fddbab248bf40f1d97e5187ec20f0085eda591a4a8b8e05f5->leave($__internal_39cb18dc76f9e03fddbab248bf40f1d97e5187ec20f0085eda591a4a8b8e05f5_prof);

        
        $__internal_12d7d6160b8a176a746122cbeb2594613a6e9966fc3b31baad9c3d8768c13ff4->leave($__internal_12d7d6160b8a176a746122cbeb2594613a6e9966fc3b31baad9c3d8768c13ff4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0122ed45b67ffc8ac6eeac498ef29b80691755135eba19ee4f52073623931b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0122ed45b67ffc8ac6eeac498ef29b80691755135eba19ee4f52073623931b4->enter($__internal_e0122ed45b67ffc8ac6eeac498ef29b80691755135eba19ee4f52073623931b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f14b44e31f5f75a907f32539bc3debdec319389658cffd19d9e7884abf965d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14b44e31f5f75a907f32539bc3debdec319389658cffd19d9e7884abf965d9a->enter($__internal_f14b44e31f5f75a907f32539bc3debdec319389658cffd19d9e7884abf965d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f14b44e31f5f75a907f32539bc3debdec319389658cffd19d9e7884abf965d9a->leave($__internal_f14b44e31f5f75a907f32539bc3debdec319389658cffd19d9e7884abf965d9a_prof);

        
        $__internal_e0122ed45b67ffc8ac6eeac498ef29b80691755135eba19ee4f52073623931b4->leave($__internal_e0122ed45b67ffc8ac6eeac498ef29b80691755135eba19ee4f52073623931b4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_770a4a18d2255becba8b3f8fad3c8529c409d91d3f33d1722cc56b51721cd6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770a4a18d2255becba8b3f8fad3c8529c409d91d3f33d1722cc56b51721cd6d3->enter($__internal_770a4a18d2255becba8b3f8fad3c8529c409d91d3f33d1722cc56b51721cd6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e117a762582e7a97c263ed93905137ae00958f18a1a64959bf4ed7842e47e2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e117a762582e7a97c263ed93905137ae00958f18a1a64959bf4ed7842e47e2e5->enter($__internal_e117a762582e7a97c263ed93905137ae00958f18a1a64959bf4ed7842e47e2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e117a762582e7a97c263ed93905137ae00958f18a1a64959bf4ed7842e47e2e5->leave($__internal_e117a762582e7a97c263ed93905137ae00958f18a1a64959bf4ed7842e47e2e5_prof);

        
        $__internal_770a4a18d2255becba8b3f8fad3c8529c409d91d3f33d1722cc56b51721cd6d3->leave($__internal_770a4a18d2255becba8b3f8fad3c8529c409d91d3f33d1722cc56b51721cd6d3_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "/home/hugo/Documents/Tests_Symfony/test_nlpf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
