window.onload = function(){
    const img = document.getElementById("img");
    const media = window.matchMedia('(max-width: 857px)');

    window.addEventListener('scroll', scrollEffect);

    function scrollEffect(){
        if(media.matches){
            img.style.opacity=1;
        }
        else{
            let value = 1 - window.scrollY/400;
            img.style.opacity = value;
        }
    }
    scrollEffect();
}