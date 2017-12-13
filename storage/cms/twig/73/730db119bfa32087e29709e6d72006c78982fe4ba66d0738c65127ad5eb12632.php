<?php

/* /home/vagrant/Projects/october/themes/demo/pages/about.htm */
class __TwigTemplate_e2b9844d4b89d737588639927bd8986ec6b17395193c301608a17127cd5c8d3b extends Twig_Template
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
        echo "<h1>This is our about page</h1>

<h2>Hello world</h2>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Projects/october/themes/demo/pages/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>This is our about page</h1>

<h2>Hello world</h2>", "/home/vagrant/Projects/october/themes/demo/pages/about.htm", "");
    }
}
