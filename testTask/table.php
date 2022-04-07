<?php
require_once "./functions.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../source/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Самолеты</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Модальное окно для ввода данных о новом самолете -->
                <div class="modal fade" id="newAircraftModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="newAircraftModelLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="newAircraftModelLabel">Добавить самолет</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="aircraft_code" class="form-label">Код самолета:</label>
                                        <input type="text" class="form-control" name="aircraft_code" id="aircraft_code" aria-describedby="aircraft_codeHelp">
                                        <div id="aircraft_codeHelp" class="form-text">Код самолета, присваиваемый IATA</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="model" class="form-label">Модель</label>
                                        <input type="text" name="model" class="form-control" id="model" aria-describedby="modelHelp">
                                        <div id="modelHelp" class="form-text">Модель самолета, определяемая производителем</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="range" class="form-label">Дальность полета</label>
                                        <input type="number" class="form-control" name="range" id="range" aria-describedby="rangeHelp">
                                        <div id="rangeHelp" class="form-text">Максимальная дальность полета самолета</div>
                                    </div>

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="add">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Кнопка, активирующая модальное окно для редактирования данных о самолете -->
                <button hidden id="editAircraftModalButton" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAircraft">
                    Добавить
                </button>

                <!-- Модальное окно для редактирования данных о самолете -->
                <div class="modal fade" id="editAircraft" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editAircraftLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editAircraftLabel">Добавить самолет</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="aircraft_codeEdit" class="form-label">Aircraft code:</label>
                                        <input type="text" class="form-control" name="aircraft_code" id="aircraft_codeEdit" aria-describedby="aircraft_codeHelp" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="modelEdit" class="form-label">Модель</label>
                                        <input type="text" name="model" class="form-control" id="modelEdit" aria-describedby="modelHelpEdit">
                                        <div id="modelHelpEdit" class="form-text">Модель самолета, определяемая производителем</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="rangeEdit" class="form-label">Дальность полета</label>
                                        <input type="number" class="form-control" name="range" id="rangeEdit" aria-describedby="rangeHelpEdit">
                                        <div id="rangeHelpEdit" class="form-text">Максимальная дальность полета самолета</div>
                                    </div>

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="update">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Форма, при помощи которой можно отправить запрос на удаление элемента-->
                <div hidden>
                    <form method="post" enctype="multipart/form-data" action="" id="aircraftDeleteForm">
                        <input type="text" name="aircraft_code" id="aircraft_codeDelete"/>
                        <button id="aircraftDeleteButton" type="submit" name="delete">Delete</button>
                    </form>
                </div>

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="/testTask/table.php">Самолёты</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="/testTask/table.php">Главная</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>

                <div>
                    <!-- Кнопка, активирующая модальное окно для ввода данных о новом самолете -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newAircraftModel">
                        ✈
                    </button>
                </div>

                <table class="table table-striped table-hover mt-2">
                    <thead>
                        <tr>
                            <th scope="col">Номер (НЕ Id)</th>
                            <th scope="col">
                                Код
                                <a class="btn btn-primary" href="/testTask/table.php?sort-type=code&sort-param=asc">↑</a>  
                                <a class="btn btn-primary" href="/testTask/table.php?sort-type=code&sort-param=desc">↓</a>  
                            </th>
                            <th scope="col">
                                Модель 
                                <a class="btn btn-primary" href="/testTask/table.php?sort-type=model&sort-param=asc">↑</a>  
                                <a class="btn btn-primary" href="/testTask/table.php?sort-type=model&sort-param=desc">↓</a> 
                            </th>
                            <th scope="col">
                                Дальность полета 
                                <a class="btn btn-primary" href="/testTask/table.php?sort-type=range&sort-param=asc">↑</a>  
                                <a class="btn btn-primary" href="/testTask/table.php?sort-type=range&sort-param=desc">↓</a> 
                            </th>
                            <th scope="col">Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($allAircraftsRows as $value) {
                            $i++; ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $value['aircraft_code'] ?></td>
                                <td><?= $value['model'] ?></td>
                                <td><?= $value['range'] ?></td>
                                <td>
                                    <button 
                                        class="btn bth-success"
                                        onclick="onEditAircraftClick(<?='\'' . $value['aircraft_code'] . '\'' ?>, <?= '\'' . $value['model'] . '\'' ?>, <?= '\'' . $value['range'] . '\'' ?>)"
                                        >⚙</button>
                                    <button 
                                        class="btn bth-danger"
                                        onclick="onDeleteAircraftClick(<?='\'' . $value['aircraft_code'] . '\''?>)"
                                    >🗑</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="row">Total: </th>
                            <td><?= $i ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <script>
        var err = <?='\'' . ($errorMessage ?? '') . '\''?>;
        if (err) {
            alert(err);
        }
    </script>
    <script src="../source/js/bootstrap.bundle.min.js"></script>
    <script src="./workWithAircrafts.js"></script>
</body>

</html>