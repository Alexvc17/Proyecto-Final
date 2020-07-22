$(document).ready(function() {
    $('#formRegistroClientes').submit(function(e) {
        e.preventDefault();
        $.ajax({

             
            data: $("#formRegistroClientes").serialize(), 
            url: "./registrarCliente.php", 
            type: "POST",

            beforeSend: function() {
                alert("Procesando...");
            },
            success: function(res) {
                if (res == 1) {
                   alertify.success("Registrado con exito");
                } else {
                     alertify.error("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            },
            
        });
    });
});

$(document).ready(function() {
    $('#editarRegistroClientes').submit(function(e) {
        e.preventDefault();
        $.ajax({
            
            data: $("#editarRegistroClientes").serialize(),
            url: "./actualizaClientes.php", 
            type: "POST", 

            beforeSend: function() {
                alert("Procesando...");
            },
            success: function(res) {
                if (res == 1 ) {

                   alertify.success("Registrado con exito");

                } else {
                     alertify.error("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            }
            
        });
    });
});


/////////////////////////////////////////////////////////////////////////////////////7
$(document).ready(function() {
    $('#formRegistroCategoria').submit(function(e) {
        e.preventDefault();
        $.ajax({

             
            data: $("#formRegistroCategoria").serialize(), 
            url: "./registrarCategoria.php", 
            type: "POST",

            beforeSend: function() {
                alert("Procesando...");
            },
            success: function(res) {
                if (res == 1) {
                   alertify.success("Registrado con exito");
                } else {
                     alertify.error("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            },
            
        });
    });
});

$(document).ready(function() {
    $('#editarRegistroCategoria').submit(function(e) {
        e.preventDefault();
        $.ajax({
            
            data: $("#editarRegistroCategoria").serialize(),
            url: "./actualizaCategoria.php", 
            type: "POST", 

            beforeSend: function() {
                alert("Procesando...");
            },
            success: function(res) {
                if (res == 1 ) {

                   alertify.success("Registrado con exito");

                } else {
                     alertify.error("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            }
            
        });
    });
});

/////////////////////////////////////////////////////////////////////////////////////7

$(document).ready(function() {
    $('#formRegistroProveedor').submit(function(e) {
        e.preventDefault();
        $.ajax({

             
            data: $("#formRegistroProveedor").serialize(), 
            url: "./registrarProveedor.php", 
            type: "POST",

            beforeSend: function() {
                alert("Procesando...");
            },
            success: function(res) {
                if (res == 1) {
                   alertify.success("Registrado con exito");
                } else {
                     alertify.error("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            },
            
        });
    });
});

$(document).ready(function() {
    $('#editarRegistroProveedor').submit(function(e) {
        e.preventDefault();
        $.ajax({
            
            data: $("#editarRegistroProveedor").serialize(),
            url: "./actualizaProveedor.php", 
            type: "POST", 

            beforeSend: function() {
                alert("Procesando...");
            },
            success: function(res) {
                if (res == 1 ) {

                   alertify.success("Registrado con exito");

                } else {
                     alertify.error("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            }
            
        });
    });
});
//////////////////////////////////////////////////////////////
$(document).ready(function() {
    $('#formRegistroProducto').submit(function(e) {
        e.preventDefault();
        $.ajax({

             
            data: $("#formRegistroProducto").serialize(), 
            url: "./registrarProducto.php", 
            type: "POST",

            beforeSend: function() {
                alert("Procesando...");
            },
            success: function(res) {
                if (res == 1) {
                   alertify.success("Registrado con exito");
                } else {
                     alertify.error("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            },
            
        });
    });
});

$(document).ready(function() {
    $('#editarRegistroProducto').submit(function(e) {
        e.preventDefault();
        $.ajax({
            
            data: $("#editarRegistroProducto").serialize(),
            url: "./actualizaProducto.php", 
            type: "POST", 

            beforeSend: function() {
                alert("Procesando...");
            },
            success: function(res) {
                if (res == 1 ) {

                   alertify.success("Registrado con exito");

                } else {
                     alertify.error("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            }
            
        });
    });
});
/////////////////////////////////////////////////////////////////////////////////////
$(document).ready(function() {
    $('#formRegistroVenta').submit(function(e) {
        e.preventDefault();
        $.ajax({

             
            data: $("#formRegistroVenta").serialize(), 
            url: "./registrarVenta.php", 
            type: "POST",

            beforeSend: function() {
                alert("Procesando...");
            },
            success: function(res) {
                if (res == 1) {
                   alertify.success("Registrado con exito");
                } else {
                     alertify.error("No Registrado");
                     
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            },
            
        });
    });
});

$(document).ready(function() {
    $('#editarRegistroVenta').submit(function(e) {
        e.preventDefault();
        $.ajax({
            
            data: $("#editarRegistroVenta").serialize(),
            url: "./actualizaVenta.php", 
            type: "POST", 

            beforeSend: function() {
                alert("Procesando...");
            },
            success: function(res) {
                if (res == 1 ) {

                   alertify.success("Registrado con exito");

                } else {
                     alertify.error("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            }
            
        });
    });
});