<?php
/* Template name: influenzanet_results */
get_header();
?>
    <style>
        #page {
            width: 1124px;
        #col1-right {
            max-width: 900px;
        }
    </style>
    <script>
        var baseUrl = "https://results.influenzanet.eu/";
        var cssFiles = [
            'eu/media/base/css/default.css',
            'eu/colors.css',
            'eu/media/base/js/fancybox/jquery.fancybox-1.3.4.css',
            'eu/media/sander/dropdown.css',
            'eu/media/sander/style.css',
            'eu/media/sander/slides/style.css'
        ];
        var jsFiles = [
            'eu/media/base/js/jquery-1.5.1.min.js',
            'eu/media/base/js/fancybox/jquery.fancybox-1.3.4.pack.js',
            'eu/media/base/js/fancybox/jquery.mousewheel-3.0.4.pack.js',
            'eu/media/sander/slides/slides.js',
            'eu/media/sander/fancybox.js',
            'eu/media/sander/dropdown.js',
            'eu/media/sander/slides.js'
        ];
        for (let i = 0; i < cssFiles.length; i++) {
            var linkElement = document.createElement("link");
            linkElement.rel = "stylesheet";
            linkElement.href = baseUrl + cssFiles[i];
            document.head.appendChild(linkElement);
        }
        for (let i = 0; i < jsFiles.length; i++) {
            var scriptElement = document.createElement("script");
            scriptElement.setAttribute("src", baseUrl + jsFiles[i]);
            document.head.appendChild(scriptElement);
        }
    </script>
<?php
readfile("https://results.influenzanet.eu/results.php?" . http_build_query($_REQUEST));
?>
<?php
get_footer();

