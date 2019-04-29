<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="welcome/enregistrer" method="post">
    
        <label for="jour">Jour</label>
        <input type="date" name="jour" id="jour" required><br>
        <label for="heuredebut" >HeureDebut</label>
        <input type="time" name="heuredebut" id="heuredebut" required><br>
        <label for="heurefin">HeureFin</label>
        <input type="time" name="heurefin" id="heurefin" required><br>
        <input type="submit" value="Enregistrer">
        
    </form>
</body>
</html>