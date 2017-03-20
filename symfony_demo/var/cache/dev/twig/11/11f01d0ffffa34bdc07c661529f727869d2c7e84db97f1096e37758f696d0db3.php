<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_81df1080c3b938c33a61355c48b0fd5d046840b737c3087abbd6b9b8572eef50 extends Twig_Template
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
        $__internal_4ef90c4182aa14b9153d3a3d45f48e219fa08f0cb3188da9cdb2b7e26870e0a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef90c4182aa14b9153d3a3d45f48e219fa08f0cb3188da9cdb2b7e26870e0a5->enter($__internal_4ef90c4182aa14b9153d3a3d45f48e219fa08f0cb3188da9cdb2b7e26870e0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6a9d03f80459d1cd2b00d8dc78e831a218009844bf04750a9aba6f2d70497ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9d03f80459d1cd2b00d8dc78e831a218009844bf04750a9aba6f2d70497ea7->enter($__internal_6a9d03f80459d1cd2b00d8dc78e831a218009844bf04750a9aba6f2d70497ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ef90c4182aa14b9153d3a3d45f48e219fa08f0cb3188da9cdb2b7e26870e0a5->leave($__internal_4ef90c4182aa14b9153d3a3d45f48e219fa08f0cb3188da9cdb2b7e26870e0a5_prof);

        
        $__internal_6a9d03f80459d1cd2b00d8dc78e831a218009844bf04750a9aba6f2d70497ea7->leave($__internal_6a9d03f80459d1cd2b00d8dc78e831a218009844bf04750a9aba6f2d70497ea7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ea5c8a83b4a6f38df286edda505acce01808bc8b8708f9fdc6f1fa445483549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea5c8a83b4a6f38df286edda505acce01808bc8b8708f9fdc6f1fa445483549->enter($__internal_8ea5c8a83b4a6f38df286edda505acce01808bc8b8708f9fdc6f1fa445483549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_452de2dbf16d58704c039f3c57303c8a7eb0707ab89a3953a410c2f6f3989b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452de2dbf16d58704c039f3c57303c8a7eb0707ab89a3953a410c2f6f3989b68->enter($__internal_452de2dbf16d58704c039f3c57303c8a7eb0707ab89a3953a410c2f6f3989b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_452de2dbf16d58704c039f3c57303c8a7eb0707ab89a3953a410c2f6f3989b68->leave($__internal_452de2dbf16d58704c039f3c57303c8a7eb0707ab89a3953a410c2f6f3989b68_prof);

        
        $__internal_8ea5c8a83b4a6f38df286edda505acce01808bc8b8708f9fdc6f1fa445483549->leave($__internal_8ea5c8a83b4a6f38df286edda505acce01808bc8b8708f9fdc6f1fa445483549_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e2856d3bd090156dc78ff3196de75f472d57a437154280f0a9cfce985b56e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2856d3bd090156dc78ff3196de75f472d57a437154280f0a9cfce985b56e91->enter($__internal_9e2856d3bd090156dc78ff3196de75f472d57a437154280f0a9cfce985b56e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a51d0b714b60ab1c8a6534216a7c22454b429e8aa6d5fdb9522ad8ed92fc15c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51d0b714b60ab1c8a6534216a7c22454b429e8aa6d5fdb9522ad8ed92fc15c8->enter($__internal_a51d0b714b60ab1c8a6534216a7c22454b429e8aa6d5fdb9522ad8ed92fc15c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a51d0b714b60ab1c8a6534216a7c22454b429e8aa6d5fdb9522ad8ed92fc15c8->leave($__internal_a51d0b714b60ab1c8a6534216a7c22454b429e8aa6d5fdb9522ad8ed92fc15c8_prof);

        
        $__internal_9e2856d3bd090156dc78ff3196de75f472d57a437154280f0a9cfce985b56e91->leave($__internal_9e2856d3bd090156dc78ff3196de75f472d57a437154280f0a9cfce985b56e91_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53033795efee64ca2f94b168c0bd243a634789b64315d8242d43c77966602c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53033795efee64ca2f94b168c0bd243a634789b64315d8242d43c77966602c2c->enter($__internal_53033795efee64ca2f94b168c0bd243a634789b64315d8242d43c77966602c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3f284042e6f5aca65d215db1beff0662dabe18cdc460f7b73ad54b9541cf51c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f284042e6f5aca65d215db1beff0662dabe18cdc460f7b73ad54b9541cf51c6->enter($__internal_3f284042e6f5aca65d215db1beff0662dabe18cdc460f7b73ad54b9541cf51c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3f284042e6f5aca65d215db1beff0662dabe18cdc460f7b73ad54b9541cf51c6->leave($__internal_3f284042e6f5aca65d215db1beff0662dabe18cdc460f7b73ad54b9541cf51c6_prof);

        
        $__internal_53033795efee64ca2f94b168c0bd243a634789b64315d8242d43c77966602c2c->leave($__internal_53033795efee64ca2f94b168c0bd243a634789b64315d8242d43c77966602c2c_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
