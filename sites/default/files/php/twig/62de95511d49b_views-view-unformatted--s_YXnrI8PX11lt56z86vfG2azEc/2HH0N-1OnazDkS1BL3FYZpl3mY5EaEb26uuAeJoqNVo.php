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

/* themes/custom/subtheme/templates/views-view-unformatted--slider2--block-4.html.twig */
class __TwigTemplate_73a7e04bd1ed068fdc0eafab1ca2e5d96ec8bb43fdfde1c6e09c96c37a802cd6 extends \Twig\Template
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
        // line 18
        if (($context["title"] ?? null)) {
            // line 19
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 19, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 21
        echo "<div class=\"slicktest\">
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 23
            echo "  ";
            // line 31
            echo "  <div>
  <div class=\"card\" style=\"width: 20rem;\">
    <img src=\"";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 33), "getField", [0 => $context["key"], 1 => "field_slider_image"], "method", false, false, true, 33), 33, $this->source))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
    ";
            // line 35
            echo "    <div class=\"card-body\">
      <h3 class=\"cardhead\">";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 36), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "</h3>
      <h3 class=\"cardhead\">Conference 2016</h3>
      <i class=\"bi bi-tags-fill gray-light pe-2\"></i><span class=\"text-secondary bold\">Management, Leadership</span><br>
      <i class=\"bi bi bi-calendar3 gray-light pe-2\"></i><span class=\"text-secondary bold\">11 May 2016</span><br>
      <i class=\"bi bi bi-geo-alt-fill text-danger pe-2\"></i><span class=\"text-secondary bold\">Park Plaza Hotel, Bangalore, India</span><br>
      
    </div>
    <div class=\"card-foot border-top\">
      <i class=\"bi bi-cloud-arrow-down gray-light px-3 footer-icon border-right\"></i>
      <i class=\"bi bi-heart gray-light px-3 footer-icon border-right\"></i>
      <i class=\"bi bi-share-fill gray-light px-3 footer-icon border-right\"></i>
      <span class=\"cardhead text-primary ps-2\" style=\"margin-left: 5px;\">View Details</span>
    </div>
  </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/subtheme/templates/views-view-unformatted--slider2--block-4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 52,  67 => 36,  64 => 35,  60 => 33,  56 => 31,  54 => 23,  50 => 22,  47 => 21,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
<div class=\"slicktest\">
{% for key,row in rows %}
  {# {%
    set row_classes = [
      default_row_class ? 'views-row',
    ]
  %}
  <div{{ row.attributes.addClass(row_classes) }}>
    {{ row.content }}
  </div> #}
  <div>
  <div class=\"card\" style=\"width: 20rem;\">
    <img src=\"{{ view.style_plugin.getField(key, 'field_slider_image')|striptags|trim }}\" class=\"card-img-top\" alt=\"...\">
    {# {{ view.style_plugin.getField(key, 'field_slider_image') }} #}
    <div class=\"card-body\">
      <h3 class=\"cardhead\">{{ view.style_plugin.getField(key, 'title') }}</h3>
      <h3 class=\"cardhead\">Conference 2016</h3>
      <i class=\"bi bi-tags-fill gray-light pe-2\"></i><span class=\"text-secondary bold\">Management, Leadership</span><br>
      <i class=\"bi bi bi-calendar3 gray-light pe-2\"></i><span class=\"text-secondary bold\">11 May 2016</span><br>
      <i class=\"bi bi bi-geo-alt-fill text-danger pe-2\"></i><span class=\"text-secondary bold\">Park Plaza Hotel, Bangalore, India</span><br>
      
    </div>
    <div class=\"card-foot border-top\">
      <i class=\"bi bi-cloud-arrow-down gray-light px-3 footer-icon border-right\"></i>
      <i class=\"bi bi-heart gray-light px-3 footer-icon border-right\"></i>
      <i class=\"bi bi-share-fill gray-light px-3 footer-icon border-right\"></i>
      <span class=\"cardhead text-primary ps-2\" style=\"margin-left: 5px;\">View Details</span>
    </div>
  </div>
  </div>
{% endfor %}
</div>", "themes/custom/subtheme/templates/views-view-unformatted--slider2--block-4.html.twig", "/app/themes/custom/subtheme/templates/views-view-unformatted--slider2--block-4.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "for" => 22);
        static $filters = array("escape" => 19, "trim" => 33, "striptags" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'trim', 'striptags'],
                []
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
