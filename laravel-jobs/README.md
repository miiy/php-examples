.env

```text
QUEUE_CONNECTION=redis
```

supervisor

```conf
[program:laravel-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/html/artisan queue:work --tries=3 --sleep=3
directory=/var/www/html
autostart=true
autorestart=true
user=root
numprocs=2
redirect_stderr=true
stdout_logfile=/var/www/html/storage/logs/worker.log
```

```conf
[program:laravel-message-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/html/artisan queue:work --queue=message --sleep=1 --tries=3 --timeout=7200
autostart=true
autorestart=true
user=root
numprocs=2
redirect_stderr=true
stdout_logfile=/var/www/html/storage/logs/message.log
```