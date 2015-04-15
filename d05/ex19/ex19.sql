SELECT DATEDIFF(MAX(DATE(date)), MIN(DATE(date))) as 'uptime'
	   FROM historique_membre
	   GROUP BY id_film;
/* is this what's asked? */
