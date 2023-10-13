<!doctype html>
<html lang="pt-br">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34326521-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-34326521-1');
</script>

<meta charset="utf-8">
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>SulSoft - Soluções em processamento de dados geoespaciais | Porto Alegre/RS</title>
<meta name="description" content="SulSoft - Soluções em processamento de dados geoespaciais | (51) 3333-1581 | info@sulsoft.com.br | Porto Alegre/RS" />
<meta name="keywords" content="geoprocessamento" />
<link rel="shortcut icon" href="img/favicon.ico" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="css/estilo.css">
<script src="js/menu.js"></script>
<script src="js/jquery.smooth-scroll.js"></script>
<script src="js/jquery.ba-bbq.js"></script>
<link rel="stylesheet" href="colorbox/popup-colorbox.css" />
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="colorbox/jquery.colorbox-min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script>
 function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
</script>
<script>
	$(document).ready(function(){
		$(".iframe").colorbox({iframe:true, width:"85%", height:"85%"});
	});
</script>

<script>
  $(document).on('click', 'a[href*="#"]', function() {
    if ( this.hash && this.pathname === location.pathname ) {
      $.bbq.pushState( '#/' + this.hash.slice(1) );
      return false;
    }
  })
  .ready(function() {
    $(window).bind('hashchange', function(event) {
      var tgt = location.hash.replace(/^#\/?/,'');
      if ( document.getElementById(tgt) ) {
        $.smoothScroll({scrollTarget: '#' + tgt});
      }
    });
    $(window).trigger('hashchange');
 	  $("nav li a").click(function(){
	  $("nav li a").removeClass("selected");
	  $(this).addClass("selected");
	});
});
</script>
<script type="text/javascript" src="js/jssor.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script>
jQuery(document).ready(function ($) {
    var _SlideshowTransitions = [
	    {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}
    ];
    var options = {
        $AutoPlay: true,                                    
        $AutoPlaySteps: 1,                                  
        $AutoPlayInterval: 4000,                            
        $PauseOnHover: 1,                               
        $ArrowKeyNavigation: true,   			            
        $SlideDuration: 500,                                
        $MinDragOffsetToSlide: 20,                         
        $SlideSpacing: 0, 					                
        $DisplayPieces: 1,                                
        $ParkingPosition: 0,                                
        $UISearchMode: 1,                                   
        $PlayOrientation: 1,                          
        $DragOrientation: 3,                                
        $SlideshowOptions: {                                
            $Class: $JssorSlideshowRunner$,                 
            $Transitions: _SlideshowTransitions,            
            $TransitionsOrder: 1,                           
            $ShowLink: true                                 
        },
        $BulletNavigatorOptions: {                                
            $Class: $JssorBulletNavigator$,                       
            $ChanceToShow: 2,                               
            $AutoCenter: 0,                                 
            $Steps: 1,                                      
            $Lanes: 1,                                      
            $SpacingX: 10,                                  
            $SpacingY: 10,                                   
            $Orientation: 1                                 
         },
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$,              
            $ChanceToShow: 2                                
        }
    };
    var jssor_slider1 = new $JssorSlider$("slider1_container", options);
    function ScaleSlider() {
        var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
        if (parentWidth)
            jssor_slider1.$ScaleWidth(Math.min(parentWidth, 790));
        else
            window.setTimeout(ScaleSlider, 30);
    }
    ScaleSlider();
    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
});
</script>
<script type="text/javascript" src="js/SpryAccordion.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-63957056-1', 'auto');
  ga('send', 'pageview');
</script>
</head>

<?php

// Conexao ao banco de dados

$db_host = 'mysql.sulsoft.com.br';
$db_name = 'sulsoft';
$db_user = 'sulsoft';
$db_pass = 'Sie837Dh38hsYjs';

?>


