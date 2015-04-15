SELECT nom FROM distrib
	   WHERE (id_distrib = 42
	   		 OR (id_distrib < 70 AND id_distrib > 61)
	   		 OR id_distrib = 71
			 OR (id_distrib < 91 AND id_distrib > 87)
			 OR nom LIKE '%y%y%')
	   LIMIT 2, 5;
