<?php

/* default/homepage.html.twig */
class __TwigTemplate_1af1f647a53f667b04f4c0f238d12900da80b01a1326f753a4770d8f420b060a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d868088fccde9eb492fd140b7203452fecebc4d89a9b8119613b0dd2e150d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d868088fccde9eb492fd140b7203452fecebc4d89a9b8119613b0dd2e150d7c->enter($__internal_1d868088fccde9eb492fd140b7203452fecebc4d89a9b8119613b0dd2e150d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $__internal_ae0bd49599102becefad1217fe9b989166fea1557255381cb1ab6769d813d7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0bd49599102becefad1217fe9b989166fea1557255381cb1ab6769d813d7f0->enter($__internal_ae0bd49599102becefad1217fe9b989166fea1557255381cb1ab6769d813d7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d868088fccde9eb492fd140b7203452fecebc4d89a9b8119613b0dd2e150d7c->leave($__internal_1d868088fccde9eb492fd140b7203452fecebc4d89a9b8119613b0dd2e150d7c_prof);

        
        $__internal_ae0bd49599102becefad1217fe9b989166fea1557255381cb1ab6769d813d7f0->leave($__internal_ae0bd49599102becefad1217fe9b989166fea1557255381cb1ab6769d813d7f0_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_c80ba232b668e3be426e63bd6d32dddd1d450cb6c2e901ce8017226459355612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80ba232b668e3be426e63bd6d32dddd1d450cb6c2e901ce8017226459355612->enter($__internal_c80ba232b668e3be426e63bd6d32dddd1d450cb6c2e901ce8017226459355612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_4d459fafa3fc03becb3140945a16a55843ad2f6c21621e9a919fe183f4b6908a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d459fafa3fc03becb3140945a16a55843ad2f6c21621e9a919fe183f4b6908a->enter($__internal_4d459fafa3fc03becb3140945a16a55843ad2f6c21621e9a919fe183f4b6908a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_4d459fafa3fc03becb3140945a16a55843ad2f6c21621e9a919fe183f4b6908a->leave($__internal_4d459fafa3fc03becb3140945a16a55843ad2f6c21621e9a919fe183f4b6908a_prof);

        
        $__internal_c80ba232b668e3be426e63bd6d32dddd1d450cb6c2e901ce8017226459355612->leave($__internal_c80ba232b668e3be426e63bd6d32dddd1d450cb6c2e901ce8017226459355612_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_36000645250fb482dc84e6f0287606dcae5c015f55d912d21cde88756f09c3d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36000645250fb482dc84e6f0287606dcae5c015f55d912d21cde88756f09c3d9->enter($__internal_36000645250fb482dc84e6f0287606dcae5c015f55d912d21cde88756f09c3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3334388d0cfd7614a04134c5a641e20810eacd9a590c82570b9b271a9c236241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3334388d0cfd7614a04134c5a641e20810eacd9a590c82570b9b271a9c236241->enter($__internal_3334388d0cfd7614a04134c5a641e20810eacd9a590c82570b9b271a9c236241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_3334388d0cfd7614a04134c5a641e20810eacd9a590c82570b9b271a9c236241->leave($__internal_3334388d0cfd7614a04134c5a641e20810eacd9a590c82570b9b271a9c236241_prof);

        
        $__internal_36000645250fb482dc84e6f0287606dcae5c015f55d912d21cde88756f09c3d9->leave($__internal_36000645250fb482dc84e6f0287606dcae5c015f55d912d21cde88756f09c3d9_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2a387901a5845ef1535a097f914a9e41dd252037a4a0858cead5c79c4f13b432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a387901a5845ef1535a097f914a9e41dd252037a4a0858cead5c79c4f13b432->enter($__internal_2a387901a5845ef1535a097f914a9e41dd252037a4a0858cead5c79c4f13b432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_67faafd21ab8703e4507912d736ea20b6c7c74d4b612085b266fff6516d60a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67faafd21ab8703e4507912d736ea20b6c7c74d4b612085b266fff6516d60a3b->enter($__internal_67faafd21ab8703e4507912d736ea20b6c7c74d4b612085b266fff6516d60a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_67faafd21ab8703e4507912d736ea20b6c7c74d4b612085b266fff6516d60a3b->leave($__internal_67faafd21ab8703e4507912d736ea20b6c7c74d4b612085b266fff6516d60a3b_prof);

        
        $__internal_2a387901a5845ef1535a097f914a9e41dd252037a4a0858cead5c79c4f13b432->leave($__internal_2a387901a5845ef1535a097f914a9e41dd252037a4a0858cead5c79c4f13b432_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_86dd3b86bfaadd9bfd480fb0a18691577f2d31ba7cc98cc827e8fad30773e1c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86dd3b86bfaadd9bfd480fb0a18691577f2d31ba7cc98cc827e8fad30773e1c1->enter($__internal_86dd3b86bfaadd9bfd480fb0a18691577f2d31ba7cc98cc827e8fad30773e1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_696b90b60f55619851e4b6d068e0f94e71b95aaf7c4a851faf64480d4198a379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696b90b60f55619851e4b6d068e0f94e71b95aaf7c4a851faf64480d4198a379->enter($__internal_696b90b60f55619851e4b6d068e0f94e71b95aaf7c4a851faf64480d4198a379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_696b90b60f55619851e4b6d068e0f94e71b95aaf7c4a851faf64480d4198a379->leave($__internal_696b90b60f55619851e4b6d068e0f94e71b95aaf7c4a851faf64480d4198a379_prof);

        
        $__internal_86dd3b86bfaadd9bfd480fb0a18691577f2d31ba7cc98cc827e8fad30773e1c1->leave($__internal_86dd3b86bfaadd9bfd480fb0a18691577f2d31ba7cc98cc827e8fad30773e1c1_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 38,  145 => 37,  139 => 34,  127 => 25,  123 => 24,  117 => 21,  107 => 14,  104 => 13,  95 => 12,  78 => 10,  61 => 9,  43 => 3,  11 => 1,);
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

{% block body_id 'homepage' %}

{#
    the homepage is a special page which displays neither a header nor a footer.
    this is done with the 'trick' of defining empty Twig blocks without any content
#}
{% block header %}{% endblock %}
{% block footer %}{% endblock %}

{% block body %}
    <div class=\"page-header\">
        <h1>{{ 'title.homepage'|trans|raw }}</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    {{ 'help.browse_app'|trans|raw }}
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"{{ path('blog_index') }}\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'action.browse_app'|trans }}
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    {{ 'help.browse_admin'|trans|raw }}
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"{{ path('admin_index') }}\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'action.browse_admin'|trans }}
                    </a>
                </p>
            </div>
        </div>
    </div>
{% endblock %}
", "default/homepage.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/default/homepage.html.twig");
    }
}
