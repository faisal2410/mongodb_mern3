
-- -- -- -- LOCATION-- -- -- 

CREATE TABLE location
(
location_id VARCHAR(20) NOT NULL,
division VARCHAR(30) NOT NULL,
district VARCHAR(30) NOT NULL,
thana VARCHAR(30),
zip_code INTEGER NOT NULL,

CONSTRAINT PK_location PRIMARY KEY(location_id)
);

-- -- -- -- -- PROFILE-- -- -- -- -

CREATE TABLE profile
(
profile_no VARCHAR(20) NOT NULL,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
gender VARCHAR(20) NOT NULL,
date_of_birth DATE,
profile_picture VARCHAR(200),
phone_no VARCHAR(11) NOT NULL,
location_id VARCHAR(20) NOT NULL,
CONSTRAINT PK_profile PRIMARY KEY(profile_no),
CONSTRAINT FK_profile_location_id FOREIGN KEY(location_id) REFERENCES location(location_id),
CONSTRAINT VALID_profile_gender CHECK(gender IN('MALE','FEMALE','OTHERS'))
);


-- -- -- ORGANIZATION-- -- -- -- -- 

CREATE TABLE organization
(
organization_id VARCHAR(20) NOT NULL, 
organization_name VARCHAR(30) NOT NULL,
organization_type VARCHAR(30),
location_id VARCHAR(20) NOT NULL,
CONSTRAINT PK_organization PRIMARY KEY(organization_id),
CONSTRAINT FK_organization_location_id FOREIGN KEY(location_id) REFERENCES location(location_id));

-- -- -- -- -INSTITUTION-- -- -- -- -- 

CREATE TABLE institution
(
institution_id VARCHAR(20) NOT NULL, 
institution_name VARCHAR(30) NOT NULL,
institution_type VARCHAR(30),
location_id VARCHAR(20) NOT NULL,
CONSTRAINT PK_institution PRIMARY KEY(institution_id),
CONSTRAINT FK_institution_location_id FOREIGN KEY(location_id) REFERENCES location(location_id)
);

-- -- -- -INSTITION_PROFILE_RELATION-- -- -- -- 

CREATE TABLE education_history
(
profile_no VARCHAR(20) NOT NULL,
institution_id VARCHAR(20) NOT NULL,
faculty VARCHAR(30) NOT NULL,
start_date DATE NOT NULL,
end_date DATE,
result VARCHAR(30),
CONSTRAINT PK_edu_history PRIMARY KEY(profile_no,institution_id),
CONSTRAINT FK_edu_history_profile_no FOREIGN KEY(profile_no) REFERENCES profile(profile_no),
CONSTRAINT FK_edu_history_inst_id FOREIGN KEY(institution_id) REFERENCES institution(institution_id)
);

-- -- -- -- -- ORGANIZATION_PROFILE_RELATION-- -- -- -

CREATE TABLE work_history 
(
profile_no VARCHAR(20) NOT NULL,
organization_id VARCHAR(20) NOT NULL,
position VARCHAR(30),
start_date DATE NOT NULL,
end_date DATE,
salary INT NOT NULL,
CONSTRAINT PK_work_history PRIMARY KEY(profile_no,organization_id),
CONSTRAINT FK_work_history_profile_no FOREIGN KEY(profile_no) REFERENCES profile(profile_no),
CONSTRAINT FK_work_history_org_id FOREIGN KEY(organization_id) REFERENCES organization(organization_id)
);

-- -- -- -- -- ACCOUNT-- -- -- -- -- -

CREATE TABLE account
(
 username VARCHAR(20) NOT NULL,
 email VARCHAR(30) NOT NULL,
 password VARCHAR(30) NOT NULL,
 profile_no VARCHAR(20) NOT NULL,
 CONSTRAINT PK_account PRIMARY KEY(username),
 CONSTRAINT UNIQUE_account_email UNIQUE(email),
 CONSTRAINT FK_account_profile_no FOREIGN KEY(profile_no) REFERENCES profile(profile_no)  
);


-- -- -- -- -- -ADVERTISEMENT-- -- -- -- -- -- -- -- -

CREATE TABLE advertisement
(
advertisement_id VARCHAR(20) NOT NULL,
advertisement_type VARCHAR(30),
payment_amount INT,
payment_system VARCHAR(30) NOT NULL,
ad_time DATE,
username VARCHAR(20) NOT NULL,
transaction VARCHAR(80) NOT NULL,

CONSTRAINT PK_advertisement PRIMARY KEY(advertisement_id),
CONSTRAINT FK_advertisement_username FOREIGN KEY(username) REFERENCES account(username)
);


-- -- -- -PRODUCT-- -- -- -- -

CREATE TABLE product
(
product_id VARCHAR(20) NOT NULL, 
product_name VARCHAR(30) NOT NULL, 
price INT NOT NULL,
description VARCHAR(300) NOT NULL, 
contact_no VARCHAR(11) NOT NULL,

advertisement_id VARCHAR(20) NOT NULL,

CONSTRAINT PK_product PRIMARY KEY(product_id),
CONSTRAINT CHECK_product_price CHECK(price>0),
CONSTRAINT FK_product_advertisement_id FOREIGN KEY(advertisement_id) REFERENCES advertisement(advertisement_id)
);

