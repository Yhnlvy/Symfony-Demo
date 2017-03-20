<?php

/* blog/index.html.twig */
class __TwigTemplate_64f6ce70e0beaeeb8ab9a2bbec5b19b0050bdfaa952dce4c5e1d93fc1dd7e2a7 extends Twig_Template
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
        $__internal_8891db31621a6d0e1275351a887984d6f6c40080a6d86fc6268dbed311f339ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8891db31621a6d0e1275351a887984d6f6c40080a6d86fc6268dbed311f339ed->enter($__internal_8891db31621a6d0e1275351a887984d6f6c40080a6d86fc6268dbed311f339ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_73af86c949cf74fa0d9a15faa3aa0810b4b25c3bea43aafa7b505958d339dc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73af86c949cf74fa0d9a15faa3aa0810b4b25c3bea43aafa7b505958d339dc35->enter($__internal_73af86c949cf74fa0d9a15faa3aa0810b4b25c3bea43aafa7b505958d339dc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8891db31621a6d0e1275351a887984d6f6c40080a6d86fc6268dbed311f339ed->leave($__internal_8891db31621a6d0e1275351a887984d6f6c40080a6d86fc6268dbed311f339ed_prof);

        
        $__internal_73af86c949cf74fa0d9a15faa3aa0810b4b25c3bea43aafa7b505958d339dc35->leave($__internal_73af86c949cf74fa0d9a15faa3aa0810b4b25c3bea43aafa7b505958d339dc35_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0f54efe2099c7dadf64a19202035e0dd2ba0e9425343a6ed2423a9d6145669e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f54efe2099c7dadf64a19202035e0dd2ba0e9425343a6ed2423a9d6145669e9->enter($__internal_0f54efe2099c7dadf64a19202035e0dd2ba0e9425343a6ed2423a9d6145669e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_b011e18129c4f50b33d993985dddf6870a8e93fa1e683c5f4027ca50b5568b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b011e18129c4f50b33d993985dddf6870a8e93fa1e683c5f4027ca50b5568b53->enter($__internal_b011e18129c4f50b33d993985dddf6870a8e93fa1e683c5f4027ca50b5568b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_b011e18129c4f50b33d993985dddf6870a8e93fa1e683c5f4027ca50b5568b53->leave($__internal_b011e18129c4f50b33d993985dddf6870a8e93fa1e683c5f4027ca50b5568b53_prof);

        
        $__internal_0f54efe2099c7dadf64a19202035e0dd2ba0e9425343a6ed2423a9d6145669e9->leave($__internal_0f54efe2099c7dadf64a19202035e0dd2ba0e9425343a6ed2423a9d6145669e9_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_3378bd789102205460377da6d296f2242c67f17626a9d5e7a3f3f44b0a5f678c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3378bd789102205460377da6d296f2242c67f17626a9d5e7a3f3f44b0a5f678c->enter($__internal_3378bd789102205460377da6d296f2242c67f17626a9d5e7a3f3f44b0a5f678c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a010eb5e7ef9a8d07d49e0d8281c0450aed4acfe8b35f4ae282a2d34657e852c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a010eb5e7ef9a8d07d49e0d8281c0450aed4acfe8b35f4ae282a2d34657e852c->enter($__internal_a010eb5e7ef9a8d07d49e0d8281c0450aed4acfe8b35f4ae282a2d34657e852c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_a010eb5e7ef9a8d07d49e0d8281c0450aed4acfe8b35f4ae282a2d34657e852c->leave($__internal_a010eb5e7ef9a8d07d49e0d8281c0450aed4acfe8b35f4ae282a2d34657e852c_prof);

        
        $__internal_3378bd789102205460377da6d296f2242c67f17626a9d5e7a3f3f44b0a5f678c->leave($__internal_3378bd789102205460377da6d296f2242c67f17626a9d5e7a3f3f44b0a5f678c_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_355d236ea1189f7864b9280849287495713851c484e6fb97dd3a9e791037a87e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355d236ea1189f7864b9280849287495713851c484e6fb97dd3a9e791037a87e->enter($__internal_355d236ea1189f7864b9280849287495713851c484e6fb97dd3a9e791037a87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_3bce72b598fb3bc34897872a22bee1c575456affb56422a73808633a69ffbb16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bce72b598fb3bc34897872a22bee1c575456affb56422a73808633a69ffbb16->enter($__internal_3bce72b598fb3bc34897872a22bee1c575456affb56422a73808633a69ffbb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_3bce72b598fb3bc34897872a22bee1c575456affb56422a73808633a69ffbb16->leave($__internal_3bce72b598fb3bc34897872a22bee1c575456affb56422a73808633a69ffbb16_prof);

        
        $__internal_355d236ea1189f7864b9280849287495713851c484e6fb97dd3a9e791037a87e->leave($__internal_355d236ea1189f7864b9280849287495713851c484e6fb97dd3a9e791037a87e_prof);

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
", "blog/index.html.twig", "/var/www/myapp/current/symfony_demo/app/Resources/views/blog/index.html.twig");
    }
}
