#DROP DATABASE IF EXISTS Survey;

CREATE DATABASE IF NOT EXISTS Survey;

USE Survey;

DROP TABLE IF EXISTS Results;

CREATE TABLE Results(
	Taker_Name VARCHAR(50),
	Question_One INT(3),
  Question_Two INT(3),
  Question_Three INT(3),
  Question_Four INT(3),
  Question_Five INT(3),
  Question_Six INT(3),
  Question_Seven INT(3),
  Question_Eight INT(3),
  Question_Nine INT(3),
  Question_Ten INT(3),
);

INSERT INTO Results
VALUES ('example1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
       ('example2', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
       