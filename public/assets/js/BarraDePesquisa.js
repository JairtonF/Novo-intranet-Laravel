function searchFunction(){
    var input, filter, ul, li, a, i, txtValue;

    var body = document.getElementsByClassName("grid-container");

    input = document.getElementById("search-txt");

    filter = input.value.toUpperCase();

    ul = document.getElementById("links-rapidos");

    li = ul.getElementsByTagName("li");

    for (i = 0; i < li.length; i++){
        a = li[i].getElementsByTagName("a")[0];

        txtValue = a.textContent || a.innerText;

        if(txtValue.toUpperCase().indexOf(filter) > -1){
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
    //Irá limpar a secção de pesquisa quando clicado em qualquer lugar outro que não  abarra de pesquisa
    body.addEventLIstener("click", function(){
        input.reset();
    }, false);

    input.addEventListener("click", function(ev) {
        ev.stopPropagation();
    },false);
}