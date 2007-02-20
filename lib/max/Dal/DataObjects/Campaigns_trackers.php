<?php
/**
 * Table Definition for campaigns_trackers
 */
require_once 'DB_DataObjectCommon.php';

class DataObjects_Campaigns_trackers extends DB_DataObjectCommon 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'campaigns_trackers';              // table name
    var $campaign_trackerid;              // int(9)  not_null primary_key auto_increment
    var $campaignid;                      // int(9)  not_null multiple_key
    var $trackerid;                       // int(9)  not_null multiple_key
    var $viewwindow;                      // int(9)  not_null
    var $clickwindow;                     // int(9)  not_null
    var $status;                          // int(1)  not_null unsigned

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Campaigns_trackers',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
