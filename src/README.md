### Getting started
1. Install docker

2. Install Sail into existing application
    ```shell
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
    ```

3. Check if sail alias is configured by running command:
    ```shell
    which sail
    ```
   If command is not found run:
    ```shell
    alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
    ```

4. Create `.env` file in `/` directory

5. Start the application:
    ```shell
    sail up
    ```
   info: make sure to shut down processes that could occupy specific ports

6. Migrate the database:
    ```shell
    sail artisan migrate
    ```

7. Seed the database
    ```shell
    sail artisan db:seed
    ```

For more information [visit laravel sail docs](https://laravel.com/docs/11.x/sail)
