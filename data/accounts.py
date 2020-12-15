# data/accounts - pennbauman.com
#   URL: https://github.com/pennbauman/pennbauman.com
#   License: GPLv3.0
#   Author:
#     Penn Bauman (pennbauman@protonmail.com)
from flask_sqlalchemy import SQLAlchemy
from main import db
from flask_login import UserMixin
from werkzeug.security import generate_password_hash, check_password_hash

class User(UserMixin, db.Model):
    __tablename__ = "users"

    id = db.Column(
        db.Integer,
        primary_key = True
    )
    username = db.Column(
        db.String(64),
        unique = True,
        nullable = False
    )
    email = db.Column(
        db.String(64),
        unique = True,
        nullable = False
    )
    password = db.Column(
        db.String(256),
        primary_key = False,
        unique = False,
        nullable = False
    )
    auth_level = db.Column(
        db.Integer,
        default = 0
    )
    display_name = db.Column(
        db.String(64),
        nullable = False
    )

    def set_password(self, password):
        self.password = generate_password_hash(password, method = 'sha256')
    def check_password(self, password):
        return check_password_hash(self.password, password)

    def __repr__(self):
        return '<User {}>'.format(self.username)

