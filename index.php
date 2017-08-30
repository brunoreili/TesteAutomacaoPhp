<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <title>Automação Residencial</title>
        
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/style.css">
              
    </head>

    <body>      
        <div class="container">
            <div class="center" style="margin-top:150px;">
               <h4 style="margin-bottom:30px;">Aguarde alguns instantes...</h4>
                <div class="preloader-wrapper big active">
                  <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>

                  <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>

                  <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>

                  <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
        
        <div id="storage" style="display:none;">
            <?php
            //Função retirada do forum "https://forum.imasters.com.br/topic/221364-erro-com-funcao-file_get_contents/" do usuário Daniel_Ribeiro
                function my_file_get_contents( $site_url ){
                    $ch = curl_init();
                    $timeout = 10;
                    curl_setopt ($ch, CURLOPT_URL, $site_url);
                    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
                    $file_contents = curl_exec($ch);
                    curl_close($ch);
                    return $file_contents;
                    
                }
            
                //O problema estava no "file_get_contents" que pois, provavelmente o servidor desativou o acesso a arquivos atraves de url.
                //Foi substituido então pelo "my_file_get_contents" utilizando a função acima.
                $url = my_file_get_contents('http://hometeste.dlinkddns.com');
                $result = preg_replace("/\<p\>(.*?)\<\/p\>/i", "\\1", $url);
                
                echo "$result";
            ?>
        </div>
        
        
        <script>
            var dados = document.getElementById("storage").innerHTML.trim().split("*");
            console.log(dados);
            
            var estado = []; 
            for(i = 0; i < dados.length; i++){
                estado[i] = dados[i].split("=");
                sessionStorage.setItem(estado[i][0], estado[i][1]);
            }
             
            location.href='buttons.html'; //Redireciona para a página linkada
        </script>
    </body>
</html>