<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c8cd31aadd787e9dfc3f3f7955238a205c5e85967d7eea236e48e84b94761933 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8806ba42d8c95e355484a6e403875412c0779fdf9ce96b4134930983c3dc7437 = $this->env->getExtension("native_profiler");
        $__internal_8806ba42d8c95e355484a6e403875412c0779fdf9ce96b4134930983c3dc7437->enter($__internal_8806ba42d8c95e355484a6e403875412c0779fdf9ce96b4134930983c3dc7437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8806ba42d8c95e355484a6e403875412c0779fdf9ce96b4134930983c3dc7437->leave($__internal_8806ba42d8c95e355484a6e403875412c0779fdf9ce96b4134930983c3dc7437_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_661fad23176e09d7e54239ad7a65224a30efb63a2817cf612a73c346452f32a5 = $this->env->getExtension("native_profiler");
        $__internal_661fad23176e09d7e54239ad7a65224a30efb63a2817cf612a73c346452f32a5->enter($__internal_661fad23176e09d7e54239ad7a65224a30efb63a2817cf612a73c346452f32a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_661fad23176e09d7e54239ad7a65224a30efb63a2817cf612a73c346452f32a5->leave($__internal_661fad23176e09d7e54239ad7a65224a30efb63a2817cf612a73c346452f32a5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78a25327a1d18863e61fa9bbd42cffc950e97e2291710c8162917133deef42fc = $this->env->getExtension("native_profiler");
        $__internal_78a25327a1d18863e61fa9bbd42cffc950e97e2291710c8162917133deef42fc->enter($__internal_78a25327a1d18863e61fa9bbd42cffc950e97e2291710c8162917133deef42fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78a25327a1d18863e61fa9bbd42cffc950e97e2291710c8162917133deef42fc->leave($__internal_78a25327a1d18863e61fa9bbd42cffc950e97e2291710c8162917133deef42fc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc1cb2bdda145a498ab809b4480e071219a4cbd3b47352639815c05a2b8fcf56 = $this->env->getExtension("native_profiler");
        $__internal_dc1cb2bdda145a498ab809b4480e071219a4cbd3b47352639815c05a2b8fcf56->enter($__internal_dc1cb2bdda145a498ab809b4480e071219a4cbd3b47352639815c05a2b8fcf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_dc1cb2bdda145a498ab809b4480e071219a4cbd3b47352639815c05a2b8fcf56->leave($__internal_dc1cb2bdda145a498ab809b4480e071219a4cbd3b47352639815c05a2b8fcf56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
