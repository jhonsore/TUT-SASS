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
                    	
                        <h1>Sintaxe</h1>
                        <hr>
                        <p>O SASS lhe dá a opção de escolher a forma de escrever: <code class="red">.scss</code> e <code class="red">.sass</code>.</p>
                        <p>Esta é a sintaxe do <code class="red">scss</code>:</p>
                        <pre class="code ruby"><code>#main p {
  color: #00ff00;
  width: 97%;
}</code></pre>
						<p>Esta é a sintaxe do <code class="red">sass</code>:</p>
                        <pre class="code ruby"><code>#main p 
  color: #00ff00
  width: 97%
</code></pre>
                        <p>O que difere é que em <code class="red">.sass</code> você não precisa especificar “{}” e “;”, porém, tem de usar obrigatoriamente a identação.</p>
                        <hr>
                        <p>Cada uma das sintaxes pode importar arquivos escritos na outra. Os arquivos podem ser convertidos usando a linha de comando <code class="red">sass-convert</code></p>
                        <pre class="code ruby"><code># Convert Sass to SCSS
$ sass-convert style.sass style.scss

# Convert SCSS to Sass
$ sass-convert style.scss style.sass
</code></pre>
					<p class="obs">Note que esses comandos não estão gerando arquivos CSS, mas sim convertendo as duas sintaxes explicadas anteriormente.</p>
                    <hr>
                    <h2>Usando o SASS</h2>
                    </div>                   
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
