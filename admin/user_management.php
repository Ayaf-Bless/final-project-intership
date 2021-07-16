<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="a-style.css">
    <link rel="shortcut icon" href="../assets/img/faviconTra.png" type="image/png">
    <link rel="stylesheet" href="../modal.css" />

</head>

<body>
    <div class="wrapper">

        <?php include('./header.php'); ?>
        <div class="containte">
            <div class="side-bar">
                <?php include('./menu-side.php'); ?>
            </div>
            <div class="main-part">
                <div id="profil-admin" class="modal">
                    <div class="model-wrapper">
                        <img src="../assets/img/user.jpeg" alt="user">
                        <div class="user-name">
                            <p>Jonas</p>
                            <p>Mwila</p>
                        </div>
                        <a href="#" class="edit">edit</a>
                    </div>


                </div>

            </div>
        </div>

    </div>
    </div>

    <script src="../jquery.js"></script>
    <script src="../modal.js"></script>

</body>

</html>