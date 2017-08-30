<html>
    <head>              
    </head>
    <body>      
         <?php
            function my_file_get_contents( $site_url ){	$ch = curl_init();	$timeout = 10;	curl_setopt ($ch, CURLOPT_URL, $site_url);	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);	$file_contents = curl_exec($ch);	curl_close($ch);	return $file_contents;}
         
         
            $url = my_file_get_contents('http://hometeste.dlinkddns.com');
            $result = preg_replace("/\<p\>(.*?)\<\/p\>/i", "\\1", $url);
            $teste = 2;
            echo "$result";
            echo "foi";
            echo "$url";
            echo "$teste";
        ?>
    </body>
</html>