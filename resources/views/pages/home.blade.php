@extends("layouts.layout")

@section('title')
    Bem Vindo
@endsection

@section('header-stylesheet')

@endsection

@section('header-scripts')
    
@endsection

@section('inferior-menu')
    <!--Menu inferior-->
    <div class="menu-inferior" id="menu-inferior">

        <ul>

            <li data-tab-target="#links-gerais">

                <a>

                    <div class="icon-float">

                        <i class="fas fa-info-circle fa-2x"></i>

                    </div>

                    <div class="link-tab">

                        <h4>Links Gerais</h4>

                    </div>

                </a>

            </li>
            
            <span class="vertical-line-menu-inferior"></span>

            <li data-tab-target="#links-servidores">   

                <a>

                    <div class="icon-float">

                        <i class="fas fa-user-tie fa-2x"></i>

                    </div>

                    <div class="link-tab">

                        <h4>Links para Servidores</h4>

                    </div>

                </a>

            </li>

            <span class="vertical-line-menu-inferior"></span>
            
            <li data-tab-target="#links-alunos">

                <a>

                    <div class="icon-float">

                        <i class="fa fa-graduation-cap fa-2x"></i>

                    </div>

                    <div class="link-tab">

                        <h4>Links para Alunos</h4>

                    </div>

                </a>

            </li>

        </ul>

    </div>

    <!--Fim do menu inferior--> 
@endsection

