

## Showtimes Application

#### Browse for movie listings at various cinemas across Lagos with the times.
#### About 3 movies and 3 cinemas have been added to their respective tables, while some sample movie listings against cinemas have also been created. 
### To answer the questions:

#### 1. Respository Pattern: I created an interface (ShowTimesInterface) under App > Interfaces.. created a repository (ShowTimesRepository) that would invoke the interface under App > Repositories ... then bound the interface to the repository together in a file under Providers > RepositoryServiceProvider. The Controller (MovieController) was then setup to implement all methods from the interface defined 

#### 2. The ORM relationship between the entities(cinemas, movies,showtimes) are defined and shown in the models created under App > Models which are Cinemas, Movies, and ShowTimes. Also the foreign keys to establish these relations were defined in the database migrations.

	 
#### Live link: http://showtime-app.000webhostapp.com/cinemas

#### Logged-in Users can make create new movie listings, view details, update and delete movie listings.




