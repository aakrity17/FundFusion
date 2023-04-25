// add hovered class in selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => item.classList.remove("hovered"));
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// MenuToggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};

// my_chart

var ctx = document.getElementById("myChart").getContext("2d");
var earning = document.getElementById("earning").getContext("2d");

var myChart = new Chart(ctx, {
  type: "polarArea",
  data: {
    labels: ["Facebook", "Youtube", "Amazon"],
    datasets: [
      {
        label: "Traffic Source",
        data: [1200, 1900, 3000],
        backgroundColor: [
          "rgba(255 , 99, 132, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
        ],
      },
    ],
  },
  options: {
    responsive: true,
  },
});

var myChart = new Chart(earning, {
  type: "bar",
  data: {
    labels: [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "Julay",
      "August",
      "September",
      "October",
      "November",
      "December",
    ],
    datasets: [
      {
        label: "Earning",
        data: [
          1200, 1090, 3000, 5400, 1220, 3600, 4800, 4578, 2566, 8545, 4587,
          9000,
        ],
        backgroundColor: [
          "rgba(255, 99, 132, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(153, 102, 255, 1)",
          "rgba(255, 159, 64, 1)",
          "rgba(255, 99, 132, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(153, 102, 255, 1)",
          "rgba(255, 159, 64, 1)",
        ],
      },
    ],
  },
  options: {
    responsive: true,
  },
});
