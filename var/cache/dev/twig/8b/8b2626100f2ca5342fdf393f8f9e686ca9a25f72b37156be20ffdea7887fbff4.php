<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_dbfc278c251ca40a5d85dc93ea431f09b4cd93dd4ea4e193f79fa4523a677ab4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_438f5fe5fe867098ec73131b8bf526c054c71b9ba946f7b5d52e2205ff431080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438f5fe5fe867098ec73131b8bf526c054c71b9ba946f7b5d52e2205ff431080->enter($__internal_438f5fe5fe867098ec73131b8bf526c054c71b9ba946f7b5d52e2205ff431080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5240d8cf8111e5280f43d80b20b27b90161e57dbd05866393aaf0634dff8d3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5240d8cf8111e5280f43d80b20b27b90161e57dbd05866393aaf0634dff8d3f1->enter($__internal_5240d8cf8111e5280f43d80b20b27b90161e57dbd05866393aaf0634dff8d3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_438f5fe5fe867098ec73131b8bf526c054c71b9ba946f7b5d52e2205ff431080->leave($__internal_438f5fe5fe867098ec73131b8bf526c054c71b9ba946f7b5d52e2205ff431080_prof);

        
        $__internal_5240d8cf8111e5280f43d80b20b27b90161e57dbd05866393aaf0634dff8d3f1->leave($__internal_5240d8cf8111e5280f43d80b20b27b90161e57dbd05866393aaf0634dff8d3f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73c4cd276c4f513878613caa5e302ffcbcb49af6ddc7b25a0a6a36f6379cc7e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c4cd276c4f513878613caa5e302ffcbcb49af6ddc7b25a0a6a36f6379cc7e9->enter($__internal_73c4cd276c4f513878613caa5e302ffcbcb49af6ddc7b25a0a6a36f6379cc7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a4a65400ffa75917ff321a25e37891061a4d158abe6922c6e2f6318b777c55c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a65400ffa75917ff321a25e37891061a4d158abe6922c6e2f6318b777c55c5->enter($__internal_a4a65400ffa75917ff321a25e37891061a4d158abe6922c6e2f6318b777c55c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a4a65400ffa75917ff321a25e37891061a4d158abe6922c6e2f6318b777c55c5->leave($__internal_a4a65400ffa75917ff321a25e37891061a4d158abe6922c6e2f6318b777c55c5_prof);

        
        $__internal_73c4cd276c4f513878613caa5e302ffcbcb49af6ddc7b25a0a6a36f6379cc7e9->leave($__internal_73c4cd276c4f513878613caa5e302ffcbcb49af6ddc7b25a0a6a36f6379cc7e9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82303ec1e0bd68826a7fe602fc90ef63d39183f330b137f72dd54fd362aefd64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82303ec1e0bd68826a7fe602fc90ef63d39183f330b137f72dd54fd362aefd64->enter($__internal_82303ec1e0bd68826a7fe602fc90ef63d39183f330b137f72dd54fd362aefd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_834d1c19bf19caf0b84f9b723d48b6365adebcc80fe878f9dbf80b921a9e3370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834d1c19bf19caf0b84f9b723d48b6365adebcc80fe878f9dbf80b921a9e3370->enter($__internal_834d1c19bf19caf0b84f9b723d48b6365adebcc80fe878f9dbf80b921a9e3370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_834d1c19bf19caf0b84f9b723d48b6365adebcc80fe878f9dbf80b921a9e3370->leave($__internal_834d1c19bf19caf0b84f9b723d48b6365adebcc80fe878f9dbf80b921a9e3370_prof);

        
        $__internal_82303ec1e0bd68826a7fe602fc90ef63d39183f330b137f72dd54fd362aefd64->leave($__internal_82303ec1e0bd68826a7fe602fc90ef63d39183f330b137f72dd54fd362aefd64_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f1960f2bd60876920f35de627d99a1b991252a36a2ed430337dc695ddd8be27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1960f2bd60876920f35de627d99a1b991252a36a2ed430337dc695ddd8be27->enter($__internal_1f1960f2bd60876920f35de627d99a1b991252a36a2ed430337dc695ddd8be27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef296980845feca799109a54f3cd9eea0386aff1310e3136593c782c197864df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef296980845feca799109a54f3cd9eea0386aff1310e3136593c782c197864df->enter($__internal_ef296980845feca799109a54f3cd9eea0386aff1310e3136593c782c197864df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ef296980845feca799109a54f3cd9eea0386aff1310e3136593c782c197864df->leave($__internal_ef296980845feca799109a54f3cd9eea0386aff1310e3136593c782c197864df_prof);

        
        $__internal_1f1960f2bd60876920f35de627d99a1b991252a36a2ed430337dc695ddd8be27->leave($__internal_1f1960f2bd60876920f35de627d99a1b991252a36a2ed430337dc695ddd8be27_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/hugo/Documents/Tests_Symfony/test_nlpf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
