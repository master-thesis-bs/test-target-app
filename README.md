
## Usage

Three additional containers are included that handle Composer, NPM, and Artisan commands *without* having to have these platforms installed on your local computer. Use the following command examples from your project root, modifying them to fit your particular use case.

- `docker compose up -d --build app`
- `docker compose run --rm composer update`
- `docker ccompose run --rm npm run dev`
- `docker compose run --rm artisan migrate`

## Permissions Issues
**If you are using your server or local environment as a user that is not root:**

- Bring any container(s) down with `docker compose down`
- In your terminal, run `export UID=$(id -u)` and then `export GID=$(id -g)`
- If you see any errors about readonly variables from the above step, you can ignore them and continue
- Re-build the containers by running `docker compose build --no-cache`

Then, either bring back up your container network or re-run the command you were trying before, and see if that fixes it.

## Persistent MySQL Storage

By default, whenever you bring down the Docker network, your MySQL data will be removed after the containers are destroyed. If you would like to have persistent data that remains after bringing containers down and back up, do the following:

1. Create a `mysql` folder in the project root, alongside the `nginx` and `src` folders.
2. Under the mysql service in your `docker compose.yml` file, add the following lines:

```
volumes:
  - ./mysql:/var/lib/mysql
```
