// Array
const kelas = ['A', 'B', 'C'];

const [senin, rabu, kamis] = kelas;
console.log(`Kelas hari senin itu kelas: ${senin}`);
console.log(`Kelas hari rabu itu kelas: ${rabu}`);
console.log(`Kelas hari kamis itu kelas: ${kamis}`);

// Object
// const mhs = {
//   nama: 'Budi',
//   umur: 22
// };

// const { nama, umur } = mhs;
// console.log(`Nama mahasiswa: ${nama}`);
// console.log(`Umur mahasiswa: ${umur} tahun`);

// Destructuring object dan assign ke variabel baru
const mhs = {
  nama: 'Budi',
    umur: 22
};

const { nama: n, umur: u } = mhs;
console.log(`Nama mahasiswa: ${n}`);
console.log(`Umur mahasiswa: ${u} tahun`);

