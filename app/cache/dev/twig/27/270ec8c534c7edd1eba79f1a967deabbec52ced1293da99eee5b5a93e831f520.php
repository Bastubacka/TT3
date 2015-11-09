<?php

/* base.html.twig */
class __TwigTemplate_c21a5e997628817722399955e822cbe04ecec3aa0b50f07b6af6aea89417d1b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b61058dd0be0e15f8885fd381f279be3dba941993c67b0243e6fa104d94d510 = $this->env->getExtension("native_profiler");
        $__internal_6b61058dd0be0e15f8885fd381f279be3dba941993c67b0243e6fa104d94d510->enter($__internal_6b61058dd0be0e15f8885fd381f279be3dba941993c67b0243e6fa104d94d510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6b61058dd0be0e15f8885fd381f279be3dba941993c67b0243e6fa104d94d510->leave($__internal_6b61058dd0be0e15f8885fd381f279be3dba941993c67b0243e6fa104d94d510_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_522a770296eca46c6f7ac80adf286395ae445adf97e8410fa162ab87eff857e9 = $this->env->getExtension("native_profiler");
        $__internal_522a770296eca46c6f7ac80adf286395ae445adf97e8410fa162ab87eff857e9->enter($__internal_522a770296eca46c6f7ac80adf286395ae445adf97e8410fa162ab87eff857e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_522a770296eca46c6f7ac80adf286395ae445adf97e8410fa162ab87eff857e9->leave($__internal_522a770296eca46c6f7ac80adf286395ae445adf97e8410fa162ab87eff857e9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0475ebd10350b2fe4cc9b35598e0f7fcf95ee4b86d3723fdf17c493030afc312 = $this->env->getExtension("native_profiler");
        $__internal_0475ebd10350b2fe4cc9b35598e0f7fcf95ee4b86d3723fdf17c493030afc312->enter($__internal_0475ebd10350b2fe4cc9b35598e0f7fcf95ee4b86d3723fdf17c493030afc312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0475ebd10350b2fe4cc9b35598e0f7fcf95ee4b86d3723fdf17c493030afc312->leave($__internal_0475ebd10350b2fe4cc9b35598e0f7fcf95ee4b86d3723fdf17c493030afc312_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e72c55291192f95196fa4a5fd3a11d1c019692485d49c91881fb8e5300e938d = $this->env->getExtension("native_profiler");
        $__internal_2e72c55291192f95196fa4a5fd3a11d1c019692485d49c91881fb8e5300e938d->enter($__internal_2e72c55291192f95196fa4a5fd3a11d1c019692485d49c91881fb8e5300e938d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2e72c55291192f95196fa4a5fd3a11d1c019692485d49c91881fb8e5300e938d->leave($__internal_2e72c55291192f95196fa4a5fd3a11d1c019692485d49c91881fb8e5300e938d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d473a5e1b0c73a2f5504a5fb088d23c1ef06d03b1649248c3478056477edc94e = $this->env->getExtension("native_profiler");
        $__internal_d473a5e1b0c73a2f5504a5fb088d23c1ef06d03b1649248c3478056477edc94e->enter($__internal_d473a5e1b0c73a2f5504a5fb088d23c1ef06d03b1649248c3478056477edc94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d473a5e1b0c73a2f5504a5fb088d23c1ef06d03b1649248c3478056477edc94e->leave($__internal_d473a5e1b0c73a2f5504a5fb088d23c1ef06d03b1649248c3478056477edc94e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
