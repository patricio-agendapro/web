


var flag_lazyscript = 0;
function lazyscript(){
    if(flag_lazyscript == 0){
        let script = document.createElement('script');
        script.src = "/assets/js/lazyscripts.js";
        document.body.append(script);
        flag_lazyscript = 1;
    }
}

setTimeout(
function() {
    document.addEventListener('touchstart', lazyscript);
    document.addEventListener('scroll', lazyscript);
    document.addEventListener('keydown', lazyscript);
}, 1000);