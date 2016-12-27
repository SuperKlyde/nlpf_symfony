<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_8f8f1866c2e88111d86b16eaeafb460c0b379d713701198a9311db64a8b07c2a extends Twig_Template
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
        $__internal_2ab06c322bbec6fd7b9a46f20d73067f8af42c5a7f1dee59109e78e89f4f44ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab06c322bbec6fd7b9a46f20d73067f8af42c5a7f1dee59109e78e89f4f44ab->enter($__internal_2ab06c322bbec6fd7b9a46f20d73067f8af42c5a7f1dee59109e78e89f4f44ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_d9216be6783a3ed602bbda14b90c960edd32733a96e204b17dd9b4ed16d79133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9216be6783a3ed602bbda14b90c960edd32733a96e204b17dd9b4ed16d79133->enter($__internal_d9216be6783a3ed602bbda14b90c960edd32733a96e204b17dd9b4ed16d79133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_2ab06c322bbec6fd7b9a46f20d73067f8af42c5a7f1dee59109e78e89f4f44ab->leave($__internal_2ab06c322bbec6fd7b9a46f20d73067f8af42c5a7f1dee59109e78e89f4f44ab_prof);

        
        $__internal_d9216be6783a3ed602bbda14b90c960edd32733a96e204b17dd9b4ed16d79133->leave($__internal_d9216be6783a3ed602bbda14b90c960edd32733a96e204b17dd9b4ed16d79133_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/hugo/Documents/Tests_Symfony/test_nlpf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
