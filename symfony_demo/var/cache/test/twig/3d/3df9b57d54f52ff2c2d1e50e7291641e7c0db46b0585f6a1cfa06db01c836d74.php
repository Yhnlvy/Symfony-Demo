<?php

/* admin/blog/index.html.twig */
class __TwigTemplate_c53c4125ade172be45d99f4f70864bd8d81a36bc4c1073580075368d0fc44b6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/index.html.twig", 1);
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
        $__internal_0b27bd4b5cb9d697e86c3d155e164ff2313d60e26805307b755b6ea7dfc55027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b27bd4b5cb9d697e86c3d155e164ff2313d60e26805307b755b6ea7dfc55027->enter($__internal_0b27bd4b5cb9d697e86c3d155e164ff2313d60e26805307b755b6ea7dfc55027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $__internal_40c6fec3ff2db312719e3c0f79ad3ac8aeab918a2a53c6228063cac56491b8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c6fec3ff2db312719e3c0f79ad3ac8aeab918a2a53c6228063cac56491b8a6->enter($__internal_40c6fec3ff2db312719e3c0f79ad3ac8aeab918a2a53c6228063cac56491b8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b27bd4b5cb9d697e86c3d155e164ff2313d60e26805307b755b6ea7dfc55027->leave($__internal_0b27bd4b5cb9d697e86c3d155e164ff2313d60e26805307b755b6ea7dfc55027_prof);

        
        $__internal_40c6fec3ff2db312719e3c0f79ad3ac8aeab918a2a53c6228063cac56491b8a6->leave($__internal_40c6fec3ff2db312719e3c0f79ad3ac8aeab918a2a53c6228063cac56491b8a6_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8e1033c3625462fce75754ed757f725b61d776dbbdeb81a24789acdb060d0815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1033c3625462fce75754ed757f725b61d776dbbdeb81a24789acdb060d0815->enter($__internal_8e1033c3625462fce75754ed757f725b61d776dbbdeb81a24789acdb060d0815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_bc3e29eebbcba91c3145e6d765ed72559d39f5704687f7b0f1d1356425376d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3e29eebbcba91c3145e6d765ed72559d39f5704687f7b0f1d1356425376d5d->enter($__internal_bc3e29eebbcba91c3145e6d765ed72559d39f5704687f7b0f1d1356425376d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_index";
        
        $__internal_bc3e29eebbcba91c3145e6d765ed72559d39f5704687f7b0f1d1356425376d5d->leave($__internal_bc3e29eebbcba91c3145e6d765ed72559d39f5704687f7b0f1d1356425376d5d_prof);

        
        $__internal_8e1033c3625462fce75754ed757f725b61d776dbbdeb81a24789acdb060d0815->leave($__internal_8e1033c3625462fce75754ed757f725b61d776dbbdeb81a24789acdb060d0815_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_c80490fddf7d1a43eafe92acbd436d50e6a84c8599f7a184eeab8e913317b0a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80490fddf7d1a43eafe92acbd436d50e6a84c8599f7a184eeab8e913317b0a4->enter($__internal_c80490fddf7d1a43eafe92acbd436d50e6a84c8599f7a184eeab8e913317b0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_120f25d3fafefeb1bc8b49b827c7d16b31156629bb5d2abd201ac017848e191d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120f25d3fafefeb1bc8b49b827c7d16b31156629bb5d2abd201ac017848e191d->enter($__internal_120f25d3fafefeb1bc8b49b827c7d16b31156629bb5d2abd201ac017848e191d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.post_list"), "html", null, true);
        echo "</h1>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.published_at"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                ";
            // line 23
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["post"], "publishedAt", array()), "medium", "short", null, "UTC"), "html", null, true);
            echo "</td>
                <td class=\"text-right\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.edit"), "html", null, true);
            echo "
                        </a>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"4\" align=\"center\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.no_posts_found"), "html", null, true);
            echo "</td>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
";
        
        $__internal_120f25d3fafefeb1bc8b49b827c7d16b31156629bb5d2abd201ac017848e191d->leave($__internal_120f25d3fafefeb1bc8b49b827c7d16b31156629bb5d2abd201ac017848e191d_prof);

        
        $__internal_c80490fddf7d1a43eafe92acbd436d50e6a84c8599f7a184eeab8e913317b0a4->leave($__internal_c80490fddf7d1a43eafe92acbd436d50e6a84c8599f7a184eeab8e913317b0a4_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e5059bc97ce702b6c53183f3fbf572c6cccb3633ab853e3b67db981265ed6cfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5059bc97ce702b6c53183f3fbf572c6cccb3633ab853e3b67db981265ed6cfd->enter($__internal_e5059bc97ce702b6c53183f3fbf572c6cccb3633ab853e3b67db981265ed6cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_811a45546a112bffa7952ff3849917668d5895251da85417f25eff88c8ce743f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811a45546a112bffa7952ff3849917668d5895251da85417f25eff88c8ce743f->enter($__internal_811a45546a112bffa7952ff3849917668d5895251da85417f25eff88c8ce743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 46
        echo "    <div class=\"section actions\">
        <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_new");
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.create_post"), "html", null, true);
        echo "
        </a>
    </div>

    ";
        // line 52
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 54
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_811a45546a112bffa7952ff3849917668d5895251da85417f25eff88c8ce743f->leave($__internal_811a45546a112bffa7952ff3849917668d5895251da85417f25eff88c8ce743f_prof);

        
        $__internal_e5059bc97ce702b6c53183f3fbf572c6cccb3633ab853e3b67db981265ed6cfd->leave($__internal_e5059bc97ce702b6c53183f3fbf572c6cccb3633ab853e3b67db981265ed6cfd_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 54,  184 => 52,  177 => 48,  173 => 47,  170 => 46,  161 => 45,  149 => 41,  140 => 38,  137 => 37,  126 => 31,  122 => 30,  116 => 27,  112 => 26,  105 => 23,  101 => 19,  98 => 18,  93 => 17,  86 => 13,  82 => 12,  78 => 11,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block body_id 'admin_post_index' %}

{% block main %}
    <h1>{{ 'title.post_list'|trans }}</h1>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">{{ 'label.title'|trans }}</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> {{ 'label.published_at'|trans }}</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> {{ 'label.actions'|trans }}</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td>{{ post.title }}</td>
                {# it's not mandatory to set the timezone in localizeddate(). This is done to
                   avoid errors when the 'intl' PHP extension is not available and the application
                   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
                <td>{{ post.publishedAt|localizeddate('medium', 'short', null, 'UTC') }}</td>
                <td class=\"text-right\">
                    <div class=\"item-actions\">
                        <a href=\"{{ path('admin_post_show', { id: post.id }) }}\" class=\"btn btn-sm btn-default\">
                            {{ 'action.show'|trans }}
                        </a>

                        <a href=\"{{ path('admin_post_edit', { id: post.id }) }}\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
                        </a>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\" align=\"center\">{{ 'post.no_posts_found'|trans }}</td>
           </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}

{% block sidebar %}
    <div class=\"section actions\">
        <a href=\"{{ path('admin_post_new') }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> {{ 'action.create_post'|trans }}
        </a>
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/blog/index.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/admin/blog/index.html.twig");
    }
}
