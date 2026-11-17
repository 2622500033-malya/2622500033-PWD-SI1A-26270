<?php 
function bersihkan ($teks)
{
    return htmlspeciarchars($teks ?? "", ENT_QUOTES, 'UTF-8');
}

function tebal ($teks)
{
    return "<strong>" . bersihkan($teks) . "</strong>";
}
