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
        $__internal_4c2086c6b6b1f4f6b7510712cdf19c4ef8cc59248fcd075e7b18a7d308dd99b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2086c6b6b1f4f6b7510712cdf19c4ef8cc59248fcd075e7b18a7d308dd99b1->enter($__internal_4c2086c6b6b1f4f6b7510712cdf19c4ef8cc59248fcd075e7b18a7d308dd99b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_f8e70fbb9d90777536958d96617db30e1bf5fa97c90ceea41a83997eb982aaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e70fbb9d90777536958d96617db30e1bf5fa97c90ceea41a83997eb982aaa4->enter($__internal_f8e70fbb9d90777536958d96617db30e1bf5fa97c90ceea41a83997eb982aaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c2086c6b6b1f4f6b7510712cdf19c4ef8cc59248fcd075e7b18a7d308dd99b1->leave($__internal_4c2086c6b6b1f4f6b7510712cdf19c4ef8cc59248fcd075e7b18a7d308dd99b1_prof);

        
        $__internal_f8e70fbb9d90777536958d96617db30e1bf5fa97c90ceea41a83997eb982aaa4->leave($__internal_f8e70fbb9d90777536958d96617db30e1bf5fa97c90ceea41a83997eb982aaa4_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_068d9190fe93f719b3eac4315f55059932d2e5501affa2999cf65d5434c213db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068d9190fe93f719b3eac4315f55059932d2e5501affa2999cf65d5434c213db->enter($__internal_068d9190fe93f719b3eac4315f55059932d2e5501affa2999cf65d5434c213db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_9b19b5a57a0b32b1059c598002c093a7f8ee5f57a5578071998890f29bd7083c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b19b5a57a0b32b1059c598002c093a7f8ee5f57a5578071998890f29bd7083c->enter($__internal_9b19b5a57a0b32b1059c598002c093a7f8ee5f57a5578071998890f29bd7083c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_9b19b5a57a0b32b1059c598002c093a7f8ee5f57a5578071998890f29bd7083c->leave($__internal_9b19b5a57a0b32b1059c598002c093a7f8ee5f57a5578071998890f29bd7083c_prof);

        
        $__internal_068d9190fe93f719b3eac4315f55059932d2e5501affa2999cf65d5434c213db->leave($__internal_068d9190fe93f719b3eac4315f55059932d2e5501affa2999cf65d5434c213db_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_f02252e501a73b64b535353f50e3e0de1f5e7716872cad3eda388c86df5fd944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02252e501a73b64b535353f50e3e0de1f5e7716872cad3eda388c86df5fd944->enter($__internal_f02252e501a73b64b535353f50e3e0de1f5e7716872cad3eda388c86df5fd944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_9c861b15834b4da6b2540862a89e2acebb268d55bfff05f5a19cac6906781a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c861b15834b4da6b2540862a89e2acebb268d55bfff05f5a19cac6906781a84->enter($__internal_9c861b15834b4da6b2540862a89e2acebb268d55bfff05f5a19cac6906781a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_9c861b15834b4da6b2540862a89e2acebb268d55bfff05f5a19cac6906781a84->leave($__internal_9c861b15834b4da6b2540862a89e2acebb268d55bfff05f5a19cac6906781a84_prof);

        
        $__internal_f02252e501a73b64b535353f50e3e0de1f5e7716872cad3eda388c86df5fd944->leave($__internal_f02252e501a73b64b535353f50e3e0de1f5e7716872cad3eda388c86df5fd944_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e5cb5a1e9fc5dad53dbce038e7b01a71c375ae983a3f6f3340ed2a19212bd0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cb5a1e9fc5dad53dbce038e7b01a71c375ae983a3f6f3340ed2a19212bd0fc->enter($__internal_e5cb5a1e9fc5dad53dbce038e7b01a71c375ae983a3f6f3340ed2a19212bd0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_21480c822cb288d22509d6dbfa291bcd666238544731c1c30dd9c6cf92c8ee9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21480c822cb288d22509d6dbfa291bcd666238544731c1c30dd9c6cf92c8ee9a->enter($__internal_21480c822cb288d22509d6dbfa291bcd666238544731c1c30dd9c6cf92c8ee9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_21480c822cb288d22509d6dbfa291bcd666238544731c1c30dd9c6cf92c8ee9a->leave($__internal_21480c822cb288d22509d6dbfa291bcd666238544731c1c30dd9c6cf92c8ee9a_prof);

        
        $__internal_e5cb5a1e9fc5dad53dbce038e7b01a71c375ae983a3f6f3340ed2a19212bd0fc->leave($__internal_e5cb5a1e9fc5dad53dbce038e7b01a71c375ae983a3f6f3340ed2a19212bd0fc_prof);

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
