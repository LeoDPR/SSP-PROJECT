fetch('.\\views\\noticias.php')

    .then(response => response.json())
    .then(data => {
        const noticiasDiv = document.getElementById('articles-news');
        data.forEach(noticia => {
            const article = document.createElement('article');
            const img = document.createElement('img');
            const h3 = document.createElement('h3');
            const p = document.createElement('p');
            img.src = "./images/eventos/"+noticia.imagen_evento;
            img.classList.add('news__image');
            h3.classList.add('subtitle3');
            h3.textContent = noticia.nombre;
            p.classList.add('about__paragraph');
            p.textContent = noticia.descripcion;
            article.appendChild(img);
            article.appendChild(h3);
            article.appendChild(p);
            noticiasDiv.appendChild(article);
        });
    })
    .catch(error => console.error(error));
