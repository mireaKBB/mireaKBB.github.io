<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="MTU, MIREA,МТУ, МИРЭА, KBB-01-14, KBB-1-14,КББ-01-14,КББ-01-14">
        <meta name="description" content="Site for KBB-01-14 students from MTU(MIREA)">
        <title>KBB-01-14</title>
        <link rel="stylesheet" type="text/css" href="3mireaTimetable.css">
        
    </head>
    <body>
        <div class="MainHeaderDiv">
        <h1 class="MainHeader"><a class="mainButton" href="index.html">KББ-0I-I4</a></h1>
            <div class="line">
            </div>
            <div>   
                <nav>
                <ul>
            <li><a class="menuButon" href="3mireaTimetable.html">Пн</a></li>
            <li><a class="menuButon" href="3mireaTimetable.html">Вт</a></li>
            <li><a class="menuButon" href="3mireaTimetable.html">Ср</a></li>
            <li><a class="menuButon" href="3mireaTimetable.html">Чт</a></li>
            <li><a class="menuButon" href="3mireaTimetable.html">Пт</a></li>
            </ul>
                </nav>
            </div>
        </div>
        <div class="mainBlock">
            <?php
            $signIn = true;
            $newsFile = fopen("NewsFile.txt",'r+') or die("Неполадки на сервере");
            if($signIn)
            {
            ?>
            <pre>
            <form class="editform" action="3News.php" method="post">
            <p class="newsPage">Тема новости:</p>
                <input type="text" name="NewsHeaderText" />
            
            <p class="newsPage">Текст новости:</p>
                <textarea rows="4" cols="70" name="NewsText"></textarea>
                    
            <input align="center" type="submit" value="отправить"/>

            </form></pre>
            <?    
                error_reporting(E_ALL ^ E_NOTICE);
                $NewsText = htmlspecialchars($_POST['NewsText']);
                $NewsHeaderText = htmlspecialchars($_POST['NewsHeaderText']);
                $text = "<h1 class=\"newsPage\">". $NewsHeaderText . "</h1>"; 
                $text = $text ."<p class=\"newsPage\">" . $NewsText . "</p> " ."<!--___________________________-->";
                fseek($newsFile,0,SEEK_END);
                fwrite($newsFile,$text) or die(" ");
  
            }
            ?>

            <h1 class="newsPage" style="margin-top:0em">Какая-то новость</h1>
            <p class="newsPage">Текст какой-то новости, занимающий энное количество строк</p>
            <h1 class="newsPage">Какая-то новость</h1>
            <p class="newsPage">Текст какой-то новости, занимающий энное количество строк</p>
            <h1 class="newsPage">Какая-то новость</h1>
            <p class="newsPage">Текст какой-то новости, занимающий энное количество строк</p>
            <h1 class="newsPage">Какая-то новость</h1>
            <p class="newsPage">Текст какой-то новости, занимающий энное количество строк</p>
            <h1 class="newsPage">Какая-то новость</h1>
            <p class="newsPage">Текст какой-то новости, занимающий энное количество строк</p>
            <h1 class="newsPage">Какая-то новость</h1>
            <p class="newsPage">Текст какой-то новости, занимающий энное количество строк</p>
            <h1 class="newsPage">Какая-то новость</h1>
            <p class="newsPage">Текст какой-то новости, занимающий энное количество строк</p>
            <h1 class="newsPage">Какая-то новость</h1>
            <p class="newsPage">Текст какой-то новости, занимающий энное количество строк</p>
            <h1 class="newsPage">Какая-то новость</h1>
            <p class="newsPage">Текст какой-то новости, занимающий энное количество строк</p>
            <h1 class="newsPage">Какая-то новость</h1>
            <p class="newsPage">Текст какой-то новости, занимающий энное количество строк</p>
            <h1 class="newsPage">Какая-то новость</h1>
            <p class="newsPage">Текст какой-то новости, занимающий энное количество строк</p>
            <h1 class="newsPage">Какая-то новость</h1>
            <p class="newsPage">Текст какой-то новости, занимающий энное количество строк</p>
            <h1 class="newsPage">Какая-то новость</h1>
            <p class="newsPage">Текст какой-то новости, занимающий энное количество строк</p>
        </div>

        
        
     
    </body>
</html>
