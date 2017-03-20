<?php

/* admin/blog/show.html.twig */
class __TwigTemplate_d281f90edb3555d21c728ec3557fad3687b7778425e49d148074b0fdfb6ecfbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/show.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caf68753501ecc3a9ae7314f094abc4b0014763f0e925bd7e0b5e9fff2385069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf68753501ecc3a9ae7314f094abc4b0014763f0e925bd7e0b5e9fff2385069->enter($__internal_caf68753501ecc3a9ae7314f094abc4b0014763f0e925bd7e0b5e9fff2385069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/show.html.twig"));

        $__internal_0e249c8ac84f671eb9a5282a324e3dc1ffab91a0f81d4e68e494f2c640962f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e249c8ac84f671eb9a5282a324e3dc1ffab91a0f81d4e68e494f2c640962f64->enter($__internal_0e249c8ac84f671eb9a5282a324e3dc1ffab91a0f81d4e68e494f2c640962f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caf68753501ecc3a9ae7314f094abc4b0014763f0e925bd7e0b5e9fff2385069->leave($__internal_caf68753501ecc3a9ae7314f094abc4b0014763f0e925bd7e0b5e9fff2385069_prof);

        
        $__internal_0e249c8ac84f671eb9a5282a324e3dc1ffab91a0f81d4e68e494f2c640962f64->leave($__internal_0e249c8ac84f671eb9a5282a324e3dc1ffab91a0f81d4e68e494f2c640962f64_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_87521cf352096012ca6c49fea2c19de920369c17b55d5761e214b6521dba784f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87521cf352096012ca6c49fea2c19de920369c17b55d5761e214b6521dba784f->enter($__internal_87521cf352096012ca6c49fea2c19de920369c17b55d5761e214b6521dba784f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_2dc94dff99a6f1aa7d760258a9bdb605fc661941224db6d1ed7ba9f4dcbed1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc94dff99a6f1aa7d760258a9bdb605fc661941224db6d1ed7ba9f4dcbed1a7->enter($__internal_2dc94dff99a6f1aa7d760258a9bdb605fc661941224db6d1ed7ba9f4dcbed1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_show";
        
        $__internal_2dc94dff99a6f1aa7d760258a9bdb605fc661941224db6d1ed7ba9f4dcbed1a7->leave($__internal_2dc94dff99a6f1aa7d760258a9bdb605fc661941224db6d1ed7ba9f4dcbed1a7_prof);

        
        $__internal_87521cf352096012ca6c49fea2c19de920369c17b55d5761e214b6521dba784f->leave($__internal_87521cf352096012ca6c49fea2c19de920369c17b55d5761e214b6521dba784f_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_b4e4378b15b1af2a22adf3c2cb186195fc8467297ee3b294d0c398bd78b4c549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e4378b15b1af2a22adf3c2cb186195fc8467297ee3b294d0c398bd78b4c549->enter($__internal_b4e4378b15b1af2a22adf3c2cb186195fc8467297ee3b294d0c398bd78b4c549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_48f70a96a92c538d1221fcfad0c2c106a4e221bd5bcd146e21f98996b54ecbf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f70a96a92c538d1221fcfad0c2c106a4e221bd5bcd146e21f98996b54ecbf0->enter($__internal_48f70a96a92c538d1221fcfad0c2c106a4e221bd5bcd146e21f98996b54ecbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "publishedAt", array()), "long", "medium", null, "UTC"), "html", null, true);
        echo "</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array()), "fullName", array()), "html", null, true);
        echo "</span>
    </p>

    <div class=\"well\">
        <p class=\"m-b-0\"><strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.summary"), "html", null, true);
        echo "</strong>: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "summary", array()), "html", null, true);
        echo "</p>
    </div>

    ";
        // line 17
        echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()));
        echo "

    ";
        // line 19
        echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
        echo "
";
        
        $__internal_48f70a96a92c538d1221fcfad0c2c106a4e221bd5bcd146e21f98996b54ecbf0->leave($__internal_48f70a96a92c538d1221fcfad0c2c106a4e221bd5bcd146e21f98996b54ecbf0_prof);

        
        $__internal_b4e4378b15b1af2a22adf3c2cb186195fc8467297ee3b294d0c398bd78b4c549->leave($__internal_b4e4378b15b1af2a22adf3c2cb186195fc8467297ee3b294d0c398bd78b4c549_prof);

    }

    // line 22
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0f56d2e3ba91e3e494d5da10a978ba3813008c56c2053cfb1553a7e7f1fa82ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f56d2e3ba91e3e494d5da10a978ba3813008c56c2053cfb1553a7e7f1fa82ee->enter($__internal_0f56d2e3ba91e3e494d5da10a978ba3813008c56c2053cfb1553a7e7f1fa82ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_30962bc939b4ba3d9b6aed06a3686cc25e21f81280e5214132ed12bfe84c9701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30962bc939b4ba3d9b6aed06a3686cc25e21f81280e5214132ed12bfe84c9701->enter($__internal_30962bc939b4ba3d9b6aed06a3686cc25e21f81280e5214132ed12bfe84c9701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 23
        echo "    <div class=\"section\">
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.edit_contents"), "html", null, true);
        echo "
        </a>
    </div>

    <div class=\"section\">
        ";
        // line 30
        echo twig_include($this->env, $context, "admin/blog/_delete_form.html.twig", array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))), false);
        echo "
    </div>

    ";
        // line 33
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 35
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_30962bc939b4ba3d9b6aed06a3686cc25e21f81280e5214132ed12bfe84c9701->leave($__internal_30962bc939b4ba3d9b6aed06a3686cc25e21f81280e5214132ed12bfe84c9701_prof);

        
        $__internal_0f56d2e3ba91e3e494d5da10a978ba3813008c56c2053cfb1553a7e7f1fa82ee->leave($__internal_0f56d2e3ba91e3e494d5da10a978ba3813008c56c2053cfb1553a7e7f1fa82ee_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 35,  142 => 33,  136 => 30,  128 => 25,  124 => 24,  121 => 23,  112 => 22,  100 => 19,  95 => 17,  87 => 14,  80 => 10,  76 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/layout.html.twig' %}

{% block body_id 'admin_post_show' %}

{% block main %}
    <h1>{{ post.title }}</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ post.publishedAt|localizeddate('long', 'medium', null, 'UTC') }}</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> {{ post.author.fullName }}</span>
    </p>

    <div class=\"well\">
        <p class=\"m-b-0\"><strong>{{ 'label.summary'|trans }}</strong>: {{ post.summary }}</p>
    </div>

    {{ post.content|md2html }}

    {{ include('blog/_post_tags.html.twig') }}
{% endblock %}

{% block sidebar %}
    <div class=\"section\">
        <a href=\"{{ path('admin_post_edit', { id: post.id }) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit_contents'|trans }}
        </a>
    </div>

    <div class=\"section\">
        {{ include('admin/blog/_delete_form.html.twig', { post: post }, with_context = false) }}
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/blog/show.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/admin/blog/show.html.twig");
    }
}
