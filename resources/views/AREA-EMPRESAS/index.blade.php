<!-- NAVBAR -->
<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <header
                class="container-fluid flex-wrap align-items-center justify-content-between py-3 mb-4 border-bottom">
                <div class="col-md-3 mb-2 mb-md-0">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/imagens/logo-square.png" alt="Bootstrap" width="50" height="50">
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="{{ route('index') }}" class="nav-link px-2 link-secondary">Início</a></li>
                        <li><a href="#" class="nav-link px-2">Fornecedores</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link px-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Ferramentas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Gerenciador de Orçamento</a></li>
                                <li><a class="dropdown-item" href="calc.html">Calculadora de Festa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link px-2" href="{{ route('areaEmpresas') }}">
                                Área Empresas
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5" />
                                    <path
                                        d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z" />
                                </svg>
                            </a>
                        </li>
                        <li><a href="{{ route('sobre') }}" class="nav-link px-2">Sobre Nós</a></li>
                    </ul>

                    <div class="d-flex ms-auto">
                        <button type="button" class="btn btn-primary me-2">Entre ou cadastre-se</button>
                    </div>
                </div>
            </header>
        </nav>
    </div>

    <!-- BANNER -->
<div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <!-- FORMULÁRIO - LOGIN EMPRESAS -->
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="form p-4 p-md-5 rounded-3">
                <div class="form-floating mb-3">
                    <p class="form-title">ACESSO PARA EMPRESAS</p>

                    <!-- E-MAIL -->
                    <div class="input-container">
                        <div class="form-subtitle"><label for="usuario">Usuário</label></div>
                        <div class="text-center">
                            <input type="email" placeholder="Nome de Usuário" required
                                oninvalid="this.setCustomValidity('Por favor, insira um endereço de e-mail válido.')"
                                oninput="this.setCustomValidity('')">
                        </div>
                    </div>

                    <!-- SENHA -->
                    <div class="input-container">
                        <div class="form-subtitle"><label for="senha">Senha</label></div>
                        <div class="text-center">
                            <input type="password" placeholder="Senha" required
                                oninvalid="this.setCustomValidity('Por favor, insira sua senha.')"
                                oninput="this.setCustomValidity('')">
                        </div>
                    </div>

                    <!-- BOTÃO PARA LOGAR -->
                    <div class="d-grid gap-2 col-12 mx-auto">
                        <button type="submit" class="btn btn-primary botao-empresa">
                            Entrar
                        </button>
                    </div>

                    <p class="signup-link text-center">
                        <a href="">Esqueceu sua senha?</a>
                    </p>
                </div>
            </form>
        </div>
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Faça o seu negócio crescer com a gente!</h1>
            <br>
            <p class="lead">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                </svg> Mais de 76.000 fornecedores já confiam em nós.
            </p>
            <p class="lead">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                </svg> Mais de 76.000 fornecedores já confiam em nós.
            </p>
            <p class="lead">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                </svg> Mais de 76.000 fornecedores já confiam em nós.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-center justify-content-lg-start mb-4 mb-lg-3">
                <a href="cadastro-empresas.html">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Registre-se grátis</button>
                </a>
            </div>
        </div>
    </div>
</div>

    <div class="b-example-divider"></div>

    <!-- BENEFÍCIOS -->
    <div class="container px-4 py-5" id="hanging-icons">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                        class="bi bi-person-heart" viewBox="0 0 16 16">
                        <path
                            d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z" />
                    </svg>
                </div>
                <div>
                    <h3 class="fs-2 text-body-emphasis">Facilidade de Uso</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                        class="bi bi-piggy-bank-fill" viewBox="0 0 16 16">
                        <path
                            d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069q0-.218-.02-.431c.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a1 1 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.74.74 0 0 0-.375.562c-.024.243.082.48.32.654a2 2 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595m7.173 3.876a.6.6 0 0 1-.098.21l-.044-.025c-.146-.09-.157-.175-.152-.223a.24.24 0 0 1 .117-.173c.049-.027.08-.021.113.012a.2.2 0 0 1 .064.199m-8.999-.65a.5.5 0 1 1-.276-.96A7.6 7.6 0 0 1 7.964 3.5c.763 0 1.497.11 2.18.315a.5.5 0 1 1-.287.958A6.6 6.6 0 0 0 7.964 4.5c-.64 0-1.255.09-1.826.254ZM5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0" />
                    </svg>
                </div>
                <div>
                    <h3 class="fs-2 text-body-emphasis">Controle Financeiro</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                        class="bi bi-lock-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                    </svg>
                </div>
                <div>
                    <h3 class="fs-2 text-body-emphasis">Confiabilidade</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- BANNER 02 -->
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-5 py-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                    system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            </div>
            <div class="col-12 col-lg-6 order-2 order-lg-last d-flex justify-content-center justify-content-lg-end">
                <img src="assets/imagens/banner-500.jpg" class="img-fluid" alt="Bootstrap Themes"
                    style="max-width: 100%; height: auto;" loading="lazy">
            </div>
        </div>
    </div>

    <!-- BANNER 03 -->
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-5 py-5">
            <div class="col-12 col-lg-6 order-2 order-lg-1 d-flex justify-content-center justify-content-lg-start">
                <img src="assets/imagens/banner-500.jpg" class="img-fluid" alt="Bootstrap Themes"
                    style="max-width: 100%; height: auto;" loading="lazy">
            </div>
            <div class="col-lg-6 text-center text-lg-start order-1 order-lg-2">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                    system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            </div>
        </div>
    </div>

    <!-- CHAMADA -->
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets/imagens/logo-square.svg" alt="" width="72" height="57">
        <h1 class="display-5 fw-bold text-body-emphasis">Centered hero</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="cadastro-empresas.html">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Registre-se grátis</button>
                </a>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li><a href="index.html" class="nav-link px-2 link-secondary">Início</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Fornecedores</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link px-2 dropdown-toggle text-body-secondary" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Ferramentas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Gerenciador de Orçamento</a></li>
                        <li><a class="dropdown-item" href="calc.html">Calculadora de Festa</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link px-2 text-body-secondary" href="area-empresas.html">
                        Área Empresas
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                            <path
                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5" />
                            <path
                                d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item"><a href="sobre.html" class="nav-link px-2 text-body-secondary">Sobre Nós</a>
                </li>
            </ul>
            <ul style="padding-top: 25px; padding-left: 0px;" class="wrapper">
                <li class="icon facebook">
                    <span class="tooltip">Facebook</span>
                    <svg viewBox="0 0 320 512" height="1.2em" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                        </path>
                    </svg>
                </li>
                <li class="icon whatsapp">
                    <span class="tooltip">WhatsApp</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor"
                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                    </svg>
                </li>
                <li class="icon instagram">
                    <span class="tooltip">Instagram</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" fill="currentColor" class="bi bi-instagram"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                        </path>
                    </svg>
                </li>
            </ul>

            <p class="text-center text-body-secondary">&copy; 2024 Company, Inc</p>
            <div class="text-center">
                <a href="index.html">
                    <img src="assets/imagens/logo-square.png" alt="Logo" width="50" height="50">
                </a>
            </div>
        </footer>
    </div>

    <!-- VOLTAR AO TOPO 
    <a href="#">
        <button class="button-topo scrollTopBtn" id="scrollTopBtn">
            <svg class="svgIcon" viewBox="0 0 384 512">
                <path
                    d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z">
                </path>
            </svg>
        </button>
    </a> -->