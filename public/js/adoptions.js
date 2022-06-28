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
            window.location.href =
                "https://es.wikipedia.org/wiki/Felis_silvestris_catus";
        } catch (e) {
            console.log(e);
        }
    });
}
