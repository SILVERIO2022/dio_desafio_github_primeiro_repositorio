<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Accordion - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</head>
<body>
 
<div id="accordion">
  <h3>Soja</h3>
  <div>
    <p>
   A soja no Brasil tem desenvolvido de maneira rápida com várias cultivares diponíveis para cada área do brasil!
    </p>
  </div>
  <h3>Milho</h3>
  <div>
    <p>
    O milho é outra cultura de grande destaque não só no Brasil como américa latina!
    </p>
	<ul>
		<li>Silagem</li>
		<li>Grão</li>
		<li>Semente</li>
	<ul>
  </div>
  <h3>Feijão</h3>
  <div>
    <p>
    O Feijão remete o sustento de vários países do mundo conforme podemos ser em pesquisa recente do MAPA!
    </p>
    <ul>
      <li>Brasil</li>
      <li>Argentina</li>
      <li>Uruguai</li>
    </ul>
  </div>
  <h3>Trigo</h3>
  <div>
    <p>
    O trigo é o pão de cada dia não dó do Brasil como também do mundo que utiliza este grão para vários fins!
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
</div>
 
 
</body>
</html>