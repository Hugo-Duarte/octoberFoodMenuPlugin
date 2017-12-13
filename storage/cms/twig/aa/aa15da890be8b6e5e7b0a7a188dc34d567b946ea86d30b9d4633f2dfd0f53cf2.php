<?php

/* /home/vagrant/Projects/october/themes/olympos/layouts/fallback.htm */
class __TwigTemplate_a3ab2238e61ebd0c92945466a356deec3980d3084ce2071b68be75c6feb83ad8 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Projects/october/themes/olympos/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/home/vagrant/Projects/october/themes/olympos/layouts/fallback.htm", "");
    }
}
