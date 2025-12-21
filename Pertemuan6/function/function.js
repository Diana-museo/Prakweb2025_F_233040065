function volumeDuaKubus(a, b) {
    var volumeA = a * a * a;
    var volumeB = b * b * b;
    return volumeA + volumeB;
}

console.log(volumeDuaKubus(2, 3)); // Output: 35
console.log(volumeDuaKubus(4, 5)); // Output: 189