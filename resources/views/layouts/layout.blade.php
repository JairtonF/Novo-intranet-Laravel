<!DOCTYPE html>

<html>

<head>
    <!-- Via Blade um nome ao título deverá ser definido -->
    <title>Intranet | @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Folhas de estilo -->
    <link rel="stylesheet" href="{{ asset('assets/css/estilos.css') }}">
    @yield('header-stylesheet')
    <link rel="stylesheet" href="{{ asset('assets/css/estilos-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/estilos-noticias.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/estilos-links-rapidos.css') }}">

    <!-- Scripts javascript -->
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="{{ asset('assets/js/trocarPlanoDeFundo.js') }}"></script>
    <script src="{{ asset('assets/js/BarraDePesquisa.js') }}"></script>
    <script src="{{ asset('assets/js/modal-noticias.js') }}"></script>
    
    @yield('header-scripts')

</head>

<body>
    
    <div class="grid-container">
        <header id="header">
        <!--Menu superior-->
            <nav>
                <img class="logo" src="{{ asset('assets/img/intranet_horizontal_branco.png') }}" alt="logo">

                <ul class="menu-superior" id="menu-superior">
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Direção</button> 
                        
                            <div class="dropdown-content">
                                <div class="linha">
                                    <div class="coluna">
                                        <h3>Gabinete</h3>
                                        <a href="https://ouvidoria.maracanau.ifce.edu.br/" target="_blank">Ouvidoria</a>
                                        <a href="https://ifce.edu.br/maracanau/menu/o-campus" target="_blank">O Campus</a>
                                        <a href="https://sei.ifce.edu.br/sip/login.php?sigla_orgao_sistema=IFCE&sigla_sistema=SEI" target="_blank">SEI</a>
                                    </div>
                                    <div class="coluna">
                                        <h3>Comunicação Social</h3>
                                        <a href="http://avisos.maracanau.ifce.edu.br/" target="_blank">Avisos</a>
                                        <a href="https://ifce.edu.br/maracanau/colecoes/eventos" target="_blank">Eventos</a>
                                        <a href="https://ifce.edu.br/maracanau" target="_blank">Site do Campus</a>
                                    </div>
                                    <div class="coluna">
                                        <h3>Gestão de Pessoas</h3>
                                        <a href="https://frequencia.maracanau.ifce.edu.br/login" target="_blank">Frequência</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Ensino</button>

                            <div class="dropdown-content">
                                <div class="linha">
                                    <div class="coluna">
                                        <h3>Diren</h3>
                                        <a href="https://ifce.edu.br/maracanau/menu/calendario-letivo" target="_blank">Calendário Acadêmico</a>
                                    </div>
                                    <div class="coluna">
                                        <h3>Serviço Social</h3>
                                        <a href="https://sisae.ifce.edu.br/" target="_blank">SISAE</a>
                                    </div>
                                    <div class="coluna">
                                        <h3>CCA</h3>
                                        <a href="https://qacademico.ifce.edu.br/" target="_blank">QAcadêmico</a>
                                        <a href="https://ifce.edu.br/espaco-estudante/regulamento-de-ordem-didatica" target="_blank">ROD</a>
                                    </div>
                                    <div class="coluna">
                                        <h3>biblioteca</h3>
                                        <a href="http://biblioteca.ifce.edu.br/" target="_blank">Sophia</a>
                                    </div>
                                    <div class="coluna">
                                        <h3>Estágio</h3>
                                        <a href="https://ifce.edu.br/maracanau/menu/aviso-estagios" target="_blank">Estágios</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Pesquisa e Extensão</button>

                            <div class="dropdown-content">
                                <div class="linha">
                                    <div class="coluna">
                                        <h3>DEPPI</h3>
                                        <a href="https://ifce.edu.br/maracanau/menu/deppi" target="_blank">Página do DEPPI</a>
                                        <a href="http://deppi.maracanau.ifce.edu.br/" target="_blank">Site do DEPPI</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Administração</button>

                            <div class="dropdown-content">
                                <div class="linha">
                                    <div class="coluna">
                                        <h3>Infraestrura</h3>
                                        <a href="https://suporte.maracanau.ifce.edu.br/" target="_blank">Suporte</a>
                                    </div>
                                    <div class="coluna">
                                        <h3>Patrimônio</h3>
                                        <a href="https://suap.ifce.edu.br/accounts/login/?next=/" target="_blank">SUAP</a>
                                    </div>
                                    <div class="coluna">
                                        <h3>Informática</h3>
                                        <a href="https://suporte.maracanau.ifce.edu.br/" target="_blank">Suporte</a>
                                        <a href="https://docsti.maracanau.ifce.edu.br/" target="_blank">Manuais</a>
                                        <a href=https://informatica.maracanau.ifce.edu.br/" target="_blank">Sobre Nós</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                        
                    <li>
                        <!--Barra de pesquisa-->
                        <!--Adicionado action e method e trocado div pelo form-->
                        <form action="{{route ('pages.pesquisa')}}" method="POST" class="search-box">

                            <!--Adicionado name "search-txt"-->
                            <input class="search-txt" id="search-txt" name="search-txt" type="text" onkeyup="searchFunction()" placeholder="Pesquisar..."  onfocus="this.value=''">
                            
                            <a class="search-button" href="#">
                                <i class="fas fa-search"></i>
                            </a>

                        </form>
                        <!--Fim da barra de pesquisa-->
                    </li>
                </ul>
                <!--Menu responsivo-->
                <div class="burguer">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <!--Fim do menu responsivo-->
            </nav>
        <!-- fim do Menu superior-->
            @yield("inferior-menu")

        </header>

        @yield("content")

        <footer>
            <div class="footer-rodape1">
                <div class="footer-links-redes-campus">

                    <ul>

                        <li>
                            <figure class="foto-footer-links-redes-campus img">
                                <img src="{{ asset('assets/img/intranet-logo.jpg') }}" alt="logo">
                            </figure>

                        </li>

                        <li>
                            <figure class="foto-footer-links-redes-campus">
                                <a href="https://sei.ifce.edu.br/sei/modulos/pesquisa/md_pesq_processo_pesquisar.php?acao_externa=protocolo_pesquisar&acao_origem_externa=protocolo_pesquisar&id_orgao_acesso_externo=0" target="_blank">
                                <img src="{{ asset('assets/img/sei-logo.png') }}"></a>
                            </figure>
                        </li>

                        <li>
                            <figure class="foto-footer-links-redes-campus">
                                <a href="https://suap.ifce.edu.br/" target="_blank">
                                    <img src="{{ asset('assets/img/suap-logo.png') }}"></a>
                            </figure>
                        </li>

                        <li>
                            <figure class="foto-footer-links-redes-campus">
                                <a href="https://accounts.google.com/" target="_blank">
                                <img src="{{ asset('assets/img/email-logo.png') }}"></a>
                            </figure>
                        </li>

                    </ul>
                </div>
                <hr style="height:2px;border-width:0;color:#019934;background-color:#019934; width: 90%">

                <div class="instituto">
                    <p style="text-align: center;"><b>Instituto Federal de Educação, Ciencia e Tecnologia do Ceará</b></p>
                </div>

                <div class="footer-informacoes" id="footer-informacoes">

                        <p class="endereco"> <b>Endereço</b> <br><br>

                            Avenida Parque Central, S/N Distrito Industrial I,<br>
                            CEP: 61.939-140 - Maracanaú - Ceará <br>
                        </p>

                        <p class="contato"><b>Contato</b> <br><br>
                            Horário de atendimento: 7h às 18h <br>
                            Maiores informações: (85) 3878-6301 <br>
                        </p>
                    
                    <div class="links-redes-sociais" id="links-redes-sociais">

                        <ul>
                            <li>
                                <a href="https://twitter.com/ifcemaracanau" class="footer-icon-redes-sociais" target="_blank"> 
                                    <i class="fab fa-twitter fa-lg"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UC-4gM_TJa2cFifwF9rAaJvw" class="footer-icon-redes-sociais" target="_blank"> 
                                    <i class="fab fa-youtube fa-lg"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/ifcemaracanau/" class="footer-icon-redes-sociais" target="_blank"> 
                                    <i class="fab fa-facebook fa-lg"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/explore/locations/503640290/ifce-campus-maracanau/" class="footer-icon-redes-sociais" target="_blank">
                                    <i class="fab fa-instagram fa-lg"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
            <div class="footer-rodape2">
                <p style="text-align: center;">
                    Núcleo de Desenvolvimento de Softwares - NDS<br>
                    Coordenadoria de Tecnologia da Informação - CTI<br>

                    IFCE Campus Maracanaú - 2019
                    </p>
                </div>
        </footer>    
    </div>
    
    <script src="{{ asset('assets/js/animacao-burguer.js') }}"></script>
    @yield('footer-scripts')

</body>

</html>
