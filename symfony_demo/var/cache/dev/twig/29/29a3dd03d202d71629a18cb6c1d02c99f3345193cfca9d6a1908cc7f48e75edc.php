<?php

/* form/layout.html.twig */
class __TwigTemplate_b252b079cd100802a7aa2b884e66ed0e1228b575795daef8ae5916a2cb5e064f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_layout.html.twig", "form/layout.html.twig", 1);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_3_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4de8394d5a21438e05a0527587cfc1ccb64dd53637f7d5a6d837d0d2adee6ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de8394d5a21438e05a0527587cfc1ccb64dd53637f7d5a6d837d0d2adee6ec3->enter($__internal_4de8394d5a21438e05a0527587cfc1ccb64dd53637f7d5a6d837d0d2adee6ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/layout.html.twig"));

        $__internal_dcff464e7593020a88636f5cc78e441cdf2005fbffc7e47c25947b13280be316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcff464e7593020a88636f5cc78e441cdf2005fbffc7e47c25947b13280be316->enter($__internal_dcff464e7593020a88636f5cc78e441cdf2005fbffc7e47c25947b13280be316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4de8394d5a21438e05a0527587cfc1ccb64dd53637f7d5a6d837d0d2adee6ec3->leave($__internal_4de8394d5a21438e05a0527587cfc1ccb64dd53637f7d5a6d837d0d2adee6ec3_prof);

        
        $__internal_dcff464e7593020a88636f5cc78e441cdf2005fbffc7e47c25947b13280be316->leave($__internal_dcff464e7593020a88636f5cc78e441cdf2005fbffc7e47c25947b13280be316_prof);

    }

    // line 5
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6ca20faf6dfa50eea5c5e0530bc39a20c414f55790a4356652b500a9b427d88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca20faf6dfa50eea5c5e0530bc39a20c414f55790a4356652b500a9b427d88f->enter($__internal_6ca20faf6dfa50eea5c5e0530bc39a20c414f55790a4356652b500a9b427d88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_96e5357658a0874577b3c0a1f2851eff0deb29bc38d948ae3669c876d169e033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e5357658a0874577b3c0a1f2851eff0deb29bc38d948ae3669c876d169e033->enter($__internal_96e5357658a0874577b3c0a1f2851eff0deb29bc38d948ae3669c876d169e033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 6
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 7
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 8
            echo "        <ul class=\"list-unstyled\">";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 11
                echo "            <li><span class=\"fa fa-exclamation-triangle\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "</ul>
        ";
            // line 14
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_96e5357658a0874577b3c0a1f2851eff0deb29bc38d948ae3669c876d169e033->leave($__internal_96e5357658a0874577b3c0a1f2851eff0deb29bc38d948ae3669c876d169e033_prof);

        
        $__internal_6ca20faf6dfa50eea5c5e0530bc39a20c414f55790a4356652b500a9b427d88f->leave($__internal_6ca20faf6dfa50eea5c5e0530bc39a20c414f55790a4356652b500a9b427d88f_prof);

    }

    public function getTemplateName()
    {
        return "form/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  71 => 13,  63 => 11,  59 => 9,  57 => 8,  51 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'bootstrap_3_layout.html.twig' %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
        <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            {# use font-awesome icon library #}
            <li><span class=\"fa fa-exclamation-triangle\"></span> {{ error.message }}</li>
        {%- endfor -%}
        </ul>
        {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "form/layout.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/form/layout.html.twig");
    }
}
