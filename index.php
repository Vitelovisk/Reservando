<html es>
    <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cheff da Casa</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <script>
	function gerarLinkWhatsApp() {
		// Recupera os valores dos campos do formulário
		var nome = document.getElementById("nome").value;
		var email = document.getElementById("email").value;
		var cidade = document.getElementById("cidade").value;
		var estado = document.getElementById("estado").value;
		var descricao = document.getElementById("descricao").value;

		// Formata os valores para a mensagem no WhatsApp
		var mensagem = "Nome: " + nome + "%0A";
		mensagem += "Email: " + email + "%0A";
		mensagem += "Cidade: " + cidade + "%0A";
		mensagem += "Estado: " + estado + "%0A";
		mensagem += "Descrição: " + descricao;

		// Monta o link de WhatsApp com a mensagem
		var numeroWhatsApp = "5547996792890"; // Substitua pelo número de WhatsApp desejado
		var linkWhatsApp = "https://wa.me/" + numeroWhatsApp + "?text=" + mensagem;

		// Redireciona para o link de WhatsApp
		window.location.href = linkWhatsApp;
	}
</script>
  
</head>

<body>

  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
   
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <div class="logo me-auto">
        <h1><a href="index.jsp">Restaurante Cheff da Casa</a></h1>
      </div>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Sobre nós</a></li>
          <li><a class="nav-link scrollto" href="#contact">Localize-nos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>                      
      </nav>
      <a href="panel/iniciar-sessao.php" class="book-a-table-btn scrollto">Reservar</a>
    </div>

  </header>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Cheff da</span> Casa</h2>
                <p class="animate__animated animate__fadeInUp">Somos um restaurante que oferece uma variedade de pratos peruanos, mas nossa especialidade são as sopas. Estamos entre os restaurantes do Peru com as melhores referências e classificações. </p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Algumas Opções</a>
                  <a href="/panel/registrar.php" class="btn-book animate__animated animate__fadeInUp scrollto">Realize sua Reserva</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Nossa História</h2>
                <p class="animate__animated animate__fadeInUp">Bem-vindo ao Restaurante Cheff da Casa! Fundada em 2000, após uma pausa, voltamos com força total para trazer a todos uma experiência única de comida "caseirinha". Nosso ambiente acolhedor preserva a tradição culinária familiar.Venha reviver o gostinho genuíno do Cheff da Casa!</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Nosso Cardápio</a>
                  <a href="/panel/registrar.php" class="btn-book animate__animated animate__fadeInUp scrollto">Reserve sua Mesa</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">..</h2>
                <p class="animate__animated animate__fadeInUp">Nosso restaurante oferece uma ampla variedade de pratos brasileiros autênticos. Garantimos ingredientes frescos e sabores genuínos. Faça reservas para eventos especiais e confira nosso cardápio abaixo.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Nosso Cardápio</a>
                  <a href="/panel/registrar.php" class="btn-book animate__animated animate__fadeInUp scrollto">Reserve sua Mesa</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
			<h2>Por que escolher o <span>Nosso Restaurante</span></h2>
			<p>Por oferecermos o que há de melhor em termos de qualidade e sabor, cada momento é uma experiência única e enriquecedora.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
				<h4>Esforço Contínuo</h4>
				<p>Trabalho árduo e dedicação são indispensáveis para oferecer o melhor. E a verdadeira qualidade reside em cada detalhe.</p>
            </div>
          </div>

		  <div class="col-lg-4 mt-4 mt-lg-0">
		  <div class="box">
		 	 <span>02</span>
		 	 <h4>Resistência Inigualável</h4>
		 	 <p>A dor é uma fuga da realidade, uma busca pela perfeição. Verdades e desafios moldam e fortalecem o nosso caminho.</p>
		  </div>
		  </div>
		  
		  <div class="col-lg-4 mt-4 mt-lg-0">
		  <div class="box">
		 	 <span>03</span>
		 	 <h4>Excelência Incomparável</h4>
		 	 <p>Desafios e inovações definem nosso compromisso. A dor e as dificuldades são os alicerces da nossa força e singularidade.</p>
		  </div>
		  </div>


        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
	<section id="menu" class="menu">
	<div class="container">
	
		<div class="section-title">
		<h2>Confira nosso delicioso <span>Cardápio</span></h2>
		</div>
	
		<div class="row">
		<div class="col-lg-12 d-flex justify-content-center">
			<ul id="menu-flters">
			<li data-filter="*" class="filter-active">Mostrar Todos</li>
			<li data-filter=".filter-starters">Entradas</li>
			<li data-filter=".filter-salads">Saladas</li>
			<li data-filter=".filter-specialty">Especialidades</li>
			</ul>
		</div>
		</div>
	
		<div class="row menu-container">
	
		<div class="col-lg-6 menu-item filter-starters">
			<div class="menu-content">
			<a href="#">Pão de Queijo</a><span>R$ 4,50</span>
			</div>
			<div class="menu-ingredients">
			Pãezinhos assados, macios e saborosos feitos com queijo
			</div>
		</div>
	
		<div class="col-lg-6 menu-item filter-specialty">
			<div class="menu-content">
			<a href="#">Feijoada Completa</a><span>R$ 25,90</span>
			</div>
			<div class="menu-ingredients">
			Feijoada tradicional servida com arroz, farofa, couve e laranja
			</div>
		</div>
	
		<div class="col-lg-6 menu-item filter-starters">
			<div class="menu-content">
			<a href="#">Bolinho de Bacalhau</a><span>R$ 6,00</span>
			</div>
			<div class="menu-ingredients">
			Bolinhos fritos de bacalhau, crocantes por fora e macios por dentro
			</div>
		</div>
	
		<div class="col-lg-6 menu-item filter-salads">
			<div class="menu-content">
			<a href="#">Salada Caesar</a><span>R$ 18,95</span>
			</div>
			<div class="menu-ingredients">
			Alface romana, croutons, queijo parmesão e molho Caesar
			</div>
		</div>
	
		<div class="col-lg-6 menu-item filter-specialty">
			<div class="menu-content">
			<a href="#">Churrasco Misto</a><span>R$ 29,95</span>
			</div>
			<div class="menu-ingredients">
			Seleção de carnes grelhadas com acompanhamentos tradicionais
			</div>
		</div>
	
		<div class="col-lg-6 menu-item filter-starters">
			<div class="menu-content">
			<a href="#">Coxinha</a><span>R$ 5,00</span>
			</div>
			<div class="menu-ingredients">
			Salgadinho brasileiro recheado com frango desfiado
			</div>
		</div>
	
		<div class="col-lg-6 menu-item filter-salads">
			<div class="menu-content">
			<a href="#">Salada Tropical</a><span>R$ 20,95</span>
			</div>
			<div class="menu-ingredients">
			Mix de folhas verdes com frutas tropicais e molho especial
			</div>
		</div>
	
		<div class="col-lg-6 menu-item filter-salads">
			<div class="menu-content">
			<a href="#">Salada de Palmito</a><span>R$ 22,95</span>
			</div>
			<div class="menu-ingredients">
			Palmito, tomate, cebola roxa e alface com molho vinagrete
			</div>
		</div>
	
		<div class="col-lg-6 menu-item filter-specialty">
			<div class="menu-content">
			<a href="#">Moqueca Baiana</a><span>R$ 31,95</span>
			</div>
			<div class="menu-ingredients">
			Ensopado de peixe e camarões com leite de coco e azeite de dendê
			</div>
		</div>
	
		</div>
	
	</div>
	</section><!-- End Menu Section -->


	<!-- ======= Seção de Especialidades ======= -->
	<section id="specials" class="specials">
	<div class="container">
	
		<div class="section-title">
		<h2>Confira nossos <span>Especiais</span></h2>
		<p>Descubra os sabores únicos e inesquecíveis que só a nossa cozinha brasileira pode oferecer.</p>
		</div>
	
		<div class="row">
		<div class="col-lg-3">
			<ul class="nav nav-tabs flex-column">
			<li class="nav-item">
				<a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Feijoada Completa</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#tab-2">Moqueca Capixaba</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#tab-3">Churrasco Gaúcho</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#tab-4">Acarajé</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#tab-5">Pato no Tucupi</a>
			</li>
			</ul>
		</div>
		<div class="col-lg-9 mt-4 mt-lg-0">
			<div class="tab-content">
			<div class="tab-pane active show" id="tab-1">
				<div class="row">
				<div class="col-lg-8 details order-2 order-lg-1">
					<h3>Feijoada Completa</h3>
					<p class="fst-italic">Um prato tradicional, repleto de sabor e história.</p>
					<p>A feijoada é um dos pratos mais conhecidos da culinária brasileira, incluindo diferentes cortes de carne de porco e feijão preto, servida com arroz, couve, farofa e laranja.</p>
				</div>
				<div class="col-lg-4 text-center order-1 order-lg-2">
					<img src="assets/img/specials-1.jpg" alt="" class="img-fluid">
				</div>
				</div>
			</div>
			<div class="tab-pane" id="tab-2">
				<div class="row">
				<div class="col-lg-8 details order-2 order-lg-1">
					<h3>Moqueca Capixaba</h3>
					<p class="fst-italic">Uma explosão de sabores do mar.</p>
					<p>Este prato é um ensopado de peixes e frutos do mar, cozido lentamente com tomates, cebolas, alho e coentro, acompanhado de arroz branco e pirão.</p>
				</div>
				<div class="col-lg-4 text-center order-1 order-lg-2">
					<img src="assets/img/specials-2.jpg" alt="" class="img-fluid">
				</div>
				</div>
			</div>
			<div class="tab-pane" id="tab-3">
				<div class="row">
				<div class="col-lg-8 details order-2 order-lg-1">
					<h3>Churrasco Gaúcho</h3>
					<p class="fst-italic">A essência do churrasco brasileiro.</p>
					<p>O churrasco gaúcho é famoso por sua carne de alta qualidade e modo de preparo tradicional. Servido com farofa, molho campanha e pão de alho.</p>
				</div>
				<div class="col-lg-4 text-center order-1 order-lg-2">
					<img src="assets/img/specials-3.jpg" alt="" class="img-fluid">
				</div>
				</div>
			</div>
			<div class="tab-pane" id="tab-4">
				<div class="row">
				<div class="col-lg-8 details order-2 order-lg-1">
					<h3>Acarajé</h3>
					<p class="fst-italic">Um ícone da cozinha baiana.</p>
					<p>O acarajé é feito de massa de feijão-fradinho frito em azeite de dendê, recheado com vatapá, camarão seco e vinagrete.</p>
				</div>
				<div class="col-lg-4 text-center order-1 order-lg-2">
					<img src="assets/img/specials-4.jpg" alt="" class="img-fluid">
				</div>
				</div>
			</div>
			<div class="tab-pane" id="tab-5">
				<div class="row">
				<div class="col-lg-8 details order-2 order-lg-1">
					<h3>Pato no Tucupi</h3>
					<p class="fst-italic">Um prato único da região Norte.</p>
					<p>O pato no tucupi combina pato cozido em um caldo de tucupi e jambu, criando uma experiência culinária única e deliciosa.</p>
				</div>
				<div class="col-lg-4 text-center order-1 order-lg-2">
					<img src="assets/img/specials-5.jpg" alt="" class="img-fluid">
				</div>
				</div>
			</div>
			</div>
		</div>
		</div>
	
	</div>
	</section><!-- Fim da Seção de Especialidades -->


	<!-- ======= Seção de Eventos ======= -->
	<section id="events" class="events">
	<div class="container">
	
		<div class="section-title">
		<h2>Realize seu <span>Evento</span> em nosso Restaurante</h2>
		</div>
	
		<div class="events-slider swiper">
		<div class="swiper-wrapper">
	
			<div class="swiper-slide">
			<div class="row event-item">
				<div class="col-lg-6">
				<img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0 content">
				<h3>Aniversários</h3>
				<div class="price">
					<p><span>R$ 150,00</span></p>
				</div>
				<p class="fst-italic">
					Comemore essa data especial conosco, oferecemos um ambiente alegre e acolhedor para todas as idades.
				</p>
				<ul>
					<li><i class="bi bi-check-circle"></i> Decoração personalizada para a ocasião.</li>
					<li><i class="bi bi-check-circle"></i> Menu especial incluindo pratos e bebidas.</li>
					<li><i class="bi bi-check-circle"></i> Espaço adaptado para crianças e adultos.</li>
				</ul>
				<p>
					Organizamos todos os detalhes para que sua festa de aniversário seja inesquecível, desde a decoração até o menu personalizado.
				</p>
				</div>
			</div>
			</div><!-- Fim do item de evento -->
	
			<div class="swiper-slide">
			<div class="row event-item">
				<div class="col-lg-6">
				<img src="assets/img/event-private.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0 content">
				<h3>Eventos Corporativos</h3>
				<div class="price">
					<p><span>R$ 300,00</span></p>
				</div>
				<p class="fst-italic">
					Ideal para reuniões de negócios, confraternizações de equipe e eventos corporativos em um ambiente sofisticado.
				</p>
				<ul>
					<li><i class="bi bi-check-circle"></i> Equipamento audiovisual de última geração.</li>
					<li><i class="bi bi-check-circle"></i> Serviço de catering com diversas opções de cardápio.</li>
					<li><i class="bi bi-check-circle"></i> Ambiente exclusivo e privativo.</li>
				</ul>
				<p>
					Oferecemos um serviço completo para eventos corporativos, garantindo a melhor experiência em um ambiente adaptado às suas necessidades.
				</p>
				</div>
			</div>
			</div><!-- Fim do item de evento -->
	
			<div class="swiper-slide">
			<div class="row event-item">
				<div class="col-lg-6">
				<img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0 content">
				<h3>Eventos Personalizados</h3>
				<div class="price">
					<p><span>A partir de R$ 200,00</span></p>
				</div>
				<p class="fst-italic">
					Seja qual for a ocasião, temos a solução perfeita para tornar seu evento único e memorável.
				</p>
				<ul>
					<li><i class="bi bi-check-circle"></i> Planejamento e execução sob medida.</li>
					<li><i class="bi bi-check-circle"></i> Variedade de temas e estilos de decoração.</li>
					<li><i class="bi bi-check-circle"></i> Flexibilidade para atender a eventos de todos os tamanhos.</li>
				</ul>
				<p>
					De pequenas reuniões a grandes festas, personalizamos cada detalhe para atender às suas expectativas e garantir o sucesso do seu evento.
				</p>
				</div>
			</div>
			</div><!-- Fim do item de evento -->
	
		</div>
		<div class="swiper-pagination"></div>
		</div>
	
	</div>
	</section><!-- Fim da Seção de Eventos -->


    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Reservar Restaurate para <span>EVENTO</span></h2>
          <p>Além disso, estamos prontos para tornar o seu evento ainda mais especial, reservando nosso restaurante exclusivamente para você ou levando toda a delícia do nosso cardápio até o local da sua escolha!</p>
        </div>
		<center>
		<div class="container-fluid">
			<div  class="col-lg-8">
				<div class="col-lg-8">
						<form>
							<label style="text-align: right;" for="nome">Nome:</label>
							<input type="text" class="form-control" id="nome" name="nome" required><br><br>

							<label for="email">Email:</label>
							<input type="email" class="form-control" id="email" name="email" required><br><br>

							<label for="cidade">Cidade:</label>
							<input type="text" class="form-control" id="cidade" name="cidade" required><br><br>

							<label for="estado">Estado:</label>
							<input type="text" class="form-control" id="estado" name="estado" required><br><br>

							<label for="descricao">Descrição:</label>
							<textarea id="descricao" class="form-control" name="descricao" required></textarea><br><br>

							<button type="button" class="book-a-table-btn scrollto" onclick="gerarLinkWhatsApp()">Gerar Link WhatsApp</button>
						</form>
				</div>
			</div>
      </div>
	  </center>
		</div>

    </section><!-- End Book A Table Section -->
    <center>
    <!-- ======= gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Olha nossas marmitas de nosso <span>Restaurante</span></h2>
          <p>Na nossa casa, a marmita é uma explosão de sabores que encanta a todos os paladares!</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/galeria/gallery-1.jpg" class="gallery-lightbox">
                <img src="assets/img/galeria/gallery-1.jpg" alt="" class="img-fluid"width="540" height="360">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/galeria/gallery-2.jpg" class="gallery-lightbox">
                <img src="assets/img/galeria/gallery-2.jpg" alt="" class="img-fluid"width="540" height="360">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/galeria/gallery-3.jpg" class="gallery-lightbox">
                <img src="assets/img/galeria/gallery-3.jpg" alt="" class="img-fluid"width="540" height="360">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/galeria/gallery-4.jpg" class="gallery-lightbox">
                <img src="assets/img/galeria/gallery-4.jpg" alt="" class="img-fluid"width="540" height="360">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/galeria/gallery-5.jpg" class="gallery-lightbox">
                <img src="assets/img/galeria/gallery-5.jpg" alt="" class="img-fluid"width="540" height="360">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/galeria/gallery-6.jpg" class="gallery-lightbox">
                <img src="assets/img/galeria/gallery-6.jpg" alt="" class="img-fluid"width="540" height="360">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/galeria/gallery-7.jpg" class="gallery-lightbox">
                <img src="assets/img/galeria/gallery-7.jpg" alt="" class="img-fluid"width="540" height="360">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/galeria/gallery-8.jpg" class="gallery-lightbox">
                <img src="assets/img/galeria/gallery-8.jpg" alt="" class="img-fluid"width="540" height="360">
              </a>
            </div>
          </div>

        </div>

      </div>
      <br>
      <br>
      <br>
      <br>
    </section><!-- End gallery Section -->
    </center>
