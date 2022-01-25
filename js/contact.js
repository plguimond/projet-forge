
//           ******** API Adresse Gouv *********

let dataList = document.getElementById('addressName');
let address = document.querySelector('#address');

address.addEventListener('input', function search() {

    let input = address.value;
    dataList.innerHTML = "";
    console.log(input.length)
    if (input.length > 5) {
        let url = "https://api-adresse.data.gouv.fr/search/?q=" + input + "&limit=5";

        
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


// ************* données du formulaire **************




let sendForm = document.getElementById('sendForm');
let genders = document.getElementsByName('civilite');
let gender = "";
let lastName = document.getElementById('nom');
let firstName = document.getElementById('prenom');
let adresse = document.getElementById('address');
let email = document.getElementById('email')
let phone = document.getElementById('tel')
let message = document.getElementById('message')
let rgpd = document.getElementById('rgpd');
genders.forEach(element => {
    if (element.checked == true){
      gender = element.value
    }
});


sendForm.addEventListener('click', function send(){
    
if (rgpd.cheked == true || lastName.value != "" || firstName.value != "" || email.value != "" || message.value != "" )
const { data, error } = await supabase
  .from('formulaire')
  .insert([
    { civilite: gender, nom: lastName.value, prenom: firstName.value, tel: phone.value, message: message.value, email: email.value  },
  ])

});










