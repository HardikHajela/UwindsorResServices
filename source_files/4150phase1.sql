CREATE TABLE `student` ( 

    `G12NUM` INT(9), #PRIMARY 

    `STUDENT_NAME` VARCHAR(50) NOT NULL, 

    `STUDENT_HOMEADDRESS` VARCHAR(120),  

    `STUDENT_DOB` DATE NOT NULL, 

    `STUDENT_GENDER` VARCHAR(30),  

    `LEVEL_OF_STUDY` VARCHAR(30),  

    `DEGREE_TYPE` VARCHAR(30),  

    `MAJOR` VARCHAR(150),  

    `STUDENT_NATIONALITY` VARCHAR(20), 

    `DOMESTIC` CHAR(1),  

    `SPECIAL_NEEDS` VARCHAR(150),   

    `PLACED` CHAR(1) NOT NULL 

); 

CREATE TABLE `staff` ( 

    `EMP_NUM` INT(9), #PRIMARY 

    `EMP_NAME` VARCHAR(50) NOT NULL, 

    `EMP_HOME_PHONE` BIGINT(10),  

    `EMP_DOB` DATE NOT NULL, 

    `EMP_GENDER` VARCHAR(20),  

    `EMP_DESIGNATION` VARCHAR(50), 

    `EMP_OFFICE_LOCATION` VARCHAR(50), 

    `EMP_OFFICE_PHONE` BIGINT(10), 

     `EMP_AGE` INT(2) 

); 

CREATE TABLE `advisor` ( 

    `ADV_ID` VARCHAR(20), # PRIMARY 

    `ADV_NAME` VARCHAR(30) NOT NULL, 

    `ADV_POSITION` VARCHAR(50),  

    `ADV_DEPT` VARCHAR(50), 

    `ADV_PHONE` VARCHAR(50), 

    `ADV_ROOM_NO` INT(3) 

); 

CREATE TABLE `advisor_appointment` ( 

    `G12NUM` INT(9), #FOREIGN FROM STUDENT 

    `ADV_ID` VARCHAR(20) #FOREIGN FROM ADVISOR  

); 
 

 CREATE TABLE `flat` ( 

    `FLAT_ID` VARCHAR(20), #PRIMARY 

    `FLAT_TYPE` VARCHAR(50), 

    `FLAT_ADDRESS` VARCHAR(120) NOT NULL, 

    `RES_NUM` VARCHAR(20) NOT NULL, 

    `NUMBER_OF_ROOMS` TINYINT(1), #CONSTRAINT >0 

    `NUMBER_OF_VACANT_ROOMS` TINYINT(1) #CONSTRAINT >0  

); 

CREATE TABLE `room` ( 

    `PLACENUM` VARCHAR(20), #PRIMARY 

    `FLAT_ID` VARCHAR(20), #FOREIGN FROM FLAT 

    `ROOM_NUMBER_IN_FLAT` TINYINT(1) NOT NULL, 

); 


CREATE TABLE `assign` ( 

    `PLACENUM` VARCHAR(20), #FOREIGN FROM ROOM  

    `G12NUM` INT(9) #FOREIGN FROM STUDENT and PRIMARY KEY 

    `MONTHLY_RENT` FLOAT(8,2) 

); 

CREATE TABLE `residence` ( 

    `RES_NUM` VARCHAR(20), #PRIMARY 

    `RES_NAME` VARCHAR(50) NOT NULL, 

    `RES_ADDRESS` VARCHAR(150) NOT NULL, 

    `RES_PHONE` BIGINT(10),   

    `RES_MANAGER_NAME` VARCHAR(50),  

    `FLAT_TYPE` VARCHAR(50) #FOREIGN FROM FLAT 

); 


