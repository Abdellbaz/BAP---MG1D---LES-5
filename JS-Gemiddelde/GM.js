aantal =0;
samen = 0;
process.argv.splice(0, 2);

for (let i in process.argv) {
samen += Number(i);
aantal++;
}
console.log("\naantal "+aantal);
console.log("samen "+samen);
console.log("gemiddelde "+samen/aantal);