<body>
<div class="container">
<div id="topo">
	<div class="wrapp">
       <div class="nav_container">
          <div id="logo"></div>
		  <div id="bandeiras">
             <a href="https://www.sulsoft.com.br/ingles"><figure class="ing"></figure></a>
             <a href="https://www.sulsoft.com.br/"><figure class="bra"></figure></a>
          </div>
          <div id="redes">
             <a href="https://www.facebook.com/sulsoft" target="_blank"></a>
             <a href="https://www.youtube.com/sulsoftBR" target="_blank"></a>
          </div>
          <div class="wrap">
             <div class="drop">
                <nav class="nav .nav-aberta">
                   <ul class="listaNav">
                      <li><a href="#home">HOME</a></li>
                      <li><a href="#sulsoft">SULSOFT</a></li>
                      <li><a href="#produtos">PRODUTOS</a></li>
                      <li><a href="#servicos">SERVIÇOS</a></li>
					  <li><a href="#projetos">PROJETOS</a></li>
                      <li><a href="#cursos">TREINAMENTOS</a></li>
                      <li><a href="#noticias">NOTÍCIAS</a></li>
                      <li><a href="#contato">CONTATO</a></li>
                   </ul>
                </nav>
             </div>
          </div>
       </div>
   </div>
</div> 
<section id="home">

   <div id="home_header">
      <div class="wrapp">
          <div class="home_title">
            <p>Soluções em processamento</p>
            <p>de dados geoespaciais</p>
          </div>
      </div>
   </div>

   <div class="anniversary-announcement">
      <div class="announcement-content" style="font-family: 'IBM Plex Sans', sans-serif;">
        <h3>Happy Birthday!</h3>
        <p>Sulsoft comemora 30 anos de atuação no mercado de geoprocessamento e sensoriamento remoto! Veja nossas promoções especiais e descubra um pouco mais sobre nossa história!</p>
      </div>
      <a href="./aniversario-30-anos/index.html" class="announcement-button">Ver Mais</a>
   </div>

   <div class="wrapp">
      <div id="content">
         <div class="wrapper_geral">
            <div class="coluna_a">
               <h1>SEJA BEM-VINDO!</h1>
               <p class="phome">A SulSoft oferece software e serviços para análise de dados técnico-científicos em Sensoriamento Remoto/SIG, Engenharia, Física Aplicada,
                                Medicina, entre outros.</p>
               <div class="coluna_a2">
                  <p class="home_noticias">Notícias</p>
                  
                  <?php
                  
                  try {
						$conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
						$stmt = $conn->prepare('SELECT data,titulo FROM noticias ORDER BY data DESC LIMIT 0,2');
						$stmt->execute();
					
						$result = $stmt->fetchAll();
					
						if (count($result)) {
							
							$manchete_data0 = date('d/m/Y', strtotime($result['0']['data']));
							$manchete_titulo0 = utf8_encode($result['0']['titulo']);
							$manchete_data1 = date('d/m/Y', strtotime($result['1']['data']));
							$manchete_titulo1 = utf8_encode($result['1']['titulo']);
														
						} else {
							$manchete_data0 = date("Y-m-d");
							$manchete_titulo0 = "Não foi possível carregar as notícias agora. Tente novamente em alguns instantes.";
							$manchete_data1 = "";
							$manchete_titulo1 = "";
						}
					} catch(PDOException $e) {
						// echo 'ERROR: ' . $e->getMessage();
					}
					
					print "<a href=\"#noticias\" target=\"_blank\" class=\"chamada\"><strong>". $manchete_data0 ."</strong> - ". $manchete_titulo0 ."</a>";
					print "<br><Br><a href=\"#noticias\" target=\"_blank\" class=\"chamada\"><strong>". $manchete_data1 ."</strong> - ". $manchete_titulo1 ."</a>";
					
                  ?>
                  
                  <p><a href="#noticias" class="mais"></a>
                  <a href="#noticias" class="vermais">mais notícias...</a></p>
               </div>
            </div>
            <div class="wrap_slider">
               <div id="slider1_container" class="slider1_wrapper">
                  <div u="loading" class="load1">
                     <div class="load2"></div>
                     <div class="load3"></div>
                  </div>
                  <div u="slides" class="slider1">
                     <div><a u=image href="#produtos"><img src="slider/a4.jpg"></a></div>
                     <div><a u=image href="#envi"><img src="slider/b4.jpg"></a></div>
                     <div><a u=image href="#envi"><img src="slider/c4.jpg"></a></div>
                     <div><a u=image href="#envi"><img src="slider/d4.jpg"></a></div>
                  </div>
                  <div u="navigator" class="jssorb01">
                     <div u="prototype"></div>
                  </div>
                  <span u="arrowleft" class="jssora05l"></span>
                  <span u="arrowright" class="jssora05r"></span>
               </div>
            </div>
         </div>
         <div class="wrapper_geral">
            <div class="logos1">
               <div class="col25"><a href="#produtos"><img src="img/envia4.png"></a></div>
               <div class="col25"><a href="#envi"><img src="img/idla4.png"></a></div>
               <div class="col25"><a href="#envi"><img src="img/terrseta4.png"></a></div>
               <div class="col25"><a href="#envi"><img src="img/otsa4.png"></a></div>
            </div>
         </div>  
      </div>
   </div>    
