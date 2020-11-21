const language = 'フランス語';
console.log(language);
console.log(language+'を話せます');

console.log(`ぼくの名前は${name}です`);
console.log(`今は${age}歳です`);

if (level > 10){
  console.log(`${level}が10より大きいです`);
};

console.log("age >= 20");
console.log("age < 20");
if (age>20){
  console.log("私は20歳以上です");
};

if (password === "ninjawanko"){
  console.log('ログインに成功しました');
}else{
  console.log('パスワードが間違っています');
};

if (age >= 20) {
  console.log("私は20歳以上です");
}else if(age >= 10){
  console.log('私は20歳未満ですが、10歳以上です');
}else{
  console.log('私は20歳未満です');
}

if (age >= 20 && age < 30){
  console.log('私は20代です');
}

switch (rank){
  case 1:
    console.log("金メダルです");
    break;
  case 2:
    console.log("銀メダルです！");
    break;
  case 3:
    console.log("銅メダルです！");
    break;

  default:
    console.log("メダルはありません");
    break;
}

let number=0;

let number += 1;
console.log(number);

 number += 1;
console.log(number);
 number += 1;
console.log(number);
 number += 1;
console.log(number);
 number += 1;
console.log(number);
