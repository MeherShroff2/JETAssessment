# JETAssessment

##This program retrieves and displays restaurant data with the UK API provided by Just Eats

For the first ten restaurants, the following is displayed from their data:
- Name
- Cuisines
- Rating (number format)
- Address

##Guide on build and run
- PHP 7+ must be installed

##Interface screenshot
This is the interface displaying the requested restaurants data
[Interface_preview.png]

##To run the program:
1. Clone the repository from https://github.com/MeherShroff2/JETAssessment.git
2. Open a terminal in the project folder
3. Run: 'php -S localhost:8000'
4. Visit: [http://localhost:8000]

#Assumptions made
- The postcode 'EC4M7RF' was used in this case as instructed
- If the rating is missing then the program shows "N/A" 

#Future improvements
- Filtering option could be added
- Dynamic postcode searching could also be added