</section>  



<section id="sulsoft">
   <div id="sulsoft_header">
      <div class="wrapp">
         <div class="title"><h2>SULSOFT</h2></div>
      </div>
   </div>
   <div class="wrapp">
   <div id="content">
      <div class="wrapper_cinza">
         <div class="col_cinza50">
            <p>A SulSoft atua há mais de 20 anos no desenvolvimento e comercialização de softwares para geoprocessamento e análise de dados, além de oferecer treinamento, serviços
               e consultoria altamente especializados.</p>
            <p>É distribuidora exclusiva da Harris Geospatial Solutions com os produtos ENVI, IDL e módulos; e da Clark Labs com o TerrSet. Também é desenvolvedora
               do software OrthoToolStereo, e possui excelência em geração de modelos digitais de terreno, fornecendo serviços e consultoria no assunto.</p><p></p>
         </div>
         <div class="col_cinza50">
            <p>A SulSoft oferece uma ampla linha de produtos e serviços para análise e processamento de imagens e sinais, com aplicações em áreas como Engenharia, Física Aplicada,
               Sensoriamento Remoto/SIG, Diagnóstico Médico, Planejamento Urbano, Agricultura, Defesa, entre outras.</p>
            <p>Para mais informações entre em contato com a nossa equipe de suporte técnico: <a class="mailto" href="mailto:suporte@sulsoft.com.br">suporte@sulsoft.com.br</a></p>
         </div>
      </div> 
   </div>
   </div>    
</section>



