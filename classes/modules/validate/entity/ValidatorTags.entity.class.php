<?php

class PluginTabutags_ModuleValidate_EntityValidatorTags extends ModuleValidate_EntityValidatorTags
{
    public function validate($sValue)
    {
        if ($return = parent::validate($sValue) === true) {
            $aTags = explode($this->sep, trim($sValue, "\r\n\t\0\x0B ."));
            $aTagBlackList = is_array(Config::Get('plugin.tabutags.tag_black_list')) ?
                Config::Get('plugin.tabutags.tag_black_list') :
                array();
            $aTagAdminList = is_array(Config::Get('plugin.tabutags.tag_admin_list')) ?
                Config::Get('plugin.tabutags.tag_admin_list') :
                array();

            $aTagBlackListSet = array();
            $aTagAdminListSet = array();
            foreach ($aTags as $sTag) {
                $sTag = trim($sTag, "\r\n\t\0\x0B .");
                if (in_array($sTag, $aTagBlackList)) {
                    $aTagBlackListSet[] = $sTag;
                }

                if (in_array($sTag, $aTagAdminList) && !$this->User_GetIsAdmin(false)) {
                    $aTagAdminListSet[] = $sTag;
                }
            }

            if ((count($aTagBlackListSet) > 0) && (count($aTagAdminListSet) == 0)) {
                return $this->getMessage($this->Lang_Get('plugin.tabutags.messages.black_list_tags', null, false), 'msg',
                    array('black_list_tags' => implode(', ', $aTagBlackListSet)));
            } elseif ((count($aTagAdminListSet) > 0) && (count($aTagBlackListSet) == 0)) {
                return $this->getMessage($this->Lang_Get('plugin.tabutags.messages.admin_list_tags', null, false), 'msg',
                    array('admin_list_tags' => implode(', ', $aTagAdminListSet)));
            } elseif ((count($aTagAdminListSet) > 0) && (count($aTagBlackListSet) > 0)) {
                return $this->getMessage(
                    $this->Lang_Get('plugin.tabutags.messages.black_and_admin_list_tags', null, false), 'msg',
                    array('black_list_tags' => implode(', ', $aTagBlackListSet),
                        'admin_list_tags' => implode(', ', $aTagAdminListSet))
                    );
            }

            return $return;
        }

        return $return;
    }
}
