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

/* base.html.twig */
class __TwigTemplate_e0f80265af06c584348cff206919f6433ade86111f7b9ebfed85fb0a96240999 extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"Free Website Template\" name=\"keywords\">
    <meta content=\"Free Website Template\" name=\"description\">

    <!-- Favicon -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\">
    ";
        // line 14
        $this->displayBlock('css', $context, $blocks);
        // line 24
        echo "</head>

<body class=\"bg-white\">
<!-- Navbar Start -->
<div class=\"container-fluid p-0 nav-bar\">
    <nav class=\"navbar navbar-expand-lg bg-none navbar-dark py-3\">
        <a href=\"\" class=\"navbar-brand\">
            <h1 class=\"m-0 display-4 font-weight-bold text-uppercase text-white\">Gymnast</h1>
        </a>
        <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ml-auto p-4 bg-secondary\">
                <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        echo "\" class=\"nav-item nav-link active\">Evenement</a>
                <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        echo "\" class=\"nav-item nav-link\">Reservation</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Pages</a>
                    <div class=\"dropdown-menu text-capitalize\">
                        <a href=\"blog.html\" class=\"dropdown-item\">Blog Grid</a>
                        <a href=\"single.html\" class=\"dropdown-item\">Blog Detail</a>
                    </div>
                </div>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->

<!-- Carousel Start -->
<div class=\"container-fluid p-0\">
    <div id=\"blog-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img class=\"w-100\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/carousel-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                    <h3 class=\"text-primary text-capitalize m-0\">Gym & Fitness Center</h3>
                    <h2 class=\"display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize\">Sportfit_2_Fitness</h2>
";
        // line 73
        echo "                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"w-100\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/carousel-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                    <h3 class=\"text-primary text-capitalize m-0\">Gym & Fitness Center</h3>
                    <h2 class=\"display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize\">Sportfit_2_Fitness</h2>
";
        // line 90
        echo "                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#blog-carousel\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\"></span>
        </a>
        <a class=\"carousel-control-next\" href=\"#blog-carousel\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\"></span>
        </a>
    </div>
</div>
<!-- Carousel End -->


<!-- Gym Class Start -->

";
        // line 106
        $this->displayBlock('body', $context, $blocks);
        // line 785
        echo "

<!-- Footer Start -->
<div class=\"footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white\">
    <div class=\"row pt-5\">
        <div class=\"col-lg-3 col-md-6 mb-5\">
            <h4 class=\"text-primary mb-4\">Get In Touch</h4>
            <p><i class=\"fa fa-map-marker-alt mr-2\"></i>123 Street, New York, USA</p>
            <p><i class=\"fa fa-phone-alt mr-2\"></i>+012 345 67890</p>
            <p><i class=\"fa fa-envelope mr-2\"></i>info@example.com</p>
            <div class=\"d-flex justify-content-start mt-4\">
                <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mb-5\">
            <h4 class=\"text-primary mb-4\">Quick Links</h4>
            <div class=\"d-flex flex-column justify-content-start\">
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Home</a>
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>About Us</a>
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Our Features</a>
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Classes</a>
                <a class=\"text-white\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Contact Us</a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mb-5\">
            <h4 class=\"text-primary mb-4\">Popular Links</h4>
            <div class=\"d-flex flex-column justify-content-start\">
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Home</a>
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>About Us</a>
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Our Features</a>
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Classes</a>
                <a class=\"text-white\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Contact Us</a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mb-5\">
            <h4 class=\"text-primary mb-4\">Opening Hours</h4>
            <h5 class=\"text-white\">Monday - Friday</h5>
            <p>8.00 AM - 8.00 PM</p>
            <h5 class=\"text-white\">Saturday - Sunday</h5>
            <p>2.00 PM - 8.00 PM</p>
        </div>
    </div>
    <div class=\"container border-top border-dark pt-5\">
        <p class=\"m-0 text-center text-white\">
            &copy; <a class=\"text-white font-weight-bold\" href=\"#\">Your Site Name</a>. All Rights Reserved. Designed by
            <a class=\"text-white font-weight-bold\" href=\"https://htmlcodex.com\">HTML Codex</a>
        </p>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-outline-primary back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>


