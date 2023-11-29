<?php require "topo.view.php" ?>
    
<main id="principal">
    <!--=============== HOME ===============-->
        <section id="d__servicos">
            <article class="d__servicos__info">
                <h1>Simplifique sua busca por serviços. Contrate com facilidade e eficiência!</h1>
                <p>O poder da escolha está em suas mãos.</p>
                <a href="#"><button class="button">Saiba mais</button></a>
            </article>

            <article class="d__servicos_img">
                <img src="./public/imagem/trabalhador4.png" alt="Trabalhadores da D+Serviços">
            </article>
        </section>

        <!--=============== SERVIÇOS ===============-->
        <section id="categorias">
            <article class="limpeza">
                <img src="./public/imagem/limpezas.svg" alt="Limpezas">
                <p>Serviços Domésticos</p>
            </article>
            <article class="reformas">
                <img src="./public/imagem/reformas.svg" alt="Reformas">
                <p>Reformas e Reparos</p>
            </article>
            <article class="mecanica">
                <img src="./public/imagem/mecanica.svg" alt="Mecânica">
                <p>Mecânica</p>
            </article>
            <article class="eventos">
                <img src="./public/imagem/eventos.svg" alt="Eventos">
                <p>Eventos</p>
            </article>
            <article class="tecnologias">
                <img src="./public/imagem/tecnologias.svg" alt="Tecnologias">
                <p>Tecnologias</p>
            </article>
            <article class="aulas">
                <img src="./public/imagem/aulas.svg" alt="Aulas">
                <p>Aulas</p>
            </article>
            <article class="saude">
                <img src="./public/imagem/saude.svg" alt="Saúde">
                <p>Saúde</p>
            </article>
            <article class="beleza">
                <img src="./public/imagem/beleza.svg" alt="Beleza">
                <p>Beleza</p>
            </article>
        </section>

        <!--=============== BARRA DE PESQUISA ===============-->
        <section id="input__pesquisar">
            <article class="busca">
                <img src="./public/imagem/pesquisar.svg" alt="Buscar..."/>
                <input type="search" class="txtBusca" placeholder="Digite aqui sua pesquisa"/>
                <button class="btnBusca" onclick="pesquisar()">Buscar</button>
            </article>
        </section>

        <!--=============== PRINCIPAIS SERVIÇOS - CARDS ===============-->
        <section id="servicos">
            <h2>Principais serviços pedidos</h2>
            <p>Os serviços mais realizados de cada categoria</p>

            <section class="cards__container">
                <article class="servicos__cards">
                    <div class="card">
                        <div class="imagem-container">
                            <img src="./public/imagem/eletricista.png" alt="Eletricista"></div>
                        <div class="servicos__txt">
                            <p>Serviço de Eletricista</p>
                            <a href="eletricista.view.php"><button class="button btn__card">Solicitar orçamento</button></a>
                        </div>
                    </div>
                </article>
                <article class="servicos__cards">
                    <div class="card">
                        <div class="imagem-container">
                            <img src="./public/imagem/mudancas.png" alt="Mudanças">
                        </div>
                        <div class="servicos__txt">
                            <p>Mudanças e Carretos</p>
                            <a href="#"><button class="button btn__card">Solicitar orçamento</button></a>
                        </div>
                    </div>
                </article>
                <article class="servicos__cards">
                    <div class="card">
                        <div class="imagem-container">
                            <img src="./public/imagem/pedreiro.png" alt="Pedreiro">
                        </div>
                        <div class="servicos__txt">
                            <p>Serviço de Pedreiro</p>
                            <a href="#"><button class="button btn__card">Solicitar orçamento</button></a>
                        </div>
                    </div>
                </article>
                <article class="servicos__cards">
                    <div class="card">
                        <div class="imagem-container">
                            <img src="./public/imagem/montador.png" alt="Montador">
                        </div>
                        <div class="servicos__txt">
                            <p>Montagem de Móveis</p>
                            <a href="#"><button class="button btn__card">Solicitar orçamento</button></a>
                        </div>
                    </div>
                </article>
                <article class="servicos__cards">
                    <div class="card">
                        <div class="imagem-container">
                            <img src="./public/imagem/diarista.png" alt="Diarista">
                        </div>
                        <div class="servicos__txt">
                            <p>Serviços de Diarista</p>
                            <a href="#"><button class="button btn__card">Solicitar orçamento</button></a>
                        </div>
                    </div>
                </article>
                <article class="servicos__cards">
                    <div class="card">
                        <div class="imagem-container">
                            <img src="./public/imagem/pintura.png" alt="Pintura">
                        </div>
                        <div class="servicos__txt">
                            <p>Serviço de Pintura</p>
                            <a href="#"><button class="button btn__card">Solicitar orçamento</button></a>
                        </div>
                    </div>
                </article>
            </section>
        </section>

        <!--=============== O QUE É A D+SERVIÇOS ===============-->
        <section id="about" class="scrollReveal">
            <h2>O que é a D+Serviços?</h2>
            <p>D+Serviços é a maior plataforma de contratação de serviços do Brasil. Conectamos Profissionais de todo o Brasil com pessoas solicitando serviço, atendendo com qualidade, facilidade e rapidez todos os tipos de necessidade.</p>

            <article class="cards__about scrollReveal">
                <div class="card__about__info">
                    <img src="./public/imagem/clique.svg" alt="Clique">
                    <h3>Faça o seu pedido</h3>
                    <p>Fale o que você precisa. É rápido e de graça!</p>
                </div>

                <div class="card__about__info">
                    <img src="./public/imagem/card_trabalhador.svg" alt="Trabalhador">
                    <h3>Receba até quatro orçamentos</h3>
                    <p>Profissionais avaliados entram em contato com você em instantes!</p>
                </div>

                <div class="card__about__info">
                    <img src="./public/imagem/like.svg" alt="Like">
                    <h3>Escolha o melhor</h3>
                    <p>Negocie direto com eles. Fácil como nunca foi antes!</p>
                </div>
            </article>
        </section>
    </main>

<?php require "rodape.view.php" ?>