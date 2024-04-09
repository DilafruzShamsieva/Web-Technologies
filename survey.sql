#DROP DATABASE IF EXISTS Survey;

CREATE DATABASE IF NOT EXISTS Survey;

USE Survey;

DROP TABLE IF EXISTS Results;

CREATE TABLE Results(
	Taker_Name VARCHAR(50),
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
);

INSERT INTO Results
VALUES ('example1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
       ('example2', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5);
       