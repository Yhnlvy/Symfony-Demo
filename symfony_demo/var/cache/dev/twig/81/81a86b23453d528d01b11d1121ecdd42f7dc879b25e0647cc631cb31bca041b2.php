<?php

/* blog/about.html.twig */
class __TwigTemplate_e8d332faf660d04efaa0460fd98851901d0c48029574e4535e7e9b2c6b4bad66 extends Twig_Template
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
        $__internal_acd205d14cbeab172a616dfe3470b414b13d93c559f18c80cb347ccc3ddec9aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd205d14cbeab172a616dfe3470b414b13d93c559f18c80cb347ccc3ddec9aa->enter($__internal_acd205d14cbeab172a616dfe3470b414b13d93c559f18c80cb347ccc3ddec9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        $__internal_89245deda0be8037c9c67fd9a1e15f4c4cc95df078b420d1ceb21d00bd3e026f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89245deda0be8037c9c67fd9a1e15f4c4cc95df078b420d1ceb21d00bd3e026f->enter($__internal_89245deda0be8037c9c67fd9a1e15f4c4cc95df078b420d1ceb21d00bd3e026f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        // line 1
        echo "<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.app_description");
        echo "
        </p>
        <p>
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.more_information");
        echo "
        </p>
    </div>
</div>

";
        // line 15
        echo "<!-- Fragment rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
";
        
        $__internal_acd205d14cbeab172a616dfe3470b414b13d93c559f18c80cb347ccc3ddec9aa->leave($__internal_acd205d14cbeab172a616dfe3470b414b13d93c559f18c80cb347ccc3ddec9aa_prof);

        
        $__internal_89245deda0be8037c9c67fd9a1e15f4c4cc95df078b420d1ceb21d00bd3e026f->leave($__internal_89245deda0be8037c9c67fd9a1e15f4c4cc95df078b420d1ceb21d00bd3e026f_prof);

    }

    public function getTemplateName()
    {
        return "blog/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            {{ 'help.app_description'|trans|raw }}
        </p>
        <p>
            {{ 'help.more_information'|trans|raw }}
        </p>
    </div>
</div>

{# it's not mandatory to set the timezone in localizeddate(). This is done to
   avoid errors when the 'intl' PHP extension is not available and the application
   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
<!-- Fragment rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->
", "blog/about.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/blog/about.html.twig");
    }
}
