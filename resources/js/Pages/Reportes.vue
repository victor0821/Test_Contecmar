<!-- resources/js/Pages/Reportes.vue -->
<template>
  <canvas id="chart"></canvas>
</template>

<script setup>
import { onMounted } from 'vue';
import Chart from 'chart.js/auto';

onMounted(() => {
  new Chart(document.getElementById('chart'), {
    type: 'bar',
    data: { /* Datos de piezas pendientes/fabricadas */ },
  });
});
</script>