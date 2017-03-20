<?php

/* admin/layout.html.twig */
class __TwigTemplate_37b7ea8e25dad31da2a231160beeab7b951a226ac2c6f75c55c34ef10b193a62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("base.html.twig", "admin/layout.html.twig", 8);
        $this->blocks = array(
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4923a4ce070af7c442fc95397be09ddb4eb0786e128c5412369146b1b48f55f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4923a4ce070af7c442fc95397be09ddb4eb0786e128c5412369146b1b48f55f2->enter($__internal_4923a4ce070af7c442fc95397be09ddb4eb0786e128c5412369146b1b48f55f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $__internal_877fc510923a6e0d2d021ff6ded5f319844ccee914f2e6a1da4fa65d4945331e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877fc510923a6e0d2d021ff6ded5f319844ccee914f2e6a1da4fa65d4945331e->enter($__internal_877fc510923a6e0d2d021ff6ded5f319844ccee914f2e6a1da4fa65d4945331e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4923a4ce070af7c442fc95397be09ddb4eb0786e128c5412369146b1b48f55f2->leave($__internal_4923a4ce070af7c442fc95397be09ddb4eb0786e128c5412369146b1b48f55f2_prof);

        
        $__internal_877fc510923a6e0d2d021ff6ded5f319844ccee914f2e6a1da4fa65d4945331e->leave($__internal_877fc510923a6e0d2d021ff6ded5f319844ccee914f2e6a1da4fa65d4945331e_prof);

    }

    // line 10
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_96034601edba4123fd739277fd78131f07d86641111b8a77f25fb31fadb203a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96034601edba4123fd739277fd78131f07d86641111b8a77f25fb31fadb203a2->enter($__internal_96034601edba4123fd739277fd78131f07d86641111b8a77f25fb31fadb203a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_fa55bcb027becc20b75e0dfcd823aa0b10f0a8032eb3e9964f3e2cc19d76730c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa55bcb027becc20b75e0dfcd823aa0b10f0a8032eb3e9964f3e2cc19d76730c->enter($__internal_fa55bcb027becc20b75e0dfcd823aa0b10f0a8032eb3e9964f3e2cc19d76730c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 11
        echo "    <li>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
        echo "\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.post_list"), "html", null, true);
        echo "
        </a>
    </li>
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.back_to_blog"), "html", null, true);
        echo "
        </a>
    </li>
";
        
        $__internal_fa55bcb027becc20b75e0dfcd823aa0b10f0a8032eb3e9964f3e2cc19d76730c->leave($__internal_fa55bcb027becc20b75e0dfcd823aa0b10f0a8032eb3e9964f3e2cc19d76730c_prof);

        
        $__internal_96034601edba4123fd739277fd78131f07d86641111b8a77f25fb31fadb203a2->leave($__internal_96034601edba4123fd739277fd78131f07d86641111b8a77f25fb31fadb203a2_prof);

    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  63 => 17,  56 => 13,  52 => 12,  49 => 11,  40 => 10,  11 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template of the all backend pages. Since this layout is similar
   to the global layout, we inherit from it to just change the contents of some
   blocks. In practice, backend templates are using a three-level inheritance,
   showing how powerful, yet easy to use, is Twig's inheritance mechanism.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
{% extends 'base.html.twig' %}

{% block header_navigation_links %}
    <li>
        <a href=\"{{ path('admin_post_index') }}\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> {{ 'menu.post_list'|trans }}
        </a>
    </li>
    <li>
        <a href=\"{{ path('blog_index') }}\">
            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> {{ 'menu.back_to_blog'|trans }}
        </a>
    </li>
{% endblock %}
", "admin/layout.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/admin/layout.html.twig");
    }
}
