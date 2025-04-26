# Kommunalwahlbezirk-Finder
Dies ist ein Webtool zur schnellen Suche von Straßen und Kommunalwahlbezirken (KWB).

## Projektbeschreibung
Die KWB Straßensuche ermöglicht es, anhand eines Straßenamens und optional einer Hausnummer schnell den zugehörigen Stadtbezirk und Kommunalwahlbezirk zu ermitteln.
Das Tool basiert auf einer clientseitigen Suche (mit Fuse.js) und einem serverseitigen Endpunkt zur Bereitstellung der Straßendaten.

## Funktionen
- **Volltextsuche** nach Straßennamen mit Fehler-Toleranz.
- **Filtern nach Hausnummern**, inkl.:
  - Bereichsprüfung (von/bis Hausnummern),
  - Berücksichtigung von **geraden** und **ungeraden** Seiten.
- **Hervorhebung** der Treffer im Suchergebnis.
- **Responsives Design** für Mobilgeräte und Desktop-Browser.
- **Schnelle Anzeige** von maximal 20 Ergebnissen.

## Technischer Überblick

- **Frontend**:
  - HTML5 + CSS3 (modernes responsives Layout)
  - JavaScript (Vanilla)
  - [Fuse.js](https://fusejs.io/) (Version 6.6.2) für unscharfe Suchanfragen
- **Backend**:
  - PHP (`daten.php`) liest eine CSV-Datei (`strassen.csv`) ein und stellt die Daten als JSON zur Verfügung.
 
### Wichtige Dateien

| Datei            | Beschreibung |
|------------------|--------------|
| `kwb.html`        | Haupt-HTML-Seite inklusive Suchlogik |
| `kwb/style.css`   | Layout und Design (modern, responsiv) |
| `kwb/daten.php`   | Backend-Schnittstelle: Wandelt CSV in JSON |
| `kwb/strassen.csv`| Datenquelle: Straßen mit Hausnummern und Bezirksangaben |


## Installation

1. **Projekt kopieren**: Auf einen Webserver mit PHP-Unterstützung laden.
2. **Dateistruktur sicherstellen**:
    ```
    /kwb/
      ├── style.css
      ├── daten.php
      ├── strassen.csv
    kwb.html
    ```
3. **Zugriffsrechte prüfen**: Der Server muss die `daten.php`-Datei ausführen und auf `strassen.csv` zugreifen dürfen.
4. **Projekt aufrufen**: Öffne die `kwb.html`-Datei im Browser.

Beispiel:  
`https://dein-server.de/kwb.html`

## Bedienung

- **Straße eingeben**: Bereits während der Eingabe werden passende Treffer angezeigt.
- **Hausnummer optional angeben**: Filtert die Ergebnisse präziser (z.B. für gerade/ungerade Hausnummern).
- **Ergebnisse**: Anzeigen von Bezirk, Kommunalwahlbezirk sowie Bereich von/bis Hausnummer.

## Lizenz

Dieses Projekt steht unter der [Apache 2.0 Lizenz](https://www.apache.org/licenses/LICENSE-2.0).  
Siehe die Datei [`LICENSE`](LICENSE) für weitere Details.

---
