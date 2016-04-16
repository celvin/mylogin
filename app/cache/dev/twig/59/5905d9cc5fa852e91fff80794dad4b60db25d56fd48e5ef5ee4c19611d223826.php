<?php

/* :user:show.html.twig */
class __TwigTemplate_1c1e6df567d15f45e591653a9837d7100e8872c490427bf3032091d47536aa72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2eca8785bfdeef481b4cb29bd6f66c1efdbf3d3be20c0723f1eaa2248cabd3c = $this->env->getExtension("native_profiler");
        $__internal_b2eca8785bfdeef481b4cb29bd6f66c1efdbf3d3be20c0723f1eaa2248cabd3c->enter($__internal_b2eca8785bfdeef481b4cb29bd6f66c1efdbf3d3be20c0723f1eaa2248cabd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2eca8785bfdeef481b4cb29bd6f66c1efdbf3d3be20c0723f1eaa2248cabd3c->leave($__internal_b2eca8785bfdeef481b4cb29bd6f66c1efdbf3d3be20c0723f1eaa2248cabd3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b94a33ccd4018ee1dca93e0ae847246b320626d1ff7d6f3853c4de1d8262200 = $this->env->getExtension("native_profiler");
        $__internal_0b94a33ccd4018ee1dca93e0ae847246b320626d1ff7d6f3853c4de1d8262200->enter($__internal_0b94a33ccd4018ee1dca93e0ae847246b320626d1ff7d6f3853c4de1d8262200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Facebookid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "facebookID", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fullname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phoneNumber", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdatetime</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createDatetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createDatetime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updatedatetime</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "updateDatetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "updateDatetime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Lastlogindatetime</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLoginDatetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLoginDatetime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fullyfilled</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullyFilled", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Profilepicture</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "profilePicture", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("userlocal_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("userlocal_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0b94a33ccd4018ee1dca93e0ae847246b320626d1ff7d6f3853c4de1d8262200->leave($__internal_0b94a33ccd4018ee1dca93e0ae847246b320626d1ff7d6f3853c4de1d8262200_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 57,  136 => 55,  130 => 52,  124 => 49,  114 => 42,  103 => 38,  94 => 34,  85 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ user.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Facebookid</th>*/
/*                 <td>{{ user.facebookID }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fullname</th>*/
/*                 <td>{{ user.fullName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Phonenumber</th>*/
/*                 <td>{{ user.phoneNumber }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Createdatetime</th>*/
/*                 <td>{% if user.createDatetime %}{{ user.createDatetime|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updatedatetime</th>*/
/*                 <td>{% if user.updateDatetime %}{{ user.updateDatetime|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastlogindatetime</th>*/
/*                 <td>{% if user.lastLoginDatetime %}{{ user.lastLoginDatetime|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fullyfilled</th>*/
/*                 <td>{% if user.fullyFilled %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Profilepicture</th>*/
/*                 <td>{{ user.profilePicture }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('userlocal_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('userlocal_edit', { 'id': user.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
