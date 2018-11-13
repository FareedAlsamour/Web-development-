SELECT 
    film.film_id,
    film.title,
    film.description,
    film.release_year,
    film.rating,
    film.special_features
FROM
    film
        LEFT JOIN
    film_category ON film_category.film_id = film.film_id
        LEFT JOIN
    category ON category.category_id = film_category.category_id
WHERE
    category.name = 'drama'
        && film.rental_rate = 2.99