CREATE TABLE tb_golongan (
	gol_id TINYINT(3) NOT NULL AUTO_INCREMENT,
	gol_kode VARCHAR(10) NOT NULL,
	gol_nama VARCHAR(50) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(gol_id)
);

CREATE TABLE tb_pelanggan (
	pel_id INT(11) NOT NULL AUTO_INCREMENT,
	pel_id_gol TINYINT(3) NOT NULL,
	pel_no VARCHAR(20) NOT NULL,
	pel_nama VARCHAR(50) NOT NULL,
	pel_hp VARCHAR(20) NOT NULL,
	pel_ktp VARCHAR(50) NOT NULL,
	pel_seri VARCHAR(50) NOT NULL,
	pel_meteran INT(11) NOT NULL,
	pel_aktif ENUM('Y', 'N'),
	pel_id_user INT(11) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(pel_id)
);

CREATE TABLE tb_users (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_email VARCHAR(50) NOT NULL,
	user_password VARCHAR(100) NOT NULL,
	user_nama VARCHAR(100) NOT NULL,
	user_alamat TEXT NOT NULL,
	user_hp VARCHAR(25) NOT NULL,
	user_pos VARCHAR(5) NOT NULL,
	user_role TINYINT(2) NOT NULL,
	user_aktif TINYINT(3) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(user_id)
);

ALTER TABLE 'tb_pelanggan' ADD CONSTRAINT 'user_id' FOREIGN KEY ('pel_id_user') REFERENCES 'tb_users'('user_id') ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `tb_pelanggan` ADD CONSTRAINT `gol_id` FOREIGN KEY (`pel_id_gol`) REFERENCES `tb_golongan`(`gol_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO `tb_users` (`user_id`, `user_email`, `user_password`, `user_nama`, `user_alamat`, `user_hp`, `user_pos`, `user_role`, `user_aktif`, `created_at`, `updated_at`) 
VALUES (NULL, 'raghinazhdh@gmail.com', PASSWORD('ghina'), 'raghinazhdh', 'Jl. Jati 3 Gg.Bidan No.4', '08176832332', '20217', '1', '1', current_timestamp(), NULL);