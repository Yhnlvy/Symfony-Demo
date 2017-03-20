<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d90bd06192310f45eaf9798acca3b43cd31545cb8a7251f6be32f2efdaca49ea extends Twig_Template
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
        $__internal_bb7550cb92213c18990ef0472838d151230f09b56eb47d2ca4dd0672ac34d9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7550cb92213c18990ef0472838d151230f09b56eb47d2ca4dd0672ac34d9ad->enter($__internal_bb7550cb92213c18990ef0472838d151230f09b56eb47d2ca4dd0672ac34d9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9ccfbc3822f586cfcc914a8bb0d51cb3fc86c49342a096854e77f85e19340fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ccfbc3822f586cfcc914a8bb0d51cb3fc86c49342a096854e77f85e19340fcf->enter($__internal_9ccfbc3822f586cfcc914a8bb0d51cb3fc86c49342a096854e77f85e19340fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb7550cb92213c18990ef0472838d151230f09b56eb47d2ca4dd0672ac34d9ad->leave($__internal_bb7550cb92213c18990ef0472838d151230f09b56eb47d2ca4dd0672ac34d9ad_prof);

        
        $__internal_9ccfbc3822f586cfcc914a8bb0d51cb3fc86c49342a096854e77f85e19340fcf->leave($__internal_9ccfbc3822f586cfcc914a8bb0d51cb3fc86c49342a096854e77f85e19340fcf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d72fc97f1fcbcde4b6c9f6b227c8eaa55a551a49c339b623c2e565376393e1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72fc97f1fcbcde4b6c9f6b227c8eaa55a551a49c339b623c2e565376393e1c9->enter($__internal_d72fc97f1fcbcde4b6c9f6b227c8eaa55a551a49c339b623c2e565376393e1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4e2231b8e9d8caa23e9dfdb165b7d267d67f857626b28c02780a716ca9e7d0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2231b8e9d8caa23e9dfdb165b7d267d67f857626b28c02780a716ca9e7d0cb->enter($__internal_4e2231b8e9d8caa23e9dfdb165b7d267d67f857626b28c02780a716ca9e7d0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e2231b8e9d8caa23e9dfdb165b7d267d67f857626b28c02780a716ca9e7d0cb->leave($__internal_4e2231b8e9d8caa23e9dfdb165b7d267d67f857626b28c02780a716ca9e7d0cb_prof);

        
        $__internal_d72fc97f1fcbcde4b6c9f6b227c8eaa55a551a49c339b623c2e565376393e1c9->leave($__internal_d72fc97f1fcbcde4b6c9f6b227c8eaa55a551a49c339b623c2e565376393e1c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6374bbdbdfd09d8e41afbf14a1e86587e2f4f0927c767823ef62bbfb68f9f39e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6374bbdbdfd09d8e41afbf14a1e86587e2f4f0927c767823ef62bbfb68f9f39e->enter($__internal_6374bbdbdfd09d8e41afbf14a1e86587e2f4f0927c767823ef62bbfb68f9f39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ce7fa1d819e944a934b76fb06adbffb969c5696af6d2fde352a783e28f852a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7fa1d819e944a934b76fb06adbffb969c5696af6d2fde352a783e28f852a78->enter($__internal_ce7fa1d819e944a934b76fb06adbffb969c5696af6d2fde352a783e28f852a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce7fa1d819e944a934b76fb06adbffb969c5696af6d2fde352a783e28f852a78->leave($__internal_ce7fa1d819e944a934b76fb06adbffb969c5696af6d2fde352a783e28f852a78_prof);

        
        $__internal_6374bbdbdfd09d8e41afbf14a1e86587e2f4f0927c767823ef62bbfb68f9f39e->leave($__internal_6374bbdbdfd09d8e41afbf14a1e86587e2f4f0927c767823ef62bbfb68f9f39e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1027dd5bcb4eabf23ebb7768960a7ab196bb606ca0eeb6fc7edc9ca2b792601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1027dd5bcb4eabf23ebb7768960a7ab196bb606ca0eeb6fc7edc9ca2b792601->enter($__internal_d1027dd5bcb4eabf23ebb7768960a7ab196bb606ca0eeb6fc7edc9ca2b792601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c1cf966afc5d4d88b05b69d6c83d09d592e4bb4f06bc045ffd15e6f1d395bb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cf966afc5d4d88b05b69d6c83d09d592e4bb4f06bc045ffd15e6f1d395bb87->enter($__internal_c1cf966afc5d4d88b05b69d6c83d09d592e4bb4f06bc045ffd15e6f1d395bb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c1cf966afc5d4d88b05b69d6c83d09d592e4bb4f06bc045ffd15e6f1d395bb87->leave($__internal_c1cf966afc5d4d88b05b69d6c83d09d592e4bb4f06bc045ffd15e6f1d395bb87_prof);

        
        $__internal_d1027dd5bcb4eabf23ebb7768960a7ab196bb606ca0eeb6fc7edc9ca2b792601->leave($__internal_d1027dd5bcb4eabf23ebb7768960a7ab196bb606ca0eeb6fc7edc9ca2b792601_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/myapp/current/symfony_demo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
