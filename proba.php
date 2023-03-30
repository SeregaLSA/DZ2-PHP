<?php

$array = $_GET;
$array_otvet = [];
$z = 0;

foreach ($array as $key => $items) {
    if ($items == "yes") {
        $array_otvet[] = 1;
    } elseif (is_array($items) and ($items == $_GET['vopros3'])) {
        foreach ($items as $a) {
            if (strlen($a) == 4) {
                $z += 1;
            }
        }
        if ($z == 2) {
            $array_otvet[] = 1;
            $z = 0;
        }
    } elseif (is_array($items) and ($items == $_GET['vopros4'])) {
        foreach ($items as $a) {
            if (strlen($a) == 4) {
                $z += 1;
            }
        }
        if ($z == 3) {
            $array_otvet[] = 1;
            $z = 0;
        }
    } elseif (is_array($items) and ($items == $_GET['vopros7'])) {
        foreach ($items as $a) {
            if (strlen($a) == 4) {
                $z += 1;
            }
        }
        if ($z == 3) {
            $array_otvet[] = 1;
            $z = 0;
        }
    } elseif (is_array($items) and ($items == $_GET['vopros8'])) {
        foreach ($items as $a) {
            if (strlen($a) == 4) {
                $z += 1;
            }
        }
        if ($z == 3) {
            $array_otvet[] = 1;
            $z = 0;
        }
    } elseif (($items == $_GET['vopros10']) and (strlen($items) > 0)) {
        $array_otvet[] = 1;
    }

}

function right_answer($arr){
    $x = 0;
    $y = 10;
    foreach($arr as $items){
        if($items == 1){
            $x += 1;
        }
    }
    
    return $str = "Правильных ответов {$x} из 10";
}

$result = right_answer($array_otvet);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <title>Test</title>
</head>

