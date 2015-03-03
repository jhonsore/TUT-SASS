<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SASS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" >SASS</a>
            </div>
        </div>
        <!-- /.container -->
    </nav>
	
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <?php
				$secao = "primeiros_passos";
			 include "menu.php"; ?>

            <div class="col-md-9">

                <div class="thumbnail wrapper-geral">
                   
                   <!-- /////////////////////////////////// -->
                   <!-- /////////conteúdo da seção///////// -->
                   <!-- /////////////////////////////////// -->
                    <div>
                    	<h1>SASS (Syntactically Awesome Stylesheets)</h1>
                        <p>O SASS é um pré-processador de folhas de estilo que serve para auxiliar na produtividade de códigos, principalmente no que diz respeito a repetição de uma mesma ação, diversas vezes.</p>
                    	<p>Quantas vezes você se pegou copiando e colando aquele monte de classes identadas com mais de 15 linhas repetidamente e pensou: podia existir uma maneira mais rápida de fazer isso.</p>
                    	<p>Por exemplo, se tivermos uma cor base em um CSS como em <code class="red">#FF4848</code>, podemos usar uma variável para referenciar essa cor como em <code class="red">$red: #FF4848</code>. Caso tenhamos que mudar a cor, não precisaremos dar um find e mudar todo o código, basta mudar o valor na variável.</p>
                    	<p>Ou ainda podemos criar blocos de código:</p>
                    <div class="destaque codigo">
                        	<p>Utilizando o SASS</p>
                            <div class="response"><xmp>@mixin border-radius($amount: 5px)
  -moz-border-radius: $amount
  -webkit-border-radius: $amount
  border-radius: $amount

h1
  @include border-radius(2px)

.speaker
  @include border-radius
</xmp></div>

							<p>Teríamos a saída em CSS</p>
                            <div class="response"><xmp>h1 {
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2x; }

.speaker {
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px; }  
</xmp></div>

                    </div>
                    <br>
                    <hr>
                    <h2>Instalação</h2>
                    <a href="http://sass-lang.com/install" target="_blank">Guia de instalação no site oficial</a><br>
                    <p>No mac é bem fácil instalar o SASS</p>
                    <ul>
                    	<li>Abra o terminal</li>
                        <div class="destaque codigo"><div class="response">$ sudo gem install sass</div></div>
                        <li>Digite a senha</li>
                        <li>Após instalado cheque se foi instalado corretamente</li>
                        <div class="destaque codigo"><div class="response">sass -v</div></div>
                        <li>O comando acima deverá revelar a versão inslatada do SASS</li>
                    </ul> 
                   <!-- /////////////////////////////////// -->
                   <!-- /////////////////////////////////// -->
                   
                </div>
            </div>

        </div>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
