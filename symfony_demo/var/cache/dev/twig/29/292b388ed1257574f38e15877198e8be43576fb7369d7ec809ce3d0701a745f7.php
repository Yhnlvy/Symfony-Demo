<?php

/* security/login.html.twig */
class __TwigTemplate_ebdb4bb69f7bd52cd49abb536fff45d386ac896d8aff89c4d874529299412ac1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c133f11a016c88bcf91e56c8316405762299dbb5c5e64934fbab6cd2027af46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c133f11a016c88bcf91e56c8316405762299dbb5c5e64934fbab6cd2027af46->enter($__internal_0c133f11a016c88bcf91e56c8316405762299dbb5c5e64934fbab6cd2027af46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_9cab78889c91365ce8ab489a6dbbc6ecb637d1546daefdf545b405e01b55f059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cab78889c91365ce8ab489a6dbbc6ecb637d1546daefdf545b405e01b55f059->enter($__internal_9cab78889c91365ce8ab489a6dbbc6ecb637d1546daefdf545b405e01b55f059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c133f11a016c88bcf91e56c8316405762299dbb5c5e64934fbab6cd2027af46->leave($__internal_0c133f11a016c88bcf91e56c8316405762299dbb5c5e64934fbab6cd2027af46_prof);

        
        $__internal_9cab78889c91365ce8ab489a6dbbc6ecb637d1546daefdf545b405e01b55f059->leave($__internal_9cab78889c91365ce8ab489a6dbbc6ecb637d1546daefdf545b405e01b55f059_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_362ae47b64c87820d5b4c00332d98d9c382bf8a86b8b634be6a7b16e210bedb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362ae47b64c87820d5b4c00332d98d9c382bf8a86b8b634be6a7b16e210bedb5->enter($__internal_362ae47b64c87820d5b4c00332d98d9c382bf8a86b8b634be6a7b16e210bedb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_f0df4581c85a6ce63c248166827ea370e274e0415896ad462333565d06e53645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0df4581c85a6ce63c248166827ea370e274e0415896ad462333565d06e53645->enter($__internal_f0df4581c85a6ce63c248166827ea370e274e0415896ad462333565d06e53645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_f0df4581c85a6ce63c248166827ea370e274e0415896ad462333565d06e53645->leave($__internal_f0df4581c85a6ce63c248166827ea370e274e0415896ad462333565d06e53645_prof);

        
        $__internal_362ae47b64c87820d5b4c00332d98d9c382bf8a86b8b634be6a7b16e210bedb5->leave($__internal_362ae47b64c87820d5b4c00332d98d9c382bf8a86b8b634be6a7b16e210bedb5_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_4bf01328f67bcee2f7bd3e617a6ec8529e9a0d05be3b09c92a3ee6d6fa88d73d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf01328f67bcee2f7bd3e617a6ec8529e9a0d05be3b09c92a3ee6d6fa88d73d->enter($__internal_4bf01328f67bcee2f7bd3e617a6ec8529e9a0d05be3b09c92a3ee6d6fa88d73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5bfb2a6b80190fabbe4a41a10f5c0e55b7b6df82691e389120e37d28a3a1652c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfb2a6b80190fabbe4a41a10f5c0e55b7b6df82691e389120e37d28a3a1652c->enter($__internal_5bfb2a6b80190fabbe4a41a10f5c0e55b7b6df82691e389120e37d28a3a1652c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 11
        echo "
    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.login"), "html", null, true);
        echo "</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.username"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.password"), "html", null, true);
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.sign_in"), "html", null, true);
        echo "
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                <i class=\"fa fa-long-arrow-left\" aria-hidden=\"true\"></i>
                ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.login_users"), "html", null, true);
        echo "
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.username"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.password"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.role"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> (";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.role_user"), "html", null, true);
        echo ")</td>
                    </tr>
                    <tr>
                        <td>jane_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> (";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.role_admin"), "html", null, true);
        echo ")</td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"label label-success\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("note"), "html", null, true);
        echo "</span>
                        ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.reload_fixtures"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php bin/console doctrine:fixtures:load</code>
                    </p>

                    <p>
                        <span class=\"label label-success\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tip"), "html", null, true);
        echo "</span>
                        ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.add_user"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php bin/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5bfb2a6b80190fabbe4a41a10f5c0e55b7b6df82691e389120e37d28a3a1652c->leave($__internal_5bfb2a6b80190fabbe4a41a10f5c0e55b7b6df82691e389120e37d28a3a1652c_prof);

        
        $__internal_4bf01328f67bcee2f7bd3e617a6ec8529e9a0d05be3b09c92a3ee6d6fa88d73d->leave($__internal_4bf01328f67bcee2f7bd3e617a6ec8529e9a0d05be3b09c92a3ee6d6fa88d73d_prof);

    }

    // line 84
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4d39ffd87ae28db74650946357accb51106e5799e7d43fb5b5786ffd72630bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d39ffd87ae28db74650946357accb51106e5799e7d43fb5b5786ffd72630bf5->enter($__internal_4d39ffd87ae28db74650946357accb51106e5799e7d43fb5b5786ffd72630bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_156580661891fef8180d4a7c512066d70a3628b14358f08bafbcbf778b2df710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156580661891fef8180d4a7c512066d70a3628b14358f08bafbcbf778b2df710->enter($__internal_156580661891fef8180d4a7c512066d70a3628b14358f08bafbcbf778b2df710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 85
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 87
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_156580661891fef8180d4a7c512066d70a3628b14358f08bafbcbf778b2df710->leave($__internal_156580661891fef8180d4a7c512066d70a3628b14358f08bafbcbf778b2df710_prof);

        
        $__internal_4d39ffd87ae28db74650946357accb51106e5799e7d43fb5b5786ffd72630bf5->leave($__internal_4d39ffd87ae28db74650946357accb51106e5799e7d43fb5b5786ffd72630bf5_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e30a243f1f3e3b5273df50386f96f8ca6d1d5d857b637a0f7e0d5ef6e3aa7b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30a243f1f3e3b5273df50386f96f8ca6d1d5d857b637a0f7e0d5ef6e3aa7b87->enter($__internal_e30a243f1f3e3b5273df50386f96f8ca6d1d5d857b637a0f7e0d5ef6e3aa7b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b79629e8b988d137f2b4a671fa6099c5b8701047d9b1ec507c99f81f1500c564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79629e8b988d137f2b4a671fa6099c5b8701047d9b1ec507c99f81f1500c564->enter($__internal_b79629e8b988d137f2b4a671fa6099c5b8701047d9b1ec507c99f81f1500c564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(document).ready(function() {
            var usernameEl = \$('#username');
            var passwordEl = \$('#password');
            // in a real application, hardcoding the user/password would be idiotic
            // but for the demo application it's very convenient to do so
            if (!usernameEl.val() && !passwordEl.val()) {
                usernameEl.val('jane_admin');
                passwordEl.val('kitten');
            }
        });
    </script>
";
        
        $__internal_b79629e8b988d137f2b4a671fa6099c5b8701047d9b1ec507c99f81f1500c564->leave($__internal_b79629e8b988d137f2b4a671fa6099c5b8701047d9b1ec507c99f81f1500c564_prof);

        
        $__internal_e30a243f1f3e3b5273df50386f96f8ca6d1d5d857b637a0f7e0d5ef6e3aa7b87->leave($__internal_e30a243f1f3e3b5273df50386f96f8ca6d1d5d857b637a0f7e0d5ef6e3aa7b87_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 91,  241 => 90,  229 => 87,  223 => 85,  214 => 84,  195 => 74,  191 => 73,  182 => 67,  178 => 66,  167 => 58,  159 => 53,  149 => 46,  145 => 45,  141 => 44,  132 => 38,  119 => 28,  114 => 26,  108 => 23,  102 => 20,  98 => 19,  93 => 17,  88 => 15,  82 => 11,  76 => 8,  73 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block body_id 'login' %}

{% block main %}
    {% if error %}
        <div class=\"alert alert-danger\">
            {{ error.messageKey|trans(error.messageData, 'security') }}
        </div>
    {% endif %}

    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"{{ path('security_login') }}\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'title.login'|trans }}</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">{{ 'label.username'|trans }}</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">{{ 'label.password'|trans }}</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> {{ 'action.sign_in'|trans }}
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                <i class=\"fa fa-long-arrow-left\" aria-hidden=\"true\"></i>
                {{ 'help.login_users'|trans }}
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">{{ 'label.username'|trans }}</th>
                        <th scope=\"col\">{{ 'label.password'|trans }}</th>
                        <th scope=\"col\">{{ 'label.role'|trans }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> ({{ 'help.role_user'|trans }})</td>
                    </tr>
                    <tr>
                        <td>jane_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> ({{ 'help.role_admin'|trans }})</td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"label label-success\">{{ 'note'|trans }}</span>
                        {{ 'help.reload_fixtures'|trans }}<br/>

                        <code class=\"console\">\$ php bin/console doctrine:fixtures:load</code>
                    </p>

                    <p>
                        <span class=\"label label-success\">{{ 'tip'|trans }}</span>
                        {{ 'help.add_user'|trans }}<br/>

                        <code class=\"console\">\$ php bin/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        \$(document).ready(function() {
            var usernameEl = \$('#username');
            var passwordEl = \$('#password');
            // in a real application, hardcoding the user/password would be idiotic
            // but for the demo application it's very convenient to do so
            if (!usernameEl.val() && !passwordEl.val()) {
                usernameEl.val('jane_admin');
                passwordEl.val('kitten');
            }
        });
    </script>
{% endblock %}
", "security/login.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/security/login.html.twig");
    }
}
