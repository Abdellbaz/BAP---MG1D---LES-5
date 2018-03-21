aantal =0;
totaal = 0;
process.argv.splice(0, 2);

for (let i of process.argv) {
totaal += Number(i);
aantal++;
}
console.log("\naantal "+aantal);
console.log("totaal "+totaal);
console.log("gemiddelde "+totaal/aantal);
