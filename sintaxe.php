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
                        <pre class="code"><code>#main p {
  color: #00ff00;
  width: 97%;
}</code></pre>
						<p>Esta é a sintaxe do <code class="red">sass</code>:</p>
                        <pre class="code"><code>#main p 
  color: #00ff00
  width: 97%
</code></pre>
                        <p>O que difere é que em <code class="red">.sass</code> você não precisa especificar “{}” e “;”, porém, tem de usar obrigatoriamente a identação.</p>
                        <hr>
                        <p>Cada uma das sintaxes pode importar arquivos escritos na outra. Os arquivos podem ser convertidos usando a linha de comando <code class="red">sass-convert</code></p>
                        <pre class="code"><code># Convert Sass to SCSS
$ sass-convert style.sass style.scss

# Convert SCSS to Sass
$ sass-convert style.scss style.sass
</code></pre>
					<p class="obs">Note que esses comandos não estão gerando arquivos CSS, mas sim convertendo as duas sintaxes explicadas anteriormente.</p>
                    <hr>
                    <h2>Usando o SASS</h2>
                    <p>Para usar o SASS pela linha de comando use:</p>
                    <pre class="code"><code>sass input.scss output.css</code></pre>
                    <p>Podemos dizer ao SASS que monitore algum arquivo e atualize o css cada vez que o arquivo SASS mude:</p>
                    <pre class="code"><code>sass --watch input.scss:output.css</code></pre>
                    <p>Caso tenhamos um diretório com vários arquivos SASS podemos monitorar a pasta inteira:</p>
                    <pre class="code"><code>sass --watch app/sass:public/stylesheets</code></pre><br>
                    <p class="red">Tipos de saídas</p>
                    <p>O SASS lhe oferece 4 saídas de CSS. Isso é ótimo, pois você não precisa se preocupar em pegar o arquivo CSS e fazer o minify, por exemplo. Nativamente você pode criar o arquivo nos formatos:</p>
                    <pre class="code"><code>sass --watch [input] : [output] --style nested|expanded|compact|compressed
                    
sass --watch style.scss:style.css --style nested</code></pre>
<br>
                    <ul><li>Nested (aninhados)</li></ul>
                    <pre class="code"><code>#main {
  color: #fff;
  background-color: #000; }
  #main p {
    width: 10em; }

.huge {
  font-size: 10em;
  font-weight: bold;
  text-decoration: underline; }</code></pre><br>
  					<ul><li>Expanded (expandido)</li></ul>
                    <pre class="code"><code>#main {
  color: #fff;
  background-color: #000;
}
#main p {
  width: 10em;
}

.huge {
  font-size: 10em;
  font-weight: bold;
  text-decoration: underline;
}</code></pre><br>
                    
                    <ul><li>Compact (compacto)</li></ul>
                    <pre class="code"><code>#main { color: #fff; background-color: #000; }
#main p { width: 10em; }

