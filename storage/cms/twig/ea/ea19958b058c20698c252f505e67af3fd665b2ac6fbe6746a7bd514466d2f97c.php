<?php

/* C:\xampp\htdocs\firefly/themes/demo/partials/explain/plugins.htm */
class __TwigTemplate_679b1ce4858ad908f1873a14e9085c33cef6a010db34ca1fcf52a72450b5da9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_c7b202831d510ef3c16cee2af2e70554bd068a9c607c8c03f7f1c933aab2204e' => array($this, 'block___internal_c7b202831d510ef3c16cee2af2e70554bd068a9c607c8c03f7f1c933aab2204e'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>
<pre>
";
        // line 7
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_c7b202831d510ef3c16cee2af2e70554bd068a9c607c8c03f7f1c933aab2204e", $context, $blocks));
        // line 9
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> &nbsp; Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->pageFilter("ajax");
        echo "\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>";
    }

    // line 7
    public function block___internal_c7b202831d510ef3c16cee2af2e70554bd068a9c607c8c03f7f1c933aab2204e($context, array $blocks = array())
    {
        // line 8
        echo "{% component 'demoTodo' %}";
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\firefly/themes/demo/partials/explain/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  39 => 16,  30 => 9,  28 => 7,  20 => 1,);
    }
}
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-copy"></i> &nbsp; The HTML markup for this example:*/
/* </p>*/
/* <pre>*/
/* {% filter escape %}*/
/* {{ "{% component 'demoTodo' %}" }}*/
/* {% endfilter %}</pre>*/
/* */
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-question"></i> &nbsp; Wait, only one line is needed?*/
/* </p>*/
/* <p><em>Yes!</em> unlike the <a href="{{ 'ajax'|page }}">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>*/
/* <p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>*/