<section id="produtos">
   <div id="produtos_header">
      <div class="wrapp">
         <div class="title"><h2>PRODUTOS</h2></div>
      </div>
   </div>
   <div class="wrapp">
   <div id="content">
      <div class="wrapper_cinza">
         <div class="linha1" id="envi">
            <div class="col_cinza25">
               <div class="col100"><a href="http://www.envi.com.br" target="_blank"><img src="img/envib4.png" alt="envi"></a></div>
               <div class="col100"><a href="http://www.envi.com.br" target="_blank" class="link">www.envi.com.br</a></div>
            </div>
            <div class="col_cinza60a">
               <p>As soluções de software ENVI são a base que você precisa para visualização, exploração, análise e apresentação de dados na área de Sensoriamento Remoto/SIG. Técnicas
                  cientificamente comprovadas fornecem a informação exata que você precisa para tomar as melhores decisões.</p>
               <p>ENVI + Módulos: Análise avançada de imagens de Sensoriamento Remoto/SIG</p>
               <p>ENVI LiDAR : Análise e visualização de nuvens de pontos LiDAR</p>
               <p>ENVI SARscape: Processamento completo de dados SAR</p>
            </div>
            <div class="col_cinza15">
               <a href="pdf/envi.pdf" download="ENVI" target="_blank"><img src="img/pdf.png" title="Mais informações sobre o ENVI" alt="Mais informações sobre o ENVI"></a>
               <p>Mais informações<br> sobre o ENVI</p>
            </div>
         </div>
         <div class="linha2" id="idl">
            <div class="col_cinza25">
               <div class="col100"><a href="https://www.sulsoft.com.br/idl" target="_blank"><img src="img/idlb4.png" alt="idl"></a></div>
               <div class="col100"><a href="https://www.sulsoft.com.br/idl" target="_blank" class="link">www.sulsoft.com.br/idl</a></div>
            </div>
            <div class="col_cinza60a">
               <p>Linguagem de programação científica multi-plataforma utilizada nas mais diversas áreas de pesquisa, sensoriamento remoto, SIG, áreas da saúde, física, astrofísica,
               engenharias, dentre outras que permite desenvolvimento desde pequenos e simples programas até as mais complexas aplicações.
               </p>
            </div>
            <div class="col_cinza15">
               <a href="pdf/idl.pdf" download="IDL" target="_blank"><img src="img/pdf.png" title="Mais informações sobre o IDL" alt="Mais informações sobre o IDL"></a>
               <p>Mais informações<br> sobre o IDL</p>
            </div>
         </div>
         <div class="linha1" id="terrset">
            <div class="col_cinza25">
               <div class="col100"><a href="http://www.terrset.com.br" target="_blank"><img src="img/terrsetb4.png" alt="terrset"></a></div>
               <div class="col100"><a href="http://www.terrset.com.br" target="_blank" class="link">www.terrset.com.br</a></div>
            </div>
            <div class="col_cinza60a">
               <p>É um sistema de software integrado para modelagem e monitoramento geoespacial para o desenvolvimento sustentável. O TerrSet incorpora as ferramentas de processamento
               e análise de imagem do IDRISI, associado a uma coleção de aplicações verticais.</p>
            </div>
            <div class="col_cinza15">
               <a href="pdf/terrset.pdf" download="TERRSET" target="_blank"><img src="img/pdf.png" title="Mais informações sobre o TerrSet" alt="Mais informações sobre o TerrSet"></a>
               <p>Mais informações<br> sobre o TerrSet</p>
            </div>
         </div>
         <div class="linha2" id="ots">
            <div class="col_cinza25">
               <div class="col100"><a href="http://www.orthotoolstereo.com.br" target="_blank"><img src="img/otsb4.png" alt="ots"></a></div>
               <div class="col100"><a href="http://www.orthotoolstereo.com.br" target="_blank" class="link">www.orthotoolstereo.com.br</a></div>
            </div>
            <div class="col_cinza60a">
               <p>Solução completa para gerar e visualizar modelos digitais de elevação a partir de pares de imagens stereo e tri-stereo de alta resolução.</p>
               <p>Principais sensores suportados: Plêiades, Spot, GeoEye, Ikonos, WorldView e muitos outros.</p>
            </div>
            <div class="col_cinza15">
               <a href="pdf/ots.pdf" download="OTS" target="_blank"><img src="img/pdf.png" title="Mais informações sobre o OTS" alt="Mais informações sobre o OTS"></a>
               <p>Mais informações<br> sobre o OTS</p>
            </div>
         </div>
      </div> 
   </div>
   </div>    
</section>



<section id="servicos">
   <div id="servicos_header">
      <div class="wrapp">
         <div class="title"><h2>SERVIÇOS</h2></div>
      </div>
   </div>
   <div class="wrapp">
   <div id="content">
      <div class="wrapper_cinza">
         <div class="linha1">
            <div class="col_cinza100"><p>A SulSoft conta com uma equipe altamente especializada composta por profissionais de diversas áreas, prestando serviços em:</p></div>
         </div>
         <div class="linha2">
            <div class="col_cinza100">
               <p><strong>Desenvolvimento de soluções customizadas</strong></p>
               <p>Com experiência em programação, principalmente em IDL, a SulSoft desenvolve e customiza ferramentas para processamento de imagens e
                  dados técnico-científicos, incluindo extensões para os softwares ENVI e ArcGIS, permitindo ao cliente a otimização e operacionalização de análises avançadas em seus dados.
               </p>
            </div>
         </div>
         <div class="linha1">
            <div class="col_cinza100">
               <p><strong>Extração de modelos digitais de elevação e ortorretificação</strong></p>
               <p>A excelência no desenvolvimento de algoritmos para extração de modelos digitais de elevação estende-se à prestação de serviços de processamento de estereopares ópticos
                  para e extração de DSM, conversão DSM->DTM, ortorretificação e mosaico de imagens.
               </p>
            </div>
         </div>
         <div class="linha2">
            <div class="col_cinza100">
               <p><strong>Consultoria para projetos de processamento de imagens e sinais</strong></p>
               <p>A SulSoft presta consultoria na elaboração e execução de projetos de processamento de imagens e sinais, auxiliando o cliente na especificação de dados, na definição de
                  ferramentas e fluxos de processamento; além de oferecer treinamento para a execução.
               </p>
            </div>
         </div>
         <div class="linha1">
            <div class="col_cinza100">
               <p><strong>Processamento de imagens e dados técnico-científicos</strong></p>
               <p>Para quem precisa de agilidade na obtenção de resultados, a SulSoft realiza serviços de processamentos de dados e imagens de satélite, com capacidade de processamento
                  de grande volume de dados em menos tempo, tendo em vista a experiência na customização das ferramentas de processamento.
               </p>
            </div>
         </div>
      </div> 
   </div>
   </div>    
