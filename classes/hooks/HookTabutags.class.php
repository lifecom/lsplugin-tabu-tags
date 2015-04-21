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
            $sTag = trim($sTag);
            if (in_array($sTag, Config::Get('plugin.tabutags.tabu_tags')) AND !$this->User_GetUserCurrent()->isAdministrator()) {
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
        }

        return true;
    }
}
