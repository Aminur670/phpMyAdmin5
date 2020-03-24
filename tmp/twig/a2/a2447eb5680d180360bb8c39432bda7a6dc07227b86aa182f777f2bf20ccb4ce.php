<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* login/header.twig */
class __TwigTemplate_d7bbdd58ba14b37105979d2c58d8b680b7a049d0db2a5dbd513db9076a50ad1b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((($context["session_expired"] ?? null) == true)) {
            // line 2
            echo "    <div id=\"modalOverlay\">
";
        }
        // line 4
        echo "<div class=\"container";
        echo twig_escape_filter($this->env, ($context["add_class"] ?? null), "html", null, true);
        echo "\">





<center>
<div style=\"
    border-radius: 100%;
    background: #ffffff;
    width: 200px;
    height: 200px;
    padding: 2%;
    padding-top: 25px;
    margin-top: 15px;
\">
<a href=\"https://github.com/Aminur670/phpmyadmin5\" target=\"_blank\">
 <img class=\"logo\" src=\"./themes/pmahomme/img/logo_right.png\" id=\"imLogo\" name=\"imLogo\" alt=\"phpMyAdmin\" border=\"0\" style=\"
    /* border: 2px solid #d2d2cb; */
    padding: 10px;
    border-radius: 10px;
    /* width: 204px; */
    /* height: 204px; */
    /* background: #0000007a; */
\">


 </div>

<h1>Welcome to <bdo dir=\"ltr\" lang=\"en\">phpMyAdmin</bdo></h1>
</a>
</center>




<noscript>
";
        // line 41
        echo call_user_func_array($this->env->getFilter('error')->getCallable(), [_gettext("Javascript must be enabled past this point!")]);
        echo "
</noscript>

<div class=\"hide\" id=\"js-https-mismatch\">
";
        // line 45
        echo call_user_func_array($this->env->getFilter('error')->getCallable(), [_gettext("There is a mismatch between HTTPS indicated on the server and client. This can lead to a non working phpMyAdmin or a security risk. Please fix your server configuration to indicate HTTPS properly.")]);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "login/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 45,  84 => 41,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/header.twig", "E:\\_laragon\\etc\\apps\\phpmyadmin\\templates\\login\\header.twig");
    }
}
