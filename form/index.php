<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="POST" id="submission-form" action="//public.bc.fi/s2100133/Helin_harjoitukset/form/contact.php">
    <input type="text" name="username" id="username" placeholder="Enter your username">
    <input type="password" name="password" id="password" placeholder="Pick a password">
    <input type="email" name="email" id="email" placeholder="your email">
    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message here"></textarea>
    <button type="submit">Send email</button>
    </form>
    <!-- <script>
    document.getElementById('submission-form').addEventListener('submit',(event) => {
        event.preventDefault();
        const username= event.target.username.value;
        const password= event.target.password.value;
        const message= event.target.message.value;
        fetch('/contact.php', {
            body: JSON.stringify ({
                username,
                passwrod,
                message
            })
        })
        console.log(username,password,message);
    })
    </script> -->
</body>
</html>