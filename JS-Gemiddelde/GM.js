let aantal =0;
let samen = 0;
process.argv.splice(0,2);

for (let i in process.argv) {

aantal++;
samen += Number(process.argv[i]);
}

a="\naantal "+aantal;
s="samen "+samen;
g="gemiddelde "+samen/aantal;

  console.log(a);
  console.log(s);
  console.log(g);

var fs = require('fs');

fs.writeFile('SaveGM.txt',a+"\n"+s+"\n"+g, function (err) {
  if (err) throw err;
  console.log('\nReplaced!');
});
