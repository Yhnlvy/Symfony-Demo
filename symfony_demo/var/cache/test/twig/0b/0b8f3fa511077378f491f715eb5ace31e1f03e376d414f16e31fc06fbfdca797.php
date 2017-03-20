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
        $__internal_b3be8ebbbcb2a1c47f815f6b618c3a5a88b7e44cdbc566cb761720fb2a6000df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3be8ebbbcb2a1c47f815f6b618c3a5a88b7e44cdbc566cb761720fb2a6000df->enter($__internal_b3be8ebbbcb2a1c47f815f6b618c3a5a88b7e44cdbc566cb761720fb2a6000df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        $__internal_fe7b28a893ecaad7627cbef4888078a48155e840bf2467f4cb34cb6930c209da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7b28a893ecaad7627cbef4888078a48155e840bf2467f4cb34cb6930c209da->enter($__internal_fe7b28a893ecaad7627cbef4888078a48155e840bf2467f4cb34cb6930c209da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

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
        
        $__internal_b3be8ebbbcb2a1c47f815f6b618c3a5a88b7e44cdbc566cb761720fb2a6000df->leave($__internal_b3be8ebbbcb2a1c47f815f6b618c3a5a88b7e44cdbc566cb761720fb2a6000df_prof);

        
        $__internal_fe7b28a893ecaad7627cbef4888078a48155e840bf2467f4cb34cb6930c209da->leave($__internal_fe7b28a893ecaad7627cbef4888078a48155e840bf2467f4cb34cb6930c209da_prof);

    }

    // line 10
    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_b1e36c08d84324167b20d5d1996a15026fbfcc9c9cc4a3bb67ad5b41376a73c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e36c08d84324167b20d5d1996a15026fbfcc9c9cc4a3bb67ad5b41376a73c2->enter($__internal_b1e36c08d84324167b20d5d1996a15026fbfcc9c9cc4a3bb67ad5b41376a73c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        $__internal_cd2ecf00d21726ad71bccf7a5142654f0c67813135df232540fc7f15c806e99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2ecf00d21726ad71bccf7a5142654f0c67813135df232540fc7f15c806e99d->enter($__internal_cd2ecf00d21726ad71bccf7a5142654f0c67813135df232540fc7f15c806e99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

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
        
        $__internal_cd2ecf00d21726ad71bccf7a5142654f0c67813135df232540fc7f15c806e99d->leave($__internal_cd2ecf00d21726ad71bccf7a5142654f0c67813135df232540fc7f15c806e99d_prof);

        
        $__internal_b1e36c08d84324167b20d5d1996a15026fbfcc9c9cc4a3bb67ad5b41376a73c2->leave($__internal_b1e36c08d84324167b20d5d1996a15026fbfcc9c9cc4a3bb67ad5b41376a73c2_prof);

    }

    // line 19
    public function block_tags_input_widget($context, array $blocks = array())
    {
        $__internal_8c7b2c9decebcab664b6ef199edd51291589d383ce42b17f7e3873e25970224f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7b2c9decebcab664b6ef199edd51291589d383ce42b17f7e3873e25970224f->enter($__internal_8c7b2c9decebcab664b6ef199edd51291589d383ce42b17f7e3873e25970224f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags_input_widget"));

        $__internal_e0af281bfc5c100ebd5a98728ea7e2bde177b7eff91bca71f5c0d754e438de43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0af281bfc5c100ebd5a98728ea7e2bde177b7eff91bca71f5c0d754e438de43->enter($__internal_e0af281bfc5c100ebd5a98728ea7e2bde177b7eff91bca71f5c0d754e438de43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags_input_widget"));

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
        
        $__internal_e0af281bfc5c100ebd5a98728ea7e2bde177b7eff91bca71f5c0d754e438de43->leave($__internal_e0af281bfc5c100ebd5a98728ea7e2bde177b7eff91bca71f5c0d754e438de43_prof);

        
        $__internal_8c7b2c9decebcab664b6ef199edd51291589d383ce42b17f7e3873e25970224f->leave($__internal_8c7b2c9decebcab664b6ef199edd51291589d383ce42b17f7e3873e25970224f_prof);

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
