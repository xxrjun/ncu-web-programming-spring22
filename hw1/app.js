const handleClick = () => {
  let magicText = document.getElementById("magic").innerHTML;
  console.log(magicText);
  if (magicText === "") {
    let text =
      "Personal Infomation: 資管系二 A<br/>Personal Infomation:  109403019<br/>Personal Infomation:  鄒翔宇";

    document.getElementById("magic").innerHTML = text;
  } else {
    document.getElementById("magic").innerHTML = "";
  }
};
