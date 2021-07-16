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
    <?php

    include '../config.php';
    $select = mysqli_query($conect, "SELECT *
    FROM paymentmode ");

    $num_rows = mysqli_num_rows($select);
    if ($num_rows == 0) {
        echo "No records found";
    } else {
        while ($cols = mysqli_fetch_assoc($select)) {
            echo '<tr class="list-menu">';
            echo '<td class="u-name-menu">' . $cols["paymentMode_name"] . '</td>';
            echo '</tr>'; ?>

            <!-- <td class="u-id-menu">Id</td> -->


    <?php
        }
    }

    ?>
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
                            <li>Police</li>
                        </a>
                        <a href="./other-management.php">
                            <li class="active">Others</li>
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
                <div class="dividor">
                    <p class="dividor-title">Payment</p>
                    <table class="list-user">
                        <tr class="list-menu">
                            <!-- <td class="u-id-menu">Id</td>  -->
                            <td class="u-name-menu">Payment-mode</td>
                            <td class="action-menu">Action</td>
                        </tr>
                        <tr class="list-item">
                            <!-- <td class="u-id item">01</td> -->
                            <td class="u-name item">Visa-card</td>
                            <td class="action item">
                                <a href="#"><img src="../assets/icons/info.png" alt="info" class="item-img"></a>

                                <a href="#pay-update" rel="modal:open"><img src="../assets/icons/update.png" alt="update" class="item-img"></a>
                                <a href="#" onclick="">
                                    <img src="../assets/icons/delete.png" alt="delete" class="item-img">
                                </a>
                            </td>
                        </tr>
                        <tr class="list-item">
                            <!-- <td class="u-id item">02</td> -->
                            <td class="u-name item">Mobile-money</td>
                            <td class="action item">
                                <a href="#"><img src="../assets/icons/info.png" alt="info" class="item-img"></a>

                                <a href="#"><img src="../assets/icons/update.png" alt="update" class="item-img"></a>
                                <a href="#" onclick="return confirm('are you sure you want to delete')">
                                    <img src="../assets/icons/delete.png" alt="delete" class="item-img">
                                </a>
                            </td>
                        </tr>

                    </table>
                </div>
                <div class="dividor">
                    <p class="dividor-title">Subscription</p>

                    <table class="list-user">
                        <tr class="list-menu">
                            <td class="u-id-menu">Id</td>
                            <td class="u-id-menu">Duration</td>
                            <td class="u-name-menu">Price</td>
                            <td class="action-menu">Action</td>
                        </tr>
                        <tr class="list-item">
                            <td class="u-id item">01</td>
                            <td class="u-name item">Monthly</td>
                            <td class="u-regNo item">$60</td>
                            <td class="action item">
                                <a href="#"><img src="../assets/icons/info.png" alt="info" class="item-img"></a>

                                <a href="#"><img src="../assets/icons/update.png" alt="update" class="item-img"></a>
                                <a href="#">
                                    <img src="../assets/icons/delete.png" alt="delete" class="item-img">
                                </a>
                            </td>
                        </tr>
                        <tr class="list-item">
                            <td class="u-id item">02</td>
                            <td class="u-name item">Yearly</td>
                            <td class="u-regNo item">$120</td>
                            <td class="action item">
                                <a href="#"><img src="../assets/icons/info.png" alt="info" class="item-img"></a>

                                <a href="#"><img src="../assets/icons/update.png" alt="update" class="item-img"></a>
                                <a href="#">
                                    <img src="../assets/icons/delete.png" alt="delete" class="item-img">
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="dividor country">
                    <p class="dividor-title">Country</p>

                    <table class="list-user">
                        <tr class="list-menu">
                            <td class="u-id-menu">Id</td>
                            <td class="u-name-menu">Name</td>
                            <td>Action</td>
                        </tr>
                        <tr class="list-item">
                            <td class="u-id item">01</td>
                            <td class="u-name item">Uganda</td>
                            <td class="action item">
                                <a href="#"><img src="../assets/icons/info.png" alt="info" class="item-img"></a>

                                <a href="#"><img src="../assets/icons/update.png" alt="update" class="item-img"></a>
                                <a href="#">
                                    <img src="../assets/icons/delete.png" alt="delete" class="item-img">
                                </a>
                            </td>
                        </tr>
                    </table>
                    <a href="#" class="add-btn-county">
                        <img src="../assets/icons/add.png" alt="add"> add
                    </a>
                </div>
                <div class="modal" id="pay-update">
                    <?php include('./pay-editable.php'); ?>
                </div>


            </div>
        </div>

    </div>
    </div>

    <script src="../jquery.js"></script>
    <script src="../modal.js"></script>

</body>

</html>