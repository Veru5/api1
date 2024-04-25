# Zobrazení dat z databáze

Tento projekt demonstruje zobrazení dat z databáze na webové stránce.

## Projekt se skládá ze 4 hlavních bodů:

**index.php:** Hlavní soubor, který inicializuje CURL požadavek na API endpoint a zobrazuje data v tabulce.<br>
**controller.php:** Kontroluje typ požadavku a parametry a vrací data z modelu jako JSON.<br>
**model.php:** Třída pro připojení k databázi a načítání dat.<br>
**view.php:** HTML soubor s elementem div, do kterého se dynamicky načtou data z API.<br>

## Spuštění

1. Uložte soubory na webový server.
2. Otevřete index.php ve webovém prohlížeči.
3. Na stránce se zobrazí tabulka s daty z databáze.

## Poznámky

-Používá se PHP a CURL pro načítání dat z API endpointu.<br>
-Data se z JSON formátu dekódují do asociativního pole.<br>
-Data se zobrazují v tabulce HTML.<br>
-AJAX se používá pro asynchronní načítání dat bez nutnosti opakovaného načtení stránky.<br>

# Návod pro developery

Tento návod popisuje způsob použití API tohoto projektu. API poskytuje možnost získání dat z databáze ve formátu JSON pomocí HTTP požadavků.

## Získání dat

Pro získání dat z API proveďte HTTP GET požadavek na následující URL:<br>
http://www.smate.cz/db-server.php?action=getData

## Formát odpovědi

Odpověď API bude ve formátu JSON a bude obsahovat seznam záznamů z databáze. Každý záznam bude reprezentován jako objekt obsahující klíče a hodnoty odpovídající sloupcům v databázi.<br>

[<br>
    {<br>
        "id": 14,<br>
        "url": "https://www.grafika.cz/",<br>
        "title": "Grafika.cz - vše o počítačové grafice",<br>
        "meta_description": "Internetový magazín o grafice, polygrafii a digitálních technologiích. Součástí serveru je diskuzní fórum, bazar, systém práce, galerie a další služby.",<br>
        "datetime_column": "2024-04-14 09:16:50",<br>
        "user_id": 28<br>
    },<br>
    ...<br>
]<br>

## Parametry

API nepodporuje žádné další parametry v URL adrese pro získání dat. Všechna data jsou vrácena v plném rozsahu bez možnosti filtru nebo stránkování.

## Chybové kódy

V případě chyby bude API vracet odpovídající chybový kód spolu s popisem chyby v těle odpovědi. Níže jsou uvedeny možné chybové kódy: <br>

-400 Bad Request: Požadavek obsahuje neplatné parametry.<br>
-404 Not Found: Požadovaný zdroj nebyl nalezen.<br>
-500 Internal Server Error: Interní chyba serveru.<br>


