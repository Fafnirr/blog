<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../public/css/inscription.css">
        <title>Document</title>
    </head>
    <body>
        <header>
            <img class="logo" src="../public/image/logoblog.png" alt="logoblog">
            <h2 class="title">Inscription</h2>
        </header>
        <main>
            <form action="../controller/inscription.php" id="InsForm" method="POST">
                <div class="formBody">
                    <div class="col-md-15">
                        <label for="inputNom" class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" id="inputNom" placeholder="Nom">
                    </div>
                    <div class="col-md-15">
                        <label for="inputPseuinputPrénomdo4" class="form-label">Prénom</label>
                        <input type="text" name="prenom" class="form-control" id="inputPrénom" placeholder="Prénom">
                    </div>
                    <div class="col-md-15">
                        <label for="inputMail" class="form-label">Mail</label>
                        <input type="mail" name="email" class="form-control" id="inputMail" placeholder="mail@mail.com">
                    </div>
                    <div class="col-md-15">
                        <label for="inputPseudo" class="form-label">Pseudo</label>
                        <input type="text" name="pseudo" class="form-control" id="inputPseudo" placeholder="Pseudo">
                    </div>
                    <div class="col-md-15">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn">Inscription</button>
                </div>
            </form>
        </main>
        <footer>

        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>