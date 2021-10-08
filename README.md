# REDAXO-AddOn: Copy Tool
Kopiert Artikel und Medien zwischen REDAXO Installationen. Der Artikel, seine Slices und Medien werden über die YForm REST-Api aufs Ziel-System in temporäre Tabellen geschrieben und landt dann auf Knopfdruck oder Cronjob im Wurzelverzeichnis als neuer Artikel unter neuem Namen.

## Installation
Die Installation muss sowohl auf dem Ursprungs- als auch auf dem Ziel-REDAXO vorgenommen werden.
1. Letzten Zip Archiv downloaden
2. Zip Archiv entpacken
3. Entpackten Folder in `ff_copy_tool` umbenennen
4. MForm Ordner in den REDAXO Addon Ordner `redaxo/src/addons/` verschieben
5. In REDAXO einloggen und unter "AddOns" ff_copy_tool installieren und aktivieren

## Alternative Installation
Das Copy Tool kann auch direkt über den Redaxo-Installer installiert werden.

1. In REDAXO einloggen
2. Im Backend unter "Installer > Neue herunterladen" "Copy Tool" suche und unter "Funktion" "ansehen" klicken
3. Bei der aktuelle Version in der Liste unter "Funktion" "herunterladen" klicken
4. Unter "AddOns" ff_copy_tool installieren und aktivieren

## Einrichtung

### Ziel-Redaxo
In 'Yform / RESTful API' den Token fürs Copy Tool kopieren.
![image](https://user-images.githubusercontent.com/196336/132231034-aef0c043-8140-4a67-9b56-6aeca437565c.png)

### Ursprungs-Redaxo
Im 'Copy Tool / Einstellungen' für jedes Ziel-System in der Textbox 'Ziel Domains' eine Ziel URL pro Zeile anlegen und den passenden Token - auch eins pro Zeile - in der Textbox 'Ziel Token' eintragen.

## Benutzung
In dem Artikel der kopiert werden soll gibt es im Editor rechts in der Spalte einen neuen Bereich 'Artikel auf andere Web-Site kopieren'. Hier die Ziel Domain auswählen und auf 'Kopieren' klicken. 

![image](https://user-images.githubusercontent.com/196336/132231510-056fc19d-420b-43d3-9017-f82ac67d8a51.png)


Im Zielsystem wird dieser Artikel in der Wurzel-Kategorie als letzter Artikel angefügt. Das passiert mit kurzer Zeit verzögerung via cronjob, ober kann händisch im Copy Tool des Ziel-Systems ausgelöst werden. Dort kann man auch nachschauen ob noch Artikel warten.

## ToDo
* Medien im Quelltext suchen und kopieren

## Basiert auf:
[Demo Addon](https://github.com/FriendsOfREDAXO/demo_addon)

## Danke:
Dank an all die wundervollen Menschen von ['Friends of REDAXO'](https://github.com/FriendsOfREDAXO)
