// import data from "data/guest.json" assert { type: "json" };

// items = data.msg; //json에 있는 items만 받아오기

// items.forEach((element, i) => {
//   //foreach 배열의 개수만큼 반복문을 돌려라
//   let html = "";

//   console.log(element); //element에는 하나 하나의 배열이 담아져 있음
//   //   html += `<li>
//   //                 이름: ${element.이름}<br>
//   //                 나이: ${element.나이}
//   //             </li>`;
//   let writer = element.writer;
//   let content = element.content;

//   html += mkDiv(i, writer, content);
// });
// $(".list").html(html); //화면에 출력

// fetch("data/guest.json") //json파일 읽어오기
//   .then((res) => {
//     res.setHeader("Access-Control-Allow-Origin", "*");
//     let json = res.json();
//     data = json.msg; //json에 있는 items만 받아오기

//     data.forEach((element, i) => {
//       //foreach 배열의 개수만큼 반복문을 돌려라
//       let html = "";

//       console.log(element); //element에는 하나 하나의 배열이 담아져 있음
//       //   html += `<li>
//       //                 이름: ${element.이름}<br>
//       //                 나이: ${element.나이}
//       //             </li>`;
//       let writer = element.writer;
//       let content = element.content;

//       html += mkDiv(i, writer, content);
//     });
//     $(".list").html(html); //화면에 출력
//   });

let html = "";
for (let i = 0; i < localStorage.length; i++) {
  html += localStorage.getItem(i);
}
$(".list").html(html);

let cnt = 0;
function a() {
  let writer = f.writer.value;
  let content = f.content.value;

  let el = mkDiv(cnt, writer, content);
  localStorage.setItem(cnt, el);
  //   let list = document.getElementById("list");
  //   list.appendChild(el);
}

function mkDiv(writer, content) {
  let newDiv = document.createElement("div");
  newDiv.id = "d_" + cnt++;
  let n = "first";
  if (cnt % 2 == 1) {
    n = "second";
  }
  newDiv.classList.add("col-lg-4");
  newDiv.classList.add("col-md-6");
  newDiv.classList.add("mb-4");
  newDiv.classList.add("portfolio-item");
  newDiv.classList.add(n);

  let html = "";
  html +=
    '<div class="position-relative mb-2 w-100"><div class="bg-secondary text-center p-4">';
  html += '<h4 class="mb-3">' + writer + "</h4>";
  html += '<p class="text-uppercase">' + content + "</p>";
  html += "</div></div>";

  newDiv.innerHTML = html;
  return newDiv;
}
