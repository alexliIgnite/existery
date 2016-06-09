<?php

/* mainBundle:Default:index.html.twig */
class __TwigTemplate_501426a60b4d061df801aa20be82da05e7923883247367102f8851b066ff077e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainBundle::base.html.twig", "mainBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'tuid' => array($this, 'block_tuid'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58416b53ae181c4f31afbb65da0607483ff2058ad87e6491dc53c263130b1838 = $this->env->getExtension("native_profiler");
        $__internal_58416b53ae181c4f31afbb65da0607483ff2058ad87e6491dc53c263130b1838->enter($__internal_58416b53ae181c4f31afbb65da0607483ff2058ad87e6491dc53c263130b1838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58416b53ae181c4f31afbb65da0607483ff2058ad87e6491dc53c263130b1838->leave($__internal_58416b53ae181c4f31afbb65da0607483ff2058ad87e6491dc53c263130b1838_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_73abb79ad2335e9af8a51a428e7c610c2734d3891c5b545f82545e6331bab1f6 = $this->env->getExtension("native_profiler");
        $__internal_73abb79ad2335e9af8a51a428e7c610c2734d3891c5b545f82545e6331bab1f6->enter($__internal_73abb79ad2335e9af8a51a428e7c610c2734d3891c5b545f82545e6331bab1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Existery -- Refined Information ";
        
        $__internal_73abb79ad2335e9af8a51a428e7c610c2734d3891c5b545f82545e6331bab1f6->leave($__internal_73abb79ad2335e9af8a51a428e7c610c2734d3891c5b545f82545e6331bab1f6_prof);

    }

    // line 3
    public function block_tuid($context, array $blocks = array())
    {
        $__internal_692b161f69fa1dd6026e173bab0094ec6679e6b601a978704a603236c88152d2 = $this->env->getExtension("native_profiler");
        $__internal_692b161f69fa1dd6026e173bab0094ec6679e6b601a978704a603236c88152d2->enter($__internal_692b161f69fa1dd6026e173bab0094ec6679e6b601a978704a603236c88152d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tuid"));

        echo " <div class=\"userID\" >";
        echo twig_escape_filter($this->env, (isset($context["tempUID"]) ? $context["tempUID"] : $this->getContext($context, "tempUID")), "html", null, true);
        echo "</div> ";
        
        $__internal_692b161f69fa1dd6026e173bab0094ec6679e6b601a978704a603236c88152d2->leave($__internal_692b161f69fa1dd6026e173bab0094ec6679e6b601a978704a603236c88152d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_045cfa86404c17b1238f11fc642433c2a2461ac3e3fa1d7c2575932f1da7b665 = $this->env->getExtension("native_profiler");
        $__internal_045cfa86404c17b1238f11fc642433c2a2461ac3e3fa1d7c2575932f1da7b665->enter($__internal_045cfa86404c17b1238f11fc642433c2a2461ac3e3fa1d7c2575932f1da7b665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<div class=\"row\">
\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "  \t\t\t<div class=\"col-sm-6 col-md-4\">
    \t\t\t<div class=\"thumbnail\" style=\"background-color:";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "bgColor", array()), "html", null, true);
            echo " !important;\">
      \t\t\t\t<img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "thumbnail", array()), "html", null, true);
            echo "\" alt=\"...\">
      \t\t\t\t<div class=\"caption\">
        \t\t\t\t<h3>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
        \t\t\t\t<p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "</p>
        \t\t\t\t<p class=\"readButton\"><a href=\"/getFullPost/";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" rel=\"#overlay\" class=\"btn btn-primary\" role=\"button\" ptid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">Read</a></p>
      \t\t\t\t</div>
    \t\t\t</div>
  \t\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t</div>
\t<div class=\"apple_overlay\" id=\"overlay\"><a class=\"close\"></a><div class=\"contentWrap\"></div></div>
\t";
        // line 20
        $this->loadTemplate("mainBundle:Default:feedBar.html.twig", "mainBundle:Default:index.html.twig", 20)->display($context);
        
        $__internal_045cfa86404c17b1238f11fc642433c2a2461ac3e3fa1d7c2575932f1da7b665->leave($__internal_045cfa86404c17b1238f11fc642433c2a2461ac3e3fa1d7c2575932f1da7b665_prof);

    }

    public function getTemplateName()
    {
        return "mainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 20,  108 => 18,  95 => 13,  91 => 12,  87 => 11,  82 => 9,  78 => 8,  75 => 7,  71 => 6,  68 => 5,  62 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
