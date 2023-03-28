

<?php include('templates/header.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phishing Training Website - Email Verification</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px;
        }

        img {
            max-width: 100%;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #f2f2f2;
        }

        button {
            padding: 10px 20px;
            background-color: #006699;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        .training-info {
            display: none;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0px 2px 10px rgba(0,0,0,0.3);
            max-width: 500px;
            text-align: left;
        }

        .training-info p {
            margin-bottom: 10px;
        }
    </style>
    <script>
        function showTrainingInfo(isFake) {
            var trainingInfo = document.querySelector('.training-info');
            var message = '';
            if (isFake) {
                message = 'That\'s right, this email is a phishing attack.<br>';
            } else {
                message = 'Incorrect, this email is a phishing attack.<br>';
            }

            message = message +
                'Here are some indicators that it was fake:<br>-' +
                'The sender\'s email address was different from the usual one.<br>-' +
                'The email contained urgent language, urging you to act immediately.<br>- ' +
                'The email contained a suspicious link or attachment.\n\nRemember, always be cautious when receiving unexpected emails and ' +
                'verify their legitimacy before taking any action.';

            trainingInfo.innerHTML = '<p>' + message + '</p>';
            trainingInfo.style.display = 'block';

            var button = document.getElementById("continue-button");
            button.style.display = "block";
        }
    </script>
</head>
<body>
<header>
    <div class="container centre-text">
    <h1>Phishing Trainer - Practice Q1</h1>
</header>
<main>
    <div class="container">
        <img src="email_image.jpg" alt="Placeholder Image">
        <form action="" method="post" onsubmit="showTrainingInfo(document.querySelector('input[name=verification]:checked').value == 'fake'); return false;">
            <fieldset>
                <legend>Is this email legitimate or a phishing attack?</legend>
                <label>
                    <input type="radio" name="verification" value="real">
                    Real
                </label>
                <label>
                    <input type="radio" name="verification" value="fake">
                    Fake
                </label>
            </fieldset>
            <button type="submit">Submit</button>
        </form>
        <div class="training-info">
            <p></p>
        </div>
        <br><br>
        <button id="continue-button" style="display: none" type="button" class="btn btn-primary brn-lg" onclick="window.location.href='training2.php'">Continue</button>
        <br><br>
    </div>
</main>
</div>
</body>
</html>
