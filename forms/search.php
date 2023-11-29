<?php
// Verifică dacă parametrul 'q' există în URL (a fost trimis prin formular)
if (isset($_GET['q'])) {
    // Preia valoarea căutată
    $search_query = $_GET['q'];

    // Aici poți implementa logica ta de căutare (de exemplu, căutare într-o bază de date)
    
    // În acest exemplu, afișăm doar rezultatul căutării
    echo "Rezultatele căutării pentru: $search_query";
} else {
    // Dacă parametrul 'q' nu există, afișează un mesaj sau redirectează către o pagină de căutare
    echo "Introduceți un termen de căutare.";
}
?>
