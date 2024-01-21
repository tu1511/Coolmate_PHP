const sliderItem = document.querySelectorAll('.slider-item');
for (let index = 0; index < sliderItem.length; index++) {
    sliderItem[index].style.left = index* 100 + "%";
}

const sliderItems = document.querySelector('.slider-items');
const arrowRight = document.querySelector('.ri-arrow-right-fill');
const arrowLeft = document.querySelector('.ri-arrow-left-fill');
let i = 0;
if (arrowRight != null && arrowLeft != null) {
    arrowRight.addEventListener('click', ()=> {
        if (i < sliderItem.length -1) {
            i++;
            sliderMove(i);
        } else {
            return false;
        }
    });
    
    arrowLeft.addEventListener('click', ()=> {
        if (i <= 0) {
            return false;
        } 
        {
            i--;
            sliderMove(i);
        }
    });
}

function sliderMove (i) {
    sliderItems.style.left = -i*100 + "%";
}

// function autoSlider() {
//     if(i < sliderItems.length-1){
//         i++;
//         sliderMove(i);
//     } else {
//         i = 0;
//         sliderMove(i);
//     }
// }

// setInterval(autoSlider, 1000);

// menuBar responsive
const Menubar = document.querySelector('.header-bar-icon');
const headerNav = document.querySelector('.header-nav');
Menubar.addEventListener('click', ()=> {
    headerNav.classList.toggle('active');
});

// sticky header
window.addEventListener('scroll', ()=>{
    if (scrollY > 50) {
        document.querySelector('header').classList.add('active');
    } else {
        document.querySelector('header').classList.remove('active');
    }
});

// click product image detail 
const  imageSmall = document.querySelectorAll('.product-images-items img');
const imageMain = document.querySelector('.main-image')
for (let index = 0; index < imageSmall.length; index++) {
   imageSmall[index].addEventListener('click', ()=> {
        imageMain.src = imageSmall[index].src;

        for (let a = 0; a < imageSmall.length; a++) {
            imageSmall[a].classList.remove('active')
        }
        imageSmall[index].classList.add('active')
        
   })
    
}

// quantity-product
const quanPlus = document.querySelectorAll('.ri-add-line');
const quanMinus = document.querySelectorAll('.ri-subtract-line');
const quanInput = document.querySelectorAll('.quantity-input');

if (quanMinus != null && quanPlus != null) {
    for (let index = 0; index < quanPlus.length; index++) {   
        quanPlus[index].addEventListener('click', ()=> {
            inputValue = quanInput[index].value
            inputValue++;
            quanInput[index].value = inputValue;
        })

        quanMinus[index].addEventListener('click', ()=> {
            inputValue = quanInput[index].value
            if (inputValue <= 1){
                return false;
            } else {
                inputValue--;
                quanInput[index].value = inputValue;
            }
        })
    }
}