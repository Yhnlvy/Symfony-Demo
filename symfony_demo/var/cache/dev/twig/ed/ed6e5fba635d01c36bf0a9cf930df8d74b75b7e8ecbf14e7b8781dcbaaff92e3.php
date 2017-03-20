<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_70f9386e175b997e054a45a3d6b0e774218f345f71522730326007340b9626c3 extends Twig_Template
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
        $__internal_82abd24c4def7ab318cad9482810c607d09df27fdb79003b4d708d3c4fbdec9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82abd24c4def7ab318cad9482810c607d09df27fdb79003b4d708d3c4fbdec9c->enter($__internal_82abd24c4def7ab318cad9482810c607d09df27fdb79003b4d708d3c4fbdec9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9cbe4e9c60f11e89468efc8a7692434335ddc3a7250155a205b753db6d356fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbe4e9c60f11e89468efc8a7692434335ddc3a7250155a205b753db6d356fa5->enter($__internal_9cbe4e9c60f11e89468efc8a7692434335ddc3a7250155a205b753db6d356fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82abd24c4def7ab318cad9482810c607d09df27fdb79003b4d708d3c4fbdec9c->leave($__internal_82abd24c4def7ab318cad9482810c607d09df27fdb79003b4d708d3c4fbdec9c_prof);

        
        $__internal_9cbe4e9c60f11e89468efc8a7692434335ddc3a7250155a205b753db6d356fa5->leave($__internal_9cbe4e9c60f11e89468efc8a7692434335ddc3a7250155a205b753db6d356fa5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c11d58d7858b086622031c4ad557f57506904d7a1b4b80db1152fc8cbabbdb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c11d58d7858b086622031c4ad557f57506904d7a1b4b80db1152fc8cbabbdb1->enter($__internal_0c11d58d7858b086622031c4ad557f57506904d7a1b4b80db1152fc8cbabbdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_992bbeb41d415664bca197fcae21cc51a8f187effa90285be8511c66954268d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992bbeb41d415664bca197fcae21cc51a8f187effa90285be8511c66954268d0->enter($__internal_992bbeb41d415664bca197fcae21cc51a8f187effa90285be8511c66954268d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_992bbeb41d415664bca197fcae21cc51a8f187effa90285be8511c66954268d0->leave($__internal_992bbeb41d415664bca197fcae21cc51a8f187effa90285be8511c66954268d0_prof);

        
        $__internal_0c11d58d7858b086622031c4ad557f57506904d7a1b4b80db1152fc8cbabbdb1->leave($__internal_0c11d58d7858b086622031c4ad557f57506904d7a1b4b80db1152fc8cbabbdb1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd4844978410c6ac50c550b52b0dbba2f869c988f6b49b3c764302db82386eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4844978410c6ac50c550b52b0dbba2f869c988f6b49b3c764302db82386eb3->enter($__internal_fd4844978410c6ac50c550b52b0dbba2f869c988f6b49b3c764302db82386eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_85735411b1e8e3bc3f012783f1136ddf435dd26715cddcda8348c4dd2aae50fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85735411b1e8e3bc3f012783f1136ddf435dd26715cddcda8348c4dd2aae50fa->enter($__internal_85735411b1e8e3bc3f012783f1136ddf435dd26715cddcda8348c4dd2aae50fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_85735411b1e8e3bc3f012783f1136ddf435dd26715cddcda8348c4dd2aae50fa->leave($__internal_85735411b1e8e3bc3f012783f1136ddf435dd26715cddcda8348c4dd2aae50fa_prof);

        
        $__internal_fd4844978410c6ac50c550b52b0dbba2f869c988f6b49b3c764302db82386eb3->leave($__internal_fd4844978410c6ac50c550b52b0dbba2f869c988f6b49b3c764302db82386eb3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2cb4d1424dfbe4654d1611bfca80e712ab1e9e9cdc8ba2b93fc199c40f7d53fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cb4d1424dfbe4654d1611bfca80e712ab1e9e9cdc8ba2b93fc199c40f7d53fa->enter($__internal_2cb4d1424dfbe4654d1611bfca80e712ab1e9e9cdc8ba2b93fc199c40f7d53fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f4ede8fd329206532b47b3a12bb490c3f2c35b05b88b17f67500174e7c86e129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ede8fd329206532b47b3a12bb490c3f2c35b05b88b17f67500174e7c86e129->enter($__internal_f4ede8fd329206532b47b3a12bb490c3f2c35b05b88b17f67500174e7c86e129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f4ede8fd329206532b47b3a12bb490c3f2c35b05b88b17f67500174e7c86e129->leave($__internal_f4ede8fd329206532b47b3a12bb490c3f2c35b05b88b17f67500174e7c86e129_prof);

        
        $__internal_2cb4d1424dfbe4654d1611bfca80e712ab1e9e9cdc8ba2b93fc199c40f7d53fa->leave($__internal_2cb4d1424dfbe4654d1611bfca80e712ab1e9e9cdc8ba2b93fc199c40f7d53fa_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
