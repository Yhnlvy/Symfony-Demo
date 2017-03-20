<?php

/* form/fields.html.twig */
class __TwigTemplate_6e91f1bb61273cc6ff75a9a8408a3c57ebee8a5417eb07f6eeed68dd5de5a428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
            'tags_input_widget' => array($this, 'block_tags_input_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d86cc1a1d11564a64bcd980607e9e125e6dba2a76dea1a3f34bb598dc1bb8d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86cc1a1d11564a64bcd980607e9e125e6dba2a76dea1a3f34bb598dc1bb8d68->enter($__internal_d86cc1a1d11564a64bcd980607e9e125e6dba2a76dea1a3f34bb598dc1bb8d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        $__internal_c5eb0651ed444dec813b9ea02fb933324186f11b518666bf01b005e102e9693e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5eb0651ed444dec813b9ea02fb933324186f11b518666bf01b005e102e9693e->enter($__internal_c5eb0651ed444dec813b9ea02fb933324186f11b518666bf01b005e102e9693e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('tags_input_widget', $context, $blocks);
        
        $__internal_d86cc1a1d11564a64bcd980607e9e125e6dba2a76dea1a3f34bb598dc1bb8d68->leave($__internal_d86cc1a1d11564a64bcd980607e9e125e6dba2a76dea1a3f34bb598dc1bb8d68_prof);

        
        $__internal_c5eb0651ed444dec813b9ea02fb933324186f11b518666bf01b005e102e9693e->leave($__internal_c5eb0651ed444dec813b9ea02fb933324186f11b518666bf01b005e102e9693e_prof);

    }

    // line 10
    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_1d71b1dcfdc94d77f37aef3683156ce7cd642b17201155d79cd8493ab0009b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d71b1dcfdc94d77f37aef3683156ce7cd642b17201155d79cd8493ab0009b3c->enter($__internal_1d71b1dcfdc94d77f37aef3683156ce7cd642b17201155d79cd8493ab0009b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        $__internal_8ed8d52492e753b2038673e372384fbaecd0e839586332af6b8346a2efbada0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed8d52492e753b2038673e372384fbaecd0e839586332af6b8346a2efbada0a->enter($__internal_8ed8d52492e753b2038673e372384fbaecd0e839586332af6b8346a2efbada0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    <div class=\"input-group date\" data-toggle=\"datetimepicker\">
        ";
        // line 12
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
        <span class=\"input-group-addon\">
            <span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>
        </span>
    </div>
";
        
        $__internal_8ed8d52492e753b2038673e372384fbaecd0e839586332af6b8346a2efbada0a->leave($__internal_8ed8d52492e753b2038673e372384fbaecd0e839586332af6b8346a2efbada0a_prof);

        
        $__internal_1d71b1dcfdc94d77f37aef3683156ce7cd642b17201155d79cd8493ab0009b3c->leave($__internal_1d71b1dcfdc94d77f37aef3683156ce7cd642b17201155d79cd8493ab0009b3c_prof);

    }

    // line 19
    public function block_tags_input_widget($context, array $blocks = array())
    {
        $__internal_e4f4353f8cfb3bd79736674f89adeced97743ffc61aa529b939ea78cb154f70f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f4353f8cfb3bd79736674f89adeced97743ffc61aa529b939ea78cb154f70f->enter($__internal_e4f4353f8cfb3bd79736674f89adeced97743ffc61aa529b939ea78cb154f70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags_input_widget"));

        $__internal_8c2a64eacae1f457aa17564cd39e9e24eafc09e917de6ac40c110ce1ca95b16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2a64eacae1f457aa17564cd39e9e24eafc09e917de6ac40c110ce1ca95b16b->enter($__internal_8c2a64eacae1f457aa17564cd39e9e24eafc09e917de6ac40c110ce1ca95b16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags_input_widget"));

        // line 20
        echo "    <div class=\"input-group\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("data-toggle" => "tagsinput", "data-tags" => twig_jsonencode_filter((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags"))))));
        echo "
        <span class=\"input-group-addon\">
            <span class=\"fa fa-tags\" aria-hidden=\"true\"></span>
        </span>
    </div>
";
        
        $__internal_8c2a64eacae1f457aa17564cd39e9e24eafc09e917de6ac40c110ce1ca95b16b->leave($__internal_8c2a64eacae1f457aa17564cd39e9e24eafc09e917de6ac40c110ce1ca95b16b_prof);

        
        $__internal_e4f4353f8cfb3bd79736674f89adeced97743ffc61aa529b939ea78cb154f70f->leave($__internal_e4f4353f8cfb3bd79736674f89adeced97743ffc61aa529b939ea78cb154f70f_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  82 => 20,  73 => 19,  57 => 12,  54 => 11,  45 => 10,  35 => 19,  32 => 18,  30 => 10,  27 => 9,);
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
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    <div class=\"input-group date\" data-toggle=\"datetimepicker\">
        {{ block('datetime_widget') }}
        <span class=\"input-group-addon\">
            <span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>
        </span>
    </div>
{% endblock %}

{% block tags_input_widget %}
    <div class=\"input-group\">
        {{ form_widget(form, {'attr': {'data-toggle': 'tagsinput', 'data-tags': tags|json_encode}}) }}
        <span class=\"input-group-addon\">
            <span class=\"fa fa-tags\" aria-hidden=\"true\"></span>
        </span>
    </div>
{% endblock %}
", "form/fields.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/form/fields.html.twig");
    }
}
