<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_0ef00204c46020c4c9bf2f4be83350cb61622fa6ecb6e7614f1ea00a01bdccb6 extends Twig_Template
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
        $__internal_aaaa0e95d266e6e28cdfa01a30ae1ee4d5d7c38cda9dab3c1c704a47fd301014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaaa0e95d266e6e28cdfa01a30ae1ee4d5d7c38cda9dab3c1c704a47fd301014->enter($__internal_aaaa0e95d266e6e28cdfa01a30ae1ee4d5d7c38cda9dab3c1c704a47fd301014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_642c4d021ea130f87d815c2c591834612a8e2e8938af8227e021092a6550e878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642c4d021ea130f87d815c2c591834612a8e2e8938af8227e021092a6550e878->enter($__internal_642c4d021ea130f87d815c2c591834612a8e2e8938af8227e021092a6550e878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
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
        
        $__internal_aaaa0e95d266e6e28cdfa01a30ae1ee4d5d7c38cda9dab3c1c704a47fd301014->leave($__internal_aaaa0e95d266e6e28cdfa01a30ae1ee4d5d7c38cda9dab3c1c704a47fd301014_prof);

        
        $__internal_642c4d021ea130f87d815c2c591834612a8e2e8938af8227e021092a6550e878->leave($__internal_642c4d021ea130f87d815c2c591834612a8e2e8938af8227e021092a6550e878_prof);

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
", "@Twig/Exception/traces.txt.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
