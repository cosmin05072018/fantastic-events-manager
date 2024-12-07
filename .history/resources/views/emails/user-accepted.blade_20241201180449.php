<!DOCTYPE html>
<html>
<head>
    <title>Cont Aprobat</title>
</head>
<body>
    <p>Bună, {{ $userName }}!</p>
<p>Contul tău a fost aprobat. Detaliile contului tău sunt:</p>
<ul>
    <li>Link de conectare: {{ $link }}</li>
    <li>Email: {{ $email }}</li>
    <li>Parola: {{ $password }}</li>
</ul>
<p>Te poți autentifica cu aceste date.</p>

</body>
</html>