</section>



<section id="projetos">
   <div id="projetos_header">
      <div class="wrapp">
         <div class="title"><h2>PROJETOS</h2></div>
      </div>
   </div>
   <div class="wrapp">
   <div id="content">
      <div class="wrapper_cinza">
         
		 <div class="linha1" id="envi">
            <div class="col_cinza25">
               <div class="col100"><img src="img/projeto_sar.jpg" alt="Projeto SAR-SIPAM"></div>
               
            </div>
            <div class="col_cinza60a">
               <p><strong>Projeto SAR-SIPAM</strong></p>
               <p>A SulSoft desenvolve soluções personalizadas na elaboração e execução de projetos de processamento de imagens e sinais, geralmente ligados a área de geoprocessamento e sensoriamento remoto. Atua principalmente na especificação de dados, na definição e desenvolvimento de ferramentas e fluxos de processamento personalizados, além de oferecer treinamento e consultoria.</p>
			   
               <p>Um dos grandes projetos desenvolvidos pela SulSoft no ano de 2016 é o SAR-SIPAM, realizado para o SIPAM - Sistema de Proteção da Amazônia.
			   </p>
               <p>Conheça mais detalhes sobre este projeto acessando o <a href="pdf/sulsoft_sar-sipam-2016.pdf" target="_blank" class="linksub">conteúdo completo</a>.</p>
            </div>
            <div class="col_cinza15">
               <a href="pdf/sulsoft_sar-sipam-2016.pdf" target="_blank"><img src="img/pdf.png" title="Mais informações sobre o Projeto SAR-SIPAM" alt="Mais informações sobre o Projeto SAR-SIPAM"></a>
               <p>Mais informações<br> sobre o Projeto<br> SAR-SIPAM</p>
            </div>
         </div>
		 
		 
		 <div class="linha2" id="envi">
            <div class="col_cinza25">
               <div class="col100"><img src="img/projeto_dipa.jpg" alt="Projeto DIPA"></div>
            </div>
            <div class="col_cinza60a">
               <p><strong>Projeto DIPA</strong></p>
			   
               <p>Foi desenvolvido para o Grupo de Investigação da Mecânica do Movimento Humano – BIOMEC – da Universidade Federal do Rio Grande do Sul (UFRGS), no ano de 2014.</p>
			   
			   <p>Consiste no desenvolvimento de um software para realizar avaliação postural de pacientes a partir de fotografias.</p>
               <p>Conheça mais detalhes sobre este projeto acessando o <a href="pdf/sulsoft_dipa-2014.pdf" target="_blank" class="linksub">conteúdo completo</a>.</p>
            </div>
            <div class="col_cinza15">
               <a href="pdf/sulsoft_dipa-2014.pdf" target="_blank"><img src="img/pdf.png" title="Mais informações sobre o Projeto DIPA" alt="Mais informações sobre o Projeto DIPA"></a>
               <p>Mais informações<br> sobre o Projeto<br> DIPA</p>
            </div>
         </div>
		 
		 
		 <div class="linha1" id="envi">
            <div class="col_cinza25">
               <div class="col100"><img src="img/projeto_alvean.jpg" alt="Projeto Alvean"></div>
               
            </div>
            <div class="col_cinza60a">
               <p><strong>Projeto Alvean</strong></p>
               <p>Este projeto foi realizado para a empresa Alvean, uma joint venture formada pela Cargill e pela Copersucar, no ano de 2015.</p>
			   
			   <p>Foi desenvolvida uma ferramenta para monitoramento de cultivos a partir de imagens MODIS, calculando quatro índices de vegetação distintos, a partir das bandas dos produtos MOD09 e MYD09, possibilitando monitorar interativamente o perfil temporal dos índices de cada pixel.</p>
			   
               <p>Conheça mais detalhes sobre este projeto acessando o <a href="pdf/sulsoft_alvean-2015.pdf" target="_blank" class="linksub">conteúdo completo</a>.</p>
            </div>
            <div class="col_cinza15">
               <a href="pdf/sulsoft_alvean-2015.pdf" target="_blank"><img src="img/pdf.png" title="Mais informações sobre o Projeto Alvean" alt="Mais informações sobre o Projeto Alvean"></a>
               <p>Mais informações<br> sobre o Projeto<br> Alvean</p>
            </div>
         </div>
         
		 
		 <div class="linha2" id="envi">
            <div class="col_cinza25">
               <div class="col100"><img src="img/projeto_ots.jpg" alt="Projeto OTS"></div>
            </div>
            <div class="col_cinza60a">
               <p><strong>Projeto OrthoToolStereo - OTS</strong></p>
			   
               <p>O projeto referente ao OTS, consiste no desenvolvimento de um software para extração de Modelos Digitais de Superfície (MDS) a partir de pares estereoscópicos de imagens ópticas de alta resolução.</p>
			   
			   <p>A proposta do programa busca o maior nível de automatização no processo, auxiliando o usuário na definição dos parâmetros por meio de fluxos de trabalho com guias passo a passo, não necessitando definição de pontos de controle.</p>
               <p>Conheça mais detalhes sobre este projeto acessando o <a href="pdf/sulsoft_ots-2016.pdf" target="_blank" class="linksub">conteúdo completo</a>.</p>
            </div>
            <div class="col_cinza15">
               <a href="pdf/sulsoft_ots-2016.pdf" target="_blank"><img src="img/pdf.png" title="Mais informações sobre o Projeto OTS" alt="Mais informações sobre o Projeto OTS"></a>
               <p>Mais informações<br> sobre o Projeto<br> OrthoToolStereo</p>
            </div>
         </div>
          
      </div> 
   </div>
   </div>    
