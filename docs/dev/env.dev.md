# Development environment setup

*Notice: * This is for setup dev environment manually. You don't need to do this if using docker.

## Web server setup

### DB setup

1. Create PostgreSQL database
  * On Windows, open PostgreSQL shell
    ```shell
    psql -U postgres
    ```
  * Run SQL command
    ```SQL
    CREATE USER project_term_user WITH PASSWORD 'project_term_password';

    CREATE DATABASE project_term;
    GRANT ALL PRIVILEGES ON DATABASE project_term TO project_term_user;

    \q # quit
    ```
2. Drop database
  ```SQL
  DROP DATABASE IF EXISTS project_term;
  ```

3. Another backup and restore
  ```SQL
  pg_dump -U postgres --clean -Fp project_term > project_term.sql
  psql -f project_term.sql project_term postgres
  ```
3. Zip
  ```shell
  zip -r mail.zip mail
  ```
3. Dump database
  * On Linux
    ```SQL
    sudo -u postgres pg_dump -Fc "project_term" > project_term.pg_dump
    ```

  * On Windows
    ```SQL
    pg_dump -U postgres -Fc "project_term" > project_term.pg_dump
    ```

4. Restore from DB dump
  * On Linux
    ```SQL
    ```

  * On Windows
    ```SQL
    pg_restore -U postgres --clean -d project_term project_term.pg_dump
    ```
