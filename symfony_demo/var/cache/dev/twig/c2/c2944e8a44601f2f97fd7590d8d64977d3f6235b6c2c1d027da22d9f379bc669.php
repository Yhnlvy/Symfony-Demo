<?php

/* base.html.twig */
class __TwigTemplate_85cad54bb7c08aacfa91b13350cc4cb4d494c99a0de6485b72c39bd17bdfb3d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b582d8169c61694ff55786fa488dc351899322f72374c82053b4d170e766309b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b582d8169c61694ff55786fa488dc351899322f72374c82053b4d170e766309b->enter($__internal_b582d8169c61694ff55786fa488dc351899322f72374c82053b4d170e766309b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8cb9a976b2b822d522f2317a6db64ac31c7b9a85dccf5ca8822043b89cad3e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb9a976b2b822d522f2317a6db64ac31c7b9a85dccf5ca8822043b89cad3e30->enter($__internal_8cb9a976b2b822d522f2317a6db64ac31c7b9a85dccf5ca8822043b89cad3e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("rss.title"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 25
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 90
        echo "
        <div class=\"container body-container\">
            ";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 111
        echo "        </div>

        ";
        // line 113
        $this->displayBlock('footer', $context, $blocks);
        // line 138
        echo "
        ";
        // line 139
        $this->displayBlock('javascripts', $context, $blocks);
        // line 148
        echo "
        ";
        // line 152
        echo "        <!-- Page rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
    </body>
</html>
";
        
        $__internal_b582d8169c61694ff55786fa488dc351899322f72374c82053b4d170e766309b->leave($__internal_b582d8169c61694ff55786fa488dc351899322f72374c82053b4d170e766309b_prof);

        
        $__internal_8cb9a976b2b822d522f2317a6db64ac31c7b9a85dccf5ca8822043b89cad3e30->leave($__internal_8cb9a976b2b822d522f2317a6db64ac31c7b9a85dccf5ca8822043b89cad3e30_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_a85effca5fa3082f2e8407be9eef87a87f5c357066629f86937d57070fb9ac71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85effca5fa3082f2e8407be9eef87a87f5c357066629f86937d57070fb9ac71->enter($__internal_a85effca5fa3082f2e8407be9eef87a87f5c357066629f86937d57070fb9ac71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a467be8792753296f377ff82849f287b39800b59a349cdf6428be4ea932d30e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a467be8792753296f377ff82849f287b39800b59a349cdf6428be4ea932d30e7->enter($__internal_a467be8792753296f377ff82849f287b39800b59a349cdf6428be4ea932d30e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_a467be8792753296f377ff82849f287b39800b59a349cdf6428be4ea932d30e7->leave($__internal_a467be8792753296f377ff82849f287b39800b59a349cdf6428be4ea932d30e7_prof);

        
        $__internal_a85effca5fa3082f2e8407be9eef87a87f5c357066629f86937d57070fb9ac71->leave($__internal_a85effca5fa3082f2e8407be9eef87a87f5c357066629f86937d57070fb9ac71_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6458787a4b578864a068ffe3cd1ec83438cb26b37d64b4a3738652ef67b608fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6458787a4b578864a068ffe3cd1ec83438cb26b37d64b4a3738652ef67b608fa->enter($__internal_6458787a4b578864a068ffe3cd1ec83438cb26b37d64b4a3738652ef67b608fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_214337d4aef1cfb429353f01689f77fc908700f2054922f0ade038263fa59527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214337d4aef1cfb429353f01689f77fc908700f2054922f0ade038263fa59527->enter($__internal_214337d4aef1cfb429353f01689f77fc908700f2054922f0ade038263fa59527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-flatly-3.3.7.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome-4.6.3.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-lato.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/highlight-solarized-light.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-tagsinput.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_214337d4aef1cfb429353f01689f77fc908700f2054922f0ade038263fa59527->leave($__internal_214337d4aef1cfb429353f01689f77fc908700f2054922f0ade038263fa59527_prof);

        
        $__internal_6458787a4b578864a068ffe3cd1ec83438cb26b37d64b4a3738652ef67b608fa->leave($__internal_6458787a4b578864a068ffe3cd1ec83438cb26b37d64b4a3738652ef67b608fa_prof);

    }

    // line 25
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_4c51ecfa161e0f325e87de16d25e8a050bbc15eb37db3410048cdc2c769fdcd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c51ecfa161e0f325e87de16d25e8a050bbc15eb37db3410048cdc2c769fdcd2->enter($__internal_4c51ecfa161e0f325e87de16d25e8a050bbc15eb37db3410048cdc2c769fdcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_96c449cc39bdd46909ed6d3868b8fcecfa7626bc85fadd791ac7dbf04fb325cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c449cc39bdd46909ed6d3868b8fcecfa7626bc85fadd791ac7dbf04fb325cc->enter($__internal_96c449cc39bdd46909ed6d3868b8fcecfa7626bc85fadd791ac7dbf04fb325cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_96c449cc39bdd46909ed6d3868b8fcecfa7626bc85fadd791ac7dbf04fb325cc->leave($__internal_96c449cc39bdd46909ed6d3868b8fcecfa7626bc85fadd791ac7dbf04fb325cc_prof);

        
        $__internal_4c51ecfa161e0f325e87de16d25e8a050bbc15eb37db3410048cdc2c769fdcd2->leave($__internal_4c51ecfa161e0f325e87de16d25e8a050bbc15eb37db3410048cdc2c769fdcd2_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_28cb526a897e221775f243f1e7cc1aaeb01a45518ff8a6c580e91d760e0a0dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28cb526a897e221775f243f1e7cc1aaeb01a45518ff8a6c580e91d760e0a0dbe->enter($__internal_28cb526a897e221775f243f1e7cc1aaeb01a45518ff8a6c580e91d760e0a0dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_50cce1baa60ab4b059ecf4c6f120eff52da2975fce430fbafac53a502e1da017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cce1baa60ab4b059ecf4c6f120eff52da2975fce430fbafac53a502e1da017->enter($__internal_50cce1baa60ab4b059ecf4c6f120eff52da2975fce430fbafac53a502e1da017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.toggle_nav"), "html", null, true);
        echo "</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 48
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 63
        echo "
                                ";
        // line 64
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 65
            echo "                                    <li>
                                        <a href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 71
        echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.choose_language"), "html", null, true);
        echo "</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\AppExtension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 80
            echo "                                            <li ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo "aria-checked=\"true\" class=\"active\"";
            } else {
                echo "aria-checked=\"false\"";
            }
            echo " role=\"menuitem\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => $this->getAttribute($context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_50cce1baa60ab4b059ecf4c6f120eff52da2975fce430fbafac53a502e1da017->leave($__internal_50cce1baa60ab4b059ecf4c6f120eff52da2975fce430fbafac53a502e1da017_prof);

        
        $__internal_28cb526a897e221775f243f1e7cc1aaeb01a45518ff8a6c580e91d760e0a0dbe->leave($__internal_28cb526a897e221775f243f1e7cc1aaeb01a45518ff8a6c580e91d760e0a0dbe_prof);

    }

    // line 48
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_82d50dd9974825d9480d6d190c1a0f2fb0027b0e3019b51eec75825ab79cd3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d50dd9974825d9480d6d190c1a0f2fb0027b0e3019b51eec75825ab79cd3b3->enter($__internal_82d50dd9974825d9480d6d190c1a0f2fb0027b0e3019b51eec75825ab79cd3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_72ad67be14835e147076a41f052c3a3c90a18f94db38e6dd5037b7011e02d327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ad67be14835e147076a41f052c3a3c90a18f94db38e6dd5037b7011e02d327->enter($__internal_72ad67be14835e147076a41f052c3a3c90a18f94db38e6dd5037b7011e02d327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 49
        echo "                                    <li>
                                        <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 55
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 56
            echo "                                        <li>
                                            <a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 62
        echo "                                ";
        
        $__internal_72ad67be14835e147076a41f052c3a3c90a18f94db38e6dd5037b7011e02d327->leave($__internal_72ad67be14835e147076a41f052c3a3c90a18f94db38e6dd5037b7011e02d327_prof);

        
        $__internal_82d50dd9974825d9480d6d190c1a0f2fb0027b0e3019b51eec75825ab79cd3b3->leave($__internal_82d50dd9974825d9480d6d190c1a0f2fb0027b0e3019b51eec75825ab79cd3b3_prof);

    }

    // line 92
    public function block_body($context, array $blocks = array())
    {
        $__internal_701a90f60634b6b48653a99a63cee3a4b482e494c0d45896107514dc1468c5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701a90f60634b6b48653a99a63cee3a4b482e494c0d45896107514dc1468c5db->enter($__internal_701a90f60634b6b48653a99a63cee3a4b482e494c0d45896107514dc1468c5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f933c3c8e9ab05bad7cc0c30717ee9ed40a5ea61e50f672c35ab5d94e948853c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f933c3c8e9ab05bad7cc0c30717ee9ed40a5ea61e50f672c35ab5d94e948853c->enter($__internal_f933c3c8e9ab05bad7cc0c30717ee9ed40a5ea61e50f672c35ab5d94e948853c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 93
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 95
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 97
        $this->displayBlock('main', $context, $blocks);
        // line 98
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 101
        $this->displayBlock('sidebar', $context, $blocks);
        // line 108
        echo "                    </div>
                </div>
            ";
        
        $__internal_f933c3c8e9ab05bad7cc0c30717ee9ed40a5ea61e50f672c35ab5d94e948853c->leave($__internal_f933c3c8e9ab05bad7cc0c30717ee9ed40a5ea61e50f672c35ab5d94e948853c_prof);

        
        $__internal_701a90f60634b6b48653a99a63cee3a4b482e494c0d45896107514dc1468c5db->leave($__internal_701a90f60634b6b48653a99a63cee3a4b482e494c0d45896107514dc1468c5db_prof);

    }

    // line 97
    public function block_main($context, array $blocks = array())
    {
        $__internal_ba8c27dfdeef2c76076d8bd4bb11452f14e451b1c43fa2d0b24a934c7e452883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8c27dfdeef2c76076d8bd4bb11452f14e451b1c43fa2d0b24a934c7e452883->enter($__internal_ba8c27dfdeef2c76076d8bd4bb11452f14e451b1c43fa2d0b24a934c7e452883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_608433df6749a5578da89c3e3c1ded408d25fe5f34893b4f059bb31a8a33e749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608433df6749a5578da89c3e3c1ded408d25fe5f34893b4f059bb31a8a33e749->enter($__internal_608433df6749a5578da89c3e3c1ded408d25fe5f34893b4f059bb31a8a33e749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_608433df6749a5578da89c3e3c1ded408d25fe5f34893b4f059bb31a8a33e749->leave($__internal_608433df6749a5578da89c3e3c1ded408d25fe5f34893b4f059bb31a8a33e749_prof);

        
        $__internal_ba8c27dfdeef2c76076d8bd4bb11452f14e451b1c43fa2d0b24a934c7e452883->leave($__internal_ba8c27dfdeef2c76076d8bd4bb11452f14e451b1c43fa2d0b24a934c7e452883_prof);

    }

    // line 101
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a86720c7339992f64f29af9696e04c1ad461c3478a2be5525d40805c3545cf89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a86720c7339992f64f29af9696e04c1ad461c3478a2be5525d40805c3545cf89->enter($__internal_a86720c7339992f64f29af9696e04c1ad461c3478a2be5525d40805c3545cf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_07bb2780395f0fe6bca4891f633ccb62578fb94ea2b517fa2301e7431ff81b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bb2780395f0fe6bca4891f633ccb62578fb94ea2b517fa2301e7431ff81b79->enter($__internal_07bb2780395f0fe6bca4891f633ccb62578fb94ea2b517fa2301e7431ff81b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 102
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FrameworkBundle:Template:template", array("template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => $this->getAttribute($this->getAttribute(        // line 105
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()))));
        // line 106
        echo "
                        ";
        
        $__internal_07bb2780395f0fe6bca4891f633ccb62578fb94ea2b517fa2301e7431ff81b79->leave($__internal_07bb2780395f0fe6bca4891f633ccb62578fb94ea2b517fa2301e7431ff81b79_prof);

        
        $__internal_a86720c7339992f64f29af9696e04c1ad461c3478a2be5525d40805c3545cf89->leave($__internal_a86720c7339992f64f29af9696e04c1ad461c3478a2be5525d40805c3545cf89_prof);

    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3bd36e66384b183d78ee7f26056a862ccbe6ba27d31be5094f5cd7b81de4d533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd36e66384b183d78ee7f26056a862ccbe6ba27d31be5094f5cd7b81de4d533->enter($__internal_3bd36e66384b183d78ee7f26056a862ccbe6ba27d31be5094f5cd7b81de4d533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_50f72c4f877707f6166815d617ec000093ac8fa6f5bec35662db2b547716ac62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f72c4f877707f6166815d617ec000093ac8fa6f5bec35662db2b547716ac62->enter($__internal_50f72c4f877707f6166815d617ec000093ac8fa6f5bec35662db2b547716ac62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 114
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 118
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_50f72c4f877707f6166815d617ec000093ac8fa6f5bec35662db2b547716ac62->leave($__internal_50f72c4f877707f6166815d617ec000093ac8fa6f5bec35662db2b547716ac62_prof);

        
        $__internal_3bd36e66384b183d78ee7f26056a862ccbe6ba27d31be5094f5cd7b81de4d533->leave($__internal_3bd36e66384b183d78ee7f26056a862ccbe6ba27d31be5094f5cd7b81de4d533_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_561998b8149639cfd4de9f17df2c7838cfe4fb0b7474c28eb0b160c2acc27c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561998b8149639cfd4de9f17df2c7838cfe4fb0b7474c28eb0b160c2acc27c7d->enter($__internal_561998b8149639cfd4de9f17df2c7838cfe4fb0b7474c28eb0b160c2acc27c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1479b5f594e53314ddceae0c29ad076e8f5cb2411377ee534d168a1c134972c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1479b5f594e53314ddceae0c29ad076e8f5cb2411377ee534d168a1c134972c4->enter($__internal_1479b5f594e53314ddceae0c29ad076e8f5cb2411377ee534d168a1c134972c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 140
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-3.3.7.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/highlight.pack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_1479b5f594e53314ddceae0c29ad076e8f5cb2411377ee534d168a1c134972c4->leave($__internal_1479b5f594e53314ddceae0c29ad076e8f5cb2411377ee534d168a1c134972c4_prof);

        
        $__internal_561998b8149639cfd4de9f17df2c7838cfe4fb0b7474c28eb0b160c2acc27c7d->leave($__internal_561998b8149639cfd4de9f17df2c7838cfe4fb0b7474c28eb0b160c2acc27c7d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 146,  503 => 145,  499 => 144,  495 => 143,  491 => 142,  487 => 141,  482 => 140,  473 => 139,  444 => 119,  440 => 118,  434 => 114,  425 => 113,  414 => 106,  412 => 105,  410 => 102,  401 => 101,  384 => 97,  372 => 108,  370 => 101,  365 => 98,  363 => 97,  358 => 95,  354 => 93,  345 => 92,  335 => 62,  328 => 58,  324 => 57,  321 => 56,  319 => 55,  312 => 51,  308 => 50,  305 => 49,  296 => 48,  279 => 82,  262 => 80,  258 => 79,  252 => 76,  245 => 71,  238 => 67,  234 => 66,  231 => 65,  229 => 64,  226 => 63,  224 => 48,  212 => 39,  202 => 32,  196 => 28,  187 => 27,  170 => 25,  158 => 20,  154 => 19,  150 => 18,  146 => 17,  142 => 16,  138 => 15,  133 => 14,  124 => 13,  106 => 11,  91 => 152,  88 => 148,  86 => 139,  83 => 138,  81 => 113,  77 => 111,  75 => 92,  71 => 90,  69 => 27,  64 => 25,  57 => 22,  55 => 13,  49 => 12,  45 => 11,  38 => 7,  35 => 6,);
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
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>{% block title %}Symfony Demo application{% endblock %}</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"{{ 'rss.title'|trans }}\" href=\"{{ path('blog_rss') }}\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-flatly-3.3.7.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome-4.6.3.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-lato.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/highlight-solarized-light.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-tagsinput.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body id=\"{% block body_id %}{% endblock %}\">

        {% block header %}
            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">{{ 'menu.toggle_nav'|trans }}</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                {% block header_navigation_links %}
                                    <li>
                                        <a href=\"{{ path('blog_index') }}\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> {{ 'menu.homepage'|trans }}
                                        </a>
                                    </li>

                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li>
                                            <a href=\"{{ path('admin_post_index') }}\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'menu.admin'|trans }}
                                            </a>
                                        </li>
                                    {% endif %}
                                {% endblock %}

                                {% if app.user %}
                                    <li>
                                        <a href=\"{{ path('security_logout') }}\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> {{ 'menu.logout'|trans }}
                                        </a>
                                    </li>
                                {% endif %}

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">{{ 'menu.choose_language'|trans }}</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        {% for locale in locales() %}
                                            <li {% if app.request.locale == locale.code %}aria-checked=\"true\" class=\"active\"{%else%}aria-checked=\"false\"{% endif %} role=\"menuitem\"><a href=\"{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({ _locale: locale.code })) }}\">{{ locale.name|capitalize }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        {% endblock %}

        <div class=\"container body-container\">
            {% block body %}
                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        {{ include('default/_flash_messages.html.twig') }}

                        {% block main %}{% endblock %}
                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        {% block sidebar %}
                            {{ render_esi(controller('FrameworkBundle:Template:template', {
                                'template': 'blog/about.html.twig',
                                'sharedAge': 600,
                                '_locale': app.request.locale
                            })) }}
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>

        {% block footer %}
            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>
                            <p>{{ 'mit_license'|trans }}</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
            <script src=\"{{ asset('js/moment.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap-3.3.7.min.js') }}\"></script>
            <script src=\"{{ asset('js/highlight.pack.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap-tagsinput.min.js') }}\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}

        {# it's not mandatory to set the timezone in localizeddate(). This is done to
           avoid errors when the 'intl' PHP extension is not available and the application
           is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
        <!-- Page rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->
    </body>
</html>
", "base.html.twig", "/var/www/myapp/current/symfony_demo/app/Resources/views/base.html.twig");
    }
}
