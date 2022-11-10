document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("form").addEventListener('submit', validarFormulario);
});

function validarFormulario(evento) {
    evento.preventDefault();

    const cantidadBase = document.querySelector("#stock").value;


    const cantidadCliente = document.querySelector("#stockCliente").value;
    const inputnom = document.querySelector("#stockCliente");

    const numero1 = parseInt(cantidadBase);
    const numero2 = parseInt(cantidadCliente);
    console.log(typeof numero1);

    if (cantidadCliente == null || cantidadCliente <= 0 || numero2 > numero1) {
        alert('Ingresa un valor valido');
        inputnom.style.border = "2px solid #FF0000";
        inputnom.addEventListener('blur', function() {
            inputnom.style.border = "2px solid #2C2626";
        });
        return;
    } else if (cantidadBase <= 0) {
        alert('No hay stock del producto');
        inputnom.style.border = "2px solid #FF0000";
        inputnom.addEventListener('blur', function() {
            inputnom.style.border = "2px solid #2C2626";
        });
        return;
    }
    this.submit();
}


$(document).on("click", "#btnmodal", function() {
    var idproducto = $(this).data('nom');
    $("#idproducto").val(idproducto);

    var cantidad = $(this).data('cant');
    $("#stock").val(cantidad);
})


$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });

});

        function eliminar() {
            const respuesta = confirm("¿Estas Seguro que quieres eliminar?")
            return respuesta;
        }