<!-- JavaScript Libraries -->
";
        // line 845
        $this->displayBlock('js', $context, $blocks);
        // line 858
        echo "</body>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"myTable\");
            tr = table.getElementsByTagName(\"tr\");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName(\"td\")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }
            }
        }
    </script>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Sport_2_Fitness</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 15
        echo "        <!-- Font Awesome -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Flaticon Font -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/flaticon/font/flaticon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 107
        echo "    <div class=\"container gym-class mb-5\">
        <div class=\"row px-3\">
            <div class=\"col-md-6 p-0\">
                <div class=\"gym-class-box d-flex flex-column align-items-end justify-content-center bg-primary text-right text-white py-5 px-5\">
                    <i class=\"flaticon-six-pack\"></i>
                    <h3 class=\"display-4 mb-3 text-white font-weight-bold\">Body Building</h3>
                    <p>
                        Lorem justo tempor sit aliquyam invidunt, amet vero ea dolor ipsum ut diam sit dolores, dolor
                        sit eos sea sanctus erat lorem nonumy sanctus takimata. Kasd amet sit sadipscing at..
                    </p>
                    <a href=\"\" class=\"btn btn-lg btn-outline-light mt-4 px-4\">Join Now</a>
                </div>
            </div>
            <div class=\"col-md-6 p-0\">
                <div class=\"gym-class-box d-flex flex-column align-items-start justify-content-center bg-secondary text-left text-white py-5 px-5\">
                    <i class=\"flaticon-bodybuilding\"></i>
                    <h3 class=\"display-4 mb-3 text-white font-weight-bold\">Muscle Building</h3>
                    <p>
                        Lorem justo tempor sit aliquyam invidunt, amet vero ea dolor ipsum ut diam sit dolores, dolor
                        sit eos sea sanctus erat lorem nonumy sanctus takimata. Kasd amet sit sadipscing at..
                    </p>
                    <a href=\"\" class=\"btn btn-lg btn-outline-light mt-4 px-4\">Join Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gym Class End -->


    <!-- About Start -->
    <div class=\"container py-5\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-6\">
                <img class=\"img-fluid mb-4 mb-lg-0\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/about.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
            </div>
            <div class=\"col-lg-6\">
                <h2 class=\"display-4 font-weight-bold mb-4\">10 Years Experience</h2>
                <p>Labore vero lorem eos sed aliquy ipsum aliquy sed. Vero dolore dolore takima ipsum lorem rebum</p>
                <div class=\"row py-2\">
                    <div class=\"col-sm-6\">
                        <i class=\"flaticon-barbell display-2 text-primary\"></i>
                        <h4 class=\"font-weight-bold\">Certified GYM Center</h4>
                        <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                    </div>
                    <div class=\"col-sm-6\">
                        <i class=\"flaticon-medal display-2 text-primary\"></i>
                        <h4 class=\"font-weight-bold\">Award Winning</h4>
                        <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                    </div>
                </div>
                <a href=\"\" class=\"btn btn-lg px-4 btn-outline-primary\">Learn More</a>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class=\"container-fluid my-5\">
        <div class=\"row\">
            <div class=\"col-lg-4 p-0\">
                <div class=\"d-flex align-items-center bg-secondary text-white px-5\" style=\"min-height: 300px;\">
                    <i class=\"flaticon-training display-3 text-primary mr-3\"></i>
                    <div class=\"\">
                        <h2 class=\"text-white mb-3\">Progression</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 p-0\">
                <div class=\"d-flex align-items-center bg-primary text-white px-5\" style=\"min-height: 300px;\">
                    <i class=\"flaticon-weightlifting display-3 text-secondary mr-3\"></i>
                    <div class=\"\">
                        <h2 class=\"text-white mb-3\">Workout</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 p-0\">
                <div class=\"d-flex align-items-center bg-secondary text-white px-5\" style=\"min-height: 300px;\">
                    <i class=\"flaticon-treadmill display-3 text-primary mr-3\"></i>
                    <div class=\"\">
                        <h2 class=\"text-white mb-3\">Nutrition</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- GYM Feature Start -->
    <div class=\"container feature pt-5\">
        <div class=\"d-flex flex-column text-center mb-5\">
            <h4 class=\"text-primary font-weight-bold\">Why Choose Us?</h4>
            <h4 class=\"display-4 font-weight-bold\">Benifits of Joining Our GYM</h4>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 mb-5\">
                <div class=\"row align-items-center\">
                    <div class=\"col-sm-5\">
                        <img class=\"img-fluid mb-3 mb-sm-0\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/feature-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                        <i class=\"flaticon-barbell\"></i>
                    </div>
                    <div class=\"col-sm-7\">
                        <h4 class=\"font-weight-bold\">Videos Instruction</h4>
                        <p>Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima  erat tempor</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 mb-5\">
                <div class=\"row align-items-center\">
                    <div class=\"col-sm-5\">
                        <img class=\"img-fluid mb-3 mb-sm-0\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/feature-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                        <i class=\"flaticon-training\"></i>
                    </div>
                    <div class=\"col-sm-7\">
                        <h4 class=\"font-weight-bold\">Training Calendar</h4>
                        <p>Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima  erat tempor</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 mb-5\">
                <div class=\"row align-items-center\">
                    <div class=\"col-sm-5\">
                        <img class=\"img-fluid mb-3 mb-sm-0\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/feature-3.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                        <i class=\"flaticon-trends\"></i>
                    </div>
                    <div class=\"col-sm-7\">
                        <h4 class=\"font-weight-bold\">Free Apps & WiFi</h4>
                        <p>Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima  erat tempor</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 mb-5\">
                <div class=\"row align-items-center\">
                    <div class=\"col-sm-5\">
                        <img class=\"img-fluid mb-3 mb-sm-0\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/feature-4.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                        <i class=\"flaticon-support\"></i>
                    </div>
                    <div class=\"col-sm-7\">
                        <h4 class=\"font-weight-bold\">Community Support</h4>
                        <p>Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima  erat tempor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GYM Feature End -->


    <!-- Subscribe Start -->
    <div class=\"subscribe container-fluid my-5 py-5 text-center\">
        <h4 class=\"display-4 text-white font-weight-bold mt-5 mb-3\">Subscribe Our Newsletter</h4>
        <p class=\"text-white mb-4\">Subscribe and get Our latest article in your inbox</p>
        <form class=\"form-inline justify-content-center mb-5\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control-lg\" placeholder=\"Your Email\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-primary\" type=\"submit\">Subscribe</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Subscribe End -->


    <!-- Class Timetable Start -->
    <div class=\"container gym-feature py-5\">
        <div class=\"d-flex flex-column text-center mb-5\">
            <h4 class=\"text-primary font-weight-bold\">Class Timetable</h4>
            <h4 class=\"display-4 font-weight-bold\">Working Hours and Class Time</h4>
        </div>
        <div class=\"tab-class\">
            <ul class=\"nav nav-pills justify-content-center mb-4\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" data-toggle=\"pill\" href=\"#class-all\">All Classes</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"pill\" href=\"#class-cardio\">Cardio</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"pill\" href=\"#class-crossfit\">Crossfit</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"pill\" href=\"#class-powerlifting\">Powerlifting</a>
                </li>
            </ul>
            <div class=\"tab-content\">
                <div id=\"class-all\" class=\"container tab-pane p-0 active\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-lg m-0\">
                            <thead class=\"bg-secondary text-white text-center\">
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">6.00am - 8.00am</th>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">10.00am - 12.00am</th>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">5.00pm - 7.00pm</th>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">7.00pm - 9.00pm</th>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id=\"class-cardio\" class=\"container tab-pane fade p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-lg m-0\">
                            <thead class=\"bg-secondary text-white text-center\">
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">6.00am - 8.00am</th>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Cardio</h5>John Deo</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">10.00am - 12.00am</th>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">5.00pm - 7.00pm</th>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">7.00pm - 9.00pm</th>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id=\"class-crossfit\" class=\"container tab-pane fade p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-lg m-0\">
                            <thead class=\"bg-secondary text-white text-center\">
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">6.00am - 8.00am</th>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">10.00am - 12.00am</th>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Crossfit</h5>Adam Phillips</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">5.00pm - 7.00pm</th>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Crossfit</h5>Adam Phillips</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">7.00pm - 9.00pm</th>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id=\"class-powerlifting\" class=\"container tab-pane fade p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-lg m-0\">
                            <thead class=\"bg-secondary text-white text-center\">
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">6.00am - 8.00am</th>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">10.00am - 12.00am</th>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">5.00pm - 7.00pm</th>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">7.00pm - 9.00pm</th>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Power Lifting</h5>James Alien</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class Timetable End -->


    <!-- BMI Calculation Start -->
    <div class=\"container-fluid position-relative bmi my-5\">
        <div class=\"container\">
            <div class=\"row px-3 align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"pr-md-3 d-none d-md-block\">
                        <h4 class=\"text-primary\">Body Mass Index </h4>
                        <h4 class=\"display-4 text-white font-weight-bold mb-4\">Whate is BMI?</h4>
                        <p class=\"m-0 text-white\">Vero elitr lorem magna justo magna justo at justo est ipsum sed clita lorem dolor ipsum sed. Lorem sea lorem vero. Sanct dolor clita clita rebum kasd magna erat diam</p>
                    </div>
                </div>
                <div class=\"col-md-6 bg-secondary py-5\">
                    <div class=\"py-5 px-3\">
                        <h1 class=\"mb-4 text-white\">Calculate your BMI</h1>
                        <form>
                            <div class=\"form-row\">
                                <div class=\"col form-group\">
                                    <input type=\"text\" class=\"form-control form-control-lg bg-dark text-white\" placeholder=\"Weight (KG)\">
                                </div>
                                <div class=\"col form-group\">
                                    <input type=\"text\" class=\"form-control form-control-lg bg-dark text-white\" placeholder=\"Height (CM)\">
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"col form-group\">
                                    <input type=\"text\" class=\"form-control form-control-lg bg-dark text-white\" placeholder=\"Age\">
                                </div>
                                <div class=\"col form-group\">
                                    <select class=\"custom-select custom-select-lg bg-dark text-muted\">
                                        <option>Gender</option>
                                        <option>Mal</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"col\">
                                    <input type=\"button\" class=\"btn btn-lg btn-block btn-dark border-light\"
                                           value=\"Calculate Now\">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BMI Calculation End -->


    <!-- Team Start -->
    <div class=\"container pt-5 team\">
        <div class=\"d-flex flex-column text-center mb-5\">
            <h4 class=\"text-primary font-weight-bold\">Our Trainers</h4>
            <h4 class=\"display-4 font-weight-bold\">Meet Our Expert Trainers</h4>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <div class=\"card border-0 bg-secondary text-center text-white\">
                    <img class=\"card-img-top\" src=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/team-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"card-social d-flex align-items-center justify-content-center\">
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                    <div class=\"card-body bg-secondary\">
                        <h4 class=\"card-title text-primary\">Trainer Name</h4>
                        <p class=\"card-text\">Trainer</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <div class=\"card border-0 bg-secondary text-center text-white\">
                    <img class=\"card-img-top\" src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/team-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"card-social d-flex align-items-center justify-content-center\">
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                    <div class=\"card-body bg-secondary\">
                        <h4 class=\"card-title text-primary\">Trainer Name</h4>
                        <p class=\"card-text\">Trainer</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <div class=\"card border-0 bg-secondary text-center text-white\">
                    <img class=\"card-img-top\" src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/team-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"card-social d-flex align-items-center justify-content-center\">
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                    <div class=\"card-body bg-secondary\">
                        <h4 class=\"card-title text-primary\">Trainer Name</h4>
                        <p class=\"card-text\">Trainer</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <div class=\"card border-0 bg-secondary text-center text-white\">
                    <img class=\"card-img-top\" src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/team-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"card-social d-flex align-items-center justify-content-center\">
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                    <div class=\"card-body bg-secondary\">
                        <h4 class=\"card-title text-primary\">Trainer Name</h4>
                        <p class=\"card-text\">Trainer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class=\"container-fluid position-relative testimonial my-5\">
        <div class=\"container\">
            <div class=\"row px-3 align-items-center\">
                <div class=\"col-md-6 bg-secondary\">
                    <div class=\"d-flex align-items-center px-3\" style=\"min-height: 450px;\">
                        <div id=\"carouselId\" class=\"carousel slide\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carouselId\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carouselId\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carouselId\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\" role=\"listbox\">
                                <div class=\"carousel-item active\">
                                    <div class=\"d-flex align-items-center mb-4 text-white\">
                                        <img width=\"80\" height=\"80\" class=\"rounded-circle bg-dark p-2\" src=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonial-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                        <div class=\"pl-4\">
                                            <h4 class=\"text-primary\">Client Name</h4>
                                            <p class=\"m-0\">Profession</p>
                                        </div>
                                    </div>
                                    <div class=\"testimonial-text position-relative border bg-dark text-white mb-5 p-4\">
                                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                    </div>
                                </div>
                                <div class=\"carousel-item\">
                                    <div class=\"d-flex align-items-center mb-4 text-white\">
                                        <img width=\"80\" height=\"80\" class=\"rounded-circle bg-dark p-2\" src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonial-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                        <div class=\"pl-4\">
                                            <h4 class=\"text-primary\">Client Name</h4>
                                            <p class=\"m-0\">Profession</p>
                                        </div>
                                    </div>
                                    <div class=\"testimonial-text position-relative border bg-dark text-white mb-5 p-4\">
                                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                    </div>
                                </div>
                                <div class=\"carousel-item\">
                                    <div class=\"d-flex align-items-center mb-4 text-white\">
                                        <img width=\"80\" height=\"80\" class=\"rounded-circle bg-dark p-2\" src=\"";
        // line 707
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonial-3.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                                        <div class=\"pl-4\">
                                            <h4 class=\"text-primary\">Client Name</h4>
                                            <p class=\"m-0\">Profession</p>
                                        </div>
                                    </div>
                                    <div class=\"testimonial-text position-relative border bg-dark text-white mb-5 p-4\">
                                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"pl-md-3 d-none d-md-block\">
                        <h4 class=\"text-primary\">Testimonial</h4>
                        <h4 class=\"display-4 mb-4 text-white font-weight-bold\">What Our Clients Say?</h4>
                        <p class=\"m-0 text-white\">Vero elitr lorem magna justo magna justo at justo est ipsum sed clita lorem dolor ipsum sed. Lorem sea lorem vero. Sanct dolor clita clita rebum kasd magna erat diam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class=\"container pt-5\">
        <div class=\"d-flex flex-column text-center mb-5\">
            <h4 class=\"text-primary font-weight-bold\">Our Blog</h4>
            <h4 class=\"display-4 font-weight-bold\">Latest Article From Blog</h4>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6 mb-5 blog-item\">
                <img class=\"img-fluid mb-4\" src=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/blog-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                <div class=\"d-flex align-items-center mb-4\">
                    <div class=\"d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white\" style=\"width: 80px; height: 80px;\">
                        <small>01</small>
                        <strong class=\"text-uppercase m-0 text-white\">Jan</strong>
                        <small>2045</small>
                    </div>
                    <div class=\"pl-3\">
                        <h3 class=\"font-weight-bold\">Lorem ipsum dolor sit amet</h3>
                        <div class=\"d-flex\">
                            <small class=\"mr-2 text-muted\"><i class=\"fa fa-user\"></i> Admin</small>
                            <small class=\"mr-2 text-muted\"><i class=\"fa fa-folder\"></i> Web Design</small>
                            <small class=\"mr-2 text-muted\"><i class=\"fa fa-comments\"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero dolor sed kasd accusam</p>
                <a class=\"btn btn-outline-primary mt-2 px-3\" href=\"\">Read More <i class=\"fa fa-angle-right\"></i></a>
            </div>
            <div class=\"col-lg-6 mb-5 blog-item\">
                <img class=\"img-fluid mb-4\" src=\"";
        // line 762
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/blog-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                <div class=\"d-flex align-items-center mb-4\">
                    <div class=\"d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white\" style=\"width: 80px; height: 80px;\">
                        <small>01</small>
                        <strong class=\"text-uppercase m-0 text-white\">Jan</strong>
                        <small>2045</small>
                    </div>
                    <div class=\"pl-3\">
                        <h3 class=\"font-weight-bold\">Lorem ipsum dolor sit amet</h3>
                        <div class=\"d-flex\">
                            <small class=\"mr-2 text-muted\"><i class=\"fa fa-user\"></i> Admin</small>
                            <small class=\"mr-2 text-muted\"><i class=\"fa fa-folder\"></i> Web Design</small>
                            <small class=\"mr-2 text-muted\"><i class=\"fa fa-comments\"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero dolor sed kasd accusam</p>
                <a class=\"btn btn-outline-primary mt-2 px-3\" href=\"\">Read More <i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
    </div> -->
    <!-- Blog End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 845
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 846
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/https://code.jquery.com/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 847
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 848
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 849
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/waypoints/waypoints.min.js)"), "html", null, true);
        echo "\"></script>

    <!-- Contact Javascript File -->
    <script src=\"";
        // line 852
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/mail/jqBootstrapValidation.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 853
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/mail/contact.js"), "html", null, true);
        echo "'\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 856
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  1081 => 856,  1075 => 853,  1071 => 852,  1065 => 849,  1061 => 848,  1057 => 847,  1052 => 846,  1042 => 845,  1009 => 762,  986 => 742,  948 => 707,  933 => 695,  918 => 683,  882 => 650,  864 => 635,  846 => 620,  828 => 605,  468 => 248,  453 => 236,  438 => 224,  423 => 212,  348 => 140,  313 => 107,  303 => 106,  291 => 22,  285 => 19,  279 => 16,  276 => 15,  266 => 14,  247 => 7,  216 => 858,  214 => 845,  152 => 785,  150 => 106,  132 => 90,  125 => 76,  120 => 73,  113 => 59,  90 => 39,  86 => 38,  70 => 24,  68 => 14,  64 => 13,  57 => 8,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    {% block title %}<title>Sport_2_Fitness</title>{% endblock %}
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"Free Website Template\" name=\"keywords\">
    <meta content=\"Free Website Template\" name=\"description\">

    <!-- Favicon -->
    <link href=\"{{ asset('front/img/favicon.ico') }}\" rel=\"icon\">
    {% block css %}
        <!-- Font Awesome -->
        <link href=\"{{ asset('front/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}\" rel=\"stylesheet\">

        <!-- Flaticon Font -->
        <link href=\"{{ asset('front/lib/flaticon/font/flaticon.css') }}\" rel=\"stylesheet\">

        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"{{ asset('front/css/style.min.css') }}\" rel=\"stylesheet\">
    {% endblock %}
