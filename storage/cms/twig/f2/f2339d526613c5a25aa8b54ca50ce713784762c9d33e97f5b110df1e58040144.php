<?php

/* C:\xampp\htdocs\firefly/themes/demo/partials/calcresult.htm */
class __TwigTemplate_9a7dbe250aac43b0f2c98f6bc65a2a0043632d8f789dd68e446c14a4903a0b56 extends Twig_Template
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
        // line 1
        if ((isset($context["result"]) ? $context["result"] : null)) {
            // line 2
            echo "    <span class=\"lead\">
        The result is <span class=\"label label-success\">";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : null), "html", null, true);
            echo "</span>
    </span>
";
        } else {
            // line 6
            echo "    <span class=\"text-muted\">
        Click the <em>Calculate</em> button to find the answer.
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\firefly/themes/demo/partials/calcresult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if result %}*/
/*     <span class="lead">*/
/*         The result is <span class="label label-success">{{ result }}</span>*/
/*     </span>*/
/* {% else %}*/
/*     <span class="text-muted">*/
/*         Click the <em>Calculate</em> button to find the answer.*/
/*     </span>*/
/* {% endif %}*/
