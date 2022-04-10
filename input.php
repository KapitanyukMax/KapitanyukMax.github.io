<html>
<head>
    <meta charset="UTF-8">
    <title>Сайт web-студії "WEB-DECO"</title>
    <!-- ============================ CSS Стилі ============================ -->
    <style>
        .shadowtext
        {
            text-shadow: 1px 3px 2px white, 0 0 1em red;
            color: #210042;
            font-size: 3em;
        }
    </style>
    <!-- ============================ JAVASCRIPT ============================ -->
    <script src="js/clock1.js"></script>
    <script type="text/javascript">
        function send()
        {
            var valid = true;
            var elements = document.froms[0].elements;
            for (var i = 0; i < document.forms[0].length; i++)
            {
                if (elems[i].getAttribute('type') == 'text' ||
                    elems[i].getAttribute('type') == 'password' ||
                    elems[i].getAttribute('type') == 'email')
                    {
                        if (elems[i].value == '')
                        {
                            elems[i].style.border = '2px solid red';
                            valid = false;
                        }
                    }
            }
            if (!valid)
            {
                alert('Заповніть всі поля!!!');
                return false;
            }
        }
    </script>
    <script>
        findow.onload = function()
        {
            setInterval(clockPainting(), 1000);
        }
    </script>
    <!-- ==================================================================== -->
</head>
<body background="images/bg.jpg">
    <!-- ============================ Каркас сайта ============================ -->
    <table border="1" align="center" cellpadding="10">
        <tr>
            <td background="images/bg-3.jpg" colspan="2" height="150" align="right">
                <font size="5">
                    <h1 class="shadowtext">Сайт web-студії "Web-DECO"</h1>
                </font>
            </td>
        </tr>
            <tr>
            <td colspan="2">
                <!-- Горизонтальне меню -->
                <font size="4"><b>
                    <a href="#">Головна</a>&nbsp;&nbsp;
                    <a href="#">Фотогалерея</a>&nbsp;&nbsp;
                    <a href="#">Телефони</a>&nbsp; &nbsp;
                    <a href="#">Статистика</a>&nbsp; &nbsp;
                    <a href="#">Зареєстровані</a></b>
                </font>
            </td>
        </tr>
        <tr>
            <td width="30%" valign="top">
                <center><canvas id="canvas" hieght="120" width="120"></canvas></center>
                <hr>
                <font size="5" color="navy"><h2>Новини</h2></font>
                <font size="5" >
                    <ul>
                        <li><a href="#">Сайт будівельної компанії </a></li>
                        <li><a href="#">Сайт ТМ "Новашкола" </a></li>
                        <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                        <li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
                        <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li><br>
                        <p align="right"><a href="#">інші...</a></p>
                    </ul>
                </font>
                <H1 align="center"><font color="green">Реєстрація</font></H1>
                <form action="forma.php" method="post" onsubmit="send();">
                    <TABLE align="center">
                        <TR>
                            <TD>
                                <font color="green">Прізвище</font>:
                            </TD>
                            <TD>
                                <input type="text" size="10" maxlength="20" name="name2">
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <font color="green">Ім'я</font> :
                            </TD>
                            <TD>
                                <input type="text" size="10" maxlength="20" name="name1">
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <font color="green">Бажаний Login</font> :
                            </TD>
                            <TD>
                                <input type="text" size="10" maxlength="20" name="nic1">
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <font color="green">E-Mail</font> :
                            </TD>
                            <TD>
                                <input type="email" size="10" maxlength="20" name="email">
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <font color="green">Пароль</font> :
                            </TD>
                            <TD>
                                <input type="password" size="10" maxlength="20" name="password">
                            </TD>
                        </TR>
                    </TABLE>
                    <p align="center">
                        <input type="submit" value="Зареєструватись" >
                        <input type="reset" value="Очистити">
                    </p>
                </form>
                <hr>
            </td>
            <td width="70%">
                <h1 align="center">Список зареєстрованих !</h1>
                <TABLE  align="center" border="1" width="90%" style='font-size:100%'>
                    <tr>
                        <td align="center"><b>Npp</b></td>
                        <td align="center"><b>Прізвище</b></td>
                        <td align="center"><b>Імя</b></td>
                        <td align="center"><b>E-mail</b></td>
                        <td align="center"><b>Пароль</b></td>
                    </tr>
                    <?php
                        $data = file("baza.txt");
                        $cn=1;
                        foreach ($data as $line)
                        {
                            $trs = explode(";", $line);
                    ?>
                    <tr>
                        <td align="center"><?php echo $cn;?></td>
                        <td><?php echo $trs[0];?></td>
                        <td><?php echo $trs[1];?></td>
                        <td><?php echo $trs[2];?></td>
                        <td><?php echo $trs[3];?></td>
                    </tr>
                    <?php $cn++; } ?>
                </TABLE>
            </td>
        </tr>
        <tr>
            <td background="images/bg-3.jpg" colspan="2" valign="middle" height="90">
                <font size="4">Сайт розробив "KapitanyukMax"</font>
            </td>
        </tr>
    </table>
    <!-- ====================================================================== -->
</body>
</html>