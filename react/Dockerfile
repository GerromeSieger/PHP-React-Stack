FROM node:18.13.0-alpine as build

WORKDIR /app

COPY package.json ./

COPY package-lock.json ./

RUN npm install

COPY . /app

RUN npm run build 

EXPOSE 3000

CMD ["npm", "run", "dev"]

#FROM nginx:stable-alpine

#COPY --from=build /app/build /usr/share/nginx/html

#COPY --from=build /app /usr/share/nginx/html

#COPY default.conf /etc/nginx/conf.d/default.conf