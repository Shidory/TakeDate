<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="horaire" method="post">
    
        <label for="jour">Jour : </label>
        <input type="datetime" name="jour" id="jour"><br>
        <label for="datedebut">Date debut : </label>
        <input type="text" name="datedebut" id="datedebut"><br>
        <label for="datefin">Date fin : </label>
        <input type="text" name="datefin" id="datefin">
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>