<!-- ======= Seção de Chefs ======= -->




    <!-- ======= Seção de testimonials ======= -->
    <section id="events" class="events">
      <div class="container position-relative">
    
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <section >
            <div class="container">

              <div class="section-title">
                <h2>Nossos <span>Chefs Profissionais</span></h2>
                <p style="color: white;">Conheça os talentosos chefs que trazem a essência da culinária brasileira para nossos pratos.</p>
              </div>
              <center>
                <a href="panel/iniciar-sessao.php" class="book-a-table-btn scrollto">Reservar</a>
              </center>
            </div>
          </section><!-- Fim da Seção de Chefs -->
        </div>
    </section><!-- Fim da Seção de testimonials -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Região Central</span></h2>
          <p>Estamos localizado na região central de Joinville</p>
        </div>
      </div>
      <center>
      <div class="map">
        <iframe  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDE5c-r9BkUi4Wwg7aazwk-sCTck-pclQ4&q=R. Visc. de Taunay, 427 - Centro, Joinville - SC, 89203-005"" width="100%" height="50%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      </center>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Local</h4>
              <p>Rua Visc. de Taunay, 427 ,<br>Surquillo 15047</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Horario de Funcionamento</h4>
              <p>10:30 -<br> 15:00</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>E-mails </h4>
              <p>vitor.tomasi@catolicasc.org.br</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Contato</h4>
              <p>(47) 9 9679-2890<br></p>
            </div>
          </div>
        </div>
      </div>

      
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Cheff da Casa</h3>
      <div class="social-links">
        <a href="https://www.instagram.com/cheffdacasarestaurante/" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Cheff da casa</span></strong>. Todos os direitos reservados
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  

</body>
</html>
