# Вебсайт для 4 модуля "Web" стажировки "PT_START"
## Описание
Этот репозиторий содержит веб-сайт, которое можно развернуть с использованием Docker.
## Установка и запуск
Для развёртывания приложения выполните следующие шаги:
1. Клонируйте репозиторий
```
git clone https://github.com/RybiyGlaz/my-_first_website
cd my-_first_website
```
2. Соберите Docker-образ:
```
docker build -t my-_first_website .
```
3. Запустите контейнер
```
docker run -d -p 8080:80 --name my-_first_website my-_first_website
```
4 Вебсайт будет доступен по адресу:
http://localhost:8080
