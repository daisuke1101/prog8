var height = 1.7;
var weight = 60;

// この下にコードを書いてください
var bmi = weight / height / height;
var best = height * height *22;
console.log("BMIは" + bmi + "です");
console.log("適正体重は" + best + "kgです");

if (bmi < 18.5) {
  console.log("痩せ気味です")
} else if (bmi < 25) {
  console.log("普通です");
} else {
  console.log("肥満気味です");
}