/*--------------------- Funciones para mostrar y ocultar las secciones de Nosotros ---------------------*/

function mostrar_ocultar_Subnosotros() {
    document.getElementById('Nosotros2').classList.remove("hidden");
    document.getElementById('Historia').classList.add("hidden");
    document.getElementById('Universidad').classList.add("hidden");
}

function mostrar_ocultarHistoria() {
    document.getElementById('Nosotros2').classList.add("hidden");
    document.getElementById('Historia').classList.remove("hidden");
    document.getElementById('Universidad').classList.add("hidden");
}

function mostrar_ocultarUniversidad() {
    document.getElementById('Nosotros2').classList.add("hidden");
    document.getElementById('Historia').classList.add("hidden");
    document.getElementById('Universidad').classList.remove("hidden");
}

/*--------------------- Funciones para mostrar y ocultar las secciones de Trabajos ---------------------*/

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

function mostrar_ocultarDocumentos() {
    document.getElementById('Documentos').classList.remove("hidden");
    document.getElementById('Trabajos').classList.add("hidden");
}
/*------------Funcion para abrir modal de los miembros-------------*/

function openModal(id) {
    const modal_container = document.getElementById("modal"+id);
        modal_container.classList.add('showModal');
}

function closeModal(id){
    const modal_container = document.getElementById("modal"+id);
    modal_container.classList.remove('showModal');
}


/*--------------------- Función que hace efecto de animación de scroll en la sección de Nosotros ---------------------*/

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hide');
hiddenElements.forEach((el) => observer.observe(el));

/*--------------------- Función que hace efecto de animación de scroll en la sección de Trabajos ---------------------*/

const observador = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('showwork');
        }
    });
});

const hiddenElementsWork = document.querySelectorAll('.hidework');
hiddenElementsWork.forEach((el) => observador.observe(el));