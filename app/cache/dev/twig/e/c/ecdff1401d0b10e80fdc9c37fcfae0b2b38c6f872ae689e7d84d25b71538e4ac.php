<?php

/* mainBundle:Default:fullPost.html.twig */
class __TwigTemplate_ecdff1401d0b10e80fdc9c37fcfae0b2b38c6f872ae689e7d84d25b71538e4ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dac534e959ab658bd2a0841517030cc8fac3e5c0b80b6a67404bae97e0fd20b = $this->env->getExtension("native_profiler");
        $__internal_0dac534e959ab658bd2a0841517030cc8fac3e5c0b80b6a67404bae97e0fd20b->enter($__internal_0dac534e959ab658bd2a0841517030cc8fac3e5c0b80b6a67404bae97e0fd20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainBundle:Default:fullPost.html.twig"));

        // line 1
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array());
        
        $__internal_0dac534e959ab658bd2a0841517030cc8fac3e5c0b80b6a67404bae97e0fd20b->leave($__internal_0dac534e959ab658bd2a0841517030cc8fac3e5c0b80b6a67404bae97e0fd20b_prof);

    }

    public function getTemplateName()
    {
        return "mainBundle:Default:fullPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
