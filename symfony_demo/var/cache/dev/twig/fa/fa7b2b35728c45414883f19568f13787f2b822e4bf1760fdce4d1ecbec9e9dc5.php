<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a92ed3bdd00cb4cd529cee4926a81dc22eadab9a9fef79d414db328fc8c61aae extends Twig_Template
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
        $__internal_db2d3ee8dd08e63c2727116ac6bbbd668ed1c7e4598f7ad25db8777dad50d83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2d3ee8dd08e63c2727116ac6bbbd668ed1c7e4598f7ad25db8777dad50d83e->enter($__internal_db2d3ee8dd08e63c2727116ac6bbbd668ed1c7e4598f7ad25db8777dad50d83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9eba83084ef32e3125d4363a7c220f6d8e0d620ebb354f92965aa861976de01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eba83084ef32e3125d4363a7c220f6d8e0d620ebb354f92965aa861976de01b->enter($__internal_9eba83084ef32e3125d4363a7c220f6d8e0d620ebb354f92965aa861976de01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db2d3ee8dd08e63c2727116ac6bbbd668ed1c7e4598f7ad25db8777dad50d83e->leave($__internal_db2d3ee8dd08e63c2727116ac6bbbd668ed1c7e4598f7ad25db8777dad50d83e_prof);

        
        $__internal_9eba83084ef32e3125d4363a7c220f6d8e0d620ebb354f92965aa861976de01b->leave($__internal_9eba83084ef32e3125d4363a7c220f6d8e0d620ebb354f92965aa861976de01b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dce5a18af38833e57d9e46b1502319656132fbd925f4d1315730ca0d6c841cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce5a18af38833e57d9e46b1502319656132fbd925f4d1315730ca0d6c841cd3->enter($__internal_dce5a18af38833e57d9e46b1502319656132fbd925f4d1315730ca0d6c841cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a79c20142f2dfb2b913f855b9d997349ea024c8471f23e5a459ae82438f48004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79c20142f2dfb2b913f855b9d997349ea024c8471f23e5a459ae82438f48004->enter($__internal_a79c20142f2dfb2b913f855b9d997349ea024c8471f23e5a459ae82438f48004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a79c20142f2dfb2b913f855b9d997349ea024c8471f23e5a459ae82438f48004->leave($__internal_a79c20142f2dfb2b913f855b9d997349ea024c8471f23e5a459ae82438f48004_prof);

        
        $__internal_dce5a18af38833e57d9e46b1502319656132fbd925f4d1315730ca0d6c841cd3->leave($__internal_dce5a18af38833e57d9e46b1502319656132fbd925f4d1315730ca0d6c841cd3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82fb0cd4a1a24d537d697f8d45b0728f16cd08f34a8f7c4f270fb317ca3c4890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82fb0cd4a1a24d537d697f8d45b0728f16cd08f34a8f7c4f270fb317ca3c4890->enter($__internal_82fb0cd4a1a24d537d697f8d45b0728f16cd08f34a8f7c4f270fb317ca3c4890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_39e0be00185254664ca80fe01e4005beb1db86f131fea0d672b50ef3a7d48c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e0be00185254664ca80fe01e4005beb1db86f131fea0d672b50ef3a7d48c0d->enter($__internal_39e0be00185254664ca80fe01e4005beb1db86f131fea0d672b50ef3a7d48c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_39e0be00185254664ca80fe01e4005beb1db86f131fea0d672b50ef3a7d48c0d->leave($__internal_39e0be00185254664ca80fe01e4005beb1db86f131fea0d672b50ef3a7d48c0d_prof);

        
        $__internal_82fb0cd4a1a24d537d697f8d45b0728f16cd08f34a8f7c4f270fb317ca3c4890->leave($__internal_82fb0cd4a1a24d537d697f8d45b0728f16cd08f34a8f7c4f270fb317ca3c4890_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_98e8c83a3f431cdf7ab8b6608c77605ccff1da6f4a3a05fe09665324c3acbb3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e8c83a3f431cdf7ab8b6608c77605ccff1da6f4a3a05fe09665324c3acbb3a->enter($__internal_98e8c83a3f431cdf7ab8b6608c77605ccff1da6f4a3a05fe09665324c3acbb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0aefa6cc740a06ba45cebfbbaa4ac7e3e7140365e44a910044d1787d214c31f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aefa6cc740a06ba45cebfbbaa4ac7e3e7140365e44a910044d1787d214c31f2->enter($__internal_0aefa6cc740a06ba45cebfbbaa4ac7e3e7140365e44a910044d1787d214c31f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0aefa6cc740a06ba45cebfbbaa4ac7e3e7140365e44a910044d1787d214c31f2->leave($__internal_0aefa6cc740a06ba45cebfbbaa4ac7e3e7140365e44a910044d1787d214c31f2_prof);

        
        $__internal_98e8c83a3f431cdf7ab8b6608c77605ccff1da6f4a3a05fe09665324c3acbb3a->leave($__internal_98e8c83a3f431cdf7ab8b6608c77605ccff1da6f4a3a05fe09665324c3acbb3a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/myapp/current/symfony_demo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
