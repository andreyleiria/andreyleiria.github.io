<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
		$url = "https://izee-api.izee.com.br/v1/me";
		$ch = curl_init($url);
		$headers  = "Bearer : eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjJjYTFmMDFmN2VhZGY1MjFlZDA4OGYxZjZlMzRhZWQwMzE4Y2NjMmU5YWU5MzU1NzkzZWMzYjMxZTdlZTJjYzFlNDczODVlMDQ2ZTllNTgwIn0.eyJhdWQiOiJyZWRlaXplZSIsImp0aSI6IjJjYTFmMDFmN2VhZGY1MjFlZDA4OGYxZjZlMzRhZWQwMzE4Y2NjMmU5YWU5MzU1NzkzZWMzYjMxZTdlZTJjYzFlNDczODVlMDQ2ZTllNTgwIiwiaWF0IjoxNjUxMjM2NjU1LCJuYmYiOjE2NTEyMzY2NTUsImV4cCI6MTY1MTMyMzA1NSwic3ViIjoic3Vwb3J0ZUBpemVlLmNvbS5iciIsImVtYWlsIjoic3Vwb3J0ZUBpemVlLmNvbS5iciIsInNjb3BlcyI6WyJjbGllbnQ6Y3JlYXRlIiwiY2xpZW50OmRlbGV0ZSIsImNsaWVudDplZGl0IiwiY2xpZW50OnZpZXciLCJkZXZpY2U6ZGVsZXRlIiwiZGV2aWNlOnZpZXciLCJlbnRpdHk6ZWRpdCIsImVudGl0eTp2aWV3IiwiZmluYW5jaWFsOnZpZXciLCJvcmRlcjpjcmVhdGUiLCJvcmRlcjp2aWV3Iiwib3JkZXI6ZWRpdCIsIm9yZGVyOmRlbGV0ZSIsInBhY2thZ2U6Y3JlYXRlIiwicGFja2FnZTp2aWV3IiwiaW50ZWdyYXRpb246Y3JlYXRlIiwiaW50ZWdyYXRpb246ZGVsZXRlIiwiaW50ZWdyYXRpb246ZWRpdCIsImludGVncmF0aW9uOnZpZXciLCJ1c2VycyJdfQ.ottYgRcuTMuRHX-va8pvwoZsyQcrE5PxlC2sZ_TM9amtXdximdzNYXTOXL5CM65r0vVV3s1oAXRTyP3XzUxFsbCFpNFnk5y3zXX--UjABd7mvNqlmfQtDoNEJWdT_w1q0YsD58Zh8_mF_0g4e5z8bHS4PtXUjxXKgNNRJB0KneBkNJphV7_tEtYRTK5ecdDL3dCZcrrWqizY7J8ZBs69GFfvaWEgqDgVz7DsT4nntuMTIP4UGxnG3dalwp4Ur0VUezXWfWPc3Luu5SxKXXUoG0Q2joQwKHCg5GQ1FKfO2jpvl3Sry6bRZTGaTa79CWHso0V_qVVtfgNCfoH6iHyy0A";
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		$resultado = json_decode(curl_exec($ch));

		var_dump($resultado);

		//foreach ($resultado->results as $ator) {
		    //var_dump($ator);
		   // echo "Nome: " . $ator->name . "<br>";
		   // echo "Altura: " . $ator->height . "<br>";

		   // foreach ($ator->films as $filme) {
		       // echo "Filme: " . $filme . "<br>";
		   // }

		   // echo "<hr>";
	       // }
        ?>
    </body>
</html>
