fetch('.\\views\\show_news.php')
//Este codigo sirve para mostrar eventos y la investigacion en el index, lo que hace es crear los elementos html a partir de la consulta de la base de datos.
    .then(response => response.json())
    .then(data => {
        const noticiasDiv = document.getElementById('articles-news');
        data.forEach(noticia => {
            const article = document.createElement('article');
            const img = document.createElement('img');
            const h3 = document.createElement('h3');
            const p = document.createElement('p');
            const a = document.createElement('a'); 
            img.src = "./images/eventos/"+noticia.imagen_evento;
            img.classList.add('news__image');
            h3.classList.add('subtitle3');
            h3.textContent = noticia.nombre;
            p.classList.add('about__paragraph');
            p.textContent = noticia.descripcion;
            a.href = "evento.php?page_view="+noticia.id_evento; 
            a.appendChild(img); 
            a.appendChild(h3); 
            article.appendChild(a);
            article.appendChild(p);
            noticiasDiv.appendChild(article);
        });
    })
    .catch(error => console.error(error));
    