</section>



<section id="cursos">
   <div id="cursos_header">
      <div class="wrapp">
         <div class="title"><h2>TREINAMENTOS</h2></div>
      </div>
   </div>
   <div class="wrapp">
   <div id="content">
      <div class="wrapper_geral">
		<div class="col_cinza60">
			<p class="fonte_geral">A qualificação profissional é um diferencial para que o profissional se destaque no mercado de trabalho. Além disso, é uma oportunidade de adquirir conhecimento mais abrangente em sua área de atuação, acompanhar as tendências, descobrir novas técnicas e as opiniões do mercado.</p>
			<p class="fonte_geral">Os cursos da SulSoft são ministrados por profissionais altamente capacitados e possuem formato flexível, que se ajustam à sua necessidade e disponibilidade de tempo. Existem três modalidades possíveis: presencial, webconferência e in-company. Consulte a agenda, e entre em contato conosco caso precise de datas especiais.</p>
			<p class="fonte_geral">Invista em sua carreira e inscreva-se agora mesmo!</p>
			
			<br>
			<h1>Treinamentos ENVI e IDL</h1>
			<div class="wrapper_geral">
				<div class="col_cinza100">
				<p class="trein_cursos"><i class="fas fa-angle-right"></i> <a class='iframe' href="curso_detalhe.php?name=envi100" alt="Mais informações sobre o treinamento" title="Mais informações sobre o treinamento">ENVI 100 – Treinamento Básico</a></p>
				<p class="trein_cursos"><i class="fas fa-angle-right"></i> <a class='iframe' href="curso_detalhe.php?name=envi200" alt="Mais informações sobre o treinamento" title="Mais informações sobre o treinamento">ENVI 200 – Treinamento Avançado</a></p>
				<p class="trein_cursos"><i class="fas fa-angle-right"></i> <a class='iframe' href="curso_detalhe.php?name=envi250" alt="Mais informações sobre o treinamento" title="Mais informações sobre o treinamento">ENVI 250 – Treinamento ENVI+IDL</a></p>
				<p class="trein_cursos"><i class="fas fa-angle-right"></i> <a class='iframe' href="curso_detalhe.php?name=idl100" alt="Mais informações sobre o treinamento" title="Mais informações sobre o treinamento">IDL 100 – Treinamento Básico</a></p>
				<p class="trein_cursos"><i class="fas fa-angle-right"></i> <a class='iframe' href="curso_detalhe.php?name=idl200" alt="Mais informações sobre o treinamento" title="Mais informações sobre o treinamento">IDL 200 – Treinamento Avançado</a><br></p>
				</div>
			</div>
					
			<br><h1>Geotecnologias Aplicadas</h1>
			
			<div class="wrapper_geral">
				<div class="col_cinza100">
				<p class="trein_cursos"><i class="fas fa-angle-right"></i> <a class='iframe' href="curso_detalhe.php?name=agricultura" alt="Mais informações sobre o treinamento" title="Mais informações sobre o treinamento">Sensoriamento Remoto para Agricultura de Precisão</a></p>
				<p class="trein_cursos"><i class="fas fa-angle-right"></i> <a class='iframe' href="curso_detalhe.php?name=classificacao" alt="Mais informações sobre o treinamento" title="Mais informações sobre o treinamento">Fundamentos em Classificação Digital de Imagens</a></p>
				<p class="trein_cursos"><i class="fas fa-angle-right"></i> <a class='iframe' href="curso_detalhe.php?name=lidar" alt="Mais informações sobre o treinamento" title="Mais informações sobre o treinamento">Processamento de Nuvens de Pontos LiDAR</a></p>
				<p class="trein_cursos"><i class="fas fa-angle-right"></i> <a class='iframe' href="curso_detalhe.php?name=sar" alt="Mais informações sobre o treinamento" title="Mais informações sobre o treinamento">Conceitos Básicos de Processamento SAR</a></p>
				<p class="trein_cursos"><i class="fas fa-angle-right"></i> <a class='iframe' href="curso_detalhe.php?name=dem" alt="Mais informações sobre o treinamento" title="Mais informações sobre o treinamento">Extração de Modelos Digitais de Elevação</a></p>
				</div>
			</div>
		</div>
		
		<div class="col_cinza40">
		
		<center><img src="img/line_trein.png">
		
		<p class="trein_dir"><a href="pdf_treinamentos/agenda_treinamentos_sulsoft.pdf" class="trein_dir" target="_blank" title="Agenda completa de treinamentos" alt="Agenda completa de treinamentos">Agenda completa de treinamentos</a></p>
		
		<img src="img/line_trein.png">
		
		<p class="trein_dir"><a href="curso_data_personalizada.html" class="trein_dir iframe" title="Data personalizada de treinamento" alt="Data personalizada de treinamento">Data personalizada de treinamento</a></p>
		
		<img src="img/line_trein.png">
		
		<p class="trein_dir"><a href="curso_in-company.html" class="trein_dir iframe" title="Solicite um treinamento in-company" alt="Solicite um treinamento in-company">Solicite um treinamento in-company</a></p>
		
			<img src="img/line_trein.png">
			
			<center><br><br><div style="max-width:250px">
  <img class="mySlides" src="img/curso_01.jpg">
  <img class="mySlides" src="img/curso_02.jpg">
  <img class="mySlides" src="img/curso_03.jpg">
  <img class="mySlides" src="img/curso_04.jpg">
