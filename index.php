
<?php include('templates/header.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phishing Trainer</title>

    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            grid-gap: 20px;
            padding: 50px;
        }

        .container section {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
        }

        h1 {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
        }

        button {
            grid-column: 1/3;
            grid-row: 4/4;
            padding: 20px;
            background-color: #006699;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
        }
    </style>
</head>
<body>
<header>
    <h1>Welcome to Phishing Trainer</h1>
</header>
<main>
    <div class="container">
        <section>
            <h2><a href="https://forms.office.com/e/hSxiT3irdZ">Test 1</a></h2>
            <p>Take this test first. It will show you images of emails, and you need to decide if they are legitimate, or fake.</p>
        </section>
        <section>
            <h2><a href="https://forms.office.com/e/hSxiT3irdZ">Test 2</a></h2>
            <p>Take this test after completing the training below, it is the same as the previous test and asks you to decide if emails are legitimate, or fake.</p>
        </section>
        <section>
            <h2>What is Phishing?</h2>
            <p>Phishing is a type oard numbers, and other personal data. Phishing attacks are typically carried out through email, text messages, or social media messages.</p>
        </section>
        <section>
            <h2>Why is Phishing Dangerous?</h2>
            <p>Phishing attacks can result in identity theft, financial loss, and damage to your organization's reputation. In addition, phishing attacks can also lead to malware infections, which can compromise your entire system.</p>
        </section>
        <section>
            <h2>How to Protect Yourself from Phishing?</h2>
            <p>To protect yourself from phishing attacks, you should always be vigilant when receiving emails, text messages, or social media messages. You should never click on links or download attachments from unknown sources. In addition, you should always verify the sender's identity before responding to any message.</p>
        </section>
        <section>
            <h2>Types of Phishing</h2>
            <p>There are several types of phishing attacks, including spear phishing, whaling, vishing, and smishing. Each type of attack targets a specific group of individuals and uses different methods to steal sensitive information.</p>
        </section>
        <button><a href="awareness1.php" style="color: #fff;">Start Training</a></button>
    </div>
</main>
<footer>
    <p>Copyright &copy; 2023 Phishing Trainer</p>
</footer>
</body>
</html>
