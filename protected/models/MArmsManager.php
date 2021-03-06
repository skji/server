<?php

/** 
* @file MArmsManager.php
* @brief
* @author Ji Shankai
* @version 1.0
* @date 2012-11-08
 */
class MArmsManager extends CActiveRecordBehavior
{
    private $_arms;

    public function initArms()
    {
        $arms = new MArms;
        $arms->playerId = $this->owner->playerId;
        $arms->armId = 1;
        $arms->level = 1;
        $arms->createTime = $this->owner->createTime;
        $arms->save();
    }

    public function getArms()
    {
        if (isset($this->_arms)) {
            return $this->_arms;
        }
        return $this->_arms = MArms::model()->findByPk($this->owner->playerId);
    }
}
