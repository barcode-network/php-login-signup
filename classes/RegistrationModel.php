<?php
class RegistrationModel extends Model
{
    public function find(string $tablename, string $id)
    {
        
    }

    public function findall(string $tablename)
    {
        
    }

    public function add(string $tablename, array $fields)
    {
        $query = "INSERT INTO $tablename VALUES ('" . $fields['natl_id'] . "',
                                                 '{$fields['license_num']}',
                                                 '{$fields['first_name']}',
                                                 '{$fields['last_name']}',
                                                 '{$fields['email']}',
                                                 '{$fields['telephone'][0]}',
                                                 '{$fields['telephone'][1]}',
                                                 '{$fields['addr'][0]}',
                                                 '{$fields['parish']}')";
        $result = $this->sql->query($query);
        if ($this->sql->errno) {
            echo 'SQL Error occurred: ';
            echo $this->sql->error;
            exit();
        }
    }

    public function del(string $tablename, string $id)
    {
        
    }

    public function update(string $tablename, array $fields)
    {
        
    }
}