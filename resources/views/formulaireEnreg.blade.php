<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            enregistrer
        </title>
        <link rel="stylesheet" href="moncss2.css">
        <link rel="stylesheet" href="roboto/Roboto-Italic.ttf">
        <link rel="stylesheet" href="roboto/Roboto-Light.ttf">
    </head>
    <body class="bac_formulaireEnreg">
        
            
    <div class="container">
        <div class="row">
            <div class="col-6 bg-info">
                <h1>Enregistrement du patient</h1>
                <form class="form_forme">
                        <fieldset>
                        <legend>carnet de consultation</legend>
                            <div class="form-group">
                                <label for="nom">Nom du patient</label>
                                <input type="text" class="form-control" id="nom" name="nomPat">
                            </div>
                            
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="integer" class="form-control" id="age" name="age">
                            </div>
                            <div class="form-group">
                                <label for="nom">Sexe</label>
                                <input type="text" class="form-control" id="sexe" name="sexe">
                            </div>
                            <div class="form-group">
                                <label for="poids">Poids</label>
                                <input type="text" class="form-control" id="poids" name="poids">
                            </div>
                            <div class="form-group">
                                <label for="dateJour">Date du jour</label>
                                <input type="datetime" class="form-control" id="dateJour" name="poids">
                            </div>
                            <div class="form-group">
                                <label for="dateRendvou">Rendez-vous</label>
                                <input type="date" class="form-control" id="dateRendvou" name="poids">
                            </div>
                            <div class="form-group">
                                <h1>Diagnostique</h1>
                                <label for="patologie">patologie</label>
                                <input class="form-control" id="patologie">
                            </div>
                            <div>
                                <label for="symptome">symptomes</label>
                                <textarea class="form-control" id="symptome" rows="6"></textarea>
                            </div>
                            <div>
                                Etat d'avancement de la maladie:
                                
                                <input type="radio" name="etat" value="faible"> faible ou legé
                                <input type="radio"name="etat" value="moyen"> Moyen
                                    <input type="radio" name="etat" value="grave">grave
                            </div>
                        
                        </fieldset>
                    </form>
                </div>
                <div class="col-6 bg-info" class="m">
                    <form >
                        <fieldset>
                            <legend> <h2> Prescription medicale </h2> </legend>
                                <div class="form-group">
                                    <label for="exam">Examen</label>
                                    <input type="text" class="form-control" id="exam" >
                                </div>
                                <div class="form-group">
                                    <label for="conseil">conseil</label>
                                    <textarea class="form-control" id="conseil" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="mode">Mode d'emploie</label>
                                    <textarea class="form-control" id="mode" rows="10"></textarea>
                                </div>
                                <label for="nomMedecin">Nom du medecin en charge du patient</label>
                                <input type="text" class="form-control" id="nomMedecin" >
                            
                        </fieldset>
                    </form>
                </div>
            </div>        
        </div>    
    </div>
         <div>
            <p><h3> Liste des patients au rendez-vous du jour
            <input type="button"name="consulter" value="consulter"></h3></p>
         </div>
    </body>
</html>