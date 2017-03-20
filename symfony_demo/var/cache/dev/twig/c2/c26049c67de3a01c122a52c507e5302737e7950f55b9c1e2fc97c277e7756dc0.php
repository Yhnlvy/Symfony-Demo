<?php

/* admin/blog/new.html.twig */
class __TwigTemplate_8b43b0e071ce946e20ae95cc9747b4120ec7c1b8ebf36e3a48ab8bcbc38e47c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/new.html.twig", 1);
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
        $__internal_bccaabbbe2dd94ff7576af8b8dd4733391780fb919ffc3f0ccd9511353bcecf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bccaabbbe2dd94ff7576af8b8dd4733391780fb919ffc3f0ccd9511353bcecf8->enter($__internal_bccaabbbe2dd94ff7576af8b8dd4733391780fb919ffc3f0ccd9511353bcecf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/new.html.twig"));

        $__internal_be3708ab9da805bf2b00c6f5df27b88968e092e524d507325e4b10102492157a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3708ab9da805bf2b00c6f5df27b88968e092e524d507325e4b10102492157a->enter($__internal_be3708ab9da805bf2b00c6f5df27b88968e092e524d507325e4b10102492157a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bccaabbbe2dd94ff7576af8b8dd4733391780fb919ffc3f0ccd9511353bcecf8->leave($__internal_bccaabbbe2dd94ff7576af8b8dd4733391780fb919ffc3f0ccd9511353bcecf8_prof);

        
        $__internal_be3708ab9da805bf2b00c6f5df27b88968e092e524d507325e4b10102492157a->leave($__internal_be3708ab9da805bf2b00c6f5df27b88968e092e524d507325e4b10102492157a_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3054b70bd632fc2802ea1f76e6db319e61be80fddae45fd08ca921d8ed7c9c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3054b70bd632fc2802ea1f76e6db319e61be80fddae45fd08ca921d8ed7c9c02->enter($__internal_3054b70bd632fc2802ea1f76e6db319e61be80fddae45fd08ca921d8ed7c9c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_a2da9aa18728d740f6bf1b2ce59f1c0e3d7164ea10f5642125a7e8c62eb36a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2da9aa18728d740f6bf1b2ce59f1c0e3d7164ea10f5642125a7e8c62eb36a1e->enter($__internal_a2da9aa18728d740f6bf1b2ce59f1c0e3d7164ea10f5642125a7e8c62eb36a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_new";
        
        $__internal_a2da9aa18728d740f6bf1b2ce59f1c0e3d7164ea10f5642125a7e8c62eb36a1e->leave($__internal_a2da9aa18728d740f6bf1b2ce59f1c0e3d7164ea10f5642125a7e8c62eb36a1e_prof);

        
        $__internal_3054b70bd632fc2802ea1f76e6db319e61be80fddae45fd08ca921d8ed7c9c02->leave($__internal_3054b70bd632fc2802ea1f76e6db319e61be80fddae45fd08ca921d8ed7c9c02_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_89591dc46da976d2f0f50824e4e392cb810d20f4b9b0921c510e9cdcba78765b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89591dc46da976d2f0f50824e4e392cb810d20f4b9b0921c510e9cdcba78765b->enter($__internal_89591dc46da976d2f0f50824e4e392cb810d20f4b9b0921c510e9cdcba78765b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_7497f9bda636c9ca401ad5e3b259f1898d4ad532e418c360186049cde4612a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7497f9bda636c9ca401ad5e3b259f1898d4ad532e418c360186049cde4612a92->enter($__internal_7497f9bda636c9ca401ad5e3b259f1898d4ad532e418c360186049cde4612a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.post_new"), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summary", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publishedAt", array()), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'row');
        echo "

        <input type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.create_post"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "saveAndCreateNew", array()), 'widget', array("label" => "label.save_and_create_new", "attr" => array("class" => "btn btn-primary")));
        echo "
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
        echo "\" class=\"btn btn-link\">
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.back_to_list"), "html", null, true);
        echo "
        </a>
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_7497f9bda636c9ca401ad5e3b259f1898d4ad532e418c360186049cde4612a92->leave($__internal_7497f9bda636c9ca401ad5e3b259f1898d4ad532e418c360186049cde4612a92_prof);

        
        $__internal_89591dc46da976d2f0f50824e4e392cb810d20f4b9b0921c510e9cdcba78765b->leave($__internal_89591dc46da976d2f0f50824e4e392cb810d20f4b9b0921c510e9cdcba78765b_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5c8a9c192a52fba2a8e147749e8e6035a5a68273882cfd2f201d5083a94ea04f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c8a9c192a52fba2a8e147749e8e6035a5a68273882cfd2f201d5083a94ea04f->enter($__internal_5c8a9c192a52fba2a8e147749e8e6035a5a68273882cfd2f201d5083a94ea04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_db5238ef6b1547396f003b4eb1cabd8b9b87b142dd024dfc8d5a765d32379c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5238ef6b1547396f003b4eb1cabd8b9b87b142dd024dfc8d5a765d32379c9c->enter($__internal_db5238ef6b1547396f003b4eb1cabd8b9b87b142dd024dfc8d5a765d32379c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 26
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_db5238ef6b1547396f003b4eb1cabd8b9b87b142dd024dfc8d5a765d32379c9c->leave($__internal_db5238ef6b1547396f003b4eb1cabd8b9b87b142dd024dfc8d5a765d32379c9c_prof);

        
        $__internal_5c8a9c192a52fba2a8e147749e8e6035a5a68273882cfd2f201d5083a94ea04f->leave($__internal_5c8a9c192a52fba2a8e147749e8e6035a5a68273882cfd2f201d5083a94ea04f_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 26,  138 => 24,  129 => 23,  117 => 20,  112 => 18,  108 => 17,  104 => 16,  100 => 15,  95 => 13,  91 => 12,  87 => 11,  83 => 10,  79 => 9,  75 => 8,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block body_id 'admin_post_new' %}

{% block main %}
    <h1>{{ 'title.post_new'|trans }}</h1>

    {{ form_start(form) }}
        {{ form_row(form.title) }}
        {{ form_row(form.summary) }}
        {{ form_row(form.content) }}
        {{ form_row(form.publishedAt) }}
        {{ form_row(form.tags) }}

        <input type=\"submit\" value=\"{{ 'label.create_post'|trans }}\" class=\"btn btn-primary\" />
        {{ form_widget(form.saveAndCreateNew, { label: 'label.save_and_create_new', attr: { class: 'btn btn-primary' } }) }}
        <a href=\"{{ path('admin_post_index') }}\" class=\"btn btn-link\">
            {{ 'action.back_to_list'|trans }}
        </a>
    {{ form_end(form) }}
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/blog/new.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/admin/blog/new.html.twig");
    }
}
