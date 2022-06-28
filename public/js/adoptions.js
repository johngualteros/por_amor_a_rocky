//Sweet alert confirmacion del formulario
function alertConfirm() {
    Swal.fire({
        position: "center",
        icon: "success",
        title: "Se ha registrado tu solicitud correctamente",
        showConfirmButton: false,
        timer: 1500,
    }).then((response) => {
        try {
            window.location.href = "http://localhost:8000/adoptions";
        } catch (e) {
            console.log(e);
        }
    });
}
