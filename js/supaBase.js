import { createClient } from '@supabase/supabase-js';

const supabaseUrl = 'https://biteejkmrwibvhgffqme.supabase.co';
const supabaseKey = process.env.SUPABASE_KEY;
const supabase = createClient(supabaseUrl, supabaseKey);

let { data } = await supabase
    .from('items')
    .select('*');

    console.log(data);