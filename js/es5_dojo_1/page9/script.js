var scores = [88, 62, 65, 21, 47, 92, 57, 89, 79, 89, 54, 82, 69, 72, 74, 54, 66, 92, 64, 96, 47, 89, 95, 93, 70, 30, 84, 93, 81, 98, 78, 96, 32, 56, 64, 42, 67];

// この下にコードを書いてください
var sum = 0;
var best = 0;
for (var i = 0; i < scores.length; i++) {
  sum += scores[i];
  if (best < scores[i]) {
    best = scores[i];
  }
}
var avg = sum / scores.length;
console.log("平均点は" + avg + "点です");
console.log("最高点は" + best + "点です");