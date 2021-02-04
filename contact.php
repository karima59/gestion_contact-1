<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="save_contact.php" method="post">
                    <div class="form-group row">
                        <label for="nom" class="col-sm-4 col-form-label">Nom</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nom" id="nom">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prenom" class="col-sm-4 col-form-label">Prénom</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="prenom" id="prenom">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_de_naissance" class="col-sm-4 col-form-label">Date de naissance</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="date_de_naissance" id="date_de_naissance">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="civilite" class="col-sm-4 col-form-label">Civilite</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="civilite" id="civilite">
                        </div>
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





</body>

</html>