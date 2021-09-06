<?php

class rex_cronjob_ff_copy extends rex_cronjob
{
    /**
     * {@inheritDoc}
     */
    public function execute()
    {
        $errors = [];
        if (!FfCopyTool::runsOnTarget()){
            $errors[] = 'Something went wrong';
        };

        return empty($errors);
    }

    public function getTypeName()
    {
        return rex_i18n::msg('cronjob_ff_copy');
    }
}
