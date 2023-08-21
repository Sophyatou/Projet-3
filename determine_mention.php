<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
	rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<title>Détermination de la mention</title>
</head>
<body>
<div class="container mt-5">
        <h1 class="mb-4" >Déterminer la Mention</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="moyenne" class="form-label">Veuillez entrer la moyenne :</label> 
				<input type="number" step="0.01" class="form-control" id="moyenne" min="0"max="20"  name="moyenne" required> 
			</div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $moyenne = floatval($_POST["moyenne"]);
            $decision = ($moyenne >= 10) ? "Admis" : "Éliminé";
            
            if ($moyenne >= 17) {
                $mention = "Excellent";
                $colorClass = "text-success";
            } elseif ($moyenne >= 16) {
                $mention = "Très Bien";
                $colorClass = "text-primary";
            } elseif ($moyenne >= 14) {
                $mention = "Bien";
                $colorClass = "text-info";
            } elseif ($moyenne >= 12) {
                $mention = "Assez Bien";
                $colorClass = "text-warning";
            } elseif ($moyenne >= 10) {
                $mention = "Passable";
                $colorClass = "text-danger";
            } else {
                $mention = "Aucune mention";
                $colorClass = "text-secondary";
            }
        ?>
            
            
            <p>Décision : <strong><?= $decision ?></strong></p>
            <p>Mention : <span class="<?= $colorClass ?> fs-5"><?= $mention ?></span></p>
        <?php
        }
        ?>
    </div>







	
</body>
</html>
