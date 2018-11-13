SELECT 
    film.film_id,
    title,
    description,
    release_year,
    rating,
    special_features
FROM
    film
        LEFT JOIN
    film_actor ON film.film_id = film_actor.film_id
        LEFT JOIN
    actor ON film_actor.actor_id = actor.actor_id
WHERE
    actor.actor_id = 5
