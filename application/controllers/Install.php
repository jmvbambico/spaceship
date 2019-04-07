<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Install extends CI_Controller {
	public function index()
	{
    try {
      $database = 'spaceship';

      $this->load->dbutil();

      if ($this->dbutil->database_exists($database)) throw new existingDatabaseException($database);
      else {
        $this->load->dbforge();
        $this->dbforge->create_database($database);
        $this->db->query('use ' . $database);

        $fields = [
          'id' => [
            'type'           => 'INT',
            'constraint'     => 8,
            'unsigned'       => TRUE,
            'auto_increment' => TRUE
          ],
          'name' => [
            'type'       => 'VARCHAR',
            'constraint' => 200
          ],
          'email' => [
            'type'       => 'VARCHAR',
            'constraint' => 200,
            'unique'     => TRUE
          ],
          'age' => [
            'type' => 'TINYINT',
            'constraint' => 3,
            'unsigned'   => TRUE,
          ],
          'gender' => [
            'type' => 'TINYINT',
            'constraint' => 1,
            'unsigned'   => TRUE,
            'default'    => 0,
          ],
          'description' => [
            'type' => 'TEXT',
          ],
          'photo' => [
            'type'       => 'VARCHAR',
            'constraint' => 100,
            'null'       => TRUE,
          ],
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('abductees', TRUE);

        echo 'Installation complete.<br /><br />';
        echo 'You may now proceed to the <a href="' . base_url() . '">homepage</a>.';
      }
		}
		catch(existingDatabaseException $e) {
      echo 'A previous installation of this application has already been completed.<br />You may wish to delete this installation controller at: <b><i>application/controllers/Install.php</i></b><br /><br />';
      echo 'Proceed to the <a href="' . base_url() . '">homepage</a>.';
      // echo $e->errorMessage();
		}
  }
}

class existingDatabaseException extends Exception {
  public function errorMessage() {
    $errorMsg = '<b>'.$this->getMessage().'</b> database already exists.';
    return $errorMsg;
  }
}
