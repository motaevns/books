<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.09.13
 * Time: 20:39
 */

class Migration_Add_book_author extends CI_Migration
{
    public function up ()
    {
        /** @var CI_DB_forge $dbforge */
        $dbforge = $this->dbforge;
        $dbforge->add_field(array(
            'key_book' => array(
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => TRUE,
            ),
            'key_author' => array(
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => TRUE,
            ),

        ));
        $dbforge->create_table("book_rel_author");
    }

    public  function down ()
    {
        /** @var CI_DB_forge $dbforge */
        $dbforge = $this->dbforge;
        $dbforge->drop_table("book_rel_author");
    }
} 