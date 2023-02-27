let prev = document.querySelector('#prev');
let next = document.querySelector('#next');

var img = document.querySelectorAll("#imgage_c")

let number_img = 0;
img[number_img].style = "opacity: 1; transition: all 1s"
prev.addEventListener('click', ()=>{
    if(number_img == 0)
        {
            img[number_img].style = "opacity: 0; transition: all 1s"
            number_img = 3;
            img[number_img].style = "opacity: 1; transition: all 1s"
        }
    else
    {
        img[number_img].style = "opacity: 0; transition: all 1s"
        number_img -= 1;
        img[number_img].style = "opacity: 1; transition: all 1s"
    }
});
next.addEventListener('click', ()=>{
    if(number_img == 3)
        {
            img[number_img].style = "opacity: 0; transition: all 1s"
            number_img = 0;
            img[number_img].style = "opacity: 1; transition: all 1s"
        }
    else
    {
        img[number_img].style = "opacity: 0; transition: all 1s"
        number_img += 1;
        img[number_img].style = "opacity: 1; transition: all 1s"
    }
});