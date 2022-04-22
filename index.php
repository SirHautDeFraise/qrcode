<?php

?>

<head>
    <title>QR Code</title>
    <style>
        a {
            text-decoration: none;
        }

        footer {
            margin-top: 100px;
        }
        img {
            margin-bottom: 100px;
        }
    </style>
</head>
<header>
    <h1>QR Code Test</h1>
</header>

<body>
    <form method="POST">
        <label for="link">Enter un lien :</label>
        <input type="text" name="link" id="link" required>

        <input type="submit" value="Transformation !">
    </form>
    <?php if (!empty($_POST['link'])) {
        $link = $_POST['link'];
    ?>
        <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo $link ?>&size=100x100&format=svg" alt="QR CODE SVG"><br>
        <form action="pdf.php" method="POST">
            <label for="linkpdf">Partager en PDF ?</label>
            <input type="text" name="linkpdf" id="linkpdf" value="<?php echo $link ?>" required >
            <input type="submit" value="Ok !">
        </form>
        <!-- <a href="pdf.php" target="_blank">En format PDF.</a> -->
    <?php
    } ?>
</body>
<footer>
    <p>Par Thibault</p>
</footer>