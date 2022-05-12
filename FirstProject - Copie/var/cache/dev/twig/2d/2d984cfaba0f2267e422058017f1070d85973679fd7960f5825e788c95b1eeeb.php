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

/* base-back.html.twig */
class __TwigTemplate_9a31bb74cf927264d8657c0a76f9f650587266253efba9375bf231cbf7d9f742 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        // line 1
        echo "
<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>

<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/apple-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/favicon.ico"), "html", null, true);
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
   ";
        // line 25
        $this->displayBlock('title', $context, $blocks);
        // line 26
        echo "    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700,200\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" />
    <!-- CSS Files -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/light-bootstrap-dashboard.css?v=2.0.0 "), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
</head>

<body>
<div class=\"wrapper\">
    <div class=\"sidebar\" data-image=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sidebar-5.jpg"), "html", null, true);
        echo "\">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color=\"purple | blue | green | orange | red\"

    Tip 2: you can also add an image using data-image tag
-->
        <div class=\"sidebar-wrapper\">
            <div class=\"logo\">
                <a href=\"http://www.creative-tim.com\" class=\"simple-text\">
                    Creative Tim
                </a>
            </div>
            <ul class=\"nav\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_back");
        echo "\">
                        <i class=\"nc-icon nc-chart-pie-35\"></i>
                        <p>Evenements</p>
                    </a>
                </li>

                <li>
                    <a class=\"nav-link\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_back");
        echo "\">
                        <i class=\"nc-icon nc-paper-2\"></i>
                        <p>Reservation</p>
                    </a>
                </li>
                <li>
                    <a class=\"nav-link\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statistique");
        echo "\">
                        <i class=\"nc-icon nc-circle-09\"></i>
                        <p>statitics</p>
                    </a>
                </li>
                <li>
                    <a class=\"nav-link\" href=\"./maps.html\">
                        <i class=\"nc-icon nc-pin-3\"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a class=\"nav-link\" href=\"./notifications.html\">
                        <i class=\"nc-icon nc-bell-55\"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class=\"nav-item active active-pro\">
                    <a class=\"nav-link active\" href=\"upgrade.html\">
                        <i class=\"nc-icon nc-alien-33\"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"main-panel\">

        <!-- Navbar -->
        <nav class=\"navbar navbar-expand-lg \" color-on-scroll=\"500\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#pablo\"> Dashboard </a>
                <button href=\"\" class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-bar burger-lines\"></span>
                    <span class=\"navbar-toggler-bar burger-lines\"></span>
                    <span class=\"navbar-toggler-bar burger-lines\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navigation\">
                    <ul class=\"nav navbar-nav mr-auto\">
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\" data-toggle=\"dropdown\">
                                <i class=\"nc-icon nc-palette\"></i>
                                <span class=\"d-lg-none\">Dashboard</span>
                            </a>
                        </li>
                        <li class=\"dropdown nav-item\">
                            <a href=\"#\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
                                <i class=\"nc-icon nc-planet\"></i>
                                <span class=\"notification\">5</span>
                                <span class=\"d-lg-none\">Notification</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"#\">Notification 1</a>
                                <a class=\"dropdown-item\" href=\"#\">Notification 2</a>
                                <a class=\"dropdown-item\" href=\"#\">Notification 3</a>
                                <a class=\"dropdown-item\" href=\"#\">Notification 4</a>
                                <a class=\"dropdown-item\" href=\"#\">Another notification</a>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                <i class=\"nc-icon nc-zoom-split\"></i>
                                <span class=\"d-lg-block\">&nbsp;Search</span>
                            </a>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#pablo\">
                                <span class=\"no-icon\">Account</span>
                            </a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"no-icon\">Dropdown</span>
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <a class=\"dropdown-item\" href=\"#\">Something</a>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                <div class=\"divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#pablo\">
                                <span class=\"no-icon\">Log out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        ";
        // line 160
        $this->displayBlock('body', $context, $blocks);
        // line 487
        echo "</body>
<!--   Core JS Files   -->

<script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/jquery.3.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\">
</script>
<script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/bootstrap-switch.js"), "html", null, true);
        echo "\"></script>
