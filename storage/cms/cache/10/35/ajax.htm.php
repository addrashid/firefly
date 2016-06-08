<?php 
class Cms5757ac7bf22ac_1388112370Class extends \Cms\Classes\PageCode
{
public function onTest()
{
    $value1 = post('value1');
    $value2 = post('value2');
    $operation = post('operation');

    switch ($operation) {
        case '+' :
            $this['result'] = $value1 + $value2;
            break;
        case '-' :
            $this['result'] = $value1 - $value2;
            break;
        case '*' :
            $this['result'] = $value1 * $value2;
            break;
        default :
            $this['result'] = $value1 / $value2;
            break;
    }
}

}
