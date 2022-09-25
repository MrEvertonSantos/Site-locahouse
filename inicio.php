<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./iniciocss.css">
    <title>LocaHouse</title>
   
</head>

<body>
    <header>
        <div class="content">
            <nav>
                <p class="brand">Loca<strong>House</strong></p>
                <ul>
                    <li><a href="#catalog">Catálogo</a></li>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#features">Satisfação</a></li>
                    
                        <a href="./home.php">
                            <button>Login</button>
                        </a>
                    
                </ul>
            </nav>
            <div class="header-block">
                <div class="text">
                    <h2>Locação das melhores casas</h2>
                    <p>Você está no melhor site de locação de imoveis da região, com otimas avaliações entre o publico.
                        Com diversas casa para você e sua familia, com o melhor conforto e seguraça. Otimos preço,
                        pagando pouco e vivendo em alto padrão.
                    </p>
                </div>
                <img src="./casa-header.png" alt="casa">
            </div>
        </div>
    </header>
    <section class="catalog" id="catalog">
        <div class="content">
            <div class="tittle-wrapper-catalog">
                <p>Melhores casas</p>
                <h3>Catálogo</h3>
            </div>
            <div class="filter-card">
                <input type="text" class="search-input" placeholder="Procure sua melhor opção.">
                <button class="search-button">Buscar</button>
            </div>
            <div class="card-wrapper">
                <div class="card-item">
                    <img src="./casaluxo1.jpg" alt="casa1">
                    <div class="card-content">
                        <h3>Casa Bairro Aphaville.</h3>
                        <p>Imovel com 4 quartos, com 3 suites, área de lazer e gourmet com churrasqueira</p>
                        <a href="./agendarvisita.php">
                            
                        <button type="button"> Agendar visita</button>
                        </a>
                    </div>
                </div>
                <div class="card-item">
                    <img src="./casaluxo2.jpg" alt="casa1">
                    <br>
                    <div class="card-content">
                        <h3>Sobrado Sitio Cercado</h3>
                        <p>Imovel com 3 quarto com 1 suite com hidromassagem, churrasqueira, fino acabamento.</p>
                        <a href="./agendarvisita.php">
                        <button type="button">Agendar visita</button>
                        </a>
                    </div>
                </div>
                <div class="card-item">
                    <img src="./casaluxo3.jpg" alt="casa1">
                    <div class="card-content">
                        <h3>Casa Fazendinha</h3>
                        <p>Casa com 2 quartos, 1 banheiro, garagem para 2 carros. Facil acesso as vias do centro.</p>
                        <a href="./agendarvisita.php">
                        <button type="button">Agendar visita</button>
                    </a>
                    </div>
                </div>
                <div class="card-item">
                    <img src="./casaluxo4.jpg" alt="casa1">
                    <div class="card-content">
                        <h3>Apartamento Portao</h3>
                        <p>Casa com 3 quartos, 2 banheiro, garagem para 1 carros. Facil acesso as vias do centro e Pinheirinho.</p>
                        <a href="./agendarvisita.php">
                        <button type="button">Agendar visita</button>
                        </a>
                    </div>
                </div>
                <div class="card-item">
                    <img src="./casaluxo5.jpg" alt="casa1">
                    <div class="card-content">
                        <h3>Kitnet Centro</h3>
                        <p>Cozinha americana, 1 quarto,1 banheiro</p>
                        <a href="./agendarvisita.php">
                        <button type="button">Agendar visita</button>
                        </a>
                    </div>
                </div>
                <div class="card-item">
                    <img src="./casaluxo6.jpg" alt="casa1">
                    <div class="card-content">
                        <h3>Triplex Fazenda Rio Grande</h3>
                        <p>Proximo a br116, com 5 quartos, 3 banheiros, condominio fechado, area gourmet com churrasqueira e piscina</p>
                        <a href="./agendarvisita.php">
                        <button type="button">Agendar visita</button>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="about" id="about">
        <div class="content">
            <div class="title-wrapper-about">
                <p>Conheça nós</p>
                <h3>Sobre</h3>
            </div>
            <div class="about-content">
                <div class="left">
                    <img src="about.png" alt="About">
                </div>
                <div class="right">
                    <h3>Praticidade pra você</h3>

                    <p>
                        Somos uma empresa de aluguel de imoveis, fundada em 2022, com objetivo de alugar seu imovel
                        ou para aqueles que busca alugar, com melhores custo da cidade, sem fiador, com pequenas taxa
                        com imoveis reformados, de forma segura e pratica. Somos uma empresa reconhecida por varios cliente 
                        por responsabilidade, com nosso compromisso que é você.
                    </p>

                </div>
            </div>
        </div>
        </div>

    </section>

    <section class="features" id="features">
        <div class="content">
            <div class="tittle-wrapper-features">
                <p>Depoimento de alguns clientes</p>
                <h3>Satisfação</h3>
            </div>
            <div class="feature-card-block">
                <div class="features-card-item">
                    <img src="feature-planet.png" alt="Features">
                    <div class="features-text-content">
                        <h3>José</h3>
                        <p>Melhor site para quem busca imoveis na regiao de Curitiba. Nota 10 pelo excelente atendimento.
                        </p>
                    </div>
                </div>
                <div class="features-card-item">
                    <img src="feature-planet.png" alt="Features">
                    <div class="features-text-content">
                        <h3>Mario</h3>
                        <p>Tudo o que procurava para minha familia e eu, achei aqui, muito obrigado!!!
                        </p>
                    </div>
                </div>
                <div class="features-card-item">
                    <img src="feature-planet.png" alt="Features">
                    <div class="features-text-content">
                        <h3>Lorena</h3>
                        <p>Muito facil para alugar um imovel, sem burocracia e com otimos precos em todas regioes.
                        </p>
                    </div>
                </div>
                <div class="features-card-item">
                    <img src="feature-planet.png" alt="Features">
                    <div class="features-text-content">
                        <h3>Maria</h3>
                        <p>Achei um imovel proximo de varios pontos comercial, facil acesso a varios locais com pouco transito.
                        </p>
                    </div>
                </div>
                <div class="features-card-item">
                    <img src="feature-planet.png" alt="Features">
                    <div class="features-text-content">
                        <h3>Autor desconhecido</h3>
                        <p>Ótimos imoveis.
                        </p>
                    </div>
                </div>
                <div class="features-card-item">
                    <img src="feature-planet.png" alt="Features">
                    <div class="features-text-content">
                        <h3>Ricardo</h3>
                        <p>Proximo a escola do meu filho e ao lado do meu trabalho, melhor que isso não tem. Completamente feliz.
                        </p>
                    </div>
                </div>


            </div>
        </div>


    </section>
    <footer>
        <div class="main">
            <div class="content footer-links">
                <div class="footer-company">
                    

                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.030668302085!2d-49.27216138255614!3d-25.43723819999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce46e42606e85%3A0x5945e9f0e0efae46!2sTv.%20Frei%20Caneca%2C%2055%20-%20Centro%2C%20Curitiba%20-%20PR%2C%2080010-090!5e0!3m2!1sen!2sbr!4v1664051151048!5m2!1sen!2sbr" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                </div>
                
                <div class="footer-social">
                    <h4>Redes sociais:</h4>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/">
                        <img src="instagram.png" alt="Instagram" width="28" height="28"></a>
                        <a href="https://www.facebook.com/">
                        <img src="facebook.png" alt="Facebook"  width="28" height="28"></a>
                    </div>
                </div>
                <div class="footer-contact">
                    <h4>Contatos:</h4>
                    <h6>+55 41 12345-6789</h6>
                    <h6>locahouse@locahouse.com</h6>
                    <h6>Rua: Joao Ninguem, 0000, Curitiba - Pr</h6>
                </div>
            </div>
        </div>

        <div class="last">
            LocaHouse - By Everton S.

        </div>
    </footer>
</body>

</html>