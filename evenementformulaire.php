<html xmlns="http://www.w3.org/1999/html">
<head>
    <?php
        include('header.php');
    ?>
</head>
<div id="templatemo_content">
    <h1>Veuillez entrer les informations dans le formulaire. </h1><br>
    Assurez-vous que vous avez un client email install&eacute; sur votre ordinateur car il sera n&eacute;cessaire pour envoyer le formulaire. <br>
    <br>
    <form action="mailto:dinf@cll.qc.ca?subject=R&eacute;sultat du formulaire d'inscription aux activit&eacute;s" method="post" enctype="text/plain">
            Nom de l'&eacute;tudiant : <br>
            <input type="text" name="NomEtudiant" size="20"><br><br>
            Nom de concentration du programme (Gestion de r&eacute;seaux informatiques, Informatique Industrielle, Informatique de Gestion) : <br>
            <input type="text" name="ConcentrationProgramme" size="30"><br><br>
            Ann&eacute;e d'&eacute;tudes (1,2,3...) : <br>
            <input type="text" name="AnneeProgramme" size="8"><br><br>
            Nom de l'activit&eacute; : <br>
            <input type="text" name="NomActivite" size="30"><br><br>
            Nom du professeur : <br>
            <input type="text" name="NomProfesseur" size="20"><br><br>
            Pr&eacute;cisions additionnelles : <br>
            <input type="text" name="PrecisionsAdditionnelles" size="50"><br><br>
        <input type="submit" value="Cr&eacute;er le courriel pr&ecirc;t à envoyer">
    </form>
</div>
<?php
    include('footer.php');
?>