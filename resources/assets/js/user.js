function loadlazyimglate(){
    const items = document.querySelectorAll('.lazyimglate');
    for (const item of items) {
        item.classList.add('lazyload');
    }
}

var flag_lazyscript = 0;
function lazyscript(){
    if(flag_lazyscript == 0){
        let script = document.createElement('script');
        script.src = "/assets/js/lazyscripts.js";
        document.body.append(script);
        flag_lazyscript = 1;

        loadlazyimglate();
    }
}

setTimeout(
    function() {
        document.addEventListener('touchstart', lazyscript);
        document.addEventListener('scroll', lazyscript);
        document.addEventListener('keydown', lazyscript);
        document.addEventListener('mousemove', lazyscript);
    }, 1000);

if(screen.width >= 992){
    loadlazyimglate();
}