SELECT 
    name, surface_area, population
FROM
    countries
WHERE
    countries.surface_area < 501
        && countries.population > 100000