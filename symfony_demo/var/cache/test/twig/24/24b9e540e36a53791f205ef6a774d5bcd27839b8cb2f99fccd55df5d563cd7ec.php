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
        $__internal_dfedd7681e9f368ed62e3f32075d2637959684014be839c613c912c925c9ca16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfedd7681e9f368ed62e3f32075d2637959684014be839c613c912c925c9ca16->enter($__internal_dfedd7681e9f368ed62e3f32075d2637959684014be839c613c912c925c9ca16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/edit.html.twig"));

        $__internal_0cfb2ec6725d394e7d95889148bc67530d6e7fbda3fb48335554f7bfeafd6ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfb2ec6725d394e7d95889148bc67530d6e7fbda3fb48335554f7bfeafd6ec5->enter($__internal_0cfb2ec6725d394e7d95889148bc67530d6e7fbda3fb48335554f7bfeafd6ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfedd7681e9f368ed62e3f32075d2637959684014be839c613c912c925c9ca16->leave($__internal_dfedd7681e9f368ed62e3f32075d2637959684014be839c613c912c925c9ca16_prof);

        
        $__internal_0cfb2ec6725d394e7d95889148bc67530d6e7fbda3fb48335554f7bfeafd6ec5->leave($__internal_0cfb2ec6725d394e7d95889148bc67530d6e7fbda3fb48335554f7bfeafd6ec5_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_04f677399039ab24c58efbae37554de7d75a7f384633315eff0b129303e9f2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f677399039ab24c58efbae37554de7d75a7f384633315eff0b129303e9f2ee->enter($__internal_04f677399039ab24c58efbae37554de7d75a7f384633315eff0b129303e9f2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_de64dffd0ff25eed6c52ce348178705818e920dc354f94a24c7752dfa54ad0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de64dffd0ff25eed6c52ce348178705818e920dc354f94a24c7752dfa54ad0e9->enter($__internal_de64dffd0ff25eed6c52ce348178705818e920dc354f94a24c7752dfa54ad0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_edit";
        
        $__internal_de64dffd0ff25eed6c52ce348178705818e920dc354f94a24c7752dfa54ad0e9->leave($__internal_de64dffd0ff25eed6c52ce348178705818e920dc354f94a24c7752dfa54ad0e9_prof);

        
        $__internal_04f677399039ab24c58efbae37554de7d75a7f384633315eff0b129303e9f2ee->leave($__internal_04f677399039ab24c58efbae37554de7d75a7f384633315eff0b129303e9f2ee_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_6bf783417567c5f7796a1ae89548acfda58124ff8e475f0b54402c07045a48d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf783417567c5f7796a1ae89548acfda58124ff8e475f0b54402c07045a48d9->enter($__internal_6bf783417567c5f7796a1ae89548acfda58124ff8e475f0b54402c07045a48d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_7c456beaf23fe7848c10815e448bff6b1a5a2de74b1e6e1fe012a2073d500751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c456beaf23fe7848c10815e448bff6b1a5a2de74b1e6e1fe012a2073d500751->enter($__internal_7c456beaf23fe7848c10815e448bff6b1a5a2de74b1e6e1fe012a2073d500751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_7c456beaf23fe7848c10815e448bff6b1a5a2de74b1e6e1fe012a2073d500751->leave($__internal_7c456beaf23fe7848c10815e448bff6b1a5a2de74b1e6e1fe012a2073d500751_prof);

        
        $__internal_6bf783417567c5f7796a1ae89548acfda58124ff8e475f0b54402c07045a48d9->leave($__internal_6bf783417567c5f7796a1ae89548acfda58124ff8e475f0b54402c07045a48d9_prof);

    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9244a1ab4eba522a9376985e505adb43f9db188ec7e25d0d5c99ec7180af631d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9244a1ab4eba522a9376985e505adb43f9db188ec7e25d0d5c99ec7180af631d->enter($__internal_9244a1ab4eba522a9376985e505adb43f9db188ec7e25d0d5c99ec7180af631d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_695b41936da35f65c419bfffd4022c1578947b56ca8bdb054a59ca03f98b1a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695b41936da35f65c419bfffd4022c1578947b56ca8bdb054a59ca03f98b1a92->enter($__internal_695b41936da35f65c419bfffd4022c1578947b56ca8bdb054a59ca03f98b1a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_695b41936da35f65c419bfffd4022c1578947b56ca8bdb054a59ca03f98b1a92->leave($__internal_695b41936da35f65c419bfffd4022c1578947b56ca8bdb054a59ca03f98b1a92_prof);

        
        $__internal_9244a1ab4eba522a9376985e505adb43f9db188ec7e25d0d5c99ec7180af631d->leave($__internal_9244a1ab4eba522a9376985e505adb43f9db188ec7e25d0d5c99ec7180af631d_prof);

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
