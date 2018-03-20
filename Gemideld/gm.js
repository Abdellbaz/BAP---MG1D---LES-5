var devMode = process.argv;

var totaal = 0;
var nummers = 0;



for (i = 2; i< devMode.length; i++){
  nummers++;
  totaal += Number(devMode[i]);
}

var gemideld = totaal / nummers;

console.log(gemideld);