</head>

<body class=\"bg-white\">
<!-- Navbar Start -->
<div class=\"container-fluid p-0 nav-bar\">
    <nav class=\"navbar navbar-expand-lg bg-none navbar-dark py-3\">
        <a href=\"\" class=\"navbar-brand\">
            <h1 class=\"m-0 display-4 font-weight-bold text-uppercase text-white\">Gymnast</h1>
        </a>
        <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ml-auto p-4 bg-secondary\">
                <a href=\"{{  path('app_evenement_index') }}\" class=\"nav-item nav-link active\">Evenement</a>
                <a href=\"{{ path('app_reservation_index')}}\" class=\"nav-item nav-link\">Reservation</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Pages</a>
                    <div class=\"dropdown-menu text-capitalize\">
                        <a href=\"blog.html\" class=\"dropdown-item\">Blog Grid</a>
                        <a href=\"single.html\" class=\"dropdown-item\">Blog Detail</a>
                    </div>
                </div>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->

<!-- Carousel Start -->
<div class=\"container-fluid p-0\">
    <div id=\"blog-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img class=\"w-100\" src=\"{{ asset('front/img/carousel-1.jpg')}}\" alt=\"Image\">
                <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                    <h3 class=\"text-primary text-capitalize m-0\">Gym & Fitness Center</h3>
                    <h2 class=\"display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize\">Sportfit_2_Fitness</h2>
{#                    <form>#}
{#                        <div class=\"input-group no-border\">#}
{#                            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search for niveau\" title=\"Type in niveau\">#}
{#                            <div class=\"input-group-append\">#}
{#                                <div class=\"input-group-text\">#}
{#                                    <i class=\"nc-icon nc-zoom-split\"></i>#}
{#                                </div>#}
{#                            </div>#}
{#                        </div>#}
{#                    </form>#}
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"w-100\" src=\"{{  asset('front/img/carousel-2.jpg')}}\" alt=\"Image\">
                <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                    <h3 class=\"text-primary text-capitalize m-0\">Gym & Fitness Center</h3>
                    <h2 class=\"display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize\">Sportfit_2_Fitness</h2>
{#                    <form>#}
{#                        <div class=\"input-group no-border\">#}
{#                            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search for niveau\" title=\"Type in niveau\">#}
{#                            <div class=\"input-group-append\">#}
{#                                <div class=\"input-group-text\">#}
{#                                    <i class=\"nc-icon nc-zoom-split\"></i>#}
{#                                </div>#}
{#                            </div>#}
{#                        </div>#}
{#                    </form>#}
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#blog-carousel\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\"></span>
        </a>
        <a class=\"carousel-control-next\" href=\"#blog-carousel\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\"></span>
        </a>
    </div>
</div>
<!-- Carousel End -->


<!-- Gym Class Start -->

{% block body %}
    <div class=\"container gym-class mb-5\">
        <div class=\"row px-3\">
            <div class=\"col-md-6 p-0\">
                <div class=\"gym-class-box d-flex flex-column align-items-end justify-content-center bg-primary text-right text-white py-5 px-5\">
                    <i class=\"flaticon-six-pack\"></i>
                    <h3 class=\"display-4 mb-3 text-white font-weight-bold\">Body Building</h3>
                    <p>
                        Lorem justo tempor sit aliquyam invidunt, amet vero ea dolor ipsum ut diam sit dolores, dolor
                        sit eos sea sanctus erat lorem nonumy sanctus takimata. Kasd amet sit sadipscing at..
                    </p>
                    <a href=\"\" class=\"btn btn-lg btn-outline-light mt-4 px-4\">Join Now</a>
                </div>
            </div>
            <div class=\"col-md-6 p-0\">
                <div class=\"gym-class-box d-flex flex-column align-items-start justify-content-center bg-secondary text-left text-white py-5 px-5\">
                    <i class=\"flaticon-bodybuilding\"></i>
                    <h3 class=\"display-4 mb-3 text-white font-weight-bold\">Muscle Building</h3>
                    <p>
                        Lorem justo tempor sit aliquyam invidunt, amet vero ea dolor ipsum ut diam sit dolores, dolor
                        sit eos sea sanctus erat lorem nonumy sanctus takimata. Kasd amet sit sadipscing at..
                    </p>
                    <a href=\"\" class=\"btn btn-lg btn-outline-light mt-4 px-4\">Join Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gym Class End -->


    <!-- About Start -->
    <div class=\"container py-5\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-6\">
                <img class=\"img-fluid mb-4 mb-lg-0\" src=\"{{  asset('front/img/about.jpg') }}\" alt=\"Image\">
            </div>
            <div class=\"col-lg-6\">
                <h2 class=\"display-4 font-weight-bold mb-4\">10 Years Experience</h2>
                <p>Labore vero lorem eos sed aliquy ipsum aliquy sed. Vero dolore dolore takima ipsum lorem rebum</p>
                <div class=\"row py-2\">
                    <div class=\"col-sm-6\">
                        <i class=\"flaticon-barbell display-2 text-primary\"></i>
                        <h4 class=\"font-weight-bold\">Certified GYM Center</h4>
                        <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                    </div>
                    <div class=\"col-sm-6\">
                        <i class=\"flaticon-medal display-2 text-primary\"></i>
                        <h4 class=\"font-weight-bold\">Award Winning</h4>
                        <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                    </div>
                </div>
                <a href=\"\" class=\"btn btn-lg px-4 btn-outline-primary\">Learn More</a>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class=\"container-fluid my-5\">
        <div class=\"row\">
            <div class=\"col-lg-4 p-0\">
                <div class=\"d-flex align-items-center bg-secondary text-white px-5\" style=\"min-height: 300px;\">
                    <i class=\"flaticon-training display-3 text-primary mr-3\"></i>
                    <div class=\"\">
                        <h2 class=\"text-white mb-3\">Progression</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 p-0\">
                <div class=\"d-flex align-items-center bg-primary text-white px-5\" style=\"min-height: 300px;\">
                    <i class=\"flaticon-weightlifting display-3 text-secondary mr-3\"></i>
                    <div class=\"\">
                        <h2 class=\"text-white mb-3\">Workout</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 p-0\">
                <div class=\"d-flex align-items-center bg-secondary text-white px-5\" style=\"min-height: 300px;\">
                    <i class=\"flaticon-treadmill display-3 text-primary mr-3\"></i>
                    <div class=\"\">
                        <h2 class=\"text-white mb-3\">Nutrition</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- GYM Feature Start -->
    <div class=\"container feature pt-5\">
        <div class=\"d-flex flex-column text-center mb-5\">
            <h4 class=\"text-primary font-weight-bold\">Why Choose Us?</h4>
            <h4 class=\"display-4 font-weight-bold\">Benifits of Joining Our GYM</h4>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 mb-5\">
                <div class=\"row align-items-center\">
                    <div class=\"col-sm-5\">
                        <img class=\"img-fluid mb-3 mb-sm-0\" src=\"{{  asset('front/img/feature-1.jpg')}}\" alt=\"Image\">
                        <i class=\"flaticon-barbell\"></i>
                    </div>
                    <div class=\"col-sm-7\">
                        <h4 class=\"font-weight-bold\">Videos Instruction</h4>
                        <p>Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima  erat tempor</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 mb-5\">
                <div class=\"row align-items-center\">
                    <div class=\"col-sm-5\">
                        <img class=\"img-fluid mb-3 mb-sm-0\" src=\"{{  asset('front/img/feature-2.jpg')}}\" alt=\"Image\">
                        <i class=\"flaticon-training\"></i>
                    </div>
                    <div class=\"col-sm-7\">
                        <h4 class=\"font-weight-bold\">Training Calendar</h4>
                        <p>Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima  erat tempor</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 mb-5\">
                <div class=\"row align-items-center\">
                    <div class=\"col-sm-5\">
                        <img class=\"img-fluid mb-3 mb-sm-0\" src=\"{{  asset('front/img/feature-3.jpg')}}\" alt=\"Image\">
                        <i class=\"flaticon-trends\"></i>
                    </div>
                    <div class=\"col-sm-7\">
                        <h4 class=\"font-weight-bold\">Free Apps & WiFi</h4>
                        <p>Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima  erat tempor</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 mb-5\">
                <div class=\"row align-items-center\">
                    <div class=\"col-sm-5\">
                        <img class=\"img-fluid mb-3 mb-sm-0\" src=\"{{  asset('front/img/feature-4.jpg')}}\" alt=\"Image\">
                        <i class=\"flaticon-support\"></i>
                    </div>
                    <div class=\"col-sm-7\">
                        <h4 class=\"font-weight-bold\">Community Support</h4>
                        <p>Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima  erat tempor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GYM Feature End -->


    <!-- Subscribe Start -->
    <div class=\"subscribe container-fluid my-5 py-5 text-center\">
        <h4 class=\"display-4 text-white font-weight-bold mt-5 mb-3\">Subscribe Our Newsletter</h4>
        <p class=\"text-white mb-4\">Subscribe and get Our latest article in your inbox</p>
        <form class=\"form-inline justify-content-center mb-5\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control-lg\" placeholder=\"Your Email\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-primary\" type=\"submit\">Subscribe</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Subscribe End -->


    <!-- Class Timetable Start -->
    <div class=\"container gym-feature py-5\">
        <div class=\"d-flex flex-column text-center mb-5\">
            <h4 class=\"text-primary font-weight-bold\">Class Timetable</h4>
            <h4 class=\"display-4 font-weight-bold\">Working Hours and Class Time</h4>
        </div>
        <div class=\"tab-class\">
            <ul class=\"nav nav-pills justify-content-center mb-4\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" data-toggle=\"pill\" href=\"#class-all\">All Classes</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"pill\" href=\"#class-cardio\">Cardio</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"pill\" href=\"#class-crossfit\">Crossfit</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"pill\" href=\"#class-powerlifting\">Powerlifting</a>
                </li>
            </ul>
            <div class=\"tab-content\">
                <div id=\"class-all\" class=\"container tab-pane p-0 active\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-lg m-0\">
                            <thead class=\"bg-secondary text-white text-center\">
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">6.00am - 8.00am</th>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">10.00am - 12.00am</th>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">5.00pm - 7.00pm</th>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">7.00pm - 9.00pm</th>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id=\"class-cardio\" class=\"container tab-pane fade p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-lg m-0\">
                            <thead class=\"bg-secondary text-white text-center\">
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">6.00am - 8.00am</th>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Cardio</h5>John Deo</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">10.00am - 12.00am</th>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">5.00pm - 7.00pm</th>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">7.00pm - 9.00pm</th>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id=\"class-crossfit\" class=\"container tab-pane fade p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-lg m-0\">
                            <thead class=\"bg-secondary text-white text-center\">
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">6.00am - 8.00am</th>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">10.00am - 12.00am</th>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Crossfit</h5>Adam Phillips</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">5.00pm - 7.00pm</th>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Crossfit</h5>Adam Phillips</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">7.00pm - 9.00pm</th>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td><h5>Power Lifting</h5>James Alien</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id=\"class-powerlifting\" class=\"container tab-pane fade p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-lg m-0\">
                            <thead class=\"bg-secondary text-white text-center\">
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">6.00am - 8.00am</th>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">10.00am - 12.00am</th>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">5.00pm - 7.00pm</th>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Power Lifting</h5>James Alien</td>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                            </tr>
                            <tr>
                                <th class=\"bg-secondary text-white align-middle\">7.00pm - 9.00pm</th>
                                <td></td>
                                <td><h5>Cardio</h5>John Deo</td>
                                <td></td>
                                <td><h5>Crossfit</h5>Adam Phillips</td>
                                <td></td>
                                <td class=\"bg-primary text-white\"><h5 class=\"text-white\">Power Lifting</h5>James Alien</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class Timetable End -->


    <!-- BMI Calculation Start -->
    <div class=\"container-fluid position-relative bmi my-5\">
        <div class=\"container\">
            <div class=\"row px-3 align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"pr-md-3 d-none d-md-block\">
                        <h4 class=\"text-primary\">Body Mass Index </h4>
                        <h4 class=\"display-4 text-white font-weight-bold mb-4\">Whate is BMI?</h4>
                        <p class=\"m-0 text-white\">Vero elitr lorem magna justo magna justo at justo est ipsum sed clita lorem dolor ipsum sed. Lorem sea lorem vero. Sanct dolor clita clita rebum kasd magna erat diam</p>
                    </div>
                </div>
                <div class=\"col-md-6 bg-secondary py-5\">
                    <div class=\"py-5 px-3\">
                        <h1 class=\"mb-4 text-white\">Calculate your BMI</h1>
                        <form>
                            <div class=\"form-row\">
                                <div class=\"col form-group\">
                                    <input type=\"text\" class=\"form-control form-control-lg bg-dark text-white\" placeholder=\"Weight (KG)\">
                                </div>
                                <div class=\"col form-group\">
                                    <input type=\"text\" class=\"form-control form-control-lg bg-dark text-white\" placeholder=\"Height (CM)\">
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"col form-group\">
                                    <input type=\"text\" class=\"form-control form-control-lg bg-dark text-white\" placeholder=\"Age\">
                                </div>
                                <div class=\"col form-group\">
                                    <select class=\"custom-select custom-select-lg bg-dark text-muted\">
                                        <option>Gender</option>
                                        <option>Mal</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"col\">
                                    <input type=\"button\" class=\"btn btn-lg btn-block btn-dark border-light\"
                                           value=\"Calculate Now\">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BMI Calculation End -->


    <!-- Team Start -->
    <div class=\"container pt-5 team\">
        <div class=\"d-flex flex-column text-center mb-5\">
            <h4 class=\"text-primary font-weight-bold\">Our Trainers</h4>
            <h4 class=\"display-4 font-weight-bold\">Meet Our Expert Trainers</h4>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <div class=\"card border-0 bg-secondary text-center text-white\">
                    <img class=\"card-img-top\" src=\"{{  asset('front/img/team-1.jpg')}}\" alt=\"\">
                    <div class=\"card-social d-flex align-items-center justify-content-center\">
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                    <div class=\"card-body bg-secondary\">
                        <h4 class=\"card-title text-primary\">Trainer Name</h4>
                        <p class=\"card-text\">Trainer</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <div class=\"card border-0 bg-secondary text-center text-white\">
                    <img class=\"card-img-top\" src=\"{{  asset('front/img/team-2.jpg')}}\" alt=\"\">
                    <div class=\"card-social d-flex align-items-center justify-content-center\">
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                    <div class=\"card-body bg-secondary\">
                        <h4 class=\"card-title text-primary\">Trainer Name</h4>
                        <p class=\"card-text\">Trainer</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <div class=\"card border-0 bg-secondary text-center text-white\">
                    <img class=\"card-img-top\" src=\"{{  asset('front/img/team-3.jpg')}}\" alt=\"\">
                    <div class=\"card-social d-flex align-items-center justify-content-center\">
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                    <div class=\"card-body bg-secondary\">
                        <h4 class=\"card-title text-primary\">Trainer Name</h4>
                        <p class=\"card-text\">Trainer</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <div class=\"card border-0 bg-secondary text-center text-white\">
                    <img class=\"card-img-top\" src=\"{{  asset('front/img/team-4.jpg')}}\" alt=\"\">
                    <div class=\"card-social d-flex align-items-center justify-content-center\">
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                    <div class=\"card-body bg-secondary\">
                        <h4 class=\"card-title text-primary\">Trainer Name</h4>
                        <p class=\"card-text\">Trainer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class=\"container-fluid position-relative testimonial my-5\">
        <div class=\"container\">
            <div class=\"row px-3 align-items-center\">
                <div class=\"col-md-6 bg-secondary\">
                    <div class=\"d-flex align-items-center px-3\" style=\"min-height: 450px;\">
                        <div id=\"carouselId\" class=\"carousel slide\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carouselId\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carouselId\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carouselId\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\" role=\"listbox\">
                                <div class=\"carousel-item active\">
                                    <div class=\"d-flex align-items-center mb-4 text-white\">
                                        <img width=\"80\" height=\"80\" class=\"rounded-circle bg-dark p-2\" src=\"{{  asset('front/img/testimonial-1.jpg')}}\" alt=\"Image\">
                                        <div class=\"pl-4\">
                                            <h4 class=\"text-primary\">Client Name</h4>
                                            <p class=\"m-0\">Profession</p>
                                        </div>
                                    </div>
                                    <div class=\"testimonial-text position-relative border bg-dark text-white mb-5 p-4\">
                                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                    </div>
                                </div>
                                <div class=\"carousel-item\">
                                    <div class=\"d-flex align-items-center mb-4 text-white\">
                                        <img width=\"80\" height=\"80\" class=\"rounded-circle bg-dark p-2\" src=\"{{  asset('front/img/testimonial-2.jpg')}}\" alt=\"Image\">
                                        <div class=\"pl-4\">
                                            <h4 class=\"text-primary\">Client Name</h4>
                                            <p class=\"m-0\">Profession</p>
                                        </div>
                                    </div>
                                    <div class=\"testimonial-text position-relative border bg-dark text-white mb-5 p-4\">
                                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                    </div>
                                </div>
                                <div class=\"carousel-item\">
                                    <div class=\"d-flex align-items-center mb-4 text-white\">
                                        <img width=\"80\" height=\"80\" class=\"rounded-circle bg-dark p-2\" src=\"{{  asset('front/img/testimonial-3.jpg')}}\" alt=\"Image\">
                                        <div class=\"pl-4\">
                                            <h4 class=\"text-primary\">Client Name</h4>
                                            <p class=\"m-0\">Profession</p>
                                        </div>
                                    </div>
                                    <div class=\"testimonial-text position-relative border bg-dark text-white mb-5 p-4\">
                                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"pl-md-3 d-none d-md-block\">
                        <h4 class=\"text-primary\">Testimonial</h4>
                        <h4 class=\"display-4 mb-4 text-white font-weight-bold\">What Our Clients Say?</h4>
                        <p class=\"m-0 text-white\">Vero elitr lorem magna justo magna justo at justo est ipsum sed clita lorem dolor ipsum sed. Lorem sea lorem vero. Sanct dolor clita clita rebum kasd magna erat diam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class=\"container pt-5\">
        <div class=\"d-flex flex-column text-center mb-5\">
            <h4 class=\"text-primary font-weight-bold\">Our Blog</h4>
            <h4 class=\"display-4 font-weight-bold\">Latest Article From Blog</h4>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6 mb-5 blog-item\">
                <img class=\"img-fluid mb-4\" src=\"{{  asset('front/img/blog-1.jpg')}}\" alt=\"Image\">
                <div class=\"d-flex align-items-center mb-4\">
                    <div class=\"d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white\" style=\"width: 80px; height: 80px;\">
                        <small>01</small>
                        <strong class=\"text-uppercase m-0 text-white\">Jan</strong>
                        <small>2045</small>
                    </div>
                    <div class=\"pl-3\">
                        <h3 class=\"font-weight-bold\">Lorem ipsum dolor sit amet</h3>
                        <div class=\"d-flex\">
                            <small class=\"mr-2 text-muted\"><i class=\"fa fa-user\"></i> Admin</small>
                            <small class=\"mr-2 text-muted\"><i class=\"fa fa-folder\"></i> Web Design</small>
                            <small class=\"mr-2 text-muted\"><i class=\"fa fa-comments\"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero dolor sed kasd accusam</p>
                <a class=\"btn btn-outline-primary mt-2 px-3\" href=\"\">Read More <i class=\"fa fa-angle-right\"></i></a>
            </div>
            <div class=\"col-lg-6 mb-5 blog-item\">
                <img class=\"img-fluid mb-4\" src=\"{{  asset('front/img/blog-2.jpg')}}\" alt=\"Image\">
                <div class=\"d-flex align-items-center mb-4\">
                    <div class=\"d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white\" style=\"width: 80px; height: 80px;\">
                        <small>01</small>
                        <strong class=\"text-uppercase m-0 text-white\">Jan</strong>
                        <small>2045</small>
                    </div>
                    <div class=\"pl-3\">
                        <h3 class=\"font-weight-bold\">Lorem ipsum dolor sit amet</h3>
                        <div class=\"d-flex\">
                            <small class=\"mr-2 text-muted\"><i class=\"fa fa-user\"></i> Admin</small>
                            <small class=\"mr-2 text-muted\"><i class=\"fa fa-folder\"></i> Web Design</small>
                            <small class=\"mr-2 text-muted\"><i class=\"fa fa-comments\"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero dolor sed kasd accusam</p>
                <a class=\"btn btn-outline-primary mt-2 px-3\" href=\"\">Read More <i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
    </div> -->
    <!-- Blog End -->
{% endblock %}


<!-- Footer Start -->
<div class=\"footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white\">
    <div class=\"row pt-5\">
        <div class=\"col-lg-3 col-md-6 mb-5\">
            <h4 class=\"text-primary mb-4\">Get In Touch</h4>
            <p><i class=\"fa fa-map-marker-alt mr-2\"></i>123 Street, New York, USA</p>
            <p><i class=\"fa fa-phone-alt mr-2\"></i>+012 345 67890</p>
            <p><i class=\"fa fa-envelope mr-2\"></i>info@example.com</p>
            <div class=\"d-flex justify-content-start mt-4\">
                <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                <a class=\"btn btn-outline-light rounded-circle text-center mr-2 px-0\" style=\"width: 40px; height: 40px;\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mb-5\">
            <h4 class=\"text-primary mb-4\">Quick Links</h4>
            <div class=\"d-flex flex-column justify-content-start\">
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Home</a>
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>About Us</a>
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Our Features</a>
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Classes</a>
                <a class=\"text-white\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Contact Us</a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mb-5\">
            <h4 class=\"text-primary mb-4\">Popular Links</h4>
            <div class=\"d-flex flex-column justify-content-start\">
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Home</a>
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>About Us</a>
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Our Features</a>
                <a class=\"text-white mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Classes</a>
                <a class=\"text-white\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Contact Us</a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mb-5\">
            <h4 class=\"text-primary mb-4\">Opening Hours</h4>
            <h5 class=\"text-white\">Monday - Friday</h5>
            <p>8.00 AM - 8.00 PM</p>
            <h5 class=\"text-white\">Saturday - Sunday</h5>
            <p>2.00 PM - 8.00 PM</p>
        </div>
    </div>
    <div class=\"container border-top border-dark pt-5\">
        <p class=\"m-0 text-center text-white\">
            &copy; <a class=\"text-white font-weight-bold\" href=\"#\">Your Site Name</a>. All Rights Reserved. Designed by
            <a class=\"text-white font-weight-bold\" href=\"https://htmlcodex.com\">HTML Codex</a>
        </p>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-outline-primary back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>


<!-- JavaScript Libraries -->
{% block js %}
    <script src=\"{{ asset('front/https://code.jquery.com/jquery-3.4.1.min.js')}}\"></script>
    <script src=\"{{ asset('front/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{ asset('front/lib/easing/easing.min.js')}}\"></script>
    <script src=\"{{ asset('front/lib/waypoints/waypoints.min.js)')}}\"></script>

    <!-- Contact Javascript File -->
    <script src=\"{{ asset('front/mail/jqBootstrapValidation.min.js')}}\"></script>
    <script src=\"{{ asset('front/mail/contact.js')}}'\"></script>

    <!-- Template Javascript -->
    <script src=\"{{ asset('front/js/main.js')}}\"></script>
{% endblock %}
</body>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"myTable\");
            tr = table.getElementsByTagName(\"tr\");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName(\"td\")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }
            }
        }
    </script>
</html>", "base.html.twig", "C:\\wamp64\\www\\FirstProject - Copie\\templates\\base.html.twig");
    }
}
