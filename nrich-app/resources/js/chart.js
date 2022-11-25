"use strict";

import Chart from "chart.js/auto";

const canvas_place = document.getElementById("atmospheres-chart");

var myRadar = new Chart(canvas_place, {
    type: "radar", // チャートのタイプ
    data: {
        // チャートの内容
        labels: ["真剣さ", "仲の良さ", "経験値", "自由度"],

        datasets: [
            {
                // label: false,
                // lineTension: 0, // ベジェ曲線を無効化
                data: [seriousness, relationship, experience, freedom],
                backgroundColor: "rgba(4, 186, 243, 0.5)",
                borderColor: "rgb(4, 186, 243)",
                borderWidth: 1,
                pointBackgroundColor: "rgba(4, 186, 243, 0.5)",
            },
        ],
    },
    options: {
        scales: {
            r: {
                beginAtZero: true,
                min: 0,
                max: 5,
                ticks: {
                    stepSize: 1,
                },
            },
        },
        plugins: {
            legend: {
                display: false,
            },
            datalabels: {
                display: false,
            },
        },
    },
});
