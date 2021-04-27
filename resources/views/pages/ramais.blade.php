@extends("layouts.layout")

@section('header-stylesheet')

    <link rel="stylesheet" href="{{ asset('assets/css/ramais/estilos-ramais.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
@endsection

@section('header-scripts')
   
@endsection

@section('content')

    <div class="ui container" id="containerSlide"></div>


    <div class="ui container" id="containerLinksAndNoticies">
        <div class="heade_container_table">
            <div class="ramais_e_voltar">
                <p class="title_ramais">Ramais</p>
                <a href="/" class="voltar">Voltar</a>
            </div>

            <div class="divisor_table"></div>

            <p class="subtitle_ramais">Utilize o sistema de filtros para obter as informações desejadas dos ramais</p>

            <p class="subtitle_filtros">Filtros</p>

            <div class="divisor_filtros"></div>

            <form action="/ramais" method="POST">
                {{ csrf_field() }}

                <div class="search_table">
                    @if(isset($user_search))
                        <div>
                            <p class="label_filtro">Tipo do filtro</p>
                            <select class="ui dropdown" name="opcao" disabled="true">
                                <option value="">Filtro em uso</option>
                            </select>
                        </div>

                        <div>
                            <p class="label_filtro">Descrição do filtro</p>
                            <div class="ui icon input search_table_filtro">
                                <input type="text" name="busca" placeholder="Filtro em uso" disabled="true">
                            </div>
                        </div>

                        <button type="submite" class="ui primary button bottom" disabled="true">
                            <i class="search icon lupa"></i>
                        </button>

                        <a href="/ramais" class="negative ui button bottom">
                            <i class="x icon"></i>
                        </a>
                    @else
                        <div>
                            <p class="label_filtro">Tipo do filtro</p>
                            <select class="ui dropdown" name="opcao">
                                <option value="">Setor</option>
                            </select>
                        </div>

                        <div>
                            <p class="label_filtro">Descrição do filtro</p>
                            <div class="ui icon input search_table_filtro">
                                <input type="text" name="busca" placeholder="Descrição do filtro">
                            </div>
                        </div>

                        <button type="submite" class="ui primary button bottom">
                            <i class="search icon lupa"></i>
                        </button>

                        <a href="/ramais" class="negative ui button bottom">
                            <i class="x icon"></i>
                        </a>
                    @endif
                </div>
            </form>
        </div>

        <br>

        <table class="ui celled large table table_ramais">
            <thead>
              <tr>
                <th class="title_table">Setor</th>
                <th class="title_table">Ramal</th>
                <th class="title_table">Responsável</th>
                <th class="title_table">Nome</th>
                <th class="title_table">E-mail</th>
              </tr>
            </thead>
        
            <tbody>
                @foreach($response as $setor)
                    <tr>
                        <td class="dados_table">{{ $setor->nome }}</td>
                        <td class="dados_table">Indisponível</td>
                        <td class="dados_table">{{ $setor->email }}</td>
                        <td class="dados_table">{{ $setor->nome_responsavel }}</td>
                        <td class="dados_table">{{ $setor->email_responsavel }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('footer-scripts')
    <script src="{{ asset('assets/js/tabs.js') }}"></script>
@endsection