</div></center>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script>
			
		</center>
		
		
		</div>
    
      </div> 
   </div>    
   </div>
</section>


<section id="noticias">
   <div id="noticias_header">
      <div class="wrapp">
         <div class="title"><h2>NOTÍCIAS</h2></div>
      </div>
   </div>
   <div class="wrapp">
   <div id="content">
      <div class="wrapper_cinza">
               
		<?php
		
		// Noticias
		
		try {
			$conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
			$stmt = $conn->prepare('SELECT * FROM noticias ORDER BY data DESC LIMIT 0,5');
			$stmt->execute();
		
			$result = $stmt->fetchAll();
		
			if ( count($result) ) {
				
				$noticia_cor = "linha1";
				
				foreach($result as $row) {
					$noticia_id = $row['id'];
					$noticia_data = date('d/m/Y', strtotime($row['data']));
					$noticia_titulo = utf8_encode($row['titulo']);
					$noticia_texto = utf8_encode($row['texto']);
					
					print "<a id=\"noticia-". $noticia_id ."\"></a><div class=\"". $noticia_cor ."\"><div class=\"col_cinza100\"><p><strong>". $noticia_data ." - ". $noticia_titulo ."</p></strong><p align=\"justify\">". $noticia_texto ."<br><br></p></div></div>";
					
					switch ($noticia_cor) {
						case 'linha1': $noticia_cor = 'linha2'; break;
						case 'linha2': $noticia_cor = 'linha1'; break;
					}
					
				}
			} else {
				$noticia_data = date("Y-m-d");
				$noticia_titulo = "Infelizmente não foi possível carregar as notícias agora";
				$noticia_texto = "Tente novamente dentro de alguns instantes...";
				print "<div class=\"linha1\"><div class=\"col_cinza100\"><a id=\"noticia-0\" name=\"noticia-0\"></a><p><strong>". $noticia_data ." - ". $noticia_titulo ."</p></strong><p>". $noticia_texto ."</p></div></div>";
		}
		} catch(PDOException $e) {
				// echo 'ERROR: ' . $e->getMessage();
		}
		
		?>
		
		 
      </div> 
   </div>
   </div>    
