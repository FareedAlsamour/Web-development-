SELECT 
    film.film_id,
    title,
    actor.actor_id,
    CONCAT(actor.first_name, ' ', actor.last_name) AS 'actor name'
FROM
    film
        LEFT JOIN
    film_actor ON film.film_id = film_actor.film_id
        LEFT JOIN
    actor ON film_actor.actor_id = actor.actor_id
WHERE
    film.film_id = 369