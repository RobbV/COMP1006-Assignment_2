/*----- Robbert Van der Grift:  
		Student#:200326832
        Assignment#2: CMS
--------------------------------------------------------------------------------*/
use gc200326832;

 /* client database table*/ 
create table users_db(
	
    user_id		VARCHAR(10),
    username	VARCHAR(25),
    password	VARCHAR(1000),
    admin		BIT,
	gen_user	BIT
);

select * from users_db;