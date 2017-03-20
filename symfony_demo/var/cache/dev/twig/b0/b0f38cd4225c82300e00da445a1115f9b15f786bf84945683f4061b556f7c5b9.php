<?php

/* blog/_comment_form.html.twig */
class __TwigTemplate_d41db1d77e9871cbe9ad5ebd82560615d59b0736371a9c237c2d0b5cd2dfcb50 extends Twig_Template
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
        $__internal_76ab742f1fea0c00aeb4a96f794361f8181e07ce5edd8d29c412ef35b24eebba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ab742f1fea0c00aeb4a96f794361f8181e07ce5edd8d29c412ef35b24eebba->enter($__internal_76ab742f1fea0c00aeb4a96f794361f8181e07ce5edd8d29c412ef35b24eebba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_comment_form.html.twig"));

        $__internal_66af4452674956e36126eabbfb142a9e83385f04266d98607bbfd70c2f25c81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66af4452674956e36126eabbfb142a9e83385f04266d98607bbfd70c2f25c81a->enter($__internal_66af4452674956e36126eabbfb142a9e83385f04266d98607bbfd70c2f25c81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_comment_form.html.twig"));

        // line 8
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_new", array("postSlug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "slug", array())))));
        echo "
    ";
        // line 15
        echo "
    <fieldset>
        <legend>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.add_comment"), "html", null, true);
        echo "</legend>

        ";
        // line 20
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group ";
        // line 22
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), "vars", array()), "valid", array())) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "hidden"), "label" => "label.content"));
        echo "

            ";
        // line 26
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "

            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("rows" => 10)));
        echo "
        </div>

        <div class=\"form-group\">
            <button class=\"btn btn-primary pull-right\" type=\"submit\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.publish_comment"), "html", null, true);
        echo "</button>
        </div>
    </fieldset>
";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_76ab742f1fea0c00aeb4a96f794361f8181e07ce5edd8d29c412ef35b24eebba->leave($__internal_76ab742f1fea0c00aeb4a96f794361f8181e07ce5edd8d29c412ef35b24eebba_prof);

        
        $__internal_66af4452674956e36126eabbfb142a9e83385f04266d98607bbfd70c2f25c81a->leave($__internal_66af4452674956e36126eabbfb142a9e83385f04266d98607bbfd70c2f25c81a_prof);

    }

    public function getTemplateName()
    {
        return "blog/_comment_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 35,  71 => 32,  64 => 28,  58 => 26,  53 => 23,  47 => 22,  41 => 20,  36 => 17,  32 => 15,  28 => 9,  25 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
    By default, forms enable client-side validation. This means that you can't
    test the server-side validation errors from the browser. To temporarily
    disable this validation, add the 'novalidate' attribute:

    {{ form_start(form, { method: ..., action: ..., attr: { novalidate: 'novalidate' } }) }}
#}

{{ form_start(form, { method: 'POST', action: path('comment_new', { 'postSlug': post.slug }) }) }}
    {#  instead of displaying form fields one by one, you can also display them
        all with their default options and styles just by calling to this function:

        {{ form_widget(form) }}
    #}

    <fieldset>
        <legend>{{ 'title.add_comment'|trans }}</legend>

        {# Render any global form error (e.g. when a constraint on a public getter method failed) #}
        {{ form_errors(form) }}

        <div class=\"form-group {% if not form.content.vars.valid %}has-error{% endif %}\">
            {{ form_label(form.content, 'label.content', { label_attr: { class: 'hidden' }}) }}

            {# Render any errors for the \"content\" field (e.g. when a class property constraint failed) #}
            {{ form_errors(form.content) }}

            {{ form_widget(form.content, { attr: { rows: 10 } }) }}
        </div>

        <div class=\"form-group\">
            <button class=\"btn btn-primary pull-right\" type=\"submit\">{{ 'action.publish_comment'|trans }}</button>
        </div>
    </fieldset>
{{ form_end(form) }}
", "blog/_comment_form.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/blog/_comment_form.html.twig");
    }
}
