<?php

// Diese Datei ist keine Pflichtdatei mehr.

// AddOn-Objekt bereitstellen und Data-Verzeichnis löschen (redaxo/data/addons/demo_addon/)
// Im AddOn-Kontext wäre auch $this->getDataPath() möglich

$addon = rex_addon::get('ff_copy_addon');

//rex_dir::delete($addon->getDataPath());

// SQL-Anweisungen können auch weiterhin über die `uninstall.sql` ausgeführt werden.
// Empfohlen wird aber die SQL-Anweisungen in der `uninstall.php` auszuführen
// Siehe auch https://redaxo.org/doku/master/datenbank-tabellen
// Die Tabelle des Demo-AddOns wird hier gelöscht

if (rex_plugin::get('yform', 'rest')->isAvailable()) {
    $tables = ['fc_article', 'fc_article_slice', 'fc_media'];
    foreach ($tables as $table_name) {
        try {
            rex_sql_table::get(rex::getTable($table_name))->drop();
            rex_yform_manager_table_api::removeTable(rex::getTable($table_name));
        } catch (Exception $e) {
            rex_logger::logException($e);
        }
    }
} else {
    $addon->setProperty('installmsg', 'Something is wrong');
    $addon->setProperty('install', false);
}