-- -- -- IMAGES-- -- -- -- 

CREATE TABLE image
(
image_id VARCHAR(20) NOT NULL, 
image_url VARCHAR(200) NOT NULL, 
product_id VARCHAR(20) NOT NULL, 

CONSTRAINT PK_image PRIMARY KEY(image_id),
CONSTRAINT FK_image_product_id FOREIGN KEY(product_id) REFERENCES product(product_id)
);

-- -- -- -- -PROCDUCT_DEVICES-- -- -- -- 

CREATE TABLE devices
(
product_id VARCHAR(20) NOT NULL,
device_catagory VARCHAR(30) NOT NULL,
brand VARCHAR(30) NOT NULL,
model VARCHAR(30) NOT NULL,
generation VARCHAR(20),
features VARCHAR(500),
dev_condition VARCHAR(30) NOT NULL,
authenticity VARCHAR(30) NOT NULL,

CONSTRAINT PK_devices PRIMARY KEY(product_id),
CONSTRAINT FK_devices_product_id FOREIGN KEY(product_id) REFERENCES product(product_id)

);

-- -- -- -- -PROCDUCT_PET-- -- -- -- 

CREATE TABLE pet
(
product_id VARCHAR(20) NOT NULL,
pet_type VARCHAR(30) NOT NULL,
color VARCHAR(30) ,
age INT NOT NULL,
gender VARCHAR(20) NOT NULL,
food_habit VARCHAR(200) NOT NULL,

CONSTRAINT PK_pet PRIMARY KEY(product_id),
CONSTRAINT FK_pet_product_id FOREIGN KEY(product_id) REFERENCES product(product_id)

);

-- -- -- -- -PROCDUCT_BOOK-- -- -- -- 

CREATE TABLE book
(
product_id VARCHAR(20) NOT NULL,
writer VARCHAR(30) NOT NULL,
genre VARCHAR(30) NOT NULL,
book_condition VARCHAR(200) NOT NULL,

CONSTRAINT PK_book PRIMARY KEY(product_id),
CONSTRAINT FK_book_product_id FOREIGN KEY(product_id) REFERENCES product(product_id)

);

-- -- -- -- -PROCDUCT_COURSE-- -- -- -- 

CREATE TABLE course
(
product_id VARCHAR(20) NOT NULL,
course_title VARCHAR(50) NOT NULL,
organization VARCHAR(30) NOT NULL,

CONSTRAINT PK_course PRIMARY KEY(product_id),
CONSTRAINT FK_course_product_id FOREIGN KEY(product_id) REFERENCES product(product_id)

);

-- -- -- -- -PROCDUCT_TUTION-- -- -- -- 

CREATE TABLE tution
(
product_id VARCHAR(20) NOT NULL,
tution_subject VARCHAR(50) NOT NULL,
time_duration  VARCHAR(30) NOT NULL,
tutor_gender VARCHAR(20) NOT NULL, 
education_level VARCHAR(30) NOT NULL,

CONSTRAINT PK_tution PRIMARY KEY(product_id),
CONSTRAINT FK_tution_product_id FOREIGN KEY(product_id) REFERENCES product(product_id),
CONSTRAINT VALID_tution_gender CHECK(tutor_gender IN('MALE','FEMALE','OTHERS'))
);

-- -- -- -- -- JOB-- -- -- -- -- -- -- 

CREATE TABLE job
(
job_id VARCHAR(20) NOT NULL,
job_type VARCHAR(30) NOT NULL,
salary INT NOT NULL,
designation VARCHAR(30),
business_function VARCHAR(30),
description VARCHAR(300),
required_experience VARCHAR(30),
gender_preference VARCHAR(10),
minimum_qualification VARCHAR(30),
skills_summary VARCHAR(1000),

advertisement_id VARCHAR(20) NOT NULL, 

CONSTRAINT PK_job PRIMARY KEY(job_id),
CONSTRAINT FK_job_advertisement_id FOREIGN KEY(advertisement_id) REFERENCES advertisement(advertisement_id),
CONSTRAINT CHECK_job_salary CHECK(salary>0)
);


-- -- -- -- -- -- -- -- CHAT-- -- -- -- -- -- -- -- -- -- -- -

CREATE TABLE chat
(
chat_id VARCHAR(20) NOT NULL,
message_content VARCHAR(1000) NOT NULL,
time DATE NOT NULL,

sender_username VARCHAR(20) NOT NULL,
receiver_username VARCHAR(20) NOT NULL,

CONSTRAINT PK_chat PRIMARY KEY(chat_id),
CONSTRAINT FK_chat_sender_username FOREIGN KEY(sender_username) REFERENCES account(username),
CONSTRAINT FK_chat_receiver_username FOREIGN KEY(receiver_username) REFERENCES account(username)
);
