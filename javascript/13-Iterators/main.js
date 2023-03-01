// ---------------------------
// Iterator Methods
// ---------------------------
// We have pulled a bunch of information from an external source and we want to
// get specific information and display the new information to the user.
// This exercise is all about Iterating through the array and extracting information.

var actors=[
	{name:"Katharine Hepburn",yearBorn:"1907",yearPassed:"2003",credits:"52"},
	{name:"Jack Nicholson",yearBorn:"1937",yearPassed:"",credits:"75"},
	{name:"Laurence Olivier",yearBorn:"1907",yearPassed:"1989",credits:"88"},
	{name:"Meryl Streep",yearBorn:"1949",yearPassed:"",credits:"79"},
	{name:"Humphrey Bogart",yearBorn:"1899",yearPassed:"1957",credits:"85"},
	{name:"Audrey Hepburn",yearBorn:"1929",yearPassed:"1993",credits:"55"},
	{name:"Robert DeNiro",yearBorn:"1943",yearPassed:"",credits:"133"},
	{name:"Bette Davis",yearBorn:"1908",yearPassed:"1989",credits:"124"},
	{name:"Cary Grant",yearBorn:"1904",yearPassed:"1968",credits:"76"},
	{name:"Marlon Brando",yearBorn:"1924",yearPassed:"2004",credits:"46"},
	{name:"James Stewart",yearBorn:"1908",yearPassed:"1997",credits:"98"},
	{name:"Ingrid Bergman",yearBorn:"1915",yearPassed:"1982",credits:"53"},
	{name:"Marilyn Monroe",yearBorn:"1926",yearPassed:"1962",credits:"56"},
	{name:"Al Pacino",yearBorn:"1940",yearPassed:"",credits:"56"},
	{name:"Grace Kelly",yearBorn:"1929",yearPassed:"1982",credits:"30"},
	{name:"Orson Welles",yearBorn:"1915",yearPassed:"1985",credits:"122"},
	{name:"Sidney Poitier",yearBorn:"1927",yearPassed:"",credits:"54"},
	{name:"Paul Newman",yearBorn:"1925",yearPassed:"2008",credits:"83"},
	{name:"Charles Chaplin",yearBorn:"1889",yearPassed:"1977",credits:"88"},
	{name:"Tom Hanks",yearBorn:"1956",yearPassed:"",credits:"50"},
	{name:"Denzel Washington",yearBorn:"1954",yearPassed:"",credits:"56"},
	{name:"Daniel Day-Lewis",yearBorn:"1957",yearPassed:"",credits:"29"},
	{name:"Julia Roberts",yearBorn:"1967",yearPassed:"",credits:"57"},
	{name:"Morgan Freeman",yearBorn:"1937",yearPassed:"",credits:"65"},
	{name:"Kevin Spacey",yearBorn:"1959",yearPassed:"",credits:"82"},
	{name:"Clint Eastwood",yearBorn:"1930",yearPassed:"",credits:"68"},
	{name:"Ralph Fiennes",yearBorn:"1962",yearPassed:"",credits:"66"},
	{name:"Will Smith",yearBorn:"1968",yearPassed:"",credits:"37"},
	{name:"Johny Depp",yearBorn:"1963",yearPassed:"",credits:"85"},
	{name:"Brad Pitt",yearBorn:"1963",yearPassed:"",credits:"75"},
	{name:"Leonardo DiCaprio",yearBorn:"1974",yearPassed:"",credits:"39"},
	{name:"Dwayne Johnson",yearBorn:"1972",yearPassed:"",credits:"93"}
];	


for(var i = 0; i < actors.length; i++){
	if(actors[i].credits > 65){
		console.log(actors[i].name);
	}
}

for(var i = 0; i < actors.length; i++){
	if(actors[i].yearBorn < 1950){
		console.log(actors[i].name)
	}
}

for(var i = 0; i < actors.length; i++){
	if(actors[i].name.length > 12){
		console.log(actors[i].name)
	}
}

var total = 0;
for(var i = 0; i < actors.length; i++){
	total += Number(actors[i].credits);
	console.log(total);
}

var actorName = ""
for(var i = 0; i < actors.length; i++){
	actorName += "<ul>";
	actorName += "<li>" + actors[i].name + "</li>";
	actorName += "</ul>";
}
document.querySelector('.col-xs-12').innerHTML = actorName
////////////////////////////////////////////////////////
// 1. Console.log() a list of all the actors who have more than 65 credits to their name

////////////////////////////////////////////////////////
// 2. Console.log() a list of all the actors born before 1950

////////////////////////////////////////////////////////
// 3. Console.log() a list of actors whose names are greater than 12 characters in length

////////////////////////////////////////////////////////
// 4. Console.log() the total number of combined credits for all actors.

////////////////////////////////////////////////////////
// 5. Display each actor on the screen in an unordered list.

