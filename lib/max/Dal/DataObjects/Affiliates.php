<?php
/**
 * Table Definition for affiliates
 */
require_once 'DB_DataObjectCommon.php';

class DataObjects_Affiliates extends DB_DataObjectCommon 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'affiliates';                      // table name
    var $affiliateid;                     // int(9)  not_null primary_key auto_increment
    var $agencyid;                        // int(9)  not_null multiple_key
    var $name;                            // string(255)  not_null
    var $mnemonic;                        // string(5)  not_null
    var $comments;                        // blob(65535)  blob
    var $contact;                         // string(255)  
    var $email;                           // string(64)  not_null
    var $website;                         // string(255)  
    var $username;                        // string(64)  
    var $password;                        // string(64)  
    var $permissions;                     // int(9)  
    var $language;                        // string(64)  
    var $publiczones;                     // string(1)  not_null enum
    var $last_accepted_agency_agreement;    // datetime(19)  binary
    var $updated;                         // datetime(19)  not_null binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Affiliates',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
