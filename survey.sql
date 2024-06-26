#DROP DATABASE IF EXISTS Survey;

CREATE DATABASE IF NOT EXISTS Survey;

USE Survey;

DROP TABLE IF EXISTS Results;

CREATE TABLE Results(

	Survey_Gender VARCHAR(50),
	Question_One INT(8),
  Question_Two INT(8),
  Question_Three INT(8),
  Question_Four INT(8),
  Question_Five INT(8),
  Question_Six INT(8),
  Question_Seven INT(8),
  Question_Eight INT(8),
  Question_Nine INT(8),
  Question_Ten INT(8),
  Question_Eleven INT(8),
  Question_Twelve INT(8),
  Question_Thirteen INT(8),
  Question_Fourteen INT(8),
  Question_Fifteen INT(8),
  Result_Score INT(8)

);

INSERT INTO Results
VALUES ("MALE", 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 15),
       ("FEMALE",5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 75);
       
