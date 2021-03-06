DROP TABLE IF EXISTS ACCType;
DROP TABLE IF EXISTS Transfer;
DROP TABLE IF EXISTS Account;
DROP TABLE IF EXISTS Deposit;
DROP TABLE IF EXISTS Withdraw;

CREATE TABLE ACCType(
  Type_No VARCHAR(10) NOT NULL,
  Type_Name VARCHAR(100) NOT NULL,
  DateBegin DATE NOT NULL,
  DateEnd   DATE NOT NULL,
  Rate  FLOAT NOT NULL,
  PRIMARY KEY (Type_No)
) Engine=InnoDB;

CREATE TABLE Account (
  ACC_No VARCHAR(20) NOT NULL,
  Type_No VARCHAR(10) NOT NULL,
  ACC_Name VARCHAR(50) NOT NULL,
  ACC_Surname VARCHAR(50) NOT NULL,
  Address VARCHAR(200) NOT NULL,
  SubDistrict VARCHAR(50) NOT NULL,
  District VARCHAR(50) NOT NULL,
  Province VARCHAR(50) NOT NULL,
  ZipCode VARCHAR(50) NOT NULL,
  DateOp DateTime NOT NULL,
  Balance FLOAT NOT NULL,
  PRIMARY KEY (ACC_No),
  FOREIGN KEY(Type_No) REFERENCES ACCType(Type_No)
)Engine=InnoDB;

CREATE TABLE Transfer (
  Tran_No INT AUTO_INCREMENT NOT NULL,
  ACC_No_Source VARCHAR(20) NOT NULL,
  ACC_No_Dest VARCHAR(20) NOT NULL,
  DateOp  DateTime NOT NULL,
  Amount VARCHAR(20) NOT NULL,
  PRIMARY KEY (Tran_No),
  FOREIGN KEY(ACC_No_Source) REFERENCES Account(ACC_No),
  FOREIGN KEY(ACC_No_Dest) REFERENCES Account(ACC_No)
)Engine=InnoDB;

CREATE TABLE Deposit
(
	Tran_No  INT  AUTO_Increment  NOT NULL,
	ACC_No  VARCHAR(10)  NOT NULL,
	DateOp  DATETIME NOT NULL,
	Amount  FLOAT NOT NULL,
	PRIMARY KEY(Tran_No),
	FOREIGN KEY(ACC_No) REFERENCES Account(ACC_No)
) Engine=InnoDB;

CREATE TABLE Withdraw
(
	Tran_No  INT  AUTO_Increment  NOT NULL,
	ACC_No  VARCHAR(10)  NOT NULL,
	DateOp  DATETIME NOT NULL,
	Amount  FLOAT NOT NULL,
	PRIMARY KEY(Tran_No),
	FOREIGN KEY(ACC_No) REFERENCES Account(ACC_No)
) Engine=InnoDB;

INSERT INTO ACCType VALUES('T001','Fixed Deposit 6 Month',NOW(),NOW(),2.35);
INSERT INTO ACCType VALUES('T002','Fixed Deposit 12 Month',NOW(),NOW(),2.15);
INSERT INTO ACCType VALUES('T003','Saving',NOW(),NOW(),1.2);

INSERT INTO Account VALUES('ACC001','T001','Wittawas','Kanprapun','BUU','Saensuk','Muang','Chonburi','20131',NOW(),10000);
INSERT INTO Account VALUES('ACC002','T003','Nutthenee','Wongpinyokul','BUU','Saensuk','Muang','Chonburi','20131',NOW(),20000);
INSERT INTO Account VALUES('ACC003','T002','Worawit','Pienprasit','BUU','Saensuk','Muang','Chonburi','20131',NOW(),20000);
