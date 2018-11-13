SELECT 
    region, COUNT(id) AS 'countries'
FROM
    countries
GROUP BY region
ORDER BY COUNT(id) DESC
