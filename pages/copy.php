<?php

$addon = rex_addon::get('ff_copy_tool');

if ('copy' === rex_get('func', 'string')) {
    if (FfCopyTool::runsOnTarget()) {
        echo rex_view::success($addon->i18n('runsOnTarget_success'));
    } else {
        echo rex_view::warning($addon->i18n('runsOnTarget_error'));
        // ff_copy_tool_runsOnTarget_error_log
        rex_logger::logError(2, $addon->i18n('runsOnTarget_error_log'), __FILE__, __LINE__);
    }
}

$sql = rex_sql::factory();
try {
    $sql->setQuery('SELECT id FROM ' . rex::getTablePrefix() . 'fc_article WHERE -1');
} catch (rex_sql_exception $e) {
    rex_logger::logException($e);
}

$content = 'Wartende Artikel: ' . $sql->getRows() . '</br>' . PHP_EOL;

try {
    $sql->setQuery('SELECT id FROM ' . rex::getTablePrefix() . 'fc_article_slice WHERE -1');
} catch (rex_sql_exception $e) {
    rex_logger::logException($e);
}

$content .= 'Wartende Blöcke: ' . $sql->getRows() . '</br>' . PHP_EOL;

try {
    $sql->setQuery('SELECT id FROM ' . rex::getTablePrefix() . 'fc_media WHERE -1');
} catch (rex_sql_exception $e) {
    rex_logger::logException($e);
}

$content .= 'Wartende Medien: ' . $sql->getRows() . '</br>' . PHP_EOL;

$fragment = new rex_fragment();
$fragment->setVar('title', 'Aktuelle Copy Warteschlange', false);
$fragment->setVar('body', $content, false);
try {
    echo $fragment->parse('core/page/section.php');
} catch (rex_exception $e) {
    rex_logger::logException($e);
}

$buttons = [];

$n = [];
$n['url'] = rex_url::backend() . 'index.php?page=ff_copy_tool/copy&func=copy';
$n['label'] = 'Artikel übernehmen';
$n['attributes']['class'] = ['btn-primary'];

$buttons[] = $n;

$fragment = new rex_fragment();
$fragment->setVar('buttons', $buttons, false);
try {
    $content = $fragment->parse('core/buttons/button_group.php');
} catch (rex_exception $e) {
    rex_logger::logException($e);
}

$fragment = new rex_fragment();
$fragment->setVar('title', 'Tools', false);
$fragment->setVar('body', $content, false);
try {
    echo $fragment->parse('core/page/section.php');
} catch (rex_exception $e) {
    rex_logger::logException($e);
}
