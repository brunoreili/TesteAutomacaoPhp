<html>
    <head>              
    </head>
    <body>      
         <?php 
            $url = file_get_contents('https://testeautomacaohtml.herokuapp.com/');
            $result = preg_replace("/\<p\>(.*?)\<\/p\>/i", "\\1", $url);
            echo "$result";
        ?>
    </body>
</html>