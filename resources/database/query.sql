DROP database phpdb;
USE phpdb;
SELECT * FROM phpdb.user;
INSERT INTO phpdb.user(id, name, password, email) VALUES(1 ,'Sasha','1234','bendar01@tut.by');
DELETE FROM phpdb.user WHERE id= 1;