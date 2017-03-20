<?php

/* blog/index.html.twig */
class __TwigTemplate_838672c309392da07b5e311ebb71b7fceb5177bceacab9f2c49e42ba857459cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f070794c2832bfc8984fa7a2c55a9dc06a4f369fe45b27a1544ff9dea63ace6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f070794c2832bfc8984fa7a2c55a9dc06a4f369fe45b27a1544ff9dea63ace6->enter($__internal_0f070794c2832bfc8984fa7a2c55a9dc06a4f369fe45b27a1544ff9dea63ace6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_be78ad77db6b2cc6a7a637d7096a45f401d0b970b70ae8401948fc7b8b182f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be78ad77db6b2cc6a7a637d7096a45f401d0b970b70ae8401948fc7b8b182f14->enter($__internal_be78ad77db6b2cc6a7a637d7096a45f401d0b970b70ae8401948fc7b8b182f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f070794c2832bfc8984fa7a2c55a9dc06a4f369fe45b27a1544ff9dea63ace6->leave($__internal_0f070794c2832bfc8984fa7a2c55a9dc06a4f369fe45b27a1544ff9dea63ace6_prof);

        
        $__internal_be78ad77db6b2cc6a7a637d7096a45f401d0b970b70ae8401948fc7b8b182f14->leave($__internal_be78ad77db6b2cc6a7a637d7096a45f401d0b970b70ae8401948fc7b8b182f14_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5c1ab8ddbf5fcded8dea79450aff425a612cfe9dd212e783788b902e1489ce0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1ab8ddbf5fcded8dea79450aff425a612cfe9dd212e783788b902e1489ce0e->enter($__internal_5c1ab8ddbf5fcded8dea79450aff425a612cfe9dd212e783788b902e1489ce0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_395e751574e7daeb97348d11b9c02b92aec1c42da18b6a84f84cac1fa7f06802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395e751574e7daeb97348d11b9c02b92aec1c42da18b6a84f84cac1fa7f06802->enter($__internal_395e751574e7daeb97348d11b9c02b92aec1c42da18b6a84f84cac1fa7f06802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_395e751574e7daeb97348d11b9c02b92aec1c42da18b6a84f84cac1fa7f06802->leave($__internal_395e751574e7daeb97348d11b9c02b92aec1c42da18b6a84f84cac1fa7f06802_prof);

        
        $__internal_5c1ab8ddbf5fcded8dea79450aff425a612cfe9dd212e783788b902e1489ce0e->leave($__internal_5c1ab8ddbf5fcded8dea79450aff425a612cfe9dd212e783788b902e1489ce0e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_f3a5228546e8c08978e2830ba99904b5958db3fb059585d2a01a331dd42bd047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a5228546e8c08978e2830ba99904b5958db3fb059585d2a01a331dd42bd047->enter($__internal_f3a5228546e8c08978e2830ba99904b5958db3fb059585d2a01a331dd42bd047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_38b606b68005198df3041b6bf21606a7578d79aa5d6d65a4ad4965726ac4a3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b606b68005198df3041b6bf21606a7578d79aa5d6d65a4ad4965726ac4a3db->enter($__internal_38b606b68005198df3041b6bf21606a7578d79aa5d6d65a4ad4965726ac4a3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            <p class=\"post-metadata\">
                <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
            // line 15
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["post"], "publishedAt", array()), "long", "medium", null, "UTC"), "html", null, true);
            echo "</span>
                <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "author", array()), "fullName", array()), "html", null, true);
            echo "</span>
            </p>

            ";
            // line 19
            echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute($context["post"], "summary", array()));
            echo "

            ";
            // line 21
            echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
            echo "
        </article>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 24
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    ";
        // line 27
        if ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "haveToPaginate", array())) {
            // line 28
            echo "        <div class=\"navigation text-center\">
            ";
            // line 29
            echo $this->env->getExtension('WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension')->renderPagerfanta((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "twitter_bootstrap3_translated", array("routeName" => "blog_index_paginated"));
            echo "
        </div>
    ";
        }
        
        $__internal_38b606b68005198df3041b6bf21606a7578d79aa5d6d65a4ad4965726ac4a3db->leave($__internal_38b606b68005198df3041b6bf21606a7578d79aa5d6d65a4ad4965726ac4a3db_prof);

        
        $__internal_f3a5228546e8c08978e2830ba99904b5958db3fb059585d2a01a331dd42bd047->leave($__internal_f3a5228546e8c08978e2830ba99904b5958db3fb059585d2a01a331dd42bd047_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6a5d3d8c78f696c382070f56781678c64f31e29de23d356d7fa9cf19da822141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5d3d8c78f696c382070f56781678c64f31e29de23d356d7fa9cf19da822141->enter($__internal_6a5d3d8c78f696c382070f56781678c64f31e29de23d356d7fa9cf19da822141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_fab05a7cdf7706ac6f199c429ce19d34644995f8cff783cbb647a7200284e18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab05a7cdf7706ac6f199c429ce19d34644995f8cff783cbb647a7200284e18d->enter($__internal_fab05a7cdf7706ac6f199c429ce19d34644995f8cff783cbb647a7200284e18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 37
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
    ";
        // line 38
        echo twig_include($this->env, $context, "blog/_rss.html.twig");
        echo "
";
        
        $__internal_fab05a7cdf7706ac6f199c429ce19d34644995f8cff783cbb647a7200284e18d->leave($__internal_fab05a7cdf7706ac6f199c429ce19d34644995f8cff783cbb647a7200284e18d_prof);

        
        $__internal_6a5d3d8c78f696c382070f56781678c64f31e29de23d356d7fa9cf19da822141->leave($__internal_6a5d3d8c78f696c382070f56781678c64f31e29de23d356d7fa9cf19da822141_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 38,  181 => 37,  175 => 35,  166 => 34,  152 => 29,  149 => 28,  147 => 27,  144 => 26,  135 => 24,  119 => 21,  114 => 19,  108 => 16,  104 => 15,  96 => 10,  92 => 9,  88 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body_id 'blog_index' %}

{% block main %}
    {% for post in posts %}
        <article class=\"post\">
            <h2>
                <a href=\"{{ path('blog_post', { slug: post.slug }) }}\">
                    {{ post.title }}
                </a>
            </h2>

            <p class=\"post-metadata\">
                <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ post.publishedAt|localizeddate('long', 'medium', null, 'UTC') }}</span>
                <span class=\"metadata\"><i class=\"fa fa-user\"></i> {{ post.author.fullName }}</span>
            </p>

            {{ post.summary|md2html }}

            {{ include('blog/_post_tags.html.twig') }}
        </article>
    {% else %}
        <div class=\"well\">{{ 'post.no_posts_found'|trans }}</div>
    {% endfor %}

    {% if posts.haveToPaginate %}
        <div class=\"navigation text-center\">
            {{ pagerfanta(posts, 'twitter_bootstrap3_translated', { routeName: 'blog_index_paginated' }) }}
        </div>
    {% endif %}
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
    {{ include('blog/_rss.html.twig') }}
{% endblock %}
", "blog/index.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/blog/index.html.twig");
    }
}