<!--  Google Maps Plugin    -->
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
<!--  Chartist Plugin  -->
<script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/chartist.min.js"), "html", null, true);
        echo "\"></script>
<!--  Notifications Plugin    -->
<script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/light-bootstrap-dashboard.js?v=2.0.0"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>
";
        // line 515
        $this->displayBlock('javascripts', $context, $blocks);
        // line 516
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " <title>Admin Sportfit_2_fitness </title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 161
        echo "        <!-- End Navbar -->
        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"card \">
                            <div class=\"card-header \">
                                <h4 class=\"card-title\">Email Statistics</h4>
                                <p class=\"card-category\">Last Campaign Performance</p>
                            </div>
                            <div class=\"card-body \">
                                <div id=\"chartPreferences\" class=\"ct-chart ct-perfect-fourth\"></div>
                                <div class=\"legend\">
                                    <i class=\"fa fa-circle text-info\"></i> Open
                                    <i class=\"fa fa-circle text-danger\"></i> Bounce
                                    <i class=\"fa fa-circle text-warning\"></i> Unsubscribe
                                </div>
                                <hr>
                                <div class=\"stats\">
                                    <i class=\"fa fa-clock-o\"></i> Campaign sent 2 days ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"card \">
                            <div class=\"card-header \">
                                <h4 class=\"card-title\">Users Behavior</h4>
                                <p class=\"card-category\">24 Hours performance</p>
                            </div>
                            <div class=\"card-body \">
                                <div id=\"chartHours\" class=\"ct-chart\"></div>
                            </div>
                            <div class=\"card-footer \">
                                <div class=\"legend\">
                                    <i class=\"fa fa-circle text-info\"></i> Open
                                    <i class=\"fa fa-circle text-danger\"></i> Click
                                    <i class=\"fa fa-circle text-warning\"></i> Click Second Time
                                </div>
                                <hr>
                                <div class=\"stats\">
                                    <i class=\"fa fa-history\"></i> Updated 3 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"card \">
                            <div class=\"card-header \">
                                <h4 class=\"card-title\">2017 Sales</h4>
                                <p class=\"card-category\">All products including Taxes</p>
                            </div>
                            <div class=\"card-body \">
                                <div id=\"chartActivity\" class=\"ct-chart\"></div>
                            </div>
                            <div class=\"card-footer \">
                                <div class=\"legend\">
                                    <i class=\"fa fa-circle text-info\"></i> Tesla Model S
                                    <i class=\"fa fa-circle text-danger\"></i> BMW 5 Series
                                </div>
                                <hr>
                                <div class=\"stats\">
                                    <i class=\"fa fa-check\"></i> Data information certified
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"card  card-tasks\">
                            <div class=\"card-header \">
                                <h4 class=\"card-title\">Tasks</h4>
                                <p class=\"card-category\">Backend development</p>
                            </div>
                            <div class=\"card-body \">
                                <div class=\"table-full-width\">
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class=\"form-check\">
                                                    <label class=\"form-check-label\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\">
                                                        <span class=\"form-check-sign\"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for \"What are conference organizers afraid of?\"</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-link\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-link\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check\">
                                                    <label class=\"form-check-label\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" checked>
                                                        <span class=\"form-check-sign\"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-link\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-link\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check\">
                                                    <label class=\"form-check-label\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" checked>
                                                        <span class=\"form-check-sign\"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-link\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-link\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check\">
                                                    <label class=\"form-check-label\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" checked>
                                                        <span class=\"form-check-sign\"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-link\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-link\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check\">
                                                    <label class=\"form-check-label\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\">
                                                        <span class=\"form-check-sign\"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Read \"Following makes Medium better\"</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-link\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-link\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check\">
                                                    <label class=\"form-check-label\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" disabled>
                                                        <span class=\"form-check-sign\"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Unfollow 5 enemies from twitter</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-link\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-link\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class=\"card-footer \">
                                <hr>
                                <div class=\"stats\">
                                    <i class=\"now-ui-icons loader_refresh spin\"></i> Updated 3 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class=\"footer\">
            <div class=\"container-fluid\">
                <nav>
                    <ul class=\"footer-menu\">
                        <li>
                            <a href=\"#\">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Blog
                            </a>
                        </li>
                    </ul>
                    <p class=\"copyright text-center\">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href=\"http://www.creative-tim.com\">Creative Tim</a>, made with love for a better web
                    </p>
                </nav>
            </div>
        </footer>
    </div>