<body>

    <div class="container container text-center"">
        <h1>Тест</h1>
    </div>

    <div class=" container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="">

                    <!-- первый вопрос -->
                    <hr>
                    <h4>1. Какие тэги делают шрифт текста жирным?</h4>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros1" value="no1" id="no1"
                            <?= isset($_GET['vopros1']) && $_GET["vopros1"] && $_GET["vopros1"] == 'no1' ? "checked" : "" ?>>
                        <label class="form-check-label" for="no1">
                            &#8249;ins&#8250; и &#8249;del&#8250;
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros1" value="no2" id="no2"
                            <?= isset($_GET['vopros1']) && $_GET["vopros1"] && $_GET["vopros1"] == 'no2' ? "checked" : "" ?>>
                        <label class="form-check-label" for="no2">
                            &#8249;li&#8250; и &#8249;ul&#8250;
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros1" value="yes" id="yes"
                            <?= isset($_GET['vopros1']) && $_GET["vopros1"] && $_GET["vopros1"] == 'yes' ? "checked" : "" ?>>
                        <label class="form-check-label" for="yes">
                            &#8249;b&#8250; и &#8249;strong&#8250; <!-- правильный ответ -->
                        </label>
                    </div>


                    <!-- второй вопрос -->
                    <hr>
                    <h4>2. Использование тэга … позволяет добавлять одну строку текста без начала нового абзаца.</h4>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros2" value="no1" id="no1"
                            <?= isset($_GET['vopros2']) && $_GET["vopros2"] && $_GET["vopros2"] == 'no1' ? "checked" : "" ?>>
                        <label class="form-check-label" for="no1">
                            &#8249;line/&#8250;
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros2" value="yes" id="yes"
                            <?= isset($_GET['vopros2']) && $_GET["vopros2"] && $_GET["vopros2"] == 'yes' ? "checked" : "" ?>>
                        <label class="form-check-label" for="yes">
                            &#8249;br/&#8250; <!-- правильный ответ -->
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros2" value="no2" id="no2"
                            <?= isset($_GET['vopros2']) && $_GET["vopros2"] && $_GET["vopros2"] == 'no2' ? "checked" : "" ?>>
                        <label class="form-check-label" for="no2">
                            &#8249;td/&#8250;
                        </label>
                    </div>

                    <!-- третий вопрос -->
                    <hr>
                    <h3>3. Обязательными атрибутами для тега input являются:</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="vopros3[]" value="yes1" id="position_yes1"
                            <?= isset($_GET['vopros3']) && in_array('yes1', $_GET['vopros3']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_yes1">
                            name <!-- правильный ответ -->
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="vopros3[]" value="yes2" id="position_yes2"
                            <?= isset($_GET['vopros3']) && in_array('yes2', $_GET['vopros3']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_yes2">
                            type <!-- правильный ответ -->
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="vopros3[]" value="no1" id="position_no1"
                            <?= isset($_GET['vopros3']) && in_array('no1', $_GET['vopros3']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_no1">
                            text
                        </label>
                    </div>

                    <!-- четвертый вопрос -->
                    <hr>
                    <h3>4. С помощью каких тегов описывается таблица?</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="vopros4[]" value="yes1" id="position_yes1"
                            <?= isset($_GET['vopros4']) && in_array('yes1', $_GET['vopros4']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_yes1">
                            &#8249;table&#8250; <!-- правильный ответ -->
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="vopros4[]" value="yes2" id="position_yes2"
                            <?= isset($_GET['vopros4']) && in_array('yes2', $_GET['vopros4']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_yes2">
                            &#8249;tr&#8250; <!-- правильный ответ -->
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="vopros4[]" value="no1" id="position_no1"
                            <?= isset($_GET['vopros4']) && in_array('no1', $_GET['vopros4']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_no1">
                            &#8249;ol&#8250;
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="vopros4[]" value="yes3" id="position_yes3"
                            <?= isset($_GET['vopros4']) && in_array('yes3', $_GET['vopros4']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_yes3">
                            &#8249;td&#8250; <!-- правильный ответ -->
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="vopros4[]" value="no2" id="position_no2"
                            <?= isset($_GET['vopros4']) && in_array('no2', $_GET['vopros4']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_no2">
                            &#8249;body&#8250;
                        </label>
                    </div>

                    <!-- пятый вопрос -->
                    <hr>
                    <h4>5. О чем говорит тэг &#8249;p align="right"&#8250; … &#8249;/p&#8250;?</h4>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros5" value="no1" id="no1"
                            <?= isset($_GET['vopros5']) && $_GET["vopros5"] && $_GET["vopros5"] == 'no1' ? "checked" : "" ?>>
                        <label class="form-check-label" for="no1">
                            Текст, заключенный в тэг, будет расположен по центру страницы
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros5" value="no2" id="no2"
                            <?= isset($_GET['vopros5']) && $_GET["vopros5"] && $_GET["vopros5"] == 'no2' ? "checked" : "" ?>>
                        <label class="form-check-label" for="no2">
                            Текст, заключенный в тэг, будет расположен по левому краю страницы
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros5" value="yes" id="yes"
                            <?= isset($_GET['vopros5']) && $_GET["vopros5"] && $_GET["vopros5"] == 'yes' ? "checked" : "" ?>>
                        <label class="form-check-label" for="yes">
                            Текст, заключенный в тэг, будет расположен по правому краю страницы
                            <!-- правильный ответ -->
                        </label>
                    </div>

                    <!-- шестой вопрос -->
                    <hr>
                    <h4>6. Какие тэги используются для определения заголовков?</h4>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros6" value="yes" id="yes"
                            <?= isset($_GET['vopros6']) && $_GET["vopros6"] && $_GET["vopros6"] == 'yes' ? "checked" : "" ?>>
                        <label class="form-check-label" for="yes">
                            <b>h1</b> - <b>h6</b> <!-- правильный ответ -->
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros6" value="no1" id="no1"
                            <?= isset($_GET['vopros6']) && $_GET["vopros6"] && $_GET["vopros6"] == 'no1' ? "checked" : "" ?>>
                        <label class="form-check-label" for="no1">
                            <b>Header</b>
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros6" value="no2" id="no2"
                            <?= isset($_GET['vopros6']) && $_GET["vopros6"] && $_GET["vopros6"] == 'no2' ? "checked" : "" ?>>
                        <label class="form-check-label" for="no2">
                            <b>Heading</b>
                        </label>
                    </div>

                    <!-- седьмой вопрос -->
                    <hr>
                    <h3>7. Отметьте верное:</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="vopros7[]" value="yes1" id="position_yes1"
                            <?= isset($_GET['vopros7']) && in_array('yes1', $_GET['vopros7']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_student">
                            для описания текстовой многострочной области используется тег
                            textarea<!-- правильный ответ -->
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="vopros7[]" value="yes2" id="position_yes2"
                            <?= isset($_GET['vopros7']) && in_array('yes2', $_GET['vopros7']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_worker">
                            количество видимых строк и столбцов текстовой многострочной области задаются атрибутами rows
                            и cols <!-- правильный ответ -->
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="vopros7[]" value="no" id="position_no"
                            <?= isset($_GET['vopros7']) && in_array('no', $_GET['vopros7']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_worker">
                            код textarea rows="7" cols="30" задает 6 видимых строк и 29 столбцов
                        </label>
                    </div>

                    <!-- восьмой вопрос -->
                    <hr>
                    <h3>8. Атрибут method имеет значения:</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="vopros8[]" value="yes1" id="position_yes1"
                            <?= isset($_GET['vopros8']) && in_array('yes1', $_GET['vopros8']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_student">
                            get<!-- правильный ответ -->
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="vopros8[]" value="no" id="position_no"
                            <?= isset($_GET['vopros8']) && in_array('no', $_GET['vopros8']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_worker">
                            put
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="vopros8[]" value="yes2" id="position_yes2"
                            <?= isset($_GET['vopros8']) && in_array('yes2', $_GET['vopros8']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_worker">
                            post<!-- правильный ответ -->
                        </label>
                    </div>

                    <!-- девятый вопрос -->
                    <hr>
                    <h4>9. В HTML не существует … тэгов.</h4>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros9" value="no1" id="no1"
                            <?= isset($_GET['vopros9']) && $_GET["vopros9"] && $_GET["vopros9"] == 'no1' ? "checked" : "" ?>>
                        <label class="form-check-label" for="male">
                            Одиночных
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros9" value="no2" id="no2"
                            <?= isset($_GET['vopros9']) && $_GET["vopros9"] && $_GET["vopros9"] == 'no2' ? "checked" : "" ?>>
                        <label class="form-check-label" for="female">
                            Парных
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="vopros9" value="yes" id="yes"
                            <?= isset($_GET['vopros9']) && $_GET["vopros9"] && $_GET["vopros9"] == 'yes' ? "checked" : "" ?>>
                        <label class="form-check-label" for="female">
                            Тройных <!-- правильный ответ -->
                        </label>
                    </div>

                    <!-- десятый вопрос -->
                    <hr>
                    <h4>10. Закончите выражение.</h4>
                    <div class="mb-3">
                        <label for="vopros10" class="form-label">Программирование - это...</label>
                        <textarea class="form-control" id="vopros10"
                            name="vopros10"><?= $_GET['vopros10'] ?? '' ?></textarea>

                    </div>
                    <hr>

                    <div class="mb-3">
                        <button class="btn btn-primary">Result</button>
                    </div>

                    <?php if (isset($result)): ?>
                        <div class="mb-3">
                            <label for="result" class="form-label">Result</label>                            
                            <textarea class="form-control" id="result"><?= $result ?></textarea>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>

</body>

</html>