<?php
    class Usuarios {
        public $tablename = "usuario";
        
        public $id;
    }


    class User(db.Model):
    __tablename__ = "users"

    id          = db.Column(db.Integer, primary_key=True)
    username    = db.Column(db.String(20), unique=True)
    email       = db.Column(db.String(50))
    password    = db.Column(db.String(120))
    create_date = db.Column(db.DateTime, default=datetime.datetime.now)

    def __init__(self, username, email, password):
        self.username = username
        self.password = self.__create_password(password)
        self.email    = email

    def __create_password(self, password):
        #return generate_password_hash(password)
        return argon2.hash(password)

    def verify_password(self, password, crypted_password):
        #return check_password_hash(crypted_password, password)
        return argon2.verify(password, crypted_password)
?>