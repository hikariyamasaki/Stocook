<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="indextwo.css">
  <link rel="stylesheet" type="text/css" href="index.css">
 </head>
<body>
    <h1>Stocook!</h1>
    <div class="select">
      <h2 class="stocks">Stocks</p>
       <a class="btn meat" href="./meat.html" style="text-decoration:none;">お肉</a>
       <a class="btn vegetables">野菜</a>
       <a class="btn fish">魚</a>
       <a class="btn others">その他</a>
         <!-- 折りたたみ展開ボタン -->
          <div onclick="obj=document.getElementById('menu1').style; obj.display=(obj.display=='none')?'block':'none';">
            <a style="cursor:pointer;" class="add-food">+ add</a>
          </div>
          <!--// 折りたたみ展開ボタン -->

          <!-- ここから先を折りたたむ -->
          <div id="menu1" style="display:none;clear:both;">

          <!--この部分が折りたたまれ、展開ボタンをクリックすることで展開します。-->
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
          <!--// ここまでを折りたたむ -->
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
