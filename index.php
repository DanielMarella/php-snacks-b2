<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
- name sia più lungo di 3 caratteri,
- mail contenga un punto e una chiocciola e
- age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->


<?php 

    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="./index.php" method="get">
        <h1>inserisci il tuo nome</h1>
        <input type="text" name ="name">


        <h1>inserisci la tua email</h1>
        <input type="text" name ="email">


        <h1>inserisci la tua eta</h1>
        <input type="text" name ="age">
        
        <button>submit</button>
    </form>


        <?php 
            if (strlen($name)< 3){
                echo 'please enter a valid name';
            }
            else{
            echo ($name);
            }

            if (str_contains($email ,'.') && str_contains($email ,'@')) {
                echo ($email);
            }
            else{
                echo 'please enter a valid email';
            }

            if (is_numeric($age)){
                echo ($age);
            }
            else{
                echo 'please enter a valid age';
            }
        ?>
            

</body>
</html>