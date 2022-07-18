-- ! SET GLOBAL FOREIGN_KEY_CHECKS=0;
CREATE TABLE products(
    id int(11) AUTO_INCREMENT,
    categorie varchar(50),
    brand varchar(20),
    product_name varchar(50),
    price varchar(10),
    product_images varchar(50),
    PRIMARY KEY(id)
);
CREATE TABLE contactus(
	email varchar(50),
    nom varchar(30),
    company varchar(20),
    phone int(20),
    message varchar(100),
    file varchar(20),
    PRIMARY KEY(email)
);
CREATE TABLE brand(
    id int(30) AUTO_INCREMENT,
    brand_img varchar(60),
    brand_name varchar(20)
    PRIMARY KEY(id)
);
CREATE TABLE users (
    id int AUTO_INCREMENT,
    nom varchar(100),
    prenom varchar(100),
    password varchar(100),
    codepostal varchar(40),
    adresseLiv varchar(100),
    tele int(20),
    email varchar(50),
    contry varchar(20),
    PRIMARY KEY (id),
);
CREATE TABLE admins(
	id int(50) AUTO_INCREMENT,
    login varchar(100),
    pass varchar(100),
    role varchar(100),
    PRIMARY KEY(id)
);
CREATE TABLE form(
    id int(100) AUTO_INCREMENT,
    namee varchar(50),
    company varchar(50),
    email varchar(50),
    phone int(20),
    messagee varchar(100),
    PRIMARY KEY(id)
);
CREATE TABLE newsletter(
    id int(11) AUTO_INCREMENT,
    email varchar(50),
    PRIMARY KEY(id)
);
CREATE TABLE cart(
    id int(100) AUTO_INCREMENT,
    user_id int(100),
    name varchar(100),
    price int(100),
    image varchar(100),
    quantity int(100),
    product_id int(100),
    PRIMARY KEY(id)
);
ALTER TABLE cart
ADD status varchar(50)
CREATE TABLE packs(
	id int(50) AUTO_INCREMENT,
    pack_name varchar(100),
    price int(50),
    pack_image varchar(100),
    pack_description varchar(100),
    PRIMARY KEY(id)
);
CREATE TABLE commande(
	id int(50) AUTO_INCREMENT,
    -- qnt int(50),
    users_id int(50),
    prix int(50),
    command_date varchar(100),
    etape varchar(100),
    -- livreer varchar(20),
    PRIMARY KEY(id)
);
-- ALTER TABLE commande
-- ADD id_payment_info int(50);
CREATE TABLE reviews(
	id int(40) AUTO_INCREMENT,
    commentaire varchar(200),
    user_id int(100),
    date varchar(30),
    PRIMARY KEY(id)
)
CREATE TABLE blog(
	id int(30) AUTO_INCREMENT,
    title varchar(140),
    subdescription varchar(100),
    blogdate varchar(40),
    author_admin int(50),
    blog_img varchar(30),
    PRIMARY KEY(id),
    FOREIGN KEY(author_admin) REFERENCES admins(id)
)
CREATE TABLE supplier(
	id int(30) AUTO_INCREMENT,
    logo_sup varchar(50),
    name_sup varchar(40),
    description varchar(500),
    PRIMARY KEY(id)
)
CREATE TABLE press(
	id int(50) AUTO_INCREMENT,
    press_img varchar(50),
    press_title varchar (40),
    press_htitle varchar (100),
    press_date varchar (30),
    PRIMARY KEY(id)
)