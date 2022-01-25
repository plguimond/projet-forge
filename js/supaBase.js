
//   ************ initialisation base de données ***************

const { createClient } = supabase;

const SUPABASE_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNTk2MzEyLCJleHAiOjE5NTgxNzIzMTJ9.dXuJYdcmZmkR7Ib44puci2Vb7ZellpUDTmrbrM6g_IA'

const SUPABASE_URL = "https://biteejkmrwibvhgffqme.supabase.co"

supabase = createClient(SUPABASE_URL, SUPABASE_KEY);



//  let { data } = await supabase
//     .from('formulaire')
//     .select('*')



// console.log(data)

