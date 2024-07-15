<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        section {
            text-align: center;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        img {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            height: 300px;;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        #button-container {
            padding: 15px 30px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            cursor: pointer;
        }
        nav {
           background-image: url('image/todolist.jpeg'); 
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 40px;
        }
        footer {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .footer-clean {
            padding:50px 0;
            background-color:#fff;
            color:#4b4c4d;
            }

        .footer-clean h3 {
        margin-top:0;
        margin-bottom:12px;
        font-weight:bold;
        font-size:16px;
        }

        .footer-clean ul {
        padding:0;
        list-style:none;
        line-height:1.6;
        font-size:14px;
        margin-bottom:0;
        }

        .footer-clean ul a {
        color:inherit;
        text-decoration:none;
        opacity:0.8;
        }

        .footer-clean ul a:hover {
        opacity:1;
        }

        .footer-clean .item.social {
        text-align:right;
        }

        @media (max-width:767px) {
        .footer-clean .item {
            text-align:center;
            padding-bottom:20px;
        }
        }

        @media (max-width: 768px) {
        .footer-clean .item.social {
            text-align:center;
        }
        }

        .footer-clean .item.social > a {
        font-size:24px;
        width:40px;
        height:40px;
        line-height:40px;
        display:inline-block;
        text-align:center;
        border-radius:50%;
        border:1px solid #ccc;
        margin-left:10px;
        margin-top:22px;
        color:inherit;
        opacity:0.75;
        }

        .footer-clean .item.social > a:hover {
        opacity:0.9;
        }

        @media (max-width:991px) {
        .footer-clean .item.social > a {
            margin-top:40px;
        }
        }

        @media (max-width:767px) {
        .footer-clean .item.social > a {
            margin-top:10px;
        }
        }

        .footer-clean .copyright {
        margin-top:14px;
        margin-bottom:0;
        font-size:13px;
        opacity:0.6;
        }
        .buttons {
        float: right;
        }

    </style>

</head>
<body>
    <header>
        <h1>Bienvenue Sur Notre Site</h1>
        <div class="buttons">

    <button onclick="window.location.href='connect.html'">Connexion</button>
    <button onclick="window.location.href='cree.html'">Créer un compte</button>
    </div>
    </header>

    <section>
        <h1>Organisez Enfin Votre Vie Et Votre Travail.</h1>
        <p>Gagnez en concentration, en organisation et en sérénité avec Todoist. La 1ère application de gestion de tâches et de to do list.</p>
    </section>
 
    <img src="image/todolist.jpeg" alt="Description de l'image">
    
</form>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">



    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Fonctionnalités</h3>
                        <ul>
                            <li><a href="#">Fonctionnalités</a></li>
                            <li><a href="#">Bussiness</a></li>
                            <li><a href="#">Modéles</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Ressources</h3>
                        <ul>
                            <li><a href="#">Applicattions</a></li>
                            <li><a href="#">Centre da'aide</a></li>
                            <li><a href="#">API</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Doist</h3>
                        <ul>
                            <li><a href="#">a props</a></li>
                            <li><a href="#">Emplois</a></li>
                            <li><a href="#">Inspirations</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">To Do List© 2023</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
