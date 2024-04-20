# Zobrazení dat z databáze

Tento projekt demonstruje zobrazení dat z databáze na webové stránce.

## Projekt se skládá ze 4 hlavních bodů:

**index.php:** Hlavní soubor, který inicializuje CURL požadavek na API endpoint a zobrazuje data v tabulce.
**controller.php:** Kontroluje typ požadavku a parametry a vrací data z modelu jako JSON.
**model.php:** Třída pro připojení k databázi a načítání dat.
**view.php:** HTML soubor s elementem div, do kterého se dynamicky načtou data z API.

## Spuštění

1. Uložte soubory na webový server.
2. Otevřete index.php ve webovém prohlížeči.
3. Na stránce se zobrazí tabulka s daty z databáze.

## Poznámky

Používá se PHP a CURL pro načítání dat z API endpointu.
Data se z JSON formátu dekódují do asociativního pole.
Data se zobrazují v tabulce HTML.
AJAX se používá pro asynchronní načítání dat bez nutnosti opakovaného načtení stránky.