<!DOCTYPE html>
<html lang="es" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Voithos</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Favicon -->
    <!-- <link rel="apple-touch-icon" href="./../../assets/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="./../../assets/favicon.ico">
    <link rel="icon" type="image/x-icon" href="./../../assets/favicon.ico" /> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="app/assets/vendor/fonts/boxicons.css" />


    <!-- Core CSS -->
    <link rel="stylesheet" href="app/assets/vendor/css/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="app/assets/vendor/css/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="app/assets/css/demo.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="app/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="app/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="app/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="app/assets/js/config.js"></script>
</head>

</html>

<body>
    <div class="accordion accordion-flush list-group" id="accordionFlushExample">
        <?php foreach ($data as $row): ?>
            
            <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button list-group-item-action collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="flush-<?php echo $row['idcomite'] ?>" aria-expanded="false" aria-controls="flush-<?php echo $row['idcomite'] ?>">
                    <?php echo $row['nombre'] ?>
                </button>
            </h2>
            <div id="flush-<?php echo $row['idcomite'] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    class. This is the first item's accordion body.</div>
            </div>
        </div>
        <?php endforeach; ?>

        <p>end for each</p>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button list-group-item-action collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-please" aria-expanded="false" aria-controls="flush-please">
                    Accordion Item #1
                </button>
            </h2>
            <div id="flush-please" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button list-group-item-action collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Accordion Item #2
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this
                    being filled with some actual content.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button list-group-item-action collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Accordion Item #3
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                    happening here in terms of content, but just filling up the space to make it look, at least at first
                    glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
        </div>
    </div>
    <?php
    var_dump($data);
    var_dump($dataportafolio);
    ?>
</body>

<?php
//acordeon llamando la lista de comites y adentro sus portafolios, boton de generar solicitud
//modal para añadir la solicitud

