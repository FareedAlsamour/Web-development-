SELECT 
    countries.name,
    cities.name AS 'city name',
    cities.district,
    cities.population
FROM
    countries
        JOIN
    cities ON countries.id = cities.country_id
WHERE
    cities.district = 'Buenos Aires'
        && cities.population > 500000

