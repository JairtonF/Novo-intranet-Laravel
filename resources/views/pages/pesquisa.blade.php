<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('assets/css/estilos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/estilos-links-rapidos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/estilos-noticias.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/estilos-footer.css') }}">
    
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>

</head>

<body>
    

    @extends('layouts.navbar')

    @section('navbar')

    <div class="Resultado-Conteiner">


        <div class="noticias">

            <h2>Resultado</h2>
            
            <hr style="height:2px;border-width:0;color:#006B43;background-color:#006B43; width: 90%">

            <br>

            @if (count($pesquisa) != 0 || count($result) != 0)

                <ul class="cbp-ig-grid">

                    @foreach($pesquisa as $pesquisa)
                    
                        <li>
                
                            <a href="{{ $pesquisa->link }}" target="_blank">
            
                                <span class="cbp-ig-icon">
            
                                    <img src="{{ $pesquisa->caminho_imagem }}">
                                                
                                </span>
                
                                <h3 class="cbp-ig-title">
                                        
                                    <b>{{ $pesquisa->titulo }}</b>
                
                                </h3>
                
                            </a>
                
                        </li>
        
                    @endforeach

                </ul>

                @foreach($result as $result)

                <div class="item" id="noticia1">
                    
                    <div class="image">
                    
                        <img class="noticias-imagem" src = "{{ $result->imagem }}">
                    
                    </div>
                    
                    <div class="titulo">
                    
                        <b>{{ $result->titulo }}</b>
                    
                    </div>

                    <div class="conteudo">
                    
                        {{ $result->conteudo }}
                    
                    </div>
                    
                    <div class="tag">
                    
                        <h3>{{ $result->tag }}</h3>
                    
                    </div>
                    
                    <div class="descricao">
                    
                        <b>{{ $result->descricao }}</b>
                    
                    </div>

                    <div class="botao">
                       
                        <button type="button" class="button button1 view_data" data-toggle="modal" data-target="#noticiaModal-{{ $result->id }}">Saiba mais</button>
                    
                    </div>

                </div>

                @endforeach

            @else
                
                <h2>Desculpe, não foi possível achar resultados compatíveis com a pesquisa</h2>
                
            @endif
                   
        
        </div>



    </div>

    @endsection

    @section('footer')

    @endsection

</body>

</html>