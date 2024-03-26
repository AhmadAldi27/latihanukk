<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px; solid black;
            margin-left: auto;
            margin-right: auto;
        }
        input[type="submit"]{
            width:99%;
            padding: 20px 4opx;
            background: blue;
            color: white;
            font-size: 30px;
            border: none;
            border-radius:10px;
            box-shadow: 6px 6px 6px rgba(0,0,0,8);
        }
        input[type="number"]{
            padding: 20px 30px;
            font-size: 24px;
            font-weight:bold;
            text-align:center;
            border:none;
            border-radius:5px;
            border:2px solid black;
        }
        input[type="text"]{
            padding: 20px 30px;
            font-size: 24px;
            font-weight:bold;
            text-align:center;
            border:none;
            border-radius:5px;
            border:2px solid black;
        }
        input[type="reset"]{
            width:99%;
            padding: 20px 40px;
            background-color: orange;
            color:white;
            font-size: 30px;
            border:none;
            border-radius:10px;
            box-shadow: 6px 6px 6px rgba(0,0,0,8);
        }
        </style>
</head>
<body>
    <center>
    <h2>KALKULATOR SEDERHANA</h2>
   <form action ="{{route('hitung1')}}" method="post">
   @csrf
   <table>
   
   <td colspan='2'><input type="number" name="angka1" id=""></td>
   <td colspan='2'><input type="number" name="angka2" id=""></td>
    
    <tr>
        <td colspan='4'><center><input type="text" name="hasil" id ></center></td>
    </tr>
    <tr>
        <td><input type="submit" name="op" value="tambah"></td>
        <td><input type="submit" name="op" value="kurang"></td>
        <td><input type="submit" name="op" value="kali"></td>
        <td><input type="submit" name="op" value="bagi"></td>
    </tr>
    <tr>
        <td colspan='4'><input type="submit" name="op" value="reset"></td>
    </tr>
    </table>
    </form>

</body>
</html>