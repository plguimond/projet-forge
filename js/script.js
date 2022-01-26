//  ******** menu page active *********


let menu = document.getElementById("menu").getElementsByTagName("a");
let menuList = document.getElementById("menuList").getElementsByTagName("a");

for (var i = 0; (i < menuList.length) && (i < menu.length); i++) {

    // si le lien href du menu est égal au lien de la page en cours, alors on ajoute active au lien et on remove la class active par défaut
    if ((menuList[i].href === location.href) && (menu[i].href === location.href)) {
            menuList[0].classList.remove("active");
            menu[0].classList.remove("active");
            menuList[i].classList.add("active");
            menu[i].classList.add("active");
    }
}


