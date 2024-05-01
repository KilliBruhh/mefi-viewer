<?php
    session_start();
    include("config\config.php");
    $page = $_SERVER['PHP_SELF'];
    $sec = "10";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <title>Mefi Viewer Chiro Schelle</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="mt-5">
        <h2>Member Information Overview</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Afdeling</th>
                    <th>Naam</th>
                    <th>Voornaam</th>
                    <th>Geboortedatum</th>
                    <th>Straat</th>
                    <th>Nummer</th>
                    <th>Postcode</th>
                    <th>Woonplaats</th>
                    <th>Telefoon1</th>
                    <th>Telefoon2</th>
                    <th>NaamVoornaam1</th>
                    <th>NaamVoornaam2</th>
                    <th>Verwantschap1</th>
                    <th>Verwantschap2</th>
                    <th>Email</th>
                    <th>NaamHuisarts</th>
                    <th>TelefoonArts</th>
                    <th>Mutualiteit</th>
                    <th>Bloedgroep</th>
                    <th>ResusFactor</th>
                    <th>ZiektenLijst</th>
                    <th>GevoeligStoffenVoeding</th>
                    <th>AndereAllergie</th>
                    <th>Lactose</th>
                    <th>LactoseX</th>
                    <th>Ingrepen</th>
                    <th>VaccinatieTetanus</th>
                    <th>AllergieMedicatie</th>
                    <th>Vegetarisch</th>
                    <th>Halal</th>
                    <th>Incontinent</th>
                    <th>DeelnemenSport</th>
                    <th>Zwemmen</th>
                    <th>ToestemmingMedicatieKind</th>
                    <th>ToestemmingMedicatie</th>
                    <th>ToestemmingIngrepen</th>
                    <th>AndereInlichtingen</th>
                    <th>NaamInvuller</th>
                    <th>Datum</th>
                    <th>Handtekening</th>
                    <th>MedicatieLijst</th>
                    <th>ToestemmingFoto</th>
                    <th>wachtrij</th>
                </tr>
            </thead>
            <tbody>
                <!-- Insert PHP code here to fetch and display data -->
            </tbody>
        </table>
    </div>

</body>
</html>
