/*----- Robbert Van der Grift:  
		Student#:200326832
        Assignment#2: CMS
--------------------------------------------------------------------------------*/
use gc200326832;
drop table users_db;
 /* client database table*/ 
create table users_db(
	
    user_id		VARCHAR(10),
    username	VARCHAR(25),
    email 		VARCHAR(50),
    password	VARCHAR(128),
    admin		BIT,
	gen_user	BIT
);

select * from users_db;

create table client_projects (
	
    client_name		VARCHAR(30),
    client_email	VARCHAR(30),
    project_desc	VARCHAR(300),
    
    
    

);