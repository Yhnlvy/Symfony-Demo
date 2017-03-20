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
        $__internal_e4f3b8553cca26e9ae1ef79bfa17ba3e6c31e7798402487d630e8d2aa82f9292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f3b8553cca26e9ae1ef79bfa17ba3e6c31e7798402487d630e8d2aa82f9292->enter($__internal_e4f3b8553cca26e9ae1ef79bfa17ba3e6c31e7798402487d630e8d2aa82f9292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/layout.html.twig"));

        $__internal_548952630ba8ed889b0eaa8eae47bcc4c2c776576bf1a6f94007c9d3ea843aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548952630ba8ed889b0eaa8eae47bcc4c2c776576bf1a6f94007c9d3ea843aa3->enter($__internal_548952630ba8ed889b0eaa8eae47bcc4c2c776576bf1a6f94007c9d3ea843aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4f3b8553cca26e9ae1ef79bfa17ba3e6c31e7798402487d630e8d2aa82f9292->leave($__internal_e4f3b8553cca26e9ae1ef79bfa17ba3e6c31e7798402487d630e8d2aa82f9292_prof);

        
        $__internal_548952630ba8ed889b0eaa8eae47bcc4c2c776576bf1a6f94007c9d3ea843aa3->leave($__internal_548952630ba8ed889b0eaa8eae47bcc4c2c776576bf1a6f94007c9d3ea843aa3_prof);

    }

    // line 5
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1525cb29b5a613fa3fdbeb5f664ec524097ff48830ed09e8fa6bdb44ee7a43ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1525cb29b5a613fa3fdbeb5f664ec524097ff48830ed09e8fa6bdb44ee7a43ef->enter($__internal_1525cb29b5a613fa3fdbeb5f664ec524097ff48830ed09e8fa6bdb44ee7a43ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_feecbd870a58a1b7bd0da1d95a467450b085e6fbf4da7001c8a2f56d60cebb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feecbd870a58a1b7bd0da1d95a467450b085e6fbf4da7001c8a2f56d60cebb51->enter($__internal_feecbd870a58a1b7bd0da1d95a467450b085e6fbf4da7001c8a2f56d60cebb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_feecbd870a58a1b7bd0da1d95a467450b085e6fbf4da7001c8a2f56d60cebb51->leave($__internal_feecbd870a58a1b7bd0da1d95a467450b085e6fbf4da7001c8a2f56d60cebb51_prof);

        
        $__internal_1525cb29b5a613fa3fdbeb5f664ec524097ff48830ed09e8fa6bdb44ee7a43ef->leave($__internal_1525cb29b5a613fa3fdbeb5f664ec524097ff48830ed09e8fa6bdb44ee7a43ef_prof);

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
