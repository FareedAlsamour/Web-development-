select film.film_id, title,description,release_year,rating,special_features
from film
join film_actor
on film.film_id = film_actor.film_id
where film.rating = "G" && film.special_features like "%behind the scenes%" && film_actor.actor_id = 15