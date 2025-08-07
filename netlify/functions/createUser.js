const { Client } = require('pg');

exports.handler = async (event) => {
  const { email, password } = JSON.parse(event.body);

  const client = new Client({
    connectionString: process.env.DATABASE_URL,
    ssl: { rejectUnauthorized: false },
  });

  await client.connect();

  await client.query(
    'INSERT INTO users (email, password_hash) VALUES ($1, crypt($2, gen_salt(\'bf\')))',
    [email, password]
  );

  await client.end();

  return {
    statusCode: 200,
    body: JSON.stringify({ message: 'User created successfully' }),
  };
};
