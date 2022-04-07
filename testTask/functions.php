<?php

    function errorMessageAircrafts(PDOException $e){
        switch ($e->getCode()) {
            case '23505':
                return 'Самолет с таким кодом IATA уже существует!';
                break;
            case '23502':
                return 'Заполните все обязательные поля!';
                break;
            case '23001':
            case '23514':
                return 'Несоблюдение ограничений для некоторых значений!';
                break;
            default:
                return "Ошибка! Код ошибки: {$e->getCode()}.";
                break;
        }
    }
?>

<?php
    $pdo = require_once '../connect.php';

    $pdo->exec('SET NAMES \'UTF8\''); // кодировка, в которой мы будем обмениваться данными с БД

    // выполняем запрос, только если в нем есть данные
    if(count($_POST) > 0){
        // если запрос содержит команду на добавление
        if(isset($_POST['add'])){
            # подготавливаем данные
            // преобразуем специальные символы html
            $aircraft_code = htmlspecialchars($_POST['aircraft_code']);
            $model = htmlspecialchars($_POST['model']);
            $range = htmlspecialchars($_POST['range']);

            # выполняем запрос со стандартной защитой PDO от SQL-инъекций
            // добавляем запрос, используя подстановку
            $query = $pdo->prepare("INSERT INTO aircrafts (aircraft_code, model, range) VALUES(:air_code, :model, :range)");
            $params = [
                "air_code" => $aircraft_code,
                "model" => $model,
                "range" => $range
            ]; // создаем массив параметров


            try {
                $query->execute($params); // выполняем запрос
                if($query){
                    header("Location: " . $_SERVER['HTTP_REFERER']); // очищаем форму
                }
            } catch (PDOException $e) {
                $errorMessage = errorMessageAircrafts($e);
            }
        }
        // если запрос содержит команду на обновление данных
        elseif(isset($_POST['update'])){
            # подготавливаем данные
            // преобразуем специальные символы html
            $aircraft_code = htmlspecialchars($_POST['aircraft_code']);
            $model = htmlspecialchars($_POST['model']);
            $range = htmlspecialchars($_POST['range']);


            $query = $pdo->prepare("UPDATE aircrafts SET model =:model, range =:range WHERE aircraft_code =:air_code");
            $params = [
                "model" => $model,
                "range" => $range,
                "air_code" => $aircraft_code
            ];


            try {
                $query->execute($params); // выполняем запрос
                if($query){
                    header("Location: " . $_SERVER['HTTP_REFERER']); // очищаем форму
                }
            } catch (PDOException $e) {
                $errorMessage = errorMessageAircrafts($e);
            }
        }
        // если запрос содержит команду на удаление данных
        elseif(isset($_POST['delete'])){
            # подготавливаем данные
            // преобразуем специальные символы html
            $aircraft_code = htmlspecialchars($_POST['aircraft_code']);


            $query = $pdo->prepare("DELETE FROM aircrafts WHERE aircraft_code =:air_code");
            $params = [
                "air_code" => $aircraft_code
            ];

            try {
                $query->execute($params); // выполняем запрос
                if($query){
                    header("Location: " . $_SERVER['HTTP_REFERER']); // очищаем форму
                }
            } catch (PDOException $e) {
                $errorMessage = errorMessageAircrafts($e);
            }
        }
    } 

    # сортировка
    $sortParams = [
        'asc' => 'ASC',
        'desc' => 'DESC'
    ]; // белый список параметров сортировки

    $sortTypes =[
        'code' => "aircraft_code",
        'model' => 'model',
        'range' => 'range'
    ]; // белый список типов, по которым можно проводить сортировку

    // проверяем, есть ли в запросе требование вернуть даннеы в отсортированном виде
    if(isset($_GET['sort-type']) && isset($_GET['sort-param'])){
        // удаляем из входных параметров все символы, которые не являются буквами или цифрами
        $userSortType = preg_replace('%[^A-Za-zА-Яа-я0-9]%', '', $_GET['sort-type']);
        $userSortParams = preg_replace('%[^A-Za-zА-Яа-я0-9]%', '', $_GET['sort-param']);

        // приводим параметры к нижнему регистру
        $userSortType = strtolower($userSortType);
        $userSortParams = strtolower($userSortParams);

        // проверяем, если ли в "белых" списках значения, переданные в запросе
        if(
            !is_null($sortTypes[$userSortType]) && 
            !is_null($sortParams[$userSortParams])
            ){
                // если есть - выполняем сортировку
                $currentSortType = $sortTypes[$userSortType];
                $currentSortParam = $sortParams[$userSortParams];
                $allAircraftsRows = $pdo->query("SELECT aircraft_code, model, range FROM aircrafts ORDER BY $currentSortType $currentSortParam")->fetchAll();
        }
        // если в белых списках нет - не применяем сортировку
        else{
            $allAircraftsRows = $pdo->query('SELECT aircraft_code, model, range FROM aircrafts')->fetchAll();
        }
    }
    // если в белых списках нет - не применяем сортировку
    else{
        $allAircraftsRows = $pdo->query('SELECT aircraft_code, model, range FROM aircrafts')->fetchAll();
    }
?>