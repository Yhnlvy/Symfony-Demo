<?php

/* blog/_post_tags.html.twig */
class __TwigTemplate_a3fd166b299b02b08935d7ab4a6b326f43b2746c739cd9912f9e25d70aa18141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a3b0cafaaba7b8fde482aca7e6637a9507cf3dd96d3d160882b9cd9d08b88e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3b0cafaaba7b8fde482aca7e6637a9507cf3dd96d3d160882b9cd9d08b88e4->enter($__internal_5a3b0cafaaba7b8fde482aca7e6637a9507cf3dd96d3d160882b9cd9d08b88e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_post_tags.html.twig"));

        $__internal_75e5fd400bd647e9ae1acc6a0b9f59d7b03034c87acb0233f8cbfddc4ddeda68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e5fd400bd647e9ae1acc6a0b9f59d7b03034c87acb0233f8cbfddc4ddeda68->enter($__internal_75e5fd400bd647e9ae1acc6a0b9f59d7b03034c87acb0233f8cbfddc4ddeda68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_post_tags.html.twig"));

        // line 1
        if ( !$this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags", array()), "empty", array())) {
            // line 2
            echo "    <p class=\"post-tags\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 4
                echo "            <span class=\"label label-default\">
                <i class=\"fa fa-tag\"></i> ";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "
            </span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </p>
";
        }
        // line 10
        echo "
";
        
        $__internal_5a3b0cafaaba7b8fde482aca7e6637a9507cf3dd96d3d160882b9cd9d08b88e4->leave($__internal_5a3b0cafaaba7b8fde482aca7e6637a9507cf3dd96d3d160882b9cd9d08b88e4_prof);

        
        $__internal_75e5fd400bd647e9ae1acc6a0b9f59d7b03034c87acb0233f8cbfddc4ddeda68->leave($__internal_75e5fd400bd647e9ae1acc6a0b9f59d7b03034c87acb0233f8cbfddc4ddeda68_prof);

    }

    public function getTemplateName()
    {
        return "blog/_post_tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  46 => 8,  37 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not post.tags.empty %}
    <p class=\"post-tags\">
        {% for tag in post.tags %}
            <span class=\"label label-default\">
                <i class=\"fa fa-tag\"></i> {{ tag.name }}
            </span>
        {% endfor %}
    </p>
{% endif %}

", "blog/_post_tags.html.twig", "/var/www/myapp/current/symfony_demo/app/Resources/views/blog/_post_tags.html.twig");
    }
}
