<?php

/* C:\xampp\htdocs\firefly/themes/demo/partials/explain/ajax.htm */
class __TwigTemplate_4225f5e18d2a6fd02e5020480587e940a086f4793b06d88f0d0195f11f45b8b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_260348ed468a5f1be7fdc939a0ee44d5927d42ed9fd0dd71936600a6d905c151' => array($this, 'block___internal_260348ed468a5f1be7fdc939a0ee44d5927d42ed9fd0dd71936600a6d905c151'),
            '__internal_d78580aed7135bb11e8b45643e792f7f8ee3e34564a425c82dceff256ca53369' => array($this, 'block___internal_d78580aed7135bb11e8b45643e792f7f8ee3e34564a425c82dceff256ca53369'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<!-- This file is an explanation of the AJAX page -->

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>

<pre>";
        // line 9
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_260348ed468a5f1be7fdc939a0ee44d5927d42ed9fd0dd71936600a6d905c151", $context, $blocks));
        // line 24
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-tags\"></i> &nbsp; The <code>calcresult</code> partial:
</p>

<pre>";
        // line 32
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_d78580aed7135bb11e8b45643e792f7f8ee3e34564a425c82dceff256ca53369", $context, $blocks));
        // line 37
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-code\"></i> &nbsp; The <code>onTest</code> PHP code:
</p>

<pre>function onTest()
{
    \$value1 = post('value1');
    \$value2 = post('value2');
    \$operation = post('operation');

    switch (\$operation) {
        case '+' : 
            \$this['result'] = \$value1 + \$value2;
            break;
        case '-' : 
            \$this['result'] = \$value1 - \$value2;
            break;
        case '*' : 
            \$this['result'] = \$value1 * \$value2;
            break;
        default : 
            \$this['result'] = \$value1 / \$value2;
            break;
    }
}</pre>";
    }

    // line 9
    public function block___internal_260348ed468a5f1be7fdc939a0ee44d5927d42ed9fd0dd71936600a6d905c151($context, array $blocks = array())
    {
        echo "<!-- The form -->
<form data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" value=\"15\" name=\"value1\">
    <select name=\"operation\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" value=\"5\" name=\"value2\">
    <button type=\"submit\">Calculate</button>
</form>

<!-- The result -->
<div id=\"result\">";
        // line 23
        echo "{% partial \"calcresult\" %}";
        echo "</div>
";
    }

    // line 32
    public function block___internal_d78580aed7135bb11e8b45643e792f7f8ee3e34564a425c82dceff256ca53369($context, array $blocks = array())
    {
        // line 33
        echo "{% if result %}";
        echo "
    The result is ";
        // line 34
        echo "{{ result }}";
        echo ".
";
        // line 35
        echo "{% else %}";
        echo "
    Click the <em>Calculate</em> button to find the answer.
";
        // line 37
        echo "{% endif %}";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\firefly/themes/demo/partials/explain/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  112 => 35,  108 => 34,  104 => 33,  101 => 32,  95 => 23,  77 => 9,  45 => 37,  43 => 32,  33 => 24,  31 => 9,  21 => 1,);
    }
}
/* <hr />*/
/* */
/* <!-- This file is an explanation of the AJAX page -->*/
/* */
/* <p class="lead">*/
/*     <i class="icon-copy"></i> &nbsp; The HTML markup for this example:*/
/* </p>*/
/* */
/* <pre>{% filter escape %}<!-- The form -->*/
/* <form data-request="onTest" data-request-update="calcresult: '#result'">*/
/*     <input type="text" value="15" name="value1">*/
/*     <select name="operation">*/
/*         <option>+</option>*/
/*         <option>-</option>*/
/*         <option>*</option>*/
/*         <option>/</option>*/
/*     </select>*/
/*     <input type="text" value="5" name="value2">*/
/*     <button type="submit">Calculate</button>*/
/* </form>*/
/* */
/* <!-- The result -->*/
/* <div id="result">{{ "{% partial \"calcresult\" %}" }}</div>*/
/* {% endfilter %}</pre>*/
/* */
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-tags"></i> &nbsp; The <code>calcresult</code> partial:*/
/* </p>*/
/* */
/* <pre>{% filter escape %}*/
/* {{ "{% if result %}" }}*/
/*     The result is {{ "{{ result }}" }}.*/
/* {{ "{% else %}" }}*/
/*     Click the <em>Calculate</em> button to find the answer.*/
/* {{ "{% endif %}" }}{% endfilter %}</pre>*/
/* */
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-code"></i> &nbsp; The <code>onTest</code> PHP code:*/
/* </p>*/
/* */
/* <pre>function onTest()*/
/* {*/
/*     $value1 = post('value1');*/
/*     $value2 = post('value2');*/
/*     $operation = post('operation');*/
/* */
/*     switch ($operation) {*/
/*         case '+' : */
/*             $this['result'] = $value1 + $value2;*/
/*             break;*/
/*         case '-' : */
/*             $this['result'] = $value1 - $value2;*/
/*             break;*/
/*         case '*' : */
/*             $this['result'] = $value1 * $value2;*/
/*             break;*/
/*         default : */
/*             $this['result'] = $value1 / $value2;*/
/*             break;*/
/*     }*/
/* }</pre>*/
