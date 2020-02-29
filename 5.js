function triangle() {
    let n = prompt('Masukan angka');
    for (let i=n; i>=1; i--) {
        for (let j=1; j<i; j++) {
            document.write('&nbsp');
        }
        for (let k=n; k>=i; k--) {
            document.write('*');
        }
        document.write('</br>')
    }
}