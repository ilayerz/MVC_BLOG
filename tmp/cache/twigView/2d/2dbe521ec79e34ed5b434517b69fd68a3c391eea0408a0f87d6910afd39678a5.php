<?php

/* C:\wamp64\www\Projets_MVC_Blog\cakephp2\vendor\cakephp\bake\src\Template\Bake\Form\form.twig */
class __TwigTemplate_b3950a95ed2048ac67dc9322e160231980d1b98950d46fa438d73f394e3ef295 extends Twig_Template
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
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\wamp64\\www\\Projets_MVC_Blog\\cakephp2\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Form\\form.twig"));

        // line 16
        echo "<?php
namespace ";
        // line 17
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "\\Form;

use Cake\\Form\\Form;
use Cake\\Form\\Schema;
use Cake\\Validation\\Validator;

/**
 * ";
        // line 24
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " Form.
 */
class ";
        // line 26
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "Form extends Form
{
    /**
     * Builds the schema for the modelless form
     *
     * @param \\Cake\\Form\\Schema \$schema From schema
     * @return \\Cake\\Form\\Schema
     */
    protected function _buildSchema(Schema \$schema)
    {
        return \$schema;
    }

    /**
     * Form validation builder
     *
     * @param \\Cake\\Validation\\Validator \$validator to use against the form
     * @return \\Cake\\Validation\\Validator
     */
    protected function _buildValidator(Validator \$validator)
    {
        return \$validator;
    }

    /**
     * Defines what to execute once the From is being processed
     *
     * @param array \$data Form data.
     * @return bool
     */
    protected function _execute(array \$data)
    {
        return true;
    }
}
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\Projets_MVC_Blog\\cakephp2\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Form\\form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 26,  35 => 24,  25 => 17,  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @since         2.0.0
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/
#}
<?php
namespace {{ namespace }}\\Form;

use Cake\\Form\\Form;
use Cake\\Form\\Schema;
use Cake\\Validation\\Validator;

/**
 * {{ name }} Form.
 */
class {{ name }}Form extends Form
{
    /**
     * Builds the schema for the modelless form
     *
     * @param \\Cake\\Form\\Schema \$schema From schema
     * @return \\Cake\\Form\\Schema
     */
    protected function _buildSchema(Schema \$schema)
    {
        return \$schema;
    }

    /**
     * Form validation builder
     *
     * @param \\Cake\\Validation\\Validator \$validator to use against the form
     * @return \\Cake\\Validation\\Validator
     */
    protected function _buildValidator(Validator \$validator)
    {
        return \$validator;
    }

    /**
     * Defines what to execute once the From is being processed
     *
     * @param array \$data Form data.
     * @return bool
     */
    protected function _execute(array \$data)
    {
        return true;
    }
}
", "C:\\wamp64\\www\\Projets_MVC_Blog\\cakephp2\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Form\\form.twig", "C:\\wamp64\\www\\Projets_MVC_Blog\\cakephp2\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Form\\form.twig");
    }
}