</section>  
<section id="contato">
   <div id="contato_header">
      <div class="wrapp">
         <div class="title"><h2>CONTATO</h2></div>
      </div>
   </div>
   <div class="wrapp">
   <div id="content">
      <div class="wrapper_cinza">
         <div class="col_cinza40">
            <p><strong>SulSoft</strong><br>
            Rua Felipe Neri, 444<br>
            Auxiliadora - Porto Alegre/RS<br>
            Telefone: (51) 3333-1581<br>
            E-mail: <a class="mailto" href="mailto:info@sulsoft.com.br">info@sulsoft.com.br</a><br></p>
            <p><strong>Contato Comercial:</strong><br>
               <a class="mailto" href="mailto:comercial@sulsoft.com.br">comercial@sulsoft.com.br</a></p>
            <p><strong>Suporte Técnico:</strong><br>
               <a class="mailto" href="mailto:suporte@sulsoft.com.br">suporte@sulsoft.com.br</a></p>
            <p><span style="text-decoration: underline;">Horário de atendimento</span>:<br>
            Segunda a Sexta-feira,<br>
            das 8h30 às 12h e das 13h30 às 18h.</p>
            <div class="col40">
               <div class="col50"><a href="https://www.facebook.com/sulsoft" target="_blank"><img src="img/face2.png" alt="Facebook Sulsoft"></a></div>
               <div class="col50"><a href="https://www.youtube.com/sulsoftBR" target="_blank"><img src="img/youtube2.png" alt="Youtube Sulsoft"></a></div>
            </div>
         </div>
         <div class="col_cinza60">
            <div id="form">
               <p>Se preferir, deixe aqui sua mensagem:</p>               
			   
			   
			    <form action="php/form.php" method="POST" name="contato" id="contato">

				<input type=hidden name='captcha_settings' value='{"keyname":"recaptcha","fallback":"true","orgId":"00DA0000000KhQx","ts":""}'>
				<input type=hidden name="oid" value="00DA0000000KhQx">
				<input type=hidden name="retURL" value="https://www.sulsoft.com.br/contato_success.html">

				<input type=hidden name="lead_source" value="Contato Site SulSoft">
				
				<input  id="first_name" maxlength="40" name="first_name" size="20" type="text" placeholder="Nome" required="required" /><br>

				<input  id="last_name" maxlength="80" name="last_name" size="20" type="text"  placeholder="Sobrenome" required="required" /><br>

				<input  id="company" maxlength="40" name="company" size="20" type="text"  placeholder="Empresa" required="required" /><br>

				<input  id="phone" maxlength="40" name="phone" type="tel" size="20" type="text" placeholder="Telefone" required="required" /><br>

				<input  id="email" maxlength="80" type="email" name="email" size="20" type="text" placeholder="Email" required="required" /><br>

				<textarea name="description" placeholder="Mensagem" required="required"></textarea><br>
				
				<div class="g-recaptcha" data-sitekey="6LehEAwUAAAAAJhZZ4_yHns8LZeetSmuwrNOtm4g"></div><br>
				<input type="submit" name="submit" id="enviar" value="Enviar">

				</form>

		    </div>
         </div>
      </div> 
      <div id="mapa">
         <iframe class="mapa" src="https://www.google.com/maps/d/embed?mid=zTToWn8qtvn0.k3kD_jqGZr3Y"></iframe>
      </div>
   </div>
   </div>    
</section>  
<footer>
   <div class="wrapp">
      <p>SulSoft - Soluções em processamento de dados geoespaciais<br>
      Copyright © 2015</p>
   </div>   
</footer>
</div>
</body>
</html>