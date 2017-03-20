<?php

/* blog/post_show.html.twig */
class __TwigTemplate_d17643f6c84c2a76bbdae75ea55b0d6a9f4713283a3bc7520c7e1db011824f0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/post_show.html.twig", 1);
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
        $__internal_50ee29bb26f88f132ac949bee7b4d556be710dd3e21840530e868e340c888170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ee29bb26f88f132ac949bee7b4d556be710dd3e21840530e868e340c888170->enter($__internal_50ee29bb26f88f132ac949bee7b4d556be710dd3e21840530e868e340c888170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/post_show.html.twig"));

        $__internal_9030a34b45d940cea9e096480147f06109e8b37b3e0e838f988f5f396f028ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9030a34b45d940cea9e096480147f06109e8b37b3e0e838f988f5f396f028ff5->enter($__internal_9030a34b45d940cea9e096480147f06109e8b37b3e0e838f988f5f396f028ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/post_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50ee29bb26f88f132ac949bee7b4d556be710dd3e21840530e868e340c888170->leave($__internal_50ee29bb26f88f132ac949bee7b4d556be710dd3e21840530e868e340c888170_prof);

        
        $__internal_9030a34b45d940cea9e096480147f06109e8b37b3e0e838f988f5f396f028ff5->leave($__internal_9030a34b45d940cea9e096480147f06109e8b37b3e0e838f988f5f396f028ff5_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_99f1af9efc1c6aa0da9dcf9a2ab05b1e6639f153e033dafbe38e31068510a242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f1af9efc1c6aa0da9dcf9a2ab05b1e6639f153e033dafbe38e31068510a242->enter($__internal_99f1af9efc1c6aa0da9dcf9a2ab05b1e6639f153e033dafbe38e31068510a242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_def76912b5c0f6fa1f96e12ea3e6adf6ca59f166fbd912a077d0459f5a683547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def76912b5c0f6fa1f96e12ea3e6adf6ca59f166fbd912a077d0459f5a683547->enter($__internal_def76912b5c0f6fa1f96e12ea3e6adf6ca59f166fbd912a077d0459f5a683547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_post_show";
        
        $__internal_def76912b5c0f6fa1f96e12ea3e6adf6ca59f166fbd912a077d0459f5a683547->leave($__internal_def76912b5c0f6fa1f96e12ea3e6adf6ca59f166fbd912a077d0459f5a683547_prof);

        
        $__internal_99f1af9efc1c6aa0da9dcf9a2ab05b1e6639f153e033dafbe38e31068510a242->leave($__internal_99f1af9efc1c6aa0da9dcf9a2ab05b1e6639f153e033dafbe38e31068510a242_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_38a00810a739616f1ac6318727282fbcd4f7d80e143b35d8f5631d403637c4a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a00810a739616f1ac6318727282fbcd4f7d80e143b35d8f5631d403637c4a8->enter($__internal_38a00810a739616f1ac6318727282fbcd4f7d80e143b35d8f5631d403637c4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_2378f8aac01e87c35a6e4ae60b432305df5b2bb184d6017376e7b97115cac3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2378f8aac01e87c35a6e4ae60b432305df5b2bb184d6017376e7b97115cac3db->enter($__internal_2378f8aac01e87c35a6e4ae60b432305df5b2bb184d6017376e7b97115cac3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "publishedAt", array()), "long", "medium", null, "UTC"), "html", null, true);
        echo "</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array()), "fullName", array()), "html", null, true);
        echo "</span>
    </p>

    ";
        // line 13
        echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()));
        echo "

    ";
        // line 15
        echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
        echo "

    <div id=\"post-add-comment\" class=\"well\">
        ";
        // line 24
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Blog:commentForm", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))));
            echo "
        ";
        } else {
            // line 27
            echo "            <p>
                <a class=\"btn btn-success\" href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.sign_in"), "html", null, true);
            echo "
                </a>
                ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.to_publish_a_comment"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 34
        echo "    </div>

    <h3>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("post.num_comments", twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()))), "html", null, true);
        echo "</h3>

    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 39
            echo "        <div class=\"row post-comment\">
            <a name=\"comment_";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\"></a>
            <h4 class=\"col-sm-3\">
                <strong>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "fullName", array()), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.commented_on"), "html", null, true);
            echo "
                ";
            // line 46
            echo "                <strong>";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["comment"], "publishedAt", array()), "medium", "short", null, "UTC"), "html", null, true);
            echo "</strong>
            </h4>
            <div class=\"col-sm-9\">
                ";
            // line 49
            echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute($context["comment"], "content", array()));
            echo "
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "        <div class=\"post-comment\">
            <p>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.no_comments"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2378f8aac01e87c35a6e4ae60b432305df5b2bb184d6017376e7b97115cac3db->leave($__internal_2378f8aac01e87c35a6e4ae60b432305df5b2bb184d6017376e7b97115cac3db_prof);

        
        $__internal_38a00810a739616f1ac6318727282fbcd4f7d80e143b35d8f5631d403637c4a8->leave($__internal_38a00810a739616f1ac6318727282fbcd4f7d80e143b35d8f5631d403637c4a8_prof);

    }

    // line 59
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_12b64fa5978e9c461ecdee4d77687f8524c4446b7d905dd8134cbeaddc9b9558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b64fa5978e9c461ecdee4d77687f8524c4446b7d905dd8134cbeaddc9b9558->enter($__internal_12b64fa5978e9c461ecdee4d77687f8524c4446b7d905dd8134cbeaddc9b9558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_f11bdb9a3368d013f2abdcfde9a3667f1d5c6a8766b68b9428d817b0aa716641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11bdb9a3368d013f2abdcfde9a3667f1d5c6a8766b68b9428d817b0aa716641->enter($__internal_f11bdb9a3368d013f2abdcfde9a3667f1d5c6a8766b68b9428d817b0aa716641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 60
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("edit", (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
            // line 61
            echo "        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.edit_post"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 67
        echo "
    ";
        // line 71
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 73
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
    ";
        // line 74
        echo twig_include($this->env, $context, "blog/_rss.html.twig");
        echo "
";
        
        $__internal_f11bdb9a3368d013f2abdcfde9a3667f1d5c6a8766b68b9428d817b0aa716641->leave($__internal_f11bdb9a3368d013f2abdcfde9a3667f1d5c6a8766b68b9428d817b0aa716641_prof);

        
        $__internal_12b64fa5978e9c461ecdee4d77687f8524c4446b7d905dd8134cbeaddc9b9558->leave($__internal_12b64fa5978e9c461ecdee4d77687f8524c4446b7d905dd8134cbeaddc9b9558_prof);

    }

    public function getTemplateName()
    {
        return "blog/post_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 74,  223 => 73,  217 => 71,  214 => 67,  207 => 63,  203 => 62,  200 => 61,  197 => 60,  188 => 59,  171 => 54,  168 => 53,  159 => 49,  152 => 46,  146 => 42,  141 => 40,  138 => 39,  133 => 38,  128 => 36,  124 => 34,  118 => 31,  113 => 29,  109 => 28,  106 => 27,  100 => 25,  97 => 24,  91 => 15,  86 => 13,  80 => 10,  76 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block body_id 'blog_post_show' %}

{% block main %}
    <h1>{{ post.title }}</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ post.publishedAt|localizeddate('long', 'medium', null, 'UTC') }}</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> {{ post.author.fullName }}</span>
    </p>

    {{ post.content|md2html }}

    {{ include('blog/_post_tags.html.twig') }}

    <div id=\"post-add-comment\" class=\"well\">
        {# The 'IS_AUTHENTICATED_FULLY' role ensures that the user has entered
        his/her credentials (login + password) during this session. If he/she
        is automatically logged via the 'Remember Me' functionality, he/she won't
        be able to add a comment.
        See http://symfony.com/doc/current/cookbook/security/remember_me.html#forcing-the-user-to-re-authenticate-before-accessing-certain-resources
        #}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {{ render(controller('AppBundle:Blog:commentForm', { 'id': post.id })) }}
        {% else %}
            <p>
                <a class=\"btn btn-success\" href=\"{{ path('security_login') }}\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> {{ 'action.sign_in'|trans }}
                </a>
                {{ 'post.to_publish_a_comment'|trans }}
            </p>
        {% endif %}
    </div>

    <h3>{{ 'post.num_comments'|transchoice(post.comments|length) }}</h3>

    {% for comment in post.comments %}
        <div class=\"row post-comment\">
            <a name=\"comment_{{ comment.id }}\"></a>
            <h4 class=\"col-sm-3\">
                <strong>{{ comment.author.fullName }}</strong> {{ 'post.commented_on'|trans }}
                {# it's not mandatory to set the timezone in localizeddate(). This is done to
                   avoid errors when the 'intl' PHP extension is not available and the application
                   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
                <strong>{{ comment.publishedAt|localizeddate('medium', 'short', null, 'UTC') }}</strong>
            </h4>
            <div class=\"col-sm-9\">
                {{ comment.content|md2html }}
            </div>
        </div>
    {% else %}
        <div class=\"post-comment\">
            <p>{{ 'post.no_comments'|trans }}</p>
        </div>
    {% endfor %}
{% endblock %}

{% block sidebar %}
    {% if is_granted('edit', post) %}
        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"{{ path('admin_post_edit', { id: post.id }) }}\">
                <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit_post'|trans }}
            </a>
        </div>
    {% endif %}

    {# the parent() function includes the contents defined by the parent template
      ('base.html.twig') for this block ('sidebar'). This is a very convenient way
      to share common contents in different templates #}
    {{ parent() }}

    {{ show_source_code(_self) }}
    {{ include('blog/_rss.html.twig') }}
{% endblock %}
", "blog/post_show.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/blog/post_show.html.twig");
    }
}
