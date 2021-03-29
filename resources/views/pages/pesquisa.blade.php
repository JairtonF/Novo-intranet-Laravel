@extends("layouts.layout")

@section('title')
    Bem Vindo
@endsection

@section('header-stylesheet')

@endsection

@section('header-scripts')
    
@endsection

@section('content')

    <h2>Pesquisa</h2>
        
    <hr style="height:2px;border-width:0;color:#006B43;background-color:#006B43; width: 90%">

    <div class="Resultado-Conteiner">
        <?php
        
            if (isset($_GET['submit'])) {

                $searchValue = $_GET['search-txt'];

                $con = new mysqli("localhost", "root", "", "intranet");

                if ($con->connect_error) {

                    echo "connection Failed: " . $con->connect_error;
                } else {

                    $sql = "SELECT * FROM noticias WHERE titulo LIKE '%$searchValue%' OR tag LIKE '%$searchValue%'";

                    $result = $con->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    echo $row['titulo'] . "<br>";
                    echo $row['tag'] . "<br>";
                    echo $row['descricao'] . "<br>";
                    echo $row['conteudo'] . "<br>";
                }

      
    }   
}

            ///////////////////////////////////////////////////////////////////////////////////
            /*if(isset($_POST['search-text'])){

                $search =  mysqli_real_escape_string($conn, $_POST['']);

                $sql = "SELECT * FROM noticias WHERE {{ $noticia->titulo }} LIKE '%$search%' OR {{ $noticia->conteudo }} LIKE '%$search%' OR {{ $noticia->tag }} LIKE '%$search%' OR {{ $noticia->descricao }} LIKE '%$search%'"
                
                $result = mysqli_query($conn, $sql);
                
                $queryResult = mysqli_num_rows($result);

                if($queryResult > 0){
                    while($row =mysqli_fetch_assoc($result)){
                        echo "
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
                                <a href="{{ $noticia->link}}" target="_blank" class="button button1"><b>Saiba mais</b></a>
                            </div>
                    

                        </div>";
                    }
                } else {
                    echo "Desculpe, não existe resultados compatíveis, tente novamente";
                }
            }*/
        ?>

    </div>

@endsection

@section('footer-scripts')
    <script src="{{ asset('assets/js/tabs.js') }}"></script>
@endsection