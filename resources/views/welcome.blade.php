<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('arquivos/imagens/logo.png') }}">
    <title>CXM - Cursos de idiomas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="antialiased">
<style>
    @keyframes bounce {
        0% {
            background-image: url('./arquivos/banner/banner.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        50% {
            background-image: url('./arquivos/banner/banner.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        100% {
            background-image: url('./arquivos/banner/banner.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    }
</style>
<div class="banner">

</div>
<header>

    <nav class="navbar navbar-expand-lg navbar-dark">

        <div class="container-fluid ">
            <a class="navbar-brand" href="#"></a>
            <br>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                    aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img class="logo-principal" src="{{ asset('arquivos/logos/logo.png') }}" alt="clever">
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#intro">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Objetivo">Preço</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Segmentos">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Novidades">Novidades</a>
                    </li>

                </ul>
            </div>
{{--            <button id="btnEntrar" type="submit" class="btn btn-danger" style="max-width: 10% !important;" onclick="irPara('{{route('login')}}')">  <span> Entrar</span></button>--}}

        </div>

    </nav>

</header>

<span><a href="https://api.whatsapp.com/send?phone=5511980439535" id="whatsapp-button"><i id="whatsapp" class="fab fa-whatsapp"></i></a></span>

<main>
    {{-- explicação dos tipos de intro  --}}
    <section class="intro missao" data-anime="left">
        <img class="section-image animate__animated animate__jello" src="{{ asset('arquivos/imagens/logo.png') }}" alt="clevarxm">
        <h1><strong><b>Tudo</b> que você precisa em um só lugar</strong></h1>
        <p>Você está pronto para uma jornada de aprendizado de inglês como nunca antes? Prepare-se para explorar um
            mundo de conteúdo exclusivo e de alta qualidade, projetado especialmente para você pela CXM!</p>
        <p>Com a CXM, você terá acesso a uma vasta gama de recursos educacionais, desde lições interativas até
            exercícios envolventes, tudo cuidadosamente elaborado para impulsionar seu domínio do inglês.</p>
        <p> Descubra o inglês de uma maneira totalmente nova, mergulhando em vídeos, áudios e materiais escritos que
            vão desde o básico até o avançado. Na CXM, estamos comprometidos em proporcionar a você uma experiência
            de aprendizado enriquecedora e gratificante..</p>
        <p>Não espere mais! Junte-se à comunidade da CXM e transforme suas habilidades linguísticas hoje mesmo. O
            inglês está ao seu alcance, e a CXM está aqui para guiá-lo em cada passo do caminho. Vamos começar essa
            jornada incrível juntos! Acesse agora mesmo a plataforma CXM e comece a sua jornada rumo à fluência!</p>
    </section>

    {{-- somente no mobile  --}}
    <article class="mobile-servicos" data-anime="right">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card1 mb-4">
                        <h2 class="card-title"><b>Acompanhamento Personalizado</b></h2>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4">
                                <li><i class="fas fa-check"></i> Feedback Preciso e Contínuo</li>
                                <li><i class="fas fa-check"></i> Personalização do Plano de Estudos</li>
                                <li><i class="fas fa-check"></i> Acompanhamento do Progresso em Tempo Real</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class=" card2">
                        <img class="card-img-top img-fluid" src="{{ asset('arquivos/imagens/online.jpg') }}" alt="Imagem de exemplo">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class=" card3 mb-4">
                        <div class="card-body">
                            <figure class="imagem1">
                                <img class="img-fluid" src="{{ asset('arquivos/imagens/logo.png') }}" alt="cxm">
                            </figure>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4">
                                    <li><i class="fas fa-check"></i> Feedback Preciso e Contínuo</li>
                                    <li><i class="fas fa-check"></i> Personalização do Plano de Estudos</li>
                                    <li><i class="fas fa-check"></i> Acompanhamento do Progresso em Tempo Real</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class=" card4">
                        <img class="card-img-top img-fluid" src="{{ asset('arquivos/imagens/banner.jpeg') }}" alt="clever">
                    </div>
                </div>
            </div>
        </div>
    </article>
    {{-- somente no mobile  --}}
<br>
    <br>

    {{-- explicação dos tipos de serviço  --}}
    <article class="servicos missao" data-anime="right">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <img src="{{ asset('arquivos/imagens/online.jpg') }}" class="img-fluid animate__bounce" alt="Imagem de exemplo">
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class=" p-4">
                        <h2 class="mb-4"><b>Acompanhamento Personalizado</b></h2>
                        <div class="d-flex text-center">
                            <ul class="list-unstyled mb-4">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Feedback Preciso e Contínuo</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Personalização do Plano de Estudos</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Acompanhamento do Progresso em Tempo Real</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-2 clev animate__animated animate__fadeIn" style="background-color: #fff; opacity: 0.5">
            <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="p-4" style="margin-bottom: 30px; margin-top: 30px;">
                        <figure class="imagem1">
                            <img class="img-fluid" src="{{ asset('arquivos/imagens/logo.png') }}" alt="cxm">
                        </figure>
                        <ul class="list-unstyled cx-list">
                            <li>
                                <i class="fas fa-check"></i>
                                <span class="phrases mb-4">Feedback Preciso e Contínuo</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span class="phrases mb-4">Personalização do Plano de Estudos</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span class="phrases mb-4">Acompanhamento do Progresso em Tempo Real</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="p-4" style="margin-bottom: 30px; margin-top: 30px;">
                        <img class="img-fluid imagem2" src="{{ asset('arquivos/imagens/banner.jpeg') }}" alt="clever">
                    </div>
                </div>
            </div>
        </div>
    </article>



    <article class="vantagens missao" data-anime="right">
        <h1><strong>Vantagens e <b>serviços</b> que<br> oferecemos </strong></h1>
        <div class="container mt-5">
            <div class="row">

                <div class="col-md-4">
                    <div class="card mb-4 card-vantagens">
                        <i class="fas fa-chart-bar card-vantagens-icons"></i>
                        <div class="card-body">
                            <h5 class="card-title">Monitoramento de Progresso</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Implementação de ferramentas de avaliação e
                                acompanhamento do progresso do aluno, fornecendo feedback detalhado sobre o
                                desempenho e identificando áreas de melhoria para um aprendizado mais eficaz</h6>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card mb-4 card-vantagens">
                        <i class="fas fa-cogs card-vantagens-icons"></i>
                        <div class="card-body">
                            <h5 class="card-title">Suporte Integrado</h5>
                            <h6 class="card-subtitle mb-2 text-muted"> A CXM oferece suporte individualizado, com
                                tutores disponíveis para fornecer orientação e feedback personalizado, ajudando os
                                alunos a superar desafios específicos e a alcançar seus objetivos linguísticos.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 card-vantagens">
                        <i class="fas fa-flag card-vantagens-icons"></i>
                        <div class="card-body">
                            <h5 class="card-title">Conteúdo Dinâmico e Relevante</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Compromisso com a atualização constante do
                                conteúdo do curso para refletir as mudanças no idioma, nas tendências educacionais e
                                nas demandas do mercado de trabalho, garantindo que os alunos estejam sempre
                                atualizados e preparados para os desafios futuros</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 card-vantagens">
                        <i class="fas fa-comment card-vantagens-icons"></i>
                        <div class="card-body">
                            <h5 class="card-title">Técnica e Pedagógica</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Além dos recursos de aprendizado, a
                                plataforma também oferece suporte técnico e orientação pedagógica, garantindo que os
                                alunos tenham acesso a assistência abrangente sempre que necessário</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 card-vantagens">
                        <i class="fas fa-clock card-vantagens-icons"></i>
                        <div class="card-body">
                            <h5 class="card-title">Flexibilidade de Horário</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Estude no seu próprio ritmo, sem restrições
                                de horário, permitindo que você se adapte facilmente à sua agenda ocupada</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 card-vantagens">
                        <i class="fas fa-users card-vantagens-icons"></i>
                        <div class="card-body">
                            <h5 class="card-title">Interação Social</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Criação de uma comunidade online onde os
                                alunos podem interagir entre si, trocar experiências, praticar habilidades de
                                conversação e receber feedback construtivo, fomentando um ambiente de aprendizado
                                colaborativo e motivador</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="button-container">
            <button id="start" class="start-button" onclick="irPara('{{route('login')}}')">Começar</button>
            <button type="button" class=" learn-more-button btn btn-light">Saber mais</button>
        </div>
    </article>




    {{-- depoimentos  --}}
    <div class="svg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,256L288,32L576,64L864,288L1152,32L1440,0L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
    </div>






    <article class="depoimentos">
        <h1 class="titulo-depoimentos"><strong>Depoimentos</strong></h1>
        <h3 class="titulo-depoimentos">Veja como nossos serviços revolucionaram a jornada de aprendizado de inglês
            dos nossos alunos!</h3>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="card-depoimentos active">
                <h5 class="card-subtitle mb-2 text-white">“ Quero expressar minha profunda gratidão à plataforma
                    Clever XM por mudar completamente minha abordagem ao aprendizado de inglês. Seus métodos de
                    ensino dinâmicos e ferramentas interativas fizeram o processo de aprendizado se tornar não
                    apenas eficaz, mas também incrivelmente envolvente. Com a Clever XM, minha confiança na
                    comunicação em inglês cresceu exponencialmente, resultando em melhorias notáveis em minhas
                    habilidades linguísticas. Recomendo entusiasticamente esta plataforma para qualquer pessoa que
                    deseje dominar o inglês de maneira eficaz e prática. À equipe por trás da Clever XM, meu sincero
                    agradecimento por proporcionar uma experiência de aprendizado tão transformadora. “
                </h5>
                <div class="user-profile">
                    <img class="user-avatar" src="{{ asset('arquivos/user/user.jpg') }}" alt="Luiz Felipe">
                    <div class="user-name">Luiz Felipe<br>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            {{-- depoimento 2 --}}
            <div class="card-depoimentos">
                <h5 class="card-subtitle mb-2 text-white">“ Agradeço imensamente à plataforma Clever XM por
                    transformar minha perspectiva sobre aprender inglês. Suas aulas dinâmicas e recursos interativos
                    tornaram o processo de aprendizado envolvente e divertido. Graças à Clever XM, minha confiança
                    na comunicação em inglês cresceu significativamente, refletindo em melhorias notáveis. Recomendo
                    fortemente esta plataforma para quem busca dominar o inglês de maneira eficaz. À equipe da
                    Clever XM, meu sincero agradecimento por tornarem possível essa jornada de aprendizado tão
                    gratificante. “
                </h5>
                <div class="user-profile">
                    <img class="user-avatar" src="{{ asset('arquivos/user/user5.jpeg') }}" alt="Luiz Felipe">
                    <div class="user-name">Gabriel de Souza Silva<br>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            {{-- depoimento 3 --}}
            <div class="card-depoimentos">
                <h5 class="card-subtitle mb-2 text-white">“ Quero expressar minha sincera gratidão ao professor
                    Leonardo Albuquerque, da Clever XM, por sua incrível dedicação e talento no ensino de inglês.
                    Sua paixão pelo idioma e sua habilidade em transmitir conhecimento de forma clara e envolvente
                    são verdadeiramente inspiradoras. Graças à orientação e ao apoio personalizado do professor
                    Leonardo, consegui avançar significativamente em meu aprendizado em um curto período de tempo.
                    Sua abordagem atenciosa e encorajadora fez com que cada aula fosse uma experiência motivadora.
                    Estou verdadeiramente impressionado com seu profissionalismo e comprometimento com o sucesso de
                    seus alunos. Recomendo entusiasticamente o professor Leonardo e a Clever XM a todos que desejam
                    aprender inglês com um mestre excepcional. Muito obrigado, professor Leonardo, por sua dedicação
                    inabalável e por tornar o aprendizado uma jornada emocionante e gratificante. “
                </h5>
                <div class="user-profile">
                    <img class="user-avatar" src="{{ asset('arquivos/user/user3.jpeg') }}" alt="Luiz Felipe">
                    <div class="user-name">Francisco Conrado<br>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            {{-- depoimento 4 --}}
            <div class="card-depoimentos">
                <h5 class="card-subtitle mb-2 text-white">“ Gostaria de expressar minha profunda gratidão à Clever
                    XM pelo curso de inglês excepcional que oferecem. O que mais me impressionou foi a qualidade do
                    ensino e o comprometimento dos professores. Graças à dedicação e habilidades excepcionais dos
                    professores da Clever XM, consegui aprender rapidamente conceitos complexos que antes pareciam
                    inatingíveis. Sua capacidade de simplificar e tornar acessível o aprendizado é verdadeiramente
                    notável. Estou verdadeiramente impressionado e grato pelo progresso que alcancei em um curto
                    período de tempo. Recomendo entusiasticamente a Clever XM a todos que buscam uma experiência de
                    aprendizado excepcional e resultados tangíveis. Obrigado, Clever XM, por proporcionar uma
                    educação de alta qualidade e por investir no sucesso de seus alunos! “
                </h5>
                <div class="user-profile">
                    <img class="user-avatar" src="{{ asset('arquivos/user/user4.jpeg') }}" alt="Luiz Felipe">
                    <div class="user-name">Ricardo Teixeira<br>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="button-container">
                <button id="prevBtn" class="start-button">Próximo</button>
                <button id="nextBtn" class="start-button">Anterior</button>
            </div>
        </div>

    </article>

    {{-- explicação  professor  --}}
    <article class="professor missao" data-anime="right">
        <div class="professor-head text-center">
            <h1 class="titulo-professor"><strong>Instrutor</strong></h1>
            <h3 class="subtitulo-professor">Conheça nosso dedicado e experiente instrutor da CXM.</h3>
        </div>

        <div class="row prf">
            <div class="col-md-6 text-center">
                <figure class="imagem3">
                    <img class="imagem3" src="{{ asset('arquivos/professor/leonardo.jpeg') }}" alt="cxm">
                </figure>
            </div>
            <div class="col-md-6 text-center">
                <div class="mb-4 card-professor">
                    <p class="card-subtitle text-white apresentacao">“Olá a todos, sou Leonardo Albuquerque, professor de inglês na plataforma CXM. Com uma vasta experiência no ensino de inglês como segunda língua, estou comprometido em proporcionar uma experiência de aprendizado dinâmica e personalizada para cada aluno. Na plataforma CXM, estou disponível para oferecer suporte, feedback e orientação em todas as etapas do seu caminho de aprendizado. Estou ansioso para compartilhar meus conhecimentos, explorar novas habilidades linguísticas e, juntos, alcançarmos sucesso no mundo do inglês. Sejam bem-vindos à nossa comunidade de aprendizado!
                    </p>
                </div>
            </div>
        </div>
    </article>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#222629" fill-opacity="1" d="M0,128L480,192L960,224L1440,224L1440,0L960,0L480,0L0,0Z"></path></svg>
    @include('Elements.emails.newsletter')
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img class="section-logo-footer" src="{{ asset('arquivos/logos/logo3.png') }}"  alt="clever">
                </div>
                <div class="col-md-3">
                    <h5>Links Úteis</h5>
                    <ul class="list-unstyled redes">
                        <li><a class="links-uteis" href="#">Página Inicial</a></li>
                        <li><a class="links-uteis" href="#">Sobre Nós</a></li>
                        <li><a class="links-uteis" href="#">Serviços</a></li>
                        <li><a class="links-uteis" href="#">Contato</a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h5>Redes Sociais</h5>
                    <ul class="list-unstyled redes">
                        <li><a class="links-uteis" href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a class="links-uteis" href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a class="links-uteis" href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a class="links-uteis" href="#"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="text-center">&copy; 2024. Todos os direitos reservados.</p>
        </div>
    </footer>

</main>
</body>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/arearestrita.js') }}"></script>
<script src="{{ asset('administrativo/js/sweetalert2.all.js') }}"></script>

{{-- cdn necessário para o dropdown menu mobile --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

</html>
