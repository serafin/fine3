<?php

namespace CloudMsg\Module;

class App
{
    
    public function db()
    {
        $db = $this->app->db;

        $db(array(
            'CloudMsg' => function() use ($db) {
                return $db->CloudMsg = Module\App\Db\Table\CloudMsg::newInstance()->db($db);
            },
            'CloudMsgToken' => function() use ($db) {
                return $di->db->CloudMsg = \Fine\Db\MySQL\Table::newInstance()
                    ->db($db)
                    ->table('cloudMsgToken')
                    ->field(array('cloudMsgToken_id', 'CloudMsgToken_token'/* , ...*/));
            }
        ));
    }
    
    protected function _module()
    {
        $this->_module = new 
    }
    
}
