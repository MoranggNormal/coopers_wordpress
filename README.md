 # To-do List | Coopers Digital

This project was created based on the [Cooper's Front End Test](https://github.com/CoopersDigitalProduction/front-end-test?tab=readme-ov-file)

Currently can be accessed at: [coopers.epeixoto.dev](https://coopers.epeixoto.dev)

Credencials for Admin Panel will be shared with the Cooper evaluators via private chat

Features includes:

```diff
+ Front-end development of the provided layout ensuring responsivity across major browsers (Chrome, Safari, Firefox, and Microsoft Edge)

+ Implemented a fully dynamic custom theme starting from Underscores

+ Use mobile-first responsive design that adapts to various screen sizes using SASS

+ Integrates the ACF plugin to create and manage custom fields, enhancing flexibility in data presentation

+ Carousel implementation for the "good things" section with horizontal navigation between cards

```

Technologies utilized are:

```diff
+ PHP
+ Javascript
+ SASS
+ Wordpress
+ JQuery
+ MySQL 
+ Docker and Docker Compose
+ AWS
```

### Setup on your machine

If you are on Linux/Wsl, all you have to do is to set the enviroment variables then open the terminal and type:

```shell
$ make build_dev
$ make restore_dev
```

Now your app should be running on localhost:8080

For other OS users, it may be not enough and you may have a bit more work. I can not give support at the moment.

---

## Customizing

### Adding new plans

-  Go for wp-admin dashboard and find [ACF Plugin](https://coopers.epeixoto.dev/wp-admin/edit.php?post_type=acf-field-group) in the menu.
-  Select `Plans List` and edit `Plans` field.
-  You'll see that we already have **Basic Plan** and **Pro Plan**, which are group fields.
-  To add any other, you can simply duplicate on of them and edit `Field Label` and `Field Name` with its identification.
-  Now you note that we still have other group field below, which are `Subfields`.
-  There you'll edit **Pricing**, **Title** and **Subtitle** for the new field.
-  If you save and go for the [Home Page](https://coopers.epeixoto.dev), you'll see that we now have a new Plan:
-  ![image](https://github.com/user-attachments/assets/74a38c3b-aee9-4490-8315-543f3e026fb6)

### Adding new Features to Plans
-  Go for wp-admin dashboard and find [ACF Plugin](https://coopers.epeixoto.dev/wp-admin/edit.php?post_type=acf-field-group) in the menu.
-  Select `Plans List` and edit `Plans Items` field.
-  To add any other, you can simply duplicate on of them and edit `Field Label`, `Field Name` and `Default Value` for the `Text` Field and `Field Label`, `Field Name` and `Choices` for the `Available for` Field.

# Choices:
-  Choices items **must** match with Plans Field name'
-  Example, for **Basic Plan** and **Pro Plan** we set it as:
 ```
  basic : Basic

  pro : Pro
  ```
- If we have created a Plan named **Empresarial Plan**, it now should be:

```diff
basic : Basic

pro : Pro

+ empresarial : Empresarial
```

-  For default value, just set `empresarial` on a new line on the textarea.
-  You can now save the changes.
-  Finally, if you want to see the new feature, just go to the [Home Page](https://coopers.epeixoto.dev) again:
-  ![image](https://github.com/user-attachments/assets/4fd91a0d-56b0-406d-8700-4c82ff7d1bf5)

- For editing Default values without changing from ACF settings, go for the [Pages](https://coopers.epeixoto.dev/wp-admin/edit.php?post_type=page) in wp-admin and edit `Home`.
- Scroll to bottom and you'll see many inputs where we can make changes:
- ![image](https://github.com/user-attachments/assets/73505704-4fa5-47b0-92c7-77044931df90)






