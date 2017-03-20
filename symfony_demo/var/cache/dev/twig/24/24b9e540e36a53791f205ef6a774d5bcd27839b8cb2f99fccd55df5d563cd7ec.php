<?php

/* admin/blog/edit.html.twig */
class __TwigTemplate_aae68e71b431ff6c6b4c25e13f454ea8bbeaf79693e74f0895e5efb3fe703e0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/edit.html.twig", 1);
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
        $__internal_f84238266d462f98561868ae4097c47c2d5f1eefa901c8d0d79b97da24f25e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84238266d462f98561868ae4097c47c2d5f1eefa901c8d0d79b97da24f25e94->enter($__internal_f84238266d462f98561868ae4097c47c2d5f1eefa901c8d0d79b97da24f25e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/edit.html.twig"));

        $__internal_25cbd3bf85df723708c8e6febeb86e8dd0434f888a2170c6976562d631041e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25cbd3bf85df723708c8e6febeb86e8dd0434f888a2170c6976562d631041e4f->enter($__internal_25cbd3bf85df723708c8e6febeb86e8dd0434f888a2170c6976562d631041e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f84238266d462f98561868ae4097c47c2d5f1eefa901c8d0d79b97da24f25e94->leave($__internal_f84238266d462f98561868ae4097c47c2d5f1eefa901c8d0d79b97da24f25e94_prof);

        
        $__internal_25cbd3bf85df723708c8e6febeb86e8dd0434f888a2170c6976562d631041e4f->leave($__internal_25cbd3bf85df723708c8e6febeb86e8dd0434f888a2170c6976562d631041e4f_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1b71c01fa8a76bce3aa7f74d11d171e205e7c8f059e7457bf4d2ec10c2b67275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b71c01fa8a76bce3aa7f74d11d171e205e7c8f059e7457bf4d2ec10c2b67275->enter($__internal_1b71c01fa8a76bce3aa7f74d11d171e205e7c8f059e7457bf4d2ec10c2b67275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_ef12ccca6a22f43d7fb6af8ccc7ef45d65bcf008e06a45a16f7bb1a75c77f132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef12ccca6a22f43d7fb6af8ccc7ef45d65bcf008e06a45a16f7bb1a75c77f132->enter($__internal_ef12ccca6a22f43d7fb6af8ccc7ef45d65bcf008e06a45a16f7bb1a75c77f132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_edit";
        
        $__internal_ef12ccca6a22f43d7fb6af8ccc7ef45d65bcf008e06a45a16f7bb1a75c77f132->leave($__internal_ef12ccca6a22f43d7fb6af8ccc7ef45d65bcf008e06a45a16f7bb1a75c77f132_prof);

        
        $__internal_1b71c01fa8a76bce3aa7f74d11d171e205e7c8f059e7457bf4d2ec10c2b67275->leave($__internal_1b71c01fa8a76bce3aa7f74d11d171e205e7c8f059e7457bf4d2ec10c2b67275_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_eed16f385ee0096b4dfc5b17537dce24336b2686fac450519e7c032e154813c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed16f385ee0096b4dfc5b17537dce24336b2686fac450519e7c032e154813c9->enter($__internal_eed16f385ee0096b4dfc5b17537dce24336b2686fac450519e7c032e154813c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_23a0051e8e58bf70bce2f156f89908adaddfed90c96e1f501f869bf93989da3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a0051e8e58bf70bce2f156f89908adaddfed90c96e1f501f869bf93989da3d->enter($__internal_23a0051e8e58bf70bce2f156f89908adaddfed90c96e1f501f869bf93989da3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.edit_post", array("%id%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 9
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "button_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save"), "include_back_to_home_link" => true), false);
        // line 12
        echo "
";
        
        $__internal_23a0051e8e58bf70bce2f156f89908adaddfed90c96e1f501f869bf93989da3d->leave($__internal_23a0051e8e58bf70bce2f156f89908adaddfed90c96e1f501f869bf93989da3d_prof);

        
        $__internal_eed16f385ee0096b4dfc5b17537dce24336b2686fac450519e7c032e154813c9->leave($__internal_eed16f385ee0096b4dfc5b17537dce24336b2686fac450519e7c032e154813c9_prof);

    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_62df9dbbbed3d129057281689bc3cb9ed2ec5c117321ec3ddd06ed80dbb3dc63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62df9dbbbed3d129057281689bc3cb9ed2ec5c117321ec3ddd06ed80dbb3dc63->enter($__internal_62df9dbbbed3d129057281689bc3cb9ed2ec5c117321ec3ddd06ed80dbb3dc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_1f3dced692bfa2c70af6f949c8b629edfb3ffd1c6ef2f1ccfdec5aa9fcbadcd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3dced692bfa2c70af6f949c8b629edfb3ffd1c6ef2f1ccfdec5aa9fcbadcd9->enter($__internal_1f3dced692bfa2c70af6f949c8b629edfb3ffd1c6ef2f1ccfdec5aa9fcbadcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 16
        echo "    <div class=\"section actions\">
        ";
        // line 17
        echo twig_include($this->env, $context, "admin/blog/_delete_form.html.twig", array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))), false);
        echo "
    </div>

    ";
        // line 20
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 22
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_1f3dced692bfa2c70af6f949c8b629edfb3ffd1c6ef2f1ccfdec5aa9fcbadcd9->leave($__internal_1f3dced692bfa2c70af6f949c8b629edfb3ffd1c6ef2f1ccfdec5aa9fcbadcd9_prof);

        
        $__internal_62df9dbbbed3d129057281689bc3cb9ed2ec5c117321ec3ddd06ed80dbb3dc63->leave($__internal_62df9dbbbed3d129057281689bc3cb9ed2ec5c117321ec3ddd06ed80dbb3dc63_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 22,  107 => 20,  101 => 17,  98 => 16,  89 => 15,  78 => 12,  76 => 9,  75 => 8,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block body_id 'admin_post_edit' %}

{% block main %}
    <h1>{{ 'title.edit_post'|trans({'%id%': post.id}) }}</h1>

    {{ include('admin/blog/_form.html.twig', {
        form: form,
        button_label: 'action.save'|trans,
        include_back_to_home_link: true,
    }, with_context = false) }}
{% endblock %}

{% block sidebar %}
    <div class=\"section actions\">
        {{ include('admin/blog/_delete_form.html.twig', { post: post }, with_context = false) }}
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/blog/edit.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/admin/blog/edit.html.twig");
    }
}
