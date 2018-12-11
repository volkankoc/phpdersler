<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="islem.php" method="GET">
    <label for="c1">Çilek</label>
    <input type="checkbox" name="meyve[]" id="c1" value="Çilek">
    <label for="c2">Kiraz</label>
    <input type="checkbox" name="meyve[]" id="c2" value="Kiraz">
    Muz<input type="checkbox" name="meyve[]" id="" value="Muz">
    Erik<input type="checkbox" name="meyve[]" id="" value="Erik">
    <input type="submit" value="Gönder">
    </form>
</body>
</html>