<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 검색</title>
    <style type="text/css">
        body, input, button{font-size: 20px;}
        fieldset {
            display:inline-flex;
            justify-content: center;
            align-items: center;
            align-content:space-between
        }
        legend .idsearch {
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
        }
        
        input {
            width: 200px;
            height: 50px;
            border-radius: 10px;
            border: 1px solid;
        }
        button {
            width: 70px;
            height: 50px;
            background-color: green;
            color: white;
            border-radius: 10px;
            border:0px  solid;
        }
    </style>

</head>
<body>
    <form name="id_search_form" action="id_search_result.php" method="get">
        <fieldset>
            <legend id="idsearch">아이디 검색</legend>
            <p id="contents">
                <label for="user_id">입력</label>
                <input type="text" name="user_id" id="user_id">
                <button type="submit">검색</button>
            </p>
        </fieldset>
    </form>
    
</body>
</html>