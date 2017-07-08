<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_0b17c9c4674428ccc0489d8e94e7da7df05149921fb1cb70d33e31bfaa849b1c extends Twig_Template
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
        echo "<div class=\"block-exception\">
    <div class=\"block-exception-detected clear-fix\">
        <div class=\"support\">
            <a href=\"http://symfony.com/support\">Need support?</a>
        </div>
        <div class=\"illustration-exception\">
            ";
        // line 7
        echo twig_include($this->env, $context, "@Twig/Exception/exception.svg");
        echo "
        </div>
        <div class=\"text-exception\">
            <div class=\"open-quote\">“</div>

            <h1>";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "message", array()), "html", null, true)));
        echo "</h1>

            <div>
                <strong>";
        // line 15
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "class", array()));
        echo "
            </div>

            ";
        // line 18
        $context["previous_count"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "allPrevious", array()));
        // line 19
        echo "            ";
        if (($context["previous_count"] ?? null)) {
            // line 20
            echo "                <div class=\"linked\"><span><strong>";
            echo twig_escape_filter($this->env, ($context["previous_count"] ?? null), "html", null, true);
            echo "</strong> linked Exception";
            echo (((($context["previous_count"] ?? null) > 1)) ? ("s") : (""));
            echo ":</span>
                    <ul>
                        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "allPrevious", array()));
            foreach ($context['_seq'] as $context["i"] => $context["previous"]) {
                // line 23
                echo "                            <li>
                                ";
                // line 24
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), $context["previous"], "class", array()));
                echo " <a href=\"#traces-link-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "\" onclick=\"toggle('traces-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "', 'traces'); switchIcons('icon-traces-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "-open', 'icon-traces-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "-close');\">&#187;</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['previous'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    </ul>
                </div>
            ";
        }
        // line 30
        echo "
            <div class=\"close-quote\">”</div>
        </div>
    </div>
</div>

";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "toarray", array()));
        foreach ($context['_seq'] as $context["position"] => $context["e"]) {
            // line 37
            echo "    ";
            $this->loadTemplate("@Twig/Exception/traces.html.twig", "TwigBundle:Exception:exception.html.twig", 37)->display(array("exception" => $context["e"], "position" => $context["position"], "count" => ($context["previous_count"] ?? null)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        // line 40
        if (($context["logger"] ?? null)) {
            // line 41
            echo "    <div class=\"block\">
        <div class=\"logs clear-fix\">
            ";
            // line 43
            ob_start();
            // line 44
            echo "            <h2>
                Logs&nbsp;
                <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon-logs-open', 'icon-logs-close'); return false;\">
                    <img class=\"toggle\" id=\"icon-logs-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: none\" />
                    <img class=\"toggle\" id=\"icon-logs-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: inline\" />
                </a>
            </h2>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 52
            echo "
            ";
            // line 53
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["logger"] ?? null), "counterrors", array())) {
                // line 54
                echo "                <div class=\"error-count\">
                    <span>
                        ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["logger"] ?? null), "counterrors", array()), "html", null, true);
                echo " error";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["logger"] ?? null), "counterrors", array()) > 1)) ? ("s") : (""));
                echo "
                    </span>
                </div>
            ";
            }
            // line 60
            echo "        </div>

        <div id=\"logs\">
            ";
            // line 63
            $this->loadTemplate("@Twig/Exception/logs.html.twig", "TwigBundle:Exception:exception.html.twig", 63)->display(array("logs" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["logger"] ?? null), "logs", array())));
            // line 64
            echo "        </div>
    </div>
";
        }
        // line 67
        echo "
";
        // line 68
        if (($context["currentContent"] ?? null)) {
            // line 69
            echo "    <div class=\"block\">
        ";
            // line 70
            ob_start();
            // line 71
            echo "        <h2>
            Content of the Output&nbsp;
            <a href=\"#\" onclick=\"toggle('output-content'); switchIcons('icon-content-open', 'icon-content-close'); return false;\">
                <img class=\"toggle\" id=\"icon-content-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
                <img class=\"toggle\" id=\"icon-content-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
            </a>
        </h2>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 79
            echo "
        <div id=\"output-content\" style=\"display: none\">
            ";
            // line 81
            echo twig_escape_filter($this->env, ($context["currentContent"] ?? null), "html", null, true);
            echo "
        </div>

        <div style=\"clear: both\"></div>
    </div>
";
        }
        // line 87
        echo "
";
        // line 88
        $this->loadTemplate("@Twig/Exception/traces_text.html.twig", "TwigBundle:Exception:exception.html.twig", 88)->display(array("exception" => ($context["exception"] ?? null)));
        // line 89
        echo "
<script type=\"text/javascript\">//<![CDATA[
    function toggle(id, clazz) {
        var el = document.getElementById(id),
            current = el.style.display,
            i;

        if (clazz) {
            var tags = document.getElementsByTagName('*');
            for (i = tags.length - 1; i >= 0; i--) {
                if (tags[i].className === clazz) {
                    tags[i].style.display = 'none';
                }
            }
        }

        el.style.display = current === 'none' ? 'block' : 'none';
    }

    function switchIcons(id1, id2) {
        var icon1, icon2, display1, display2;

        icon1 = document.getElementById(id1);
        icon2 = document.getElementById(id2);

        display1 = icon1.style.display;
        display2 = icon2.style.display;

        icon1.style.display = display2;
        icon2.style.display = display1;
    }
//]]></script>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 89,  199 => 88,  196 => 87,  187 => 81,  183 => 79,  173 => 71,  171 => 70,  168 => 69,  166 => 68,  163 => 67,  158 => 64,  156 => 63,  151 => 60,  142 => 56,  138 => 54,  136 => 53,  133 => 52,  123 => 44,  121 => 43,  117 => 41,  115 => 40,  112 => 39,  105 => 37,  101 => 36,  93 => 30,  88 => 27,  71 => 24,  68 => 23,  64 => 22,  56 => 20,  53 => 19,  51 => 18,  41 => 15,  35 => 12,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:exception.html.twig", "/var/www/REDEXPERT/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.html.twig");
    }
}
