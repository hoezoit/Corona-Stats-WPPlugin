# Corona-Stats-WPPlugin
A Wordpress Plugin that displays realtime Corona (COVID-19) statistics through a simple shortcode



### You can use the following shortcodes to display realtime corona statistics data:

**[coronastats]** : Get the current global infected count

**[coronastats type='deaths']** : Get the global data you specify

**[coronastats country='BE' type='cases']** : Specify a country and what data you want to see

**[coronastats country='BE' type='cases' style='font-size:50px; color: red;' animated='YES']** : Specify a country and what data you want to see, apply style and animation to the result

## Example Of Use:

You can see the shortcode in action on our website: [Corona in Vlaanderen](https://corona.vlaanderen)

### How To Use Shortcode:

You want to see the global infected count:

```
[coronastats]
```

You want to see the global recovery count:

```
[coronastats type='recovery']
```

You want to see the critical count in the USA:

```
[coronastats country='US' type='critical'] 
```

You want to see the infected count in Belgium and display the text in red color:

```
[coronastats country='BE' type='cases' style='color: red;'] 
```

You want to see the deaths per million count in France, style the text and animate on show:

```
[coronastats country='FR' type='deathsPerOneMillion' style='font-size:50px;' animated='YES']
```

## Possible Types To Use:

* 'cases'	=>	Total number of cases for the country
* 'todayCases'	=>	Current new cases on todays date
* 'deaths'	=>	Total number of deaths for the country
* 'todayDeaths'	=>	Total number of cases for the country
* 'recovered'	=>	Total number of recoveries for the country
* 'active'	=>	Total number of active for the country
* 'critical'	=>	Total number of critical for the country
* 'casesPerOneMillion'	=>	Total number of cases per million for the country
* 'deathsPerOneMillion'	=>	Total number of deaths per million for the country

## API Source

The data that is used in this plugin comes from NovelCOVID on GitHub. This is a very trustworthy source, that updates the API data as soon as new information is availble. [NovelCOVID GitHub Page](https://github.com/novelcovid/api)

## Data Source

The source of the data is from [worldometers.info](https://worldometers.info/) 
