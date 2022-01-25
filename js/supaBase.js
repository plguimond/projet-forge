//   ************ initialisation base de données ***************

const {
    createClient
} = supabase;

const SUPABASE_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNTk2MzEyLCJleHAiOjE5NTgxNzIzMTJ9.dXuJYdcmZmkR7Ib44puci2Vb7ZellpUDTmrbrM6g_IA'

const SUPABASE_URL = "https://biteejkmrwibvhgffqme.supabase.co"

supabase = createClient(SUPABASE_URL, SUPABASE_KEY);



// ************* données du formulaire **************


let sendForm = document.getElementById('sendForm');


sendForm.addEventListener('click', send());


async function send() {
    let genders = document.getElementsByName('civilite');
    let gender = "";
    let lastName = document.getElementById('nom').value;
    let firstName = document.getElementById('prenom').value;
    let adresse = document.getElementById('address').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('tel').value;
    let message = document.getElementById('message').value;
    let rgpd = document.getElementById('rgpd');
  

   



    genders.forEach(element => {
        if (element.checked == true) {
            gender = element.value;
        }
    });

    if (lastName != "" && firstName != "" && email != "" && message != "") {

        const {
            data,
            error
        } = await supabase
            .from('formulaire')
            .insert([{
                civilite: gender,
                nom: lastName,
                prenom: firstName,
                tel: phone,
                message: message,
                email: email,
                address: adresse
            }]);

        window.location.href = "/projet-forge/contact.php";
    }
}