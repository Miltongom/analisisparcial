<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: ../../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: linear-gradient(135deg, #004d00, #007f00);
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }
        .welcome-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(20px);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 400px;
            transition: transform 0.3s ease-in-out;
        }
        .welcome-card:hover {
            transform: scale(1.05);
        }
        .welcome-card h1 {
            font-size: 2rem;
            margin-bottom: 15px;
        }
        .welcome-card p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .btn-logout {
            background: #ff4b5c;
            border: none;
            padding: 12px 25px;
            font-size: 1rem;
            border-radius: 30px;
            transition: 0.3s ease;
            color: white;
            font-weight: bold;
        }
        .btn-logout:hover {
            background: #e04350;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-card">
            <h1>Welcome, <?php echo $_SESSION["usuario"]; ?> 🎉</h1>
            <p>You have successfully logged in.</p>
            <a href="logout.php" class="btn btn-logout">Log out</a>
        </div>
    </div>
</body>
</html>

<?php
// Create the logout.php file
file_put_contents("logout.php", "<?php\nsession_start();\nsession_destroy();\nheader('Location: /index.php');\nexit();");
?>