.huge { font-size: 10em; font-weight: bold; text-decoration: underline; }</code></pre><br>
                    
                    <ul><li>Compressed (comprimido)</li></ul>
                    <pre class="code"><code>#main{color:#fff;background-color:#000}#main p{width:10em}.huge{font-size:10em;font-weight:bold;text-decoration:underline}</code></pre><br>
                    <hr>
                    <h2>Extensões CSS</h2>
                    <p class="red">Aninhando elementos</p>
                    <p>O SASS permite regras de aninhamento entre elementos, em que, a regra interna somente será aplicada a seletores externos:</p>
                    <pre class="code"><code>#main p {
  color: #00ff00;
  width: 97%;

  .redbox {
    background-color: #ff0000;
    color: #000000;
  }
}</code></pre>
					<p>Será compliado:</p>
                    <pre class="code"><code>#main p {
  color: #00ff00;
  width: 97%; }
  #main p .redbox {
    background-color: #ff0000;
    color: #000000; }</code></pre>
                    <p>Assim, o método de aninhamento evita a repetição de seletores "pais" como em:</p>
                    <pre class="code"><code>#main {
  width: 97%;

  p, div {
    font-size: 2em;
    a { font-weight: bold; }
  }

  pre { font-size: 3em; }
}</code></pre>
                    <p>Que será compilado para:</p>
                    <pre class="code"><code>#main {
  width: 97%; }
  #main p, #main div {
    font-size: 2em; }
    #main p a, #main div a {
      font-weight: bold; }
  #main pre {
    font-size: 3em; }</code></pre>
    				<hr>
                    <h2>Referenciando seletores anteriores: <code>&</code></h2>
                    <p>Às vezes é útil usar uma regra de aninhamento da maneira não convencional. Por exemplo, quando tivermos um diferente estilo em um efeito hover em um botão, ou quando o body tiver uma classe específica aconteça algo. Nesses casos, podemos especificar onde o seletor será inserido usando <code>&</code>:</p>
                    <pre class="code"><code>a {
  font-weight: bold;
  text-decoration: none;
  &:hover { text-decoration: underline; }
  body.firefox & { font-weight: normal; }
}</code></pre>
                    <p>Será compilado:</p>
                    <pre class="code"><code>a {
  font-weight: bold;
  text-decoration: none; }
  a:hover {
    text-decoration: underline; }
  body.firefox a {
    font-weight: normal; }</code></pre>
                    <p>O <code>&</code> será trocado pelo seletor anterior no css. Isos quer dizer que se tivermos um aninhamento mais profundo, o último seletor será usado, com em:</p>
                    <pre class="code"><code>#main {
  color: black;
  a {
    font-weight: bold;
    &:hover { color: red; }
  }
}</code></pre>
                 	<p>Será compilado:</p>   
                    <pre class="code"><code>#main {
  color: black; }
  #main a {
    font-weight: bold; }
    #main a:hover {
      color: red; }</code></pre>
                    <p><code>&</code> também pode ser utilizado na seguinte situação:</p>
                    <pre class="code"><code>#main {
  color: black;
  &-sidebar { border: 1px solid; }
}</code></pre>
                    <p>Será compilado:</p>
                    <pre class="code"><code>#main {
  color: black; }
  #main-sidebar {
    border: 1px solid; }</code></pre>
    				<hr>
                    <h2>Propriedades aninhadas</h2>
                    <p>O CSS tem muitas propriedades que possuem "namespaces" como em <span class="codigo">font-family, font-size</span>, sendo <span class="codigo">font</span> o namespace. Podemos utilizar um atalho para não ter que repetir esse namespace sempre, como a seguir: </p>
                    <pre class="code"><code>.funky {
  font: {
    family: fantasy;
    size: 30em;
    weight: bold;
  }
}</code></pre>
					<p>Será compilado:</p>
                    <pre class="code"><code>.funky {
  font-family: fantasy;
  font-size: 30em;
  font-weight: bold; }</code></pre>
                    <hr>
                    <h2>Usando comentários</h2>
                    <p>SASS suporta comentários multilinha <code>/* */</code>, assim com linhas únicas <code>//</code>. O comentário multilinha será preservado no CSS output , enquanto os comentário de uma única linha usando o // serão removidos:</p>
                    <pre class="code"><code>/* This comment is
 * several lines long.
 * since it uses the CSS comment syntax,
 * it will appear in the CSS output. */
body { color: black; }

// These comments are only one line long each.
// They won't appear in the CSS output,
// since they use the single-line comment syntax.
a { color: green; }</code></pre>
                    <p>Será compilado:</p>
                    <pre class="code"><code>/* This comment is
 * several lines long.
 * since it uses the CSS comment syntax,
 * it will appear in the CSS output. */
body {
  color: black; }

a {
  color: green; }</code></pre>
                    <hr>
                    <h2>Variáveis: <code>$</code></h2>
                    <pre class="code"><code>$width: 5em;
                    
#main {
  width: $width;
}</code></pre>
                   <h2>Operações:</h2> 
                   <pre class="code"><code>p {
  font: 10px/8px;             // Plain CSS, no division
  $width: 1000px;
  width: $width/2;            // Uses a variable, does division
  width: round(1.5)/2;        // Uses a function, does division
  height: (500px/2);          // Uses parentheses, does division
  margin-left: 5px + 8px/2px; // Uses +, does division
}

