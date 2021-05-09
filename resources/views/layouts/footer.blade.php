
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

                            <img src="{{ asset('assets/img/suap-logo.png') }}">
                        
                        </a>

                    </figure>

                </li>

                <li>
                
                    <figure class="foto-footer-links-redes-campus">
                
                        <a href="https://accounts.google.com/" target="_blank">
                
                            <img src="{{ asset('assets/img/email-logo.png') }}">
                    
                        </a>
                
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

@yield('footer')