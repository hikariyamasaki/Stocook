<?php
/**
 * MyDBクラス
 */
class StocksModel
{
  public $mysqli; // mysqliオブジェクト
  public $mode;   // 戻り値の形式："json" or "array"（連想配列）
  public $count;  // SQLによって取得した行数 or 影響した行数

  // コンストラクタ(オブジェクトを生成した時に最初に呼ばれる関数)
  function __construct()
  {
    //DB接続
    $this->mysqli = new mysqli('mysql:3306', 'root', 'pass', 'stocook_db');
    if($mysqli->connect_error){
      echo $mysqli->connect_error;
      exit();
    }else {
      $this->mysqli->set_charset("utf8");
    }
  }

  // デストラクタ(オブジェクトを破棄したときに呼ばれる関数)
  function __destruct()
  {
    //DB 接続を閉じる
    $this->mysqli->close();
  }

  //SQL実行 (SELECT/INSERT/UPDATE/DELETE に対応）
  public function query($sql)
  {
    //SQL実行
    $result = $this->mysqli->query($sql);
    // Error
    if ($result === FALSE){
      // エラー内容
      $error = $this->mysqli->errorno.": ".$this->mysqli->error;
      // 戻り値
      $rtn = array(
        'status' => FALSE,
        'result' => "",
        'error' => $error,
      );
      return $rtn;
    }

    // SELECT以外はobjectが返って来ず, TRUEのみが返ってくる
    if($result === TRUE){
      // 戻り値
      $rtn = array(
          'status' => TRUE,
          'result' => "",
          'error'  => ""
      );
      return $rtn;
    }
    //SELECT文
    else {
      // SELECTした行数を格納
      $this->count = $result->num_rows;
      // 連想配列に格納
      $data = array();
      while ($row = $result->fetch_assoc()) {
          $data[] = $row;
      }
      // 結果セットを閉じる
      $result->close();
      // 戻り値
      $rtn = array(
          'status' => TRUE,
          'count'  => $this->count,
          'result' => $data,
          'error'  => ""
      );
      return $rtn;
    }
  }

    // 文字列をエスケープする
  function escape($str)
  {
      return $this->mysqli->real_escape_string($str);
  }

}

 ?>
