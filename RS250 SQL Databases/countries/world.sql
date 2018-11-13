SELECT 
    countries.name, languages.language, languages.percentage
FROM
    countries
        JOIN
    languages ON code = languages.country_code
WHERE
    languages.country_code LIKE 'SVK'
ORDER BY percentage DESC
