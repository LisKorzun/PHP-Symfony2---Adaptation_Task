Test Task for IT-LAB
========================

Branches:

feature-01  -  "Symfony Installation"

https://github.com/LisKorzun/Symfony4-Test_Lab_PR/pull/1

feature-02  -  "Creating Initial Structure Bundles"

https://github.com/LisKorzun/Symfony4-Test_Lab_PR/pull/2

feature-03  -  "Creating two pages in WebsiteBundle"

https://github.com/LisKorzun/Symfony4-Test_Lab_PR/pull/3

feature-04  -  "Addition a form 'Contact Us', validation and display form data"

https://github.com/LisKorzun/Symfony4-Test_Lab_PR/pull/4

feature-05  -  "Storing data in DB and display data from DB using Knp paginator"

https://github.com/LisKorzun/Symfony4-Test_Lab_PR/pull/5

Used Console Commands:

composer create-project symfony/framework-standard-edition test_lab_pr/

php app/console generate:bundle --namespace=TestLab/CommonBundle --format=yml

php app/console generate:bundle --namespace=TestLab/WebsiteBundle --format=yml

php app/console assets:install web --symlink

php app/console assetic:dump --force

composer update

php app/console doctrine:database:create

php app/console doctrine:migrations:status

php app/console doctrine:migrations:generate

php app/console doctrine:migrations:status --show-versions

php app/console doctrine:migrations:diff


Screenshots  of the Pages:
