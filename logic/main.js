/**
 * Metodo que se llamara cuando se cargue la pagina
 */
function onReady() {
    cleanForm();
    showSeats();
    showDetailBus();
    showSelectSeats();
}

/**
 * Función que es llamada por el evento OnClick del Button del formulario
 */
function assignSeat() {
    var object = {
        number: $("#inp_number").val(),
        name: $("#inp_name").val(),
        first_name: $("#inp_first_name").val(),
        destiny: $("#inp_destiny").val(),
        origin: $("#inp_origin").val(),
        cost : $("#inp_cost").val()
    };

    $.ajax({
        data: object,
        type: "POST",
        url: "logic/php/file_assign_seat.php",
        success: function (response) {
            var obj = JSON.parse(response);
            onReady();
            M.toast({html: obj.msj});
        },
        error: function (response) {

        }
    });
}

/**
 * Actualización de datos de un asiento
 */
function updateSeat() {
    var object = {
        number: $("#_inp_number").val(),
        name: $("#_inp_name").val(),
        first_name: $("#_inp_first_name").val(),
        destiny: $("#_inp_destiny").val(),
        origin: $("#_inp_origin").val(),
        cost : $("#_inp_cost").val()
    };

    $.ajax({
        data: object,
        type: "POST",
        url: "logic/php/file_update_seat.php",
        success: function (response) {
            var obj = JSON.parse(response);
            onReady();
            M.toast({html: obj.msj});
        },
        error: function (response) {

        }
    });
}

/**
 * Metodo que muestra los asientos del autobus
 */
function showSeats() {
    $.ajax({
        data: {x: "x"},
        type: "POST",
        url: "logic/php/file_bus.php",
        success: function (response) {
            $("#_autobus").html(response);
        },
        error: function (data) {

        }
    });
}

function showDetailBus() {
    $.ajax({
        data: {x: "x"},
        type: "POST",
        url: "logic/php/file_details_bus.php",
        success: function (response) {
            $("#_detatail_bus").html(response);
        },
        error: function (data) {

        }
    });
}

/**
 * Metodo que carga el select del formulario con los asientos que no han sido asignados
 */
function showSelectSeats() {
    $.ajax({
        data: {x: "x"},
        type: "POST",
        url: "logic/php/file_select_seats.php",
        success: function (response) {
            $("#_select").html(response);
        },
        error: function (data) {

        }
    });
}

/**
 * Obten informacación de un asiento
 * @param $numero
 */
function getSeat($numero) {
    $.ajax({
        data: { asiento: $numero },
        type: "POST",
        url: "logic/php/file_information_seat.php",
        success: function (response) {
            $("#_detail").html(response);
        },
        error: function (data) {

        }
    });
}

/**
 * Elimina a un asiento en especifico
 * @param $number
 */
function removeSeat($number) {
    $.ajax({
        data: { seat: $number },
        type: "POST",
        url: "logic/php/file_remove_seat.php",
        success: function (response) {
            onReady();
        },
        error: function (data) {

        }
    });
}

/**
 * Limpia las cajas de texto (inputs)
 */
function cleanForm() {
    $("#inp_number").val("");
    $("#inp_name").val("");
    $("#inp_first_name").val("");
    $("#inp_destiny").val("");
    $("#inp_origin").val("");
    $("#inp_cost").val("");
}