</div>
<!--   -->
<!-- <div class=\"fixed-plugin\">
<div class=\"dropdown show-dropdown\">
    <a href=\"#\" data-toggle=\"dropdown\">
        <i class=\"fa fa-cog fa-2x\"> </i>
    </a>

    <ul class=\"dropdown-menu\">
        <li class=\"header-title\"> Sidebar Style</li>
        <li class=\"adjustments-line\">
            <a href=\"javascript:void(0)\" class=\"switch-trigger\">
                <p>Background Image</p>
                <label class=\"switch\">
                    <input type=\"checkbox\" data-toggle=\"switch\" checked=\"\" data-on-color=\"primary\" data-off-color=\"primary\"><span class=\"toggle\"></span>
                </label>
                <div class=\"clearfix\"></div>
            </a>
        </li>
        <li class=\"adjustments-line\">
            <a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
                <p>Filters</p>
                <div class=\"pull-right\">
                    <span class=\"badge filter badge-black\" data-color=\"black\"></span>
                    <span class=\"badge filter badge-azure\" data-color=\"azure\"></span>
                    <span class=\"badge filter badge-green\" data-color=\"green\"></span>
                    <span class=\"badge filter badge-orange\" data-color=\"orange\"></span>
                    <span class=\"badge filter badge-red\" data-color=\"red\"></span>
                    <span class=\"badge filter badge-purple active\" data-color=\"purple\"></span>
                </div>
                <div class=\"clearfix\"></div>
            </a>
        </li>
        <li class=\"header-title\">Sidebar Images</li>

        <li class=\"active\">
            <a class=\"img-holder switch-trigger\" href=\"javascript:void(0)\">
                <img src=\"../assets/img/sidebar-1.jpg\" alt=\"\" />
            </a>
        </li>
        <li>
            <a class=\"img-holder switch-trigger\" href=\"javascript:void(0)\">
                <img src=\"../assets/img/sidebar-3.jpg\" alt=\"\" />
            </a>
        </li>
        <li>
            <a class=\"img-holder switch-trigger\" href=\"javascript:void(0)\">
                <img src=\"..//assets/img/sidebar-4.jpg\" alt=\"\" />
            </a>
        </li>
        <li>
            <a class=\"img-holder switch-trigger\" href=\"javascript:void(0)\">
                <img src=\"../assets/img/sidebar-5.jpg\" alt=\"\" />
            </a>
        </li>

        <li class=\"button-container\">
            <div class=\"\">
                <a href=\"http://www.creative-tim.com/product/light-bootstrap-dashboard\" target=\"_blank\" class=\"btn btn-info btn-block btn-fill\">Download, it's free!</a>
            </div>
        </li>

        <li class=\"header-title pro-title text-center\">Want more components?</li>

        <li class=\"button-container\">
            <div class=\"\">
                <a href=\"http://www.creative-tim.com/product/light-bootstrap-dashboard-pro\" target=\"_blank\" class=\"btn btn-warning btn-block btn-fill\">Get The PRO Version!</a>
            </div>
        </li>

        <li class=\"header-title\" id=\"sharrreTitle\">Thank you for sharing!</li>

        <li class=\"button-container\">
            <button id=\"twitter\" class=\"btn btn-social btn-outline btn-twitter btn-round sharrre\"><i class=\"fa fa-twitter\"></i> · 256</button>
            <button id=\"facebook\" class=\"btn btn-social btn-outline btn-facebook btn-round sharrre\"><i class=\"fa fa-facebook-square\"></i> · 426</button>
        </li>
    </ul>
</div>
</div>
-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 515
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  670 => 515,  335 => 161,  325 => 160,  306 => 25,  295 => 516,  293 => 515,  280 => 505,  275 => 503,  270 => 501,  265 => 499,  258 => 495,  253 => 493,  249 => 492,  244 => 490,  239 => 487,  237 => 160,  140 => 66,  131 => 60,  121 => 53,  104 => 39,  96 => 34,  91 => 32,  87 => 31,  80 => 26,  78 => 25,  73 => 23,  69 => 22,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>