@section('content')

    <div class="links-rapidos" id="links-rapidos">

        <div class="active" id="links-gerais" data-tab-content>   

            <ul class="cbp-ig-grid">

                <!--Usar listas, responsive icon-grid-->

                    <li>

                        <a href="https://ifce.edu.br/maracanau/menu/o-campus" target="_blank">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_campus_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">
                                
                                O Campus

                            </h3>

                        </a>

                    </li>
                    
                    <li>

                        <a href="http://ouvidoria.maracanau.ifce.edu.br/" target="_blank">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_ouvidoria_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Ouvidoria</h3>

                        </a> 

                    </li>
                    
                    <li>

                        <a href="http://infra.maracanau.ifce.edu.br/" target="_blank">

                            <span class="cbp-ig-icon cbp-ig-icon-milk"> 

                                <img src="{{ asset('assets/img/novo_infra_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Suporte e Infraestrura </h3>

                        </a> 

                    </li>
                    
                    <li>

                        <a href="http://suporte.maracanau.ifce.edu.br/" target="_blank">

                            <span class="cbp-ig-icon cbp-ig-icon-whippy">

                                <img src="{{ asset('assets/img/novo_infor_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Suporte</h3>

                        </a> 

                    </li>
                    
                    <li>

                        <a href="https://ifce.edu.br/maracanau/menu/como-chegar" target="_blank">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_jardineira.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Jardineira</h3>

                        </a> 

                    </li>

                    <li>

                        <a href="https://intranet.maracanau.ifce.edu.br/sysra/restaurante" target="_blank">
                            
                            <span class="cbp-ig-icon">
                                
                                <img src="{{ asset('assets/img/novo_restaurante_verde.svg') }}">
                            
                            </span>
                            
                            <h3 class="cbp-ig-title">Restaurante</h3>
                        
                        </a> 
                    
                    </li>

                    <li>

                        <a href="https://ifce.edu.br/maracanau/colecoes/eventos" target="_blank">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_eventos_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Eventos</h3>

                        </a> 

                    </li>
                    
                    <li> 

                        <a href="https://ifce.edu.br/maracanau/menu/aviso-estagios" target="_blank">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_estagio_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Estágios</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_avisos_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Avisos</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_auxilios_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Perguntas Frequentes</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="/ramais">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_telefone_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Ramais</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_calendario_letivo.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Calendário</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_form_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Política de segurança</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_espacos_verde.svg') }}">
                                
                            </span>

                            <h3 class="cbp-ig-title">Organograma</h3>

                        </a> 

                    </li>

            </ul>

        </div>

        <div id="links-servidores" data-tab-content>

            <ul class="cbp-ig-grid">

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_ouvidoria_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Central de Atendimentos da TI</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_telefone_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Solicitação Comunicação Social</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_jardineira.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Requisição de Viagens</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_infra_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Status de Serviço</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_infor_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Wifi ifce-servidores</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_estagio_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">E-mail institucional</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_campus_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Quadro de Servidores</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_calendario_letivo.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Aniversariantes do Mês</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_eventos_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Férias dos Servidores</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_auxilios_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">PDI</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">
                                
                                <img src="{{ asset('assets/img/novo_auxilios_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">PDTI</h3>
                            
                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_form_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Contratos</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_avisos_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Portarias Fiscais</h3>

                        </a> 

                    </li>

                    <li> 

                        <a href="#">

                            <span class="cbp-ig-icon">

                                <img src="{{ asset('assets/img/novo_espacos_verde.svg') }}">

                            </span>

                            <h3 class="cbp-ig-title">Fluxo de Solicitações</h3>

                        </a> 

                    </li>

            </ul>

        </div>
        
        <div id="links-alunos" data-tab-content>

            <ul class="cbp-ig-grid">

                <li> 

                    <a href="https://ifce.edu.br/maracanau/menu/aviso-estagios" target="_blank">

                        <span class="cbp-ig-icon">

                            <img src="{{ asset('assets/img/novo_campus_verde.svg') }}">

                        </span>

                        <h3 class="cbp-ig-title">Estágios</h3>

                    </a> 

                </li>

                <li> 

                    <a href="https://sisae.ifce.edu.br/" target="_blank">

                        <span class="cbp-ig-icon">

                            <img src="{{ asset('assets/img/novo_auxilios_verde.svg') }}">

                        </span>

                        <h3 class="cbp-ig-title">Auxílios Estudantis</h3>

                    </a> 

                </li>

                <li> 

                    <a href="#">
                        
                        <span class="cbp-ig-icon">

                            <img src="{{ asset('assets/img/novo_form_verde.svg') }}">

                        </span>

                        <h3 class="cbp-ig-title">Requisições</h3>

                    </a> 

                </li>

                <li> 

                    <a href="#">

                        <span class="cbp-ig-icon">

                            <img src="{{ asset('assets/img/novo_estagio_verde.svg') }}">

                        </span>

                        <h3 class="cbp-ig-title">Wifi ifce-alunos</h3>

                    </a> 

                </li>

                <li> 

                    <a href="#">

                        <span class="cbp-ig-icon">

                            <img src="{{ asset('assets/img/novo_infor_verde.svg') }}">

                        </span>

                        <h3 class="cbp-ig-title">E-mail Acadêmico</h3>

                    </a> 

                </li>

                <li> 

                    <a href="#">

                        <span class="cbp-ig-icon">

                            <img src="{{ asset('assets/img/novo_infra_verde.svg') }}">

                        </span>

                        <h3 class="cbp-ig-title">Solicitação de Carteirinha</h3>

                    </a>

                </li>

                <li> 

                    <a href="#">

                        <span class="cbp-ig-icon">

                            <img src="{{ asset('assets/img/novo_telefone_verde.svg') }}">

                        </span>

                        <h3 class="cbp-ig-title">Comunicação com Setores</h3>

                    </a> 

                </li>

            </ul>
            
        </div>
        
    </div>

    <div class="noticias">

        <h2>Notícias</h2>
        
        <hr style="height:2px;border-width:0;color:#006B43;background-color:#006B43; width: 90%">

        <div class="ui itens" id="itensNoticias">

            @foreach( $noticias as $noticia )
            
                <div class="item" id="noticia1">
                    
                    <div class="image">
                    
                        <img class="noticias-imagem" src = "{{ $noticia->imagem }}">
                    
                    </div>
                    
                    <div class="titulo">
                    
                        <b>{{ $noticia->titulo }}</b>
                    
                    </div>

                    <div class="conteudo">
                    
                        {{ $noticia->conteudo }}
                    
                    </div>
                    
                    <div class="tag">
                    
                        <h3>{{ $noticia->tag }}</h3>
                    
                    </div>
                    
                    <div class="descricao">
                    
                        <b>{{ $noticia->descricao }}</b>
                    
                    </div>

                    <div class="botao">
                    
                        <!--<a href="{{ $noticia->link}}" target="_blank" class="button button1"><b>Saiba mais</b></a>-->
                        <button type="button" class="button button1 view_data" data-toggle="modal" data-target="#noticiaModal-{{ $noticia->id }}">Saiba mais</button>
                    
                    </div>

                </div>

            @endforeach

            <!-------------------------------------------------Visualiar Modal ---------------------------------------------->
 
        @foreach( $noticias as $noticia )

        <div class="modal fade" id="noticiaModal-{{ $noticia->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>

                    </div>

                    <div class="modal-body">

                        <div class="image">

                            <img class="noticias-imagem" src = "{{ $noticia->imagem }}">
    
                        </div>
    
                        <div class="titulo">
    
                            <b>{{ $noticia->titulo }}</b>
    
                        </div>

                        <div class="tag">
    
                            <h3>{{ $noticia->tag }}</h3>
    
                        </div>

                        <div class="conteudo">
    
                            {{ $noticia->conteudo }}
    
                        </div>
    
                        <div class="descricao">
    
                            <b>{{ $noticia->descricao }}</b>
    
                        </div>

                    </div>

                </div>

            </div>

        </div>

        @endforeach

<!----------------------------------------------- Fim do Modal-------------------------------------------->

        </div>

    </div>

@endsection

@section('footer-scripts')

    <script src="{{ asset('assets/js/tabs.js') }}"></script>

@endsection



