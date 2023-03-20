function mostrar_ocultarInicio() {
    document.getElementById('Inicio').classList.remove("hidden");
    document.getElementById('Noticias').classList.add("hidden");
    document.getElementById('Miembros').classList.add("hidden");
    document.getElementById('Trabajos').classList.add("hidden");
    document.getElementById('Contacto').classList.add("hidden");
    document.getElementById('Nosotros').classList.add("hidden");
}

function mostrar_ocultarNoticias() {
    document.getElementById('Inicio').classList.add("hidden")
    document.getElementById('Noticias').classList.remove("hidden");
    document.getElementById('Miembros').classList.add("hidden");
    document.getElementById('Trabajos').classList.add("hidden");
    document.getElementById('Contacto').classList.add("hidden");
    document.getElementById('Nosotros').classList.add("hidden");
}

function mostrar_ocultarMiembros() {
    document.getElementById('Inicio').classList.add("hidden")
    document.getElementById('Noticias').classList.add("hidden");
    document.getElementById('Miembros').classList.remove("hidden");
    document.getElementById('Trabajos').classList.add("hidden");
    document.getElementById('Contacto').classList.add("hidden");
    document.getElementById('Nosotros').classList.add("hidden");
}

function mostrar_ocultarTrabajos() {
    document.getElementById('Inicio').classList.add("hidden")
    document.getElementById('Noticias').classList.add("hidden");
    document.getElementById('Miembros').classList.add("hidden");
    document.getElementById('Trabajos').classList.remove("hidden");
    document.getElementById('Contacto').classList.add("hidden");
    document.getElementById('Nosotros').classList.add("hidden");
}

function mostrar_ocultarContacto() {
    document.getElementById('Inicio').classList.add("hidden")
    document.getElementById('Noticias').classList.add("hidden");
    document.getElementById('Miembros').classList.add("hidden");
    document.getElementById('Trabajos').classList.add("hidden");
    document.getElementById('Contacto').classList.remove("hidden");
    document.getElementById('Nosotros').classList.add("hidden");
}

function mostrar_ocultarNosotros() {
    document.getElementById('Inicio').classList.add("hidden")
    document.getElementById('Noticias').classList.add("hidden");
    document.getElementById('Miembros').classList.add("hidden");
    document.getElementById('Trabajos').classList.add("hidden");
    document.getElementById('Contacto').classList.add("hidden");
    document.getElementById('Nosotros').classList.remove("hidden");
}