<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="u-style.css">
    <link rel="shortcut icon" href="../assets/img/faviconTra.png" type="image/png">
    <link rel="stylesheet" href="../modal.css" />
    <script src="https://js.stripe.com/v3/"></script>
</head>

<body>
    <div class="wrapper">
        <?php include('./header.php'); ?>
        <div class="content">
            <div class="status">
                <p>Your account is outdated</p>
            </div>
            <div class="pricing-card">
                <div class="pricing">
                    <p class="price-title">Monthly</p>
                    <ul class="feature">
                        <li>full access of all the feature</li>
                        <li>unblock all options</li>
                        <li>track your child easily</li>
                    </ul>
                    <p class="price"><span class="currency">$</span>60</p>
                    <a href="#checkout-button" rel="modal:open" class="btn-price">subscribe</a>
                </div>
                <div class="pricing">
                    <p class="price-title">Yearly</p>
                    <ul class="feature">
                        <li>full access of all the feature</li>
                        <li>unblock all options</li>
                        <li>track your child easily</li>
                    </ul>
                    <p class="price"><span class="currency">$</span>120</p>
                    <a href="#checkout-button" rel="modal:open" class="btn-price">subscribe</a>
                </div>
            </div>
            <div class="modal" id="message">
                <?php include('./message.php'); ?>
            </div>
            <div class="modal" id="prof-user">
                <?php include('./profil-user.php'); ?>
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
            <div class="modal" id="checkout-button">
                <?php include('./stripeAPI/stripe-form.php'); ?>
            </div>
        </div>
    </div>





    <script src="../jquery.js"></script>
    <script src="../modal.js"></script>
    <script type="text/javascript">
        // Create an instance of the Stripe object with your publishable API key
        var stripe = Stripe('pk_test_51Hzda7IYh1zjrSDCyTAMLy2nENBHkBU0zlHmY7xB8IX0APTMIRt4fbe1BgrGmxYItTxVd29I6wGB2IzAvvTL94gz00vAESFy3j');
        var checkoutButton = document.getElementById('checkout-button');

        checkoutButton.addEventListener('click', function() {
            // Create a new Checkout Session using the server-side endpoint you
            // created in step 3.
            fetch('/create-checkout-session', {
                    method: 'POST',
                })
                .then(function(response) {
                    return response.json();
                })
                .then(function(session) {
                    return stripe.redirectToCheckout({
                        sessionId: session.id
                    });
                })
                .then(function(result) {
                    // If `redirectToCheckout` fails due to a browser or network
                    // error, you should display the localized error message to your
                    // customer using `error.message`.
                    if (result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function(error) {
                    console.error('Error:', error);
                });
        });
    </script>
</body>

</html>