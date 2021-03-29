function mostrarRegistro(id){
    $.post("home.blade.php", { 'intranet-noticia-modal':id},
        function (resposta) {
            // Subistitui o conteúdo da div com id="intranet-noticia-modal"
            $("#intranet-noticia-modal").html(resposta);
            // Mostra o modal usando jquery
            $('#noticia-modal').modal('show');
        }
    );
  }