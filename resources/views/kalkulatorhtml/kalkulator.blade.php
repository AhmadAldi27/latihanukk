<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Manual</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/css/bootstrap.min.css">

    <style type="text/css">
        table{
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
            background-color: rgb(150, 150, 150);
        }
        input[type="text"]
        {
            text-align: center;
            padding: 20px 30px;
            font-size: 30px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            border: 1px solid black;
            box-shadow: 6px 6px 6px rgba(0, 0, 0, 0.8);
        }
        input[type="button"]
        {
            position: relative;
            width: 100%;

            padding: 20px 40px;
            background-color: red;
            color: rgb(255, 255, 255);
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 0px;
            box-shadow: 6px 6px 6px rgba(0, 0, 0, 0.8);
        }
        input[type="reset"]
        {
            width: 100%;
            padding: 20px 40px;
            background-color: red;
            color: white;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 0px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
        }
        .siswa{
            font-family: 'Times New Roman';
            font-size: 24px;
            color: white;
        }
        .samadengan{
            height: 150px;
        }
    </style>
</head>
<body>
    <center>
    <form action="" method="post" name="form1">
        <table border="0">
            <tr align="center">
                <td colspan="4"><h1 style="color: white">Kalkulator</h1></td>
            </tr>
            <tr align="center">
                <td colspan="4"><input type="text" name="txt1" readonly></td>
            </tr>
            <tr>
                <td colspan="2"><input type="reset" value="c"></td>
                <td><input type="button" value="*" onclick="form1.txt1.value+='*'"></td>
                <td><input type="button" value="/" onclick="form1.txt1.value+='/'"></td>
            </tr>
            <tr>
                <td><input type="button" value="9" onclick="form1.txt1.value+='9'"></td>
                <td><input type="button" value="8" onclick="form1.txt1.value+='8'"></td>
                <td><input type="button" value="7" onclick="form1.txt1.value+='7'"></td>
                <td><input type="button" value="+" onclick="form1.txt1.value+='+'"></td>
            </tr>
            <tr>
                <td><input type="button" value="6" onclick="form1.txt1.value+='6'"></td>
                <td><input type="button" value="5" onclick="form1.txt1.value+='5'"></td>
                <td><input type="button" value="4" onclick="form1.txt1.value+='4'"></td>
                <td><input type="button" value="-" onclick="form1.txt1.value+='-'"></td>
            </tr>
            <tr>
                <td><input type="button" value="3" onclick="form1.txt1.value+='3'"></td>
                <td><input type="button" value="2" onclick="form1.txt1.value+='2'"></td>
                <td><input type="button" value="1" onclick="form1.txt1.value+='1'"></td>
                <td rowspan="2"><input type="button" class="samadengan" value="=" onclick="form1.txt1.value=eval(form1.txt1.value)"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="button" value="0" onclick="form1.txt1.value+='0'"></td>
                <td><input type="button" value="." onclick="form1.txt1.value+='.'"></td>
            </tr>
            <tr>
                <td colspan="4" class="siswa">
                    
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>

