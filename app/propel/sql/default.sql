
-----------------------------------------------------------------------
-- book
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "book" CASCADE;

CREATE TABLE "book"
(
    "id" serial NOT NULL,
    "title" VARCHAR(100),
    "author_id" INTEGER,
    PRIMARY KEY ("id")
);

-----------------------------------------------------------------------
-- author
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "author" CASCADE;

CREATE TABLE "author"
(
    "id" serial NOT NULL,
    "first_name" VARCHAR(100),
    "last_name" VARCHAR(100),
    PRIMARY KEY ("id")
);

ALTER TABLE "book" ADD CONSTRAINT "book_FK_1"
    FOREIGN KEY ("author_id")
    REFERENCES "author" ("id");
