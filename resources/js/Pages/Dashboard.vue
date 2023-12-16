<template>
  <div>
    <Head title="Dashboard" />

    <AuthenticatedLayout class="auth">
      <div class="flex justify-center dark:border-gray-700 mt-14 bg-blue-400">
        <!-- First pie chart -->
        <div style="width: 50%; margin:0 100px 0 350px;">
          <canvas ref="chart1"></canvas>
        </div>

        <!-- Second chart -->
        <div style="width: 50%; margin:150px 0 0 -100px;">
          <canvas ref="chart2"></canvas>
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

<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';
import Chart from 'chart.js/auto';

export default {
  components: {
    AuthenticatedLayout,
    Head
  },
  setup() {
    const chart1 = ref(null);
    const chart2 = ref(null);

    onMounted(async () => {
      const xValues = ["Deluxe", "First Class", "Luxury", "Super Deluxe"];
      const yValues1 = [20, 35, 10, 15];
      const yValues2 = [20, 35, 10, 15];
      const barColors = ["#b91d47", "#00aba9", "#2b5797", "#e8c3b9"];

      // First pie chart
      const ctx1 = chart1.value.getContext('2d');
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

      // Second bar chart
      const ctx2 = chart2.value.getContext('2d');
      new Chart(ctx2, {
        type: 'bar',
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

    return { chart1, chart2 };
  }
};
</script>

<style>
.auth{
  padding: 10px;
}
</style>
