const permintaan = [
  {x: '2011', y:71, monthly:[0, 3 ,2,5,5,3,6,3,9,9,14, 12,]},
  {x: '2012', y:200, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2013', y:52, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2014', y:210, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2015', y:282, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2016', y:2746, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2017', y:1065, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2018', y:474, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2019', y:2136, monthly:[11, 16 ,11,11,13,37,15,19,16,12,27, 12,]},
  {x: '2020', y:2121, monthly:[11, 11 ,16,14,10,15,37,12,19,16,12, 27,]},
  {x: '2021', y:4306, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2022', y:419, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
];
const disetujui = [
  {x: '2011', y:3520, monthly:[0, 3 ,2,5,5,3,6,3,9,9,14, 12,]},
  {x: '2012', y:2562, monthly:[252, 152 ,502,652,10,37,15,157,19,122,150, 27,]},
  {x: '2013', y:5205, monthly:[521, 156 ,545,201,651,50,111,121,121,16,12, 271,]},
  {x: '2014', y:1520, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2015', y:1520, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2016', y:2746, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2017', y:1065, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2018', y:474, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2019', y:2136, monthly:[11, 16 ,11,11,13,37,15,19,16,12,27, 12,]},
  {x: '2020', y:2121, monthly:[11, 11 ,16,14,10,15,37,12,19,16,12, 27,]},
  {x: '2021', y:4306, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2022', y:444, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
];
const ditolak = [
  {x: '2011', y:35, monthly:[0, 3 ,2,5,5,3,6,3,9,9,14, 12,]},
  {x: '2012', y:25, monthly:[252, 152 ,502,652,10,37,15,157,19,122,150, 27,]},
  {x: '2013', y:52, monthly:[521, 156 ,545,201,651,50,111,121,121,16,12, 271,]},
  {x: '2014', y:15, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2015', y:15, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2016', y:27, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2017', y:10, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2018', y:47, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2019', y:21, monthly:[11, 16 ,11,11,13,37,15,19,16,12,27, 12,]},
  {x: '2020', y:21, monthly:[11, 11 ,16,14,10,15,37,12,19,16,12, 27,]},
  {x: '2021', y:43, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2022', y:4, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
];
const keberatan = [
  {x: '2011', y:2, monthly:[0, 3 ,2,5,5,3,6,3,9,9,14, 12,]},
  {x: '2012', y:5, monthly:[252, 152 ,502,652,10,37,15,157,19,122,150, 27,]},
  {x: '2013', y:6, monthly:[521, 156 ,545,201,651,50,111,121,121,16,12, 271,]},
  {x: '2014', y:7, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2015', y:8, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2016', y:1, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2017', y:5, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2018', y:6, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2019', y:7, monthly:[11, 16 ,11,11,13,37,15,19,16,12,27, 12,]},
  {x: '2020', y:9, monthly:[11, 11 ,16,14,10,15,37,12,19,16,12, 27,]},
  {x: '2021', y:10, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
  {x: '2022', y:5, monthly:[11, 16 ,11,11,13,37,15,12,19,16,12, 27,]},
];


const data = {
  // labels: labels,
  datasets: [
    {
      label: "Laporan",
      data: permintaan,
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(255, 159, 64, 0.2)",
        "rgba(255, 205, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(201, 203, 207, 0.2)",
        "rgba(255, 99, 132, 0.2)",
        "rgba(255, 159, 64, 0.2)",
        "rgba(255, 205, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(255, 159, 64, 0.2)",
      ],
      borderColor: [
        "rgb(255, 99, 132)",
        "rgb(255, 159, 64)",
        "rgb(255, 205, 86)",
        "rgb(75, 192, 192)",
        "rgb(54, 162, 235)",
        "rgb(153, 102, 255)",
        "rgb(201, 203, 207)",
        "rgb(255, 99, 132)",
        "rgb(255, 159, 64)",
        "rgb(255, 205, 86)",
        "rgb(75, 192, 192)",
        "rgb(54, 162, 235)",
      ],
      borderWidth: 1,
    },
  ],
};
const config = {
  type: "bar",
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
};
const ctx = document.getElementById("myChart");
const myChart = new Chart(ctx, config);

// chart2
const labels2 = [
  "Jan",
  "Feb",
  "Mar",
  "Apr",
  "Mei",
  "Jun",
  "Jul",
  "Agu",
  "Sep",
  "Okt",
  "Nov",
  "Des",
];

const data2 = {
  labels: labels2,
  datasets: [
    {
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(255, 159, 64, 0.2)",
        "rgba(255, 205, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(201, 203, 207, 0.2)",
        "rgba(255, 99, 132, 0.2)",
        "rgba(255, 159, 64, 0.2)",
        "rgba(255, 205, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(255, 159, 64, 0.2)",
      ],
      borderColor: [
        "rgb(255, 99, 132)",
        "rgb(255, 159, 64)",
        "rgb(255, 205, 86)",
        "rgb(75, 192, 192)",
        "rgb(54, 162, 235)",
        "rgb(153, 102, 255)",
        "rgb(201, 203, 207)",
        "rgb(255, 99, 132)",
        "rgb(255, 159, 64)",
        "rgb(255, 205, 86)",
        "rgb(75, 192, 192)",
        "rgb(54, 162, 235)",
      ],
      borderWidth: 1,
    },
  ],
};
const config2 = {
  type: "bar",
  data: data2,
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
};

const kembali = document.getElementById("kembali");
const ctx2 = document.getElementById("myChart2");
const myChart2 = new Chart(ctx2, config2);


function clickHandler(click) {
  const points = myChart.getElementsAtEventForMode(click, 'nearest', {intersect: true}, true);

  if(points.length == 1){
    const label = points[0].element.$context.raw.x;
    const value = points[0].element.$context.raw.monthly;
    myChart2.config.data.datasets[0].data = value;
    myChart2.config.data.datasets[0].label = label;
    ctx.style.display = "none";
    ctx2.style.display = "block";
    kembali.style.display = "block";
    myChart2.update();
  }
}

kembali.onclick = function kembaliFunc(click) {
  ctx.style.display = "block";
  ctx2.style.display = "none";
  kembali.style.display = "none";
}

ctx.onclick = clickHandler;

const judulInformasi = document.getElementById("judulInformasi");


function updateJenisLaporan(jenis){
  if(jenis.value === "permintaan"){
    judulInformasi.innerHTML = "Statistik Permintaan";
    myChart.config.data.datasets[0].data = permintaan;
    console.log(ctx2.style.display);
    if (ctx2.style.display === "block") {
      ctx2.style.display = "none";
      ctx.style.display = "block";
      kembali.style.display = "none";
    }
  };
  if(jenis.value === "disetujui"){
    judulInformasi.innerHTML = "Statistik Disetujui";
    myChart.config.data.datasets[0].data = disetujui;
    if (ctx2.style.display === "block") {
      ctx2.style.display = "none";
      ctx.style.display = "block";
      kembali.style.display = "none";
    }
  };
  if(jenis.value === "ditolak"){
    judulInformasi.innerHTML = "Statistik Ditolak";
    myChart.config.data.datasets[0].data = ditolak;
    if (ctx2.style.display === "block") {
      ctx2.style.display = "none";
      ctx.style.display = "block";
      kembali.style.display = "none";
    }
  };
  if(jenis.value === "keberatan"){
    judulInformasi.innerHTML = "Statistik Keberatan";
    myChart.config.data.datasets[0].data = keberatan;
    if (ctx2.style.display === "block") {
      ctx2.style.display = "none";
      ctx.style.display = "block";
      kembali.style.display = "none";
    }
  };
  myChart.update();
}