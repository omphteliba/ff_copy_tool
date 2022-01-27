<?php

if (rex::getUser()->hasPerm('ff_copy_tool[]')) {
    $addon = rex_addon::get('ff_copy_tool');
    $sites = $addon->getConfig('slave_sites');

    $fct = new FfCopyTool();
    $sites = $fct::getChildren($sites);

    if ('extras' === rex_post('fct_function')) {
        // Artikel kopieren
        $copyId = rex_request('article_id');
        $copyTarget = rex_request('site_id');

        $result = $fct->copyArticle($copyId, $copyTarget);

        if($result){
            echo rex_view::success($addon->i18n('copy_success'));
        } else {
            echo rex_view::warning($addon->i18n('copy_error') . ' ( ' . $fct->getErrorMsg() . ' )');
            rex_logger::logError(2, 'FF Copy Tool - Something went wront with the API call: destination=' . $copyTarget . ' / id=' . $copyId, __FILE__, __LINE__);
        }
    }

    $count = 0;
    $dropdown = '';
    foreach ($sites as $site) {
        if ('' !== $dropdown) {
            $dropdown .= ', ';
        }
        $dropdown .= $site . '=' . $count;
        ++$count;
    }

    if (isset($params)) {
        foreach (['article_id', 'clang', 'ctype'] as $type) {
            if (!isset($$ype)) {
                if (isset($params[$type])) {
                    $$type = $params[$type];
                } else {
                    throw new rex_exception('Error: ' . $type . ' not set.');
                }
            }
        }
    }

    $yform = new rex_yform();
    $yform->setObjectparams('form_id', 'fct-extras');
    $yform->setObjectparams('form_name', 'fct-extras');
    $yform->setObjectparams('real_field_names', true);
    $yform->setObjectparams('submit_btn_label', $addon->i18n('ff_copy_tool_extras_button'));
    $yform->setHiddenField('fct_function', 'extras');

    $yform->setObjectparams('form_action', rex_url::backendController([
        'page' => 'content/edit',
        'article_id' => $article_id,
        'clang' => $clang,
        'ctype' => $ctype,
    ], false));
    $yform->setValueField('choice', ['site_id', rex_i18n::msg('ff_copy_tool_extras_website'), $dropdown]);

    return $yform->getForm();
}