CREATE TABLE `lease` ( 

    `LEASE_NUM` VARCHAR(9), #PRIMARY 

    `LEASE_TERM` TINYINT(1) NOT NULL, #CONSTRAINT <3 

    `G12NUM` INT(9) NOT NULL, #FOREIGN FROM STUDENT 

    `STUDENT_NAME` VARCHAR(50), #FOREIGN FROM STUDENT 

    `PLACENUM` VARCHAR(20) NOT NULL, #FOREIGN FROM ROOM 

    `ROOM_NUMBER_IN_FLAT` TINYINT(1), #FOREIGN FROM ROOM 

    `FLAT_ADDRESS` VARCHAR(120), #FOREIGN FROM FLAT 

    `MONTHLY_RENT` FLOAT(8,2), #FOREIGN FROM ROOM  

    `MOVEINDATE` DATE,   

    `MOVEOUTDATE` DATE,   

    `PROJECTED_MOVEINDATE` DATE, 

    `PROJECTED_MOVEOUTDATE` DATE 

); 

CREATE TABLE `invoice` ( 

    `INV_NUM` VARCHAR(9), #PRIMARY 

    `LEASE_NUM` VARCHAR(9) NOT NULL, #FOREIGN FROM LEASE 

    `INV_TERM_NUM` TINYINT(1), #CONSTRAINT <3 

    `DATE_OF_INV` DATE NOT NULL, 

    `PAYMENT_DUE_DATE` DATE NOT NULL, 

    `PAYMENT_DUE` CHAR(1) NOT NULL, 

    `G12NUM` INT(9) NOT NULL, #FOREIGN FROM STUDENT 

    `STUDENT_NAME` VARCHAR(50), #FOREIGN FROM STUDENT 

    `PLACENUM` VARCHAR(20) NOT NULL, #FOREIGN FROM ROOM 

    `ROOM_NUMBER_IN_FLAT` TINYINT(1), #FOREIGN FROM ROOM  

    `FLAT_ADDRESS` VARCHAR(120), #FOREIGN FROM FLAT 

    `MODE_OF_PAYMENT` VARCHAR(50), 

    `FIRST_REMINDER_DATE` DATE, 

    `SECOND_REMINDER_DATE` DATE 

);

CREATE TABLE `inspection` ( 

    `INSPECTION_ID` VARCHAR(20), #PRIMARY 

    `INSPECTOR_NAME` VARCHAR(50) NOT NULL, 

    `PLACENUM` VARCHAR(20) NOT NULL, #FOREIGN FROM ROOM 

    `DATE_OF_INSPECTION` DATE NOT NULL, 

    `INSPECTION_OUTCOME` VARCHAR(50) NOT NULL, 

    `COMMENTS` VARCHAR(300) DEFAULT NULL 

); 

INSERT INTO `student` VALUES  

('110032456', 'Harry Potter', '4 Privet Drive, Little Whinging, Surrey, England', '2000-07-31', 'Male', '1st year', 'Bachelors', 'Wizardry', 'English', 'N', 'Has an owl', 'N');  

INSERT INTO `student` VALUES  

('110012344', 'Hermione Granger', '8 Heathgate, Hampstead Suburb, London, England', '2001-09-01', 'Female', '2nd year', 'Diploma', 'Witch Craft with Levitation', 'English', 'N', 'Has a cat', 'Y');  

INSERT INTO `student` VALUES  

('110012390', 'Susan Bones', '1835 73rd Ave NE, Medina, Washington, USA', '1997-12-10', 'Female', '2nd year', 'Masters', 'Witchcraft with Dark Magic', 'American', 'Y', 'Has no friends', 'Y');  

 

INSERT into `staff` values  

('1234', 'BOB', '2243567894','1989-12-17','MALE','ASSISTANT MANAGER','G2','2261234567', 32); 

INSERT into `staff` values 

 ('5678', 'TINA','2234567896', '1974-11-24','FEMALE', 'MANAGER','G1','2261234568', 48); 

INSERT into `staff` values  

('9012', 'DON', '2234567894', '1993-04-15','MALE','MANAGER','R1','2261234568', 29);



INSERT INTO `advisor` VALUES  

('101', 'Neville Longbottom', 'Professor', 'Herbology', '7053302710', 'A1234'); 

INSERT INTO `advisor` VALUES  

('102', 'Filius Flitwick', 'Professor', 'Levitation','5199737041', 'A3455'); 

