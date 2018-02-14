<?php

/* default/startPage.html.twig */
class __TwigTemplate_6251cd9f36044a8388c1fea6fd829137522a19d820f333826a8b83189b70a15a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/startPage.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "My_Crowdin Project";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <center>
      <p>
       Welcome to my_crowdin project
      </p>

      <p>
          <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">LOGIN</a>
      </p>

      <p>
        Would you like to be part of our amazing community of devoted translaters ? </br>
      </p>

      <p>
      Don&#145t hesitate and join us now !
      </p>

      <p>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">REGISTER</a>

      </p>

    </center>
";
    }

    public function getTemplateName()
    {
        return "default/startPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/startPage.html.twig", "/Users/walid/Documents/Crowdin/git/crowdin/app/Resources/views/default/startPage.html.twig");
    }
}
