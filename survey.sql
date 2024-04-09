#DROP DATABASE IF EXISTS Survey;

CREATE DATABASE IF NOT EXISTS Survey;

USE Survey;

DROP TABLE IF EXISTS Results;

CREATE TABLE Results(
	Taker_Name VARCHAR(50),
	Question_One INT(1),
  Question_Two INT(1),
  Question_Three INT(1),
  Question_Four INT(1),
  Question_Five INT(1),
  Question_Six INT(1),
  Question_Seven INT(1),
  Question_Eight INT(1),
  Question_Nine INT(1),
  Question_Ten INT(1),
);

INSERT INTO Results
VALUES ('example1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
       ('example2', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
       