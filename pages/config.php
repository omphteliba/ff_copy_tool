<?php
/**
 * Created by PhpStorm.
 * User: oliver.hoerold
 * Date: 11.10.2016
 * Time: 12:07.
 */

$content = '';

if (rex_post('config-submit', 'boolean')) {
    $this->setConfig(rex_post('config', [
        ['slave_sites', 'string'],
        ['slave_token', 'string'],
    ]));

    $content .= rex_view::info($this->i18n('config_saved'));
}

$content .= '<div class="rex-form">';
$content .= '  <form action="' . rex_url::currentBackendPage() . '" method="post">';
$content .= '    <fieldset>';

$formElements = [];

$n = [];
$n['label'] = '<label for="rex-omi_sync-config-sites">' . $this->i18n('config_sites') . '</label>';
$n['field'] = '<textarea id="rex-omi_sync-config-sites" name="config[slave_sites]" rows="5">' . $this->getConfig('slave_sites') . '</textarea>';
$formElements[] = $n;

$n = [];
$n['label'] = '<label for="rex-omi_sync-config-sites">' . $this->i18n('config_token') . '</label>';
$n['field'] = '<textarea id="rex-omi_sync-config-token" name="config[slave_token]" rows="5" cols="40">' . $this->getConfig('slave_token') . '</textarea>';
$formElements[] = $n;

$fragment = new rex_fragment();
$fragment->setVar('elements', $formElements, false);
try {
    $content .= $fragment->parse('core/form/form.php');
} catch (rex_exception $e) {
    rex_logger::logException($e);
}

$content .= '    </fieldset>';

$content .= '    <fieldset class="rex-form-action">';

$formElements = [];

$n = [];
$n['field'] = '<input type="submit" name="config-submit" value="' . $this->i18n('config_save') . '" ' . rex::getAccesskey($this->i18n('save_button'), 'save') . '>';
$formElements[] = $n;

$fragment = new rex_fragment();
$fragment->setVar('elements', $formElements, false);
try {
    $content .= $fragment->parse('core/form/submit.php');
} catch (rex_exception $e) {
    rex_logger::logException($e);
}

$content .= '    </fieldset>';
$content .= '  </form>';
$content .= '</div>';

$fragment = new rex_fragment();
$fragment->setVar('class', 'edit');
$fragment->setVar('title', $this->i18n('config'));
$fragment->setVar('body', $content, false);
try {
    echo $fragment->parse('core/page/section.php');
} catch (rex_exception $e) {
    rex_logger::logException($e);
}
