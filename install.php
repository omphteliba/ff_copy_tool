<?php

// Diese Datei ist keine Pflichtdatei mehr.
// Wird automatisch bei der Installation ausgeführt
// (z.B. Anlegen von Datenbanken, Installation von Modulen, bestimmte Prüfungen, Festlegen erster Konfigurationswerte)

$addon = rex_addon::get('ff_copy_tool');

// SQL-Anweisungen können auch weiterhin über die `install.sql` ausgeführt werden.
// Empfohlen wird aber die SQL-Anweisungen in der `install.php` mit der Klasse `rex_sql_table` auszuführen.
// Siehe auch https://redaxo.org/doku/master/datenbank-tabellen

// Hier wird die Beispiel-Tabelle `rex_demo_addon` des Demo-AddOns erstellt falls noch nicht vorhanden.
// Hinweis: rex::getTable() erweitert den Tabellennamen um den Tabellen-Prefix aus der `config.yml`
// Hinweis: rex::getTablePrefix() liefert den Tabellen-Prefix aus der `config.yml`, https://redaxo.org/doku/master/eigenschaften#get-table-prefix

rex_sql_table::get(rex::getTable('fc_article'))
    ->ensurePrimaryIdColumn()
    ->ensureColumn(new rex_sql_column('fc_pid', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('fc_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('parent_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('name', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('catname', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('catpriority', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('startarticle', 'tinyint(1)'))
    ->ensureColumn(new rex_sql_column('priority', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('path', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('status', 'tinyint(1)'))
    ->ensureColumn(new rex_sql_column('template_id', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('clang_id', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('createdate', 'datetime'))
    ->ensureColumn(new rex_sql_column('createuser', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('updatedate', 'datetime'))
    ->ensureColumn(new rex_sql_column('updateuser', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('revision', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('art_score', 'text'))
    ->ensureColumn(new rex_sql_column('art_online_from', 'text'))
    ->ensureColumn(new rex_sql_column('art_online_to', 'text'))
    ->ensureColumn(new rex_sql_column('art_keywords', 'text'))
    ->ensureColumn(new rex_sql_column('art_file', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('art_teaser', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('art_type_id', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('art_html_title', 'text'))
    ->ensureColumn(new rex_sql_column('art_no_search', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('cat_navigation_area', 'varchar(191)', false, '1'))
    ->ensureColumn(new rex_sql_column('cat_description', 'text'))
    ->ensureColumn(new rex_sql_column('cat_menu_tweaker', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('art_menudesc', 'text'))
    ->ensureColumn(new rex_sql_column('asd_category', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('asd_picture', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('asd_text', 'text'))
    ->ensureColumn(new rex_sql_column('asd_background', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('asd_start', 'text'))
    ->ensureColumn(new rex_sql_column('asd_end', 'text'))
    ->ensureColumn(new rex_sql_column('asd_booth', 'text'))
    ->ensureColumn(new rex_sql_column('asd_link', 'text'))
    ->ensureColumn(new rex_sql_column('glob_dateformat', 'text'))
    ->ensureColumn(new rex_sql_column('art_url_title', 'text'))
    ->ensureColumn(new rex_sql_column('art_google_exclude', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('cat_noindex', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('art_llp_typ', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('art_llp_hover', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('art_llp_vorschau_uebersicht', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('art_llp_titel', 'text'))
    ->ensureColumn(new rex_sql_column('asd_news_link', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('asd_news_date', 'text'))
    ->ensureColumn(new rex_sql_column('art_og_image', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('asd_geo', 'varchar(191)', false, '2'))
    ->ensureColumn(new rex_sql_column('asd_news_external_link', 'text'))
    ->ensureColumn(new rex_sql_column('asd_joblocation', 'text'))
    ->ensureColumn(new rex_sql_column('asd_jobentry', 'text'))
    ->ensureColumn(new rex_sql_column('asd_jobhover', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('asd_jobimage', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('asd_joblink', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('glob_FF_channel', 'text'))
    ->ensureColumn(new rex_sql_column('seo_title', 'text'))
    ->ensureColumn(new rex_sql_column('seo_description', 'text'))
    ->ensureColumn(new rex_sql_column('seo_keywords', 'text'))
    ->ensureColumn(new rex_sql_column('seo_custom_url', 'text'))
    ->ensureColumn(new rex_sql_column('seo_canonical_url', 'text'))
    ->ensureColumn(new rex_sql_column('seo_noindex', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('seo_ignore_prefix', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('art_head_tracking', 'text'))
    ->ensureColumn(new rex_sql_column('art_googleOptimize', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('glob_footer_logos', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('glob_gtmid', 'text'))
    ->ensureColumn(new rex_sql_column('glob_googlOptimize', 'text'))
    ->ensureColumn(new rex_sql_column('glob_gua', 'text'))
    ->ensureColumn(new rex_sql_column('art_llp_author', 'text'))
    ->ensureColumn(new rex_sql_column('art_virt_subcat', 'text'))
    ->ensureColumn(new rex_sql_column('cat_banner', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('cat_banner_link', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('art_llp_subtyp', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('yrewrite_url_type', 'text'))
    ->ensureColumn(new rex_sql_column('yrewrite_url', 'text'))
    ->ensureColumn(new rex_sql_column('yrewrite_redirection', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('yrewrite_title', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('yrewrite_description', 'text'))
    ->ensureColumn(new rex_sql_column('yrewrite_changefreq', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('yrewrite_priority', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('yrewrite_index', 'tinyint(1)'))
    ->ensureColumn(new rex_sql_column('yrewrite_canonical_url', 'text'))
    ->ensureColumn(new rex_sql_column('art_iframe', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('art_description', 'text'))
    ->ensure();

rex_sql_table::get(rex::getTable('fc_article_slice'))
    ->ensurePrimaryIdColumn()
    ->ensureColumn(new rex_sql_column('fc_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('article_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('clang_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('ctype_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('module_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('revision', 'int(11)'))
    ->ensureColumn(new rex_sql_column('priority', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('status', 'tinyint(1)', false, '1'))
    ->ensureColumn(new rex_sql_column('value1', 'text'))
    ->ensureColumn(new rex_sql_column('value2', 'text'))
    ->ensureColumn(new rex_sql_column('value3', 'text'))
    ->ensureColumn(new rex_sql_column('value4', 'text'))
    ->ensureColumn(new rex_sql_column('value5', 'text'))
    ->ensureColumn(new rex_sql_column('value6', 'text'))
    ->ensureColumn(new rex_sql_column('value7', 'text'))
    ->ensureColumn(new rex_sql_column('value8', 'text'))
    ->ensureColumn(new rex_sql_column('value9', 'text'))
    ->ensureColumn(new rex_sql_column('value10', 'text'))
    ->ensureColumn(new rex_sql_column('value11', 'text'))
    ->ensureColumn(new rex_sql_column('value12', 'text'))
    ->ensureColumn(new rex_sql_column('value13', 'text'))
    ->ensureColumn(new rex_sql_column('value14', 'text'))
    ->ensureColumn(new rex_sql_column('value15', 'text'))
    ->ensureColumn(new rex_sql_column('value16', 'text'))
    ->ensureColumn(new rex_sql_column('value17', 'text'))
    ->ensureColumn(new rex_sql_column('value18', 'text'))
    ->ensureColumn(new rex_sql_column('value19', 'text'))
    ->ensureColumn(new rex_sql_column('value20', 'text'))
    ->ensureColumn(new rex_sql_column('media1', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('media2', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('media3', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('media4', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('media5', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('media6', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('media7', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('media8', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('media9', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('media10', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('medialist1', 'text'))
    ->ensureColumn(new rex_sql_column('medialist2', 'text'))
    ->ensureColumn(new rex_sql_column('medialist3', 'text'))
    ->ensureColumn(new rex_sql_column('medialist4', 'text'))
    ->ensureColumn(new rex_sql_column('medialist5', 'text'))
    ->ensureColumn(new rex_sql_column('medialist6', 'text'))
    ->ensureColumn(new rex_sql_column('medialist7', 'text'))
    ->ensureColumn(new rex_sql_column('medialist8', 'text'))
    ->ensureColumn(new rex_sql_column('medialist9', 'text'))
    ->ensureColumn(new rex_sql_column('medialist10', 'text'))
    ->ensureColumn(new rex_sql_column('link1', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('link2', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('link3', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('link4', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('link5', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('link6', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('link7', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('link8', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('link9', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('link10', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('linklist1', 'text'))
    ->ensureColumn(new rex_sql_column('linklist2', 'text'))
    ->ensureColumn(new rex_sql_column('linklist3', 'text'))
    ->ensureColumn(new rex_sql_column('linklist4', 'text'))
    ->ensureColumn(new rex_sql_column('linklist5', 'text'))
    ->ensureColumn(new rex_sql_column('linklist6', 'text'))
    ->ensureColumn(new rex_sql_column('linklist7', 'text'))
    ->ensureColumn(new rex_sql_column('linklist8', 'text'))
    ->ensureColumn(new rex_sql_column('linklist9', 'text'))
    ->ensureColumn(new rex_sql_column('linklist10', 'text'))
    ->ensureColumn(new rex_sql_column('createdate', 'datetime'))
    ->ensureColumn(new rex_sql_column('createuser', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('updatedate', 'datetime'))
    ->ensureColumn(new rex_sql_column('updateuser', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('aw_grid', 'text'))
    ->ensure();

rex_sql_table::get(rex::getTable('fc_media'))
    ->ensurePrimaryIdColumn()
    ->ensureColumn(new rex_sql_column('fc_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('category_id', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('attributes', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('filetype', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('filename', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('originalname', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('filesize', 'varchar(255)', true))
    ->ensureColumn(new rex_sql_column('width', 'int(10) unsigned', true))
    ->ensureColumn(new rex_sql_column('height', 'int(10) unsigned', true))
    ->ensureColumn(new rex_sql_column('title', 'varchar(255)', true))
    ->ensureGlobalColumns()
    ->ensureColumn(new rex_sql_column('revision', 'int(10) unsigned'))
    ->ensureColumn(new rex_sql_column('med_description', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('med_copyright', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('med_link', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('med_thumbnail', 'varchar(255)', true, ''))
    ->ensureColumn(new rex_sql_column('med_internal_link', 'varchar(255)', true, ''))
    ->ensureColumn(new rex_sql_column('med_mediapool_rename', 'mediumtext', true))
    ->ensureColumn(new rex_sql_column('server', 'text'))
    ->ensure();

if (rex_plugin::get('yform', 'rest')->isAvailable()) {
    $tables = ['fc_article', 'fc_article_slice', 'fc_media'];
    foreach ($tables as $table_name) {
        try {
            rex_yform_manager_table_api::migrateTable(rex::getTable($table_name));
        } catch (Exception $e) {
            rex_logger::logException($e);
        }
    }
} else {
    $addon->setProperty('installmsg', 'Yform couldn\'t migrate the tables');
    $addon->setProperty('install', false);
}

$sql = rex_sql::factory();
try {
    $sql->setQuery('SELECT id FROM ' . rex::getTablePrefix() . 'cronjob WHERE type="rex_cronjob_ff_copy" LIMIT 1');
} catch (rex_sql_exception $e) {
    rex_logger::logException($e);
}
if (0 === $sql->getRows()) {
    $sql->setTable(rex::getTablePrefix() . 'cronjob');
    $sql->setValue('name', 'Copy Tool');
    $sql->setValue('type', 'rex_cronjob_ff_copy');
    $sql->setValue('interval', '{"minutes":"all","hours":"all","days":"all","weekdays":"all","months":"all"}');
    $sql->setValue('environment', '|script|');
    $sql->setValue('execution_moment', 0);
    $sql->setValue('status', 0);
    $sql->addGlobalCreateFields();
    $sql->addGlobalUpdateFields();
    try {
        $sql->insert();
    } catch (rex_sql_exception $e) {
        rex_logger::logException($e);
    }
}

if (rex_plugin::get('yform', 'rest')->isAvailable()) {
    $sql->setTable(rex::getTablePrefix() . 'yform_rest_token');
    $sql->setValue('name', 'Copy Tool');
    try {
        $sql->setValue('token', bin2hex(random_bytes((32 - (32 % 2)) / 2)));
    } catch (Exception $e) {
        rex_logger::logException($e);
    }
    $sql->setValue('status', 1);
    $sql->setValue('amount', 0);
    $sql->setValue('interval', 'none');
    $sql->setValue('paths', '/copy/fc_article_slice,/copy/fc_article,/copy/fc_media');
    try {
        $sql->insert();
    } catch (rex_sql_exception $e) {
        rex_logger::logException($e);
    }
} else {
    rex_logger::logError(1, 'Please install the Yform Plugin "Rest"', __FILE__, __LINE__);
    $addon->setProperty('installmsg', 'Please install the Yform Plugin "Rest"');
    $addon->setProperty('install', false);
}
