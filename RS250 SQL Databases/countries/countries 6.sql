SELECT 
    name, government_form, capital, life_expectancy
FROM
    countries
WHERE
    government_form = 'Constitutional Monarchy'
        && capital > 200
        && life_expectancy > 75