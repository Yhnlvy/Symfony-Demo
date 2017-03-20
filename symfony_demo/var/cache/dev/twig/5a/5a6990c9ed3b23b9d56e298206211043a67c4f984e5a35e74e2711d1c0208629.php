<?php

/* base.html.twig */
class __TwigTemplate_a80407c7d5c2a497fac8b672fc0464e607742708bc51fb404991f5258c7f8d3f extends Twig_Template
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
        $__internal_2aac2b0829daa21940cffc7664fbbb3cc185e37b2c8badb6ed55fdf8c8a4c101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aac2b0829daa21940cffc7664fbbb3cc185e37b2c8badb6ed55fdf8c8a4c101->enter($__internal_2aac2b0829daa21940cffc7664fbbb3cc185e37b2c8badb6ed55fdf8c8a4c101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d5a6b4f6bfdc8d276f7502e5993f8cff52c28b54db281794be7088687ebbc692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a6b4f6bfdc8d276f7502e5993f8cff52c28b54db281794be7088687ebbc692->enter($__internal_d5a6b4f6bfdc8d276f7502e5993f8cff52c28b54db281794be7088687ebbc692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2aac2b0829daa21940cffc7664fbbb3cc185e37b2c8badb6ed55fdf8c8a4c101->leave($__internal_2aac2b0829daa21940cffc7664fbbb3cc185e37b2c8badb6ed55fdf8c8a4c101_prof);

        
        $__internal_d5a6b4f6bfdc8d276f7502e5993f8cff52c28b54db281794be7088687ebbc692->leave($__internal_d5a6b4f6bfdc8d276f7502e5993f8cff52c28b54db281794be7088687ebbc692_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fdf7fa21947ae1cb89984a00be997a45f127e2eb1bf9062dfb7653d958b9dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdf7fa21947ae1cb89984a00be997a45f127e2eb1bf9062dfb7653d958b9dee->enter($__internal_3fdf7fa21947ae1cb89984a00be997a45f127e2eb1bf9062dfb7653d958b9dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50a263a7014db9080133f02e7cc70d51568a366eddb7a0acb2645a2da5258e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a263a7014db9080133f02e7cc70d51568a366eddb7a0acb2645a2da5258e0d->enter($__internal_50a263a7014db9080133f02e7cc70d51568a366eddb7a0acb2645a2da5258e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_50a263a7014db9080133f02e7cc70d51568a366eddb7a0acb2645a2da5258e0d->leave($__internal_50a263a7014db9080133f02e7cc70d51568a366eddb7a0acb2645a2da5258e0d_prof);

        
        $__internal_3fdf7fa21947ae1cb89984a00be997a45f127e2eb1bf9062dfb7653d958b9dee->leave($__internal_3fdf7fa21947ae1cb89984a00be997a45f127e2eb1bf9062dfb7653d958b9dee_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da1fd3c8ce915b98c48feee9ca045edf9fc957efb8f7b4ddf87883b02dbe4607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1fd3c8ce915b98c48feee9ca045edf9fc957efb8f7b4ddf87883b02dbe4607->enter($__internal_da1fd3c8ce915b98c48feee9ca045edf9fc957efb8f7b4ddf87883b02dbe4607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_403dd29b4a91a763ffe20ad317aa87fc1b00236e20c9852b0995f398012b65a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403dd29b4a91a763ffe20ad317aa87fc1b00236e20c9852b0995f398012b65a5->enter($__internal_403dd29b4a91a763ffe20ad317aa87fc1b00236e20c9852b0995f398012b65a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_403dd29b4a91a763ffe20ad317aa87fc1b00236e20c9852b0995f398012b65a5->leave($__internal_403dd29b4a91a763ffe20ad317aa87fc1b00236e20c9852b0995f398012b65a5_prof);

        
        $__internal_da1fd3c8ce915b98c48feee9ca045edf9fc957efb8f7b4ddf87883b02dbe4607->leave($__internal_da1fd3c8ce915b98c48feee9ca045edf9fc957efb8f7b4ddf87883b02dbe4607_prof);

    }

    // line 25
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_69f20a730765cafaed17d554529abc26d8e8c7ad2d01c3725e21eea5b6c18f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f20a730765cafaed17d554529abc26d8e8c7ad2d01c3725e21eea5b6c18f57->enter($__internal_69f20a730765cafaed17d554529abc26d8e8c7ad2d01c3725e21eea5b6c18f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_85ec80c7b3830826dd407def87f1c0ac927587a49ec4361eb759d0ece1b7a8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ec80c7b3830826dd407def87f1c0ac927587a49ec4361eb759d0ece1b7a8a6->enter($__internal_85ec80c7b3830826dd407def87f1c0ac927587a49ec4361eb759d0ece1b7a8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_85ec80c7b3830826dd407def87f1c0ac927587a49ec4361eb759d0ece1b7a8a6->leave($__internal_85ec80c7b3830826dd407def87f1c0ac927587a49ec4361eb759d0ece1b7a8a6_prof);

        
        $__internal_69f20a730765cafaed17d554529abc26d8e8c7ad2d01c3725e21eea5b6c18f57->leave($__internal_69f20a730765cafaed17d554529abc26d8e8c7ad2d01c3725e21eea5b6c18f57_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_21b19f1914053c457111403ad17b43c6bd142a0203bac83f43ce2c47664f6287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b19f1914053c457111403ad17b43c6bd142a0203bac83f43ce2c47664f6287->enter($__internal_21b19f1914053c457111403ad17b43c6bd142a0203bac83f43ce2c47664f6287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_28a903f1da33cefe687a6a3452e311ee77af884466c04ab64e045cbb068e508d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a903f1da33cefe687a6a3452e311ee77af884466c04ab64e045cbb068e508d->enter($__internal_28a903f1da33cefe687a6a3452e311ee77af884466c04ab64e045cbb068e508d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_28a903f1da33cefe687a6a3452e311ee77af884466c04ab64e045cbb068e508d->leave($__internal_28a903f1da33cefe687a6a3452e311ee77af884466c04ab64e045cbb068e508d_prof);

        
        $__internal_21b19f1914053c457111403ad17b43c6bd142a0203bac83f43ce2c47664f6287->leave($__internal_21b19f1914053c457111403ad17b43c6bd142a0203bac83f43ce2c47664f6287_prof);

    }

    // line 48
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_d7b953957c7a0776b7465b9844be22fd1a1021acc329ff5885288e786b8c3d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b953957c7a0776b7465b9844be22fd1a1021acc329ff5885288e786b8c3d6c->enter($__internal_d7b953957c7a0776b7465b9844be22fd1a1021acc329ff5885288e786b8c3d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_bee3ad5e99588a8f4b235b20f4f5c8be4e650bc66dfb50bf2dbf69b047301da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee3ad5e99588a8f4b235b20f4f5c8be4e650bc66dfb50bf2dbf69b047301da6->enter($__internal_bee3ad5e99588a8f4b235b20f4f5c8be4e650bc66dfb50bf2dbf69b047301da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

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
        
        $__internal_bee3ad5e99588a8f4b235b20f4f5c8be4e650bc66dfb50bf2dbf69b047301da6->leave($__internal_bee3ad5e99588a8f4b235b20f4f5c8be4e650bc66dfb50bf2dbf69b047301da6_prof);

        
        $__internal_d7b953957c7a0776b7465b9844be22fd1a1021acc329ff5885288e786b8c3d6c->leave($__internal_d7b953957c7a0776b7465b9844be22fd1a1021acc329ff5885288e786b8c3d6c_prof);

    }

    // line 92
    public function block_body($context, array $blocks = array())
    {
        $__internal_59e83d96bd0672562253843b86c72299c1d17ede590174fe7064c3f35d2de59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59e83d96bd0672562253843b86c72299c1d17ede590174fe7064c3f35d2de59e->enter($__internal_59e83d96bd0672562253843b86c72299c1d17ede590174fe7064c3f35d2de59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c11fecc37507410719d53a6745b5a4b004ea0a0c34035ad5c033db96a9b84b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c11fecc37507410719d53a6745b5a4b004ea0a0c34035ad5c033db96a9b84b0->enter($__internal_8c11fecc37507410719d53a6745b5a4b004ea0a0c34035ad5c033db96a9b84b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8c11fecc37507410719d53a6745b5a4b004ea0a0c34035ad5c033db96a9b84b0->leave($__internal_8c11fecc37507410719d53a6745b5a4b004ea0a0c34035ad5c033db96a9b84b0_prof);

        
        $__internal_59e83d96bd0672562253843b86c72299c1d17ede590174fe7064c3f35d2de59e->leave($__internal_59e83d96bd0672562253843b86c72299c1d17ede590174fe7064c3f35d2de59e_prof);

    }

    // line 97
    public function block_main($context, array $blocks = array())
    {
        $__internal_5c52a7935823b1d7db9b26d080ef12d255b5b38adbb8784fa25a40c8198f0745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c52a7935823b1d7db9b26d080ef12d255b5b38adbb8784fa25a40c8198f0745->enter($__internal_5c52a7935823b1d7db9b26d080ef12d255b5b38adbb8784fa25a40c8198f0745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f60509f56ea3a1ee16d685d65325522a0da8ec68983f94b8e325bc9bf5b15006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60509f56ea3a1ee16d685d65325522a0da8ec68983f94b8e325bc9bf5b15006->enter($__internal_f60509f56ea3a1ee16d685d65325522a0da8ec68983f94b8e325bc9bf5b15006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_f60509f56ea3a1ee16d685d65325522a0da8ec68983f94b8e325bc9bf5b15006->leave($__internal_f60509f56ea3a1ee16d685d65325522a0da8ec68983f94b8e325bc9bf5b15006_prof);

        
        $__internal_5c52a7935823b1d7db9b26d080ef12d255b5b38adbb8784fa25a40c8198f0745->leave($__internal_5c52a7935823b1d7db9b26d080ef12d255b5b38adbb8784fa25a40c8198f0745_prof);

    }

    // line 101
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_105aff528e75026465fb75b6771582de7744690616f6204e679b60ca1f57361c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105aff528e75026465fb75b6771582de7744690616f6204e679b60ca1f57361c->enter($__internal_105aff528e75026465fb75b6771582de7744690616f6204e679b60ca1f57361c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_633bab2ffa09cc77c4c6d8715f520d89f327c8987496e058747bbc1a3d52eb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633bab2ffa09cc77c4c6d8715f520d89f327c8987496e058747bbc1a3d52eb91->enter($__internal_633bab2ffa09cc77c4c6d8715f520d89f327c8987496e058747bbc1a3d52eb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 102
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FrameworkBundle:Template:template", array("template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => $this->getAttribute($this->getAttribute(        // line 105
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()))));
        // line 106
        echo "
                        ";
        
        $__internal_633bab2ffa09cc77c4c6d8715f520d89f327c8987496e058747bbc1a3d52eb91->leave($__internal_633bab2ffa09cc77c4c6d8715f520d89f327c8987496e058747bbc1a3d52eb91_prof);

        
        $__internal_105aff528e75026465fb75b6771582de7744690616f6204e679b60ca1f57361c->leave($__internal_105aff528e75026465fb75b6771582de7744690616f6204e679b60ca1f57361c_prof);

    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
        $__internal_591278b5647a534b7a5d54c8d899623ed60759c03274c8056351810e26f98cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591278b5647a534b7a5d54c8d899623ed60759c03274c8056351810e26f98cc8->enter($__internal_591278b5647a534b7a5d54c8d899623ed60759c03274c8056351810e26f98cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_9fb40143c93338a91dc46b6625ca4f6f7df518a70563321c6ed019b68f79514c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb40143c93338a91dc46b6625ca4f6f7df518a70563321c6ed019b68f79514c->enter($__internal_9fb40143c93338a91dc46b6625ca4f6f7df518a70563321c6ed019b68f79514c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_9fb40143c93338a91dc46b6625ca4f6f7df518a70563321c6ed019b68f79514c->leave($__internal_9fb40143c93338a91dc46b6625ca4f6f7df518a70563321c6ed019b68f79514c_prof);

        
        $__internal_591278b5647a534b7a5d54c8d899623ed60759c03274c8056351810e26f98cc8->leave($__internal_591278b5647a534b7a5d54c8d899623ed60759c03274c8056351810e26f98cc8_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8bfc3811408143687379206374e42800a90fc0a8ae4db73b4df72ca34f8ae239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfc3811408143687379206374e42800a90fc0a8ae4db73b4df72ca34f8ae239->enter($__internal_8bfc3811408143687379206374e42800a90fc0a8ae4db73b4df72ca34f8ae239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b008e4121d9c6567c0611496683edca9f749583229c9b5dbba48d7317bf19a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b008e4121d9c6567c0611496683edca9f749583229c9b5dbba48d7317bf19a4e->enter($__internal_b008e4121d9c6567c0611496683edca9f749583229c9b5dbba48d7317bf19a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b008e4121d9c6567c0611496683edca9f749583229c9b5dbba48d7317bf19a4e->leave($__internal_b008e4121d9c6567c0611496683edca9f749583229c9b5dbba48d7317bf19a4e_prof);

        
        $__internal_8bfc3811408143687379206374e42800a90fc0a8ae4db73b4df72ca34f8ae239->leave($__internal_8bfc3811408143687379206374e42800a90fc0a8ae4db73b4df72ca34f8ae239_prof);

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
", "base.html.twig", "/Users/yohanlevy/Documents/milestone4-project/symfony_demo/app/Resources/views/base.html.twig");
    }
}
