## Installation Docker

Rename configuration file

```
cp .env.example .env
```

First compile container with command:

```
docker-compose build
```

Start container with command:

```
docker-compose up -d
```

Install composer

```
docker-compose run composer install
```

Generate artisan key

```
docker-compose run artisan key:generate
```

Install migrations

```
docker-compose run artisan migrate:fresh --seed
```

Start Queue
```
docker-compose run artisan queue:listen
```

## Run Api Route
```
2. Send POST-request to `https://localhost/api/submissions`:
```json
{
  "name": "User Test",
  "email": "user@example.com",
  "message": "Test message."
}
```
