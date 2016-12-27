<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_d0ee4e5d757d06d4551d37fc7cfe4119937c5b71df87a2ed052e01e21bb6d9f1 extends Twig_Template
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
        $__internal_8ad8c0d7f3fbc11b07e154afc907bc951c90bd7c8d4e24c51e77cc6140e605d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad8c0d7f3fbc11b07e154afc907bc951c90bd7c8d4e24c51e77cc6140e605d6->enter($__internal_8ad8c0d7f3fbc11b07e154afc907bc951c90bd7c8d4e24c51e77cc6140e605d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_a46ad104b0d2eaedb49921c42ead1f0f8ae59679b0425514869a3af71beb2f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46ad104b0d2eaedb49921c42ead1f0f8ae59679b0425514869a3af71beb2f12->enter($__internal_a46ad104b0d2eaedb49921c42ead1f0f8ae59679b0425514869a3af71beb2f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_8ad8c0d7f3fbc11b07e154afc907bc951c90bd7c8d4e24c51e77cc6140e605d6->leave($__internal_8ad8c0d7f3fbc11b07e154afc907bc951c90bd7c8d4e24c51e77cc6140e605d6_prof);

        
        $__internal_a46ad104b0d2eaedb49921c42ead1f0f8ae59679b0425514869a3af71beb2f12->leave($__internal_a46ad104b0d2eaedb49921c42ead1f0f8ae59679b0425514869a3af71beb2f12_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/hugo/Documents/Tests_Symfony/test_nlpf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
