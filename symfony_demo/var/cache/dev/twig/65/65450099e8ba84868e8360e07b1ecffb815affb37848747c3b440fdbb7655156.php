<?php

/* admin/blog/_form.html.twig */
class __TwigTemplate_75e10db10a6a6b5bfc2299d522e652fd59cf07c3110c8fc9eb786b374b12fe3b extends Twig_Template
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
        $__internal_1704936846bb33134cacfb7b9eca07266aad33014b21d0f57d5152337fe18c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1704936846bb33134cacfb7b9eca07266aad33014b21d0f57d5152337fe18c45->enter($__internal_1704936846bb33134cacfb7b9eca07266aad33014b21d0f57d5152337fe18c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/_form.html.twig"));

        $__internal_5ce4dfa89849303d494463476963067f5da0187b97f72976ea22cd65369b4902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce4dfa89849303d494463476963067f5da0187b97f72976ea22cd65369b4902->enter($__internal_5ce4dfa89849303d494463476963067f5da0187b97f72976ea22cd65369b4902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/_form.html.twig"));

        // line 8
        echo "
";
        // line 9
        if (((array_key_exists("show_confirmation", $context)) ? (_twig_default_filter((isset($context["show_confirmation"]) ? $context["show_confirmation"] : $this->getContext($context, "show_confirmation")), false)) : (false))) {
            // line 10
            echo "    ";
            $context["attr"] = array("data-confirmation" => "true");
            // line 11
            echo "    ";
            echo twig_include($this->env, $context, "blog/_delete_post_confirmation.html.twig");
            echo "
";
        }
        // line 13
        echo "
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array())) : (array()))));
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) ? $context["button_label"] : $this->getContext($context, "button_label")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.create_post"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.create_post"))), "html", null, true);
        echo "\"
           class=\"";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("button_css", $context)) ? (_twig_default_filter((isset($context["button_css"]) ? $context["button_css"] : $this->getContext($context, "button_css")), "btn btn-primary")) : ("btn btn-primary")), "html", null, true);
        echo "\" />

    ";
        // line 20
        if (((array_key_exists("include_back_to_home_link", $context)) ? (_twig_default_filter((isset($context["include_back_to_home_link"]) ? $context["include_back_to_home_link"] : $this->getContext($context, "include_back_to_home_link")), false)) : (false))) {
            // line 21
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
            echo "\" class=\"btn btn-link\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.back_to_list"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_1704936846bb33134cacfb7b9eca07266aad33014b21d0f57d5152337fe18c45->leave($__internal_1704936846bb33134cacfb7b9eca07266aad33014b21d0f57d5152337fe18c45_prof);

        
        $__internal_5ce4dfa89849303d494463476963067f5da0187b97f72976ea22cd65369b4902->leave($__internal_5ce4dfa89849303d494463476963067f5da0187b97f72976ea22cd65369b4902_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  67 => 22,  62 => 21,  60 => 20,  55 => 18,  51 => 17,  46 => 15,  42 => 14,  39 => 13,  33 => 11,  30 => 10,  28 => 9,  25 => 8,);
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

    {{ form_start(form, { attr: { novalidate: 'novalidate' } }) }}
#}

{% if show_confirmation|default(false) %}
    {% set attr = {'data-confirmation': 'true'} %}
    {{ include('blog/_delete_post_confirmation.html.twig') }}
{% endif %}

{{ form_start(form, { attr: attr|default({}) }) }}
    {{ form_widget(form) }}

    <input type=\"submit\" value=\"{{ button_label|default('label.create_post'|trans) }}\"
           class=\"{{ button_css|default(\"btn btn-primary\") }}\" />

    {% if include_back_to_home_link|default(false) %}
        <a href=\"{{ path('admin_post_index') }}\" class=\"btn btn-link\">
            {{ 'action.back_to_list'|trans }}
        </a>
    {% endif %}
{{ form_end(form) }}
", "admin/blog/_form.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/admin/blog/_form.html.twig");
    }
}
