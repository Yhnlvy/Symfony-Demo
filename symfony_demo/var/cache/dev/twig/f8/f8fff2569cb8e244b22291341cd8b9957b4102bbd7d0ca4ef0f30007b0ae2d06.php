<?php

/* blog/_rss.html.twig */
class __TwigTemplate_58bb92a76c781718200d86e3b950abcde1e146a1f628fb2f77666fa2544b6d27 extends Twig_Template
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
        $__internal_abe3e5ebe3ce458013000be10b372d25b47a84643d6d1e98b57324ea98188ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abe3e5ebe3ce458013000be10b372d25b47a84643d6d1e98b57324ea98188ea8->enter($__internal_abe3e5ebe3ce458013000be10b372d25b47a84643d6d1e98b57324ea98188ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_rss.html.twig"));

        $__internal_1d331d206b9df7fc2af1c58d759bca1d8648202c8a39be52350851e6a175a191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d331d206b9df7fc2af1c58d759bca1d8648202c8a39be52350851e6a175a191->enter($__internal_1d331d206b9df7fc2af1c58d759bca1d8648202c8a39be52350851e6a175a191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_rss.html.twig"));

        // line 1
        echo "<div class=\"section rss\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        <i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.rss"), "html", null, true);
        echo "
    </a>
</div>
";
        
        $__internal_abe3e5ebe3ce458013000be10b372d25b47a84643d6d1e98b57324ea98188ea8->leave($__internal_abe3e5ebe3ce458013000be10b372d25b47a84643d6d1e98b57324ea98188ea8_prof);

        
        $__internal_1d331d206b9df7fc2af1c58d759bca1d8648202c8a39be52350851e6a175a191->leave($__internal_1d331d206b9df7fc2af1c58d759bca1d8648202c8a39be52350851e6a175a191_prof);

    }

    public function getTemplateName()
    {
        return "blog/_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section rss\">
    <a href=\"{{ path('blog_rss') }}\">
        <i class=\"fa fa-rss\" aria-hidden=\"true\"></i> {{ 'menu.rss'|trans }}
    </a>
</div>
", "blog/_rss.html.twig", "/var/www/myapp/current/symfony_demo/app/Resources/views/blog/_rss.html.twig");
    }
}
