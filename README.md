# 2022 CAS Hacktuary Challenge
 
View the finished project at [stringtech.org](https://stringtech.org/)

* Graphed frequency trends; took the 10yr, 5yr, and 3yr trend lines for projected future rates and used actuarial judgement to determine best fit. 
* I wasn't able to find much data for bodily injury or vehicle damage expenses, so I made stuff up -er- made well reasoned assumptions. 
* Plugged everything into the basic ratemaking formula then bah-duh-bing! Magic. 
* The frequency rates are editable in the admin tab, this enables back-office to update based on most recent analysis without having to dig through code. 

As far as technical hosting and implementation, we used a simple LAMP stack approach. 
* Self hosted linux box running apache web server 
* MySQL backend containerized with docker to handle user sign in and frequency storage.
* Bootstrap 5 for formatting.
