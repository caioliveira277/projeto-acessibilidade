<main>
	<div class="container boas-praticas">
		<div class="row breadcrumb">
			<div class="col">
				<p class="change-font-size">Você está em <a class="sr-only sr-only-focusable" href="?view=home">Home</a> > <a class="sr-only sr-only-focusable" href="?view=boas-praticas">Boas práticas</a></p>
			</div>
		</div>
		<h1 class="change-font-size" id="conteudo-principal">Boas práticas</h1>
		<section class="row">
			<h2 class="my-3 change-font-size">
				Estrutura semântica
			</h2>
			<figure class="col-12 d-flex justify-content-center align-items-center my-5">
				<img src="<?= BASE_URL ?>/public/assets/img/imagemEstruturaSemantica.png" class="img-fluid"
					alt="Imagem mostrando um bloco de código, contendo dicas de como estruturar o html em uma pagina que contém títulos, parágrafos e uma lista ordenada">
			</figure>
			<div class="col-12 col-md-6">
				<p class="change-font-size">Dentro do HTML devemos seguir uma semântica de tags e estruturas como no
					exemplo acima.</p>
			</div>
		</section>
		<section class="row">
			<h2 class="my-3 change-font-size">
				Adicionando uma imagem
			</h2>
			<figure class="col-12 d-flex justify-content-center align-items-center my-5">
				<img src="<?= BASE_URL ?>/public/assets/img/imagemAdiconarUmaImagem.png" class="img-fluid"
					alt="Imagem mostrando um bloco de código que contém uma tag HTML chamada 'img' exemplificando a url do atributo 'src' e o texto no atributo 'alt'">
			</figure>
			<div class="col-12 col-md-6">
				<p class="change-font-size">A parte de “ALT” ajuda o leitor de tela a identificar a imagem, além de ser
					utilizado quando a imagem não carrega por algum motivo.</p>
			</div>
		</section>
		<section class="row">
			<h2 class="my-3 change-font-size">
				Não utilize varias quebras de linhas no HTML
			</h2>
			<figure class="col-12 d-flex justify-content-center align-items-center my-5">
				<img src="<?= BASE_URL ?>/public/assets/img/imagemQuebrasNoHTML.png" class="img-fluid"
					alt="Imagem mostrando um bloco de código falando sobre a forma incorreta de quebrar linhas utilizando a tag 'br' do HTML">
			</figure>
			<div class="col-12 col-md-6">
				<p class="change-font-size">Além de não ser semântico, para o navegador é como você estivesse colocando
					tudo em uma linha, as quebras só aparecem para o usuário, ao invés disso use outra tag caso queira o
					conteúdo em outras linhas.</p>
			</div>
		</section>
		<section class="row">
			<h2 class="my-3 change-font-size">
				Utilizar a tag correta
			</h2>
			<figure class="col-12 d-flex justify-content-center align-items-center my-5">
				<img src="<?= BASE_URL ?>/public/assets/img/imagemUsoDoButton.png" class="img-fluid"
					alt="Imagem contendo um bloco de código verde com a idéia da forma correta de utilizar botões no HTML que seria utilizando a tag 'button' e códigos em vermelho mostrando a forma incorreta de utilizar botões que seria usando a tag 'div'">
			</figure>
			<div class="col-12 col-md-6">
				<p class="change-font-size">No exemplo acima o correto é utilizar a tag button para criar um botão,
					porém podemos nos deparar com o uso de uma div para criar o mesmo, o que está incorreto.</p>
			</div>
		</section>
		<section class="row">
			<h2 class="my-3 change-font-size">
				Criar um formulário
			</h2>
			<figure class="col-12 d-flex justify-content-center align-items-center my-5">
				<img src="<?= BASE_URL ?>/public/assets/img/imagemFormulario.png" class="img-fluid"
					alt="Imagem mostrando um bloco de código falando sobre a tag 'label', que seria ideal na utilização de de títulos dos campos em formulários no HTML">
			</figure>
			<div class="col-12 col-md-6">
				<p class="change-font-size">A tag label explica para o usuário e para o leitor de tela o que significa
					aquele campo que o usuário está preenchendo.</p>
			</div>
		</section>
		<section class="row">
			<h2 class="my-3 change-font-size">
				Adicionar uma explicação à imagem
			</h2>
			<figure class="col-12 d-flex justify-content-center align-items-center my-5">
				<img src="<?= BASE_URL ?>/public/assets/img/imagemAriaImagem.png" class="img-fluid" alt="Imagem mostrando um bloco de código HTMl que fala sobre a utilização do atributo 'aria-labelledby', usado para exibição de texto acessível em tags de imagem">
			</figure>
			<div class="col-12 col-md-6">
				<p class="change-font-size">A aria-labelledby se conecta com a tag P e assim que o usuário passar a o
					mouse sobre a foto a tag P irá aparecer explicando a imagem.</p>
			</div>
		</section>
	</div>
</main>