INSERT INTO `advisor` VALUES  

('103', 'Minerva Mcgonagall', 'Professor', 'Transformation','2265678901', 'A4567'); 



INSERT INTO `advisor_appointment` VALUES  

('110032456','101'); 

INSERT INTO `advisor_appointment` VALUES  

('110012344','102'); 

INSERT INTO `advisor_appointment` VALUES  

('110012390','103'); 



INSERT into `flat` values 

 ('477', 'Studio','7 Hylian Drive', 'G401', '1', '0'); 

INSERT into `flat` values  

('679', 'Apartment','6 Eldin Bridge','R402', '3', '1'); 

INSERT into `flat` values 

 ('789', 'Studio','7 Hylian Drive', 'G403', '1', '1'); 




 INSERT into `room` values  

('G12', '477','12'); 

INSERT into `room` values  

('R1', '679','1'); 

INSERT into `room` values 

 ('G4', '789','4'); 




 INSERT into `assign` values  

('G12','110032456', 800.00); 
 
INSERT into `assign` values  

('R1','110012344', 700.00); 

INSERT into `assign` values  

('G4','110012390', 800.00); 




INSERT INTO `residence` values 

 ('G401', 'Gryffindor', '7 Hylian Drive', '7053302710', 'TINA', 'Studio'); 

INSERT INTO `residence` values 

('R402', 'Ravenclaw', '6 Eldin Bridge', '5199737041', 'DON', 'Apartment'); 

INSERT INTO `residence` values 

('G403', 'Gryffindor', '7 Hylian Drive', '7053302710', 'TINA', 'Studio'); 




INSERT into `lease` values  

('L1','1','110032456','Harry Potter','G12','12','7 Hylian Drive',800.00,'2022-09-04','2022-12-22','2022-09-04','2022-12-20');  

INSERT into `lease` values 

 ('L2','2','110012344','Hermione Granger','R1','1','6 Eldin Bridge',700.00,'2022-09-10','2022-12-22','2022-09-10','2023-04-20');  

INSERT into `lease` values 

 ('L3','2','110012390','Susan Bones','G4','4','7 Hylian Drive',800.00,'2022-09-06','2022-12-22','2022-09-06','2023-04-15');  



 INSERT into `invoice` values  

('I1','L1','1','2022-09-09','2022-10-15','Y','110032456','Harry Potter','G12','12','7 Hylian Drive','debit','2022-09-25','2022-10-10');
 
INSERT into `invoice` values  

('I2','L2','1','2022-09-15','2022-10-15','Y','110012344','Hermione Granger','R1','1','6 Eldin Bridge','debit','2022-09-25','2022-10-10'); 

INSERT into `invoice` values  

('I3','L3','1','2022-09-11','2022-10-15','Y','110012390','Susan Bones','G4','4','7 Hylian Drive','debit','2022-09-25','2022-10-10');




INSERT into `inspection` values 

 ('9273', 'TINA', 'G12', '2022-09-21', 'GOOD', 'ROOM IN GOOD CONDITION'); 

INSERT into `inspection` values 

 ('2847', 'BOB', 'R1', '2022-09-20','BAD', 'ROOM IN BAD CONDITION'); 

INSERT into `inspection` values 

 ('4068', 'TINA', 'G4', '2022-09-23','BAD','ROOM IN BAD CONDITION'); 



 CREATE INDEX STUDENT_NAME ON  
student (STUDENT_NAME); 



CREATE INDEX ROOM_NUMBER_IN_FLAT ON  
room (ROOM_NUMBER_IN_FLAT); 



CREATE INDEX MONTHLY_RENT ON  
assign (MONTHLY_RENT); 



CREATE INDEX FLAT_TYPE ON  
flat (FLAT_TYPE); 
CREATE INDEX FLAT_ADDRESS ON  
flat (FLAT_ADDRESS); 



ALTER TABLE `student` ADD CONSTRAINT STUDENT_PRIMARY_KEY PRIMARY KEY (G12NUM); 



ALTER TABLE `staff` ADD CONSTRAINT STAFF_PRIMARY_KEY PRIMARY KEY (EMP_NUM);



