const menuLi = document.querySelectorAll('.admin-sidebar-content > ul > li > a');
const subMenu = document.querySelectorAll('.sub-menu');

for (let index = 0; index < menuLi.length; index++) {
    menuLi[index].addEventListener('click', (e)=>{
        e.preventDefault();
        // menuLi[index].parentNode.querySelector('ul').classList.toggle('active');
        for (let i = 0; i < subMenu.length; i++) {
            subMenu[i].setAttribute("style", "height: 0px");
        }

        const subMenuHeight = menuLi[index].parentNode.querySelector('ul .sub-menu-items').offsetHeight;
        menuLi[index].parentNode.querySelector('ul').setAttribute("style", "height:"+subMenuHeight+"px");
    })
    
}