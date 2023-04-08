let prev = document.querySelector('#prev');
let next = document.querySelector('#next');

var img = document.querySelectorAll("#imgage_c")

if (prev != null){
let number_img = img.length-1;
img[number_img].style = "opacity: 1; z-index: 999; transition: all 1s"
prev.addEventListener('click', ()=>{
    if(number_img > 0)
        {
            img[number_img].style = "opacity: 0; z-index: 0; transition: all 1s"
            number_img -= 1;
            img[number_img].style = "opacity: 1; z-index: 999; transition: all 1s"
        }
    else
    {
        img[number_img].style = "opacity: 0; z-index: 0; transition: all 1s"
        number_img = img.length-1;
        img[number_img].style = "opacity: 1; z-index: 999; transition: all 1s"
    }
});
next.addEventListener('click', ()=>{
    if(number_img == img.length-1)
        {
            img[number_img].style = "opacity: 0; z-index: 0; transition: all 1s"
            number_img = 0;
            img[number_img].style = "opacity: 1; z-index: 999; transition: all 1s"
        }
    else
    {
        img[number_img].style = "opacity: 0; z-index: 0; transition: all 1s"
        number_img += 1;
        img[number_img].style = "opacity: 1; z-index: 999; transition: all 1s"
    }
});

}
let product_cart = document.querySelectorAll('#product_cart');
if (product_cart != null){
    let iii = false;
    for(let tproduct_cart_lox of product_cart)
    {
        tproduct_cart_lox.addEventListener('click', ()=>{
            if(iii == false)
            {
                iii = true;
                for(product_cartasd of product_cart)
                {
                    product_cartasd.style = "display: none";
                }
                tproduct_cart_lox.style = "display: flex";
            }
            else
            {
                iii = false;
                for(product_cartasd of product_cart)
                {
                    product_cartasd.style = "display: flex";
                }
            }
        });
        
    }
}
