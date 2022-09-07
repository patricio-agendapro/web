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


function build_prices(){
    const select_solo = document.querySelector(".plan_solo select");
    price_solo = document.querySelector(".plan_solo .price-value");
    price_solo_normal = document.querySelector(".plan_solo .normal_price");
    const select_basic = document.querySelector(".plan_basic select");
    price_basic = document.querySelector(".plan_basic .price-value");
    price_basic_normal = document.querySelector(".plan_basic .normal_price");
    const select_premium = document.querySelector(".plan_premium select");
    price_premium = document.querySelector(".plan_premium .price-value");
    price_premium_normal = document.querySelector(".plan_premium .normal_price");
    const select_pro = document.querySelector(".plan_pro select");
    price_pro = document.querySelector(".plan_pro .price-value");
    price_pro_normal = document.querySelector(".plan_pro .normal_price");

    year_switch = document.querySelector("#year_payment");
    var normal_prices = document.querySelectorAll(".normal_price");

    let currencyLocale = Intl.NumberFormat(ap_locale);
    
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
        price_solo.innerHTML = currencyLocale.format(select_solo.options[select_solo.selectedIndex].value); 
        price_basic.innerHTML = currencyLocale.format(select_basic.options[select_basic.selectedIndex].value); 
        price_premium.innerHTML = currencyLocale.format(select_premium.options[select_premium.selectedIndex].value); 
        price_pro.innerHTML = currencyLocale.format(select_pro.options[select_pro.selectedIndex].value); 

        normal_prices.forEach(p => {
            p.classList.add("price-hide");
        });
    }
}


if(document.querySelector(".pricing-switcher-wrapper") != null) {

   
    build_prices();

    // price_solo = document.querySelector("#plans_data .plan_solo");
    // const clone_solo = price_solo.cloneNode(true);
    // document.getElementById("tab-solo").appendChild(clone_solo);

    // price_basic = document.querySelector("#plans_data .plan_basic");
    // const clone_basic = price_basic.cloneNode(true);
    // document.getElementById("tab-basic").appendChild(clone_basic);

    // price_premium = document.querySelector("#plans_data .plan_premium");
    // const clone_premium = price_premium.cloneNode(true);
    // document.getElementById("tab-premium").appendChild(clone_premium);

    // price_pro = document.querySelector("#plans_data .plan_pro");
    // const clone_pro = price_pro.cloneNode(true);
    // document.getElementById("tab-pro").appendChild(clone_pro);


 

    // const wrapper = document.querySelectorAll(".pricing-wrapper");
    // wrapper.forEach(wrap => {
    // const switchers = wrap.querySelector(".pricing-switchers");
    // const switcher = wrap.querySelectorAll(".pricing-switcher");
    // const price = wrap.querySelectorAll(".price");
    // switchers.addEventListener("click", (e) => {
    //     switcher.forEach(s => {
    //     s.classList.toggle("pricing-switcher-active");
    //     });
    //     price.forEach(p => {
    //     p.classList.remove("price-hidden");
    //     p.classList.toggle("price-show");
    //     p.classList.toggle("price-hide");
    //     });
    // });
    // });
}
