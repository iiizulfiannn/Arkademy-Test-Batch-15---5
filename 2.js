// Pada sebuah form, terdapat 2 buah field yaitu: username dan password. Buatlah method/function untuk memvalidasi field-field tersebut, dengan requirement sebagai berikut:
// ●   	Disarankan menggunakan REGEX
// ●   	Format username: merupakan kombinasi dari huruf kecil dan 2 angka dengan panjang total 5-8 karakter.
//                      Username tidak boleh terdapat huruf besar/karakter special.
//                       Angka harus berada di awal dan akhir username serta memiliki nilai yang sama.
// ●   	Format password: merupakan kombinasi dari huruf kecil, angka dan 1 simbol ‘-’ 
                        // dengan ketentuan banyaknya huruf dan angka harus sama serta panjang total 7-11 karakter
// Clue:
// Peserta hanya diminta membuat function validasi, tidak perlu membuat form HTML.

// Examples:
// -        is_username_valid(‘6andi7’)
// 	return false
// -        is_username_valid(‘1brah1’)
// 	return true
// -        is_password_valid('andi-123')
// 	return false
// -        is_password_valid(‘1-2brah34’)
// 	return true

function is_invalid_Username(username) {
    const regex = /^(\d)([a-z]{3,6})(\1)$/    
    return regex.test(username)
}
console.log(is_invalid_Username('6andi7'));
console.log(is_invalid_Username('1brah1'));

// function is_invalid_Password(password) { 
//     const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!])[A-Za-z\d!]{9}$/     
//     return regex.test(password)
// }

// console.log(is_invalid_Password('Beeth0v3n'))
// console.log(is_invalid_Password('c4rlMax!!'))
