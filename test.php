<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basit PHP Web Sayfası</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Merhaba Dünya!</h1>
        <p>Bu basit bir PHP web sayfasıdır.</p>

        <form method="POST" action="">
            <label for="name">Adınızı Girin:</label>
            <input type="text" id="name" name="name" placeholder="Adınız">
            <input type="submit" value="Gönder">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["name"])) {
            $name = htmlspecialchars($_POST["name"]); // Güvenlik için özel karakterleri filtreler
            echo "<p><strong>Merhaba, $name!</strong> Hoş geldiniz.</p>";
        }
        ?>
    </div>
</body>
</html>
