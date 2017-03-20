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
        $__internal_f0fd5a7cd73a3024a8c428d45efd78f4bb2ba8276df1cff8874b982b471a5bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0fd5a7cd73a3024a8c428d45efd78f4bb2ba8276df1cff8874b982b471a5bd4->enter($__internal_f0fd5a7cd73a3024a8c428d45efd78f4bb2ba8276df1cff8874b982b471a5bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $__internal_fd8d90507139371101cc8a540e2e1d4ead53977647a4ec6d12c8baddfbb38f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8d90507139371101cc8a540e2e1d4ead53977647a4ec6d12c8baddfbb38f9c->enter($__internal_fd8d90507139371101cc8a540e2e1d4ead53977647a4ec6d12c8baddfbb38f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0fd5a7cd73a3024a8c428d45efd78f4bb2ba8276df1cff8874b982b471a5bd4->leave($__internal_f0fd5a7cd73a3024a8c428d45efd78f4bb2ba8276df1cff8874b982b471a5bd4_prof);

        
        $__internal_fd8d90507139371101cc8a540e2e1d4ead53977647a4ec6d12c8baddfbb38f9c->leave($__internal_fd8d90507139371101cc8a540e2e1d4ead53977647a4ec6d12c8baddfbb38f9c_prof);

    }

    // line 10
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_c4e040ff933d92b91d4da7896b13b94608ceeb94a67ba374af5a1b7378ab4b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e040ff933d92b91d4da7896b13b94608ceeb94a67ba374af5a1b7378ab4b73->enter($__internal_c4e040ff933d92b91d4da7896b13b94608ceeb94a67ba374af5a1b7378ab4b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_adcc82b34366ab63c82f213b9150058af4569292d9949df3a6953f9aebb9d690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adcc82b34366ab63c82f213b9150058af4569292d9949df3a6953f9aebb9d690->enter($__internal_adcc82b34366ab63c82f213b9150058af4569292d9949df3a6953f9aebb9d690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

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
        
        $__internal_adcc82b34366ab63c82f213b9150058af4569292d9949df3a6953f9aebb9d690->leave($__internal_adcc82b34366ab63c82f213b9150058af4569292d9949df3a6953f9aebb9d690_prof);

        
        $__internal_c4e040ff933d92b91d4da7896b13b94608ceeb94a67ba374af5a1b7378ab4b73->leave($__internal_c4e040ff933d92b91d4da7896b13b94608ceeb94a67ba374af5a1b7378ab4b73_prof);

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
