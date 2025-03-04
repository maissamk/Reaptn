<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* security/face_login.html.twig */
class __TwigTemplate_3993236a7a10a74563a7dbcd3b0b402c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'footer' => [$this, 'block_footer'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/face_login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/face_login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/face_login.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        yield "    <div style=\"display:none;\">
        <!-- Navbar content -->
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 10
        yield "    <div style=\"display:none;\">
        <!-- Footer content -->
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        yield "    <!-- Background Image -->
    <div class=\"background-container\" style=\"
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/backgroundlog.jpg"), "html", null, true);
        yield "');
        background-size: cover;
        background-position: center;
        filter: brightness(0.8); /* Darken the background slightly */
        z-index: -1;
    \"></div>

    <!-- Face Login Container -->
    <div class=\"face-login-container\" style=\"
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 20px;
    \">
        <!-- Card Container -->
        <div class=\"card p-4 shadow-lg\" style=\"
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            max-width: 800px;
            width: 100%;
            border-radius: 15px;
            backdrop-filter: blur(10px); /* Frosted glass effect */
            text-align: center;
        \">
            <h1 style=\"
                font-size: 2.5rem;
                color: #333;
                margin-bottom: 20px;
                font-weight: bold;
            \">Face Login</h1>

            <!-- Video Container -->
            <div class=\"video-container\" style=\"
                width: 100%;
                max-width: 640px;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                margin: 0 auto 20px;
            \">
                <video id=\"video\" width=\"640\" height=\"480\" autoplay style=\"width: 100%; height: auto;\"></video>
            </div>

            <!-- Capture Button -->
            <button id=\"capture\" style=\"
                background-color: #28a745;
                color: white;
                border: none;
                border-radius: 10px;
                padding: 12px 24px;
                font-size: 1rem;
                font-weight: bold;
                cursor: pointer;
                transition: background-color 0.3s ease, transform 0.2s ease;
                margin-bottom: 20px;
            \">
                <i class=\"fas fa-camera\"></i> Capture Image
            </button>

            <!-- Result Container -->
            <div id=\"result\" style=\"
                width: 100%;
                max-width: 640px;
                margin: 0 auto;
                text-align: center;
            \">
                <img id=\"capturedImage\" src=\"\" alt=\"Captured Image\" style=\"
                    max-width: 100%;
                    height: auto;
                    border-radius: 10px;
                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                    display: none;
                \">
            </div>

            <!-- Hidden Form -->
            <form id=\"faceLoginForm\" action=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("face_login");
        yield "\" method=\"POST\" style=\"display: none;\">
                <input type=\"hidden\" name=\"image\" id=\"imageInput\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
            </form>
        </div>
    </div>

    <!-- Font Awesome for Icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">

    <script>
        // Access the user's camera
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                var video = document.getElementById('video');
                video.srcObject = stream;
            })
            .catch(function (err) {
                console.log(\"Error accessing the camera: \" + err);
                alert(\"Unable to access the camera. Please ensure your camera is connected and permissions are granted.\");
            });

        // Capture Image
        document.getElementById('capture').addEventListener('click', function () {
            var canvas = document.createElement('canvas');
            var video = document.getElementById('video');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext('2d').drawImage(video, 0, 0);
            var dataURL = canvas.toDataURL('image/png');

            // Display the captured image
            var capturedImage = document.getElementById('capturedImage');
            capturedImage.src = dataURL;
            capturedImage.style.display = 'block';

            // Log the captured image data
            console.log('Captured image data:', dataURL);

            // Send the captured image to the server
            fetch('/save_captured_image', {
                method: 'POST',
                body: JSON.stringify({ image: dataURL }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Submit the form with the captured image
                    document.getElementById('imageInput').value = data.imagePath;
                    document.getElementById('faceLoginForm').submit();
                } else {
                    alert('Failed to save the captured image.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while saving the captured image.');
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/face_login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  226 => 101,  221 => 99,  141 => 22,  132 => 15,  119 => 14,  105 => 10,  92 => 9,  78 => 4,  65 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/security/face_login.html.twig #}
{% extends 'base.html.twig' %}
{% block navbar %}
    <div style=\"display:none;\">
        <!-- Navbar content -->
    </div>
{% endblock %}

{% block footer %}
    <div style=\"display:none;\">
        <!-- Footer content -->
    </div>
{% endblock %}
{% block body %}
    <!-- Background Image -->
    <div class=\"background-container\" style=\"
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('{{ asset('frontoffice/img/backgroundlog.jpg') }}');
        background-size: cover;
        background-position: center;
        filter: brightness(0.8); /* Darken the background slightly */
        z-index: -1;
    \"></div>

    <!-- Face Login Container -->
    <div class=\"face-login-container\" style=\"
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 20px;
    \">
        <!-- Card Container -->
        <div class=\"card p-4 shadow-lg\" style=\"
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            max-width: 800px;
            width: 100%;
            border-radius: 15px;
            backdrop-filter: blur(10px); /* Frosted glass effect */
            text-align: center;
        \">
            <h1 style=\"
                font-size: 2.5rem;
                color: #333;
                margin-bottom: 20px;
                font-weight: bold;
            \">Face Login</h1>

            <!-- Video Container -->
            <div class=\"video-container\" style=\"
                width: 100%;
                max-width: 640px;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                margin: 0 auto 20px;
            \">
                <video id=\"video\" width=\"640\" height=\"480\" autoplay style=\"width: 100%; height: auto;\"></video>
            </div>

            <!-- Capture Button -->
            <button id=\"capture\" style=\"
                background-color: #28a745;
                color: white;
                border: none;
                border-radius: 10px;
                padding: 12px 24px;
                font-size: 1rem;
                font-weight: bold;
                cursor: pointer;
                transition: background-color 0.3s ease, transform 0.2s ease;
                margin-bottom: 20px;
            \">
                <i class=\"fas fa-camera\"></i> Capture Image
            </button>

            <!-- Result Container -->
            <div id=\"result\" style=\"
                width: 100%;
                max-width: 640px;
                margin: 0 auto;
                text-align: center;
            \">
                <img id=\"capturedImage\" src=\"\" alt=\"Captured Image\" style=\"
                    max-width: 100%;
                    height: auto;
                    border-radius: 10px;
                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                    display: none;
                \">
            </div>

            <!-- Hidden Form -->
            <form id=\"faceLoginForm\" action=\"{{ path('face_login') }}\" method=\"POST\" style=\"display: none;\">
                <input type=\"hidden\" name=\"image\" id=\"imageInput\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            </form>
        </div>
    </div>

    <!-- Font Awesome for Icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">

    <script>
        // Access the user's camera
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                var video = document.getElementById('video');
                video.srcObject = stream;
            })
            .catch(function (err) {
                console.log(\"Error accessing the camera: \" + err);
                alert(\"Unable to access the camera. Please ensure your camera is connected and permissions are granted.\");
            });

        // Capture Image
        document.getElementById('capture').addEventListener('click', function () {
            var canvas = document.createElement('canvas');
            var video = document.getElementById('video');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext('2d').drawImage(video, 0, 0);
            var dataURL = canvas.toDataURL('image/png');

            // Display the captured image
            var capturedImage = document.getElementById('capturedImage');
            capturedImage.src = dataURL;
            capturedImage.style.display = 'block';

            // Log the captured image data
            console.log('Captured image data:', dataURL);

            // Send the captured image to the server
            fetch('/save_captured_image', {
                method: 'POST',
                body: JSON.stringify({ image: dataURL }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Submit the form with the captured image
                    document.getElementById('imageInput').value = data.imagePath;
                    document.getElementById('faceLoginForm').submit();
                } else {
                    alert('Failed to save the captured image.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while saving the captured image.');
            });
        });
    </script>
{% endblock %}", "security/face_login.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\security\\face_login.html.twig");
    }
}
