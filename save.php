<?php
session_start();

$db_server   = "localhost";
$db_username = "root";
$db_password = "";
$db_name     = "udemyfocusbd";
$conn = new mysqli($db_server, $db_username, $db_password, $db_name);
// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur connexion: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action_contact'])) {
    $nom   = htmlspecialchars(trim($_POST['nom']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $msg   = htmlspecialchars(trim($_POST['msg']));
    if (!empty($nom) && !empty($email) && !empty($msg)) {
        $stmt = $conn->prepare("INSERT INTO contacts (nom, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nom, $email, $msg);
        if ($stmt->execute()) { 
            echo "<script>alert(' Message envoyé avec succès !'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert(' Erreur lors de l\'envoi.');</script>";
        }
        $stmt->close();
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action_signup'])) {
    $nom      = htmlspecialchars(trim($_POST['nom_complet']));
    $email    = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);

    if (!empty($nom) && !empty($email) && !empty($password)) {
        $pass_hashed = password_hash($password, PASSWORD_DEFAULT);

        $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();
        
        if ($check->num_rows > 0) {
            echo "<script>alert(' Cet email est déjà utilisé !');</script>";
        } else {
            $stmt = $conn->prepare("INSERT INTO users (nom_complet, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nom, $email, $pass_hashed);
            if ($stmt->execute()) {
                echo "<script>alert(' Compte créé ! Connectez-vous.');</script>";
            }
            $stmt->close();
        }
        $check->close();
    }
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action_login'])) {
    $email    = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);

    if (!empty($email) && !empty($password)) {
        $stmt = $conn->prepare("SELECT id, nom_complet, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id']   = $row['id'];
                $_SESSION['user_name'] = $row['nom_complet'];
                echo "<script>alert('Bienvenue " . $row['nom_complet'] . " !'); window.location.href='index.php';</script>";
            } else {
                echo "<script>alert(' Mot de passe incorrect !');</script>";
            }
        } else {
            echo "<script>alert(' Aucun utilisateur trouvé !');</script>";
        }
        $stmt->close();
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

