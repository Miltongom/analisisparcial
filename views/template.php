<?php
$path = TemplateController::path();
echo "Ruta base: " . $path; // Esto imprimirá la ruta base en pantalla para depuración.
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Estructura correcta de un proyecto web" />
    <meta name="author" content="" />
    <title>Freelance - Start Bootstrap Theme</title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo $path; ?>views/assets/img/favicon.png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="<?php echo $path; ?>views/assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">

    <div class="wrapper">
        <?php
        include 'modules/nav.php';
        include 'modules/header.php';
        include 'pages/portfolio/portfolio.php';
        include 'pages/contact/contact.php';
        include 'modules/footer.php';
        include 'modules/copyright.php';
        ?>
    </div>
<!-- IMPROVED LOGIN MODAL -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4" style="border-radius: 15px; background: rgba(255, 255, 255, 0.9); box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
            <div class="modal-header border-0">
                <h5 class="modal-title text-center w-100" id="loginModalLabel">🔐 Sign In</h5>
            </div>
            <div class="modal-body">
                <form id="loginForm">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label fw-bold">📧 Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" id="loginEmail" name="email" placeholder="example@email.com" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">🔑 Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Your password" required>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary w-100" style="border-radius: 5px; font-size: 1.1rem;">🛡️ Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Agregar FontAwesome para los íconos -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>


    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="<?php echo $path; ?>views/assets/js/scripts.js"></script>

    <!-- SB Forms JS -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#loginBtn').click(function() {
                $('#loginModal').modal('show');
            });
        });
    </script>
</body>
</html>
