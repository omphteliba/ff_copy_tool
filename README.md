# REDAXO-AddOn: Copy Tool
Kopiert Artikel zwischen REDAXO Installationen.

## Installation
Die Installation muss sowohl auf dem Ursprungs- als auch auf dem Ziel-REDAXO vorgenommen werden.
1. Letzten Zip Archiv downloaden
2. Zip Archiv entpacken
3. Entpackten Folder in `ff_copy_tool` umbenennen
4. MForm Ordner in den REDAXO Addon Ordner `redaxo/src/addons/` verschieben
5. In REDAXO einloggen und unter "AddOns" MForm installieren und aktivieren

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

## Basiert auf:
[Demo Addon](https://github.com/FriendsOfREDAXO/demo_addon)

## Danke:
Dank an all die wundervollen Menschen von ['Friends of REDAXO'](https://github.com/FriendsOfREDAXO)
