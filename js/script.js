//  ******** menu page active *********


let menu = document.getElementById("menu").getElementsByTagName("a");
let menuList = document.getElementById("menuList").getElementsByTagName("a");

for (var i = 0; (i < menuList.length) && (i < menu.length); i++) {
    if ((menuList[i].href === location.href) && (menu[i].href === location.href)) {
            menuList[0].classList.remove("active");
            menu[0].classList.remove("active");
            menuList[i].classList.add("active");
            menu[i].classList.add("active");
    }
}


//           ******** API Adresse Gouv *********


let dataList = document.getElementById('addressName');
let address = document.querySelector('#address');

address.addEventListener('input', function search() {
    let input = address.value;
    dataList.innerHTML = "";
    console.log(input.length)
    if (input.length > 0) {
        let url = "https://api-adresse.data.gouv.fr/search/?q=" + input + "&limit=5";

        console.log(url);
        fetch(url)
            .then(response => response.json())
            .then(data => {

                let result = data.features;
                dataList.innerHTML = "";
                if (result.length) {
                    for (let i = 0; i < result.length; i++) {
                        //console.log( result[i].properties.name + ' ' + result[i].properties.postcode + ' ' + result[i].properties.city);

                        let li = document.createElement('li');
                        li.innerText = result[i].properties.name + ' ' + result[i].properties.postcode + ' ' + result[i].properties.city;
                        dataList.appendChild(li);

                        li.addEventListener('click', () => {
                            address.value = li.innerText;
                            dataList.innerHTML = "";

                        })
                    }
                }

            })
    }else{
        dataList.innerHTML = "";  
    }
})