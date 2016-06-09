<?php

/* apptoolBundle:Default:index.html.twig */
class __TwigTemplate_764af52e9eb6143cd17cf52bd8580b8e1662b6cdad4b869ea533c2f8583cd013 extends Twig_Template
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
        $__internal_b78cdea36fda15ef2cc9ceee7cde4c072d9b4d075c40fb3cbdc26cc518f6c9bf = $this->env->getExtension("native_profiler");
        $__internal_b78cdea36fda15ef2cc9ceee7cde4c072d9b4d075c40fb3cbdc26cc518f6c9bf->enter($__internal_b78cdea36fda15ef2cc9ceee7cde4c072d9b4d075c40fb3cbdc26cc518f6c9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "apptoolBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
<head>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=9; IE=8; IE=7; IE=EDGE\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
</head>
<body>
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nodeValues"]) ? $context["nodeValues"] : $this->getContext($context, "nodeValues")));
        foreach ($context['_seq'] as $context["_key"] => $context["nodeValue"]) {
            // line 8
            echo "\t";
            echo $context["nodeValue"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nodeValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</body>
</html>";
        
        $__internal_b78cdea36fda15ef2cc9ceee7cde4c072d9b4d075c40fb3cbdc26cc518f6c9bf->leave($__internal_b78cdea36fda15ef2cc9ceee7cde4c072d9b4d075c40fb3cbdc26cc518f6c9bf_prof);

    }

    public function getTemplateName()
    {
        return "apptoolBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  34 => 8,  30 => 7,  22 => 1,);
    }
}
