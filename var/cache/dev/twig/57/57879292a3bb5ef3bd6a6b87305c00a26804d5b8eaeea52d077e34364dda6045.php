<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_554797db8c6a3b06d3e046f740ddd52041996f1e784f15e9eb36ca3b71593c88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffc54052569115be3d17effa40a41c0c275d6e0be49458aa0ea2e785b984170c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffc54052569115be3d17effa40a41c0c275d6e0be49458aa0ea2e785b984170c->enter($__internal_ffc54052569115be3d17effa40a41c0c275d6e0be49458aa0ea2e785b984170c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8dbfae4e689f571f58e5b80167a6ca837ffae00ab70aa9cf48104f83358f36c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dbfae4e689f571f58e5b80167a6ca837ffae00ab70aa9cf48104f83358f36c4->enter($__internal_8dbfae4e689f571f58e5b80167a6ca837ffae00ab70aa9cf48104f83358f36c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffc54052569115be3d17effa40a41c0c275d6e0be49458aa0ea2e785b984170c->leave($__internal_ffc54052569115be3d17effa40a41c0c275d6e0be49458aa0ea2e785b984170c_prof);

        
        $__internal_8dbfae4e689f571f58e5b80167a6ca837ffae00ab70aa9cf48104f83358f36c4->leave($__internal_8dbfae4e689f571f58e5b80167a6ca837ffae00ab70aa9cf48104f83358f36c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ff4e8d3dc858637d1060c9f7630b3f4ba3bf6f4814d2d087a4d0a3caa3746e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff4e8d3dc858637d1060c9f7630b3f4ba3bf6f4814d2d087a4d0a3caa3746e8->enter($__internal_5ff4e8d3dc858637d1060c9f7630b3f4ba3bf6f4814d2d087a4d0a3caa3746e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_acc68d31a910839af2d2d49161d3a4aa5380cb240b78101a58acf20060fa5918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc68d31a910839af2d2d49161d3a4aa5380cb240b78101a58acf20060fa5918->enter($__internal_acc68d31a910839af2d2d49161d3a4aa5380cb240b78101a58acf20060fa5918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_acc68d31a910839af2d2d49161d3a4aa5380cb240b78101a58acf20060fa5918->leave($__internal_acc68d31a910839af2d2d49161d3a4aa5380cb240b78101a58acf20060fa5918_prof);

        
        $__internal_5ff4e8d3dc858637d1060c9f7630b3f4ba3bf6f4814d2d087a4d0a3caa3746e8->leave($__internal_5ff4e8d3dc858637d1060c9f7630b3f4ba3bf6f4814d2d087a4d0a3caa3746e8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/hugo/Documents/Tests_Symfony/test_nlpf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
