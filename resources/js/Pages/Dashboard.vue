<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import Chart from 'chart.js/auto';

const { chartData } = $page.props; // Assuming you're using Vue 3 + Composition API

const xValues = chartData.xValues;
const yValues1 = chartData.yValues1;
const yValues2 = chartData.yValues2 || []; // Use an empty array as a fallback
const barColors = ["#b91d47", "#00aba9", "#2b5797", "#e8c3b9"];

onMounted(() => {
  const ctx1 = document.getElementById('myChart1').getContext('2d');
  new Chart(ctx1, {
    type: 'pie',
    data: {
      labels: xValues,
      datasets: [
        {
          backgroundColor: barColors,
          data: yValues1,
        },
      ],
    },
    options: {
      plugins: {
        title: {
          display: true,
          text: 'Bus Type',
        },
      },
    },
  });

  const ctx2 = document.getElementById('myChart2').getContext('2d');
  new Chart(ctx2, {
    type: 'bar', // Change the chart type if needed
    data: {
      labels: xValues,
      datasets: [
        {
          backgroundColor: barColors,
          data: yValues2,
        },
      ],
    },
    options: {
      plugins: {
        title: {
          display: true,
          text: 'Bus Capacity',
        },
      },
    },
  });
});
</script>

<template>
  <div>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
      <div class="flex justify-between p-2 dark:border-gray-700 mt-14 bg-blue-400">
        <!-- First pie chart -->
        <div style="width: 25%;">
          <canvas id="myChart1" style="width: 50%; height: 400px;"></canvas>
        </div>

        <!-- Second chart (replace 'bar' with the desired chart type) -->
        <div style="width: 65%;">
          <canvas id="myChart2" style="width: 50%; height: 200px;"></canvas>
        </div>
      </div>

      <div style="margin-top: 20px;">
        <iframe
          src="https://maps.google.com/maps?q=Technological+Institute+of+the+Philippines%20Dates%20Products&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
          width="1600"
          height="500"
          allowfullscreen
        ></iframe>
      </div>
    </AuthenticatedLayout>
  </div>
</template>
