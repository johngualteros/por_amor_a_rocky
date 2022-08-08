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
function aprobeAlert(id) {
    Swal.fire({
        title: "Estas seguro de aprobar la alerta",
        text: "No podras revertir esta acción",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#2774CE",
        cancelButtonColor: "#7B96F8",
        confirmButtonText: "Si, estoy seguro!",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                "Completado",
                "La adopcion fue aprobada satisfactoriamente",
                "success"
            ).then((response) => {
                console.log(id);
                window.location.href = `/solicitarAdopcion/${id}/edit`;
            });
        }
    });
}
function declineAlert() {
    Swal.fire({
        title: "Estas seguro de rechazar la alerta",
        text: "No podras revertir esta acción",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#2774CE",
        cancelButtonColor: "#7B96F8",
        confirmButtonText: "Si, estoy seguro!",
    })
        .then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    "Completado",
                    "La adopcion fue rechazada satisfactoriamente",
                    "success"
                );
            }
        })
        .then((response) => {
            window.location.reload();
        })
        .then(
            setTimeout(() => {
                window.location.reload();
            }, 3000)
        );
}