span {
  margin: 3px + 4px auto;
}</code></pre>
                   <p>Será compilado:</p>
                   <pre class="code"><code>p {
  font: 10px/8px;
  width: 500px;
  height: 250px;
  margin-left: 9px; }
  
  span {
  margin: 7px auto; }</code></pre>
                   <pre class="code"><code>p {
  width: 1em + (2em * 3);
}</code></pre>
              	   <p>Será compilado:</p>     
                   <pre class="code"><code>p {
  width: 7em; }</code></pre>
                   <hr>
                   <h2>Interpolação:<code>#{}</code></h2> 
                   <pre class="code"><code>$name: foo;
$attr: border;
p.#{$name} {
  #{$attr}-color: blue;
}</code></pre>
                   <p>Será compilado:</p>     
                   <pre class="code"><code>p.foo {
  border-color: blue; }</code></pre>
                    <hr>
                    <h2>Aninhamento usando <code>@import</code></h2>
                    <pre class="code"><code>.example {
  color: red;
}

#main {
  @import "example";
}</code></pre>
                 	<p>Será compilado:</p>    
                    <pre class="code"><code>#main .example {
  color: red;
}</code></pre>
                   <h2>Usando o <code>@extend</code></h2>  
                   <pre class="code"><code>.error {
  border: 1px #f00;
  background-color: #fdd;
}
.seriousError {
  @extend .error;
  border-width: 3px;
}</code></pre>
                   <p>Será compilado:</p> 
                   <pre class="code"><code>.error, .seriousError {
  border: 1px #f00;
  background-color: #fdd;
}

