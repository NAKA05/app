<?php ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
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
        <h2 class="border-bottom">新規登録</h2>

        <form action="" method="post">
            <div class="form-group">
                <table>
                    <tr>
                        <th>名前：</th>
                        <td><input type="text" name="name" id="name" required> <span class="badge badge-danger">必須</span></td>
                    </tr>
                    <tr>
                        <th>分類：</th>
                        <td>
                            <select name="category" id="category" required>
                                <option value="食品">食品</option>
                                <option value="薬品">薬品</option>
                                <option value="災害用備蓄">災害用備蓄</option>
                                <option value="その他">その他</option>
                            </select>
                            <span class="badge badge-danger">必須</span>
                        </td>
                    </tr>
                    <tr>
                        <th>消費期限：</th>
                        <td><input type="date" name="deadline" id="deadline" required> <span class="badge badge-danger">必須</span></td>
                    </tr>
                    <tr>
                        <th>リマインド予定日：</th>
                        <td><input type="date" name="remind" id="remind" required> <span class="badge badge-danger">必須</span></td>
                    </tr>
                    <tr>
                        <th>備考：</th>
                        <td><textarea name="" id="" maxlength="100" rows="2" cols="50"></textarea></td>
                    </tr>
                </table>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-dark text-light">登録</button>
                <button type="button" class="btn btn-light text-dark" onclick="history.back();">戻る</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>