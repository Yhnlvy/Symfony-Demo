<?php

/* blog/_delete_post_confirmation.html.twig */
class __TwigTemplate_75a3796b2a9a3319202b4a8bd62dd406779a0b0084c3f9f172092ea6abb0aeca extends Twig_Template
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
        $__internal_2a7e5ee9e0569efe84fa9dfe50347e2c20016ea5ac13f991705a4bfa46bc4b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7e5ee9e0569efe84fa9dfe50347e2c20016ea5ac13f991705a4bfa46bc4b52->enter($__internal_2a7e5ee9e0569efe84fa9dfe50347e2c20016ea5ac13f991705a4bfa46bc4b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_delete_post_confirmation.html.twig"));

        $__internal_e943fc8949a25ec9f4b45feee7e363dad3b7eb23775ed75aa11f09a2fcfb543f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e943fc8949a25ec9f4b45feee7e363dad3b7eb23775ed75aa11f09a2fcfb543f->enter($__internal_e943fc8949a25ec9f4b45feee7e363dad3b7eb23775ed75aa11f09a2fcfb543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_delete_post_confirmation.html.twig"));

        // line 2
        echo "<div class=\"modal fade\" id=\"confirmationModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_post_modal.title"), "html", null, true);
        echo "</h4>
                <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_post_modal.body"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" id=\"btnNo\" data-dismiss=\"modal\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.cancel"), "html", null, true);
        echo "
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"btnYes\" data-dismiss=\"modal\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.delete_post"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_2a7e5ee9e0569efe84fa9dfe50347e2c20016ea5ac13f991705a4bfa46bc4b52->leave($__internal_2a7e5ee9e0569efe84fa9dfe50347e2c20016ea5ac13f991705a4bfa46bc4b52_prof);

        
        $__internal_e943fc8949a25ec9f4b45feee7e363dad3b7eb23775ed75aa11f09a2fcfb543f->leave($__internal_e943fc8949a25ec9f4b45feee7e363dad3b7eb23775ed75aa11f09a2fcfb543f_prof);

    }

    public function getTemplateName()
    {
        return "blog/_delete_post_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  42 => 11,  35 => 7,  31 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Bootstrap modal, see http://getbootstrap.com/javascript/#modals #}
<div class=\"modal fade\" id=\"confirmationModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>{{ 'delete_post_modal.title'|trans }}</h4>
                <p>{{ 'delete_post_modal.body'|trans }}</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" id=\"btnNo\" data-dismiss=\"modal\">
                    {{ 'label.cancel'|trans }}
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"btnYes\" data-dismiss=\"modal\">
                    {{ 'label.delete_post'|trans }}
                </button>
            </div>
        </div>
    </div>
</div>
", "blog/_delete_post_confirmation.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/blog/_delete_post_confirmation.html.twig");
    }
}
