<?php

/* C:\xampp\htdocs\firefly/plugins/october/demo/components/todo/default.htm */
class __TwigTemplate_88f72af1a929dd8153ce805c456dc9986be537ffc8dc8dfbf43d3151e4a9fb40 extends Twig_Template
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
        echo "<form
    data-request=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onAddItem\"
    data-request-update=\"'";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::list': '#result'\"
    data-request-success=\"\$('#input-item').val('')\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">To Do List</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"input-item\" class=\"form-control\" value=\"\" name=\"newItem\" placeholder=\"What needs to be done?\"> 
                <span class=\"input-group-btn\">
                    <button type=\"submit\" class=\"btn btn btn-primary\">Add</button>
                </span>
            </div>
        </div>
        <ul class=\"list-group\" id=\"result\">
        </ul>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\firefly/plugins/october/demo/components/todo/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <form*/
/*     data-request="{{ __SELF__ }}::onAddItem"*/
/*     data-request-update="'{{ __SELF__ }}::list': '#result'"*/
/*     data-request-success="$('#input-item').val('')">*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">To Do List</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <div class="input-group">*/
/*                 <input type="text" id="input-item" class="form-control" value="" name="newItem" placeholder="What needs to be done?"> */
/*                 <span class="input-group-btn">*/
/*                     <button type="submit" class="btn btn btn-primary">Add</button>*/
/*                 </span>*/
/*             </div>*/
/*         </div>*/
/*         <ul class="list-group" id="result">*/
/*         </ul>*/
/*     </div>*/
/* </form>*/
/* */
