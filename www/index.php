<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="./css/index.css">
  <link rel="stylesheet" type="text/css" href="./css/meat.css">
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
             <table id="table_meat" border="1">
                 <th>牛ミンチ</th><th>300(g)</th>
               </tr>
               <tr>
                 <th>鶏もも</th><th>300(g)</th>
               </tr>
               <tr>
                 <th>豚肩ロース</th><th>300(g)</th>
               </tr>
             </table>
           </p>
         </div>
         <div id="tab2" class="tab">
           <p>(タブ2の中身。HTMLタグも記述可能です。)</p>
        </div>
        <div id="tab3" class="tab">
           <p>(タブ3の中身。いくつでも増やせます。)</p>
        </div>
        <div id="tab4" class="tab">
           <p>(タブ4の中身。いくつでも増やせます。)</p>
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
