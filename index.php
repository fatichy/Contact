<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    
    <style>
        label.error{
            font-weight: 700;
            display: block;
            color: #f00
        }
    </style>
</head>

<body>

    <div class="container">

        <form action="contact.php" method="post" id="formvalide">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" ><br><br>

            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" ><br><br>

            <label for="message">Message :</label>
            <textarea id="message" name="formessage" rows="4"  ></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    <script src='validation.js'></script>
</body>

</html>