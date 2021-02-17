const navSlide = () =>{
    const burguer = document.querySelector('.burguer');
    const nav = document.querySelector('.menu-superior');
    const navLinks = document.querySelectorAll('.menu-superior li');

    //animação do fundo
    burguer.addEventListener("click", () => {
        nav.classList.toggle('nav-active');

        //Links animados
        navLinks.forEach(( link, index) => {
            if (link.style.animation){
                link.style.animation = '';
            }
            else{
                link.style.animation = `navLinkFade 0.5s ease forwards ${index/5+0.5}s`;
            }
        });
        //animação do burguer
        burguer.classList.toggle('toggle');
    })

}

navSlide();