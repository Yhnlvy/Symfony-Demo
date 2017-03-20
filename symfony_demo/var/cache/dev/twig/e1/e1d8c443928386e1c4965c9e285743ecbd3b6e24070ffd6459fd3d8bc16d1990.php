<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_18ec212e239a83cbcffb2dcbf91a9051e30f13887c1c773589835da15fcc46d7 extends Twig_Template
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
        $__internal_920154875389c45eb0bfa319b29f1b5977cf9b6557ae3ef01f38a52f7a151105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920154875389c45eb0bfa319b29f1b5977cf9b6557ae3ef01f38a52f7a151105->enter($__internal_920154875389c45eb0bfa319b29f1b5977cf9b6557ae3ef01f38a52f7a151105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_cce0eabb5f5c84cf2ba75acd00938f1871d80d4bee057a9cf79b4241a955135e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce0eabb5f5c84cf2ba75acd00938f1871d80d4bee057a9cf79b4241a955135e->enter($__internal_cce0eabb5f5c84cf2ba75acd00938f1871d80d4bee057a9cf79b4241a955135e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_920154875389c45eb0bfa319b29f1b5977cf9b6557ae3ef01f38a52f7a151105->leave($__internal_920154875389c45eb0bfa319b29f1b5977cf9b6557ae3ef01f38a52f7a151105_prof);

        
        $__internal_cce0eabb5f5c84cf2ba75acd00938f1871d80d4bee057a9cf79b4241a955135e->leave($__internal_cce0eabb5f5c84cf2ba75acd00938f1871d80d4bee057a9cf79b4241a955135e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a17a9e76427a20929d9af6bf50ddef2b43078a5c9e6fe58f83d4363be559efb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a17a9e76427a20929d9af6bf50ddef2b43078a5c9e6fe58f83d4363be559efb4->enter($__internal_a17a9e76427a20929d9af6bf50ddef2b43078a5c9e6fe58f83d4363be559efb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59d6f244e353ed4cb2f2f6e0004d4d0a11bb2dbb57bfd9012cfb4ee4f0e35ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d6f244e353ed4cb2f2f6e0004d4d0a11bb2dbb57bfd9012cfb4ee4f0e35ac7->enter($__internal_59d6f244e353ed4cb2f2f6e0004d4d0a11bb2dbb57bfd9012cfb4ee4f0e35ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_59d6f244e353ed4cb2f2f6e0004d4d0a11bb2dbb57bfd9012cfb4ee4f0e35ac7->leave($__internal_59d6f244e353ed4cb2f2f6e0004d4d0a11bb2dbb57bfd9012cfb4ee4f0e35ac7_prof);

        
        $__internal_a17a9e76427a20929d9af6bf50ddef2b43078a5c9e6fe58f83d4363be559efb4->leave($__internal_a17a9e76427a20929d9af6bf50ddef2b43078a5c9e6fe58f83d4363be559efb4_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/myapp/current/symfony_demo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
