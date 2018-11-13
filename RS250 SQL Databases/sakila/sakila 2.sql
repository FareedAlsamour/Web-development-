SELECT 
    film.title,
    film.description,
    film.release_year,
    category.name as "genre"
FROM
    film
        LEFT JOIN
    film_category ON film.film_id = film_category.film_id
        LEFT JOIN
    category ON film_category.category_id = category.category_id
WHERE
    category.name = 'Comedy'