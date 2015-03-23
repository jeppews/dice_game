<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>wat</title>
    </head>
    <body>
            <?php 
                $rand = rand(1,6);
                
                if($rand == 1) : $rand = 'uno';
                elseif($rand == 2) : $rand = 'dos';
                elseif($rand == 3) : $rand = 'tres';
                elseif($rand == 4) : $rand = 'quatro';
                elseif($rand == 5) : $rand = 'cinco';
                elseif($rand == 6) : $rand = 'seis';
                
                endif;
                
                echo 'You rolled a motherfucking: <img src="img/'.$rand.'.jpg" />';
            ?>

            <button onclick="location.reload()">Try again</button>
    </body>
</html>
