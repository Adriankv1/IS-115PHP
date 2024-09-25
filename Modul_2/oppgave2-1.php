<?php   

    // https://www.php.net/manual/en/function.ucfirst.php
    $etternavn = "viken";
    $etternavn = ucfirst($etternavn); 

    $etternavn2 = "JOHANSEN";
    $etternavn2 = ucfirst($etternavn2);
    $etternavn2 = ucfirst(strtolower($etternavn2));
    
    //    Echo "$etternavn";
    //    Echo "<br> $etternavn2";
    
    $etternavnlengde = strlen($etternavn);
    $etternavn2lengde = strlen($etternavn2);

   //   Echo "<br> $etternavnlengde";
   //   Echo "<br> $etternavn2lengde";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2-1</title>
</head>
<body>
    
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th> Etternavn </th>
            <th> Lengde på etternavn </th>
        </tr>
        <tr>
            <td><?php Echo "$etternavn" ?></td>     
            <td><?php Echo "$etternavnlengde" ?></td>  
                
        </tr>
        <tr>
            <td><?php Echo "$etternavn2"?></td>
            <td><?php Echo "$etternavn2lengde"?></td>
        </tr>        

    </table>
</body>
</html>