# Scenario

- Clone project `git clone git@github.com:gogolinsky/buttons.git buttons`.
- Install composer packages: `composer install`.
- Init dev environment: `./init`, choose `development – 0`.
- Create databases: `touch databases/sqlite.db && touch databases/sqlite-test.db`
- Init sqlite database: `./yii migrate`.
- Init sqlite test database: `./yii_test migrate `.
- Run server `php -S 127.0.0.1:8080 -t api/web`
- Run tests `cd api && ../vendor/codeception/base/codecept run api`
- Send GET request with Postman `GET http://127.0.0.1:8080/api/v1/buttons`. Result:
    ```
    [
        {
            "id": 1,
            "type": "button",
            "value": "Click me"
        },
        {
            "id": 2,
            "type": "submit",
            "value": "Push me"
        },
        {
            "id": 3,
            "type": "reset",
            "value": "Press me"
        }
    ]
    ```