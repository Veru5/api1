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

Používá se PHP a CURL pro načítání dat z API endpointu.<br>
Data se z JSON formátu dekódují do asociativního pole.<br>
Data se zobrazují v tabulce HTML.<br>
AJAX se používá pro asynchronní načítání dat bez nutnosti opakovaného načtení stránky.