<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.09.13
 * Time: 20:39
 */

class Migration_Add_author extends CI_Migration
{
    public function up ()
    {
        /** @var CI_DB_forge $dbforge */
        $dbforge = $this->dbforge;
        $dbforge->add_field("id");
        $dbforge->add_field(array(
            'first_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
        ));
        $dbforge->create_table("author");
    }

    public  function down ()
    {
        /** @var CI_DB_forge $dbforge */
        $dbforge = $this->dbforge;
        $dbforge->drop_table("author");
    }
} 