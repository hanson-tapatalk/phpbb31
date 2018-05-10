<?php

/* ucp_pm_message_footer.html */
class __TwigTemplate_cab4d476642f5596df945fcfaf0c9d320ed3aa81a256bb8acf0e2a3d702afc8e extends Twig_Template
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
        echo "<div>";
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "ucp_pm_message_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div>{S_FORM_TOKEN}</div>*/
/* </form>*/
/* */
