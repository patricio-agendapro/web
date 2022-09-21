function injectScript(src,callback){
	var script = document.createElement('script');
        script.src = src;
        script.onload=function(){
            callback();
        }
        document.head.appendChild(script);
}

function loadlazyimglate(){
    const items = document.querySelectorAll('.lazyimglate');
    for (const item of items) {
        item.classList.add('lazyload');
    }
}

var flag_lazyscript = 0;
function lazylazyload(){
    if(flag_lazyscript == 0){
        loadlazyimglate();
        //formulario hubspot footer newsletter
        injectScript('https://js.hsforms.net/forms/v2.js', function(){
            footer_hs_form = document.querySelector("#mc_embed_signup2");
            let script = document.createElement('script');
            script.src = "/assets/js/lazyscripts.js";
            footer_hs_form.append(script);
        });
        //fin formulario hubspot footer 
        //inicio tag manager
        injectScript('https://www.googletagmanager.com/gtag/js?id=G-F7NH5TV3ZY', function(){
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-F7NH5TV3ZY');
        });
        //fin tag manager

        //flag para que no se active nuevamente
        flag_lazyscript = 1;
    }
}

setTimeout(
    function() {
        document.addEventListener('touchstart', lazylazyload);
        document.addEventListener('scroll', lazylazyload);
        document.addEventListener('keydown', lazylazyload);
        document.addEventListener('mousemove', lazylazyload);
    }, 1000);

if(screen.width >= 992){
    loadlazyimglate();
}


function build_container_prices(id_container_prices){
    

    const select_solo = document.querySelector(id_container_prices + " .plan_solo select");
    price_solo = document.querySelector(id_container_prices + " .plan_solo .price-value");
    price_solo_normal = document.querySelector(id_container_prices + " .plan_solo .normal_price");
    const select_basic = document.querySelector(id_container_prices + " .plan_basic select");
    price_basic = document.querySelector(id_container_prices + " .plan_basic .price-value");
    price_basic_normal = document.querySelector(id_container_prices + " .plan_basic .normal_price");
    const select_premium = document.querySelector(id_container_prices + " .plan_premium select");
    price_premium = document.querySelector(id_container_prices + " .plan_premium .price-value");
    price_premium_normal = document.querySelector(id_container_prices + " .plan_premium .normal_price");
    const select_pro = document.querySelector(id_container_prices + " .plan_pro select");
    price_pro = document.querySelector(id_container_prices + " .plan_pro .price-value");
    price_pro_normal = document.querySelector(id_container_prices + " .plan_pro .normal_price");

    var normal_prices = document.querySelectorAll(".normal_price");

    let currencyLocale = Intl.NumberFormat(ap_locale);
    
    year_switch = document.querySelector("#year_payment");

    if(year_switch.classList.contains('active')){

        price_solo_normal.innerHTML = currencyLocale.format(select_solo.options[select_solo.selectedIndex].value*12); 
        price_basic_normal.innerHTML = currencyLocale.format(select_basic.options[select_basic.selectedIndex].value*12); 
        price_premium_normal.innerHTML = currencyLocale.format(select_premium.options[select_premium.selectedIndex].value*12); 
        price_pro_normal.innerHTML = currencyLocale.format(select_pro.options[select_pro.selectedIndex].value*12);

        price_solo.innerHTML = currencyLocale.format(select_solo.options[select_solo.selectedIndex].value*10); 
        price_basic.innerHTML = currencyLocale.format(select_basic.options[select_basic.selectedIndex].value*10); 
        price_premium.innerHTML = currencyLocale.format(select_premium.options[select_premium.selectedIndex].value*10); 
        price_pro.innerHTML = currencyLocale.format(select_pro.options[select_pro.selectedIndex].value*10);

        normal_prices.forEach(p => {
            p.classList.remove("price-hidden");
            p.classList.add("price-show");
            p.classList.remove("price-hide");
        });
    }else{

        price_solo_normal.innerHTML = ""; 
        price_basic_normal.innerHTML = ""; 
        price_premium_normal.innerHTML = ""; 
        price_pro_normal.innerHTML = "";

        price_solo.innerHTML = currencyLocale.format(select_solo.options[select_solo.selectedIndex].value); 
        price_basic.innerHTML = currencyLocale.format(select_basic.options[select_basic.selectedIndex].value); 
        price_premium.innerHTML = currencyLocale.format(select_premium.options[select_premium.selectedIndex].value); 
        price_pro.innerHTML = currencyLocale.format(select_pro.options[select_pro.selectedIndex].value); 

        normal_prices.forEach(p => {
            p.classList.add("price-hidden");
            p.classList.remove("price-show");
            p.classList.add("price-hide");
        });
    }
}

function build_prices(){

    build_container_prices("#plans_data_desktop");
    build_container_prices("#plans_data_mobile");

}

if(document.querySelector(".pricing-switcher-wrapper") != null) {


    price_solo = document.querySelector("#plans_data_desktop .plan_solo");
    const clone_solo = price_solo.cloneNode(true);
    document.getElementById("tab-solo").appendChild(clone_solo);

    price_basic = document.querySelector("#plans_data_desktop .plan_basic");
    const clone_basic = price_basic.cloneNode(true);
    document.getElementById("tab-basic").appendChild(clone_basic);

    price_premium = document.querySelector("#plans_data_desktop .plan_premium");
    const clone_premium = price_premium.cloneNode(true);
    document.getElementById("tab-premium").appendChild(clone_premium);

    price_pro = document.querySelector("#plans_data_desktop .plan_pro");
    const clone_pro = price_pro.cloneNode(true);
    document.getElementById("tab-pro").appendChild(clone_pro);


    build_prices();

    var legend = document.querySelector('.table-header');
    var offset = legend.getBoundingClientRect();


    window.addEventListener('scroll', function() {

        var table_compare = document.querySelector(".accordion-wrapper");
        var element = table_compare.offsetHeight + offset.top - 250;

        if ((window.pageYOffset > offset.top) &&  (window.pageYOffset < element)){
            legend.classList.add("fixed");
        } else {
            legend.classList.remove("fixed");
        }
    });

}