ALTER TABLE `advisor` ADD CONSTRAINT ADV_PRIMARY_KEY PRIMARY KEY (ADV_ID);



ALTER TABLE `advisor_appointment`  

ADD CONSTRAINT `ADVID_in_ADVAPPT` FOREIGN KEY (`ADV_ID`) REFERENCES `advisor`(`ADV_ID`)  

ON DELETE RESTRICT ON UPDATE RESTRICT, 

ADD CONSTRAINT `G12NUM_in_ADVAPPT` FOREIGN KEY (`G12NUM`) REFERENCES `student`(`G12NUM`)  

ON DELETE RESTRICT ON UPDATE RESTRICT;




ALTER TABLE `flat`  

ADD CONSTRAINT FLAT_PRIMARY_KEY PRIMARY KEY (FLAT_ID),  

ADD CONSTRAINT NUMBER_OF_ROOMS0 CHECK (NUMBER_OF_ROOMS>=0) 

ADD CONSTRAINT NUMBER_OF_VACANT_ROOMS0 CHECK (NUMBER_OF_VACANT_ROOMS>=0); 



ALTER TABLE `flat`  

ADD CONSTRAINT `RESNUM_in_FLAT` FOREIGN KEY (`Res_NUM`) REFERENCES `residence`(`RES_NAME`)  

ON DELETE RESTRICT ON UPDATE RESTRICT;



ALTER TABLE `room` ADD CONSTRAINT ROOM_PRIMARY_KEY PRIMARY KEY (PLACENUM); 

