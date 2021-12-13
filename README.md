### laravel-queue-practice

- env_setting: DB_DATABASE=queue

- process all jobs as they came through:
- php artisan queue:listen

- process the first job in the queue:
- php artisan queue:work



- route: {url}/jobs/dispatch/{time}
