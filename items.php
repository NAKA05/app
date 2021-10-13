<?php ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在庫一覧</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <header class="text-white bg-dark"><h1>消費期限管理</h1></header>
        <br>
        <h2>在庫一覧</h2>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th class="col-1">名前</th>
                    <th class="col-1">分類</th>
                    <th class="col-2">消費期限</th>
                    <th class="col-2">リマインド予定日</th>
                    <th class="col-2">備考</th>
                    <th class="col-1">使用済</th>
                    <th class="col-2">使用日時</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>牛乳</td>
                    <td>食品</td>
                    <td>2021/01/15</td>
                    <td>2021/01/14</td>
                    <td></td>
                    <td>〇</td>
                    <td>2021/01/13</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>うどん</td>
                    <td>食品</td>
                    <td>2021/01/24</td>
                    <td>2021/01/21</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>非常用飲料水</td>
                    <td>災害用備蓄</td>
                    <td>2024/12/31</td>
                    <td>2024/11/30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>鎮痛剤</td>
                    <td>薬品</td>
                    <td>2023/03/31</td>
                    <td>2023/02/01</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>じゃがいも</td>
                    <td>食品</td>
                    <td>2021/01/20</td>
                    <td>2021/01/17</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <br>
        <button type="button" class="btn btn-dark text-light" onclick="location.href='registration.php';">新規に登録する</button>
        <button type="button" class="btn btn-light text-dark" onclick="history.back();">戻る</button>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>