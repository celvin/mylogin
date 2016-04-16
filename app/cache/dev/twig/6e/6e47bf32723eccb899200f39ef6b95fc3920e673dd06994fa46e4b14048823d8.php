<?php

/* :user:index.html.twig */
class __TwigTemplate_a02d6168460d99fffba91acf56f6913f398b00c99597e4ac1aa5f7c4e0d3e28f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:index.html.twig", 1);
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
        $__internal_5bcee64803b00671e69e3c49083108694ca77c8c64942ecd32ca0e3248c3fca6 = $this->env->getExtension("native_profiler");
        $__internal_5bcee64803b00671e69e3c49083108694ca77c8c64942ecd32ca0e3248c3fca6->enter($__internal_5bcee64803b00671e69e3c49083108694ca77c8c64942ecd32ca0e3248c3fca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bcee64803b00671e69e3c49083108694ca77c8c64942ecd32ca0e3248c3fca6->leave($__internal_5bcee64803b00671e69e3c49083108694ca77c8c64942ecd32ca0e3248c3fca6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f01aae998c15f02ea8ef20152a7c33a98c5c52b4e06ba6e97612f5b9a6d17e03 = $this->env->getExtension("native_profiler");
        $__internal_f01aae998c15f02ea8ef20152a7c33a98c5c52b4e06ba6e97612f5b9a6d17e03->enter($__internal_f01aae998c15f02ea8ef20152a7c33a98c5c52b4e06ba6e97612f5b9a6d17e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Facebookid</th>
                <th>Fullname</th>
                <th>Phonenumber</th>
                <th>Createdatetime</th>
                <th>Updatedatetime</th>
                <th>Lastlogindatetime</th>
                <th>Fullyfilled</th>
                <th>Profilepicture</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("userlocal_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "facebookID", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "fullName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phoneNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["user"], "createDatetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createDatetime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["user"], "updateDatetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updateDatetime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["user"], "lastLoginDatetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLoginDatetime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["user"], "fullyFilled", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "profilePicture", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("userlocal_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("userlocal_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("userlocal_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_f01aae998c15f02ea8ef20152a7c33a98c5c52b4e06ba6e97612f5b9a6d17e03->leave($__internal_f01aae998c15f02ea8ef20152a7c33a98c5c52b4e06ba6e97612f5b9a6d17e03_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 50,  136 => 45,  124 => 39,  118 => 36,  111 => 32,  103 => 31,  97 => 30,  91 => 29,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Facebookid</th>*/
/*                 <th>Fullname</th>*/
/*                 <th>Phonenumber</th>*/
/*                 <th>Createdatetime</th>*/
/*                 <th>Updatedatetime</th>*/
/*                 <th>Lastlogindatetime</th>*/
/*                 <th>Fullyfilled</th>*/
/*                 <th>Profilepicture</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('userlocal_show', { 'id': user.id }) }}">{{ user.id }}</a></td>*/
/*                 <td>{{ user.facebookID }}</td>*/
/*                 <td>{{ user.fullName }}</td>*/
/*                 <td>{{ user.phoneNumber }}</td>*/
/*                 <td>{% if user.createDatetime %}{{ user.createDatetime|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if user.updateDatetime %}{{ user.updateDatetime|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if user.lastLoginDatetime %}{{ user.lastLoginDatetime|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if user.fullyFilled %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ user.profilePicture }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('userlocal_show', { 'id': user.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('userlocal_edit', { 'id': user.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('userlocal_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
