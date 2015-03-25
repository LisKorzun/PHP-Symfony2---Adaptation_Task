Test Task for IT-LAB
========================

Branches:

feature-01  -  "Symfony Installation"

https://github.com/LisKorzun/Symfony4-Test_Lab_PR/pull/1

feature-02  -  "Creating Initial Structure Bundles"

https://github.com/LisKorzun/Symfony4-Test_Lab_PR/pull/2

feature-03  -  "Creating ContactBundle with two pages"

Used Console Commands:

composer create-project symfony/framework-standard-edition test_lab_pr/

php app/console generate:bundle --namespace=TestLab/CommonBundle --format=yml

php app/console generate:bundle --namespace=TestLab/WebsiteBundle --format=yml

php app/console generate:bundle --namespace=TestLab/ContactBundle --format=yml

php app/console assets:install web --symlink

Screenshots  of the Pages:
