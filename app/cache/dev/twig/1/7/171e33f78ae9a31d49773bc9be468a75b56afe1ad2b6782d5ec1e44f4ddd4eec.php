<?php

/* mainBundle::base.html.twig */
class __TwigTemplate_171e33f78ae9a31d49773bc9be468a75b56afe1ad2b6782d5ec1e44f4ddd4eec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'tuid' => array($this, 'block_tuid'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c982c65d071c99e1a5fa3e5c5c7d51663456d87fb3b4c79988cc97c6892de1d9 = $this->env->getExtension("native_profiler");
        $__internal_c982c65d071c99e1a5fa3e5c5c7d51663456d87fb3b4c79988cc97c6892de1d9->enter($__internal_c982c65d071c99e1a5fa3e5c5c7d51663456d87fb3b4c79988cc97c6892de1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"/favicon.ico\" type=\"image/x-icon\">
\t<link rel=\"icon\" href=\"/favicon.ico\" type=\"image/x-icon\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href='http://fonts.googleapis.com/css?family=Exo:400,700' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e0b0593_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e0b0593_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e0b0593_part_1_feedBar_1.css");
            // line 13
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
            // asset "e0b0593_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e0b0593_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e0b0593_part_1_post_2.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "e0b0593"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e0b0593") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e0b0593.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        // line 15
        echo "    <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
    ";
        // line 16
        $this->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig", "mainBundle::base.html.twig", 16)->display($context);
        // line 17
        echo "</head> 
<body>
\t<div id=\"topMenu\">Existery
\t\t<div class=\"userIcon\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span></div>\t
\t\t";
        // line 21
        $this->displayBlock('tuid', $context, $blocks);
        // line 22
        echo "\t</div>
\t
\t<div id=\"content\">
\t\t";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        echo "\t
\t</div>
    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all JavaScripts, compiled by Assetic -->
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js\"></script>
    ";
        // line 32
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1979e5b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1979e5b_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1979e5b_part_1_post_1.js");
            // line 33
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "1979e5b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1979e5b") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1979e5b.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 35
        echo "</body>
</html>
";
        
        $__internal_c982c65d071c99e1a5fa3e5c5c7d51663456d87fb3b4c79988cc97c6892de1d9->leave($__internal_c982c65d071c99e1a5fa3e5c5c7d51663456d87fb3b4c79988cc97c6892de1d9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3e9702badc84131a84595f9a1b85baca9475d44ea74edd6332b87e637aea97d = $this->env->getExtension("native_profiler");
        $__internal_f3e9702badc84131a84595f9a1b85baca9475d44ea74edd6332b87e637aea97d->enter($__internal_f3e9702badc84131a84595f9a1b85baca9475d44ea74edd6332b87e637aea97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Existery - Refined Information ";
        
        $__internal_f3e9702badc84131a84595f9a1b85baca9475d44ea74edd6332b87e637aea97d->leave($__internal_f3e9702badc84131a84595f9a1b85baca9475d44ea74edd6332b87e637aea97d_prof);

    }

    // line 21
    public function block_tuid($context, array $blocks = array())
    {
        $__internal_57528dfc4a95848bfdbe2b53e8f8296aac59bde2c57201d3cfe032ba98410c77 = $this->env->getExtension("native_profiler");
        $__internal_57528dfc4a95848bfdbe2b53e8f8296aac59bde2c57201d3cfe032ba98410c77->enter($__internal_57528dfc4a95848bfdbe2b53e8f8296aac59bde2c57201d3cfe032ba98410c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tuid"));

        echo " ";
        
        $__internal_57528dfc4a95848bfdbe2b53e8f8296aac59bde2c57201d3cfe032ba98410c77->leave($__internal_57528dfc4a95848bfdbe2b53e8f8296aac59bde2c57201d3cfe032ba98410c77_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_26b278b7c282c97b789e9095a00d60712be5d67087e9b3a139a695f878fd6591 = $this->env->getExtension("native_profiler");
        $__internal_26b278b7c282c97b789e9095a00d60712be5d67087e9b3a139a695f878fd6591->enter($__internal_26b278b7c282c97b789e9095a00d60712be5d67087e9b3a139a695f878fd6591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_26b278b7c282c97b789e9095a00d60712be5d67087e9b3a139a695f878fd6591->leave($__internal_26b278b7c282c97b789e9095a00d60712be5d67087e9b3a139a695f878fd6591_prof);

    }

    public function getTemplateName()
    {
        return "mainBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 25,  144 => 21,  132 => 5,  123 => 35,  109 => 33,  105 => 32,  100 => 30,  95 => 28,  89 => 25,  84 => 22,  82 => 21,  76 => 17,  74 => 16,  71 => 15,  51 => 13,  47 => 12,  43 => 11,  38 => 9,  31 => 5,  25 => 1,);
    }
}
