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
                <nav class="menu-containte">
                    <ul>
                        <a href="./index.php">
                            <li>User</li>
                        </a>
                        <a href="./police-management.php">
                            <li class="active">Police</li>
                        </a>
                        <a href="./other-management.php">
                            <li>Others</li>
                        </a>
                    </ul>
                </nav>
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
                <a href="#update-police" rel="modal:open" class="add-btn">
                    <img src="../assets/icons/add.png" alt="add"> add
                </a>
                <table class="list-police-table">
                    <tr class="list-menu">
                        <td class="">Id</td>
                        <td class="">Station name</td>
                        <td class="">Phone_number</td>
                        <td class="">Action</td>
                    </tr>
                    <tr class="list-item">
                        <td class="u-id item">01</td>
                        <td class="u-name item">Kabalagala</td>
                        <td class="u-regNo item">0794587621</td>
                        <td class="action item">
                            <a href="#"><img src="../assets/icons/info.png" alt="info" class="item-img"></a>

                            <a href="#update-police" rel="modal:open"><img src="../assets/icons/update.png" alt="update" class="item-img"></a>
                            <a href="#">
                                <img src="../assets/icons/delete.png" alt="delete" class="item-img">
                            </a>
                        </td>
                    </tr>
                </table>
                <div class="modal" id="update-police">
                    <?php include('./police-editable.php'); ?>
                </div>

            </div>
        </div>

    </div>
    </div>

    <script src="../jquery.js"></script>
    <script src="../modal.js"></script>

</body>

</html>