function randomize(n) {
    let arrPrima = [2,3,5,7,11,13,17,19,23,29];
    let arrPrimaNew = [];
    let sum = 0;

    for (let i=0; i<n; i++) {
        let bilRandom = Math.floor(Math.random() * arrPrima.length);
        arrPrimaNew.push(arrPrima[bilRandom]);
        sum += arrPrimaNew[i];        
    }

    console.log('array  : ', arrPrimaNew);
    console.log('sum    : ', sum);    
}