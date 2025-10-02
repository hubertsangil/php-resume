-- init.sql
-- Run as the postgres superuser (psql -U postgres -f init.sql)
-- Replace the password below before running

-- create database
CREATE DATABASE resume_site;

-- create a dedicated role (user) for the web app
CREATE ROLE resume_user WITH LOGIN PASSWORD 'REPLACE_WITH_STRONG_PASSWORD';

-- connect to the new database and create schema objects
\connect resume_site

-- create users table
CREATE TABLE public.users (
  id SERIAL PRIMARY KEY,
  username VARCHAR(100) UNIQUE NOT NULL,
  password_hash TEXT NOT NULL,
  created_at TIMESTAMPTZ DEFAULT now()
);

-- make sure the resume_user can use the public schema
GRANT USAGE ON SCHEMA public TO resume_user;

-- grant minimal table rights needed by the app
GRANT SELECT, INSERT, UPDATE, DELETE ON TABLE public.users TO resume_user;

-- give sequence usage so SERIAL works for resume_user
GRANT USAGE, SELECT, UPDATE ON SEQUENCE public.users_id_seq TO resume_user;

-- optionally transfer ownership of the table and sequence to resume_user
-- uncomment the two lines below if you prefer the web user to own the objects
-- ALTER TABLE public.users OWNER TO resume_user;
-- ALTER SEQUENCE public.users_id_seq OWNER TO resume_user;
