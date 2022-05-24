<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="container" style=" margin: 0 auto; width:500px; padding-top:20%;">
    <div>
        <button data-toggle="modal" data-target="#formulaire" class="btn btn-primary">Ajouter une nouvelle machine</button>
        <button data-toggle="modal" data-target="#formulaire" class="btn btn-primary"> voir la liste des machines</button>
    </div>
</div>
<div class="modal fade" id="formulaire">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Enregistrer une machine </h4>              
                <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
                </button>
            </div>
            <div class="container">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Numéro de série:</label>
                                <input type="text" class="form-control" name="Nserie" required="1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> nom de la machine:</label>
                                <input type="text" class="form-control" name="name" required="1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> la marque:</label>
                                <input type="text" class="form-control" name="marque" required="1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> le modèle:</label>
                                <input type="text" class="form-control" name="modele" required="1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> la témpérature idéale:</label>
                                <input type="number" class="form-control" name="temperature" required="1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> le courant idéal:</label>
                                <input type="number" class="form-control" name="courant" required="1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> l'humidité:</label>
                                <input type="number" class="form-control" name="humidite" required="1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> la tension:</label>
                                <input type="number" class="form-control" name="tension" required="1">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="display:inline-block; " >
                        <div class="col" style="margin: 0% 70%;" >
                           <div class="form-group" >
                                <button class="btn btn-primary" type="submit">Ajouter</button>
                                <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>