.seriousError {
  border-width: 3px;
}</code></pre>
					<p>Temos casos como o seguinte:</p>
                   <pre class="code"><code>.error {
  border: 1px #f00;
  background-color: #fdd;
}
.error.intrusion {
  background-image: url("/image/hacked.png");
}
.seriousError {
  @extend .error;
  border-width: 3px;
}</code></pre>
                   <p>Será compilado:</p> 
                   <pre class="code"><code>.error, .seriousError {
  border: 1px #f00;
  background-color: #fdd; }

.error.intrusion, .seriousError.intrusion {
  background-image: url("/image/hacked.png"); }

.seriousError {
  border-width: 3px; }</code></pre>
                   
                   <p>Extensões múltiplas:</p>
                   <pre class="code"><code>.error {
  border: 1px #f00;
  background-color: #fdd;
}
.attention {
  font-size: 3em;
  background-color: #ff0;
}
.seriousError {
  @extend .error;
  @extend .attention;
  border-width: 3px;
}</code></pre>
                	<p>Será compilado:</p>    
                   <pre class="code"><code>.error, .seriousError {
  border: 1px #f00;
  background-color: #fdd; }

.attention, .seriousError {
  font-size: 3em;
  background-color: #ff0; }

.seriousError {
  border-width: 3px; }</code></pre>
                   <p>Também é possível para um seletor extender outro seletor</p>
                   <pre class="code"><code>.error {
  border: 1px #f00;
  background-color: #fdd;
}
.seriousError {
  @extend .error;
  border-width: 3px;
}
.criticalError {
  @extend .seriousError;
  position: fixed;
  top: 10%;
  bottom: 10%;
  left: 10%;
  right: 10%;
}</code></pre>
					<p>Agora a classe <code>.seriousError</code> terá o estilo da classe <code>.error</code> e a classe <code>.criticalError</code> terá os estilos das classes <code>.seriousError</code> e  <code>.error</code></p>
                   <pre class="code"><code>.error, .seriousError, .criticalError {
  border: 1px #f00;
  background-color: #fdd; }

.seriousError, .criticalError {
  border-width: 3px; }

.criticalError {
  position: fixed;
  top: 10%;
  bottom: 10%;
  left: 10%;
  right: 10%; }</code></pre>
                   <hr>
                   <h2>Expressões</h2>
                   <p class="red">@if</p>
                   <pre class="code"><code>$type: monster;
p {
  @if $type == ocean {
    color: blue;
  } @else if $type == matador {
    color: red;
  } @else if $type == monster {
    color: green;
  } @else {
    color: black;
  }
}</code></pre>
               		<p>Será compilado:</p>      
                    <pre class="code"><code>p {
  color: green; }</code></pre>
                   <p class="red">@for</p>
                   <pre class="code"><code>@for $i from 1 through 3 {
  .item-#{$i} { width: 2em * $i; }
}</code></pre>
                   <p>Será compilado:</p>   
                   <pre class="code"><code>.item-1 {
  width: 2em; }
.item-2 {
  width: 4em; }
.item-3 {
  width: 6em; }</code></pre>
                   <p class="red">@each</p>
                   <pre class="code"><code>@each $animal in puma, sea-slug, egret, salamander {
  .#{$animal}-icon {
    background-image: url('/images/#{$animal}.png');
  }
}</code></pre>
					<p>Será compilado:</p>   
                   <pre class="code"><code>.puma-icon {
  background-image: url('/images/puma.png'); }
.sea-slug-icon {
  background-image: url('/images/sea-slug.png'); }
.egret-icon {
  background-image: url('/images/egret.png'); }
.salamander-icon {
  background-image: url('/images/salamander.png'); }</code></pre>
                   <hr>
                   <h2>@mixin</h2>
                   <p>Algumas coisas em CSS se tornam um pouco tediósas para escrever, especialmente em CSS3 e seus diversos prefixos. Um mixin permite fazer grupos de declarações CSS e até mesmo passar valores para ficar mais flexível.</p>
                   <pre class="code"><code>@mixin border-radius($radius) {
  -webkit-border-radius: $radius;
     -moz-border-radius: $radius;
      -ms-border-radius: $radius;
       -o-border-radius: $radius;
          border-radius: $radius;
}
 
.box { @include border-radius(10px); }
</code></pre>
                   <p>Será compilado:</p>
                   <pre class="code"><code> .box{
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
  border-radius: 10px;
}
</code></pre>   
                   <p>Outro exemplo:</p>
                   <pre class="code"><code>@mixin border-radius($amount: 5px){
  -moz-border-radius: $amount;
  -webkit-border-radius: $amount;
  border-radius: $amount;}

h1{
  @include border-radius(2px)}

.speaker{
  @include border-radius}</code></pre>
                   <p>Será compilado:</p>
                   <pre class="code"><code>h1 {
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2x; }

.speaker {
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px; }  </code></pre>
  					<p>Definições @mixin podem incluir outras @mixin</p>
  					<pre class="code"><code>@mixin compound {
  @include highlighted-background;
  @include header-text;
}

@mixin highlighted-background { background-color: #fc0; }
@mixin header-text { font-size: 20px; }</code></pre>
  					<p>Será compilado:</p>
                    <pre class="code"><code>.compound {
  background-color: #fc0;
  font-size: 20px; }</code></pre>
                    <hr>
                    <h2>Trabalhando com funções</h2>
                    <pre class="code"><code>$grid-width: 40px;
$gutter-width: 10px;

@function grid-width($n) {
  @return $n * $grid-width + ($n - 1) * $gutter-width;
}

#sidebar { width: grid-width(5); }</code></pre>
                    <p>Será compilado:</p>
                    <pre class="code"><code>#sidebar {
  width: 240px; }</code></pre>
                    <h2>Tipos de saídas</h2>
                    <p>O SASS lhe oferece 4 saídas de CSS. Isso é ótimo, pois você não precisa se preocupar em pegar o arquivo CSS e fazer o minify, por exemplo. Nativamente você pode criar o arquivo nos formatos:</p>
                    <p class="red">Nested (aninhados)</p>
                    
                    
                    
                    
                    
                   </div>                   
                   <!-- /////////////////////////////////// -->
                   <!-- /////////////////////////////////// -->
                   <!--<pre class="code"><code></code></pre>-->
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
