CREATE DATABASE `autoadmin`;

CREATE TABLE `users`
(
	user_name varchar(30) NOT NULL,
    user_first_name varchar(30) NOT NULL,
    user_last_name varchar(30) NOT NULL,
    user_password varchar(256) NOT NULL,
    PRIMARY KEY(user_name)
);

INSERT INTO users (user_name, user_first_name, user_last_name, user_password)
 VALUES
 ('r.armand','Rébecca', 'Armand', SHA2('password', 256));
 
 CREATE TABLE `data`
 (
	bodily_injury DOUBLE NOT NULL,
    property_damage DOUBLE NOT NULL,
    medical_payments DOUBLE NOT NULL,
    loss_of_earnings DOUBLE NOT NULL,
    accidental_death DOUBLE NOT NULL,
    uninsured_motorist DOUBLE NOT NULL,
    uninsured_motorist_bodily_damage DOUBLE NOT NULL,
    uninsured_motorist_property_damage DOUBLE NOT NULL,
    upgraded_accident_forgiveness DOUBLE NOT NULL,
    comprehensive DOUBLE NOT NULL,
    collision DOUBLE NOT NULL,
    emergency_road_service DOUBLE NOT NULL,
    rental_reimbursment DOUBLE NOT NULL,
    loss_adjustment_expense DOUBLE NOT NULL,
    profit DOUBLE NOT NULL,
    variable_expense DOUBLE NOT NULL
);

INSERT INTO data (bodily_injury, property_damage, medical_payments, loss_of_earnings, accidental_death, uninsured_motorist, uninsured_motorist_bodily_damage, uninsured_motorist_property_damage, upgraded_accident_forgiveness, comprehensive, collision, emergency_road_service, rental_reimbursment, loss_adjustment_expense, profit, variable_expense)
 VALUES
 ('0.5','0.5','0.5','0.5','0.5','0.5','0.5','0.5','0.5','0.5','0.5','0.5','0.5','0.5','0.5','0.5');
 
