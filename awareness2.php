
<?php include('templates/header.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phishing Trainer</title>
</head>
<body>
<div class="container text-center">
<header>
    <h1>Phishing Trainer - Context Example</h1>
</header>
<main>

    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                <img src="images/Context_Indicators.png" alt="Placeholder Image">
            </div>
            <div class="col">
                By asking the five context questions, we can see if this email is a Phishing attack, or a real alert from eBay. <br><br>


                1. Did I expect this email? <br>
                I do not use eBay, so this is an unexpected email, and may be fake. <br><br>

                2. Is the email trying to grab my attention? <br>
                The subject line uses an ! to try to grab my attention, when a legitimate email would normally be more formal. <br><br>

                3. Do I recognize the sender? <br>
                I do not recognize the sender email address, this is the first time I've gotten a message from them, so there is no established trust. <br><br>

                4. Does the email know me?<br>
                The email is using a generic greeting, rather than any of my personal details. Real business emails would usually know my name and use it to appear legitimate. <br><br>

                5. Is the email trying to pressure me into a decision? <br>
                The email content states I will lose access to my eBay account if I don't comply. This pressures me to follow the link or risk losing something, a common phishing tactic. <br><br>


            </div>
        </div>
    </div>

    <br><br>
    <button type="button" class="btn btn-primary brn-lg" onclick="window.location.href='awareness1.php'">Back</button>
    <button type="button" class="btn btn-primary brn-lg" onclick="window.location.href='awareness3.php'">Continue</button>
    <br><br>

</main>
</div>
</body>
</html>
