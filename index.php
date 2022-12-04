<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css">

</head>
<body>
  <form action="sandmail.php" method="POST">
    <select name="subject">
      <option disabled selected>Тема письма</option>
      <option value="1">Вопрос по уроку</option>
      <option value="2">Личный вопрос</option>
      <option value="3">Благодарность</option>
    </select>
    <input type="email" name="email" placeholder="Введите ваш email" maxlength="50" required>
    <textarea name="message" placeholder="Введите сообщение" maxlength="150" required></textarea>
    <img src="./img/capcha.jpg" alt="Введите код, указанный на картинке">
    <input type="text" name="capcha" placeholder="Введите текст с картинки" maxlength="5" required>
    <input type="submit" value="Отправить письмо">
  </form>
</body>
</html>