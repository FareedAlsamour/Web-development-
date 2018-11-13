SELECT 
    film.film_id,
    film.title,
    film.description,
    film.release_year,
    film.rating,
    film.special_features,
    category.name as "gener",
    CONCAT(actor.first_name, ' ', actor.last_name) AS 'actor name'
FROM
    film
        LEFT JOIN
    film_category ON film.film_id = film_category.film_id
        LEFT JOIN
    category ON category.category_id = film_category.category_id
        LEFT JOIN
    film_actor ON film.film_id = film_actor.film_id
        LEFT JOIN
    actor ON actor.actor_id = film_actor.actor_id
WHERE
    category.name = 'action'
        && actor.first_name = 'SANDRA'
        && actor.last_name = 'KILMER'