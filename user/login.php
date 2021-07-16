<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="u-style.css">
    <link rel="shortcut icon" href="../assets/img/faviconTra.png" type="image/png">
    <link rel="stylesheet" href="../modal.css" />


    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
    <script>
        window.ENV_VARIABLE = 'developer.here.com'
    </script>

</head>

<body>
    <div class="wrapper">
        <?php include('./header.php'); ?>
        <div id="profil-user" class="modal">
            <div class="model-wrapper">
                <img src="../assets/img/user.jpeg" alt="user">
                <div class="user-name">
                    <p>Jonas</p>
                    <p>Mwila</p>
                </div>
                <a href="#editable" rel="modal:open" class="edit">edit</a>
                <p class="decription">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto voluptatem obcaecati totam repellat animi, laudantium est sunt perspiciatis ex, sapiente aliquid saepe cupiditate accusantium facere quam, iusto natus consequuntur? Repudiandae?</p>
                <p class="reg-no">Registration number: <span>NS5489</span></p>
                <p class="phone">+256 795422156</p>
                <div class="relation">
                    <ul>
                        <div>
                            <li>alias</li> <span class="fam">child</span>
                        </div>
                        <div>
                            <li>naomi</li> <span class="fam">child</span>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="modal" id="message">
            <?php include('./message.php'); ?>
        </div>
        <div class="modal" id="searchResult">
            <?php include('./searchResult.php'); ?>
        </div>
        <div class="modal" id="requestSent">
            <?php include('./userSendReq.php'); ?>
        </div>
        <div class="modal" id="prof-user">
            <?php include('./profil-user.php'); ?>
        </div>
        <div class="modal" id="missingOne">
            <?php include('./missing.php'); ?>
        </div>

        <div class="modal" id="viewReqProf">
            <?php include('./viewReqProfil.php'); ?>
        </div>
        <div class="modal" id="notif">
            <?php include('./notifPapel.php'); ?>
        </div>
        <div class="modal" id="likedPeople">
            <?php include('./linkedPeople.php'); ?>
        </div>
        <div class="modal" id="editable">
            <?php include('./editable.php'); ?>
        </div>

        <div id="map"></div>

    </div>


    <script>
        // var platform = new H.service.Platform({
        //     'apikey': '{Fv3yBjU_gTuHWTClWjlk6FVfcgVEKR22Lx2lIBxFbbs}'
        // });
        // var defaultLayers = platform.createDefaultLayers();

        // // Instantiate (and display) a map object:
        // var map = new H.Map(
        //     document.getElementById('map'),
        //     defaultLayers.normal.map, {
        //         zoom: 10,
        //         center: {
        //             lat: 0.347596,
        //             lng: 32.582520
        //         }
        //     });
        function moveMapToBerlin(map) {
            map.setCenter({
                lat: 0.347596,
                lng: 32.582520
            });
            map.setZoom(14);
        }
        var platform = new H.service.Platform({
            apikey: 'Fv3yBjU_gTuHWTClWjlk6FVfcgVEKR22Lx2lIBxFbbs'
        });
        var defaultLayers = platform.createDefaultLayers();
        var map = new H.Map(document.getElementById('map'),
            defaultLayers.vector.normal.map, {
                center: {
                    lat: 0.347596,
                    lng: 32.582520
                },
                zoom: 4,
                pixelRatio: window.devicePixelRatio || 1
            });
        window.addEventListener('resize', () => map.getViewPort().resize());
        var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
        var ui = H.ui.UI.createDefault(map, defaultLayers);
        window.onload = function() {
            moveMapToBerlin(map);
        }
    </script>
    <script>

    </script>
    <script src="../jquery.js"></script>
    <script src="../modal.js"></script>

</body>

</html>