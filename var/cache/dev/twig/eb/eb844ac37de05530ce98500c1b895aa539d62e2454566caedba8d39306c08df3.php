<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_09bdb7ecb2e191c07f71c8b1984fa519405618b0eb1fdf44db931e547a1de161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baa462daf5dd44cbbe9189ffae53d0c44c8280db3e21b8e343d3066b7c2773d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa462daf5dd44cbbe9189ffae53d0c44c8280db3e21b8e343d3066b7c2773d3->enter($__internal_baa462daf5dd44cbbe9189ffae53d0c44c8280db3e21b8e343d3066b7c2773d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9d954c69ac5c667d401baf5756073a83c7a71a4316f8b55d02f01d7a2e42cd19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d954c69ac5c667d401baf5756073a83c7a71a4316f8b55d02f01d7a2e42cd19->enter($__internal_9d954c69ac5c667d401baf5756073a83c7a71a4316f8b55d02f01d7a2e42cd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baa462daf5dd44cbbe9189ffae53d0c44c8280db3e21b8e343d3066b7c2773d3->leave($__internal_baa462daf5dd44cbbe9189ffae53d0c44c8280db3e21b8e343d3066b7c2773d3_prof);

        
        $__internal_9d954c69ac5c667d401baf5756073a83c7a71a4316f8b55d02f01d7a2e42cd19->leave($__internal_9d954c69ac5c667d401baf5756073a83c7a71a4316f8b55d02f01d7a2e42cd19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3571c639c79a1ef958c14b3799ff8f120428700fc99ad433a570d47f3123ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3571c639c79a1ef958c14b3799ff8f120428700fc99ad433a570d47f3123ad0->enter($__internal_f3571c639c79a1ef958c14b3799ff8f120428700fc99ad433a570d47f3123ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ebcebfafdeb3515b853be1568e407f4c1d2f42f82e3066975e49f5d0e8d5ab21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebcebfafdeb3515b853be1568e407f4c1d2f42f82e3066975e49f5d0e8d5ab21->enter($__internal_ebcebfafdeb3515b853be1568e407f4c1d2f42f82e3066975e49f5d0e8d5ab21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ebcebfafdeb3515b853be1568e407f4c1d2f42f82e3066975e49f5d0e8d5ab21->leave($__internal_ebcebfafdeb3515b853be1568e407f4c1d2f42f82e3066975e49f5d0e8d5ab21_prof);

        
        $__internal_f3571c639c79a1ef958c14b3799ff8f120428700fc99ad433a570d47f3123ad0->leave($__internal_f3571c639c79a1ef958c14b3799ff8f120428700fc99ad433a570d47f3123ad0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5620ba2bd8b36f6fe88b493d298832d5cbb8c03d6ee64b26963017cae4026bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5620ba2bd8b36f6fe88b493d298832d5cbb8c03d6ee64b26963017cae4026bc->enter($__internal_b5620ba2bd8b36f6fe88b493d298832d5cbb8c03d6ee64b26963017cae4026bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2df1a2ba6cfebf9d5c738887d4d3ceda8e1bf6d5d2aeaa4f76d9369fe59f0708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df1a2ba6cfebf9d5c738887d4d3ceda8e1bf6d5d2aeaa4f76d9369fe59f0708->enter($__internal_2df1a2ba6cfebf9d5c738887d4d3ceda8e1bf6d5d2aeaa4f76d9369fe59f0708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2df1a2ba6cfebf9d5c738887d4d3ceda8e1bf6d5d2aeaa4f76d9369fe59f0708->leave($__internal_2df1a2ba6cfebf9d5c738887d4d3ceda8e1bf6d5d2aeaa4f76d9369fe59f0708_prof);

        
        $__internal_b5620ba2bd8b36f6fe88b493d298832d5cbb8c03d6ee64b26963017cae4026bc->leave($__internal_b5620ba2bd8b36f6fe88b493d298832d5cbb8c03d6ee64b26963017cae4026bc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce4345bf8755ef60b14978284e4aedfbf8a9b0c5611204d222633949908a986d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4345bf8755ef60b14978284e4aedfbf8a9b0c5611204d222633949908a986d->enter($__internal_ce4345bf8755ef60b14978284e4aedfbf8a9b0c5611204d222633949908a986d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b97f59595a1a59431cdfcfb6c4b828917d39ccde778b892e0ecabd03593c603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b97f59595a1a59431cdfcfb6c4b828917d39ccde778b892e0ecabd03593c603->enter($__internal_7b97f59595a1a59431cdfcfb6c4b828917d39ccde778b892e0ecabd03593c603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7b97f59595a1a59431cdfcfb6c4b828917d39ccde778b892e0ecabd03593c603->leave($__internal_7b97f59595a1a59431cdfcfb6c4b828917d39ccde778b892e0ecabd03593c603_prof);

        
        $__internal_ce4345bf8755ef60b14978284e4aedfbf8a9b0c5611204d222633949908a986d->leave($__internal_ce4345bf8755ef60b14978284e4aedfbf8a9b0c5611204d222633949908a986d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/hugo/Documents/Tests_Symfony/test_nlpf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
