<?php

  class QueryBuilder{


    protected static $pdo;

    public function __construct($pdo)
    {
      self::$pdo = $pdo;
    }
    public function selectAll($table)
    {
      $statement = self::$pdo->prepare("SELECT * FROM {$table}");

      $statement->execute();

      return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectWithId($table, $id)
    {
      $statement = self::$pdo->prepare("SELECT * FROM {$table} WHERE id={$id}");

      $statement->execute();

      return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($table, $parameter)
    {
      $sql = sprintf(
        'INSERT INTO %s (%s) VALUES (%s)',
        $table,
        implode(',', array_keys($parameter)),
        ':'.implode(', :', array_keys($parameter))
      );
      // die(var_dump($sql));
      try {
        $statement = self::$pdo->prepare($sql);
        $statement->execute($parameter);
      } catch (Exception $e) {
        die('Something when wrong');
      }
    }
    
    public function update($table, $parameter, $id)
    {
      $cols = array();

      foreach($parameter as $key=>$val) {
          $cols[] = "$key = '$val'";
      }
      $sql = sprintf("UPDATE %s SET %s WHERE id=%s", $table, implode(', ', $cols), $id );

      try {
        $statement = self::$pdo->prepare($sql);
        $statement->execute();
      } catch (Exception $e) {
        die('Update when wrong');
      }
    }

    public function delete($table, $id)
    {
        $sql = sprintf("DELETE FROM %s WHERE id = %s", $table, $id);
        try {
          $statement = self::$pdo->prepare($sql);
          $statement->execute();
        } catch (Exception $e) {
          die('Delete when wrong');
        }
    }
    
  }
 ?>
