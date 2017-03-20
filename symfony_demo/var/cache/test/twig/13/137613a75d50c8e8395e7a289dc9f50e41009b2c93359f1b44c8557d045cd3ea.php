<?php

/* admin/blog/_delete_form.html.twig */
class __TwigTemplate_0c5796d54fe1d7cfe7ebc330ebe856f73cdee29386a6f46fdea064f7b755d5c7 extends Twig_Template
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
        $__internal_d285842362f33dd43306028bbdb5b266d44fe3464ca2bae39e3e3087507a9415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d285842362f33dd43306028bbdb5b266d44fe3464ca2bae39e3e3087507a9415->enter($__internal_d285842362f33dd43306028bbdb5b266d44fe3464ca2bae39e3e3087507a9415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/_delete_form.html.twig"));

        $__internal_c1a6847b434004969c430c72d5e5192149c931434e630a53366162c24443f3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a6847b434004969c430c72d5e5192149c931434e630a53366162c24443f3d7->enter($__internal_c1a6847b434004969c430c72d5e5192149c931434e630a53366162c24443f3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/_delete_form.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "blog/_delete_post_confirmation.html.twig");
        echo "
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_post_delete", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" data-confirmation=\"true\" id=\"delete-form\">
    <input type=\"hidden\" name=\"token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("delete"), "html", null, true);
        echo "\" />
    <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.delete_post"), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-danger\" />
</form>
";
        
        $__internal_d285842362f33dd43306028bbdb5b266d44fe3464ca2bae39e3e3087507a9415->leave($__internal_d285842362f33dd43306028bbdb5b266d44fe3464ca2bae39e3e3087507a9415_prof);

        
        $__internal_c1a6847b434004969c430c72d5e5192149c931434e630a53366162c24443f3d7->leave($__internal_c1a6847b434004969c430c72d5e5192149c931434e630a53366162c24443f3d7_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('blog/_delete_post_confirmation.html.twig') }}
<form action=\"{{ url('admin_post_delete', { id: post.id }) }}\" method=\"post\" data-confirmation=\"true\" id=\"delete-form\">
    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete') }}\" />
    <input type=\"submit\" value=\"{{ 'action.delete_post'|trans }}\" class=\"btn btn-lg btn-block btn-danger\" />
</form>
", "admin/blog/_delete_form.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/admin/blog/_delete_form.html.twig");
    }
}
