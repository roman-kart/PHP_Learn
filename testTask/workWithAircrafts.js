function onEditAircraftClick(air_code, model, range){
    // var aircraft_code = clicked_id.trim().split("button")[0]; // получаем код самолета, который будет указан в id кнопки 
    // var model = document.getElementById('model'.concat(aircraft_code)); // получаем модель самолета из поля в таблице
    // var range = document.getElementById('range'.concat(aircraft_code)); // получаем дальность полета самолета из поля в таблице

    // получаем поля, содержащие данные о самолете, которые пользователя может изменять
    var modalCode = document.getElementById('aircraft_codeEdit');
    var modalModel = document.getElementById('modelEdit');
    var modalRange = document.getElementById('rangeEdit');

    modalCode.value = air_code;
    modalModel.value = model;
    modalRange.value = parseInt(range);

    var editAircraftModalButton = document.getElementById('editAircraftModalButton');
    editAircraftModalButton.click();
}

function onDeleteAircraftClick(air_code){
    // var aircraft_code = clicked_id.trim().split("button")[0]; // получаем код самолета, который будет указан в id кнопки 
    // var model = document.getElementById('model'.concat(aircraft_code)); // получаем модель самолета из поля в таблице
    // var range = document.getElementById('range'.concat(aircraft_code)); // получаем дальность полета самолета из поля в таблице

    // получаем поля, содержащие данные об удаляемом самолете
    var formCode = document.getElementById('aircraft_codeDelete');

    formCode.value = air_code;

    var aircraftDeleteButton = document.getElementById('aircraftDeleteButton');

    if(confirm("Удалить самолет ".concat(air_code))){
        aircraftDeleteButton.click();
    }
}

function sortByCode(){
    
}