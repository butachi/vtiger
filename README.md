Install Vtiger CMS use Docker



docker network create vtiger-network

docker build -t vtiger:0.1 -f src/Dockerfile --build-arg user=butachi --build-arg uid=1000 .

1. webserver service: it's a php:8.3.11-apache image
```
docker run -d --name vtiger --network vtiger-network -v ./src:/usr/src -p 80:80 vtiger:0.1

```

2. mysql service. it's mysql:8.4.2 image
```
docker run -p 3307:3306 --name db-vtiger --network vtiger-network -v ./mysqldata:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=root -d mysql:8.4.2
```


