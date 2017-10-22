<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="./css/index.css">
  <link rel="stylesheet" type="text/css" href="./css/tabs.css">
 </head>
<body>
    <h1>Stocook!</h1>
    <div class="select">
      <h2 class="stocks">Stocks</p>
        <div class="add-area">Add to stock
          <form method="get" action="input_radio.html">
            <p class="select-type">入力必須：
              <label><input type="radio" name="example" value="お肉" required>お肉</label>
              <label><input type="radio" name="example" value="野菜">野菜</label>
              <label><input type="radio" name="example" value="魚">魚</label>
              <label><input type="radio" name="example" value="その他">その他</label>
            </p>
          </form>
          <form name="input_area">
           <a class="food">食材名：<input type="text" name="food_name"></a>
           <a class="amount">量：<input type="text" name="amount"></textarea></a>
           <input class="add_btn" type="button" value="追加" onclick="okPushed()">
         </form>
        </div>
       <!-- <a class="btn meat" href="./meat.html" style="text-decoration:none;">お肉</a>
       <a class="btn vegetables">野菜</a>
       <a class="btn fish">魚</a>
       <a class="btn others">その他</a> -->
       <script type="text/javascript">
       //選択した1つのタブだけを表示し、他のタブは非表示にする
       function ChangeTab(tabname) {
          // 全部消す
          document.getElementById('tab1').style.display = 'none';
          document.getElementById('tab2').style.display = 'none';
          document.getElementById('tab3').style.display = 'none';
          document.getElementById('tab4').style.display = 'none';
          // 指定箇所のみ表示
          document.getElementById(tabname).style.display = 'block';
       }
       </script>
       <div class="tabbox">
         <p class="tabs">
           <a href="#tab1" class="tab1" onclick="ChangeTab('tab1'); return false;">お肉</a>
           <a href="#tab2" class="tab2" onclick="ChangeTab('tab2'); return false;">野菜</a>
           <a href="#tab3" class="tab3" onclick="ChangeTab('tab3'); return false;">魚</a>
           <a href="#tab4" class="tab4" onclick="ChangeTab('tab4'); return false;">その他</a>
         </p>
         <div id="tab1" class="tab">
           <p>
             <table class="meats">
               <?php
                require 'test.php';
                for ($i=0; $i < 3; $i++) {
                  echo "<tr><th scope=\"row\">" .$meat_name[$i]["name"] . "</th><td>" .$meat_name[$i]["value"] . "</td></tr>";
                }
               ?>
            </table>
           </p>
         </div>
         <div id="tab2" class="tab">
           <p>
             <table class="vegetables">
               <?php
                require 'test.php';
                for ($i=0; $i < 3; $i++) {
                  echo "<tr><th scope=\"row\">" .$vegetable_name[$i]["name"] . "</th><td>" .$vegetable_name[$i]["value"] . "</td></tr>";
                }
               ?>
            </table>
           </p>
        </div>
        <div id="tab3" class="tab">
           <p>
             <table class="fishes">
               <?php
                  require 'test.php';
                  for ($i=0; $i < 3; $i++) {
                    echo "<tr><th scope=\"row\">" .$fish_name[$i]["name"] . "</th><td>" .$fish_name[$i]["value"] . "</td></tr>";
                }
                ?>
              </table>
           </p>
        </div>
        <div id="tab4" class="tab">
           <p>
             <table class="others">
               <?php
                  require 'test.php';
                  for ($i=0; $i < 3; $i++) {
                    echo "<tr><th scope=\"row\">" .$other_name[$i]["name"] . "</th><td>" .$other_name[$i]["value"] .  "</td></tr>";
                  }
                ?>
              </table>
           </p>
        </div>
        <script type="text/javascript">
        // デフォルトのタブを選択
        ChangeTab('tab1');
        </script>
       </div>

    </div>

    <div class="recipes">
      <h2 class="recipe-list">Recipes</h2>
      <div class="recipe-wrapper">
        <div class="recipe recipe_1">
          <img src="./photos/img3.JPG" width="150" height="100">
          <a class="recipe-title" href="https://cookpad.com/recipe/3941912">ハンバーグ</a>
        </div>
        <div class="recipe recipe_2">
          <img src="./photos/img3.JPG" width="150" height="100">
          <a class="recipe-title" href="https://cookpad.com/recipe/3941912">ハンバーグ</a>
        </div>
        <div class="recipe recipe_3">
          <img src="./photos/img3.JPG" width="150" height="100">
          <a class="recipe-title" href="https://cookpad.com/recipe/3941912">ハンバーグ</a>
        </div>
      </div>
    </div>
</body>
</html>