<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{  asset('/assets/img/apple-icon.png')}}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{  asset('/assets/img/favicon.ico')}}\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
   {% block title %} <title>Admin Sportfit_2_fitness </title>{% endblock %}
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700,200\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" />
    <!-- CSS Files -->
    <link href=\"{{  asset('/assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{  asset('/assets/css/light-bootstrap-dashboard.css?v=2.0.0 ')}}\" rel=\"stylesheet\" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=\"{{  asset('/assets/css/demo.css')}}\" rel=\"stylesheet\" />
</head>

<body>
<div class=\"wrapper\">
    <div class=\"sidebar\" data-image=\"{{asset('assets/img/sidebar-5.jpg')}}\">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color=\"purple | blue | green | orange | red\"

    Tip 2: you can also add an image using data-image tag
-->
        <div class=\"sidebar-wrapper\">
            <div class=\"logo\">
                <a href=\"http://www.creative-tim.com\" class=\"simple-text\">
                    Creative Tim
                </a>
            </div>
            <ul class=\"nav\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{  path('app_evenement_back') }}\">
                        <i class=\"nc-icon nc-chart-pie-35\"></i>
                        <p>Evenements</p>
                    </a>
                </li>

                <li>
                    <a class=\"nav-link\" href=\"{{  path('app_reservation_back') }}\">
                        <i class=\"nc-icon nc-paper-2\"></i>
                        <p>Reservation</p>
                    </a>
                </li>
                <li>
                    <a class=\"nav-link\" href=\"{{  path('statistique') }}\">
                        <i class=\"nc-icon nc-circle-09\"></i>
                        <p>statitics</p>
                    </a>
                </li>
                <li>
                    <a class=\"nav-link\" href=\"./maps.html\">
                        <i class=\"nc-icon nc-pin-3\"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a class=\"nav-link\" href=\"./notifications.html\">
                        <i class=\"nc-icon nc-bell-55\"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class=\"nav-item active active-pro\">
                    <a class=\"nav-link active\" href=\"upgrade.html\">
                        <i class=\"nc-icon nc-alien-33\"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"main-panel\">

        <!-- Navbar -->
        <nav class=\"navbar navbar-expand-lg \" color-on-scroll=\"500\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#pablo\"> Dashboard </a>
                <button href=\"\" class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-bar burger-lines\"></span>
                    <span class=\"navbar-toggler-bar burger-lines\"></span>
                    <span class=\"navbar-toggler-bar burger-lines\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navigation\">
                    <ul class=\"nav navbar-nav mr-auto\">
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\" data-toggle=\"dropdown\">
                                <i class=\"nc-icon nc-palette\"></i>
                                <span class=\"d-lg-none\">Dashboard</span>
                            </a>
                        </li>
                        <li class=\"dropdown nav-item\">
                            <a href=\"#\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
                                <i class=\"nc-icon nc-planet\"></i>
                                <span class=\"notification\">5</span>
                                <span class=\"d-lg-none\">Notification</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"#\">Notification 1</a>
                                <a class=\"dropdown-item\" href=\"#\">Notification 2</a>
                                <a class=\"dropdown-item\" href=\"#\">Notification 3</a>
                                <a class=\"dropdown-item\" href=\"#\">Notification 4</a>
                                <a class=\"dropdown-item\" href=\"#\">Another notification</a>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">
                                <i class=\"nc-icon nc-zoom-split\"></i>
                                <span class=\"d-lg-block\">&nbsp;Search</span>
                            </a>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#pablo\">
                                <span class=\"no-icon\">Account</span>
                            </a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"no-icon\">Dropdown</span>
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <a class=\"dropdown-item\" href=\"#\">Something</a>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                <div class=\"divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#pablo\">
                                <span class=\"no-icon\">Log out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {% block body %}
        <!-- End Navbar -->
        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"card \">
                            <div class=\"card-header \">
                                <h4 class=\"card-title\">Email Statistics</h4>
                                <p class=\"card-category\">Last Campaign Performance</p>
                            </div>
                            <div class=\"card-body \">
                                <div id=\"chartPreferences\" class=\"ct-chart ct-perfect-fourth\"></div>
                                <div class=\"legend\">
                                    <i class=\"fa fa-circle text-info\"></i> Open
                                    <i class=\"fa fa-circle text-danger\"></i> Bounce
                                    <i class=\"fa fa-circle text-warning\"></i> Unsubscribe
                                </div>
                                <hr>
                                <div class=\"stats\">
                                    <i class=\"fa fa-clock-o\"></i> Campaign sent 2 days ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"card \">
                            <div class=\"card-header \">
                                <h4 class=\"card-title\">Users Behavior</h4>
                                <p class=\"card-category\">24 Hours performance</p>
                            </div>
                            <div class=\"card-body \">
                                <div id=\"chartHours\" class=\"ct-chart\"></div>
                            </div>
                            <div class=\"card-footer \">
                                <div class=\"legend\">
                                    <i class=\"fa fa-circle text-info\"></i> Open
                                    <i class=\"fa fa-circle text-danger\"></i> Click
                                    <i class=\"fa fa-circle text-warning\"></i> Click Second Time
                                </div>
                                <hr>
                                <div class=\"stats\">
                                    <i class=\"fa fa-history\"></i> Updated 3 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"card \">
                            <div class=\"card-header \">
                                <h4 class=\"card-title\">2017 Sales</h4>
                                <p class=\"card-category\">All products including Taxes</p>
                            </div>
                            <div class=\"card-body \">
                                <div id=\"chartActivity\" class=\"ct-chart\"></div>
                            </div>
                            <div class=\"card-footer \">
                                <div class=\"legend\">
                                    <i class=\"fa fa-circle text-info\"></i> Tesla Model S
                                    <i class=\"fa fa-circle text-danger\"></i> BMW 5 Series
                                </div>
                                <hr>
                                <div class=\"stats\">
                                    <i class=\"fa fa-check\"></i> Data information certified
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"card  card-tasks\">
                            <div class=\"card-header \">
                                <h4 class=\"card-title\">Tasks</h4>
                                <p class=\"card-category\">Backend development</p>
                            </div>
                            <div class=\"card-body \">
                                <div class=\"table-full-width\">
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class=\"form-check\">
                                                    <label class=\"form-check-label\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\">
                                                        <span class=\"form-check-sign\"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for \"What are conference organizers afraid of?\"</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-link\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-link\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check\">
                                                    <label class=\"form-check-label\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" checked>
                                                        <span class=\"form-check-sign\"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-link\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-link\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check\">
                                                    <label class=\"form-check-label\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" checked>
                                                        <span class=\"form-check-sign\"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-link\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-link\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check\">
                                                    <label class=\"form-check-label\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" checked>
                                                        <span class=\"form-check-sign\"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-link\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-link\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check\">
                                                    <label class=\"form-check-label\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\">
                                                        <span class=\"form-check-sign\"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Read \"Following makes Medium better\"</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-link\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-link\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-check\">
                                                    <label class=\"form-check-label\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" disabled>
                                                        <span class=\"form-check-sign\"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Unfollow 5 enemies from twitter</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-link\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-link\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class=\"card-footer \">
                                <hr>
                                <div class=\"stats\">
                                    <i class=\"now-ui-icons loader_refresh spin\"></i> Updated 3 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class=\"footer\">
            <div class=\"container-fluid\">
                <nav>
                    <ul class=\"footer-menu\">
                        <li>
                            <a href=\"#\">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Blog
                            </a>
                        </li>
                    </ul>
                    <p class=\"copyright text-center\">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href=\"http://www.creative-tim.com\">Creative Tim</a>, made with love for a better web
                    </p>
                </nav>
            </div>
        </footer>
    </div>
