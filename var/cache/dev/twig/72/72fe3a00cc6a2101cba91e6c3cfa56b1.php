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

/* face_recognition/index.html.twig */
class __TwigTemplate_438029b67f6428a75be558099089a107 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "face_recognition/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "face_recognition/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Face Recognition Camera</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg,rgb(129, 203, 17),rgb(239, 239, 239)); /* Gradient background */
            color: orange; /* White text for better contrast */
        }
        h1 {
            color: white;
            margin-bottom: 20px;
        }
        #video {
            border: 2px solid white;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        #capture, #clear {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #capture {
            background-color: #28a745;
            color: white;
        }
        #clear {
            background-color: #dc3545;
            color: white;
        }
        #capture:hover, #clear:hover {
            opacity: 0.8;
        }
        #result {
            margin-top: 20px;
        }
        #result img {
            border: 2px solid white;
            border-radius: 10px;
            max-width: 100%;
        }
        .loader {
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
            display: none;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <h1>Face Recognition Camera</h1>

    <!-- Video element for live camera feed -->
    <video id=\"video\" width=\"640\" height=\"480\" autoplay></video>
    <br>
    <button id=\"capture\">Capture Image</button>
    <button id=\"clear\">Clear Image</button>

    <!-- Display the captured image -->
    <div id=\"result\">
        <h2>Captured Image</h2>
        <img id=\"capturedImage\" src=\"\" alt=\"Captured Image\" style=\"display: none;\">
    </div>

    <!-- Loading spinner -->
    <div class=\"loader\" id=\"loader\"></div>

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

        // Capture image from the video
        document.getElementById('capture').addEventListener('click', function () {
            var canvas = document.createElement('canvas');
            var video = document.getElementById('video');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext('2d').drawImage(video, 0, 0);
            var dataURL = canvas.toDataURL('image/png');





    // Automatically trigger download of the image as 'image.png'
   


            // Display the captured image
            var capturedImage = document.getElementById('capturedImage');
            capturedImage.src = dataURL;
            capturedImage.style.display = 'block';
            // Show loader
            var loader = document.getElementById('loader');
            loader.style.display = 'block';
 var downloadLink = document.createElement('a');
    downloadLink.href = dataURL;
    downloadLink.download = 'image1.png'; // Specify the filename for the download
    downloadLink.click(); // Trigger the download immediately

            // Send the captured image to the server
            fetch('/upload_image', {
                method: 'POST',
                body: JSON.stringify({ image: dataURL }),
                headers: {
                    'Content-Type': 'application/json'
                }
            }).then(response => response.json())
              .then(result => {
                  loader.style.display = 'none';
                  alert(result.result);
              })
              .catch(error => {
                  console.log('Error:', error);
                  loader.style.display = 'none';
                  alert('An error occurred while processing the image.');
              });
        });

        // Clear the captured image
        // document.getElementById('clear').addEventListener('click', function () {
        //     var capturedImage = document.getElementById('capturedImage');
        //     capturedImage.src = '';
        //     capturedImage.style.display = 'none';
        // });
    </script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "face_recognition/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Face Recognition Camera</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg,rgb(129, 203, 17),rgb(239, 239, 239)); /* Gradient background */
            color: orange; /* White text for better contrast */
        }
        h1 {
            color: white;
            margin-bottom: 20px;
        }
        #video {
            border: 2px solid white;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        #capture, #clear {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #capture {
            background-color: #28a745;
            color: white;
        }
        #clear {
            background-color: #dc3545;
            color: white;
        }
        #capture:hover, #clear:hover {
            opacity: 0.8;
        }
        #result {
            margin-top: 20px;
        }
        #result img {
            border: 2px solid white;
            border-radius: 10px;
            max-width: 100%;
        }
        .loader {
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
            display: none;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <h1>Face Recognition Camera</h1>

    <!-- Video element for live camera feed -->
    <video id=\"video\" width=\"640\" height=\"480\" autoplay></video>
    <br>
    <button id=\"capture\">Capture Image</button>
    <button id=\"clear\">Clear Image</button>

    <!-- Display the captured image -->
    <div id=\"result\">
        <h2>Captured Image</h2>
        <img id=\"capturedImage\" src=\"\" alt=\"Captured Image\" style=\"display: none;\">
    </div>

    <!-- Loading spinner -->
    <div class=\"loader\" id=\"loader\"></div>

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

        // Capture image from the video
        document.getElementById('capture').addEventListener('click', function () {
            var canvas = document.createElement('canvas');
            var video = document.getElementById('video');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext('2d').drawImage(video, 0, 0);
            var dataURL = canvas.toDataURL('image/png');





    // Automatically trigger download of the image as 'image.png'
   


            // Display the captured image
            var capturedImage = document.getElementById('capturedImage');
            capturedImage.src = dataURL;
            capturedImage.style.display = 'block';
            // Show loader
            var loader = document.getElementById('loader');
            loader.style.display = 'block';
 var downloadLink = document.createElement('a');
    downloadLink.href = dataURL;
    downloadLink.download = 'image1.png'; // Specify the filename for the download
    downloadLink.click(); // Trigger the download immediately

            // Send the captured image to the server
            fetch('/upload_image', {
                method: 'POST',
                body: JSON.stringify({ image: dataURL }),
                headers: {
                    'Content-Type': 'application/json'
                }
            }).then(response => response.json())
              .then(result => {
                  loader.style.display = 'none';
                  alert(result.result);
              })
              .catch(error => {
                  console.log('Error:', error);
                  loader.style.display = 'none';
                  alert('An error occurred while processing the image.');
              });
        });

        // Clear the captured image
        // document.getElementById('clear').addEventListener('click', function () {
        //     var capturedImage = document.getElementById('capturedImage');
        //     capturedImage.src = '';
        //     capturedImage.style.display = 'none';
        // });
    </script>
</body>
</html>", "face_recognition/index.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\face_recognition\\index.html.twig");
    }
}
