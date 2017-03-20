<?php

/* blog/_rss.html.twig */
class __TwigTemplate_3cbabe78c9fb2e2734c83f8fd7db16bb9de894b4d5df640d404f4436d0f86cb2 extends Twig_Template
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
        $__internal_fa72d49d1684e5493ab89eca7e12f4ba7fcde160d9d904535f36d9fed884d6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa72d49d1684e5493ab89eca7e12f4ba7fcde160d9d904535f36d9fed884d6e6->enter($__internal_fa72d49d1684e5493ab89eca7e12f4ba7fcde160d9d904535f36d9fed884d6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_rss.html.twig"));

        $__internal_7d1effe1953f20eabe632737e2a5f7c02beed7748ea988e301ba9cda8435cfdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1effe1953f20eabe632737e2a5f7c02beed7748ea988e301ba9cda8435cfdd->enter($__internal_7d1effe1953f20eabe632737e2a5f7c02beed7748ea988e301ba9cda8435cfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_rss.html.twig"));

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
        
        $__internal_fa72d49d1684e5493ab89eca7e12f4ba7fcde160d9d904535f36d9fed884d6e6->leave($__internal_fa72d49d1684e5493ab89eca7e12f4ba7fcde160d9d904535f36d9fed884d6e6_prof);

        
        $__internal_7d1effe1953f20eabe632737e2a5f7c02beed7748ea988e301ba9cda8435cfdd->leave($__internal_7d1effe1953f20eabe632737e2a5f7c02beed7748ea988e301ba9cda8435cfdd_prof);

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
", "blog/_rss.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/blog/_rss.html.twig");
    }
}
