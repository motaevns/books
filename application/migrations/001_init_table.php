<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.09.13
 * Time: 20:39
 */

class Migration_Init_table extends CI_Migration
{
    public function up ()
    {
        /** @var CI_DB_forge $dbforge */
        $dbforge = $this->dbforge;

        //book table
        $dbforge->add_field("id");
        $dbforge->add_field(array(
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'foto' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
        ));
        $dbforge->create_table("book");

        //fake book data
        $data = array(
            array(
                'id' => '1',
                'name' => 'PHP 5 в подлиннике',
                'foto' => '1013570_0.jpg'
            ),
            array(
                'id' => '2',
                'name' => 'PHP: объекты, шаблоны и методики программирования',
                'foto' => '1074794_0.jpg'
            ),
            array(
                'id' => '3',
                'name' => 'Java. Эффективное программирование',
                'foto' => '104605_0.jpg'
            ),
            array(
                'id' => '4',
                'name' => 'Perl отладчик. Карманный справочник',
                'foto' => '1013696_0.jpg'
            ),

        );
        $this->db->insert_batch('book', $data);


        //add table author
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

        //fake author data
        $data = array(
            array(
                'id' => '1',
                'first_name' => 'Дмитрий',
                'last_name' => 'Котеров'
            ),
            array(
                'id' => '2',
                'first_name' => 'Алексей',
                'last_name' => 'Костарев'
            ),
            array(
                'id' => '3',
                'first_name' => 'Мэтт',
                'last_name' => 'Зандстра'
            ),
            array(
                'id' => '4',
                'first_name' => 'Дмитрий',
                'last_name' => 'Ляпин'
            ),

        );
        $this->db->insert_batch('author', $data);


        //add table heading
        $dbforge->add_field("id");
        $dbforge->add_field(array(
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
        ));
        $dbforge->create_table("heading");

        //fake heading data
        $data = array(
            array(
                'id' => '1',
                'name' => 'PHP',
            ),
            array(
                'id' => '2',
                'name' => 'JAVA',
            ),
            array(
                'id' => '3',
                'name' => 'Perl',
            ),
        );
        $this->db->insert_batch('heading', $data);

        //add table book_rel_author
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

        //fake data
        $data = array(
            array(
                'key_book' => 1,
                'key_author' => 1,
            ),
            array(
                'key_book' => 1,
                'key_author' => 2,
            ),
            array(
                'key_book' => 3,
                'key_author' => 3,
            ),
            array(
                'key_book' => 4,
                'key_author' => 1,
            ),
            array(
                'key_book' => 4,
                'key_author' => 2,
            ),
            array(
                'key_book' => 4,
                'key_author' => 4,
            ),

        );
        $this->db->insert_batch('book_rel_author', $data);

        // add book_rel_heading table
        $dbforge->add_field(array(
            'key_book' => array(
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => TRUE,
            ),
            'key_heading' => array(
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => TRUE,
            ),

        ));
        $dbforge->create_table("book_rel_heading");

        //fake data
        $data = array(
            array(
                'key_book' => 1,
                'key_heading' => 1,
            ),
            array(
                'key_book' => 2,
                'key_heading' => 1,
            ),
            array(
                'key_book' => 3,
                'key_heading' => 2,
            ),
            array(
                'key_book' => 4,
                'key_heading' => 3,
            ),

        );
        $this->db->insert_batch('book_rel_heading', $data);

    }

    public  function down ()
    {
        /** @var CI_DB_forge $dbforge */
        $dbforge = $this->dbforge;

        $dbforge->drop_table("book");
        $dbforge->drop_table("author");
        $dbforge->drop_table("heading");
        $dbforge->drop_table("book_rel_author");
        $dbforge->drop_table("book_rel_heading");
    }
} 