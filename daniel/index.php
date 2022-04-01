<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <body>
      <center>
          <h3>SisArray - DANIEL Vamos dominar o mundo</h3<>
          </center>
<div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-telephone-forward-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z"/>
</svg><b>Cadastro de pessoa</b></h4>
          </div>
          <div class="card-body text-start">
          	<form action="index.php" method="POST">
              <label class="form-label">Nome</label><br/>
              <input type="text" name="nome" class="form-control" placeholder="digite seu nome"required/><br/><br/>
              <label class="form-label">Idade</label><br/>
              <input type ="number" name="idade" class="form-control" placeholder="digite sua idade"required/><br/><br/>
              <button type="submit"class="btn btn-success" name="btgravar">Gravar</button>
              </form>
          </div>
        </div>
      </div>
    </div>
   </div>
   <br />
  <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><b>Cadastro de pessoa</b></h4>
          </div>
          <div class="card-body text-start">
          	Corpo da div
          </div>
        </div>
      </div>
    </div>
   </div>

        <?php 
            if(isset($_POST['btgravar'])){
               $nome=  $_POST['nome'];
               $idade= $_POST['idade'];
               $arquivo ='dados.txt';
               $texto = $nome.";".$idade.";";
               $file =fopen($arquivo,'a');
               fwrite($file,$texto);
               fclose($file);
            } else {
              echo "";

            }
            $arquivo= fopen("dados.txt","r");
            while(!feof($arquivo)){
                $linha = fgets ($arquivo);


            }
            $dados = explode(";",$linha);
            fclose($arquivo);
            $conta = count($dados)-2;
            for($i=0; $i <=$conta; $i++){
            echo 'nome'.$dados[$i]. '<br/>';
            $i++;
            echo 'idade'.$dados[$i].'<br/>';



            }
    

?>
  </bpdy>
</html>  