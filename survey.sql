-- Create a new database if it doesn't exist
CREATE DATABASE IF NOT EXISTS survey_database;

-- Use the newly created database
USE survey_database;

-- Create a table to store survey responses
CREATE TABLE IF NOT EXISTS survey_responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    gender ENUM('female', 'male'),
    question_number INT,
    response INT,
    survey_page INT,
    response_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- Example INSERT statement to insert survey responses
INSERT INTO survey_responses (gender, question_number, response, survey_page)
VALUES 
('female', 1, 3, 1), 
('female', 2, 4, 1), 
('female', 3, 2, 1), 
('female', 4, 5, 1), 
('female', 5, 1, 1),
('male', 1, 5, 1), 
('male', 2, 3, 1), 
('male', 3, 4, 1), 
('male', 4, 2, 1), 
('male', 5, 5, 1),
('female', 6, 4, 2), 
('female', 7, 5, 2), 
('female', 8, 3, 2), 
('female', 9, 2, 2), 
('female', 10, 4, 2),
('male', 6, 4, 2), 
('male', 7, 5, 2), 
('male', 8, 3, 2), 
('male', 9, 2, 2), 
('male', 10, 4, 2),
('female', 11, 3, 3), 
('female', 12, 2, 3), 
('female', 13, 4, 3), 
('female', 14, 5, 3), 
('female', 15, 1, 3),
('male', 11, 4, 3), 
('male', 12, 3, 3), 
('male', 13, 2, 3), 
('male', 14, 5, 3), 
('male', 15, 1, 3);




#DROP DATABASE IF EXISTS Survey;

CREATE DATABASE IF NOT EXISTS Survey;

USE Survey;

DROP TABLE IF EXISTS Results;

CREATE TABLE Results(

	Taker_Name VARCHAR(50),
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
VALUES ('example1',"MALE", 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 15),
       ('example2', "FEMALE",5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 75);
       
