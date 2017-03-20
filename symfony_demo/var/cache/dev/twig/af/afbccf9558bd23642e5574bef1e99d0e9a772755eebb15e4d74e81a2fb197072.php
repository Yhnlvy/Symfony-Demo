<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3756c3e88ffa7ffaa892508e5d88f609f67b63ae1c925e49f37e578f5ac55f3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_196a14203283f0f35d74a5066486b7e01ccff9403ea9d619f21411e81c258c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196a14203283f0f35d74a5066486b7e01ccff9403ea9d619f21411e81c258c46->enter($__internal_196a14203283f0f35d74a5066486b7e01ccff9403ea9d619f21411e81c258c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_768465e2e926e1d8cc29239427a0c45e3bb901be28b9e340cb7e7188f80ed259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768465e2e926e1d8cc29239427a0c45e3bb901be28b9e340cb7e7188f80ed259->enter($__internal_768465e2e926e1d8cc29239427a0c45e3bb901be28b9e340cb7e7188f80ed259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_196a14203283f0f35d74a5066486b7e01ccff9403ea9d619f21411e81c258c46->leave($__internal_196a14203283f0f35d74a5066486b7e01ccff9403ea9d619f21411e81c258c46_prof);

        
        $__internal_768465e2e926e1d8cc29239427a0c45e3bb901be28b9e340cb7e7188f80ed259->leave($__internal_768465e2e926e1d8cc29239427a0c45e3bb901be28b9e340cb7e7188f80ed259_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b33ed88d073c057222050a25392aca0ccc02553167f5a8b2e0e75534a2a80a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b33ed88d073c057222050a25392aca0ccc02553167f5a8b2e0e75534a2a80a7->enter($__internal_5b33ed88d073c057222050a25392aca0ccc02553167f5a8b2e0e75534a2a80a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d160899cfe1db0daae06686d9c6c319942f7624d176a436500e7ef66a3864e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d160899cfe1db0daae06686d9c6c319942f7624d176a436500e7ef66a3864e1b->enter($__internal_d160899cfe1db0daae06686d9c6c319942f7624d176a436500e7ef66a3864e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d160899cfe1db0daae06686d9c6c319942f7624d176a436500e7ef66a3864e1b->leave($__internal_d160899cfe1db0daae06686d9c6c319942f7624d176a436500e7ef66a3864e1b_prof);

        
        $__internal_5b33ed88d073c057222050a25392aca0ccc02553167f5a8b2e0e75534a2a80a7->leave($__internal_5b33ed88d073c057222050a25392aca0ccc02553167f5a8b2e0e75534a2a80a7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3efc54cd61eaff9a3da96ee234d259b5be54845df6edb7e52549a5e62553115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3efc54cd61eaff9a3da96ee234d259b5be54845df6edb7e52549a5e62553115->enter($__internal_f3efc54cd61eaff9a3da96ee234d259b5be54845df6edb7e52549a5e62553115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e61c314544e24403715a135183c40b015d0228ab468b7d396aac1076e987f8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61c314544e24403715a135183c40b015d0228ab468b7d396aac1076e987f8fa->enter($__internal_e61c314544e24403715a135183c40b015d0228ab468b7d396aac1076e987f8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e61c314544e24403715a135183c40b015d0228ab468b7d396aac1076e987f8fa->leave($__internal_e61c314544e24403715a135183c40b015d0228ab468b7d396aac1076e987f8fa_prof);

        
        $__internal_f3efc54cd61eaff9a3da96ee234d259b5be54845df6edb7e52549a5e62553115->leave($__internal_f3efc54cd61eaff9a3da96ee234d259b5be54845df6edb7e52549a5e62553115_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7d18c71382891a33d01cf9155234c0d07b4b183d5a6020889b1cd041a49c1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d18c71382891a33d01cf9155234c0d07b4b183d5a6020889b1cd041a49c1d8->enter($__internal_c7d18c71382891a33d01cf9155234c0d07b4b183d5a6020889b1cd041a49c1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d969fe36fdae475db6b487c6565f2ec364a9d2c46047766fdfaa58d1dab3b3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d969fe36fdae475db6b487c6565f2ec364a9d2c46047766fdfaa58d1dab3b3af->enter($__internal_d969fe36fdae475db6b487c6565f2ec364a9d2c46047766fdfaa58d1dab3b3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d969fe36fdae475db6b487c6565f2ec364a9d2c46047766fdfaa58d1dab3b3af->leave($__internal_d969fe36fdae475db6b487c6565f2ec364a9d2c46047766fdfaa58d1dab3b3af_prof);

        
        $__internal_c7d18c71382891a33d01cf9155234c0d07b4b183d5a6020889b1cd041a49c1d8->leave($__internal_c7d18c71382891a33d01cf9155234c0d07b4b183d5a6020889b1cd041a49c1d8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
