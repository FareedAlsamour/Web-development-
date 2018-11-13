SELECT 
    countries.name , count(*) as cities
FROM
    cities
        JOIN
    countries ON cities.country_id = countries.id
    group by countries.name
    order by cities desc

