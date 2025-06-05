<template>
  <form @submit.prevent="submit">
    <!-- Lista desplegable de proyectos (RB-C) -->
    <select v-model="form.proyecto_id" @change="cargarBloques">
      <option v-for="proyecto in proyectos" :value="proyecto.id">
        {{ proyecto.nombre }}
      </option>
    </select>

    <!-- Lista anidada de bloques (RB-C) -->
    <select v-model="form.bloque_id" @change="cargarPiezas">
      <option v-for="bloque in bloques" :value="bloque.id">
        {{ bloque.nombre }}
      </option>
    </select>

    <!-- Peso teórico auto-calculado (RB-D) -->
    <input type="number" v-model="form.peso_real" @input="calcularDiferencia">
    <span>Diferencia: {{ diferenciaPeso }}</span>

    <button type="submit">Guardar</button>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  proyecto_id: null,
  bloque_id: null,
  pieza_id: null,
  peso_real: null,
});

const calcularDiferencia = () => {
  // Lógica para RB-G (diferencia entre pesos)
};
</script>