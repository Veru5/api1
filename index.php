<?php

// Adresa API endpointu
$apiUrl = 'http://www.smate.cz/db-server.php?action=getData';

try {
    // Vytvoření instance CURL
    $curl = curl_init();

    // Nastavení parametrů pro CURL požadavek
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Odeslání CURL požadavku
    $response = curl_exec($curl);

    // Kontrola, zda byla odpověď úspěšná
    if ($response === false) {
        throw new Exception('Nepodařilo se získat odpověď z API.');
    }

    // Dekódování JSON odpovědi na asociativní pole
    $data = json_decode($response, true);

    // Výpis dat z databáze
    if (!empty($data)) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Url</th><th>Title</th><th>Meta Description</th><th>Datum</th><th>ID uživatele</th></tr>";
        foreach ($data as $row) {
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['url'] . "</td><td>" . $row['title'] . "</td><td>" . $row['meta_description'] . "</td><td>" . $row['datetime_column'] . "</td><td>" . $row['user_id'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Žádná data nebyla nalezena.";
    }

    // Uzavření CURL spojení
    curl_close($curl);
} catch (Exception $e) {
    // Zpracování chyby
    echo "Chyba: " . $e->getMessage();
}

?>
