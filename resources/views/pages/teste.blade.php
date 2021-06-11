<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('assets/css/estilos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/estilos-links-rapidos.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/estilos-footer.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/semantic.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>

    

</head>

<body>
    

    @extends('layouts.navbar')

    @section('navbar')

    <table class="ui celled large table table_ramais">
        <thead>
          <tr>
            <th class="title_table">Titulo</th>
            <th class="title_table">Link</th>
            <th class="title_table">Caminho da Imagem</th>
          </tr>
        </thead>
    
        <tbody>
        
        @if (isset($pesquisa ))
            @foreach($pesquisa as $pesquisa)
            
            <tr>
                <td class="dados_table">{{ $pesquisa->titulo }}</td>
                <td class="dados_table">{{ $pesquisa->link }}</td>
                <td class="dados_table">{{ $pesquisa->caminho_imagem }}</td>
            </tr>

            <div class="links-rapidos" id="links-rapidos">
        
                <ul class="cbp-ig-grid">
        
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
                
                </ul>
        
            </div>

            @endforeach
        
        @else
        <tr>
            <td class="dados_table">Indisponivel</td>
            <td class="dados_table">Indisponivel</td>
            <td class="dados_table">Indisponivel</td>
        </tr>
        @endif
           

        <tbody>
        

    </table>

    @endsection

    @section('footer')

    @endsection

</body>

</html>