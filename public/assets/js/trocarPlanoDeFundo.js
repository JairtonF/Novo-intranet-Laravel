var imgs=[];
var imagemAtual;
var maxImg;
var slider;
var tempo;
var tempoTroca;

function preCarregamento(){
    var indice = 1

    for(var cont=0; cont<4; cont++){
        imgs[cont] = new Image();
        imgs[cont].src="assets/img/imagem_ifce_"+indice+".jpg";
        indice++;
    }
}

function carregarImagem(img){
    slider.style.backgroundImage="url('"+imgs[img].src+"')"

}

function inicia(){
    preCarregamento();
    imagemAtual=0;
    maxImg = imgs.length-1;
    slider=document.getElementById("header");
    carregarImagem(imagemAtual);
    tempoTroca=4000;
    tempo=setInterval(trocaImagem,tempoTroca);
}

function trocaImagem(){
    imagemAtual++;
    if(imagemAtual>maxImg){
        imagemAtual=0;
    }
    carregarImagem(imagemAtual)
}

window.addEventListener("load",inicia);;