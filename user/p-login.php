<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="u-style.css">
    <link rel="stylesheet" href="../modal.css" />


</head>

<body>
    <div class="wrapper">
        <?php include('./p-header.php'); ?>
        <div class="contain">
            <!-- <?php include('./police/no-new.php'); ?> -->
            <?php include('./police/case.php'); ?>
        </div>
        <div class="modal" id="policedetail">
            <?php include('./police/modal-detail.php'); ?>
        </div>
    </div>


    <script src="../jquery.js"></script>
    <script src="../modal.js"></script>
</body>

</html>