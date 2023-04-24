const openModal = document.querySelector('.modal__open');
const modal = document.querySelector('.modal');
const closeModal = document.querySelector('.modal__close');

openModal.addEventListener('click', (e) => {
    e.preventDefault(e);
    modal.classList.add('modal__show');
});

closeModal.addEventListener('click', (e) => {
    e.preventDefault(e);
    modal.classList.remove('modal__show');
});

function mostrar_ocultarInvestigaciones() {
    document.getElementById('Investigaciones').classList.remove("hidden");
    document.getElementById('Libros').classList.add("hidden");
    document.getElementById('Articulos').classList.add("hidden");
}

function mostrar_ocultarLibros() {
    document.getElementById('Investigaciones').classList.add("hidden");
    document.getElementById('Libros').classList.remove("hidden");
    document.getElementById('Articulos').classList.add("hidden");
}

function mostrar_ocultarArticulos() {
    document.getElementById('Investigaciones').classList.add("hidden");
    document.getElementById('Libros').classList.add("hidden");
    document.getElementById('Articulos').classList.remove("hidden");
}

/*function mostrar_trabajos(e) {
    e.preventDefault();
    document.querySelector('.modal__open').classList.add('modal__show');
}

function ocultar_trabajos(e) {
    e.preventDefault();
    document.querySelector('modal__close').classList.remove('modal__show');
}*/