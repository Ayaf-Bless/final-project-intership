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
                            <li class="active">User</li>
                        </a>
                        <a href="./police-management.php">
                            <li>Police</li>
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
                <table class="list-user">
                    <tr class="list-menu">
                        <td class="u-id-menu">Id</td>
                        <td class="u-name-menu">Name</td>
                        <td class="u-regNo-menu">RegNo</td>
                        <td class="u-mail-menu">E-mail</td>
                        <td class="u-status-menu">Status</td>
                        <td class="action-menu">Action</td>
                    </tr>
                    <tr class="list-item">
                        <td class="u-id item">01</td>
                        <td class="u-name item">Joel Kummba</td>
                        <td class="u-regNo item">SN576</td>
                        <td class="u-mail item">Joae@gmail.com</td>
                        <td class="u-status item">Missing</td>
                        <td class="action item">
                            <a href="#info-user" rel="modal:open"><img src="../assets/icons/info.png" alt="info" class="item-img"></a>

                            <a href="#update-user" rel="modal:open"><img src="../assets/icons/update.png" alt="update" class="item-img"></a>
                            <a href="#">
                                <img src="../assets/icons/delete.png" alt="delete" class="item-img">
                            </a>
                        </td>
                    </tr>
                    <tr class="list-item">
                        <td class="u-id item">02</td>
                        <td class="u-name item">Odia bula</td>
                        <td class="u-regNo item">ND874</td>
                        <td class="u-mail item">odia@gmail.com</td>
                        <td class="u-status item">Secured</td>
                        <td class="action item">
                            <a href="#"><img src="../assets/icons/info.png" alt="info" class="item-img"></a>

                            <a href="#"><img src="../assets/icons/update.png" alt="update" class="item-img"></a>
                            <a href="#">
                                <img src="../assets/icons/delete.png" alt="delete" class="item-img">
                            </a>
                        </td>
                    </tr>
                </table>
                <div class="modal" id="update-user">
                    <?php include('./user-profile-editable.php'); ?>
                </div>
                <div class="modal" id="info-user">
                    <?php include('./userInfo.php'); ?>
                </div>
            </div>
        </div>

    </div>
    </div>

    <script src="../jquery.js"></script>
    <script src="../modal.js"></script>

</body>

</html>