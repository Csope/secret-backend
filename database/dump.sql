/* SQLEditor (Postgres)*/


CREATE TABLE secrets
(
id SERIAL,
"secretText" TEXT,
"createdAt" TIMESTAMP WITH TIME ZONE  DEFAULT now(),
"expiresAt" TIMESTAMP WITH TIME ZONE  DEFAULT now(),
"remainingViews" INT DEFAULT 1,
updated_at TIMESTAMP WITH TIME ZONE  DEFAULT now(),
hash VARCHAR(255),
CONSTRAINT secrets_pkey PRIMARY KEY (id)
);