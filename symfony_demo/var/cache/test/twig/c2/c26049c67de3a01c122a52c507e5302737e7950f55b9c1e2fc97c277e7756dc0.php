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
        $__internal_53e43f92cb6211a3d4ec6832a39342c0b15d89468bdf4aecf8463760103977fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e43f92cb6211a3d4ec6832a39342c0b15d89468bdf4aecf8463760103977fd->enter($__internal_53e43f92cb6211a3d4ec6832a39342c0b15d89468bdf4aecf8463760103977fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/new.html.twig"));

        $__internal_170b7fb0b08bbd5d2c4039d2a6ff63c268c5981166a81443bb11946a7672595c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170b7fb0b08bbd5d2c4039d2a6ff63c268c5981166a81443bb11946a7672595c->enter($__internal_170b7fb0b08bbd5d2c4039d2a6ff63c268c5981166a81443bb11946a7672595c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53e43f92cb6211a3d4ec6832a39342c0b15d89468bdf4aecf8463760103977fd->leave($__internal_53e43f92cb6211a3d4ec6832a39342c0b15d89468bdf4aecf8463760103977fd_prof);

        
        $__internal_170b7fb0b08bbd5d2c4039d2a6ff63c268c5981166a81443bb11946a7672595c->leave($__internal_170b7fb0b08bbd5d2c4039d2a6ff63c268c5981166a81443bb11946a7672595c_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_04dae9018d258a591d48f569639a0d004842cded511303f47f34b2d64d0a6b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04dae9018d258a591d48f569639a0d004842cded511303f47f34b2d64d0a6b0b->enter($__internal_04dae9018d258a591d48f569639a0d004842cded511303f47f34b2d64d0a6b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_c010d72ab74062cbc6426f8671deffee112dbc2c9e58a94732b99ba16edd4f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c010d72ab74062cbc6426f8671deffee112dbc2c9e58a94732b99ba16edd4f57->enter($__internal_c010d72ab74062cbc6426f8671deffee112dbc2c9e58a94732b99ba16edd4f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_new";
        
        $__internal_c010d72ab74062cbc6426f8671deffee112dbc2c9e58a94732b99ba16edd4f57->leave($__internal_c010d72ab74062cbc6426f8671deffee112dbc2c9e58a94732b99ba16edd4f57_prof);

        
        $__internal_04dae9018d258a591d48f569639a0d004842cded511303f47f34b2d64d0a6b0b->leave($__internal_04dae9018d258a591d48f569639a0d004842cded511303f47f34b2d64d0a6b0b_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_0b531850885913cfbe82dfa1f3cb28c0937c93263aff92ae73e192d6ace2c90a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b531850885913cfbe82dfa1f3cb28c0937c93263aff92ae73e192d6ace2c90a->enter($__internal_0b531850885913cfbe82dfa1f3cb28c0937c93263aff92ae73e192d6ace2c90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c3e978c03ce46deccbee3a19f41fdad0096cd313e87b3f5c942597288d266b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e978c03ce46deccbee3a19f41fdad0096cd313e87b3f5c942597288d266b48->enter($__internal_c3e978c03ce46deccbee3a19f41fdad0096cd313e87b3f5c942597288d266b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_c3e978c03ce46deccbee3a19f41fdad0096cd313e87b3f5c942597288d266b48->leave($__internal_c3e978c03ce46deccbee3a19f41fdad0096cd313e87b3f5c942597288d266b48_prof);

        
        $__internal_0b531850885913cfbe82dfa1f3cb28c0937c93263aff92ae73e192d6ace2c90a->leave($__internal_0b531850885913cfbe82dfa1f3cb28c0937c93263aff92ae73e192d6ace2c90a_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0204c21cc72d14fbf1133e04a87a9617e5ce0a6942e7c3f438b169c77966dd01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0204c21cc72d14fbf1133e04a87a9617e5ce0a6942e7c3f438b169c77966dd01->enter($__internal_0204c21cc72d14fbf1133e04a87a9617e5ce0a6942e7c3f438b169c77966dd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_370b3af3d0583fc949ae0e253fedb763926b375ee477c7dd8ce83b76cbefde9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370b3af3d0583fc949ae0e253fedb763926b375ee477c7dd8ce83b76cbefde9b->enter($__internal_370b3af3d0583fc949ae0e253fedb763926b375ee477c7dd8ce83b76cbefde9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 26
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_370b3af3d0583fc949ae0e253fedb763926b375ee477c7dd8ce83b76cbefde9b->leave($__internal_370b3af3d0583fc949ae0e253fedb763926b375ee477c7dd8ce83b76cbefde9b_prof);

        
        $__internal_0204c21cc72d14fbf1133e04a87a9617e5ce0a6942e7c3f438b169c77966dd01->leave($__internal_0204c21cc72d14fbf1133e04a87a9617e5ce0a6942e7c3f438b169c77966dd01_prof);

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
