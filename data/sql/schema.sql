CREATE TABLE task (id BIGINT AUTO_INCREMENT, token_id BIGINT, start_date DATE, end_date DATE, effective_date DATE, status BIGINT DEFAULT 1, description LONGTEXT, type VARCHAR(255), agreement_participant_id BIGINT, departure_date datetime, departure_time TIME, departure_status BIGINT DEFAULT 1, return_date datetime, return_time TIME, return_status BIGINT DEFAULT 0, number_of_passangers BIGINT, service_agreement_cost FLOAT(18, 2), service_reason VARCHAR(255), departure_mileage BIGINT, return_mileage BIGINT, difference_mileag BIGINT, service_type_id BIGINT, duel_acquire_id BIGINT, destination VARCHAR(255), service_number_of_days BIGINT, service_delay_status TINYINT(1) DEFAULT '0', number_of_delay_days BIGINT DEFAULT 0, delay_reason LONGTEXT, registration_mode BIGINT, driver_id BIGINT, transferer_id BIGINT, transferee_id BIGINT, new_vehicle_id BIGINT, returnee_id BIGINT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE assigned_vehicle (id BIGINT AUTO_INCREMENT, task_id BIGINT, driver_id BIGINT, vehicle_id BIGINT, assigned_date datetime, maintenance_status TINYINT(1) DEFAULT '0', departure_status TINYINT(1) DEFAULT '0', return_status TINYINT(1) DEFAULT '0', reasigned_status TINYINT(1) DEFAULT '0', INDEX task_id_idx (task_id), INDEX driver_id_idx (driver_id), INDEX vehicle_id_idx (vehicle_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE task (id BIGINT AUTO_INCREMENT, token_id BIGINT, start_date DATE, end_date DATE, effective_date DATE, status BIGINT DEFAULT 1, description LONGTEXT, type VARCHAR(255), agreement_participant_id BIGINT, departure_date datetime, departure_time TIME, departure_status BIGINT DEFAULT 1, return_date datetime, return_time TIME, return_status BIGINT DEFAULT 0, number_of_passangers BIGINT, service_agreement_cost FLOAT(18, 2), service_reason VARCHAR(255), departure_mileage BIGINT, return_mileage BIGINT, difference_mileag BIGINT, service_type_id BIGINT, duel_acquire_id BIGINT, destination VARCHAR(255), service_number_of_days BIGINT, service_delay_status TINYINT(1) DEFAULT '0', number_of_delay_days BIGINT DEFAULT 0, delay_reason LONGTEXT, registration_mode BIGINT, driver_id BIGINT, transferer_id BIGINT, transferee_id BIGINT, new_vehicle_id BIGINT, returnee_id BIGINT, INDEX driver_id_idx (driver_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE campus (id BIGINT AUTO_INCREMENT, name VARCHAR(255), description LONGTEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE category (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, description VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE participant (id BIGINT AUTO_INCREMENT, token_id BIGINT UNIQUE NOT NULL, name VARCHAR(255) NOT NULL, alias VARCHAR(20), participant_type_id BIGINT, status_id BIGINT DEFAULT 1, parent_id BIGINT, leader_participant_id BIGINT, vat_number VARCHAR(255), project_no BIGINT, campus_id BIGINT, description VARCHAR(255), type VARCHAR(255), title VARCHAR(40), father_name VARCHAR(100), grand_father_name VARCHAR(100), gender BIGINT DEFAULT 1, birth_date datetime, birth_place VARCHAR(100), id_no VARCHAR(100), job_title VARCHAR(50), employment_type_id BIGINT, dean_name VARCHAR(255), director_name VARCHAR(255), head_name VARCHAR(100), section_no BIGINT, section_leader_name VARCHAR(255), project_code BIGINT, project_director VARCHAR(255), established_date DATE, company_owner VARCHAR(255), company_license_type BIGINT, INDEX leader_participant_id_idx (leader_participant_id), INDEX participant_type_id_idx (participant_type_id), INDEX campus_id_idx (campus_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE certificate_type (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, description VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE currency (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, alias VARCHAR(40), description LONGTEXT, is_default TINYINT(1) DEFAULT '0', PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE currency_exchange (id BIGINT AUTO_INCREMENT, from_currency_id BIGINT, to_currency_id BIGINT, rate FLOAT(18, 2), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX to_currency_id_idx (to_currency_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE driver (id BIGINT AUTO_INCREMENT, token_id VARCHAR(255), employee_id BIGINT, license_type BIGINT, work_experience BIGINT, desctiption LONGTEXT, INDEX employee_id_idx (employee_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE task (id BIGINT AUTO_INCREMENT, token_id BIGINT, start_date DATE, end_date DATE, effective_date DATE, status BIGINT DEFAULT 1, description LONGTEXT, type VARCHAR(255), agreement_participant_id BIGINT, departure_date datetime, departure_time TIME, departure_status BIGINT DEFAULT 1, return_date datetime, return_time TIME, return_status BIGINT DEFAULT 0, number_of_passangers BIGINT, service_agreement_cost FLOAT(18, 2), service_reason VARCHAR(255), departure_mileage BIGINT, return_mileage BIGINT, difference_mileag BIGINT, service_type_id BIGINT, duel_acquire_id BIGINT, destination VARCHAR(255), service_number_of_days BIGINT, service_delay_status TINYINT(1) DEFAULT '0', number_of_delay_days BIGINT DEFAULT 0, delay_reason LONGTEXT, registration_mode BIGINT, driver_id BIGINT, transferer_id BIGINT, transferee_id BIGINT, new_vehicle_id BIGINT, returnee_id BIGINT, INDEX service_type_id_idx (service_type_id), INDEX agreement_participant_id_idx (agreement_participant_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE fuel_type (id BIGINT AUTO_INCREMENT, name VARCHAR(255), description LONGTEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE item (id BIGINT AUTO_INCREMENT, token VARCHAR(100) NOT NULL, task_id BIGINT, task_order_id BIGINT NOT NULL, category_id BIGINT, category_group_id BIGINT, clss BIGINT DEFAULT 0, unit_id BIGINT DEFAULT 1, quantity FLOAT(18, 2) DEFAULT 0, used_quantity FLOAT(18, 2) DEFAULT 0, current_quantity FLOAT(18, 2) DEFAULT 0, serial_no VARCHAR(255), old_pin VARCHAR(255) DEFAULT 'NA', new_pin VARCHAR(255) DEFAULT 'NA', pin_num BIGINT, is_present TINYINT(1) DEFAULT '0', effective_date BIGINT, status BIGINT DEFAULT 1, description LONGTEXT, type VARCHAR(255), plate_number VARCHAR(255), plate_code VARCHAR(255) DEFAULT 'ET', initial_mileage BIGINT, current_mileage BIGINT, vehicle_type_id BIGINT, litter_per_km FLOAT(18, 2), seatng_capacity BIGINT, engine_number VARCHAR(100), chesis_number VARCHAR(100), vehicle_model VARCHAR(100), vehicl_color VARCHAR(50), weight FLOAT(18, 2), service_type_id BIGINT, fuel_type_id BIGINT, purchased_date DATE, service_year BIGINT DEFAULT 0, checkup_period_id BIGINT, vehicle_status BIGINT DEFAULT 0, fuel_setting_id BIGINT, is_assigned TINYINT(1) DEFAULT '0', spare_identification VARCHAR(100), INDEX item_type_idx (type), INDEX category_id_idx (category_id), INDEX task_id_idx (task_id), INDEX task_order_id_idx (task_order_id), INDEX unit_id_idx (unit_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE item_acquired_attachment (id BIGINT AUTO_INCREMENT, task_id BIGINT, item_id BIGINT, item_name VARCHAR(255), attachment_purpose VARCHAR(255), description LONGTEXT, INDEX task_id_idx (task_id), INDEX item_id_idx (item_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE metric (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, description VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE module_permission_setting (id BIGINT AUTO_INCREMENT, module_name VARCHAR(255), description LONGTEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE participant (id BIGINT AUTO_INCREMENT, token_id BIGINT UNIQUE NOT NULL, name VARCHAR(255) NOT NULL, alias VARCHAR(20), participant_type_id BIGINT, status_id BIGINT DEFAULT 1, parent_id BIGINT, leader_participant_id BIGINT, vat_number VARCHAR(255), project_no BIGINT, campus_id BIGINT, description VARCHAR(255), type VARCHAR(255), title VARCHAR(40), father_name VARCHAR(100), grand_father_name VARCHAR(100), gender BIGINT DEFAULT 1, birth_date datetime, birth_place VARCHAR(100), id_no VARCHAR(100), job_title VARCHAR(50), employment_type_id BIGINT, dean_name VARCHAR(255), director_name VARCHAR(255), head_name VARCHAR(100), section_no BIGINT, section_leader_name VARCHAR(255), project_code BIGINT, project_director VARCHAR(255), established_date DATE, company_owner VARCHAR(255), company_license_type BIGINT, INDEX participant_type_idx (type), INDEX leader_participant_id_idx (leader_participant_id), INDEX participant_type_id_idx (participant_type_id), INDEX campus_id_idx (campus_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE participant_contact (id BIGINT AUTO_INCREMENT, participant_id BIGINT, street_number VARCHAR(255), house_number VARCHAR(255), pobox VARCHAR(255), mobile_number VARCHAR(255), phone_number VARCHAR(255), fax VARCHAR(255), email VARCHAR(255), website VARCHAR(255), INDEX participant_id_idx (participant_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE participant_type (id BIGINT AUTO_INCREMENT, name VARCHAR(255), description LONGTEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE permission (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), group_id BIGINT, user_id BIGINT, module_id BIGINT, create_action TINYINT(1) DEFAULT '0', delete_action TINYINT(1) DEFAULT '0', edit_action TINYINT(1) DEFAULT '0', view_action TINYINT(1) DEFAULT '0', INDEX group_id_idx (group_id), INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE task (id BIGINT AUTO_INCREMENT, token_id BIGINT, start_date DATE, end_date DATE, effective_date DATE, status BIGINT DEFAULT 1, description LONGTEXT, type VARCHAR(255), agreement_participant_id BIGINT, departure_date datetime, departure_time TIME, departure_status BIGINT DEFAULT 1, return_date datetime, return_time TIME, return_status BIGINT DEFAULT 0, number_of_passangers BIGINT, service_agreement_cost FLOAT(18, 2), service_reason VARCHAR(255), departure_mileage BIGINT, return_mileage BIGINT, difference_mileag BIGINT, service_type_id BIGINT, duel_acquire_id BIGINT, destination VARCHAR(255), service_number_of_days BIGINT, service_delay_status TINYINT(1) DEFAULT '0', number_of_delay_days BIGINT DEFAULT 0, delay_reason LONGTEXT, registration_mode BIGINT, driver_id BIGINT, transferer_id BIGINT, transferee_id BIGINT, new_vehicle_id BIGINT, returnee_id BIGINT, INDEX new_vehicle_id_idx (new_vehicle_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE task (id BIGINT AUTO_INCREMENT, token_id BIGINT, start_date DATE, end_date DATE, effective_date DATE, status BIGINT DEFAULT 1, description LONGTEXT, type VARCHAR(255), agreement_participant_id BIGINT, departure_date datetime, departure_time TIME, departure_status BIGINT DEFAULT 1, return_date datetime, return_time TIME, return_status BIGINT DEFAULT 0, number_of_passangers BIGINT, service_agreement_cost FLOAT(18, 2), service_reason VARCHAR(255), departure_mileage BIGINT, return_mileage BIGINT, difference_mileag BIGINT, service_type_id BIGINT, duel_acquire_id BIGINT, destination VARCHAR(255), service_number_of_days BIGINT, service_delay_status TINYINT(1) DEFAULT '0', number_of_delay_days BIGINT DEFAULT 0, delay_reason LONGTEXT, registration_mode BIGINT, driver_id BIGINT, transferer_id BIGINT, transferee_id BIGINT, new_vehicle_id BIGINT, returnee_id BIGINT, INDEX returnee_id_idx (returnee_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE service_accident (id BIGINT AUTO_INCREMENT, task_id BIGINT, accident_date datetime, accident_type BIGINT, descriptioin LONGTEXT, INDEX task_id_idx (task_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE service_type (id BIGINT AUTO_INCREMENT, name VARCHAR(255), description LONGTEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE service_vehicle_accident (id BIGINT AUTO_INCREMENT, task_id BIGINT, vehicle_id BIGINT, accident_type_id BIGINT, accident_place VARCHAR(100), accident_date datetime, accident_time VARCHAR(50), INDEX task_id_idx (task_id), INDEX vehicle_id_idx (vehicle_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE service_vehicle_attachment (id BIGINT AUTO_INCREMENT, task_id BIGINT, vehicle_id BIGINT, reference_no BIGINT, item_name BIGINT, serial_no BIGINT, INDEX task_id_idx (task_id), INDEX vehicle_id_idx (vehicle_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE service_vehicle_cost (id BIGINT AUTO_INCREMENT, task_id BIGINT, vehicle_id BIGINT, reference_no BIGINT, unit_price BIGINT, total_price BIGINT, quantity BIGINT, INDEX task_id_idx (task_id), INDEX vehicle_id_idx (vehicle_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE service_vehicle_item_acquired (id BIGINT AUTO_INCREMENT, task_id BIGINT, vehicle_id BIGINT, item_id BIGINT, item_name BIGINT, serial_no BIGINT, INDEX task_id_idx (task_id), INDEX vehicle_id_idx (vehicle_id), INDEX item_id_idx (item_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE item (id BIGINT AUTO_INCREMENT, token VARCHAR(100) NOT NULL, task_id BIGINT, task_order_id BIGINT NOT NULL, category_id BIGINT, category_group_id BIGINT, clss BIGINT DEFAULT 0, unit_id BIGINT DEFAULT 1, quantity FLOAT(18, 2) DEFAULT 0, used_quantity FLOAT(18, 2) DEFAULT 0, current_quantity FLOAT(18, 2) DEFAULT 0, serial_no VARCHAR(255), old_pin VARCHAR(255) DEFAULT 'NA', new_pin VARCHAR(255) DEFAULT 'NA', pin_num BIGINT, is_present TINYINT(1) DEFAULT '0', effective_date BIGINT, status BIGINT DEFAULT 1, description LONGTEXT, type VARCHAR(255), plate_number VARCHAR(255), plate_code VARCHAR(255) DEFAULT 'ET', initial_mileage BIGINT, current_mileage BIGINT, vehicle_type_id BIGINT, litter_per_km FLOAT(18, 2), seatng_capacity BIGINT, engine_number VARCHAR(100), chesis_number VARCHAR(100), vehicle_model VARCHAR(100), vehicl_color VARCHAR(50), weight FLOAT(18, 2), service_type_id BIGINT, fuel_type_id BIGINT, purchased_date DATE, service_year BIGINT DEFAULT 0, checkup_period_id BIGINT, vehicle_status BIGINT DEFAULT 0, fuel_setting_id BIGINT, is_assigned TINYINT(1) DEFAULT '0', spare_identification VARCHAR(100), INDEX category_id_idx (category_id), INDEX task_id_idx (task_id), INDEX task_order_id_idx (task_order_id), INDEX unit_id_idx (unit_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE system_log_file (id BIGINT AUTO_INCREMENT, user_id BIGINT, token_id VARCHAR(255), action_date VARCHAR(100), action_time VARCHAR(50), module_name VARCHAR(100), deleted_date VARCHAR(100), created_date VARCHAR(100), viewed_date VARCHAR(100), edited_date VARCHAR(100), action_type_id BIGINT, pc_ip_address VARCHAR(100), INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE task (id BIGINT AUTO_INCREMENT, token_id BIGINT, start_date DATE, end_date DATE, effective_date DATE, status BIGINT DEFAULT 1, description LONGTEXT, type VARCHAR(255), agreement_participant_id BIGINT, departure_date datetime, departure_time TIME, departure_status BIGINT DEFAULT 1, return_date datetime, return_time TIME, return_status BIGINT DEFAULT 0, number_of_passangers BIGINT, service_agreement_cost FLOAT(18, 2), service_reason VARCHAR(255), departure_mileage BIGINT, return_mileage BIGINT, difference_mileag BIGINT, service_type_id BIGINT, duel_acquire_id BIGINT, destination VARCHAR(255), service_number_of_days BIGINT, service_delay_status TINYINT(1) DEFAULT '0', number_of_delay_days BIGINT DEFAULT 0, delay_reason LONGTEXT, registration_mode BIGINT, driver_id BIGINT, transferer_id BIGINT, transferee_id BIGINT, new_vehicle_id BIGINT, returnee_id BIGINT, INDEX task_type_idx (type), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE task_accident (id BIGINT AUTO_INCREMENT, task_id BIGINT, vehicle_id BIGINT, accident_type_id BIGINT, accident_location VARCHAR(100), accident_date VARCHAR(100), accident_time DATETIME, expense_required FLOAT(18, 2), description VARCHAR(100), INDEX task_id_idx (task_id), INDEX vehicle_id_idx (vehicle_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE task_attachment (id BIGINT AUTO_INCREMENT, task_id BIGINT NOT NULL, certificate_type_id BIGINT, reference_number VARCHAR(100), num_pages BIGINT DEFAULT 1, folder_stored VARCHAR(255), description VARCHAR(255), INDEX task_id_idx (task_id), INDEX certificate_type_id_idx (certificate_type_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE task_expense_required (id BIGINT AUTO_INCREMENT, task_id BIGINT, expense_type_id BIGINT, expense_date VARCHAR(100), reference_no BIGINT, unit_id BIGINT, currency_id BIGINT, quantity FLOAT(18, 2), unit_price FLOAT(18, 2), total_price FLOAT(18, 2), INDEX task_id_idx (task_id), INDEX unit_id_idx (unit_id), INDEX currency_id_idx (currency_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE task_incident (id BIGINT AUTO_INCREMENT, task_id BIGINT, vehicle_id BIGINT, incident_type_id BIGINT, incident_location VARCHAR(100), incident_date VARCHAR(100), incident_time DATETIME, expense_required FLOAT(18, 2), description VARCHAR(100), INDEX task_id_idx (task_id), INDEX vehicle_id_idx (vehicle_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE task_order (id BIGINT AUTO_INCREMENT, task_id BIGINT NOT NULL, pb_id BIGINT, acquired_for BIGINT, budget_source BIGINT, category_id BIGINT NOT NULL, category_group_id BIGINT DEFAULT 2, clss BIGINT DEFAULT 5, unit_id BIGINT DEFAULT 1, planned_quantity FLOAT(18, 2), actual_quantity FLOAT(18, 2) NOT NULL, remaining FLOAT(18, 2) DEFAULT 0, unit_price FLOAT(18, 2), vat TINYINT(1) DEFAULT '0', currency_id BIGINT DEFAULT 1, amount FLOAT(18, 2), effective_date BIGINT, status BIGINT DEFAULT 1, description VARCHAR(255), sealed_count FLOAT(18, 2) DEFAULT 0, used_count FLOAT(18, 2) DEFAULT 0, concrete_count FLOAT(18, 2) DEFAULT 0, nasty_count FLOAT(18, 2) DEFAULT 0, disposed_count FLOAT(18, 2) DEFAULT 0, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX task_id_idx (task_id), INDEX category_id_idx (category_id), INDEX unit_id_idx (unit_id), INDEX currency_id_idx (currency_id), INDEX acquired_for_idx (acquired_for), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE task_participant (id BIGINT AUTO_INCREMENT, task_id BIGINT, participant_role BIGINT, participant_id BIGINT, INDEX task_id_idx (task_id), INDEX participant_id_idx (participant_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE task_transaction (id BIGINT AUTO_INCREMENT, task_id BIGINT, token_id BIGINT, cost_description LONGTEXT, transaction_date VARCHAR(100), cost_credited FLOAT(18, 2), cost_debited FLOAT(18, 2), cost_balance FLOAT(18, 2), INDEX task_id_idx (task_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE time_metric (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, description VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE time_metric_conversion (id BIGINT AUTO_INCREMENT, from_timemetric_id BIGINT NOT NULL, to_timemetric_id BIGINT NOT NULL, rate FLOAT(18, 2) DEFAULT 1, INDEX to_timemetric_id_idx (to_timemetric_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE task (id BIGINT AUTO_INCREMENT, token_id BIGINT, start_date DATE, end_date DATE, effective_date DATE, status BIGINT DEFAULT 1, description LONGTEXT, type VARCHAR(255), agreement_participant_id BIGINT, departure_date datetime, departure_time TIME, departure_status BIGINT DEFAULT 1, return_date datetime, return_time TIME, return_status BIGINT DEFAULT 0, number_of_passangers BIGINT, service_agreement_cost FLOAT(18, 2), service_reason VARCHAR(255), departure_mileage BIGINT, return_mileage BIGINT, difference_mileag BIGINT, service_type_id BIGINT, duel_acquire_id BIGINT, destination VARCHAR(255), service_number_of_days BIGINT, service_delay_status TINYINT(1) DEFAULT '0', number_of_delay_days BIGINT DEFAULT 0, delay_reason LONGTEXT, registration_mode BIGINT, driver_id BIGINT, transferer_id BIGINT, transferee_id BIGINT, new_vehicle_id BIGINT, returnee_id BIGINT, INDEX transferee_id_idx (transferee_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE unit (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, alias VARCHAR(40), description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE unit_conversion (id BIGINT AUTO_INCREMENT, from_unit_id BIGINT, to_unit_id BIGINT, rate DOUBLE(18, 2) DEFAULT 1, INDEX from_unit_id_idx (from_unit_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE user (id BIGINT AUTO_INCREMENT, participant_id BIGINT, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, token_id VARCHAR(255) NOT NULL, group_id BIGINT, is_active TINYINT(1) DEFAULT '0', is_blocked TINYINT(1) DEFAULT '0', status TINYINT(1) DEFAULT '0', permission_type_level BIGINT, ui_theme_color_setting BIGINT, ui_language_setting BIGINT, INDEX group_id_idx (group_id), INDEX participant_id_idx (participant_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE user_group (id BIGINT AUTO_INCREMENT, token_id VARCHAR(255) NOT NULL, name VARCHAR(100), description LONGTEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE item (id BIGINT AUTO_INCREMENT, token VARCHAR(100) NOT NULL, task_id BIGINT, task_order_id BIGINT NOT NULL, category_id BIGINT, category_group_id BIGINT, clss BIGINT DEFAULT 0, unit_id BIGINT DEFAULT 1, quantity FLOAT(18, 2) DEFAULT 0, used_quantity FLOAT(18, 2) DEFAULT 0, current_quantity FLOAT(18, 2) DEFAULT 0, serial_no VARCHAR(255), old_pin VARCHAR(255) DEFAULT 'NA', new_pin VARCHAR(255) DEFAULT 'NA', pin_num BIGINT, is_present TINYINT(1) DEFAULT '0', effective_date BIGINT, status BIGINT DEFAULT 1, description LONGTEXT, type VARCHAR(255), plate_number VARCHAR(255), plate_code VARCHAR(255) DEFAULT 'ET', initial_mileage BIGINT, current_mileage BIGINT, vehicle_type_id BIGINT, litter_per_km FLOAT(18, 2), seatng_capacity BIGINT, engine_number VARCHAR(100), chesis_number VARCHAR(100), vehicle_model VARCHAR(100), vehicl_color VARCHAR(50), weight FLOAT(18, 2), service_type_id BIGINT, fuel_type_id BIGINT, purchased_date DATE, service_year BIGINT DEFAULT 0, checkup_period_id BIGINT, vehicle_status BIGINT DEFAULT 0, fuel_setting_id BIGINT, is_assigned TINYINT(1) DEFAULT '0', spare_identification VARCHAR(100), INDEX category_id_idx (category_id), INDEX task_id_idx (task_id), INDEX task_order_id_idx (task_order_id), INDEX unit_id_idx (unit_id), INDEX vehicle_type_id_idx (vehicle_type_id), INDEX service_type_id_idx (service_type_id), INDEX fuel_type_id_idx (fuel_type_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE vehicle_chakup_period (id BIGINT AUTO_INCREMENT, vehicle_id BIGINT, service_period BIGINT, period_frequency BIGINT, INDEX vehicle_id_idx (vehicle_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE vehicle_checkup_setting (id BIGINT AUTO_INCREMENT, vehicle_id BIGINT, check_up_name VARCHAR(100), pass_value TINYINT(1) DEFAULT '1', fail_value TINYINT(1) DEFAULT '0', na_value TINYINT(1) DEFAULT '0', INDEX vehicle_id_idx (vehicle_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE vehicle_fuel_setting (id BIGINT AUTO_INCREMENT, vehicle_id BIGINT, fuel_ammount FLOAT(18, 2), number_of_days BIGINT, description LONGTEXT, INDEX vehicle_id_idx (vehicle_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE vehicle_insurance_setting (id BIGINT AUTO_INCREMENT, vehicle_id BIGINT, insurer_name VARCHAR(255), insurance_number VARCHAR(100), insurance_type BIGINT, insurance_period BIGINT, insurance_expiry_date VARCHAR(100), last_insurance_renewal VARCHAR(100), insurance_status TINYINT(1) DEFAULT '0', INDEX vehicle_id_idx (vehicle_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE vehicle_service_type (id BIGINT AUTO_INCREMENT, name VARCHAR(100), description LONGTEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE vehicle_type (id BIGINT AUTO_INCREMENT, name VARCHAR(255), description LONGTEXT, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE assigned_vehicle ADD CONSTRAINT assigned_vehicle_vehicle_id_item_id FOREIGN KEY (vehicle_id) REFERENCES item(id) ON DELETE CASCADE;
ALTER TABLE assigned_vehicle ADD CONSTRAINT assigned_vehicle_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE;
ALTER TABLE assigned_vehicle ADD CONSTRAINT assigned_vehicle_driver_id_participant_id FOREIGN KEY (driver_id) REFERENCES participant(id) ON DELETE CASCADE;
ALTER TABLE assigned_vehicle ADD CONSTRAINT assigned_vehicle_driver_id_driver_id FOREIGN KEY (driver_id) REFERENCES driver(id);
ALTER TABLE task ADD CONSTRAINT task_driver_id_participant_id FOREIGN KEY (driver_id) REFERENCES participant(id) ON DELETE CASCADE;
ALTER TABLE task ADD CONSTRAINT task_driver_id_driver_id FOREIGN KEY (driver_id) REFERENCES driver(id);
ALTER TABLE participant ADD CONSTRAINT participant_participant_type_id_participant_type_id FOREIGN KEY (participant_type_id) REFERENCES participant_type(id) ON DELETE CASCADE;
ALTER TABLE participant ADD CONSTRAINT participant_leader_participant_id_participant_id FOREIGN KEY (leader_participant_id) REFERENCES participant(id) ON DELETE CASCADE;
ALTER TABLE participant ADD CONSTRAINT participant_campus_id_campus_id FOREIGN KEY (campus_id) REFERENCES campus(id) ON DELETE CASCADE;
ALTER TABLE currency_exchange ADD CONSTRAINT currency_exchange_to_currency_id_currency_id FOREIGN KEY (to_currency_id) REFERENCES currency(id) ON DELETE CASCADE;
ALTER TABLE driver ADD CONSTRAINT driver_employee_id_participant_id FOREIGN KEY (employee_id) REFERENCES participant(id) ON DELETE CASCADE;
ALTER TABLE task ADD CONSTRAINT task_service_type_id_service_type_id FOREIGN KEY (service_type_id) REFERENCES service_type(id) ON DELETE CASCADE;
ALTER TABLE task ADD CONSTRAINT task_agreement_participant_id_participant_id FOREIGN KEY (agreement_participant_id) REFERENCES participant(id) ON DELETE CASCADE;
ALTER TABLE item ADD CONSTRAINT item_unit_id_unit_id FOREIGN KEY (unit_id) REFERENCES unit(id) ON DELETE CASCADE;
ALTER TABLE item ADD CONSTRAINT item_task_order_id_task_order_id FOREIGN KEY (task_order_id) REFERENCES task_order(id) ON DELETE CASCADE;
ALTER TABLE item ADD CONSTRAINT item_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE;
ALTER TABLE item ADD CONSTRAINT item_category_id_category_id FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE CASCADE;
ALTER TABLE item_acquired_attachment ADD CONSTRAINT item_acquired_attachment_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE;
ALTER TABLE item_acquired_attachment ADD CONSTRAINT item_acquired_attachment_item_id_item_id FOREIGN KEY (item_id) REFERENCES item(id) ON DELETE CASCADE;
ALTER TABLE participant_contact ADD CONSTRAINT participant_contact_participant_id_participant_id FOREIGN KEY (participant_id) REFERENCES participant(id) ON DELETE CASCADE;
ALTER TABLE permission ADD CONSTRAINT permission_user_id_user_id FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE;
ALTER TABLE permission ADD CONSTRAINT permission_group_id_user_group_id FOREIGN KEY (group_id) REFERENCES user_group(id) ON DELETE CASCADE;
ALTER TABLE task ADD CONSTRAINT task_new_vehicle_id_item_id FOREIGN KEY (new_vehicle_id) REFERENCES item(id) ON DELETE CASCADE;
ALTER TABLE task ADD CONSTRAINT task_returnee_id_participant_id FOREIGN KEY (returnee_id) REFERENCES participant(id) ON DELETE CASCADE;
ALTER TABLE service_accident ADD CONSTRAINT service_accident_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id);
ALTER TABLE service_vehicle_accident ADD CONSTRAINT service_vehicle_accident_vehicle_id_item_id FOREIGN KEY (vehicle_id) REFERENCES item(id) ON DELETE CASCADE;
ALTER TABLE service_vehicle_accident ADD CONSTRAINT service_vehicle_accident_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE;
ALTER TABLE service_vehicle_attachment ADD CONSTRAINT service_vehicle_attachment_vehicle_id_item_id FOREIGN KEY (vehicle_id) REFERENCES item(id) ON DELETE CASCADE;
ALTER TABLE service_vehicle_attachment ADD CONSTRAINT service_vehicle_attachment_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE;
ALTER TABLE service_vehicle_cost ADD CONSTRAINT service_vehicle_cost_vehicle_id_item_id FOREIGN KEY (vehicle_id) REFERENCES item(id) ON DELETE CASCADE;
ALTER TABLE service_vehicle_cost ADD CONSTRAINT service_vehicle_cost_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE;
ALTER TABLE service_vehicle_item_acquired ADD CONSTRAINT service_vehicle_item_acquired_vehicle_id_item_id FOREIGN KEY (vehicle_id) REFERENCES item(id) ON DELETE CASCADE;
ALTER TABLE service_vehicle_item_acquired ADD CONSTRAINT service_vehicle_item_acquired_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE;
ALTER TABLE service_vehicle_item_acquired ADD CONSTRAINT service_vehicle_item_acquired_item_id_item_id FOREIGN KEY (item_id) REFERENCES item(id);
ALTER TABLE system_log_file ADD CONSTRAINT system_log_file_user_id_user_id FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE;
ALTER TABLE task_accident ADD CONSTRAINT task_accident_vehicle_id_item_id FOREIGN KEY (vehicle_id) REFERENCES item(id) ON DELETE CASCADE;
ALTER TABLE task_accident ADD CONSTRAINT task_accident_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE;
ALTER TABLE task_attachment ADD CONSTRAINT task_attachment_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE;
ALTER TABLE task_attachment ADD CONSTRAINT task_attachment_certificate_type_id_certificate_type_id FOREIGN KEY (certificate_type_id) REFERENCES certificate_type(id) ON DELETE CASCADE;
ALTER TABLE task_expense_required ADD CONSTRAINT task_expense_required_unit_id_unit_id FOREIGN KEY (unit_id) REFERENCES unit(id) ON DELETE CASCADE;
ALTER TABLE task_expense_required ADD CONSTRAINT task_expense_required_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE;
ALTER TABLE task_expense_required ADD CONSTRAINT task_expense_required_currency_id_currency_id FOREIGN KEY (currency_id) REFERENCES currency(id) ON DELETE CASCADE;
ALTER TABLE task_incident ADD CONSTRAINT task_incident_vehicle_id_item_id FOREIGN KEY (vehicle_id) REFERENCES item(id) ON DELETE CASCADE;
ALTER TABLE task_incident ADD CONSTRAINT task_incident_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE;
ALTER TABLE task_order ADD CONSTRAINT task_order_unit_id_unit_id FOREIGN KEY (unit_id) REFERENCES unit(id) ON DELETE CASCADE;
ALTER TABLE task_order ADD CONSTRAINT task_order_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE;
ALTER TABLE task_order ADD CONSTRAINT task_order_currency_id_currency_id FOREIGN KEY (currency_id) REFERENCES currency(id) ON DELETE CASCADE;
ALTER TABLE task_order ADD CONSTRAINT task_order_category_id_category_id FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE CASCADE;
ALTER TABLE task_order ADD CONSTRAINT task_order_acquired_for_participant_id FOREIGN KEY (acquired_for) REFERENCES participant(id) ON DELETE CASCADE;
ALTER TABLE task_participant ADD CONSTRAINT task_participant_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE;
ALTER TABLE task_participant ADD CONSTRAINT task_participant_participant_id_participant_id FOREIGN KEY (participant_id) REFERENCES participant(id) ON DELETE CASCADE;
ALTER TABLE task_transaction ADD CONSTRAINT task_transaction_task_id_task_id FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE;
ALTER TABLE time_metric_conversion ADD CONSTRAINT time_metric_conversion_to_timemetric_id_time_metric_id FOREIGN KEY (to_timemetric_id) REFERENCES time_metric(id) ON DELETE CASCADE;
ALTER TABLE task ADD CONSTRAINT task_transferee_id_participant_id FOREIGN KEY (transferee_id) REFERENCES participant(id) ON DELETE CASCADE;
ALTER TABLE unit_conversion ADD CONSTRAINT unit_conversion_from_unit_id_unit_id FOREIGN KEY (from_unit_id) REFERENCES unit(id) ON DELETE CASCADE;
ALTER TABLE user ADD CONSTRAINT user_participant_id_participant_id FOREIGN KEY (participant_id) REFERENCES participant(id) ON DELETE CASCADE;
ALTER TABLE user ADD CONSTRAINT user_group_id_user_group_id FOREIGN KEY (group_id) REFERENCES user_group(id) ON DELETE CASCADE;
ALTER TABLE item ADD CONSTRAINT item_vehicle_type_id_vehicle_type_id FOREIGN KEY (vehicle_type_id) REFERENCES vehicle_type(id) ON DELETE CASCADE;
ALTER TABLE item ADD CONSTRAINT item_service_type_id_vehicle_service_type_id FOREIGN KEY (service_type_id) REFERENCES vehicle_service_type(id) ON DELETE CASCADE;
ALTER TABLE item ADD CONSTRAINT item_service_type_id_service_type_id FOREIGN KEY (service_type_id) REFERENCES service_type(id);
ALTER TABLE item ADD CONSTRAINT item_fuel_type_id_fuel_type_id FOREIGN KEY (fuel_type_id) REFERENCES fuel_type(id) ON DELETE CASCADE;
ALTER TABLE vehicle_chakup_period ADD CONSTRAINT vehicle_chakup_period_vehicle_id_item_id FOREIGN KEY (vehicle_id) REFERENCES item(id) ON DELETE CASCADE;
ALTER TABLE vehicle_checkup_setting ADD CONSTRAINT vehicle_checkup_setting_vehicle_id_item_id FOREIGN KEY (vehicle_id) REFERENCES item(id) ON DELETE CASCADE;
ALTER TABLE vehicle_fuel_setting ADD CONSTRAINT vehicle_fuel_setting_vehicle_id_item_id FOREIGN KEY (vehicle_id) REFERENCES item(id) ON DELETE CASCADE;
ALTER TABLE vehicle_insurance_setting ADD CONSTRAINT vehicle_insurance_setting_vehicle_id_item_id FOREIGN KEY (vehicle_id) REFERENCES item(id) ON DELETE CASCADE;