ALTER TABLE `flat` ADD CONSTRAINT `FLATID_in_ROOM` FOREIGN KEY (`FLAT_ID`) REFERENCES `flat`(`FLAT_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT; 



ALTER TABLE `assign` ADD PRIMARY KEY(`G12NUM`); 
 

ALTER TABLE `assign`  

ADD CONSTRAINT `ADVID_in_ASSIGN` FOREIGN KEY (`PLACENUM`) REFERENCES `room`(`PLACENUM`)  

ON DELETE RESTRICT ON UPDATE RESTRICT, 

ADD CONSTRAINT `G12NUM_in_ASSIGN` FOREIGN KEY (`G12NUM`) REFERENCES `student`(`G12NUM`), 

ON DELETE RESTRICT ON UPDATE RESTRICT; 



ALTER TABLE `residence` ADD CONSTRAINT RES_PRIMARY_KEY PRIMARY KEY (RES_NUM); 

ALTER TABLE `residence`  

ADD CONSTRAINT `FLATTYPE_in_RESIDENCE` FOREIGN KEY (`FLAT_TYPE`) REFERENCES `flat`(`FLAT_TYPE`)  

ON DELETE RESTRICT ON UPDATE RESTRICT; 



ALTER TABLE `lease`  

ADD CONSTRAINT RES_PRIMARY_KEY PRIMARY KEY (LEASE_NUM), 

ADD CONSTRAINT LEASE_TERM3 CHECK (LEASE_TERM <3);



ALTER TABLE `lease`  

ADD CONSTRAINT `G12NUM_in_LEASE` FOREIGN KEY (`G12NUM`) REFERENCES `student`(`G12NUM`)  

ON DELETE RESTRICT ON UPDATE RESTRICT, 

ADD CONSTRAINT `STUDENT_NAME_in_LEASE` FOREIGN KEY (`STUDENT_NAME`) REFERENCES `student`(`STUDENT_NAME`)  

ON DELETE RESTRICT ON UPDATE RESTRICT, 

ADD CONSTRAINT `PLACENUM_in_LEASE` FOREIGN KEY (`PLACENUM`) REFERENCES `room`(`PLACENUM`)  

ON DELETE RESTRICT ON UPDATE RESTRICT, 


ADD CONSTRAINT `ROOMNUMINFLAT_in_LEASE` FOREIGN KEY (`ROOM_NUMBER_IN_FLAT`) REFERENCES `room`(`ROOM_NUMBER_IN_FLAT`)  

ON DELETE RESTRICT ON UPDATE RESTRICT, 

ADD CONSTRAINT `FLATADDRESS_in_LEASE` FOREIGN KEY (`FLAT_ADDRESS`) REFERENCES `flat`(`FLAT_ADDRESS`)  

ON DELETE RESTRICT ON UPDATE RESTRICT, 


ALTER TABLE `lease` ADD CONSTRAINT `MONTHLYRENT_in_LEASE` FOREIGN KEY (`MONTHLY_RENT`) REFERENCES `assign`(`MONTHLY_RENT`) ON DELETE RESTRICT ON UPDATE RESTRICT;



ALTER TABLE `invoice` 

ADD CONSTRAINT INV_PRIMARY_KEY PRIMARY KEY (INV_NUM),  

ADD CONSTRAINT INV_NUM_TERM3 CHECK (INV_TERM_NUM <3); 



ALTER TABLE `invoice`  

ADD CONSTRAINT `LEASENUM_in_INV` FOREIGN KEY (`LEASE_NUM`) REFERENCES `lease`(`LEASE_NUM`)  

ON DELETE RESTRICT ON UPDATE RESTRICT, 

ADD CONSTRAINT `G12NUM_in_INV` FOREIGN KEY (`G12NUM`) REFERENCES `student`(`G12NUM`)  

ON DELETE RESTRICT ON UPDATE RESTRICT,  

ADD CONSTRAINT `STUDENTNAME_in_INV` FOREIGN KEY (`STUDENT_NAME`) REFERENCES `student`(`STUDENT_NAME`)  

ON DELETE RESTRICT ON UPDATE RESTRICT, 

ADD CONSTRAINT `PLACENUM_in_INV` FOREIGN KEY (`PLACENUM`) REFERENCES `room`(`PLACENUM`)  

ON DELETE RESTRICT ON UPDATE RESTRICT, 

ADD CONSTRAINT `ROOMNUMINFLAT_in_INV` FOREIGN KEY (`ROOM_NUMBER_IN_FLAT`) REFERENCES `room`(`ROOM_NUMBER_IN_FLAT`)  

 

ON DELETE RESTRICT ON UPDATE RESTRICT, 

ADD CONSTRAINT `FLATADDRESS_in_INV` FOREIGN KEY (`FLAT_ADDRESS`) REFERENCES `flat`(`FLAT_ADDRESS`)  

ON DELETE RESTRICT ON UPDATE RESTRICT; 




ALTER TABLE `inspection` 

ADD CONSTRAINT INSPECTION_PRIMARY_KEY PRIMARY KEY (INSPECTION_ID); 

 

ALTER TABLE `inspection`  

ADD CONSTRAINT `PLACENUM_in_INSPECTION` FOREIGN KEY (`PLACENUM`) REFERENCES `room`(`PLACENUM`)  

ON DELETE RESTRICT ON UPDATE RESTRICT; 




CREATE OR REPLACE VIEW Q1 AS 

SELECT STUDENT_NAME, G12NUM, LEASE_NUM, LEASE_TERM, MONTHLY_RENT, FLAT_ADDRESS, MOVEINDATE  

FROM LEASE; 



CREATE OR REPLACE VIEW Q2 AS 

SELECT STUDENT_NAME, LEASE_TERM*MONTHLY_RENT AS TOTAL_RENT_PAID 

FROM LEASE; 



CREATE OR REPLACE VIEW Q3 AS 

SELECT G12NUM , STUDENT_NAME, INV_TERM_NUM, PAYMENT_DUE_DATE, LEASE_NUM 

FROM invoice  

WHERE PAYMENT_DUE LIKE 'Y'; 



CREATE OR REPLACE VIEW Q4 AS  

SELECT INSPECTION_ID, INSPECTOR_NAME, DATE_OF_INSPECTION, PLACENUM, COMMENTS  

FROM inspection  

WHERE INSPECTION_OUTCOME LIKE 'bad'; 




CREATE OR REPLACE VIEW Q6 AS 

SELECT STUDENT_NAME, DEGREE_TYPE, DOMESTIC, SPECIAL_NEEDS, PLACED  

FROM `Student` 

WHERE PLACED LIKE 'N'; 


#a. Present a report listing the names and Grade 12 numbers of students with the details of their lease agreements.  

 

SELECT STUDENT_NAME, G12NUM, LEASE_NUM, LEASE_TERM, MONTHLY_RENT, FLAT_ADDRESS, MOVEINDATE 

FROM lease; 

 

 

 

#b. Display the details of the total rent paid by a given student. 

 

SELECT STUDENT_NAME, LEASE_TERM*MONTHLY_RENT AS TOTAL_RENT_PAID 

FROM LEASE; 

 

 

#c. Present a report on students that have not paid their invoices by a given date.  

 

SELECT G12NUM, STUDENT_NAME, INV_TERM_NUM, PAYMENT_DUE_DATE, LEASE_NUM 

FROM invoice  

WHERE PAYMENT_DUE LIKE 'Y'; 

 

 

 

 

 

#d. Display the details of flat inspections where the property was found to be in an unsatisfactory condition.  

 

SELECT INSPECTION_ID, INSPECTOR_NAME, DATE_OF_INSPECTION, PLACENUM, COMMENTS  

FROM inspection  

WHERE INSPECTION_OUTCOME LIKE 'bad'; 

 

 

 

 

#e. Present a report of the names and Grade 12 numbers of students with their room number and place number in a particular hall of residence.  

 

SELECT LEASE.STUDENT_NAME, LEASE.G12NUM, LEASE.ROOM_NUMBER_IN_FLAT, LEASE.PLACENUM  

FROM LEASE, FLAT,RESIDENCE, ROOM 

where RES_NAME like 'Gryffindor' 

and ROOM.PLACENUM = LEASE.PLACENUM 

and ROOM.FLAT_ID = FLAT.FLAT_ID 

and FLAT.RES_NUM = RESIDENCE.RES_NUM; 

 

 

 

 

 

 

#f. Present a report listing the details of all students currently on the waiting list for accommodation, that is, not placed.  

 

SELECT STUDENT_NAME, DEGREE_TYPE, DOMESTIC, SPECIAL_NEEDS, PLACED  

FROM `Student` 

WHERE PLACED LIKE 'N'; 

 

 

 

#g. Display the total number of students in each student category.  

 

SELECT LEVEL_OF_STUDY, COUNT(DISTINCT LEVEL_OF_STUDY) AS NUMBER_OF_ENROLLED_STUDENTS 

FROM Student 

GROUP BY LEVEL_OF_STUDY; 

 

 

 

#h. Display the name and internal telephone number of the Advisor of Studies for a particular student.  

 

SELECT advisor.ADV_NAME, advisor.ADV_PHONE 

FROM advisor,advisor_appointment,student 

where student.STUDENT_NAME like 'Harry Potter' 

and advisor.ADV_ID=advisor_appointment.ADV_ID 

and student.G12NUM=advisor_appointment.G12NUM; 

 

 

 

 

 

#i. Display the minimum, maximum, and average monthly rent for rooms in halls of residence. 

 

SELECT MIN(assign.MONTHLY_RENT), MAX(assign.MONTHLY_RENT), AVG(assign.MONTHLY_RENT)  

FROM assign, residence, room, flat 

where RES_NAME like 'Gryffindor'  

and assign.PLACENUM = ROOM.PLACENUM  

and ROOM.FLAT_ID = FLAT.FLAT_ID  

and FLAT.RES_NUM = RESIDENCE.RES_NUM; 

 

 

 

 #j. Display the staff number, name, age, and current location of all members of the Hostel staff who are over 40 years old today. 

 

SELECT EMP_NUM, EMP_NAME, EMP_AGE, EMP_OFFICE_LOCATION 

FROM staff 

WHERE EMP_AGE>40; 

SELECT EMP_NUM, EMP_NAME, EMP_AGE, EMP_OFFICE_LOCATION 

FROM staff 

WHERE EMP_AGE>40; 


#####################################################################
Phase 2: PL-SQL
#####################################################################


#1. Write a PL/SQL code that declares variables of types VARCHAR2, CHAR, NUMBER, DATE,  

#BOOLEAN and uses suitable executable section instructions to implement some actions and  

#print some output.  

   

DELIMITER $$   

CREATE OR REPLACE PROCEDURE P2Q1()   

BEGIN   

    DECLARE WHAT_TO_DO VARCHAR(300) DEFAULT 'Kindly Assign Rooms to the      following students ASAP';   

    DECLARE ASSIGNED_STATUS CHAR(1) DEFAULT 'N';   

    DECLARE TOTAL_NUMBER_OF_UNASSIGNED_STUDENTS INT DEFAULT 0;   

    DECLARE ASSIGNMENT_LAST_DATE DATE DEFAULT '2022-08-10';   

    DECLARE DATE_PASSED BOOLEAN DEFAULT TRUE;   

   

    SELECT COUNT(student.PLACED)    

    INTO TOTAL_NUMBER_OF_UNASSIGNED_STUDENTS   

    FROM student   

    WHERE student.PLACED LIKE 'n';  

          

    SELECT WHAT_TO_DO, TOTAL_NUMBER_OF_UNASSIGNED_STUDENTS, ASSIGNED_STATUS, ASSIGNMENT_LAST_DATE, DATE_PASSED;   

END$$   

DELIMITER ;   

   

CALL P2Q1;   

SELECT student.G12NUM, student.STUDENT_NAME  

    FROM student   

    WHERE student.PLACED LIKE 'n';  

 

 #2  

DECLARE   

#This is for table 'residence'  

residence RES_NUM%TYPE #Of type VARCHAR(20)  

name RES_NAME%TYPE #OF TYPE VARCHAR(20)  

BEGIN  

/*select * into residence from PLACENUM   

select * into name from G12  

select * into rent from MONTHLY_RENT */  

DBMS_OUTPUT.PUT_LINE( 'Update Residence name: ');    

update assign set RES_PHONE = 2905738476 where RES_NAME = &RES_NAME;  

select * from Residence; --display updated values  

DBMS_OUTPUT.PUT_LINE( 'Residence number: '|| RES_NUM);    

DBMS_OUTPUT.PUT_LINE( 'Residence name: '||   RES_NAME);  

DBMS_OUTPUT.PUT_LINE( 'Residence address: '||   RES_ADDRESS);  

DBMS_OUTPUT.PUT_LINE( 'Residence Phone number: '||  RES_PHONE);  

DBMS_OUTPUT.PUT_LINE( 'Residence manager name: '||  RES_MANAGER_NAME);  

DBMS_OUTPUT.PUT_LINE( 'Flat type: '||  FLAT-TYPE);  

END;  

 


#3 

 

#3 procedure with nested conditional statements to find out inspections done within a specific date whose outcome was bad so hostel employee can do the inspection again.  

DELIMITER $$  

  

CREATE OR REPLACE PROCEDURE P2Q3()  ?  

BEGIN  ?  

DECLARE DATE_OF_INSPECTION DATE;   

 

DECLARE INSPECTION_OUTCOME VARCHAR(50);   

 

 

DECLARE inspectid VARCHAR(20);  

 

SELECT INSPECTION_ID   

 

INTO inspectid  

 

FROM inspection  

 

LIMIT 1;   

 

IF DATE_OF_INSPECTION  

      BETWEEN "2022-09-10" AND "2022-09-30" THEN   

    	IF INSPECTION_OUTCOME = 'BAD' THEN   

    	SELECT inspectid;   

    	 

END IF;   


END IF;   

    END$$  

DELIMITER ;                   

CALL P2Q3(); 

 


 

#4 Uses G12 num of a student to see if another student doesn’t have the same G12 num, if it does, displays the Student entry with that G12num  

  

DELIMITER $$   

CREATE OR REPLACE PROCEDURE P2Q4(IN G12NUMID INT(9))   

BEGIN   

DECLARE EXIT HANDLER FOR 1062   

BEGIN   

DECLARE G12NUM INT;   

SELECT CONCAT("duplicate entry for the G12NUM ", G12NUMID) AS errorMessage;   

END;   

INSERT INTO student VALUES(G12NUM, STUDENT_NAME , STUDENT_HOMEADDRESS , STUDENT_DOB, STUDENT_GENDER, LEVEL_OF_STUDY , DEGREE_TYPE, MAJOR, STUDENT_NATIONALITY, DOMESTIC, SPECIAL_NEEDS, PLACED);   

SELECT * FROM student WHERE G12NUMID = G12NUM;   

END$$   

DELIMITER ;   

  

CALL P2Q4('110032456');  

 

#5checks to see if a student has paid their invoice or not, if they have not paid then it will display the student name and address so reminder can be sent  

  

DELIMITER $$  

CREATE OR REPLACE PROCEDURE P2Q5()  

BEGIN   

   

DECLARE sname VARCHAR(300) DEFAULT NULL;  

DECLARE faddress VARCHAR(300) DEFAULT NULL;  

DECLARE finished INTEGER DEFAULT 0;  

 

DECLARE CURSOR1   

 

CURSOR FOR   

 

SELECT student_name, flat_address FROM invoice WHERE payment_due = 'Y' order by student_name;  

  	 

DECLARE CONTINUE HANDLER   

        FOR NOT FOUND SET finished = 1;  

   

OPEN cursor1;  

 	 

getAdd: LOOP  

 

FETCH cursor1 INTO sname, faddress;  

        IF finished = 1 THEN   

 

LEAVE getAdd;  

 

END IF;  

 

SELECT sname, faddress;  

 

end loop getAdd;  

      

CLOSE cursor1;  

   

END$$  

DELIMITER ;  

   

CALL P2Q5;  

 

 

#6 Procedure to find vacant rooms in flats so they can be further alotted to students  

  

DELIMITER $$   

CREATE OR REPLACE PROCEDURE P2Q6()   

BEGIN   

   

     DECLARE flatid VARCHAR(20);  

     DECLARE NUMBER_OF_VACANT_ROOMS TINYINT(1);  

       

     SELECT FLAT_ID  

     INTO flatid   

     FROM flat  

     WHERE FLAT_ID = flatid;  

     IF NUMBER_OF_VACANT_ROOMS>0 THEN  

     SELECT flatid, NUMBER_OF_VACANT_ROOMS;  

     END IF;  

       

END$$   

DELIMITER ;   

CALL P2Q6;  

 

#procedure for q8 

 

DELIMITER $$    

CREATE OR REPLACE PROCEDURE notPlacedQ6()    

BEGIN    

SELECT * from student where PLACED = 'N';  

END$$    

DELIMITER ;    

CALL notPlacedQ6();  

 

 

 

 

 

 

 

 

 

 

 

 

#7  

DELIMITER $$  

CREATE or REPLACE FUNCTION isVACANTQ7(givenFlatId VARCHAR(20))  

RETURNS INT  

   

DETERMINISTIC  

   

BEGIN  

   

DECLARE VC_ROOM INT;    

   

select flat.NUMBER_OF_VACANT_ROOMS INTO VC_ROOM from flat  

WHERE flat.FLAT_ID = givenFlatId;  

   

RETURN VC_ROOM;  

END$$  

DELIMITER ;  

 

SELECT isVACANTQ7(679);  


 



#9. Write a PL/SQL code to create a trigger to perform appropriate action as #well as the code to show the effect of this trigger.  

delimiter //  

CREATE or REPLACE TRIGGER TEST BEFORE UPDATE ON assign  

       FOR EACH ROW  

       BEGIN  

           IF NEW.MONTHLY_RENT < OLD.MONTHLY_RENT THEN  

               signal sqlstate '45000' set message_text = 'Rent cannot be decreased';  

           END IF;  

       END;//  

delimiter ;  

 

UPDATE assign set assign.MONTHLY_RENT =600 where assign.G12NUM=110012344 and assign.PLACENUM like 'R1';  

 

UPDATE assign set assign.MONTHLY_RENT =750 where assign.G12NUM=110012344;  








