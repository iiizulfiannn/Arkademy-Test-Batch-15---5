function sequence(n) {
    let arr = [];    
    if (/^\d+$/.test(n) === true) {
        arr.push(n);
        let i = 0;
        while (i<=100) {
            if (n === 1) {
                break;
            } else if (n % 2 === 0) {
                n = n/2;
                arr.push(n);
            } else if (n % 2 === 1) {
                n = 3*n+1;
                arr.push(n);
            }
            i++;
        }
        console.log('array: ', arr);
        console.log('count: ', arr.length);
    } else {
        console.log('Bilangan harus bilangan positif');        
    }
};

sequence(13);
sequence(3);
sequence(-9);