</div>
<!--   -->
<!-- <div class=\"fixed-plugin\">
<div class=\"dropdown show-dropdown\">
    <a href=\"#\" data-toggle=\"dropdown\">
        <i class=\"fa fa-cog fa-2x\"> </i>
    </a>

    <ul class=\"dropdown-menu\">
        <li class=\"header-title\"> Sidebar Style</li>
        <li class=\"adjustments-line\">
            <a href=\"javascript:void(0)\" class=\"switch-trigger\">
                <p>Background Image</p>
                <label class=\"switch\">
                    <input type=\"checkbox\" data-toggle=\"switch\" checked=\"\" data-on-color=\"primary\" data-off-color=\"primary\"><span class=\"toggle\"></span>
                </label>
                <div class=\"clearfix\"></div>
            </a>
        </li>
        <li class=\"adjustments-line\">
            <a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
                <p>Filters</p>
                <div class=\"pull-right\">
                    <span class=\"badge filter badge-black\" data-color=\"black\"></span>
                    <span class=\"badge filter badge-azure\" data-color=\"azure\"></span>
                    <span class=\"badge filter badge-green\" data-color=\"green\"></span>
                    <span class=\"badge filter badge-orange\" data-color=\"orange\"></span>
                    <span class=\"badge filter badge-red\" data-color=\"red\"></span>
                    <span class=\"badge filter badge-purple active\" data-color=\"purple\"></span>
                </div>
                <div class=\"clearfix\"></div>
            </a>
        </li>
        <li class=\"header-title\">Sidebar Images</li>

        <li class=\"active\">
            <a class=\"img-holder switch-trigger\" href=\"javascript:void(0)\">
                <img src=\"../assets/img/sidebar-1.jpg\" alt=\"\" />
            </a>
        </li>
        <li>
            <a class=\"img-holder switch-trigger\" href=\"javascript:void(0)\">
                <img src=\"../assets/img/sidebar-3.jpg\" alt=\"\" />
            </a>
        </li>
        <li>
            <a class=\"img-holder switch-trigger\" href=\"javascript:void(0)\">
                <img src=\"..//assets/img/sidebar-4.jpg\" alt=\"\" />
            </a>
        </li>
        <li>
            <a class=\"img-holder switch-trigger\" href=\"javascript:void(0)\">
                <img src=\"../assets/img/sidebar-5.jpg\" alt=\"\" />
            </a>
        </li>

        <li class=\"button-container\">
            <div class=\"\">
                <a href=\"http://www.creative-tim.com/product/light-bootstrap-dashboard\" target=\"_blank\" class=\"btn btn-info btn-block btn-fill\">Download, it's free!</a>
            </div>
        </li>

        <li class=\"header-title pro-title text-center\">Want more components?</li>

        <li class=\"button-container\">
            <div class=\"\">
                <a href=\"http://www.creative-tim.com/product/light-bootstrap-dashboard-pro\" target=\"_blank\" class=\"btn btn-warning btn-block btn-fill\">Get The PRO Version!</a>
            </div>
        </li>

        <li class=\"header-title\" id=\"sharrreTitle\">Thank you for sharing!</li>

        <li class=\"button-container\">
            <button id=\"twitter\" class=\"btn btn-social btn-outline btn-twitter btn-round sharrre\"><i class=\"fa fa-twitter\"></i> · 256</button>
            <button id=\"facebook\" class=\"btn btn-social btn-outline btn-facebook btn-round sharrre\"><i class=\"fa fa-facebook-square\"></i> · 426</button>
        </li>
    </ul>
</div>
</div>
-->
{% endblock %}
</body>
<!--   Core JS Files   -->

<script src=\"{{asset('assets/js/core/jquery.3.2.1.min.js')}}\" type=\"text/javascript\">
</script>
<script src=\"{{asset('assets/js/core/popper.min.js')}}\" type=\"text/javascript\"></script>
<script src=\"{{asset('assets/js/core/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src=\"{{asset('assets/js/plugins/bootstrap-switch.js')}}\"></script>
<!--  Google Maps Plugin    -->
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
<!--  Chartist Plugin  -->
<script src=\"{{asset('assets/js/plugins/chartist.min.js')}}\"></script>
<!--  Notifications Plugin    -->
<script src=\"{{asset('assets/js/plugins/bootstrap-notify.js')}}\"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src=\"{{asset('assets/js/light-bootstrap-dashboard.js?v=2.0.0')}}\" type=\"text/javascript\"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src=\"{{asset('assets/js/demo.js')}}\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>
{% block javascripts %}{% endblock %}
</html>
", "base-back.html.twig", "C:\\wamp64\\www\\FirstProject - Copie\\templates\\base-back.html.twig");
    }
}
