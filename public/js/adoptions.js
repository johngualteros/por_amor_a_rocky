//Sweet alert confirmacion del formulario
function alertConfirm() {
    Swal.fire({
        position: "center",
        icon: "success",
        title: "Se ha registrado tu solicitud correctamente",
        showConfirmButton: false,
        timer: 2000,
    }).then((response) => {
        try {
            window.location.href = "/adoptions";
        } catch (e) {
            console.log(e);
        }
    });
}
