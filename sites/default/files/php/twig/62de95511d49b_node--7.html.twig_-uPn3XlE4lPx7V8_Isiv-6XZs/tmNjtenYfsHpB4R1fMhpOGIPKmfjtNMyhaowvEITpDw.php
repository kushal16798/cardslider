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

/* themes/custom/subtheme/templates/node--7.html.twig */
class __TwigTemplate_6652a58e7ae46ae1d2afffa2acb6b46999e14929a49cc07e7d9ab091bfeb3a2b extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/node"), "html", null, true);
        echo "

";
        // line 65
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "bundle", [], "any", false, false, true, 67), 67, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 68)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 69)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 70)) ? ("node--unpublished") : ("")), 5 => ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 71, $this->source)))) : ("")), 6 => "clearfix"];
        // line 75
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
        echo ">

<!-- Tabs navs -->
<ul class=\"flag nav nav-tabs nav-justified mb-3\" id=\"ex1\" role=\"tablist\">
  <li class=\"nav-item\" role=\"presentation\">
    <a
      class=\"nav-link active\"
      id=\"ex3-tab-1\"
      data-bs-toggle=\"tab\"
      href=\"#ex3-tabs-1\"
      role=\"tab\"
      aria-controls=\"ex3-tabs-1\"
      aria-selected=\"true\"
      >Recommended Conferences</a
    >
  </li>
  <li class=\"nav-item\" role=\"presentation\">
    <a
      class=\"nav-link\"
      id=\"ex3-tab-2\"
      data-bs-toggle=\"tab\"
      href=\"#ex3-tabs-2\"
      role=\"tab\"
      aria-controls=\"ex3-tabs-2\"
      aria-selected=\"false\"
      >Past Conferences</a
    >
  </li>
  <li class=\"nav-item\" role=\"presentation\">
    <a
      class=\"nav-link\"
      id=\"ex3-tab-3\"
      data-bs-toggle=\"tab\"
      href=\"#ex3-tabs-3\"
      role=\"tab\"
      aria-controls=\"ex3-tabs-3\"
      aria-selected=\"false\"
      >Featured Conferences</a
    >
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class=\"tab-content\" id=\"ex2-content\">
  <div
    class=\"tab-pane fade show active\"
    id=\"ex3-tabs-1\"
    role=\"tabpanel\"
    aria-labelledby=\"ex3-tab-1\"
  >
    ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("slider2", "block_2"), "html", null, true);
        echo "
  </div>
  <div
    class=\"tab-pane fade\"
    id=\"ex3-tabs-2\"
    role=\"tabpanel\"
    aria-labelledby=\"ex3-tab-2\"
  >
    ";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("slider2", "block_3"), "html", null, true);
        echo "
  </div>
  <div
    class=\"tab-pane fade\"
    id=\"ex3-tabs-3\"
    role=\"tabpanel\"
    aria-labelledby=\"ex3-tab-3\"
  >
    ";
        // line 142
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("slider2", "block_4"), "html", null, true);
        echo "
  </div>
</div>
<!-- Tabs content -->



  ";
        // line 173
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/subtheme/templates/node--7.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 173,  128 => 142,  117 => 134,  106 => 126,  51 => 75,  49 => 71,  48 => 70,  47 => 69,  46 => 68,  45 => 67,  44 => 65,  39 => 62,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Barrio's theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}
{{ attach_library('bootstrap_barrio/node') }}

{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'clearfix',
  ]
%}
<article{{ attributes.addClass(classes) }}>

<!-- Tabs navs -->
<ul class=\"flag nav nav-tabs nav-justified mb-3\" id=\"ex1\" role=\"tablist\">
  <li class=\"nav-item\" role=\"presentation\">
    <a
      class=\"nav-link active\"
      id=\"ex3-tab-1\"
      data-bs-toggle=\"tab\"
      href=\"#ex3-tabs-1\"
      role=\"tab\"
      aria-controls=\"ex3-tabs-1\"
      aria-selected=\"true\"
      >Recommended Conferences</a
    >
  </li>
  <li class=\"nav-item\" role=\"presentation\">
    <a
      class=\"nav-link\"
      id=\"ex3-tab-2\"
      data-bs-toggle=\"tab\"
      href=\"#ex3-tabs-2\"
      role=\"tab\"
      aria-controls=\"ex3-tabs-2\"
      aria-selected=\"false\"
      >Past Conferences</a
    >
  </li>
  <li class=\"nav-item\" role=\"presentation\">
    <a
      class=\"nav-link\"
      id=\"ex3-tab-3\"
      data-bs-toggle=\"tab\"
      href=\"#ex3-tabs-3\"
      role=\"tab\"
      aria-controls=\"ex3-tabs-3\"
      aria-selected=\"false\"
      >Featured Conferences</a
    >
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class=\"tab-content\" id=\"ex2-content\">
  <div
    class=\"tab-pane fade show active\"
    id=\"ex3-tabs-1\"
    role=\"tabpanel\"
    aria-labelledby=\"ex3-tab-1\"
  >
    {{ drupal_view('slider2', 'block_2') }}
  </div>
  <div
    class=\"tab-pane fade\"
    id=\"ex3-tabs-2\"
    role=\"tabpanel\"
    aria-labelledby=\"ex3-tab-2\"
  >
    {{ drupal_view('slider2', 'block_3') }}
  </div>
  <div
    class=\"tab-pane fade\"
    id=\"ex3-tabs-3\"
    role=\"tabpanel\"
    aria-labelledby=\"ex3-tab-3\"
  >
    {{ drupal_view('slider2', 'block_4') }}
  </div>
</div>
<!-- Tabs content -->



  {# <header>
    {{ title_prefix }}
    {{ drupal_view('slider2', 'block_2') }}
    {% if label and not page %}
      <h2{{ title_attributes.addClass('node__title') }}>
        <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
      </h2>
    {% endif %}
    {{ title_suffix }}
    {% if display_submitted %}
      <div class=\"node__meta\">
        {{ author_picture }}
        {% block submitted %}
          <em{{ author_attributes }}>
            {% trans %}Submitted by Kushal{{ author_name }} on {{ date }}{% endtrans %}
          </em>
        {% endblock %}
        {{ metadata }}
      </div>
    {% endif %}
  </header>
  <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
    {{ content }}
  </div> #}
</article>
", "themes/custom/subtheme/templates/node--7.html.twig", "/app/themes/custom/subtheme/templates/node--7.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 65);
        static $filters = array("escape" => 62, "clean_class" => 67);
        static $functions = array("attach_library" => 62, "drupal_view" => 126);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'clean_class'],
                ['attach_library', 'drupal_view']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
