<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3e324b2fbaa9656b4bd1279b54719c01cce1f083d6b81f27703368ea1e11f4d4 extends Twig_Template
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
        $__internal_39be0ce681418a788bd915216eec2ea2ad0e370c20f5feef707b92ce97a7acd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39be0ce681418a788bd915216eec2ea2ad0e370c20f5feef707b92ce97a7acd7->enter($__internal_39be0ce681418a788bd915216eec2ea2ad0e370c20f5feef707b92ce97a7acd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6f24255e224b26264102b8fa3f2c8ed1143e7a1aaf84d215a0e17b35f30415e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f24255e224b26264102b8fa3f2c8ed1143e7a1aaf84d215a0e17b35f30415e8->enter($__internal_6f24255e224b26264102b8fa3f2c8ed1143e7a1aaf84d215a0e17b35f30415e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39be0ce681418a788bd915216eec2ea2ad0e370c20f5feef707b92ce97a7acd7->leave($__internal_39be0ce681418a788bd915216eec2ea2ad0e370c20f5feef707b92ce97a7acd7_prof);

        
        $__internal_6f24255e224b26264102b8fa3f2c8ed1143e7a1aaf84d215a0e17b35f30415e8->leave($__internal_6f24255e224b26264102b8fa3f2c8ed1143e7a1aaf84d215a0e17b35f30415e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d6594ea326b81ed3ba438039aa92083dd27e46003fd17c64fcd3c148657675a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6594ea326b81ed3ba438039aa92083dd27e46003fd17c64fcd3c148657675a6->enter($__internal_d6594ea326b81ed3ba438039aa92083dd27e46003fd17c64fcd3c148657675a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_db8cbb7c227b6327bcf32c9546d420938e12e4e788215407f5d7987a15c37364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8cbb7c227b6327bcf32c9546d420938e12e4e788215407f5d7987a15c37364->enter($__internal_db8cbb7c227b6327bcf32c9546d420938e12e4e788215407f5d7987a15c37364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_db8cbb7c227b6327bcf32c9546d420938e12e4e788215407f5d7987a15c37364->leave($__internal_db8cbb7c227b6327bcf32c9546d420938e12e4e788215407f5d7987a15c37364_prof);

        
        $__internal_d6594ea326b81ed3ba438039aa92083dd27e46003fd17c64fcd3c148657675a6->leave($__internal_d6594ea326b81ed3ba438039aa92083dd27e46003fd17c64fcd3c148657675a6_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
