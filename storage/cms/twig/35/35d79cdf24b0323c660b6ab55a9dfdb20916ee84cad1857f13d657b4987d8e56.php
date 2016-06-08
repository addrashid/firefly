<?php

/* C:\xampp\htdocs\firefly/themes/demo/pages/plugins.htm */
class __TwigTemplate_00c231614180ddcdbfa7a8ecfcbedc578d8cd574304c530b8620d227fedd2ac5 extends Twig_Template
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
        echo "<div class=\"jumbotron title-js\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>Plugin components</h1>
                <p>Plugins can provide components, simple building blocks that enrich any page or layout. Check out the todo example below.</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    ";
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("demoTodo"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "</div>

<!-- Page Explanation -->
<div class=\"container\">";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("explain/plugins.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "</div>

<br />

<div class=\"text-center\">
    <p><a target=\"_blank\" href=\"http://octobercms.com/docs\" class=\"btn btn-lg btn-default\">Learn more at October's Documentation</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\firefly/themes/demo/pages/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 17,  37 => 14,  33 => 13,  19 => 1,);
    }
}
/* <div class="jumbotron title-js">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-8">*/
/*                 <h1>Plugin components</h1>*/
/*                 <p>Plugins can provide components, simple building blocks that enrich any page or layout. Check out the todo example below.</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     {% component 'demoTodo' %}*/
/* </div>*/
/* */
/* <!-- Page Explanation -->*/
/* <div class="container">{% partial "explain/plugins.htm" %}</div>*/
/* */
/* <br />*/
/* */
/* <div class="text-center">*/
/*     <p><a target="_blank" href="http://octobercms.com/docs" class="btn btn-lg btn-default">Learn more at October's Documentation</a></p>*/
/* </div>*/
