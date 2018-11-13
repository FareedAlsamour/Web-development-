SELECT 
    name, population
FROM
    cities
WHERE
    country_code LIKE 'MEX'
        && population > 500 * 1000
ORDER BY population DESC