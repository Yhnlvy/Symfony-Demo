<?php

/* blog/_post_tags.html.twig */
class __TwigTemplate_2a105854f36f7e6a4601da8e13f7d9fa3c6f4ccbee25402a5b6378a8fa196d6b extends Twig_Template
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
        $__internal_fdf1434bb7bb07d274cce45d1488958780a19832f22c6e43444dbfa0fbf3a9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf1434bb7bb07d274cce45d1488958780a19832f22c6e43444dbfa0fbf3a9f4->enter($__internal_fdf1434bb7bb07d274cce45d1488958780a19832f22c6e43444dbfa0fbf3a9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_post_tags.html.twig"));

        $__internal_15195515320b8352221a66cdcacd0037a4d7754cd23f40f2efc88c2a764eebb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15195515320b8352221a66cdcacd0037a4d7754cd23f40f2efc88c2a764eebb5->enter($__internal_15195515320b8352221a66cdcacd0037a4d7754cd23f40f2efc88c2a764eebb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_post_tags.html.twig"));

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
        
        $__internal_fdf1434bb7bb07d274cce45d1488958780a19832f22c6e43444dbfa0fbf3a9f4->leave($__internal_fdf1434bb7bb07d274cce45d1488958780a19832f22c6e43444dbfa0fbf3a9f4_prof);

        
        $__internal_15195515320b8352221a66cdcacd0037a4d7754cd23f40f2efc88c2a764eebb5->leave($__internal_15195515320b8352221a66cdcacd0037a4d7754cd23f40f2efc88c2a764eebb5_prof);

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

", "blog/_post_tags.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/blog/_post_tags.html.twig");
    }
}
