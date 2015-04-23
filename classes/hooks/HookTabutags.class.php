<?php

class PluginTabutags_HookTabutags extends Hook
{
    public function RegisterHook()
    {
        $this->AddHook('check_topic_fields', 'HookCheckTopicFields');
    }

    public function HookCheckTopicFields($aParam)
    {
        $aTag = explode(',', getRequestStr('topic_tags'));
        foreach ($aTag as $sTag) {
            $sTag = trim($sTag, "\r\n\t\0\x0B .");

            // Проверка на теги разрешенные только администраторам
            if (in_array($sTag, Config::Get('plugin.tabutags.admin_tags'))
                AND !$this->User_GetUserCurrent()->isAdministrator()
            ) {
                $sError = $this->Lang_Get(
                    'plugin.tabutags.error_you_have_no_right',
                    array(
                        'tag_name' => $sTag
                    )
                );
                $this->Message_AddError($sError, $this->Lang_Get('error'));
                $aParam['bOk'] = false;

                return false;
            }

            // Проверка на недопустимые теги
            if (in_array($sTag, Config::Get('plugin.tabutags.tabu_tags'))) {
                $sError = $this->Lang_Get(
                    'plugin.tabutags.error_is_tabu_tag',
                    array(
                        'tag_name' => $sTag
                    )
                );
                $this->Message_AddError($sError, $this->Lang_Get('error'));
                $aParam['bOk'] = false;

                return false;
            }
        }

        return true;
    }
}
