# Використовуємо офіційний образ Node.js для побудови React додатку
FROM node:16-alpine

# Встановлюємо робочу директорію
WORKDIR /app

# Копіюємо package.json і package-lock.json для встановлення залежностей
COPY ./app/package*.json ./

# Встановлюємо залежності
RUN npm install

# Копіюємо весь проект
COPY ./app .

# Збираємо React додаток для продакшну
RUN npm run build

# Встановлюємо сервер для статичних файлів (наприклад, serve)
RUN npm install -g serve

# Виставляємо порт 3000
EXPOSE 3000

# Запускаємо додаток на сервері
CMD ["serve", "-s", "build", "-l", "3000"]