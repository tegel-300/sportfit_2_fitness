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

/* evenement/users_stats.html.twig */
class __TwigTemplate_81273c49b353919bff731562d15778d9d9f92add2f5812c2248a30c84202ffc5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/users_stats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/users_stats.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "evenement/users_stats.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\"
      integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\" >
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1 style=\"background-color: #ACFF65\"><center>evenement  les plus Aimée</center></h1>
    <canvas id=\"evenement\" width=\"400\" height=\"100\"></canvas>

    <h1 style=\"background-color: #6c757d\"><center>evenement les moins Aimés</center></h1>
    <canvas id=\"evenementmoins\" width=\"400\" height=\"100\"></canvas>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>

    <script>
        let evenement = document.querySelector(\"#evenement\")
        let graph = new Chart(evenement, {
            type: \"polarArea\",
            data: {
                labels: ";
        // line 23
        echo (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 23, $this->source); })());
        echo ",
                datasets: [{
                    label:'Evenement les plus aimés',
                    data: ";
        // line 26
        echo (isset($context["likes"]) || array_key_exists("likes", $context) ? $context["likes"] : (function () { throw new RuntimeError('Variable "likes" does not exist.', 26, $this->source); })());
        echo ",
                    borderColor: 'red',
                    backgroundColor:['green','blue','yellow','purple','red','orange']

                }]
                    // {
                    //     label: 'Nombre de de\"j\\'aime\"',
                    //     data:[14,2,5,8,7,22],
                    //     backgroundColor:['lightred','gold','lightyellow','pink','lightblue','lightgreen']
                    //
                    // }]

            },
             options: {
                title: {
                    display: true,
                    text:'graphe des likes'},
                legend:{
                    position:'bottom'
                }
            //     scales: {
            //         yAxes: [{
            //             ticks: {
            //                 beginAtZero: true
            //             }
            //         }]
            //     }
            }


        })
        let evenementmoins = document.querySelector(\"#evenementmoins\")
        let categGraph1 = new Chart(evenementmoins, {
            type: \"pie\",
            data: {
                labels: ";
        // line 61
        echo (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 61, $this->source); })());
        echo ",
                datasets: [{
                    label: \"Les Evenement les moins aimés\",
                    data: ";
        // line 64
        echo (isset($context["unlike"]) || array_key_exists("unlike", $context) ? $context["unlike"] : (function () { throw new RuntimeError('Variable "unlike" does not exist.', 64, $this->source); })());
        echo ",
                    backgroundColor: ['red', 'green','yellow','purple','blue']
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'graphe des Unlikes'
                },
                legend: {
                    position: 'bottom'
                }
            }
        })

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenement/users_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 64,  170 => 61,  132 => 26,  126 => 23,  117 => 16,  107 => 15,  92 => 7,  82 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\"
      integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\" >
{% endblock %}
{% block body %}
    <h1 style=\"background-color: #ACFF65\"><center>evenement  les plus Aimée</center></h1>
    <canvas id=\"evenement\" width=\"400\" height=\"100\"></canvas>

    <h1 style=\"background-color: #6c757d\"><center>evenement les moins Aimés</center></h1>
    <canvas id=\"evenementmoins\" width=\"400\" height=\"100\"></canvas>
{% endblock %}


{% block javascripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>

    <script>
        let evenement = document.querySelector(\"#evenement\")
        let graph = new Chart(evenement, {
            type: \"polarArea\",
            data: {
                labels: {{ nom|raw }},
                datasets: [{
                    label:'Evenement les plus aimés',
                    data: {{likes|raw }},
                    borderColor: 'red',
                    backgroundColor:['green','blue','yellow','purple','red','orange']

                }]
                    // {
                    //     label: 'Nombre de de\"j\\'aime\"',
                    //     data:[14,2,5,8,7,22],
                    //     backgroundColor:['lightred','gold','lightyellow','pink','lightblue','lightgreen']
                    //
                    // }]

            },
             options: {
                title: {
                    display: true,
                    text:'graphe des likes'},
                legend:{
                    position:'bottom'
                }
            //     scales: {
            //         yAxes: [{
            //             ticks: {
            //                 beginAtZero: true
            //             }
            //         }]
            //     }
            }


        })
        let evenementmoins = document.querySelector(\"#evenementmoins\")
        let categGraph1 = new Chart(evenementmoins, {
            type: \"pie\",
            data: {
                labels: {{ nom|raw }},
                datasets: [{
                    label: \"Les Evenement les moins aimés\",
                    data: {{ unlike|raw }},
                    backgroundColor: ['red', 'green','yellow','purple','blue']
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'graphe des Unlikes'
                },
                legend: {
                    position: 'bottom'
                }
            }
        })

    </script>
{% endblock %}

", "evenement/users_stats.html.twig", "C:\\wamp64\\www\\FirstProject - Copie\\templates\\evenement\\users_stats.html.twig");
    }
}
