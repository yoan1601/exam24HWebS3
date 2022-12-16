
-- getNbHabitatDispoJour
    gour

-- getAllReservationByDate
select * from reservation where '2022-04-16' between datearrivee and datedepart;

-- authentification
select * from utilisateur where email = 'blabla' and mdp = '1234';

-- getMontantLoyerJour
select sum(h.loyer)
from habitation h 
join reservation r on r.idhabitation = h.id 
where '2022-04-16' between r.datearrivee and r.datedepart;

-- getNbHabitatOQPJour
select count(h.*)
from habitation h 
join reservation r on r.idhabitation = h.id 
where '2022-04-16' between r.datearrivee and r.datedepart;

-- delete 
delete from photo where idhabitation = 25;
delete from reservation where idhabitation = 25;
delete from habitation where id = 25;

-- modifier habitation
update habitation set idCategorie = 1, nbChambre = 3, loyer = 400, quartier = 'anosy avaratra', descri = 'new descri' where id = 1;

-- get habitat by id 
select * from habitation where id = 1;

-- search by description
select * from habitation where descri like '%hote%';

-- getAllHabitation 
select * from habitation where idCategorie = 1;