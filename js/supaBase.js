//   ************ initialisation base de données ***************

const {
    createClient
} = supabase;

const SUPABASE_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNTk2MzEyLCJleHAiOjE5NTgxNzIzMTJ9.dXuJYdcmZmkR7Ib44puci2Vb7ZellpUDTmrbrM6g_IA'

const SUPABASE_URL = "https://biteejkmrwibvhgffqme.supabase.co"

supabase = createClient(SUPABASE_URL, SUPABASE_KEY);



// ************* données du formulaire **************


let sendForm = document.getElementById('sendForm');
let cancelForm = document.getElementById('cancelForm');
let rgpd = document.getElementById('rgpd');

// fait apparaître le bouton envoyer que si la case rgpd est checked
rgpd.addEventListener("click", function () {

    sendForm.classList.toggle('hidden')
})

// relance la page et vide le formulaire sur l'appuie du bouton annuler
cancelForm.addEventListener('click', function () {
    window.location.href = "/projet-forge/contact.php";
})

// evènement lors du click bouton envoyer 
sendForm.addEventListener('click', send());

// function pour l'évènement envoyer
async function send() {

    // récupérer dans le DOM les données du form
    let genders = document.getElementsByName('civilite');
    let gender = "";
    let lastName = document.getElementById('nom').value;
    let firstName = document.getElementById('prenom').value;
    let adresse = document.getElementById('address').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('tel').value;
    let message = document.getElementById('message').value;

    //boucle pour récupérer la valeur du bouton radio sélectionné
    genders.forEach(element => {
        if (element.checked == true) {
            gender = element.value;
        }
    });

    // conditions qui vérifie que les champs obligatoire sont remplis avant d'envoyer dans supabase
    if (lastName != "" && firstName != "" && email != "" && message != "") {


        //insert dans supabase des valeurs du formulaire récupéré
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

        // rafraichi la page une fois le formulaire envoyé pour éviter double envoie.
        window.location.href = "/projet-forge/contact.php";
    }
}