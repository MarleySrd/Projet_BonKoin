SELECT annonce.id_annonce FROM annonce, critere 
 WHERE 1=1 
 AND (annonce.titre_annonce LIKE CONCAT('%', :terms_titre, '%') 
 OR annonce.desc_annonce LIKE CONCAT('%', :terms_desc, '%'))  
 AND annonce.id_annonce = 
 select (critere.id_annonce from critere where  critere.nom_critere = 'type-de-bien'  AND critere.valeur_critere =  'Appartement' )
 AND annonce.id_annonce = 
 select(critere.id_annonce from critere where critere.nom_critere = 'nombre-de-pieces' AND critere.valeur_critere =  '4')




SELECT annonce.id_annonce FROM annonce WHERE 1=1 
AND (annonce.titre_annonce LIKE CONCAT('%', :terms_titre, '%') 
OR annonce.desc_annonce LIKE CONCAT('%', :terms_desc, '%')) 

AND annonce.id_categorie LIKE CONCAT(:id_categorie, '%') 

 AND annonce.id_annonce = ( 
     SELECT critere.id_annonce FROM critere 
      WHERE critere.nom_critere = 'type-de-bien' AND critere.valeur_critere = 'Maison' )

      
