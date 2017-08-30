<html>
    <head>              
    </head>
    <body>      
         <?php 
            $url = curl_get_contents('http://hometeste.dlinkddns.com');
            $result = preg_replace("/\<p\>(.*?)\<\/p\>/i", "\\1", $url);
            $teste = 2;
            echo "$result";
            echo "foi";
            echo "$url";
            echo "$teste";
        ?>
    </body>
</html>