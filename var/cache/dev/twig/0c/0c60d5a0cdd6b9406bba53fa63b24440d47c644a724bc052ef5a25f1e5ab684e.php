<?php

/* base.html.twig */
class __TwigTemplate_1e9648571224230f4e22fa12f1b09743fcdc324c4e581de0aee1567d137973cf extends Twig_Template
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
        $__internal_2bf34386204a41c2ea05b7e600f27d11ba89691b63bc2833d3c1cb42fe3b4400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf34386204a41c2ea05b7e600f27d11ba89691b63bc2833d3c1cb42fe3b4400->enter($__internal_2bf34386204a41c2ea05b7e600f27d11ba89691b63bc2833d3c1cb42fe3b4400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6696f444fbdd8ace1f3f611a3ca4b7f2951a598a7d352ba3de2a992f466f38a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6696f444fbdd8ace1f3f611a3ca4b7f2951a598a7d352ba3de2a992f466f38a6->enter($__internal_6696f444fbdd8ace1f3f611a3ca4b7f2951a598a7d352ba3de2a992f466f38a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2bf34386204a41c2ea05b7e600f27d11ba89691b63bc2833d3c1cb42fe3b4400->leave($__internal_2bf34386204a41c2ea05b7e600f27d11ba89691b63bc2833d3c1cb42fe3b4400_prof);

        
        $__internal_6696f444fbdd8ace1f3f611a3ca4b7f2951a598a7d352ba3de2a992f466f38a6->leave($__internal_6696f444fbdd8ace1f3f611a3ca4b7f2951a598a7d352ba3de2a992f466f38a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c375f8fe728df3af5cc415ae7351c85219226127669abef806fb49ee836568e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c375f8fe728df3af5cc415ae7351c85219226127669abef806fb49ee836568e->enter($__internal_9c375f8fe728df3af5cc415ae7351c85219226127669abef806fb49ee836568e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56843662a0c16738953605ce01fbed2b5e07907d82526c3e63d99caf367ffb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56843662a0c16738953605ce01fbed2b5e07907d82526c3e63d99caf367ffb52->enter($__internal_56843662a0c16738953605ce01fbed2b5e07907d82526c3e63d99caf367ffb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_56843662a0c16738953605ce01fbed2b5e07907d82526c3e63d99caf367ffb52->leave($__internal_56843662a0c16738953605ce01fbed2b5e07907d82526c3e63d99caf367ffb52_prof);

        
        $__internal_9c375f8fe728df3af5cc415ae7351c85219226127669abef806fb49ee836568e->leave($__internal_9c375f8fe728df3af5cc415ae7351c85219226127669abef806fb49ee836568e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5ae4680d0000b16bd8f5aa16c56799d959bf792d01fe0ca842b8256cf0b5152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ae4680d0000b16bd8f5aa16c56799d959bf792d01fe0ca842b8256cf0b5152->enter($__internal_d5ae4680d0000b16bd8f5aa16c56799d959bf792d01fe0ca842b8256cf0b5152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_da29718feab74f92329509c53dd79591bd753681b2253f4085afe8f90500d6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da29718feab74f92329509c53dd79591bd753681b2253f4085afe8f90500d6c3->enter($__internal_da29718feab74f92329509c53dd79591bd753681b2253f4085afe8f90500d6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_da29718feab74f92329509c53dd79591bd753681b2253f4085afe8f90500d6c3->leave($__internal_da29718feab74f92329509c53dd79591bd753681b2253f4085afe8f90500d6c3_prof);

        
        $__internal_d5ae4680d0000b16bd8f5aa16c56799d959bf792d01fe0ca842b8256cf0b5152->leave($__internal_d5ae4680d0000b16bd8f5aa16c56799d959bf792d01fe0ca842b8256cf0b5152_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_072ff14301322882b1d6b8686725b2ed464ba1e10c1115d5ec7a02d985d92f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072ff14301322882b1d6b8686725b2ed464ba1e10c1115d5ec7a02d985d92f1d->enter($__internal_072ff14301322882b1d6b8686725b2ed464ba1e10c1115d5ec7a02d985d92f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d254cf9bfa1f4bc51e2b0362d9ae9061d53008d06139d682abac6d2c033139cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d254cf9bfa1f4bc51e2b0362d9ae9061d53008d06139d682abac6d2c033139cc->enter($__internal_d254cf9bfa1f4bc51e2b0362d9ae9061d53008d06139d682abac6d2c033139cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d254cf9bfa1f4bc51e2b0362d9ae9061d53008d06139d682abac6d2c033139cc->leave($__internal_d254cf9bfa1f4bc51e2b0362d9ae9061d53008d06139d682abac6d2c033139cc_prof);

        
        $__internal_072ff14301322882b1d6b8686725b2ed464ba1e10c1115d5ec7a02d985d92f1d->leave($__internal_072ff14301322882b1d6b8686725b2ed464ba1e10c1115d5ec7a02d985d92f1d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79e61f8db48148a25dffdb79b5df923d32e9d0ba5aa470be4a8c716429048ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e61f8db48148a25dffdb79b5df923d32e9d0ba5aa470be4a8c716429048ae9->enter($__internal_79e61f8db48148a25dffdb79b5df923d32e9d0ba5aa470be4a8c716429048ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1207053984b5f451a4093e37b436e5d7be82661b56d442d85e61db5a4d823835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1207053984b5f451a4093e37b436e5d7be82661b56d442d85e61db5a4d823835->enter($__internal_1207053984b5f451a4093e37b436e5d7be82661b56d442d85e61db5a4d823835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1207053984b5f451a4093e37b436e5d7be82661b56d442d85e61db5a4d823835->leave($__internal_1207053984b5f451a4093e37b436e5d7be82661b56d442d85e61db5a4d823835_prof);

        
        $__internal_79e61f8db48148a25dffdb79b5df923d32e9d0ba5aa470be4a8c716429048ae9->leave($__internal_79e61f8db48148a25dffdb79b5df923d32e9d0ba5aa470be4a8c716429048ae9_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
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
", "base.html.twig", "/home/hugo/Documents/Tests_Symfony/test_nlpf/app/Resources/views/base.html.twig");
    }
}
