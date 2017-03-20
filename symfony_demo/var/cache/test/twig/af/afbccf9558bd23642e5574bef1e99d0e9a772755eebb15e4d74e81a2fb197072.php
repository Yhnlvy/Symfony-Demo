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
        $__internal_01458ff3f6d578d523a572abbd9b2ee9b65b4baeb2d98101e119819a96b378d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01458ff3f6d578d523a572abbd9b2ee9b65b4baeb2d98101e119819a96b378d9->enter($__internal_01458ff3f6d578d523a572abbd9b2ee9b65b4baeb2d98101e119819a96b378d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c45ba3d94c734ac7e7e91ab1078a185a5444975b4e68856b7c776527e93c6b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45ba3d94c734ac7e7e91ab1078a185a5444975b4e68856b7c776527e93c6b5e->enter($__internal_c45ba3d94c734ac7e7e91ab1078a185a5444975b4e68856b7c776527e93c6b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01458ff3f6d578d523a572abbd9b2ee9b65b4baeb2d98101e119819a96b378d9->leave($__internal_01458ff3f6d578d523a572abbd9b2ee9b65b4baeb2d98101e119819a96b378d9_prof);

        
        $__internal_c45ba3d94c734ac7e7e91ab1078a185a5444975b4e68856b7c776527e93c6b5e->leave($__internal_c45ba3d94c734ac7e7e91ab1078a185a5444975b4e68856b7c776527e93c6b5e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ed3b0089383df9678548441a7f8d3acc8afdad09b913c6e261ececa79d195de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed3b0089383df9678548441a7f8d3acc8afdad09b913c6e261ececa79d195de->enter($__internal_1ed3b0089383df9678548441a7f8d3acc8afdad09b913c6e261ececa79d195de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5af3ec306aafc853fb510520e4189255c1f8fe03b1fcf78d092939d6367b4835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af3ec306aafc853fb510520e4189255c1f8fe03b1fcf78d092939d6367b4835->enter($__internal_5af3ec306aafc853fb510520e4189255c1f8fe03b1fcf78d092939d6367b4835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5af3ec306aafc853fb510520e4189255c1f8fe03b1fcf78d092939d6367b4835->leave($__internal_5af3ec306aafc853fb510520e4189255c1f8fe03b1fcf78d092939d6367b4835_prof);

        
        $__internal_1ed3b0089383df9678548441a7f8d3acc8afdad09b913c6e261ececa79d195de->leave($__internal_1ed3b0089383df9678548441a7f8d3acc8afdad09b913c6e261ececa79d195de_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_49c4d9c798b5c6b467717b123e947fbb4bdc574f2debb6294dba32a3975963e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c4d9c798b5c6b467717b123e947fbb4bdc574f2debb6294dba32a3975963e3->enter($__internal_49c4d9c798b5c6b467717b123e947fbb4bdc574f2debb6294dba32a3975963e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0be51b6a384db3454aad6e9cc7b19bf1638e80fb70c853421a7016beb24c2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0be51b6a384db3454aad6e9cc7b19bf1638e80fb70c853421a7016beb24c2d0->enter($__internal_a0be51b6a384db3454aad6e9cc7b19bf1638e80fb70c853421a7016beb24c2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0be51b6a384db3454aad6e9cc7b19bf1638e80fb70c853421a7016beb24c2d0->leave($__internal_a0be51b6a384db3454aad6e9cc7b19bf1638e80fb70c853421a7016beb24c2d0_prof);

        
        $__internal_49c4d9c798b5c6b467717b123e947fbb4bdc574f2debb6294dba32a3975963e3->leave($__internal_49c4d9c798b5c6b467717b123e947fbb4bdc574f2debb6294dba32a3975963e3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_81f09365358832cfd6561a490f2837f0b41a9d93ede8ae47b651486b043bbd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f09365358832cfd6561a490f2837f0b41a9d93ede8ae47b651486b043bbd8b->enter($__internal_81f09365358832cfd6561a490f2837f0b41a9d93ede8ae47b651486b043bbd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d24e245aebc14629aa31b182af6e57c92eb29631fd4cab4e5a81d581177db8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24e245aebc14629aa31b182af6e57c92eb29631fd4cab4e5a81d581177db8ee->enter($__internal_d24e245aebc14629aa31b182af6e57c92eb29631fd4cab4e5a81d581177db8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d24e245aebc14629aa31b182af6e57c92eb29631fd4cab4e5a81d581177db8ee->leave($__internal_d24e245aebc14629aa31b182af6e57c92eb29631fd4cab4e5a81d581177db8ee_prof);

        
        $__internal_81f09365358832cfd6561a490f2837f0b41a9d93ede8ae47b651486b043bbd8b->leave($__internal_81f09365358832cfd6561a490f2837f0b41a9d93ede8ae47b651486b043bbd8b_prof);

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
